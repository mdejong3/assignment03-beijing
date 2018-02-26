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
	<h2>Oliver Ostriker</h2>
</div>
</div>

	<!--LAYOUT: it would be nice to keep these items in this order, since they're supposed to imitate a resume-->

<article>
	<div class="row">
		<div class="col">

	<h3>Education</h3>
		<ul>
			<li>School: University of Rochester, anticipated graduation 2019</li>
			<li>Major: Financial Economics</li>
			<li>Minors: Business, Computer Science</li>
		</ul>

	<div class="list2">
	<h3>Skills</h3>
		<ul>
			<li>Teaching experience</li>
			<li>Microsoft Excel</li>
			<li>Skillful time-management</li>
		</ul>
	</div>
</div>


	<div class="col">
	<figure>
		<img src="images/oliver.png" class="float-right" alt="Oliver Ostriker"> 
	</figure>
	</div>

	</div>
</article>

	<div class="top-buffer">
	<div class="row">
	<div class="col-md-12">
	<h3>Work Experience</h3>
		<h4>Skyview Ventures LCC Intern</h4>
			<p>As an intern at Skyview Ventures LLC, a renewable energy finance, development and asset management company, I learned about the solar market through research and analysis into government policies that affect the supply and demand of Solar Renewable Energy Credits (SRECs).</p>
		<h4>Camp Gan Israel Camp Counselor</h4>
			<p>At Camp Gan Israel, me and one other counselor lead a group of about 15 five and six year olds through various activities, including arts and crafts and sports. </p>

	<h3>Additional Experience</h3>
	<p>On campus, I have experience working as a Program Assistant for the University of Rochester’s Center for Emerging and Innovative Sciences (CEIS), a program that promotes economic development in the upstate New York region. Here, I had the opportunity to conduct research into the optics and photonics industries of upstate New York, and to help organize and set-up both the 2017 CEIS Technology Showcase and the 2017 Light and Sound Interactive, conferences that attracted hundreds of members of the optics and photonics industries including university researchers and executives from companies with areas of common interest.</p>
	</div>
	</div>
</div>
</div>
<?php include ('includes/footer.inc');?>



</body>

</html>
