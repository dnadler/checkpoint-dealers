<?php
     session_name("Darin");
     session_start();
     include '../includes/confirm-login.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <?php
          include '../includes/head-includes.php';
     ?>   

    <title>>Purina CheckPoint Dealer Site || Contact Us</title>

   
  </head>

  <body>
     <header>
          <?php 
               include '../includes/header-logged-in.php';
          ?>
     </header>
    

    <!-- Main jumbotron for a primary marketing message or call to action -->
     <div class="jumbotron">
          <div class="container">
               <div class="col-md-7">
                    <h1>Contact Us!</h1>
                    <p>Submit your comment, question or concern below. We are typically able to respond within 24 hours.</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
          </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      
       <div class="row">
          <div id="wufoo-sjmqc0m0x8ojpy">
            Not displaying correctly? <a href="https://checkpoint.wufoo.com/forms/sjmqc0m0x8ojpy">Click here!</a>
          </div>
          <script type="text/javascript">var sjmqc0m0x8ojpy;(function(d, t) {
            var s = d.createElement(t), options = {
            'userName':'checkpoint',
            'formHash':'sjmqc0m0x8ojpy',
            'autoResize':true,
            'height':'697',
            'async':true,
            'host':'wufoo.com',
            'header':'show',
            'ssl':true};
            s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
            s.onload = s.onreadystatechange = function() {
            var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
            try { sjmqc0m0x8ojpy = new WufooForm();sjmqc0m0x8ojpy.initialize(options);sjmqc0m0x8ojpy.display(); } catch (e) {}};
            var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
            })(document, 'script');
          </script>
      </div>
      <hr>

      <?php
          include '../includes/footer.php';
     ?>
    </div> <!-- /container -->


 
  </body>
</html>
