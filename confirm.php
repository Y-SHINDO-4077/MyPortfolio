<?php
session_start();
//入力画面からの遷移でなければ、戻す
if(!isset($_SESSION['form'])){
  header('Location:index.php');
  exit();
}else{
$post = $_SESSION['form'];
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  //メール送信
  $to = 'ysbookstore2020@gmail.com';
  $from = $post['email'];
  $subject = 'お問い合わせが届きました';
  $body = <<<EOT
  メールアドレス:{$post['email']}
  件名:{$post['subject']}
  本文:{$post['contact']}
  EOT;

    var_dump($body);
    //exit();
    mb_send_mail($to,$subject,$body,"From:{$from}");


    $to = $post['email'];
    $from = 'ysbookstore2020@gmail.com';;
    $subject = '以下の内容で問い合わせを受け付けました。';
    $body = <<<EOT
    メールアドレス:{$post['email']}
    件名:{$post['subject']}
    本文:{$post['contact']}
    EOT;

      var_dump($body);
      //exit();
      mb_send_mail($to,$subject,$body,"From:{$from}");

  //sessionを消す
  unset($_SESSION['form']);
  header('Location:complete.html');
  exit();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
 <title>確認画面</title>
 <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/litera/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gr51humlTz50RfCwdBYgT+XvbSZqkm8Loa5nWlNrvUqCinoe6C6WUZKHS2WIRx5o" crossorigin="anonymous">
 <style>
 .top{
   margin-top:-65px;
   padding-top:65px;
 }
 .logo{

   text-align:center;
   font-size:32px;
 }
 .submitBtn{
   text-align:center;
 }
 </style>
</head>
<body>
  <div class="container top">
    <div class="row">
      <div class="jumbotron col-md-12">

      <form action="" method="POST">
        <h1>この内容で送信しますか？</h1>
        <div class="form-group">
        <div>メールアドレス</div>
        <p><?php echo htmlspecialchars($post['email']);?></p>
        </div>
        <div class="form-group">
        <div>件名</div>
        <p><?php echo htmlspecialchars($post['subject']); ?></p>
        </div>
        <div class="form-group">
        <div>本文</div>
        <p><?php echo nl2br(htmlspecialchars($post['mail_body'])); ?></p>
        </div>
        <div class="text-center">
        <button type="button" class="btn btn-info"><a href="index.php" style="color:white;">戻る</a></button>
        <button type="submit" class="btn btn-primary submitBtn">送信</button>
        </div>
      </form>

      </div>
    </div>
  </div>

<?php require_once('footer.php'); ?>


</body>
</html>
