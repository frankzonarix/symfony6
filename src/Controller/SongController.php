<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class SongController extends AbstractController {
//Note argument without '' in curly braces
    #[Route('/api/songs/{id<\d+>}', methods: ['GET'])]
    //unlike in the tutorial the typehint has to match JsonResponse instead of Response

    //php bin/console debug:autowiring log
    // shows: Psr\Log\LoggerInterface (monolog.logger)
    public function getSong(int $id, LoggerInterface $logger): JsonResponse {
        //dd($id);
        //Example song data
        // TODO should come from database
        $song = [
            'id' => $id,
            'name' => 'Waterfalls',
            'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
        ];

        $logger->info('Returning API response for song {song}', [
            'song' => $id,
        ]);
        // https://chrome.google.com/webstore/detail/json-formatter/bcjindcccaagfpapjjmafapmmgkkhgoa/related?hl=es
        // add a JSON formatter module to the browser
        // use CTRL + CLICK on class to inspect methods available from AbstracController
        return $this->json($song);
    }


}