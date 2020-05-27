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
 </style>
</head>
<body>
<?php require_once('header.php'); ?>
<main>
<div class="container top">
  <div class="row">
<div class="jumbotron col-md-12 home">
<p class="logo">Yutaro Shindo</p>
<p class="logo"><small>まちのことや情報を「伝える」こと、「知らせる」ことが自分理念です。</small></p>
</div>
<div class="jumbotron col-md-12">
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
<div class="jumbotron col-md-12">
  <h1 class="display-3">Skills/Archievement</h1>
  <div class="twocolumn">
  <div class="col-md-6 txt">
  <p class="lead">Web制作・ITスキル</p>
  <p class="mb-0 word">業務系システム会社を経験後、PHP等の言語を勉強しています。</p>
  <hr class="my-4 col-md-6">
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Works</a>
    <a class="btn btn-primary btn-lg" href="#" role="button">Tech Skills</a>
  </p>
  </div>
  <div class="col-md-6 txt">
  <p class="lead">場づくり・その他スキル</p>
  <p class="mb-0 word">大学在籍時よりNPO法人大ナゴヤ・ユニバーシティー・ネットワークのスタッフとして活動しています。</p>
  <p class="mb-0 word">その他各種資格も取得に励んでいます。</p>
  <hr class="my-4 col-md-6">
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="./DNUetc.php" role="button">DNU etc</a>
    <a class="btn btn-primary btn-lg" href="#" role="button">Other Skills</a>
  </p>
  </div>
  </div>
</div>

<div class="col-md-12">
 <form>
  <fieldset>
    <h1 class="display-3">Contact</h1>
    <p>メールでの各種お問い合わせはこちらから</p>
    <div class="form-group">
      <label for="exampleInputEmail1">メールアドレス</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">
      <small id="emailHelp" class="form-text text-muted">メールアドレスは誰にも漏らしません。</small>
    </div>
    <div class="form-group">
     <label for="exampleInput">件名</label>
     <input type="text" class="form-control" id="exampleInputtext1" placeholder="件名">
   </div>
    <div class="form-group">
      <label for="exampleTextarea">本文</label>
      <textarea class="form-control" id="exampleTextarea" placeholder="本文" rows="5"></textarea>
    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-primary submitBtn">送信</button>
    </div>
  </fieldset>
</form>

 <div class="icon text-center">
   <div class="fb col-md-6">
    <p>Facebookはこちら</p>
     <a href="https://facebook.com/dooshindoyutaro" target="_blank"><i class="fab fa-facebook" href="#"></i></a>
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
<?php require_once('footer.php'); ?>
</body>
</html>
