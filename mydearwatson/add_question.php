<?php
  include "includes/db_connect.php";
  session_start();
  if(!(isset($_SESSION['name'])))
  {
    header('location: admin.php');
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Elementary</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .container{margin:0; padding:15% 0 20%; width: 100%;}
  h1 { text-align: center; color: #fff; }
  .login-panel{z-index: 100; opacity: 0.8;}
  .panel{ position: relative; }
  .profile {position: absolute;top: -40px;background: #fff;border-radius: 100%;left: -35px;margin-left: 50%;}
  </style>
</head>
<body>
<nav>
  <ul>
    <li>
      <a href="add_question.php">Add Question</a>
    </li>
    <li>
      <a href="tardis_logout.php">Logout</a>
    </li>
    <li>
      <a href="tardis_leaderboard.php">Leaderboard</a>
    </li>
  </ul>
</nav>
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans);

  html {
  height:100%;
  background-image: linear-gradient(to right top, #8e44ad 0%, #3498db 100%);
}

  nav {
  max-width: 960px;
  mask-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #ffffff 25%, #ffffff 75%, rgba(255, 255, 255, 0) 100%);
  margin: 0 auto;
  padding: 60px 0;
}

nav ul {
  text-align: center;
  background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 25%, rgba(255, 255, 255, 0.2) 75%, rgba(255, 255, 255, 0) 100%);
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
}

nav ul li {
  display: inline-block;
}

nav ul li a {
  padding: 18px;
  font-family: "Open Sans";
  text-transform:uppercase;
  color: rgba(0, 35, 122, 0.5);
  font-size: 18px;
  text-decoration: none;
  display: block;
}

nav ul li a:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
  background: rgba(255, 255, 255, 0.1);
  color: rgba(0, 35, 122, 0.7);
}


</style>
<!--<div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>
<li><a href="https://www.jqueryscript.net/animation/Animated-Particle-Background-Plugin-jQuery.html">Download This Plugin</a></li>
<li><a href="https://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
<!--</script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>-->
  <div class="container animated-bg">
    <div class="row">
       <?php
          if(isset($_GET['msg']))
          {
            if($_GET['msg']==1)
            {
            echo "<script language='javascript' type='text/javascript'>";
            echo "alert('Question added successfully');";
            echo "</script>";
             }
             /*else if($_GET['msg']==2) 
             {
               echo "<script language='javascript' type='text/javascript'>";
            echo "alert('Incorrect username and password.');";
            echo "</script>";
             }*/
             else if($_GET['msg']==0) 
             {
               echo "<script language='javascript' type='text/javascript'>";
            echo "alert('Question could not be added. Please try again');";
            echo "</script>";
             }
          }


          ?>
      <div class="col-md-4 col-md-offset-4 login-panel">

        <div class="panel panel-default">
          <div class="panel-body">

            <h3 class="text-center">Add Questions</h3>

            <form class="form" action="insert_question.php" method="POST">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-bank" aria-hidden="true"></i>
                  </span>
                  <input type="number" name="question_no" class="form-control" placeholder="Add question number" >
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                  </span>
                  <label>Add Question Statement</label>
                  <textarea rows="6" cols="48" name="question" required></textarea>
                  <!--<input type="" name="name" class="form-control" placeholder="Name">-->
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-bank" aria-hidden="true"></i>
                  </span>
                  <input type="text" name="image" class="form-control" placeholder="Add image link" >
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  </span>
                  <input type="hint" name="hint" class="form-control" placeholder="Add Hint" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-key" aria-hidden="true"></i>
                  </span>
                  <input type="text" name="image_hover" class="form-control" placeholder="Enter hover image" >
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-key" aria-hidden="true"></i>
                  </span>
                  <input type="text" name="tabname" class="form-control" placeholder="Enter tab name" >
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-key" aria-hidden="true"></i>
                  </span>
                  <input type="text" name="tablogo" class="form-control" placeholder="Enter Tab Logo">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-key" aria-hidden="true"></i>
                  </span>
                  <input type="varchar" name="answer" class="form-control" placeholder="Enter Answer" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-key" aria-hidden="true"></i>
                  </span>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery.animated-bg.js"></script>
  <script>
    $(document).ready(function(){
      $('.animated-bg').animatedbg();
    });
  </script>
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
