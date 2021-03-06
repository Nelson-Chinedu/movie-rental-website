<?php
session_start();
include ('config/db.php');


$res=mysql_query("SELECT * FROM sign_up WHERE `username`='$username'");
$row=mysql_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>xbox films</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Animal store">
  <meta name="keywords" content="HTML,CSS,bootstrap 4,film,movie,rental-store">
  <meta name="author" content="Chinedu Nelson">
	<link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<header>
<div class="container-fluid" id="home">
	<div class="row info">
	  <div class="col-md-6 col-sm-3">
		  <p>Operating hours</p>
		  <p>8 am to 5:30pm Monday - Friday</p>
	  </div>
	  <div class="col-md-6 col-sm-3 contact-top">
		  <p>24/7 Hotline</p>
		  <p>0800-000-2700</p>
	  </div>
	</div>
</div>
<nav class="navbar navbar-expand-md bg-dark navbar-dark ">
		  <a href="index.html" class="navbar-brand">xbox films</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
		    <span class="navbar-toggler-icon"></span>
	    </button>
  <div id="myNav" class="collapse navbar-collapse">
	  <ul class="navbar-nav top2">
		  <li class="nav-item"><a class="nav-link" href="userPage.php">home</a></li>
		  <li class="nav-item"><a class="nav-link" href="#about">about us</a></li>
		  <li class="nav-item"><a class="nav-link" href="#comingSoon">coming soon</a></li>
		  <li class="nav-item"><a class="nav-link" href="#retailPromo">promo &amp; retail</a></li>
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Movies</a>
         <div class="dropdown-menu">
           <a class="dropdown-item" href ="actionMov.php">Action</a>
           <a class="dropdown-item" href="dramaMov.php">Drama</a>
			     <a class="dropdown-item" href="romanceMov.php">Romance</a>
           <a class="dropdown-item" href="comedyMov.php">Comedy</a>
         </div>
      </li>
		  <li class="nav-item"><a class="nav-link" href="#contact">contact us</a></li>
		</ul>
		<ul class="navbar-nav justify-content-end ml-auto">
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Welcome, <?php echo $row['firstname'];?> <img src="image/user/user.svg" width="20px" height="15px"></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" data-toggle="modal" data-target="#myModal10" href ="#">Profile</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#myModal11" href="#">Upload movie</a>
							<a class="dropdown-item" data-toggle="modal" data-target="#myModal12" href="#">Change password</a>
             <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
            </li>
    </ul>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
	</ul>
	<div class="carousel-inner image">
		<div class="carousel-item active">
			<img src="image/slider/captain.jpg" class="img-responsive" style="height:auto;" alt="image">
		</div>
		<div class="carousel-item">
			<img src="image/slider/bn-2.jpg" class="img-responsive" style="height:auto;" alt="image">
		</div>
		<div class="carousel-item">
			<img src="image/slider/bn4.jpg" class="img-responsive" style="height:auto;" alt="image">
		</div>
		<div class="carousel-item">
			<img src="image/slider/bn-1.jpg" class="img-responsive" style="height:auto;" alt="image">
		</div>
		<div class="carousel-item">
			<img src="image/slider/bn3.jpg" class="img-responsive" style="height:auto;" alt="image">
		</div>

		  <!-- Left and right controls -->
		<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
</div>
</header>
<section class="main-section" id="about">
  <div class="jumbotron jumbotron-fluid">
		<div class="container">
	  <div class="row">
		  <div class="col-md-12 col-sm-12">
		    <article class="article-a" id="">
          <p class="para-1">xbox is a dynamic film exhibition leading company with a 
            vision to be the no.1 brand in Nigeria. We are currently top notch when it comes to movies where you get 
            all your latest and trending movies whether in Action, Drama, Series, Comedy we are currently implementing a 
            strategic development plan to roll-out twenty five (25) centres in lagos and other states before January, 2019.
            The company management team has over 100 years combined movie operation and development experience gained 
            in England, Italy, USA, Spain and Nigeria. xbox has a clear and well-understood organisational structure 
            and strives to appoint employees with requisite skills, knowledge and experience for the roles they undertake.
            Our designs and operation style largely incorporates complimentary multifarious features including games 
            arcade, ice cream café, food concession, toys shop, digital cinema, 3D cinema and kid’s club. xbox success is 
            driven primarily by a strong experienced management team, innovative marketing activities and impressive guest
            service standards.</p>
		     </article>
		  </div>
	  </div>
		</div>
  </div>
<div class="container">
  <div class="row">
	  <div class="col-md-12 col-sm-12">
		  <h2 class="article-caption" id="comingSoon"><span class="caption-color">in the spotlight</span> coming soon</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
	  <div id="comingSoon-carousel" class="carousel slide spotlight" data-ride="carousel">
		  <div class="carousel-inner ">
			  <div class="carousel-item active">
				  	<img src="image/trending/img2.png" alt="" height="auto" />
					  <img src="image/trending/img4.png" alt="" height="auto" />
					  <img src="image/trending/img4.png" alt="" height="auto" />
					  <img src="image/trending/img6.png" alt="" height="auto" />
						<img src="image/trending/img2.png" alt="" height="auto" />
			  </div>
		  	<div class="carousel-item">
				  	<img src="image/trending/img4.png" alt="" height="auto" />
					<img src="image/trending/img7.png" alt="" height="auto" />
					<img src="image/trending/img4.png" alt="" height="auto" />
				  	<img src="image/trending/img3.png" alt="" height="auto" />
					<img src="image/trending/img7.png" alt="" height="auto" />
			 </div>
	  	</div>
	 </div>
	 </div>
 </div>
</div>
<div class="article-b" id="retailPromo">
  <div class="container">
	  <div class="row">
			<div class="col-md-12">
	  	<h2 class="article-b-caption">shhhhh!!! Enter your email and get exclusive deals you will not find anywhere</h2>
			<?php echo $mailErr; ?>
			</div>
			<div class="col-md-12">
			  <form method="POST" id="formSub" name="formFeed" action="thank_you_1.php">
			  	<div class="form-group">
					  <label class="sr-only" for="email">Email address:</label>
						  <input type="email" class="form-control inputSubscribe" id="email" name="emailSub" placeholder="Enter email address" autocomplete="off">
						</div>
						<div class="form-group">
						  <button type="submit" class="btn btn-info btn-lg btn-subscribe" id="btnSub" name="subscribe">Subscribe</button>
						</div>
					</form>
					</div>
			</div>
	</div>
</div>
<div class="container">
  <div class="row">
	  <div class="col-md-12">
		  <h2 class="article-caption" id="trending"><span class="caption-color">drama</span> movies</h2>
		</div>
	</div>
	<div class="row" id="card">
	  <div class="col-md-3 col-sm-3">
		  <div class="thumbnail thumbnail-caption">
			  <img src="image/trending/img2.png" class="img-responsive" alt="image">
			<div class="caption">
			  <p class="guidance">PG 18 <span data-toggle="modal" data-target="#myModal1" class="film-title">movie info</span></p>
			</div>
		 </div>
		</div>
	 <div class="col-md-3 col-sm-3">
		  <div class="thumbnail thumbnail-caption">
			  <img src="image/trending/tr3.jpg" class="img-responsive" alt="image">
			<div class="caption">
			  <p class="guidance">PG 16 <span data-toggle="modal" data-target="#myModal2" class="film-title">movie info</span></p>
			</div>
		 </div>
	 </div>
	 <div class="col-md-3 col-sm-3">
	   <div class="thumbnail thumbnail-caption">
		   <img src="image/trending/tr2.jpg" class="img-responsive" alt="image">
			   <div class="caption">
				   <p class="guidance">PG 16 <span data-toggle="modal" data-target="#myModal3" class="film-title">movie info</span></p>
			   </div>
		 </div>
		</div>
		<div class="col-md-3 col-sm-3">
		  <div class="thumbnail thumbnail-caption">
			  <img src="image/trending/img7.png" class="img-responsive" alt="image">
			    <div class="caption">
				    <p class="guidance">PG G <span data-toggle="modal" data-target="#myModal4" class="film-title">movie info</span></p>
			    </div>
		  </div>
		 </div>
		</div>
		<div class="row" id="card2">
		  <div class="col-md-3 col-sm-3">
		    <div class="thumbnail thumbnail-caption">
			    <img src="image/trending/tr4.jpg" class="img-responsive" alt="image">
			      <div class="caption">
				      <p class="guidance">PG G <span data-toggle="modal" data-target="#myModal5" class="film-title">movie info</span></p>
			      </div>
		     </div>
		   </div>
		   <div class="col-md-3 col-sm-3">
		     <div class="thumbnail thumbnail-caption">
		       <img src="image/trending/img3.png" class="img-responsive" alt="image">
			       <div class="caption">
				       <p class="guidance">PG 16 <span data-toggle="modal" data-target="#myModal6" class="film-title">movie info</span></p>
			       </div>
		      </div>
	     </div>
		   <div class="col-md-3 col-sm-3">
		     <div class="thumbnail thumbnail-caption">
			     <img src="image/trending/img6.png" class="img-responsive" alt="image">
			       <div class="caption">
				       <p class="guidance">PG 16 <span data-toggle="modal" data-target="#myModal7" class="film-title">movie info</span></p>
			       </div>
		     </div>
		   </div>
		   <div class="col-md-3 col-sm-3">
		     <div class="thumbnail thumbnail-caption">
			     <img src="image/trending/img2.png" class="img-responsive" alt="image">
			       <div class="caption">
				       <p class="guidance">PG 16 <span data-toggle="modal" data-target="#myModal8" class="film-title">movie info</span></p>
			       </div>
		     </div>
		   </div>
		</div>
</div>
<div class="article-c" id="contact">
  <div class="container">
	  <div class="row">
		  <div class="col-md-12">
			  <h2 class="article-c-caption">contact</h2>
			</div>
		</div>
		<div class="row full-contact">
		  <div class="col-md-6 map-contact">
		    <p>935 Webster Ave New Streets Lagos</p>
				<p>Nigeria.</p>
				<p>+234 813 234 5676</p>
				<p>info@xboxfilms.com</p>
			</div>
			<div class="col-md-6">
			  <form id="formContact" name="contact" method="post" action="thank_you_2.php">
				  <div class="form-group form-contact">
					  <label for="name">Name: <span class='error' id="error_name"> <?php echo $nameErr; ?></span></label>
						<input type="text" class="form-control" id="contact_name" name="name" placeholder="Enter Name" value="<?php echo $name; ?>" autocomplete="off">
					</div>
					<div class="form-group form-contact">
					  <label for="email">Email Address: <span class='error' id="error_email"> <?php echo $emailErr; ?></span></label>
						<input type="email" class="form-control" id="contact_email" name="email" value="<?php echo $email; ?>" placeholder="Enter Email" autocomplete="off" >
					</div>
					<div class="form-group form-contact">
					  <label for="msg">Message: <span class='error' id="error_message"> <?php echo $messageErr; ?></span></label>
						<textarea class="form-control" id="contact_message" name="message" cols="30" rows="10" autocomplete="off" ><?php echo $message; ?></textarea>
					</div>
					<button type="submit" class="btn btn-info btn-lg btn-send" name="submitForm" >Send Message</button>
        </form> 
			</div>
		</div>
	</div>
</div>
 
<div class="article-d">
  <div class="container"> 
		<div class="row">
	  <div class="col-md-3 col-sm-3 nav-footer">
		  <p><a href="#about">about us</a></p>
			<p><a href="#comingSoon">coming soon</a></p>
			<p><a href="#retailPromo">promo &amp; retail</a></p>
			<p><a href="#trending">trending</a></p>
			<p><a href="#contact">contact us</a></p>
		</div>
		<div class="col-md-3 col-sm-3 nav-footer-2">
		  <p><a href="#">locations</a></p>
			<p><a href="#">operating hours</a></p>
			<p><a href="#">delivery service</a></p>
			<p><a href="#">careers</a></p>
		</div>
		</div>
	</div>
</div>
<div class="footer">
  <div class="container">
	  <div class="row">
		  <div class="col-md-12">
			  <p>copyright &copy; All rights reserved - xbox films 2018</p>
			</div>
		</div>
	</div>
</div>
<div id="myModal1" class="modal fade" >  <!-- Modal content for Modal1 -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Movie title: Rampage</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="image/trending/img2.png" alt=""> <p>Dwayne Johnson stars as primatologist Davis Okoye, a man who keeps people at
				 a distance but shares an unshakable bond with George, the extraordinary intelligent, incredibly rare albino silverback gorilla
				 who has been in his care since he rescued the young orphan from poachers. But a rogue genetic experiment gone awry mutates this gentle 
				 ape into a raging creature of enormous size.</p>
      </div>
      <div class="modal-footer">
	    <button type="button" class="btn btn-default" data-dismiss="">Rent movie</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  <!-- end of Modal content for Modal1-->
<div id="myModal2" class="modal fade" role="dialog">  <!-- Modal content for Modal2 -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Movie title: Maze Runner</h4>
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
       <img src="image/trending/tr3.jpg" alt=""> <p>Thomas (Dylan O'Brien), a teenager arrives in a glade at the center of a
				 giant labtrinth. like the other youths dumped there before him, he has memory of his previuos life. Thomas quickly becomes
				 part of the group and soon after demonstrates a unique perspective that scores him a promotion to Runner status - 
				 those who patrol the always changing maze to find an escape route.</p>
      </div>
      <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Rent movie</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  <!-- end of Modal content for Modal2-->
<div id="myModal3" class="modal fade" role="dialog">  <!-- Modal content for Modal3 -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Movie title: skyscraper</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    <div class="modal-body">
       <img src="image/trending/tr2.jpg" alt=""> <p>Former FBI Hostage Rescue Team leader and U.S war veteran will for now assesses security
				 for skyscrapers. He's on assignment in china when he finds the tallest, safest building in the world suddenly ablaze, and
				 he's been framed for it.</p>
    </div>
    <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Rent movie</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  <!-- end of Modal content for Modal3-->
<div id="myModal4" class="modal fade" role="dialog">  <!-- Modal content for Modal4 -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Movie title: Deadpool 2</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="image/trending/img7.png" alt=""> <p>Wisecracking mecenary Deadpool meets Russell, an angry teenage mutant who lives at an 
				 orphanage. when Russell becomes the target of cable - a genetically enhanced soldier from the future - Deadpool realizes that he'll
				 need some help saving the boy from such a superior enemy. He soon joins forces with Bedlam, Shatterster, Domino and other powerful
				 mutants to protect young Russell from cableand his advanced weaponry.</p>
      </div>
      <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Rent movie</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  <!-- end of Modal content for Modal4-->
<div id="myModal5" class="modal fade" role="dialog">  <!-- Modal content for Modal5 -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Movie title: Storks</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="image/trending/tr4.jpg" alt=""> <p>Storks deliver babies - or at least they used to. Now, they deliver packages for
				 a global internet retail giant. Junior and his friend Tulip (Katie Crown), the only human on stork Mountain, race against time to make
				 their first baby drop before the boss (Kelsey Grammer) finds out.</p>
      </div>
      <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Rent movie</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  <!-- end of Modal content for Modal5-->
<div id="myModal6" class="modal fade" role="dialog">  <!-- Modal content for Modal6 -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Movie title: infinity wars</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="image/trending/tr6.jpg" alt=""> <p>iron man, thor, the hulk and the rest of the avengers unite to battle their
				 most powerful enemy yet - the evil thanos. on a mission to collect all six infinity stones, thanos plans to use the
				 artifacts to inflict his twisted will on reality. the fate of the planet and existence itself has never been more
				 uncertain as everything the avengers have fought for has led up to this moment.</p>
      </div>
      <div class="modal-footer">
	    <button type="button" class="btn btn-default" data-dismiss="modal">Rent movie</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  <!-- end of Modal content for Modal6-->
<div id="myModal7" class="modal fade" role="dialog">  <!-- Modal content for Modal7 -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Movie title: solo</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="image/trending/tr5.jpg" alt=""> <p>young han solo finds adventure when he joins a gang of galactic smugglers 
				including a 196-year old wookie named chewbacca. indebted to the gangstar dryden vos, the crew devises a daring plan to travel 
				to the mining planet kessel to steal a batch of valuable coaxium.</p>
      </div>
      <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Rent movie</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  <!-- end of Modal content for Modal7-->
<div id="myModal8" class="modal fade" role="dialog">  <!-- Modal content for Modal8 -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Movie title: rampage</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="image/trending/img2.png" alt=""> <p>PRIMATOLOGIST DAVIS OKOYE SHARES AN UNSHAKABLE BOND WITH GEORGE,
           THE EXTRAORDINARY INTELLIGENT GORILLA WHO HAS BEEN IN HIS CARE SINCE BIRTH. BUT A ROGUE GENETIC EXPERIMENT GONE.</p>
      </div>
      <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Rent movie</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  <!-- end of Modal content for Modal8-->

<div id="myModal10" class="modal fade" role="dialog">  <!-- Modal content for Modal10 -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="text-align:center;">Profile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
				<form id="updateForm" name="update" method="post" action='updatescript.php'>
				  <div class="form-group form-contact">
					  <label for="username">Firstname</label>
						<input type="text" class="form-control" id="update_fname" name="updateFname" placeholder="Firstname" value="<?php echo $row['firstname'];?>" autocomplete="off">
					</div>
					 <div class="form-group form-contact">
					  <label for="username">Lastname</label>
						<input type="text" class="form-control" id="update_lname" name="updateLname" placeholder="Lastname" value="<?php echo $row['lastname'];?>" autocomplete="off">
					</div>
					 <div class="form-group form-contact">
					  <label for="username">Email address</label>
						<input type="email" class="form-control" id="update_email" name="updateEmail" placeholder="Enail Address" value="<?php echo $row['email'];?>" autocomplete="off">
					</div>
					 <div class="form-group form-contact" hidden>
					  <label for="username" >Username</label>
						<input type="text" class="form-control" id="update_uname" name="updateUname" placeholder="Username" value="<?php echo $row['username'];?>" autocomplete="off" hidden>
					</div>
					<div class="form-group form-contact" hidden>
					  <label for="password">Password</label>
						<input type="password" class="form-control" id="update_pwd" name="updatePwd"  placeholder="Password" autocomplete="off" hidden>
					</div>
					<button type="submit" class="btn btn-info btn-md" name="updateUser" id="updateProfile">Update</button>
        </form> 
      </div>
    </div>
  </div>
</div>  <!-- end of Modal content for Modal10-->
<div id="myModal11" class="modal fade" role="dialog" data-backdrop='static'>  <!-- Modal content for Modal11 -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="text-align:center;">Upload a movie</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
				<form id="updateForm" name="update" method="post" action='updatescript.php'>
				  <div class="form-group form-contact">
					  <label for="username">Movie name</label>
						<input type="text" class="form-control" id="update_fname" name="updateFname" placeholder="Movie name" autocomplete="off">
					</div>
					 <div class="form-group form-contact">
					  <label for="username">Genre</label>
						<select class="form-control">
						 <option>Choose Genre</option>
						 <option>Action</option>
						 <option>Drama</option>
						 <option>Romance</option>
						 <option>Comedy</option>
						</select>
					</div>
					 <div class="form-group form-contact">
					  <label for="username">PG</label>
							<select class="form-control">
						 <option>Choose PG</option>
						 <option>G</option>
						 <option>13</option>
						 <option>16</option>
						</select>
					</div>
					 <div class="form-group form-contact">
					  <label for="username" >Movie info</label>
						 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
					<div class="form-group form-contact">
					  <label for="password">upload</label>
						<input type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
					<button type="submit" class="btn btn-info btn-md" name="updateUser" id="updateProfile">Upload</button>
        </form> 
      </div>
    </div>
  </div>
</div>  <!-- end of Modal content for Modal11-->
<div id="myModal12" class="modal fade" role="dialog" data-backdrop='static'>  <!-- Modal content for Modal11 -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="text-align:center;">Change password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
			<label><?php echo $errorMsg ?></label>
      <div class="modal-body">
				<form id="changePwdForm" name="changePassword" method="post" action="">
				   <div class="form-group form-contact">
					  <label for="username" >Username</label>
						<input type="text" class="form-control" id="change_uname" name="changeUname" placeholder="Username" value="<?php echo $row['username'];?>" autocomplete="off">
					</div>
				  <div class="form-group form-contact">
					  <label for="password">Old password</label>
						<input type="password" class="form-control" id="change_password" name="changePwdOld" placeholder="Enter old password">
					</div>
					<div class="form-group form-contact">
					  <label for="password">New password</label>
						<input type="password" class="form-control" id="change_password_old" name="changePwdNew" placeholder="Enter new password">
					</div>
					<div class="form-group form-contact">
					  <label for="password">Confirm new password</label>
						<input type="password" class="form-control" id="change_password_confirm" name="changePwdCon" placeholder="Confirm new password">
					</div>
					<button type="submit" class="btn btn-info btn-md" name="changeUserPwd" >Change password</button>
        </form> 
      </div>
    </div>
  </div>
</div>  <!-- end of Modal content for Modal12-->
</section>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>