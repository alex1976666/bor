<!DOCTYPE html>
<html lang="ru">
  <head>
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
    <link rel="icon" href="img/fav.png" type="image/x-icon">

  
    <title>Гравировальные бормашины в Санкт-Петербурге</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="owl.carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl.carousel/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="owl.carousel/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="animate.css-master/animate.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <div class="logo">
              <a href="index.php"><strong>-AirBor-</strong></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
            <nav class="main-nav">
              <ul>
                <li class="main-nav__item">
                  <a href="index.php">На главную</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>




    <main>
      <div class="hover"></div>

      <div class="feedback-page">
        <div class="container">
          <div class="row">

            <div class="col-xs-12">
  <?php

$name=$_POST[name3];//переменная имени
$otz=$_POST[otz];//переменная комментария              
$l="<hr>";

//очистка комментариев------------------------------------

if ($otz=="delete") {$f=fopen("basa777.txt","w");
ftruncate($f,0);
fclose($f);}

// дата время
$today=getdate();
$hours=$today['hours'];
$minutes=$today['minutes'];
$seconds=$today['seconds'];
$vr=$today['mday']." :".$today['mon']." :".$today['year']."г. ".$today['hours'].":".$today['minutes'].":".$today['seconds'].".";

$rez="<blockquote>".$otz."<br>".$vr."<cite>".$name."</cite></blockquote>"."\n";

if ($name<>"") {$fl5=7;}
if ($otz<>"") {$fl6=7;}

$dop=$fl5.$fl6;
if ($dop=="77") {
//запись

$filename="basa777.txt";

$a="<br> ";


if(is_writable($filename)) {

if(!$handle=fopen($filename,"a")) {echo "ошибка"; exit;}

if(fwrite($handle,$rez)===FALSE) {echo "ошибка2"; exit;}

fclose ($handle);}

else {echo "ошибка3";}
}

//чтение

$file_array=file("basa777.txt");//Считать файл текста в массив

$bs=$file_array;//запись файла в массив

$bs=array_reverse($bs);

//цикл

for($nn=0;$nn<=count($bs);$nn=$nn+1) {echo $bs[$nn];}


            
?>
          </div>
        </div>
      </div>
    </div>

    </main>


    <!-- Footer -->


    <footer>
      <div class="contacts" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2>Наши контакты</h2>
              <ul>
                <li>
                  <img src="img/telephone5.svg" class="footer-phone" alt="phone">
                  <a href="tel:+79118376607">+7(911)837-66-07</a>
                </li>
                <li>
                  <img src="img/telephone5.svg" class="footer-phone" alt="phone">
                  <a href="tel:+79643983800">+7(964)398-38-00</a>
                </li>
                <li>
                  <a href="mailto:airbor.spb@gmail.com">airbor.spb@gmail.com</a>
                </li>
                <li>
                  <a href="http://vk.com/airbor" target="_blank">Группа в ВК</a>
                </li>
                <li>Санкт-Петербург 2015</li>
              </ul>
              <div class="footer-logo">
                -AirBor-
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </footer>












    <!-- Modals -->

    <div class="recall">
      <form action="#" method="post">
      <p class="form-text">Спасибо,<br> мы Вам перезвоним</p>
        <p><input type="text" name="name" placeholder="Ваше имя"></p>
        <p><input type="tel" name="phone" placeholder="Ваш телефон" required></p>
        <button type="submit" class="recall-btn" id="call-me-2">Позвоните мне</button>
      </form>
    </div>

    <div class="order">
      <form action="#" method="post" class="clearfix">
        <div class="quantity">
          <p class="clearfix"><label for="number">Количество шт.</label><input type="text" id="number" name="quantity" required></p>
        </div>
        <div class="client-data">
        <p class="fill">Заполните поля,<br> чтобы мы с Вами связались</p>
          <p><label for="name">Ваше имя</label><input type="text" id="name" placeholder="Имя" required></p>
          <p><label for="phone">Ваш телефон</label><input type="text" id="phone" placeholder="Телефон" required></p>
          <p><label for="city">Ваш город</label><input type="text" id="city" placeholder="Город" required></p>
          <p><label for="mail">Ваш E-Mail</label><input type="text" id="mail" placeholder="E-Mail"></p>
        </div>
        <button type="submit" class="order-btn" id="order-2">Заказать</button>
      </form>
    </div>

  </body>
</html>