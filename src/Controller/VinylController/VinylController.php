<?php
/**
 * Registers the Vinylcontroller
 *
 *
 **/


namespace App\Controller\VinylController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\U;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;

/**
 * Vinyl Controller
 **/
class VinylController extends AbstractController
{
    /**
     * Creates homepage
     *
     * @return Response
     **/
    #[Route('/', name: 'app_homepage')]
    public function homepage(Environment $twig): Response
    {

        /* Making it multidimensional */
        $tracks = [
            ['artist' => 'Iron Maiden', 'song' => 'The Clairvoyant'],
            ['artist' => 'Blind Guardian', 'song' => 'The Bard\'s song'],
            ['artist' => 'Metallica', 'song' => 'Seek and Destroy'],
            ['artist' => 'Slayer', 'song' => 'South of Heaven'],
            ['artist' => 'Morgana Lefay', 'song' => 'The Boon he gives']
        ];

        $html = $twig->render('vinyl/homepage.html.twig', [
        //return $this->render( //** This only works within a controller, if you are in a
            class where you cannot access $this>render you will have to do it through the twig service */
            'vinyl/homepage.html.twig',
            'title' => 'PB & Jams',
            'tracks' => $tracks,
        ]);
        //dd($html); shows the whole rendered template
        return new Response($html);
    }

    /**
     * Presents general browsing categories of mixed vinyl
     *
     * @return Response
     **/
    #[Route('/browse/{slug}', 'app_browse')]
    public function browse(string $slug = null): Response
    {
        // make it look more fancy
        //$title = str_replace('-',' ', $genre);

        $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true) : null;

        // register genre within twig:
        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre,
        ]);
    }
}