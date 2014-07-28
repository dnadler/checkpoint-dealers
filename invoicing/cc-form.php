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

    <title>>Purina CheckPoint Dealer Site || Credit Card Payment Request Form</title>

   
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
                    <h1>Credit Card Payment</h1>
                    <p>If you would prefer to pay your CheckPoint invoice with a credit card, please fill out the form below. We'll setup a payment gateway, and send you the link. Please note: A processing fee will apply.</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
          </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      
       <div class="row">
          <div id="wufoo-ruqwrk713umano">
            Not displaying correctly? <a href="https://checkpoint.wufoo.com/forms/ruqwrk713umano">Click here!</a>
          </div>
          <script type="text/javascript">var ruqwrk713umano;(function(d, t) {
            var s = d.createElement(t), options = {
            'userName':'checkpoint',
            'formHash':'ruqwrk713umano',
            'autoResize':true,
            'height':'601',
            'async':true,
            'host':'wufoo.com',
            'header':'show',
            'ssl':true};
            s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
            s.onload = s.onreadystatechange = function() {
            var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
            try { ruqwrk713umano = new WufooForm();ruqwrk713umano.initialize(options);ruqwrk713umano.display(); } catch (e) {}};
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
