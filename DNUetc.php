<!DOCTYPE html>
<html lang="ja">
<head>
 <title>DNU etc</title>
 <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/litera/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gr51humlTz50RfCwdBYgT+XvbSZqkm8Loa5nWlNrvUqCinoe6C6WUZKHS2WIRx5o" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
 <style>
 .top{
   margin-top:-65px;
   padding-top:65px;
 }
 .title{
   margin-top:20px;
   height:150px;
 }
 .left{
   margin-top:16px;
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
    <div class="col-md-12">
      <div class="title">
        <blockquote class="blockquote">
          <p class="left">DNU</p>
        </blockquote>
          <p>大学在学中より、ＮＰＯ法人大ナゴヤ・ユニバーシティ・ネットワークのスタッフをしております。
          <br/>「授業」という「学びの場」を作っています。</p>
      </div>

      <div class="main1">
      <p class="left">授業企画実績</p>
      <p class="left">主にまちのことやその物語を扱った授業やツアーを企画しています。</p>
      <div class="archive">
      <?php require_once './getDNUclass.php';?>
      <?php foreach($stmt as $row): ?>
      <div class="card col-lg-4">
         <h3 class="card-header" ><?php echo $row[1] ?></h3>
         <div class="card-body">
          <h6 class="card-subtitle text-muted"><?php echo $row[2] ?></h6>
         </div>
         <img style="height: 200px; width: 100%; display: block;" src="<?php echo $row[3]?>" alt="Card image">
         <div class="card-body">
             <p class="card-text"><?php echo $row[4] ?></p>
         </div>
         <div class="card-footer text-muted ct">
           <a href="<?php echo $row[5] ?>" target="_blank"><button type="button" class="btn btn-primary">詳細</button></a>
         </div>
      </div>
    <?php endforeach;?>
      </div>
     </div>

     <div class="main2">
     <p class="left">DNU関連</p>
     <p class="left">DNUに関連したPJや場づくりも行っています。</p>
     <div class="archive">
      <?php require_once './getDNUother.php';?>
     <?php foreach($stmt as $row): ?>
     <div class="card col-lg-4">
        <h3 class="card-header"><?php echo $row[1] ?></h3>
        <div class="card-body">
         <h6 class="card-subtitle text-muted"><?php echo $row[2] ?></h6>
        </div>
        <img style="height: 200px; width: 100%; display: block;" src="<?php echo $row[3] ?>" alt="Card image">
        <div class="card-body">
            <p class="card-text"><?php echo $row[4] ?></p>
        </div>
        <div class="card-footer text-muted ct">
          <a href="<?php echo $row[5] ?>" target="_blank"><button type="button" class="btn btn-primary">詳細</button></a>
        </div>
     </div>
   <?php endforeach;?>
     </div>
    </div>

    <div class="main3">
     <div class="title">
      <blockquote class="blockquote">
        <p class="left">その他</p>
      </blockquote>
      <p>その他に次のようなこともしました。</p>
     </div>
    <div class="archive">
      <?php require_once './getother.php';?>
      <?php foreach($stmt as $row): ?>
    <div class="card col-lg-4">
       <h3 class="card-header"><?php echo $row[1] ?></h3>
       <div class="card-body">
        <h6 class="card-subtitle text-muted"><?php echo $row[2] ?></h6>
       </div>
       <img style="height: 200px; width: 100%; display: block;" src="<?php echo $row[3] ?>" alt="Card image">
       <div class="card-body">
           <p class="card-text"><?php echo $row[4] ?></p>
       </div>
       <div class="card-footer text-muted ct">
         <a href="<?php echo $row[5] ?>" target="_blank"><button type="button" class="btn btn-primary">詳細</button></a>
       </div>
    </div>
    <?php endforeach;?>
    </div>
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
