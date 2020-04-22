<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class ContenedoresController {
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
    return new Response (sprintf('Pag "%s"' , $slug));

  }
}
?>
