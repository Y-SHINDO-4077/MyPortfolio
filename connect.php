<?php
//dbコネクト
//getdb();
function getdb(){
try {
$pdo = new PDO('mysql:host=host;dbname=;charset=utf8','user','PW',
array(PDO::ATTR_EMULATE_PREPARES => false));
//echo "A";
return $pdo;

} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}
}
?>
