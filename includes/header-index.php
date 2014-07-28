<?php include_once("analytics.php") ?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container">
          <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="http://dealers.purinacheckpoint.com">Home</a>
          </div>
          <div class="navbar-collapse collapse">
               <form class="navbar-form navbar-right" role="form" method="post" id="login" name="login" action="http://dealers.purinacheckpoint.com/login/parse-credentials.php">
                    <div class="form-group">
                         <input type="text" placeholder="User ID" class="form-control" name="user">
                    </div>
                    <div class="form-group">
                         <input type="password" placeholder="Password" class="form-control" name="pdub">
                         
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                    <a href="http://dealers.purinacheckpoint.com/login/reset-password/">Reset Password</a>
               </form>
               
          </div><!--/.navbar-collapse -->
     </div>
</div>