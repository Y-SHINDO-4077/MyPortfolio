<?php

session_start();
$error =[];
//入力値の確認チェック formValidation
if($_SERVER['REQUEST_METHOD']==='POST'){

  $post = filter_input_array(INPUT_POST,$_POST);
  if($post['name']===''){
    $error['name'] = 'blank';
  }
  if($post['email']===''){
    $error['email'] = 'blank';
  }elseif(!filter_var($post['email'],FILTER_VALIDATE_EMAIL)){
    $error['email'] = 'email';
  }
  if($post['subject']===''){
    $error['subject'] = 'blank';
  }
  if($post['mail_body']===''){
    $error['mail_body'] = 'blank';
  }

  if(count($error) === 0){
    //エラーが無いので確認画面へ移動する
    $_SESSION['form'] = $post;
    header('Location:confirm.php');
    exit();
  }
}else{
  if(isset($_SESSION['form'])){
    $post = $_SESSION['form'];
  }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
 <title>TOP</title>
 <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/litera/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gr51humlTz50RfCwdBYgT+XvbSZqkm8Loa5nWlNrvUqCinoe6C6WUZKHS2WIRx5o" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
 <style>
 .top{
   margin-top:-65px;
   padding-top:65px;
 }
 .home{
   background-image:url(/MyPortfolio/img/photo0000-5452.jpg);
   width:960px;
   height:557px;
 }
 .logo{

   text-align:center;
   font-size:32px;
 }
 .twocolumn{
   display:flex;
   justify-content:space-around;
 }
 .txt{
   margin:60px 0px;
 }
 .his{
   text-align:left;
 }
 ul{
   list-style-type: none;
   text-align: left;
 }
 .word{
  word-wrap: break-word;
 }
 .error_msg{
   color:red;
   text-align:left;
 }
 .submitBtn{
   text-align:center;
 }
 .icon{
   display:flex;
   justify-content:space-around;
 }
 .fab{
 font-size:60px;
 text-align:center;
 }
 .fa-facebook{
   color:#193278;
 }
 .fa-github{
   color:#000000;
 }
 #page-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    font-size: 80%;
}

#page-top a {
    display: block;
    background: #666;
    color: #fff;
    width: 100px;
    padding: 25px 0;
    text-align: center;
    text-decoration: none;
    border-radius: 30px;
}

#page-top a:hover {
    background: #999;
    text-decoration: none;
}
 </style>
</head>
<body>
<?php require_once('header.php'); ?>
<main>
<div class="container top">
  <div class="row">
<div class="jumbotron col-md-12 home" id="home">
<p class="logo">Yutaro Shindo</p>
<p class="logo"><small>まちのことや情報を「伝える」こと、「知らせる」ことが自分理念です。</small></p>
</div>
<div class="jumbotron col-md-12" id="profile">
  <h1 class="display-3">Profile</h1>
 <div class="twocolumn">
  <div class="col-md-5">
    <img src="/MyPortfolio/img/09.jpg" style="width:100%; height:100%;">
  </div>
  <div class="col-md-7">
  <p class="lead his">1994年生まれ<br/>愛知県名古屋市出身・在住<br/>同志社大学文学部文化史学科卒業</p>
  <hr class="my-4">
  <ul class="his">
    <li>NPO法人大ナゴヤ・ユニバーシティー・ネットワーク(大学在籍中～現在）</li>
    <li>購買業務システム開発自社企業（約1年）</li>
    <li>北海道上川郡東川町東川日本語学校 ふるさとワーキングホリデー（約1か月）</li>
  </ul>
  </div>
 </div>
</div>

<div class="jumbotron col-md-12" id="sa">
  <h1 class="display-3">Skills/Archievement</h1>
  <div class="twocolumn">
   <div class="col-md-6 txt">
    <p class="lead">Web制作・ITスキル</p>
    <p class="mb-0 word">業務系システム会社を経験後、PHP等の言語を勉強しています。</p>
    <hr class="my-4 col-md-6">
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="./works.php" role="button">Works</a>
      <a class="btn btn-primary btn-lg" href="./techskills.php" role="button">Tech Skills</a>
    </p>
   </div>
   <div class="col-md-6 txt">
    <p class="lead">学びの場づくり・その他スキル</p>
    <p class="mb-0 word">大学在籍時よりNPO法人大ナゴヤ・ユニバーシティー・ネットワークのスタッフとして活動しています。</p>
    <p class="mb-0 word">その他各種資格も取得に励んでいます。</p>
    <hr class="my-4 col-md-6">
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="./DNUetc.php" role="button">DNU etc</a>
      <a class="btn btn-primary btn-lg" href="./otherskills.php" role="button">Other Skills</a>
    </p>
   </div>
  </div>
</div>

<div class="jumbotron col-md-12" id="contact">

  <fieldset>
    <h1 class="display-3">Contact</h1>
    <p>メールでの各種お問い合わせはこちらから</p>
    <form method="POST" action="">
      <div class="form-group">
        <label for="examplename">お名前</label>
        <input type="text" class="form-control" name="name" placeholder="お名前" value="<?php echo htmlspecialchars($post['name']) ;?>">
        <?php if($error['name']==='blank'): ?><p class ="error_msg">お名前は必須入力です。</p><?php endif; ?>
      </div>
    <div class="form-group">
      <label for="exampleInputEmail1">メールアドレス</label>
      <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="メールアドレス" value="<?php echo htmlspecialchars($post['email']) ;?>">
      <?php if($error['email']==='blank'): ?><p class ="error_msg">メールアドレスは必須入力です。</p><?php endif; ?>
        <?php if($error['email']==='email'): ?><p class ="error_msg">メールアドレスを正しく入力してください。</p><?php endif; ?>
    </div>
    <div class="form-group">
     <label for="exampleInput">件名</label>
     <input type="text" class="form-control" name="subject" placeholder="件名" value="<?php echo htmlspecialchars($post['subject']) ;?>">
      <?php if($error['subject']==='blank'): ?><p class ="error_msg">件名は必須入力です。</p><?php endif; ?>
   </div>
    <div class="form-group">
      <label for="exampleTextarea">本文</label>
      <textarea class="form-control" name="mail_body" placeholder="本文" rows="5"><?php echo htmlspecialchars($post['mail_body']) ;?></textarea>
      <?php if($error['mail_body']==='blank'): ?><p class ="error_msg">本文は必須入力です。</p><?php endif; ?>
    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-primary submitBtn">入力内容確認</button>
    </div>

  </fieldset>
</form>

 <div class="icon text-center">
   <div class="fb col-md-6">
    <p>Facebookはこちら</p>
     <a href="https://www.facebook.com/dooshindoyutaro" target="_blank"><i class="fab fa-facebook" href="#"></i></a>
    </div>
    <div class="gh col-md-6">
    <p>Githubはこちら</p>
      <a href="https://github.com/Y-SHINDO-4077" target="_blank"><i class="fab fa-github"></i></a>
    </div>
  </div>
</div>

</div>
</div>
</main>
<p id="page-top"><a href="#">GO PAGE TOP</a></p>
<?php require_once('footer.php'); ?>
<script type="text/javascript">
$(function () {
    var topBtn = $('#page-top');
    topBtn.hide();
    //スクロールが500に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スルスルっとスクロールでトップへもどる
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
// $(function(){
//   //#で始まるactionをクリックした時
//   $('form[action^="#"]').click(function(){
//     //スピード400
//     var speed = 400;
//     //アンカーの値を取得
//     var href = $(this).attr("action");
//     //移動先を取得
//     var target = $(action =="#" || action == "" ? 'html' : action);
//     //移動先を数値で取得
//     var position = target.offset().top -65;
//     //スムーススクロール animate(cssプロパティ,完了するまでの時間,挙動)
//     $('body,html').animate({scrollTop:position},speed,'swing');
//     return false;
//     });
//   });
</script>

</body>
</html>
