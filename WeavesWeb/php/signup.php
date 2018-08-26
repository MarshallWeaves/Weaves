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
                    <form class="form-horizontal" action="db.php" method="POST">
                      <fieldset>
                        <div id="legend">
                          <legend class="">Sign Up</legend>
                        </div>
                        <div class="control-group">
                          <!-- Username -->
                          <label class="control-label"  for="fname">First Name</label>
                          <div class="controls">
                            <input type="text" id="fname" name="fname" placeholder="" class="input-xlarge">
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- Password-->
                          <label class="control-label" for="lname">Last Name</label>
                          <div class="controls">
                            <input type="text" id="lname" name="lname" placeholder="" class="input-xlarge">
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
                          <label class="control-label"  for="password">Password</label>
                          <div class="controls">
                            <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- Button -->
                          <div class="controls">
                            <button type="submit" class="btn btn-success" id="btnlog">Sign Up</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>