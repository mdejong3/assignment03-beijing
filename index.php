<!--
STYLING SUGGESTIONS:

I picked these profiles on the basis that all of the guys are wearing suits in their pictures. So, I figured this would work well as a buisness-sytle website. 

Typeface: something modern-looking would probably compliment the buisness-like aesthetic. Doing what we did in class with one custom font for the headers and another for the paragraph text would probably work well. 

Color scheme: I was thinking that sticking to a fairly monochromatic scheme would help with the buisness feel.

-->

<?php include('includes/html-top.inc');?>

<body>

<div class="container"> <!--container to keep the content from the margins-->

	<header>
		<h1>Beijing &mdash; Assignment 03</h1>
		<p class="subtitle">Professional Portfolio</p>
		
	</header>

	<?php include('includes/nav.inc');?>

	<!--
		Javascript here!

		I was thinking it would look nice to have a slideshow cycling through each of the photos we have. If it would be possible also for the pictures to act as hyperlinks to the people's pages, that would be great

		It's possible that the photos we have won't work great for the slide show, since they're pretty small and ideally the slideshow would act as the middle of a Z-layout thing, so we'd want it to be big. I'll try to think of some way we can get bigger images that represent each page.
	-->

<!--LAYOUT: I was thinking that these could be in three rows stacked on top of each other with the "read more" buttons off to the right so that they would be in the terminal area, though I'm not sure how that will look in practice-->
<div class="row">

	<div class="col-4">
<div class="box">
	<h2 class="indexh2">Oliver Ostriker</h2>
	<p>A University of Rochester junior majoring in Financial Economics with various experience and good campus involvement.</p>
	<a href="[Oliver's page]">Read more about Oliver</a>
</div>
</div>

	<div class="col-4">
<div class="box">
	<h2 class="indexh2">Zubair Aziz</h2>
	<p>A University of Rochester junior majoring in Economics and Computer Science with solid web experience and some painting skills.</p>
	<a href="[Zubair's page]">Read more about Zubair</a>
</div>
</div>

	<div class="col-4">
<div class="box">
	<h2 class="indexh2">Kennedy Agusi</h2>
	<p>A University of Rochester senior majoring in Computer Science with strong leadership skills and various lab experience.</p>
	<a href="[Kennedy's page]">Read more about Kennedy</a>
</div>
</div>

</div>

<?php include ('includes/footer.inc');?>
</div>
</body>
</html>
