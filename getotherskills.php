<?php
require_once './connect.php';

try{
  $db=getdb();
  $stmt = $db->query('SELECT * FROM otherskills');
  // foreach($stmt as $st){
  //    print_r($st);
  //
  //  }

}catch(PDOException $e){
  print $e->getMessage();
}

 ?>
