<!--
STYLING SUGGESTIONS:

I picked these profiles on the basis that all of the guys are wearing suits in their pictures. So, I figured this would work well as a buisness-sytle website. 

Typeface: something modern-looking would probably compliment the buisness-like aesthetic. Doing what we did in class with one custom font for the headers and another for the paragraph text would probably work well. 

Color scheme: I was thinking that sticking to a fairly monochromatic scheme would help with the buisness feel.

-->

<!DOCTYPE html>
<html>
<head>
	<title>Team Beijing--Assignment 03</title>
</head>
<body>

	<div class="container"> <!--container to keep the content from the margins-->

	<header>
		<?php include('includes/nav.inc');?>
		<!--Note: this include includes the main header as well-->
	</header>

	<!--
		Javascript here!

		I was thinking it would look nice to have a slideshow cycling through each of the photos we have. If it would be possible also for the pictures to act as hyperlinks to the people's pages, that would be great

		It's possible that the photos we have won't work great for the slide show, since they're pretty small and ideally the slideshow would act as the middle of a Z-layout thing, so we'd want it to be big. I'll try to think of some way we can get bigger images that represent each page.
	-->

<!--LAYOUT: I was thinking that these could be in three rows stacked on top of each other with the "read more" buttons off to the right so that they would be in the terminal area, though I'm not sure how that will look in practice-->

	<h2>Oliver Ostriker</h2>
	<p><!--small blurb about Oliver-->
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis tortor imperdiet dolor molestie posuere. Morbi tincidunt lobortis dui a maximus. Curabitur vitae tempor lorem, sit amet ultricies dui. Morbi laoreet dui lacus, a convallis dolor hendrerit sed. Phasellus convallis posuere diam in pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Fusce commodo nunc non consequat iaculis. Cras et commodo massa, non consequat sapien. Donec finibus pretium mi, vitae volutpat lectus porttitor non. Donec egestas sed risus at sodales. Ut ac hendrerit purus. Nam facilisis rutrum dolor sit amet pulvinar.
	</p>
	<a href="[Oliver's page]">Read more about Oliver</a>

	<h2>Zubair Aziz</h2>
	<p><!--small blurb about Zubair-->
		In pellentesque venenatis eros at suscipit. Cras consequat neque sit amet lacus sagittis varius nec et sem. Fusce pretium auctor placerat. Proin et pretium quam. Pellentesque at ligula lobortis, volutpat dolor non, fringilla ipsum. Donec rutrum blandit pulvinar. Morbi sed neque sagittis, mollis sapien vel, aliquam justo. Nam scelerisque tempor convallis. Curabitur fringilla est vitae ligula pharetra molestie. Aliquam blandit, dolor in malesuada tincidunt, dui odio tempus risus, vel lobortis felis ante eu felis. Aenean elementum sapien libero, id feugiat augue sollicitudin nec. Proin varius euismod nisi, ac lobortis justo iaculis ac. Sed feugiat vel mi vel auctor. Aenean a dignissim neque. Proin nec rhoncus massa, feugiat congue mi.
	</p>
	<a href="[Zubair's page]">Read more about Zubair</a>

	<h2>Kennedy Agusi</h2>
	<p><!--small blurb about Kennedy-->
		Maecenas non dictum velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec aliquam nulla dolor, ac vehicula dolor lacinia quis. Curabitur at interdum odio, at vulputate lorem. In hac habitasse platea dictumst. Etiam et lectus fermentum, finibus nisi consectetur, ultricies tortor. Ut justo orci, ornare quis dolor a, porta elementum lorem. Vestibulum odio augue, volutpat id mauris eu, faucibus posuere metus. Curabitur vitae efficitur magna. Ut vel enim ac magna interdum convallis ut sed purus. Ut pharetra ex diam. Nunc magna nulla, pharetra sed velit at, gravida vehicula arcu.
	</p>
	<a href="[Kennedy's page]">Read more about Kennedy</a>

</div>
</body>
</html>
