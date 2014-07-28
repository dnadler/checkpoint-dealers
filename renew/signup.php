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

     <title>Purina CheckPoint Dealer Site || Sign Up for CheckPoint</title>

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
                    <h1>Sign Up for CheckPoint</h1>
                    <p>If you are a Purina Dealer/Cooperative, and you would like your customers to receive quarterly cattle nutrition information, sign up for CheckPoint below.</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
          </div>
     </div>

     <div class="container">
          <!-- Example row of columns -->
          <div class="row">
               
              <div id="wufoo-z178eo191tiud9p">
                    Fill out my <a href="https://checkpoint.wufoo.com/forms/z178eo191tiud9p">online form</a>.
               </div>
               <script type="text/javascript">
                    var z178eo191tiud9p;(function(d, t) {
                         var s = d.createElement(t), options = {
                         'userName':'checkpoint',
                         'formHash':'z178eo191tiud9p',
                         'autoResize':true,
                         'height':'1236',
                         'async':true,
                         'host':'wufoo.com',
                         'header':'show',
                         'ssl':true
                    };
                    s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
                    s.onload = s.onreadystatechange = function() {
                         var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
                         try { z178eo191tiud9p = new WufooForm();z178eo191tiud9p.initialize(options);z178eo191tiud9p.display(); } catch (e) {}
                    };
                    var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
                    })(document, 'script')
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
