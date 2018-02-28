<!--
STYLING SUGGESTIONS:

I picked these profiles on the basis that all of the guys are wearing suits in their pictures. So, I figured this would work well as a buisness-sytle website. 

Typeface: something modern-looking would probably compliment the buisness-like aesthetic. Doing what we did in class with one custom font for the headers and another for the paragraph text would probably work well. 

Color scheme: I was thinking that sticking to a fairly monochromatic scheme would help with the buisness feel.

-->

<!doctype html>
<?php $thisPage="Index"; ?>
<?php include('includes/html-top.inc');?>

<body>

<div class="container"> <!--container to keep the content from the margins-->

	<header>
		<h1>Beijing &mdash; Assignment 03</h1>
		<p class="subtitle">Professional Portfolio</p>
		
	</header>

	<?php include('includes/nav.inc');?>

	<div class="slideshow">
		<ul>
			<li><a href="ostriker.php"><img class="full" src="images/oliver.png" alt="Oliver Ostriker"></a>
				<p class="caption">Oliver Ostriker</p>
			</li>
			<li><a href="aziz.php"><img class="full" src="images/zubair.jpg" alt="Zubair Aziz"></a>
				<p class="caption">Zubair Aziz</p>
			</li>
			<li><a href="agusi.php"><img class="full" src="images/kennedy.jpg" alt="Kennedy Agusi"></a>
				<p class="caption">Kennedy Agusi</p>
			</li>
		</ul>
	</div>

<!--LAYOUT: I was thinking that these could be in three rows stacked on top of each other with the "read more" buttons off to the right so that they would be in the terminal area, though I'm not sure how that will look in practice-->
<div class="index">
<div class="row">

	<div class="col-4">
<div class="box">
	<h2>Oliver Ostriker</h2>
	<p>A University of Rochester junior majoring in Financial Economics with various experience and good campus involvement.</p>
	<a href="ostriker.php">Read more about Oliver</a>
</div>
</div>

	<div class="col-4">
<div class="box">
	<h2 class="indexh2">Zubair Aziz</h2>
	<p>A University of Rochester junior majoring in Economics and Computer Science with solid web experience and some painting skills.</p>

	<a href="aziz.php">Read more about Zubair</a>
</div>
</div>

	<div class="col-4">
<div class="box">
	<h2>Kennedy Agusi</h2>
	<p>A University of Rochester senior majoring in Computer Science with strong leadership skills and various lab experience.</p>
	<a href="agusi.php">Read more about Kennedy</a>
</div>
</div>
</div>
</div>

<?php include ('includes/footer.inc');?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/unslider-min.js"></script> 
<script>
jQuery(document).ready(function($) {
	$('.slideshow').unslider({
		autoplay: true,
		infinite: true,
		fluid: true
	});
});
</script>
</body>
</html>
