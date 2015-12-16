<!DOCTYPE html>
<html>
<head>
	<title>Ali Bati - Freelance Creative Director / Art Director</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<header>

			<nav>
				<div>
					<ul>
						<li><a class="navlink" href="index.html">All</a></li>
  						<li><a class="navlink" href="index.html">Film</a></li>
  						<li><a class="navlink" href="index.html">Design+Digital</a></li>
  						<li><a class="navlink" href="index.html">Print+Outdoor</a></li>
  						<li><a class="navlink" href="index.html">Personal</a></li>
  						<li><a class="navlink active" href="contact.php">Contact</a></li>
					</ul>
			</nav>

			<div id="headerlogo">
					Ali Bati
			</div>

	</header>

	<main>

		<section id="about">
		<div><hr class="border1"></div>

  		<p>Feel free to contact me. 

  	



		<div><hr class="border1"></div>



<?php 
$message="";
$message=$_REQUEST['message'];


if ($message=="thanks"){


echo "<div class='form-thanks'>Thank you for contacting me.</div>";

}


?>
<form action="submit.php" method="POST">

			  
			  <div>
			    <label class="desc" id="title1" for="Field1">Full Name</label>
			    <div>
			      <input id="Field1" name="name" type="text" class="field text" value="" size="8" tabindex="1">
			    </div>
			  </div>
			    
			  <div>
			    <label class="desc" id="title3" for="Field3">
			      Email
			    </label>
			    <div>
			      <input id="Field3" name="email" type="email" class="field text" spellcheck="false" value="" maxlength="255" tabindex="2"> 
			   </div>
			  </div>
			    
			  <div>
			    <label class="desc" id="title4" for="Field4">
			      Message
			    </label>
			  
			    <div>
			     <textarea id="Field4" name="message" class="field" rows="10" cols="50" tabindex="3"  ></textarea><div>


			     </div>
			    </div>
			  </div>
			    
			  <div>
			    <fieldset class="field">
			    
			      <legend id="title5" class="desc" tabindex="4">
			       Contact Reason
			      </legend>
			      
			      <div>
			      	<input id="radioDefault_5" name="reason" type="hidden" value="">
			      	<div>
			      		<input id="Field5_0" name="reason" type="radio" value="Job Inquiry" tabindex="5" checked="checked">
			      		<label class="choice" for="Field5_0">Job Inquiry</label>
			      	</div>
			        <div>
			        	<input id="Field5_1" name="reason" type="radio" value="Just Saying Hi!" tabindex="6">
			        	<label class="choice" for="Field5_1">Just Saying Hi!</label>
			        </div>
			        <div>
			        	<input id="Field5_2" name="reason" type="radio" value="Testing if form works!" tabindex="7">
			        	<label class="choice" for="Field5_2">Testing if form works!</label>
			        </div>
			      </div>
			    </fieldset>
			  </div>
			  
			
			     
			  <div>
			  
						        	<input id="Field5_2" name="submit" type="submit" value="Submit" >

			  </div>
			 
			  
			
			  
			</form>


				</section>

	</main>

</body>
</html>