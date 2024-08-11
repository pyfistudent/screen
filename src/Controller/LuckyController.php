<?php
 namespace App\Controller;

 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\Routing\Annotation\Route;
 use Symfony\Component\HttpFoundation\Response;

 class LuckyController extends AbstractController
 {
 #[Route('/c')]
# public function number() : Response
# {
#return new Response(rand(0,100));
#}
public function makeMeHappy() : Response
 {
$number=rand(0,100);
return $this->render('base.html.twig',[
  'number'=>$number,
]);
}
 }
