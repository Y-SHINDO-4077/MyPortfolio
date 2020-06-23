<!DOCTYPE html>
<html lang="ja">
<head>
 <title>TOP</title>
 <!-- jqueryの読み込む -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/litera/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gr51humlTz50RfCwdBYgT+XvbSZqkm8Loa5nWlNrvUqCinoe6C6WUZKHS2WIRx5o" crossorigin="anonymous">
 <style>
 header{
   width:100%;
   top:0;
   left:0;
   z-index: 9999;
   position:fixed;
 }
 .dropdown:hover>.dropdown-menu {
     display: block;
 }
 </style>
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/MyPortfolio/index.php">Do's Portfolio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav auto">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#profile">Profile</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#sa">Skills/Archievement</a>
        </li>

       <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#sa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Skills/Archievement
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="./Work.php">Works</a>
          <a class="dropdown-item" href="./techskills.php">Tech Skills</a>
          <a class="dropdown-item" href="./DNUetc.php">DNU etc</a>
          <a class="dropdown-item" href="./otherskills.php">Other Skills</a>
        </div>
      </li> -->

      <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

$(function(){
var $this;

var moving = false;
//li.dropdown上にマウスが置かれた時
$('li.dropdown').on('mousemove', function(){
  //もし、movingしていなかったら、trueにする
  if (!moving) {
    moving = true;
    return;
  }
  $this = $(this);
  //collapseでは開かないようにする
  if ($this.css('float')!='left') return;
  //openクラスを追加する
  $this.addClass('open');
  moving = false;
});

//li.dropdown上にマウスが置かれた時、
$('li.dropdown').hover(function(){
  // 何もしない
}, function(){
  $this = $(this);
  $this.removeClass('open');
  moving = false;
});
});

$(function(){
  //#で始まるhrefをクリックした時
  $('a[href^="#"]').click(function(){
    //スピード400
    var speed = 400;
    //アンカーの値を取得
    var href = $(this).attr("href");
    //移動先を取得
    var target = $(href =="#" || href == "" ? 'html' : href);
    //移動先を数値で取得
    var position = target.offset().top -65;
    //スムーススクロール animate(cssプロパティ,完了するまでの時間,挙動)
    $('body,html').animate({scrollTop:position},speed,'swing');
    return false;
    });
  });
</script>
</body>
</html>
