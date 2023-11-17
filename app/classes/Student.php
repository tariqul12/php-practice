<?php

namespace App\classes;

class Student
{
    public $students=[];
    public function __construct()
    {
        $this->students=[
            0=>[
                "id"=>1,
                "name"=>"Tariqul Islam",
                "email"=>"tariqul@gmail.com",
                "mobile"=>"0145748578",
            ],
            1=>[
                "id"=>2,
                "name"=>"Popi Roy",
                "email"=>"popi@gmail.com",
                "mobile"=>"0145748578"
            ],
            2=>[
                "id"=>3,
                "name"=>"Emaran Mia",
                "email"=>"emran@gmail.com",
                "mobile"=>"014574568"
            ],
            3=>[
                "id"=>4,
                "name"=>"Tohin Mia",
                "email"=>"tohin@gmail.com",
                "mobile"=>"0145467687"
            ],
            4=>[
                "id"=>5,
                "name"=>"Rakib Mia",
                "email"=>"trakib@gmail.com",
                "mobile"=>"0145748578"
            ],
            5=>[
                "id"=>6,
                "name"=>"Shimul Mia",
                "email"=>"shimul@gmail.com",
                "mobile"=>"0145764874"
            ],
            6=>[
                "id"=>7,
                "name"=>"Tusar Ahammed",
                "email"=>"toser@gmail.com",
                "mobile"=>"01456657657"
            ],
            7=>[
                "id"=>8,
                "name"=>"Shakil SK",
                "email"=>"shakil@gmail.com",
                "mobile"=>"0145553432"
            ],
            8=>[
                "id"=>9,
                "name"=>"Sowrab Mia",
                "email"=>"sowrab@gmail.com",
                "mobile"=>"01589365040"
            ],
            9=>[
                "id"=>10,
                "name"=>"Tonmoy Ahammed",
                "email"=>"tonmoi@gmail.com",
                "mobile"=>"01745435353"
            ],
            10=>[
                "id"=>11,
                "name"=>"Sajib Sazo",
                "email"=>"sajib@gmail.com",
                "mobile"=>"01954535423"
            ],
            11=>[
                "id"=>12,
                "name"=>"hridoy Ahammed",
                "email"=>"hridoy@gmail.com",
                "mobile"=>"01585775437"
            ],
        ];
    }
    public function getAllStudent(){
        return $this->students;
    }
}