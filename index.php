<?php
 class motor {
   public $colour;
   public $tyre;
   public $engine;
  
   function __construct($new, $type, $engine){
    $this->colour=$new;
    $this->tyre=$type;
    $this->engine=$engine;
   }
   function disp()
   {
    echo'color is'.$this->colour.'<br>';
    echo'tyre is'.$this->tyre.'<br>';
    echo'engine is'.$this->engine.'<br>';
   }
 }
$activa = new motor('red','mrf','800cc');
$bike = new motor('black','mrf','800cc');
$bikes = new motor('blue','cet','8900cc');

// $tvs=new motor();
// $tvs->colour='red';
// $tvs->tyre='cet';
// $tvs->engine='800';
// $bike->disp();
$activa->disp();




?>