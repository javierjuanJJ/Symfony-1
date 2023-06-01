<?php

namespace App\Services;
use App\Services\FileUploader;
class Notification
{
    private $email;
    private FileUploader $fileUploader;
    public function __construct($email, FileUploader $fileUploader)
    {
        $this->email=$email;
        $this->fileUploader=$fileUploader;
    }
    public function sendNotification()
    {

    }
}