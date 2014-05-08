<?php require("header.php");?>
<!-------------------------------------------------------------------------------------------------------------------------------->
<div style="width:100%;display:table;">
<form>

	<div class="row" style="margin-top:30px;">
		<div class="desktop-3 tablet-2 mobile-3 RedAllura">Enter the name fo the thing you want to judge</div>
		<input type="text" placeholder="Input the name of a persion (Obama), a brand name(Apple), aproduct name(iPhone), anything!" class="desktop-7 tablet-3 mobile-3 txtField">
		<div class="desktop-2 tablet-1 mobile-2 Persion">George. W. Bush <img src="images/person_img.png"></div>
	</div><!-- Closed .row -->
	
	<div class="row" style="margin-top:30px;">
		<div class="desktop-3 tablet-2 mobile-3 RedAllura">Give a score to George Bush</div>
		<script type="text/javascript">
			$(document).ready(function (){
				var Link = $.noUiSlider.Link;
				$("#homeRanger").noUiSlider({
					start: 50,
					range: {
								'min': 1,
								'max': 100
							},
					serialization: {
						lower: [
							new Link({
								target: $("#wish")
							})
						],
						format	: {
						decimals: 0
						}
					}
				});
			});
		</script>
		<div class="desktop-6 tablet-2 mobile-2" id="homeRanger"></div>
		<input type="text" class="desktop-1 tablet-1 mobile-1 cAlign txtField" id="wish">
	</div><!-- Closed .row -->
	
	<div class="row" style="margin-top:30px;">
		<div class="desktop-3 tablet-2 mobile-3 RedAllura">Write your verdict!</div>
		<input type="text" class="desktop-7 tablet-3 mobile-3 txtField">
	</div><!-- Closed .row -->
	
	<div class="row" style="margin-top:30px;">
		<textarea class="desktop-7 desktop-push-3 tablet-3 tablet-push-2 mobile-3 txtField" style="height:130px;"></textarea>
	</div><!-- Closed .row -->
	
	<div class="row" style="margin-top:30px;">
		<div class="desktop-3 tablet-2 mobile-3 RedAllura">Write your verdict!</div>
		<div class="desktop-7 tablet-3 mobile-3">
		<!--<input type="submit" class="red_btn" value="POST VERDICT">-->
		<a href="#" class="Seraglio" data-hover="POST VERDICT"><span>POST VERDICT</span></a>
		</div>
	</div><!-- Closed .row -->
</form>
</div>
<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="row" style="margin-top:60px; margin-bottom:50px;">
	<img class="desktop-3 hideMobile" src="images/profile_image.jpg">
	<div class="desktop-4 hideMobile" id="pMar">
		<p class="RedName">Silva, The Supreme Judge <span>(Jul 25)</span></p>
		<p>34567 reputation</p>
		<p>Verdict power x 10</p>
		<p>1201 <img src="images/imgimg.jpg"> cheer received</p>
		<p>155 <img src="images/imgimg.jpg"> jeer received</p>
		<p>Trial created: 1</p>
		<p>Verdict posted: 245</p>
		<p>Appeal remaining: 1</p>
		<p>Ongoing Bounty: 1</p>
	</div>
	<div class="desktop-5 tablet-6 mobile-3 mHide">
		<div class="desktop-12 tablet-6 mobile-3">
			<p class="RedName" style="text-align:center;margin:0;"><span>Daily Missions</span> <small>(Resets in 20 hours)</small></p>
			<p class="redBar">Post a verdict in <span style="color:#981916">Musician (People)</span> <span style="margin-left:20px; display:inline-block;">+10 extra rep</span></p>
			<p class="redBar">Post a verdict in <span style="color:#981916">Restaurant (Places)</span> <span style="margin-left:20px; display:inline-block;">+10 extra rep</span></p>
			<p class="greenBar">Post a verdict in <span style="color:#981916">Technology (Organization)</span> <span style="margin-left:20px; display:inline-block;">+10 extra rep</span></p>
		</div>
		<div class="desktop-12 tablet-6 mobile-3" style="border-top:1px solid #ccc; padding-top:5px;">
			<p class="RedName" style="text-align:center;margin:0;"><span>Friends invitation</span></p>
			<p style="font-size:13px; margin:0;">Gain 50 rep for each Facebook friend you invite</p>
			<progress id='p' class="desktop-10 tablet-5 mobile-3" value="7/10">7/10</progress>
		</div>
	</div>
</div><!-- Closed .row -->
<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="row"><p class="desktop-12 tablet-6 mobile-3 RedName" style="text-align:center"><span>Court of Appeal</span></p></div>
<div class="row relv" id="httt">
	<div class="holder"></div>
	<div id="jPages">
		<div class="desktop-6 tablet-6 mobile-3 item">
			<div class="desktop-3 tablet-1 mobile-3"><img src="images/crl_img.jpg"></div>
			<div class="desktop-9 tablet-5 mobile-3">
				<div class="Clear">
					<div class="desktop-7 tablet-4 mobile-3 Persion">Spirited Away (2004 movie)</div>
					<div class="desktop-2 tablet-1 mobile-1 lNum">30<span>.4</span></div>
					<div class="desktop-3 tablet-1 mobile-1 mobile-push-1 jurors">Shunned <small>by 12 jurors</small></div>
				</div>
				<p class="cntent"><em>Pledge for appeal</em> : I dont know why you people hate this movie. It is really great. blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
			</div>
		</div>
		<div class="desktop-6 tablet-6 mobile-3 item">
			<div class="desktop-3 tablet-1 mobile-3"><img src="images/crl_img.jpg"></div>
			<div class="desktop-9 tablet-5 mobile-3">
				<div class="Clear">
					<div class="desktop-7 tablet-4 mobile-3 Persion">Spirited Away (2004 movie)</div>
					<div class="desktop-2 tablet-1 mobile-1 lNum">30<span>.4</span></div>
					<div class="desktop-3 tablet-1 mobile-1 mobile-push-1 jurors">Shunned <small>by 12 jurors</small></div>
				</div>
				<p class="cntent"><em>Pledge for appeal</em> : I dont know why you people hate this movie. It is really great. blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
			</div>
		</div>
		<div class="desktop-6 tablet-6 mobile-3 item">
			<div class="desktop-3 tablet-1 mobile-3"><img src="images/crl_img.jpg"></div>
			<div class="desktop-9 tablet-5 mobile-3">
				<div class="Clear">
					<div class="desktop-7 tablet-4 mobile-3 Persion">Spirited Away (2004 movie)</div>
					<div class="desktop-2 tablet-1 mobile-1 lNum">30<span>.4</span></div>
					<div class="desktop-3 tablet-1 mobile-1 mobile-push-1 jurors">Shunned <small>by 12 jurors</small></div>
				</div>
				<p class="cntent"><em>Pledge for appeal</em> : I dont know why you people hate this movie. It is really great. blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
			</div>
		</div>
		<div class="desktop-6 tablet-6 mobile-3 item">
			<div class="desktop-3 tablet-1 mobile-3"><img src="images/crl_img.jpg"></div>
			<div class="desktop-9 tablet-5 mobile-3">
				<div class="Clear">
					<div class="desktop-7 tablet-4 mobile-3 Persion">Spirited Away (2004 movie)</div>
					<div class="desktop-2 tablet-1 mobile-1 lNum">30<span>.4</span></div>
					<div class="desktop-3 tablet-1 mobile-1 mobile-push-1 jurors">Shunned <small>by 12 jurors</small></div>
				</div>
				<p class="cntent"><em>Pledge for appeal</em> : I dont know why you people hate this movie. It is really great. blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
			</div>
		</div>
		<div class="desktop-6 tablet-6 mobile-3 item">
			<div class="desktop-3 tablet-1 mobile-3"><img src="images/crl_img.jpg"></div>
			<div class="desktop-9 tablet-5 mobile-3">
				<div class="Clear">
					<div class="desktop-7 tablet-4 mobile-3 Persion">Spirited Away (2004 movie)</div>
					<div class="desktop-2 tablet-1 mobile-1 lNum">30<span>.4</span></div>
					<div class="desktop-3 tablet-1 mobile-1 mobile-push-1 jurors">Shunned <small>by 12 jurors</small></div>
				</div>
				<p class="cntent"><em>Pledge for appeal</em> : I dont know why you people hate this movie. It is really great. blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
			</div>
		</div>
		<div class="desktop-6 tablet-6 mobile-3 item">
			<div class="desktop-3 tablet-1 mobile-3"><img src="images/crl_img.jpg"></div>
			<div class="desktop-9 tablet-5 mobile-3">
				<div class="Clear">
					<div class="desktop-7 tablet-4 mobile-3 Persion">Spirited Away (2004 movie)</div>
					<div class="desktop-2 tablet-1 mobile-1 lNum">30<span>.4</span></div>
					<div class="desktop-3 tablet-1 mobile-1 mobile-push-1 jurors">Shunned <small>by 12 jurors</small></div>
				</div>
				<p class="cntent"><em>Pledge for appeal</em> : I dont know why you people hate this movie. It is really great. blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
			</div>
		</div>
		<div class="desktop-6 tablet-6 mobile-3 item">
			<div class="desktop-3 tablet-1 mobile-3"><img src="images/crl_img.jpg"></div>
			<div class="desktop-9 tablet-5 mobile-3">
				<div class="Clear">
					<div class="desktop-7 tablet-4 mobile-3 Persion">Spirited Away (2004 movie)</div>
					<div class="desktop-2 tablet-1 mobile-1 lNum">30<span>.4</span></div>
					<div class="desktop-3 tablet-1 mobile-1 mobile-push-1 jurors">Shunned <small>by 12 jurors</small></div>
				</div>
				<p class="cntent"><em>Pledge for appeal</em> : I dont know why you people hate this movie. It is really great. blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
			</div>
		</div>
		<div class="desktop-6 tablet-6 mobile-3 item">
			<div class="desktop-3 tablet-1 mobile-3"><img src="images/crl_img.jpg"></div>
			<div class="desktop-9 tablet-5 mobile-3">
				<div class="Clear">
					<div class="desktop-7 tablet-4 mobile-3 Persion">Spirited Away (2004 movie)</div>
					<div class="desktop-2 tablet-1 mobile-1 lNum">30<span>.4</span></div>
					<div class="desktop-3 tablet-1 mobile-1 mobile-push-1 jurors">Shunned <small>by 12 jurors</small></div>
				</div>
				<p class="cntent"><em>Pledge for appeal</em> : I dont know why you people hate this movie. It is really great. blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
			</div>
		</div>
	</div>
</div><!-- Closed .row -->
<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="row"><p class="desktop-12 tablet-6 mobile-3 RedName" style="margin-top:50px"><span>News Feed</span></p></div>
<div class="row">
	<div class="desktop-8 tablet-4 mobile-3">
		<div class="newsFeed">
			<div class="Clear">
			<div class="desktop-1 hideMobile"><img src="images/thumb_img.png" style="max-width:100%"></div>
			<div class="desktop-11 tablet-6 mobile-3"><h2>Darren Randell</h2></div>
			</div><!-- Closed .Clear -->
			<div class="desktop-11 desktop-push-1 tablet-6 mobile-3 charles_text">
				<img class="big_img" src="images/person_img.png">
				<h4>Charles Dickens</h4>
				<h5>I met my girlfriend on Fiverr. Tue Stroy ! <span>30</span></h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
			</div><!-- Closed .charles_text -->
			<div class="desktop-11 desktop-push-1 tablet-6 mobile-3 like_option">
				<p>5 hour ago</p>
				<img class="desktop-4 tablet-2 mobile-1 img" src="images/post.jpg">
				<img class="desktop-4 tablet-2 mobile-1 img" src="images/post.jpg">
				<img class="desktop-4 tablet-2 mobile-1 img" src="images/post.jpg">
				<img class="desktop-4 tablet-2 mobile-1 img" src="images/post.jpg">
				<div class="Clear like">
					<a class="cheer">(1)</a>
					<a class="jeer">(0)</a>
					<a class="comment" title="Comment">Comment (0)</a>
					<a class="report" title="Rreport">Report</a>
				</div>
			</div><!-- Closed .like_option -->
		</div><!-- Closed .newsFeed -->
		<div class="newsFeed">
			<div class="Clear">
			<div class="desktop-1 hideMobile"><img src="images/thumb_img.png" style="max-width:100%"></div>
			<div class="desktop-11 tablet-6 mobile-3"><h2>Darren Randell</h2></div>
			</div><!-- Closed .Clear -->
			<div class="desktop-11 desktop-push-1 tablet-6 mobile-3 charles_text">
				<img class="big_img" src="images/person_img.png">
				<h4>Charles Dickens</h4>
				<h5>I met my girlfriend on Fiverr. Tue Stroy ! <span>30</span></h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
			</div><!-- Closed .charles_text -->
			<div class="desktop-11 desktop-push-1 tablet-6 mobile-3 like_option">
				<p>5 hour ago</p>
				<div class="Clear like">
					<a class="cheer">(1)</a>
					<a class="jeer">(0)</a>
					<a class="comment" title="Comment">Comment (0)</a>
					<a class="report" title="Rreport">Report</a>
				</div>
			</div><!-- Closed .like_option -->
		</div><!-- Closed .newsFeed -->
	</div>
<!----------------------->
	<div class="desktop-4 tablet-2 mobile-3 mHide">
		<div class="tial">
			<p class="vHeading">Trial Shoutouts</p>
			<div class="fluid">
				<div class="desktop-2 tablet-2 mobile-1 user"><img src="images/user_icon.png"></div>
				<div class="desktop-10 tablet-4 mobile-2 user_text">
					<p><strong>Usear Name: </strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
					<p class="nam">(Brack obama)</p>
				</div>
			</div>
			<div class="fluid">
				<div class="desktop-2 tablet-2 mobile-1 user"><img src="images/user_icon.png"></div>
				<div class="desktop-10 tablet-4 mobile-2 user_text">
					<p><strong>Usear Name: </strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
					<p class="nam">(Brack obama)</p>
				</div>
			</div>
			<div class="fluid">
				<div class="desktop-2 tablet-2 mobile-1 user"><img src="images/user_icon.png"></div>
				<div class="desktop-10 tablet-4 mobile-2 user_text">
					<p><strong>Usear Name: </strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
					<p class="nam">(Brack obama)</p>
				</div>
			</div>
		</div><!-- Closed .tial -->
		<!------------------------>
		<div class="tial">
			<p class="vHeading">Recently judged</p>
			<div class="fluid">
				<div class="desktop-2 tablet-2 mobile-1"><img src="images/small_icon.jpg"></div>
				<div class="desktop-7 tablet-4 mobile-2 user_text">
					<h4>Usear Name</h4>
					<p>A turn base dstrategy game</p>
				</div>
				<div class="desktop-3 tablet-6 mobile-3 lNum rAlign">17<span>.3</span></div>
			</div>
			<div class="fluid">
				<div class="desktop-2 tablet-2 mobile-1"><img src="images/small_icon.jpg"></div>
				<div class="desktop-7 tablet-4 mobile-2 user_text">
					<h4>Usear Name</h4>
					<p>A turn base dstrategy game</p>
				</div>
				<div class="desktop-3 tablet-6 mobile-3 lNum rAlign">17<span>.3</span></div>
			</div>
		</div><!-- Closed .tial -->
	</div>
</div><!-- Closed .row -->
<!-------------------------------------------------------------------------------------------------------------------------------->
<?php require("footer.php");?>