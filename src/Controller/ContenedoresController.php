<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContenedoresController extends AbstractController {
  /**
  * @Route("/")
  */
  public function homepage() {
    return new Response ('merda');

  }
  /**
  * @Route("/listar/{slug}")
  */
  public function show($slug) {
    $comentarios= ['caca', 'popo', 'pedo', '         pis pis                '];
    return $this-> render('contenedores/listar.html.twig', 
    ['title' => $slug, 'comentarios'=>$comentarios ]);

  }
}
?>
