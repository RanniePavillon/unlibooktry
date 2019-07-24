<style>
 @font-face {
		font-family: 'Agency FB'!important;  /*a name to be used later*/
		src: url('{{asset('fonts/AGENCYR.ttf')}}'); /*URL to font*/
	}
.newlanding{
	background-color: white;
	margin: auto;
	width: 951px;
	padding-bottom:30px;
	height:auto!important;
	box-shadow: 1px 1px 10px rgb(218, 210, 210);
}
.landingform{
	width: 931px;
	background-color: #1EBE39;
	padding-top: 30px;
	padding-left: 20px;
}
.spanbooks{
	color: yellow;
	
}
.headerNew{
	color: white;
	font-family: Berlin Sans FB Demi;
	font-size: 34px;
}
.linklanding{
	padding-left: 567px;
	background-color: #1EBE39;
	padding-bottom: 4px;
	
}
.linklanding a{
	font-size:12px;
	font-family:Cambria (Headings);
	color:rgb(31, 73, 125);
	background: #f3ffe2; /* Old browsers */
	background: -moz-linear-gradient(top, #e4fdc0 0%, #e4fdc0 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f3ffe2), color-stop(100%,#e4fdc0)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #f3ffe2 0%,#e4fdc0 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #f3ffe2 0%,#e4fdc0 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #f3ffe2 0%,#e4fdc0 100%); /* IE10+ */
	background: linear-gradient(to bottom, #f3ffe2 0%,#e4fdc0 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3ffe2', endColorstr='#e4fdc0',GradientType=0 ); /* IE6-9 */
	text-decoration:none;
	font-size:12px;	
}
.linklanding a:HOVER{
	background-color:red;
}
.hrDiv{
	background-color: rgb(248, 200, 8);
	width: 951px;
	height: 15px;
}

.footerLanding{
	width: 952px;
	background-color:rgb(81, 131, 153);
	height:33px;
	margin:auto;
	border-top:none;
	padding-top: 15px;
}
#landingfooter li{
	float: left;
	list-style: none;
	padding-bottom: 30px;
	background-position: bottom;
	background-repeat: no-repeat;
	background-size: 100% 29px;
	border:none;
}
#landingfooter a{
	color: white;
	margin-left: 10px;
	margin-top: 10px;
	border: none;
	font-weight: bold;
	font-family: Agency FB;
	text-decoration: none;
	font-size:14px;
}
.lineLandingFooter{
	height: 14px;
	border-left: 1px solid white;
	margin-left: 10px;
	margin-top: 3px;
}
.mediaFooter{
	margin-left: 90px;
	margin-top: -20px;
}
.fbLanding{
	width: 18px;
	height: 18px;
	border: none;
	background-image: url('{{asset('images/fbpic2.jpg')}}');
	background-repeat: no-repeat;
	background-position: -1px;
	cursor: pointer;
	border-radius: 5px;
	background-color: gray;
}
.inLanding{
	width: 18px;
	height: 18px;
	border: none;
	background-image: url('{{asset('images/tweet.jpg')}}');
	background-repeat: no-repeat;
	background-position: -1px;
	cursor: pointer;
	border-radius: 5px;
	background-color: gray;
}
.tweetLanding{
	width: 18px;
	height: 18px;
	border: none;
	background-image: url('{{asset('images/inpic.png')}}');
	background-repeat: no-repeat;
	background-position: -1px;
	cursor: pointer;
	border-radius: 5px;
	background-color: gray;
	
}
.fbLanding:hover{
	background-image: url('{{asset('images/fbpic2_hover.jpg')}}');
}
.inLanding:hover{
	background-image: url('{{asset('images/tweet_hover.jpg')}}');
}
.tweetLanding:hover{
	background-image: url('{{asset('images/tweet2_hover.jpg')}}');
}
.contact_usForm{
	font-family:Agency FB;
}
.contactUsTitle{
	font-size: 25px;
	font-family: Agency FB;
	color: gray;
	text-align:center;
}
.hrContact{
	width: 478px;
	border: 1px solid rgb(74, 126, 187);
	margin-left: -9px;	
}
.contactText{
	font-weight: bold;
	font-family:Agency FB;
	font-size:14px;
	margin-top:20px;
}
.contactAddress{
	font-family:Agency FB;
}
.textAddress{
	font-size:19px;
	font-family:Agency FB;
	margin-top:20px;
	font-weight:normal;
}
.textAddress3{
	font-size:14px;
	font-family:Agency FB;
	margin-top:20px;
	font-weight:normal;
	font-weight:bold;
}
.textAddress2{
	font-size: 13px;
	font-family: Agency FB;
	margin-top: 20px;
	font-weight: normal;
	color: rgb(36, 81, 140);
	font-weight: bold;
	text-align: center;
}
.contact_usForm2{
}
.contactTable{
	font-size: 15px;
	font-family: Agency FB;
	color: rgb(36, 81, 140);
	margin-top: 40px;
	font-weight: bold;
	margin-left:16px;
}
.contactTable span{
	color:red;
}
.contactTable input[type="text"]{
	width:246px;
	margin-left: 10px;
	height: 25px;
	font-size: 14px;
	font-family: Agency FB;
	margin-top: 3px;
	padding: 5px;
}
.contactTable textarea{
	width:246px;
	margin-left: 10px;
	height: 125px;
	font-size: 14px;
	font-family: Agency FB;
	margin-top: 3px;
	padding:5px;
}
.buttonContact{
	width: 132px;
	height: 33px;
	border: none;
	border-radius: 2px;
	color:white;
	background: #9bc547; /* Old browsers */
	background: -moz-linear-gradient(top, #9bc547 0%, #7c9d38 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#9bc547), color-stop(100%,#7c9d38)); 
	background: -webkit-linear-gradient(top, #9bc547 0%,#7c9d38 100%);
	background: -o-linear-gradient(top, #9bc547 0%,#7c9d38 100%); 
	background: -ms-linear-gradient(top, #9bc547 0%,#7c9d38 100%); 
	background: linear-gradient(to bottom, #9bc547 0%,#7c9d38 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='9bc547', endColorstr='#7c9d38',GradientType=0 ); 
	box-shadow: 1px 1px 3px gray;
	margin-top: 10px;
	margin-left: 324;
	font-family: Arial Rounded MT Bold;
	font-size: 16px;
}

.map{
	border: 1px solid black;
	width:425px;
	height: 307px;
}
#map_canvas {
    width: 376px;
    height: 351px;
	border: 1px solid gray;
	margin-top: 25px;
	margin-left: 70px;
	/* box-shadow: 1px 1px 9px 2px gray; */
}
.mapNew{
	margin-top: 64px;
}
.linklanding a:hover{
	background: rgb(248, 200, 8) !important; /* Old browsers */
	background: -moz-linear-gradient(top, #e4fdc0 0%, #e4fdc0 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f3ffe2), color-stop(100%,#e4fdc0)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #f3ffe2 0%,#e4fdc0 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #f3ffe2 0%,#e4fdc0 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #f3ffe2 0%,#e4fdc0 100%); /* IE10+ */
	background: linear-gradient(to bottom, #f3ffe2 0%,#e4fdc0 100%); /* W3C */
}
.servicesLink1{
	width:110px;
	height:28px;
	background-image:url('{{asset('images/contactRed2.png')}}');
	background-repeat:no-repeat;
	display:block;
}
.servicesLink1:hover{
	background-image:url('{{asset('images/contactBlue2.png')}}');
}
.servicesLink1selected{
	background-image:url('{{asset('images/contactBlue2.png')}}');
}
.servicesLink2{
	width:110px;
	height:28px;
	background-image:url('{{asset('images/planRed2.png')}}');
	background-repeat:no-repeat;
	display:block;
}
.servicesLink2:hover{
	background-image:url('{{asset('images/planBlue2.png')}}');
}
.servicesLink3{
	width:110px;
	height:28px;
	background-image:url('{{asset('images/loginRed2.png')}}');
	background-repeat:no-repeat;
	display:block;
}
.servicesLink3:hover{
	background-image:url('{{asset('images/loginBlue2.png')}}');
}
.hidden{
	display:none;
}
.serviceLinks li{
	list-style-type: none;
	padding-right: 20px;
	display: inline;
	float: left;
}
.imgLogoService{
	width: 203px;
	height: 141px;
}	
.imgGIT{
	margin-top: 20px;
	margin-left:66px;
}
.lineImg{
	margin-left: 150px;
	width: 805px;
	margin-top: -26px;
	background-size: 100% 100%;
	height: 4px;
}
.imgSubmitNow{
	margin-top: 64px;
	margin-left: 15px;
	width: 80px;
}
.imgMap{
	width: 91px;
	float: right;
	margin-right:80px;
	margin-top:5px;
}
.NTCTax{
	border-right:none;
}
</style>
	<script src="https://maps.gstatic.com/maps-api-v3/api/js/17/15/main.js" type="text/javascript"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="{{asset('js/jquery.js')}}"></script>
	<!-- <script>
	 
	  $(function(){
		
		var map_canvas = document.getElementById('map_canvas');
		var map_options = {
		  center: new google.maps.LatLng(14.582417, 121.061608),
		  zoom: 16,
		  mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(map_canvas, map_options)
	  
		var image = new google.maps.MarkerImage('/public\img\drumstick-logo.png',
			// This marker is 129 pixels wide by 42 pixels tall.
			new google.maps.Size(129, 42),
			// The origin for this image is 0,0.
			new google.maps.Point(0,0),
			// The anchor for this image is the base of the flagpole at 18,42.
			new google.maps.Point(18, 42)
		);
		
		// Add Marker
		var marker1 = new google.maps.Marker({
			position: new google.maps.LatLng(14.582417, 121.061608),
			map: map/*,
			icon: image*/ // This path is the custom pin to be shown. Remove this line and the proceeding comma to use default pin
		});
		
		// Add listener for a click on the pin
		google.maps.event.addListener(marker1, 'click', function() {
			infowindow1.open(map, marker1);
		});

	  });
	
	</script> -->

<div class="mainlanding">
	<div class="newlanding"> 
		<div>
			<div style="float:left;">
				<img src="{{asset('images/serviceNewLogo_small.png')}}" class="imgLogoService">
			</div>
			
			<div style="float:right;margin-right:32px;margin-top:66px;">
				<ul class="serviceLinks">
					<li><a href="contact_us" class="servicesLink1 slink1 servicesLink1selected"></a></li>
					<li><a href="plan" class="servicesLink2 slink2"></a></li>
					<li><a href="login" class="servicesLink3 slink3"></a></li>
				</ul>
			</div>
			<div>
				<img src="{{asset('images/bgWhite3.png')}}" class="lineImg">
			</div>
			<div style="clear:both"></div>
		</div>
		<div style="float:left;margin-left:90px;margin-top:80px;width:397px;">
			<div class="contact_usForm">
				<div class="contactUsTitle">CONTACT US</div>
				<div class="contactAddress"  style="margin-top:0px!important;">
					<div class="textAddress">
						Unit 2005C West Tower, The Philippine Stock Exchange Centre<br>  Exchange Road, Ortigas Centre 
						Pasig City, Philippines
					</div>
					<div class="contactText">
						Telephone:<label class="textAddress" style="margin-left:5px;font-size:15px;">(+632) 687-66-49</label><label class="contactText" 
						style="margin-left:20px;">Email Address:<label class="textAddress" style="margin-left:5px;font-size:16px;">nusison2@scp-ph.com</label></label>
					</div> 
				</div>
			</div>
			<div class="contact_usForm2">
				<div>
					<img src="{{asset('images/buttonGetInTouch.png')}}" class="imgGIT">
				</div>
				<div class="contactAddress">
					<div class="textAddress3" style="text-align:center;">
						Please fill out the form below if you have any<br/> questions or request, concerning to our services.
					</div>	
					<div class="textAddress2 hidden">
						We will respond to your message within 24 hours.
					</div>
					<form action="{{('contact_us/send')}}" method="post">
						<table class="contactTable">
							<tr>
								<td>Name<span>*</span></td>
								<td><input type="text" name="name" placeholder="Enter your Name"></td>
							</tr>
							<tr>
								<td>Email<span>*</span></td>
								<td><input type="text" name="email" placeholder="Enter your Email"></td>
							</tr>
							<tr>
								<td>Company</td>
								<td><input type="text" name="company" placeholder="Enter your Company Name"></td>
							</tr>
							<tr>
								<td style="position: absolute; margin-top: 7px;">Message</td>
								<td colspan="5"><textarea name="message" placeholder="Enter your Message"></textarea></td>
								<td>
									<img src="{{asset('images/submitNow.png')}}" class="imgSubmitNow">
									<input type="submit" style="display: none;"/>
								</td>
							</tr>
						</table>
					</form>
					<!-- <script>
						$(function(){
							$('form').submit(function(){
								var name = $('input[name="name"]').val();
								var email = $('input[name="email"]').val();
								var company = $('input[name="company"]').val();
								var message = $('textarea[name="message"]').val();
								
								msg = $.ajax({
									url: "contact_us/send",
									type: 'POST',
									data: {
										'name': name, 
										'email': email, 
										'company': company, 
										'message': message
									},
									async: false,
									error: function() {
										return 'Connection Error!';
									}
								}).responseText;
								
								if(msg == 1){
									$('.textAddress2').html("Your message has been sent successfully.<br/>We will respond to your message within 24 hours.");
									$('.textAddress2').removeClass('hidden');
								} else {
									$('.textAddress2').html("An error occured while sending your request.");
									$('.textAddress2').removeClass('hidden');
								}
								
								return false;
								
							});
							
							$('.imgSubmitNow').click(function(){
								$('form').submit();
							});
						})
					</script> -->
				</div>
			</div>
		</div>
		<div class="mapNew">
			<div id="map_canvas"></div>
		</div>
		<div>
			<img src="{{asset('images/gMap2.jpg')}}" class="imgMap">
		</div>
		<div style="clear:both;"></div>
		
		
	</div>	
	
	<div class="footerLanding">
		<nav id="landingfooter" style="margin-left:36px;">
			<li><a href="{{('contact_us')}}" class="footerLanding taxtableNew">Contact Us</a>
			</li>
			<li><div class="lineLandingFooter"></div>
			<li><a href="{{('about_us')}}" class="footerLanding contact">About Us</a>
			</li>
			<li><div class="lineLandingFooter"></div>
			</li>
			<li><a href="{{('plan')}}" class="footerLanding NTCTax">Plan & Pricing</a>
			</li>
			<li><div class="lineLandingFooter"></div>
		</nav>	
		<nav id="landingfooter" style="float:right;margin-right:40px;">	
			<li><a>Stay Connected
			<table class="mediaFooter">
				<td><input type="button" class="fbLanding"></td>
				<td><input type="button" class="inLanding"></td>
				<td><input type="button" class="tweetLanding"></td>
			</table>
			</a></li>
			<li><a href="{{('learn?')}}'" class="footerLanding NTCTax">Learn More...</a>
			</li>
		</nav>
	</div>
	
</div>
	
	
	
	
	
	
	
</div>