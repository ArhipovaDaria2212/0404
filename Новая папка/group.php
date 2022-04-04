<?php

class Group {
    private $id;
    private $title;
    private $course;
    private $students = array();
    private $discipline = array();

    public function __construct($i, $t, $c) {
        $this->id = $i;
        $this->title = $t;
        $this->course = $c;
    }

    public function addStudents($students) {
        array_push($this->students, $students);  
    }

    public function infa() {
        echo '<h1>Группа '.$this->title.'</h1>';
        foreach($this->students as $s){
            $s->infa();
        }  
        foreach($this->discipline as $s){
            echo $this->discipline->getTitle().'<br>'; 
        } 
    }
    
    public function addDiscipline($discipline) {
        array_push($this->discipline, $discipline);  
    }

    public function getTitle() {
        return $this->title;
    }

    public function SaveToFile() {
        
    }
}
?>