<?php

/**
 * Class defines a student
 * Providing the Student with a:
 * Name, email, and grades
 * @author Jacob
 */
class Student {
    
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //Add an email to the Student's email array
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    //Adds a grade to the grades array
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //Calculates grade average
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    //Prints a description of the student
    //Name (average)
    //home contact 
    //work contact
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
