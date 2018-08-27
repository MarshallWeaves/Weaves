<html>    
    <head>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <form class="form-horizontal" action="php/login.php" method="POST">
                      <fieldset>
                        <div id="legend">
                          <legend class="">Login</legend>
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
                            <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- Button -->
                          <div class="controls">
                            <button type="submit" class="btn btn-success" id="btnlog">Login</button>
                          </div>
                        </div>
                        <a href="php/signup.php">No Account?</a>
                      </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>