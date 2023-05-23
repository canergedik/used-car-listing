<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* member/register.html.twig */
class __TwigTemplate_5afcbf959d6c21eb6359fce3f1a1954a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "member/register.html.twig"));

        // line 1
        echo "
<html>
<head>
\t<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
\t<!--Bootsrap 4 CDN-->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    
    <!--Fontawesome CDN-->
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

     ";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 16
        echo "</head>
<body class=\"bg-secondary\">
<div class=\"container\">
\t<div class=\"d-flex justify-content-center h-100\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3>Sign In</h3>
\t\t\t\t<!-- <div class=\"d-flex justify-content-end social_icon\">
\t\t\t\t\t<span><i class=\"fab fa-facebook-square\"></i></span>
\t\t\t\t\t<span><i class=\"fab fa-google-plus-square\"></i></span>
\t\t\t\t\t<span><i class=\"fab fa-twitter-square\"></i></span>
\t\t\t\t</div> -->
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form method=\"POST\" class=\"register_form\" action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("web_member");
        echo "\">
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'widget', ["class" => "form-control"]);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
\t\t\t\t\t\t</div>

                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "password", [], "any", false, false, false, 43), "password_one", [], "any", false, false, false, 43), 'widget', ["class" => "form-control"]);
        echo "

\t\t\t\t\t\t
\t\t\t\t\t</div>

                    <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
\t\t\t\t\t\t</div>
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "password", [], "any", false, false, false, 52), "password_two", [], "any", false, false, false, 52), 'widget', ["class" => "form-control"]);
        echo "

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"row align-items-center remember\">
\t\t\t\t\t\t<input type=\"checkbox\">Remember Me
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Register\" class=\"btn float-right\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\tDon't have an account?<a href=\"#\">Sign Up</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<a href=\"#\">Forgot your password?</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 14
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "member/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 14,  139 => 13,  104 => 52,  92 => 43,  81 => 35,  73 => 30,  57 => 16,  55 => 13,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<html>
<head>
\t<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
\t<!--Bootsrap 4 CDN-->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    
    <!--Fontawesome CDN-->
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

     {% block css %}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/login.css')}}\">
     {% endblock %}
</head>
<body class=\"bg-secondary\">
<div class=\"container\">
\t<div class=\"d-flex justify-content-center h-100\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3>Sign In</h3>
\t\t\t\t<!-- <div class=\"d-flex justify-content-end social_icon\">
\t\t\t\t\t<span><i class=\"fab fa-facebook-square\"></i></span>
\t\t\t\t\t<span><i class=\"fab fa-google-plus-square\"></i></span>
\t\t\t\t\t<span><i class=\"fab fa-twitter-square\"></i></span>
\t\t\t\t</div> -->
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form method=\"POST\" class=\"register_form\" action=\"{{path('web_member')}}\">
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t {{ form_widget(form.email,{'class':'form-control'} ) }}
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
\t\t\t\t\t\t</div>

                    {{ form_widget(form.password.password_one,{'class':'form-control'} ) }}

\t\t\t\t\t\t
\t\t\t\t\t</div>

                    <div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
\t\t\t\t\t\t</div>
                        {{ form_widget(form.password.password_two,{'class':'form-control'} ) }}

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"row align-items-center remember\">
\t\t\t\t\t\t<input type=\"checkbox\">Remember Me
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Register\" class=\"btn float-right\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\tDon't have an account?<a href=\"#\">Sign Up</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<a href=\"#\">Forgot your password?</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
</body>
</html>", "member/register.html.twig", "C:\\xampp\\htdocs\\used-car-listing\\templates\\member\\register.html.twig");
    }
}
