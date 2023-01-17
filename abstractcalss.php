<?php
trait hello {
  public function sayhello(){
      echo"hello everyone";
  }
}
class basse {
      use hello;
}
class basse2 {
    use hello;
}
  $test = new basse();
  $test2= new basse2();
  $test->sayhello();
  echo"<br>";
  $test2->sayhello();

?>