<?php
// api/src/Controller/CreateMediaObjectAction.php

namespace App\Controller;

use App\Entity\MediaObject;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
// use App\Repository\UserRepository;

final class CreateMediaObjectAction
{
    public function __invoke(Request $request): MediaObject
    {
        $uploadedFile = $request->files->get('file');
        if (!$uploadedFile) {
            throw new BadRequestHttpException('"file" is required');
        }
        $type= (string) $request->request->get('Type');
        // $id_user=(int)$request->request->get('id_user');
        
        // $user=$UserRapository->findOneBy(['id' => $id_user]);
       
       // var_dump($type);
        $mediaObject = new MediaObject();
        $mediaObject->file = $uploadedFile;
         $mediaObject->setType($type);
        //  $mediaObject->setIdMedia($user); 
      
        return $mediaObject;
    }
}