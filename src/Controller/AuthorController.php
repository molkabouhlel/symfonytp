<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }
    #[Route('/showAuthor/{name}',name:'showAuthor')]
    public function showAuthor($name)
    {
        return $this->render('author/show.html.twig',['name'=>$name]);
    }
    #[Route('/showauthorlist',name:'showlist')]
    public function list() {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor_Hugo.jpg','username' => ' Victor
            Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william shakespeare.jpeg','username' => '
            William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' =>
            200 ),
            array('id' => 3, 'picture' => '/images/taha hussein.jpg','username' => ' Taha
            Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),);

            return $this->render('author/list.html.twig',['list'=>$authors]);
    }

    #[Route('/authorDetails/{id}',name:'author_Details')] 
public function authorDetails($id)
{
    $authors = array(
        array('id' => 1, 'picture' => '/images/Victor_Hugo.jpg','username' => ' Victor
        Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
        array('id' => 2, 'picture' => '/images/william shakespeare.jpeg','username' => '
        William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' =>
        200 ),
        array('id' => 3, 'picture' => '/images/taha hussein.jpg','username' => ' Taha
        Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),);
       return $this->render('author/showauthor.html.twig',['id' => $id,'a' => $authors]);
}
}
