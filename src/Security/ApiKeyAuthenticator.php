<?php
namespace App\Security;

use App\Entity\User;
use App\Form\FileUploadFormType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Doctrine\Persistence\ManagerRegistry;





class ApiKeyAuthenticator extends AbstractAuthenticator
{




    private $entityManager;
    public function __construct(ManagerRegistry $managerRegistery)
    {
        $this->entityManager = $managerRegistery;
        
    }




    public function supports(Request $request): ?bool
    {
        $url = "/^\/api\/v1\/user/i";

        return preg_match($url,$request->getPathInfo()) || $request->headers->has('X-AUTH-TOKEN') == true;
    }

    public function authenticate(Request $request): Passport
    {
        $apiToken = $request->headers->get('X-AUTH-TOKEN');
        if (null === $apiToken) {
            // The to  ken header was empty, authentication fails with HTTP Status
            // Code 401 "Unauthrized"
            throw new CustomUserMessageAuthenticationException('No API token provided');
        }

        return new SelfValidatingPassport(new UserBadge($apiToken,function($apiToken){
            $userquery =  $this->entityManager->getManager()->getRepository(User::class);
            $user = $userquery->findOneBy(['api_key'=>$apiToken]);
            if(!$user){
                throw new CustomUserMessageAuthenticationException('User is not found');
            }
            return $user;
        }));
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // on success, let the request continue
        return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $data = [
            // you may want to customize or obfuscate the message first
            'message' => strtr($exception->getMessageKey(), $exception->getMessageData())

            // or to translate this message
            // $this->translator->trans($exception->getMessageKey(), $exception->getMessageDa{ta())
        ];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }
}