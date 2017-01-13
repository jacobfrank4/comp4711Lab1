<!DOCTYPE html>
<!--
Main entry point to the webapp
Displays the students in an ordered list on the screen.
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
            
            //Create first student
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            //Create second student
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            //Create third student
            $third = new Student();
            $third->surname = "Frank";
            $third->first_name = "Jacob";
            $third->add_email('home','jacob@home.com');
            $third->add_email('work','jacob@work.com');
            $third->add_email('school','jacob@school.com');
            $third->add_grade(95);
            $third->add_grade(85);
            $third->add_grade(79);
            $third->add_grade(87);
            $students['j456'] = $third;
            
            //Sort students in the array
            ksort($students);
            
            //print each student to the screen
            foreach($students as $student)
                echo $student->toString();            
        ?>
    </body>
</html>
