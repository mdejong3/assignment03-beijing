<?php include('includes/html-top.inc');?>

<body>

<div class="container"> <!--container to keep the content from the margins-->

	<header>
		<h1>Beijing -- Assignment 03</h1>
		<p class="subtitle">Professional Portfolio</p>
		
	</header>

	<?php include('includes/nav.inc');?>

	<h2>Kennedy Agusi</h2>

	<!--LAYOUT: it would be nice to keep these items in this order, since they're supposed to imitate a resume-->
<article>
<div class="box">
	<div class="row">

	<div class="col">

	<h3>Education</h3>
		<ul>
			<li>School: University of Rochester, anticipated graduation 2018</li>
			<li>Major: Computer Science</li>
			<li>Minor: Mathematics</li>
		</ul>
	</div>

	<div class="col">
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
		<img src="images/kennedy.jpg" alt="Kennedy Agusi"> <!--I'll try to make these better quality-->
		<figcaption>Kennedy Agusi</figcaption>
	</figure>
</div>
</div>
</div>
</article>

	<div class="top-buffer">
	<div class="row">
	<div class="col-md-8">
<div class="box">
	<h3>Work Experience</h3>
		<h4>Richland College Chemistry Lab Software Developer</h4>
			<p>As a software developer, I worked with my supervisor to develop an inventory tracking software for the lab.</p>
		<h4>Sharyland Utilities Researcher</h4>
			<p>At Sharyland Utilities, I researched "Mitigation Strategies to Minimize Voltage Impacts on ERCOT Grid by 50%" and drafted workable solutions and presented to Sharyland Board of Directors.</p>

</div>
	</div>


	<div class="col-md-4">
<div class="box">
	<h3>Additional Experience</h3>
	<p>I have extensive travel experience. After my high school in Nigeria, I traveled to four (4) different countries (UK, Spain, Israel and France) before coming to United States. My journey in United States started in community college in Dallas back in 2015. After completing my associate I transfered to University of Rochester (my traveling continues) to pursue my Bachelors. Ever since I came to United States I have had summer jobs in different states.</p>
	</div>
	</div>
	</div>
</div>

	<?php include ('includes/footer.inc');?>

</div>

</body>

</html>
