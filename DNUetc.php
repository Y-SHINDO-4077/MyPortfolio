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
    <div class="col-md-12">
      <div>
        <blockquote class="blockquote">
          <p class="left">DNU</p>
        </blockquote>
          <p>大学在学中より、ＮＰＯ法人大ナゴヤ・ユニバーシティ・ネットワークのスタッフをしております。</p>
      </div>

      <div class="main1">
      <p class="left">授業企画実績</p>
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
      <blockquote class="blockquote">
        <p class="left">その他</p>
      </blockquote>
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
<?php require_once('footer.php'); ?>
</body>
</html>
