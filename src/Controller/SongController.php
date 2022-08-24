<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class SongController extends AbstractController {
//Note argument without '' in curly braces
    #[Route('/api/songs/{id}')]
    //unlike in the tutorial the typehint has to match JsonResponse instead of Response
    public function getSong($id): JsonResponse {
        //dd($id);
        //Example song data
        // TODO should come from database
        $song = [
            'id' => $id,
            'name' => 'Waterfalls',
            'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
        ];


        return new JsonResponse($song);
    }


}