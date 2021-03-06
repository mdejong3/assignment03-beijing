<!doctype html>
<?php $thisPage="Agusi"; ?>
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
	<h2>Kennedy Agusi</h2>
</div>
</div>
	<!--LAYOUT: it would be nice to keep these items in this order, since they're supposed to imitate a resume-->
<article>

	<div class="row">

	<div class="col">

	<h3>Education</h3>
		<ul>
			<li>School: University of Rochester, anticipated graduation 2018</li>
			<li>Major: Computer Science</li>
			<li>Minor: Mathematics</li>
		</ul>

	<div class="list2">
	<h3>Skills</h3>
		<ul>
			<li>Strong leadership</li>
			<li>Software, mobile, and web development experience</li>
			<li>Exceptional problem-solving</li>
		</ul>
	</div>
</div>

	<div class="col">
	<figure>
		<img src="images/kennedy.jpg" class="float-right" alt="Kennedy Agusi"> 
	</figure>
</div>
</div>
</article>

	<div class="row">
	<div class="col-md-12">
	<h3>Work Experience</h3>
		<h4 class="top-buffer2">Richland College Chemistry Lab Software Developer</h4>
			<p>As a software developer, I worked with my supervisor to develop an inventory tracking software for the lab.</p>
		<h4>Sharyland Utilities Researcher</h4>
			<p>At Sharyland Utilities, I researched "Mitigation Strategies to Minimize Voltage Impacts on ERCOT Grid by 50%" and drafted workable solutions and presented to Sharyland Board of Directors.</p>

	<h3 class="top-buffer">Additional Experience</h3>
	<p>I have extensive travel experience. After my high school in Nigeria, I traveled to four (4) different countries (UK, Spain, Israel and France) before coming to United States. My journey in United States started in community college in Dallas back in 2015. After completing my associate I transfered to University of Rochester (my traveling continues) to pursue my Bachelors. Ever since I came to United States I have had summer jobs in different states.</p>
	</div>
	</div>
</div>

<?php include ('includes/footer.inc');?>

</div>
</body>

</html>
