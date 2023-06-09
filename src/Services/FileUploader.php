<?php
namespace App\Services;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader {

    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param mixed $file
     * @return string
     */
    public function uploadFile(UploadedFile $file): string
    {
        $filename = md5(uniqid()) . '.' . $file->guessClientExtension();
        $file->move(
            $this->container->getParameter('uploads_dir'),
            $filename
        );
        return $filename;
    }
    
    
}