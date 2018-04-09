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
      <div class="col-md-4 col-md-offset-4 login-panel">

        <div class="panel panel-default">
          <div class="panel-body">

           <div class="profile">
              <i class="fa fa-5x fa-user-circle" aria-hidden="true"></i>
            </div>

            <h3 class="text-center">Admin Login</h3>

            <form class="form" action="tardis_login.php" method="POST">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  </span>
                  <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-key" aria-hidden="true"></i>
                  </span>
                  <input type="password" name="password" class="form-control" placeholder="Password">
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
