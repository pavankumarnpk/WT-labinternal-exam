<?php
    include "server.php";
    session_start();
    if(isset($_POST['comment'])) {
        $comm=$_POST['comment'];
        $qry="INSERT INTO `coms` (comment) VALUES('$comm')";
        mysqli_query($db,$qry);
        header('location:register.php');
    }
?>
 <html>
  <head>
   <link  rel="stylesheet" type=" href="style.css">
  <header id="image">
    <img src="news.png" width=300px margin=20px>
   </header>
  <body>

     <h4>TIMES OF INDEA</h4>
     <img src="india.jpg" width=200px>
     <p>since obama's victory,racial crimes on upswing across us</p>
     <h4>SHALLOW INTRUSIONS</h4>
     <img src="hindhu.jpg" width=200px>
     <p>after clashes in ladakh,army braces for more'shallo intrusions'by PLA
     cap gains invesible more than once for new house</p>
      <h4>THE HINDHU</h4>
      <img src="thehindhu.jpg" width=200>
       <p>uncertainity loons large as lokapal bill goes to rajya sabha</p>
        <form method="post" action=""> 
  <input type="submit" value="submit" name="comment">
     <textarea type="text" name="comment" placeholder="comment section"></textarea>
  </form>
  <button>
	<a href="login.php">back</a>
	</button>
	<button>
	 <a href="home.php">logout</a> 
	</button>
  </body>
</html>

