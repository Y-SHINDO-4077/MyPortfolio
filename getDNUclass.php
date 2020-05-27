<?php
require_once './connect.php';

try{
  $db=getdb();
  $stmt = $db->query('SELECT * FROM DNU_class');
  // foreach($stmt as $st){
  //   print_r($st);
  // }

}catch(PDOException $e){
  print $e->getMessage();
}

 ?>
