<h4> inheritance</h4>

<?php
 class employe {
    private $name;
    public $age;
    public $salaery;
    function __construct($n,$b,$c){
        $this->name=$n;
        $this->age=$b;
        $this->salaery=$c;
    }
    function info(){
       echo'very good name: '. $this->name.'<br>';
       echo'very small age:'. $this->age.'<br>';
       echo'very good salaery:'. $this->salaery.'<br>';
    }
 }
 class manager extends employe{
       public $work=76;
       public $typing='76wpm';
       function add(){
        echo'good work:'.$this->work.'<br>';
        echo'good work:'.$this->typing.'<br>';
       }
 }
   $webroot=new employe('bhupender','22','25000');
  // $webroot->name='rohit';
   $webroot->info();
//    $webroot->add();


?>