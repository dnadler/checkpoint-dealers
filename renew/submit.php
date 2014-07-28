<?php
     session_name("Darin");
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php
          //$root = realpath($_SERVER["DOCUMENT_ROOT"]);
          //include $root . '/includes/head-includes.php';
          include '../includes/head-includes.php';
     ?>   

     <title>Purina CheckPoint Dealer Site || Submit Customer List</title>

</head>

<body>
     <header>
          <?php 
               //include $root . '/includes/header-index.php';
               include '../includes/header-index.php';
          ?>
     </header>


     <!-- Main jumbotron for a primary marketing message or call to action -->
     <div class="jumbotron">
          <div class="container">
               <div class="col-md-7">
                    <h1>Submit Customer List</h1>
                    <p>If you have a customer list to submit, please fill out the form below. Select the appropriate file from your computer and send it in. If you would prefer, you may email your list to dnadler@PurinaCheckPoint.com</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
          </div>
     </div>

     <div class="container">
          <!-- Example row of columns -->
          <div class="row">
               
               <div id="wufoo-m2z9o730azycva">
                    Fill out my <a href="https://checkpoint.wufoo.com/forms/m2z9o730azycva">online form</a>.
               </div>
               <script type="text/javascript">
               var m2z9o730azycva;(function(d, t) {
                    var s = d.createElement(t), options = {
                         'userName':'checkpoint',
                         'formHash':'m2z9o730azycva',
                         'autoResize':true,
                         'height':'564',
                         'async':true,
                         'host':'wufoo.com',
                         'header':'show',
                         'ssl':true
                    };
                    s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
                    s.onload = s.onreadystatechange = function() {
                         var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
                         try { m2z9o730azycva = new WufooForm();m2z9o730azycva.initialize(options);m2z9o730azycva.display(); } catch (e) {}
                    };
                    var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
               })
               (document, 'script');
               </script>

          </div>

          <hr>

          <?php 
               //include $root . '/includes/footer.php';
               include '../includes/footer.php';
               //echo "<pre>";
               //var_dump($_SESSION);
               //echo "</pre>";
               //exit;
          ?>
     </div> <!-- /container -->
</body>
</html>
