<?php


namespace App\classes;


class Student
{
    protected $text;
    protected $students;
    protected $result = [];

    public function __construct($post=null)
    {
        if(isset($post['search']))
        {
            $this->text = $post['search'];
        }
    }

    public function getAllStudent()
    {
        return
            [
                0=>[
                  'name'=> 'Tarikul Islam',
                  'mobile'=>'01246879855',
                  'email'=>'tisumon@gmail.com',
                  'address'=>'Dhanmondi 10/a'

              ] ,
                1=>[
                    'name'=> 'Shabuddin Islam',
                    'mobile'=>'01879456552',
                    'email'=>'buisumon@gmail.com',
                    'address'=>'Dhanmondi 8/a'

                ],
                2=>[
                    'name'=> 'Rafikul Islam',
                    'mobile'=>'01916968745',
                    'email'=>'risumon@gmail.com',
                    'address'=>'Dhanmondi 9/a'

                ],
                3=>[
                    'name'=> 'Sumonn Islam',
                    'mobile'=>'01875698745',
                    'email'=>'sisumon@gmail.com',
                    'address'=>'Dhanmondi 5/a'

                ],
                4=>[
                    'name'=> 'Faysal ahmed',
                    'mobile'=>'01246879855',
                    'email'=>'fisumon@gmail.com',
                    'address'=>'Dhanmondi 12'

                ],
                5=>[
                    'name'=> 'Rakib Islam',
                    'mobile'=>'01246879855',
                    'email'=>'risumon@gmail.com',
                    'address'=>'Dhanmondi 2/a'

                ],

            ];
    }
    public function getStudentBySearchText()
    {
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student)
        {
            if($this->text == $student['name'])
            {
              $this->result = $student;
              break;
            }
        }
        return $this->result;
    }
}