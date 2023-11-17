<?php


namespace App\classes;
use App\classes\Student;

class Welcome
{
    public $student, $students, $message, $i, $firstNum, $data,$secondNum;//property declare

    public function __construct(){
        $this->firstNum=1000;

    }
    public function index(){

        $this->student=new Student();
        $this->students=$this->student->getAllStudent();


        return view("home",["students"=>$this->students]);
    }

    public function about(){
        return view("about");
    }
    public function contact(){
        return view("contact");
    }
}