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
 </style>
</head>
<body>

<?php require_once('header.php'); ?>

<main>
<div class="container top">
  <div class="row">

    <div class="PG">
    <p class="left">言語</p>
    <div class="archive">

      <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
  　　　　<div class="card-header"></div>
  　　　　<div class="card-body">
    　　　<h4 class="card-title"></h4>
    　　　<p class="card-text"></p>
  　　　</div>
　　　　</div>
  　
    </div>
   </div>

  </div>
</div>
</main>
<?php require_once('footer.php'); ?>
</body>
</html>
