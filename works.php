<!DOCTYPE html>
<html lang="ja">
<head>
 <title>Works</title>
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
 img{
   width:25%;
   height:25%;
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

　　<blockquote class="blockquote">
    <p class="left">Portfolio</p>
    <p class="left">作ったものを一覧にしました。</p>
   </blockquote>
    <div class="archive">
    <?php require_once './getWorks.php';?>
    <?php foreach($stmt as $row): ?>
    <div class="card col-lg-6 justify-content-around">
       <h3 class="card-header" ><?php echo $row[1] ?></h3>
       <div class="card-body">
        <!--<h6 class="card-subtitle text-muted"><?php echo $row[3] ?></h6>-->
       </div>
       <img style="height: 200px; width: 100%; display: block;" src="<?php echo $row[2]?>" alt="Card image">
       <div class="card-body">
        <div class="d-flex justify-column-start flex-wrap">
          <?php for($i=4;$i<15;$i++) :?>
            <?php if($row[$i] != null): ?>
           <img src="<?php echo $row[$i] ?>" class="col-lg-2">
         <?php endif; ?>
       <?php endfor; ?>

         </div>
           <p class="card-text"><?php echo $row[15] ?></p>
       </div>
       <div class="card-footer text-muted ct">
         <?php if($row[17] != null): ?>
          <a href="<?php echo $row[17] ?>" target="_blank"><button type="button" class="btn btn-primary">Go to Homepage</button></a>
         <?php endif;?>
         <a href="<?php echo $row[16] ?>" target="_blank"><button type="button" class="btn btn-primary">Go to Github</button></a>
       </div>
    </div>
  <?php endforeach;?>
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
