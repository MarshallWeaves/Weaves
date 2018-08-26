<!DOCTYPE html>
<html lang="en">
<head>
    <title>Weaves</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>

    <a href="#head"><img src="http://placehold.it/200x100" id="fixedbutton"></a>
    
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Weaves</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li>
          <li><a href="#">Page 3</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="" data-target="#myModal" data-toggle="modal"><?php echo $_COOKIE['fname'] ?></a>
            </li>
        </ul>
      </div>
    </nav>
  
    <div class="container well" >
        <div class="row">
            <div class="col-sm-4">
                <center><img src="/img/img_avatar.png" alt="Avatar" style="width:200px"></center>
                <center><b><p style="font-size: 25px;">Evan Henry</p></b></center>
            </div>
            <div class="col-sm-8 scroll-area">
                <!-- Global Message table -->
                <div class="global-message">
                  <img src="/img/img_avatar.png" alt="Avatar" style="width:100%;">
                  <p>Hello. How are you today?</p>
                  <span class="time-right">11:00</span>
                </div>

                <div class="global-message darker">
                  <img src="/img/img_avatar.png" alt="Avatar" style="width:100%;">
                  <p>Hey! I'm fine. Thanks for asking!</p>
                  <span class="time-right">11:01</span>
                </div>

                <div class="global-message">
                  <img src="/img/img_avatar.png" alt="Avatar" style="width:100%;">
                  <p>Sweet! So, what do you wanna do today?</p>
                  <span class="time-right">11:02</span>
                </div>

                <div class="global-message darker">
                  <img src="/img/img_avatar.png" alt="Avatar" style="width:100%;">
                  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                  <span class="time-right">11:05</span>
                </div>

                <div class="global-message">
                  <img src="/img/img_avatar.png" alt="Avatar" style="width:100%;">
                  <p>Hello. How are you today?</p>
                  <span class="time-right">11:00</span>
                </div>

                <div class="global-message">
                  <img src="/img/img_avatar.png" alt="Avatar" style="width:100%;">
                  <p>Hello. How are you today?</p>
                  <span class="time-right">11:00</span>
                </div>

                <div class="global-message">
                  <img src="/img/img_avatar.png" alt="Avatar" style="width:100%;">
                  <p>Hello. How are you today?</p>
                  <span class="time-right">11:00</span>
                </div>

                <div class="global-message">
                  <img src="/img/img_avatar.png" alt="Avatar" style="width:100%;">
                  <p>Hello. How are you today?</p>
                  <span class="time-right">11:00</span>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
