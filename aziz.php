<!doctype html>
<?php $thisPage="Aziz"; ?>
<?php include('includes/html-top.inc');?>

<body>

<div class="container"> <!--container to keep the content from the margins-->

	<header>
		<h1>Beijing &mdash; Assignment 03</h1>
		<p class="subtitle">Professional Portfolio</p>
		
	</header>

	<?php include('includes/nav.inc');?>

<div class="box">
<div class="row justify-content-center">
	<div class="col-3">
	<h2>Zubair Aziz</h2>
</div>
</div>


	<!--LAYOUT: it would be nice to keep these items in this order, since they're supposed to imitate a resume-->
<article>

	<div class="row">
	<div class="col">

	<h3>Education</h3>
		<ul>
			<li>School: University of Rochester, anticipated graduation 2019</li>
			<li>Majors: Economics, Computer Science</li>
			<li>Minors: None</li>
		</ul>

	<div class="list2">
	<h3>Skills</h3>
		<ul>
			<li>Experience working in a dev team</li>
			<li>Optimizing webpages for better load speeds and search rankings</li>
			<li>Painting, specializing in landscapes</li>
		</ul>
	</div>
</div>

	<div class="col">
	<figure>
		<img src="images/zubair.jpg" class="float-right" alt="Zubair Aziz"> 
	</figure>
</div>
</div>
</article>


	<div class="row">
	<div class="col-md-12">
	<h3>Work Experience</h3>
		<h4 class="top-buffer2">University of Rochester IT Consultant</h4>
			<p>As an IT Consultant at the U of R, I assist with network registration and troubleshoot network issues, troubleshoot NetID and login issues, provide support through various methods,assist with various types of malware on students' personal computers.</p>
		<h4>Media Prima Digital Developer Intern</h4>
			<p>At Media Prima Digital, I worked with the team to develop modern websites and apps for various different uses, and was trained in both front end and back end systems for web development.</p>

	<h3 class="top-buffer">Additional Experience</h3>
	<p>I'm involved in some extra-curricular activities such as Alpha Kappa Psi, the professional business fraternity; and Grass Roots Soccer, a health organization that uses the power of soccer to educate, inspire, and mobilize young people to lead healthier lives. </p>
	</div>
	</div>
</div>
<?php include ('includes/footer.inc');?>

</div>
</body>

</html>
