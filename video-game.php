<?php require("header.php");?>
<!-------------------------------------------------------------------------------------------------------------------------------->
<div id="filters">
	<div class="row">
		<div class="desktop-12 tablet-6 mobile-3">
			<a href="#" id="filler">Filters</a>
			<a href="#" id="mpp">Map</a>
			<a href="#" id="lst">List</a>
		</div>
	</div>
</div>
<div class="row" id="f_show">
	<div class="desktop-3 tablet-2 mobile-3">
	<select class="filt">
		<option value="">All Countries</option>
		<option value="31">Canada</option>
		<option value="73">Iceland</option>
		<option value="82">Japan</option>
	</select>
	</div>
	<div class="desktop-3 tablet-2 mobile-3">
	<select class="filt">
		<option value="25">Best</option>
		<option value="31">Worst</option>
		<option value="73">All Time Popular</option>
		<option value="82">Latest Action</option>
		<option value="35" selected="selected">Trending</option>
	</select>
	</div>
	<div class="desktop-6 tablet-2 mobile-3 catSearch">
		<input type="text" placeholder="Search" class="s_field">
		<input type="submit" value="" class="s_submit">
	</div>
	<div class="desktop-3 tablet-2 mobile-3">
	</div>
</div><!-- Closed .row -->
<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="row">
	<div class="desktop-3 tablet-2 mobile-3">
		<p class="Accordions" id="opened">Game Genre</p>
		<ul class="Content">
			<li><input type="checkbox" /> Action(21)</li>
			<li><input type="checkbox" /> Action Adventure(6)
				<ul>
					<li class="had">Sub-genre</li>
					<li><input type="checkbox" /> Action(21)</li>
					<li><input type="checkbox" /> Action Adventure(6)</li>
					<li><input type="checkbox" /> Adventure(3)</li>
					<li class="had">Sub-genre</li>
					<li><input type="checkbox" /> Action(21)</li>
					<li><input type="checkbox" /> Action Adventure(6)</li>
				</ul>
			</li>
			<li><input type="checkbox" /> Adventure(3)</li>
			<li><input type="checkbox" /> Action(21)</li>
			<li><input type="checkbox" /> Action Adventure(6)</li>
			<li><input type="checkbox" /> Adventure(3)</li>
		</ul>
		<p class="Accordions">Game Genre</p>
		<ul class="Content">
			<li><input type="checkbox" /> Action(21)</li>
			<li><input type="checkbox" /> Action Adventure(6)</li>
			<li><input type="checkbox" /> Adventure(3)</li>
		</ul>
		<p class="Accordions">Game Genre</p>
		<ul class="Content">
			<li><input type="checkbox" /> Action(21)</li>
			<li><input type="checkbox" /> Action Adventure(6)</li>
			<li><input type="checkbox" /> Adventure(3)</li>
		</ul>
	</div>
	<!-------------------------------------->
	<div class="desktop-9 tablet-4 mobile-3" id="vidi">
	
		<div class="item">
			<div class="desktop-1 tablet-6 mobile-3"><a class="Red" href="#"><img src="images/like_red.png"> 1</a></div>
			<div class="desktop-2 tablet-1 mobile-1"><img class="cat_img img" src="images/crl_img.jpg"></div>
			<div class="desktop-9 tablet-5 mobile-3 tabPad">
				<div class="Clear">
					<div class="desktop-7 tablet-3 mobile-3 Persion">Spirited Away (2004 movie)</div>
					<div class="desktop-2 tablet-1 mobile-1 lNum">30<span>.4</span></div>
					<div class="desktop-3 tablet-2 mobile-1 mobile-push-1 jurors">Shunned <small>by 12 jurors</small></div>
				</div>
				<p class="cntent"><em>Pledge for appeal</em> : I dont know why you people hate this movie. It is really great. blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
			</div>
		</div><!-- Closed .item -->
		
		<div class="item">
			<div class="desktop-1 tablet-6 mobile-3"><a class="Red" href="#"><img src="images/like_red.png"> 2</a></div>
			<div class="desktop-2 tablet-1 mobile-1"><img class="cat_img img" src="images/crl_img.jpg"></div>
			<div class="desktop-9 tablet-5 mobile-3 tabPad">
				<div class="Clear">
					<div class="desktop-7 tablet-3 mobile-3 Persion">Spirited Away (2004 movie)</div>
					<div class="desktop-2 tablet-1 mobile-1 lNum">30<span>.4</span></div>
					<div class="desktop-3 tablet-2 mobile-1 mobile-push-1 jurors">Shunned <small>by 12 jurors</small></div>
				</div>
				<p class="cntent"><em>Pledge for appeal</em> : Here's a vid for you lazy jurors If you've been living in a cave. This video which is mostly praises does not represent my point of view. Titanfall's gameplay is action packed, as are most FPS games. What separates Titanfall from games of the same genre is the addition of mechs that you can drive across the battle field. It's the only reason I bought the game.<br /><br />
I was thrilled the first few times I drove around in a mech. It can't be more fun one shotting foot soldiers with a missile and what not. However, I can't help but say this, the mech system is mostly gimmick. The control is the same as you would walk on your feet. I expected that it would at least feel like driving a mech in Mechwarrior, but it's everything but.</p>
			</div>
		</div><!-- Closed .item -->
		
	</div>
</div><!-- Closed .row -->
<!-------------------------------------------------------------------------------------------------------------------------------->
<?php require("footer.php");?>