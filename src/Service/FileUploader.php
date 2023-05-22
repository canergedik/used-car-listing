<?php

namespace App\Service;

use Exception;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploader {

    public $filesPath;
    private $slugger;

    public function __construct(SluggerInterface $sluggerInterface){

        $this->slugger = $sluggerInterface;
        //$this->targetDirectory = $targetDirectory;

    }

    public function upload($filesPath,UploadedFile $file){
        $originalName = pathinfo($file->getClientOriginalName(),PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalName);
        $fileName = $safeFilename . '-' .uniqid(). '.'. $file->guessExtension();
        try{
             $file->move($filesPath,$fileName);
        }
        catch (Exception $e){

        }
        return $fileName;
    }


}