<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');

        $students = array();

        //First student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        //Second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        //Third Student
        $third = new Student();
        $third->surname = "Doo";
        $third->first_name = "Scooby";
        $third->add_email('home', 'scoobs@dog.com');
        $third->add_grade(95);
        $third->add_grade(70);
        $third->add_grade(60);
        $students['z007'] = $third;


        //Sorting entries
        ksort($students);

        //Print
        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
