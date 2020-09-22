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
       include('Student.php');
       $students = array();
       
       $first = new Student();
       $first->surname = "Doe";
       $first->first_name = "John";
       $first->status = "Senior";
       $first->add_email('home','john@doe.com');
       $first->add_email('work','jdoe@mcdonalds.com');
       $first->add_grade(65);
       $first->add_grade(75);
       $first->add_grade(55);
       $students['j123'] = $first;
       
       $second = new Student();
       $second->surname= "Einstein";
       $second->first_name = "Albert";
       $second->status = "Freshman";
       $second->add_email('home','albert@braniacs.com');
       $second->add_email('work1','a_einstein@bcit.ca');
       $second->add_email('work2','albert@physics.mit.edu');
       $second->add_grade(95);
       $second->add_grade(80);
       $second->add_grade(50);      
       $students['a456'] = $second;
       
       $third = new Student();
       $third->surname = "Peicong";
       $third->first_name = "Zhan";
       $third->status = "Junior";
       $third->add_email('home','Bacon@Zhan.com');
       $third->add_email('work','Bacon@mcdonalds.com');
       $third->add_grade(85);
       $third->add_grade(95);
       $third->add_grade(90);
       $students['b789'] = $third;
       
       $Fourth = new Student();
       $Fourth->surname = "Kobe";
       $Fourth->first_name = "Bryant";
       $Fourth->status = "Junior";
       $Fourth->add_email('home','Bryant@Kobe.com');
       $Fourth->add_email('work','Bryant@nba.com');
       $Fourth->add_grade(95);
       $Fourth->add_grade(65);
       $Fourth->add_grade(90);
       $students['s101112'] = $Fourth;
       
        ksort($students); 
        
       foreach($students as $student)
           echo $student->toString();
           
        ?>
            </table
    </body>
        
</html>
