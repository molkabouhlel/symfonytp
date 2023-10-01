<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
   // #[Route('/student', name: 'app_student')]
    //public function index(): Response
    //{
      //  return $this->render('student/index.html.twig', [
          //  'controller_name' => 'StudentController',
        //]);
    //}
    #[Route('/showstudent/{$name}', name: 'app_student')]
    public function show($name):Response
    {
        return new response ('bonjour'.$name);
    }

    #[Route('/showstudenttwig', name: 'show_student_twig')]
    public function showTWIG(){
        $title='list of student';
        $student=array(
            array('id'=>1,'name'=>'student 1', 'nbclass'=>4),
            array('id'=>2,'name'=>'student 2', 'nbclass'=>7),
            array('id'=>3,'name'=>'student 3', 'nbclass'=>6)
        );

        return $this->render('student/show.html.twig',['t'=>$title,'tt'=>$student]);// t hia clee mta3 tab associative
    }
}
