<?php
  class jatt{
     public $name;
     public $model;
     public $prize;
    function __construct($jatt,$kaint,$att){
        $this->name=$jatt;
        $this->model=$kaint;
        $this->prize=$att;
    }
    function disp(){
        echo' very good name: '.$this->name.'<br>';
        echo' very good model: '.$this->model.'<br>';
        echo' very good prize: '.$this->prize.'<br>';
    }
  }
  $swift= new jatt('verna','2025','25000');
  $rubicon = new jatt('rubicon','2028','825000');

  $swift->disp();
  $rubicon->disp();
//   $swift->name='dizre swift';
//   $swift->model='2023';
//   $swift->prize='6700000';
//   $maruti=new jatt();
//   $maruti->name='maruti 800';
//   $maruti->model='2008';
//   $maruti->prize='24000';




//    echo"<pre>";
//    print_r($swift);
//    print_r($rubicon);




?>