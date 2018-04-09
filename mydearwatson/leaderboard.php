<?php
include "includes/db_connect.php";
session_start();
?>
 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Richik Bhattacharjee">
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
	<?php
	if(isset($_SESSION['name']))
	{
		echo '<nav>
  <ul>
    <li>
      <a href="http://jeclat.co.in/elementary.html"><img src="image/221B.png" style="height : 45px; width : 120px;"></a>
    </li>
    <li>
      <a href="logout.php">Logout</a>
    </li>
    <li>
      <a href="leaderboard.php">Leaderboard</a>
    </li>
    <li>
      <a href="compete.php">Compete</a>
    </li>
  </ul>
</nav>';
	}
	else
	{
		echo '<nav>
  <ul>
    <li>
      <a href="http://jeclat.co.in/elementary.html"><img src="image/221b.png" style="height : 45px; width : 120px;"></a>
    </li>
    <li>
      <a href="index.php">Login</a>
    </li>
    <li>
      <a href="leaderboard.php">Leaderboard</a>
    </li>
    <li>
      <a href="compete.php">Compete</a>
    </li>
  </ul>
</nav>';
	}

?>
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

  <div class="container animated-bg">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 login-panel">

        <div class="panel panel-default">
          <div class="panel-body">
            <h3 class="text-center" style="padding-top: 15px;">Leaderboard</h3>
            <div class="container" style="padding-top: 15px;" id="main_body">
        <div class="row">
        <div class="table-responsive">
            <table class="table table-bordered text-white">
            <thead>
              <tr>
                <th>Rank</th>
                <th>User</th>
                <th>Level</th>
                <th>College</th>
              </tr>
            </thead>
            <?php
            $query="SELECT * FROM `user` ORDER BY level DESC , response ASC ";
           
            $rank  = 1;          
            $result=mysqli_query($connection,$query);

            while($row=mysqli_fetch_assoc($result))
                {  

                  echo '<tbody>
                          <tr>
                            <td>'.$rank.'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['level'].'</td>
                            <td>'.$row['college'].'</td>
                          </tr>
                        </tbody>';
                        $rank++;   
                }
            ?>
             </table>
             </div>
            </div>
            </div>
       </div> 
          

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
