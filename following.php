<?php require("header.php");?>
<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="row">
	<h1>Profile Overview</h1>
</div><!-- Closed .row -->
<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="row">
	<div class="desktop-9 tablet-4 mobile-3" id="my_tab">
		<samp class="desktop-12 tablet-6 mobile-3">
			<a id="Tab1">Following (4)</a>
			<a id="Tab2">Fans (0)</a>
			<a id="Tab3">Friends (2)</a>
		</samp>
		
		<div class="desktop-12 tablet-6 mobile-3 tab" id="Tab1">
        	<div class="desktop-4 tablet-3 mobile-3 Follo">
				<img src="images/no_image_50_by_50.jpg" width="50">
				<p>Ralph Gorden</p>
        	</div>
        	<div class="desktop-4 tablet-3 mobile-3 Follo">
				<img src="images/no_image_50_by_50.jpg" width="50">
				<p>Ng Man</p>
        	</div>
        	<div class="desktop-4 tablet-3 mobile-3 Follo">
				<img src="images/no_image_50_by_50.jpg" width="50">
				<p>Omprakash Choudhary</p>
        	</div>
        	<div class="desktop-4 tablet-3 mobile-3 Follo">
				<img src="images/no_image_50_by_50.jpg" width="50">
				<p>test user</p>
        	</div>
		</div><!-- Closed #Tab1 -->
		
		<div class="desktop-12 tablet-6 mobile-3 tab" id="Tab2">
			
		</div><!-- Closed #Tab2 -->
		
		<div class="desktop-12 tablet-6 mobile-3 tab" id="Tab3">
        	<div class="desktop-4 tablet-3 mobile-3 Follo">
				<img src="images/no_image_50_by_50.jpg" width="50">
				<p>Ng Man</p>
        	</div>
        	<div class="desktop-4 tablet-3 mobile-3 Follo">
				<img src="images/no_image_50_by_50.jpg" width="50">
				<p>test user</p>
        	</div>
		</div><!-- Closed #Tab3 -->
	</div><!-- Closed #my_tab -->
	<!------------------------------>
	<div class="desktop-3 tablet-2 mobile-3" id="rfollo">
		<h2 class="ppHeading">Find friends</h2>
		<p>You can connect with your friends on Panjury, receiving instant update whenever they place a verdict.</p>
		<a href="#" class="FBlink Linker">Find Friends through facebook</a>
		<a href="#" class="Glink Linker">Find Friends through Gmail</a>
		<p><input type="checkbox"> Automatically follow facebook friends when they register on Panjury.</p>
		<h2 class="ppHeading">Recommended Jurors</h2>
			<form id="subs" action="#" method="post" enctype="multipart/form-data">
				<input type="text" placeholder="Find juror in Panjury by name">
				<input type="submit" value="Search" class="sub">
			</form>
		<div class="Follo2">
			<img src="images/no_image_50_by_50.jpg" width="50">
			<p class="addr">Ng Man</p>
			<p><strong><span> + </span> Follow</strong></p>
			<p>2 common follows</p>
		</div>
		<div class="Follo2">
			<img src="images/no_image_50_by_50.jpg" width="50">
			<p class="addr">Ng Man</p>
			<p><strong><span> + </span> Follow</strong></p>
			<p>2 common follows</p>
		</div>
	</div>
</div><!-- Closed .row -->
<!-------------------------------------------------------------------------------------------------------------------------------->
<?php require("footer.php");?>