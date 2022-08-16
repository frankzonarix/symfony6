<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\U;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response  {

        /* Making it multidimensional */
        $tracks = [
            ['artist' => 'Iron Maiden', 'song' => 'The Clairvoyant'],
            ['artist' => 'Blind Guardian', 'song' => 'The Bard\'s song'],
            ['artist' => 'Metallica', 'song' => 'Seek and Destroy'],
            ['artist' => 'Slayer', 'song' => 'South of Heaven'],
            ['artist' => 'Morgana Lefay', 'song' => 'The Boon he gives']
    ];




        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks,
        ]);
    }




    #[Route('/browse/{genre}/{year}')]
    public function browse(string $genre = null, $year = null): Response
    {
        // make it look more fancy
        //$title = str_replace('-',' ', $genre);
        if ($genre) {
            $title = u(str_replace('-',' ', $genre))->title(true) . ' ' . $year;
        } else {
            $title = 'All Genres';
        }


        return new Response('Genre: ' . $title);
    }
}