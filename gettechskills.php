<?php
require_once './connect.php';

try{
  $db=getdb();
  $stmt = $db->query('SELECT * FROM techskills');
  // foreach($stmt as $st){
  //    print_r($st);
  //
  //  }

}catch(PDOException $e){
  print $e->getMessage();
}

 ?>
