<?php $currentPage = "Sign-up"; ?>
<!DOCTYPE html>
<html lang="en">


<?php include "inc/head.inc" ?>

<body>


<div class="banner">
	<a class="logo" href="index.php">
	<h1><img src="images/logo.png" alt="logo">
	Semper Fidelis</h1></a>
	<?php include "inc/nav.inc" ?>
</div>

<div class="container">

<div class="form">
	  	<h2 class="email">Sign up for our Newsletter!</h2>
        
        <form method= "post" action= "signup-processor.php">

            <label for="email">Email:</label>
                <input type="text" name="email" id="email">      

            <input type="submit" value="Sign up">
            
        </form>
</div>

<div class="pic">
	<img src="images/pic.jpg" alt="marines shooting">
</div>

</div>



<?php include "inc/footer.inc" ?>

<?php include "inc/scripts.inc" ?>

</body>

</html>