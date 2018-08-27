<html>    
    <head>
        <title>Weaves</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Weaves</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Page 1-1</a></li>
                  <li><a href="#">Page 1-2</a></li>
                  <li><a href="#">Page 1-3</a></li>
                </ul>
              </li>
              <li><a href="#">Page 2</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

            </ul>
          </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <form class="form-horizontal" action="user_register.php" method="POST">
                      <fieldset>
                        <div id="legend">
                          <legend class="">Sign Up</legend>
                        </div>
                        <div class="control-group">
                          <!-- Username -->
                          <label class="control-label"  for="username">Username</label>
                          <div class="controls">
                            <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- Password-->
                          <label class="control-label" for="password">Password</label>
                          <div class="controls">
                            <input type="text" id="password" name="password" placeholder="" class="input-xlarge">
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- Username -->
                          <label class="control-label"  for="email">Email</label>
                          <div class="controls">
                            <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- Username -->
                          <label class="control-label"  for="name">Name</label>
                          <div class="controls">
                            <input type="password" id="name" name="name" placeholder="" class="input-xlarge">
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- Username -->
                          <label class="control-label"  for="phone">Phone</label>
                          <div class="controls">
                            <input type="password" id="phone" name="phone" placeholder="" class="input-xlarge">
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- Button -->
                          <div class="controls">
                            <button type="submit" class="btn btn-success" id="btnlog">Sign Up</button>
                          </div>
                        </div>
                          <a href="login.php">Already have an account?</a>
                      </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>