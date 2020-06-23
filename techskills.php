<!DOCTYPE html>
<html lang="ja">
<head>
 <title>Tech Skills</title>
 <!-- jqueryの読み込む -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/litera/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gr51humlTz50RfCwdBYgT+XvbSZqkm8Loa5nWlNrvUqCinoe6C6WUZKHS2WIRx5o" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
 <style>
 .top{
   margin-top:-65px;
   padding-top:65px;
 }
 .left{
   text-align:left;
 }
 .archive{
   display:flex;
   flex-wrap:wrap;
   align-content:flex-start;
 }
 .ct{
  text-align:center;
 }
 .image-size{
   width:128px;
   height:181px;
   display:inline-block;
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

<?php //require_once('header.php'); ?>

<main>
<div class="container top">
  <div class="row">

    <div class="PG">
    <p class="left">言語</p>
    <div class="archive">
      <?php require_once('./gettechskills.php'); ?>
      <?php foreach($stmt as $row): ?>
      <div class="card bg-light col-lg-2" style="max-width: 25rem; max-height:30rem;">
  　　　　<div class="card-header"><?php echo $row[1] ?></div>
  　　　　<div class="card-body" style="text-align:center;">
    　　　   <img class="image-size" src="<?php echo $row[2] ?>" alt="Card image">
    　　　<p class="card-text"><?php echo $row[3] ?></p>
  　　　</div>
　　　　</div>
      <?php endforeach; ?>
    </div>

    <p class="left">フレームワーク・ライブラリ</p>
    <div class="archive">
      <?php require_once('./gettechskillsfwlb.php'); ?>
      <?php foreach($stmt as $row): ?>
      <div class="card bg-light col-lg-2" style="max-width: 25rem; max-height:30rem;">
  　　　　<div class="card-header"><?php echo $row[1] ?></div>
  　　　　<div class="card-body" style="text-align:center;">
    　　　   <img class="image-size" src="<?php echo $row[2] ?>" alt="Card image">
    　　　<p class="card-text"><?php echo $row[3] ?></p>
  　　　</div>
　　　　</div>
      <?php endforeach; ?>
    </div>
   </div>

   <p class="left">開発環境・その他</p>
   <div class="archive">
     <?php require_once('./getskillother.php'); ?>
     <?php foreach($stmt as $row): ?>
     <div class="card bg-light col-lg-2" style="max-width: 25rem; max-height:30rem;">
 　　　　<div class="card-header"><?php echo $row[1] ?></div>
 　　　　<div class="card-body" style="text-align:center;">
   　　　   <img class="image-size" src="<?php echo $row[2] ?>" alt="Card image">
   　　　<p class="card-text"><?php echo $row[3] ?></p>
 　　　</div>
　　　　</div>
     <?php endforeach; ?>
   </div>
  </div>

  </div>
</div>
</main>
<p id="page-top"><a href="./index.php">BACK TO TOP</a></p>
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
});
</script>
</body>
</html>
