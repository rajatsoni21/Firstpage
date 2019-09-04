<! DOCTYPE html>
<html lang="en">
<head>
	<?php include_once('main_head.php');  ?>
</head>
<body>
  <header>
    <?php include_once('web_head.php');  ?>
  </header>
  <main>
    <div class="container">
      <div class="main_title">
        <h1>GET YOUR DAILY UNIQUE BATCH FROM PICKIEZ</h1>
      </div>
      <div class="my_form">
        <form name="username" method="post" action="batch.php">
          Enter Your Name Here: <br>
        <input type="text" name="username" placeholder="enter the name for your pickiez batch"></input><br>
        <input type="submit" value="Get Today's Pickiez"></input><br>
        </form>
      </div>
      <hr>
      <h2 style="text-align : center">Check People Favorite Pickiez</h2>
      <hr>
      <div class="gallery">
        <img src="img/1.jpg"></img>
         <img src="img/2.jpg"></img>
          <img src="img/3.jpg"></img>
           <img src="img/4.jpg"></img>
          <img src="img/5.jpg"></img>
         <img src="img/6.jpg"></img>
        <img src="img/7.jpg"></img>
       <img src="img/8.jpg"></img> 
      </div>
    </div>
  </main>
  <footer>
     <?php include_once('web_footer.php');  ?>
  </footer> 
</body>
</html>