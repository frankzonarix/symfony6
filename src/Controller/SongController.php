<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;

class SongController extends AbstractController {
//Note argument without '' in curly braces
    #[Route('/api/songs/{id}')]
    public function getSong($id): Response {
        dd($id);
    }


}