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

        // https://chrome.google.com/webstore/detail/json-formatter/bcjindcccaagfpapjjmafapmmgkkhgoa/related?hl=es
        // add a JSON formatter module to the browser
        // use CTRL + CLICK on class to inspect methods available from AbstracController
        return $this->json($song);
    }


}