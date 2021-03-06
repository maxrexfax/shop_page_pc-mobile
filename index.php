<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152861097-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-152861097-1');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/javascr.js"></script>
    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/js.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(img/background.png); background-repeat: repeat;">
<div class="row">
    <nav class="col-sm-12 col-md-12 col-lg-12 head">
        <?php
        include_once('../menu/menu.php');
        ?>
    </nav>
</div>
<div id="back_shadow"></div>
  <section id="header_pc" class="d-none d-sm-block">
    <img src="img/header.jpg" style="width: 100%;"/>
  </section>
  <section id="header_mobile" class="col-12 d-block d-sm-none">
    <img src="img/header_mobile.jpg" style="width: 100%;"/>
    <form action="#first" style="text-align: center; margin-bottom: 5px;">
        <input type="submit" class="btn btn-danger" value="Смотреть товары">
      </form>
  </section>
  
<hr/>
<div class="div_popup" id="popup" onclick="resetPopup()">
    <div class="row justify-content-md-center">
        <div class="col-12 col-sm-5 col-md-5 col-lg-4 local" id="popup-div" onclick="resetPopup()">
            <img src="img/img01.jpg" style="width: 180px; height: 110px;" class="goods_img"/><br>
            <h4 class="goods_h4">Пробный заголовок</h4>
            <br>
            <p class="goods_p">Пробный текст для мобильных устройств</p><br>
            <div id="btn-want">
                <button type="submit" class="btn btn-danger" onclick="gotoForm()">Хочу!</button>
            </div>
        </div>
  </div>
</div>

<div class="container">
    <div class="row justify-content-md-center">
      <p><a name="first"></a></p>
     <?php
        for($i = 1; $i < 9; $i++){
           echo '<div class="col-12 col-sm-5 col-md-5 col-lg-4" id="'.$i.'">';
           echo '<img src="img/img0'.$i.'.jpg" class="goods_img"/><br>';
           echo '<h4 class="goods_h4">Молодильное яблочко</h4><br>';
           echo '<p class="goods_p">Яблочко насыщенное поли&shy;ненасыщен&shy;ными угле&shy;водородами нейт&shy;ральной химичес&shy;кой реации улучшают цвет волос.</p><br><br>
           <button id="'.$i.'" class="btn btn-danger buttons" onclick="clickAction(this.id)">Подробнее</button>
           </div>';
        }
     ?>

    </div>
  </div>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-11 col-md-2 whiteback d-none d-sm-block local">
          <img src="img/imgFeed.jpg" style="width: 100%;"/>
      </div>
      <div class="col-11 col-md-3 whiteback local">
          <h3 class="form_h3">Отзывы наших покупателей</h3>
          <p>Отзыв №1</p>
          <p>Отзыв №2</p>
          <p>Отзыв №3</p>
          <p>Отзыв №4</p>
      </div>
    </div>
  </div>
  <div class="container d-none d-sm-block" id="form_pc">
    <div class="row whiteback extrawidth">
    <div class="col col-md-2">      
      </div>
      <div class="col-11 col-md-5 whiteback local">
        <h3 class="form_h3">Оставьте заявку на косметику по акционной цене</h3>
        <p>(почтовая пересылка по Израилю - бесплатно)</p>
        <br>
        <p>В течение 1 дня консультант свяжется с вами для ответа на все вопросы о качестве косметики, ее преимуществах, согласования списка товаров и оформления заказа.</p>
        <form action="/action_page.php">
           Имя:<br>
           <input type="text" name="firstname" placeholder="Как вас зовут?">
           <br>
           Телефон:<br>
           <input type="text" name="phonenumber" placeholder="05">
           <br><br>
           <input type="submit" value="Послать данные" class="btn btn-success">
        </form> 
    </div>
    <div class="col col-md-2">
    </div>
  </div>
</div>
<div class="container col-11 d-block d-sm-none" id="form_mobile">
    <div class="row whiteback">
      <div class="col-11 col-md-5 whiteback local">
        <h3 class="form_h3">Оставьте заявку на косметику по акционной цене</h3>
        <p>(почтовая пересылка по Израилю - бесплатно)</p>
        <br>
        <p>В течение 1 дня консультант свяжется с вами для ответа на все вопросы о качестве косметики, ее преимуществах, согласования списка товаров и оформления заказа.</p>
        <form action="/action_page.php">
           Имя:<br>
           <input type="text" name="firstname" placeholder="Как вас зовут?">
           <br>
           Телефон:<br>
           <input type="text" name="phonenumber" placeholder="05">
           <br><br>
           <input type="submit" value="Послать данные" class="btn btn-success">
        </form> 
    </div>
  </div>
</div>
  <p><a name="form"></a></p>
  <section id="footer_pc" class="d-none d-sm-block">
    <img src="img/footer.jpg" style="width: 100%;"/>
  </section>
  <section id="footer_mobile" class="col-11 d-block d-sm-none">
    <img src="img/footer_mobile.jpg" style="width: 110%; padding: 0; margin-left: -2px;"/>
  </section>
</body>
</html>
