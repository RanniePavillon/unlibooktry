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
.lineLandingFooter{
	height: 14px;
	border-left: 1px solid white;
	margin-left: 10px;
	margin-top: 3px;
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
.mediaFooter{
	margin-left:90px;
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
	padding-top: 28px;
	color: rgb(33,89,104);
	padding-left: 25px;
	
}
.contactUsTitle{
	font-size:17px;
	font-family:Arial Rounded MT Bold;
}
.hrContact{
	width: 478px;
	border: 1px solid rgb(74, 126, 187);
	margin-left: -9px;	
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
.Plans{
	width: 366px;
	padding-bottom:160px;
	margin-top:154px;
	margin-left:126px;
	background: rgb(65, 122, 147);
	box-shadow: 1px 1px 1px #000;
}
.choose{
	background-color:rgb(211, 27, 27);
	width: 367px;
	color: white;
	font-weight: bold;
	font-family: Agency FB;
	font-size: 21px;
	text-align: center;
	padding-top: 10px;
	padding-bottom: 10px;
}
.planList li{
	list-style: none;
	padding-top: 16px;
	padding-left: 20px;
	color: #fff;
	font-family: Agency FB;
	font-size: 17px;
	font-weight:bold;
}
.planList4 li{
	list-style: none;
	padding-top:20px;
	color: #fff;
	font-family: Agency FB;
	font-size: 14px;
	font-weight: bold;
}
.planList3 li{
	list-style: none;
	padding-top:20px;
	color:#fff;
	font-family:Agency FB;
	font-size: 15px;
	font-weight: bold;
}
.freePlan{
	background: rgb(65, 122, 147);
	width: 147px;
	height: 498px;
	border: none;
	text-align: center;
	font-family: Agency FB;
	color: #fff;
	padding-top: 18px;
	font-size: 18px;
	box-shadow: 1px 1px 1px #000;
	font-weight: bold;
	margin-left: 29px;
	margin-top: 130px;
}
.basicPlan{
	background-color: rgb(65, 122, 147);
	width: 147px;
	height: 566px;
	text-align: center;
	color: #fff;
	font-family: Microsoft New Tai Lue;
	font-weight: bold;
	font-size: 18px;
	box-shadow: 1px 1px 1px #000;
	margin-top: 79px;
	margin-left:4px;
}
.premiumPlan{
	background-color: rgb(65, 122, 147);
	width: 147px;
	height: 599px;
	text-align: center;
	color: #fff;
	font-family: Agency FB;
	font-weight: bold;
	font-size: 18px;
	box-shadow: 1px 1px 1px #000;
	margin-left:4px;
	margin-top: 46px;
}
.freetext2{
	padding:11px;
	color: #fff;
	font-family: Agency FB;
} 
.planLine{
	border-top: 1px solid #B3AFAF;
	border-bottom: none;
	width: 142px;
	margin: auto;
	margin-top: 13px;
}
.planList2 li{
	list-style: none;
	padding-top:20px;
	color:#fff;
	font-family:Agency FB;
	font-size: 15px;
	font-weight:bold;
	text-align:center;
}
.planList2{
	text-align:center;
	margin-top: 14px;
}
.planList3{
	text-align:center;
	margin-top:39px;
}
.planList4{
	text-align:center;
	margin-top: 65px;
}
.peso{
	margin-top: 5px;
}
.buttonPlan{
	width: 120px;
	height: 27px;
	background-image:url('{{asset('images/goFreeButton.png')}}');
	background-repeat:no-repeat;
	border: none;
	box-shadow: 1px 1px 4px #000;
	border-radius: 4px;
	margin-top:150px;
}
.buttonPlan2{
	width: 120px;
	height: 27px;
	background-image:url('{{asset('images/goBasicButton.png')}}');
	background-repeat:no-repeat;
	border: none;
	box-shadow: 1px 1px 4px #000;
	border-radius: 4px;
	margin-top:109px;
}
.buttonPlan3{
	width: 120px;
	height: 27px;
	background-color: rgb(208, 22, 22);
	color: white;
	border: none;
	font-weight: bold;
	font-family: Agency FB;
	box-shadow: 1px 1px 4px gray;
	border-radius: 4px;
	font-size: 15px;
}
.imgLogoService{
	width: 203px;
	height: 141px;
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
.servicesLink2{
	width:110px;
	height:28px;
	background-image:url('{{asset('images/planRed2.png')}}');
	background-repeat:no-repeat;
	display:block;
}
.servicesLink2:hover{
	background-image:url('{{asset('images/planBlueNew.png')}}');
}
.servicesLink2selected{
	background-image:url('{{asset('images/planBlueNew.png')}}');
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
.lineImg{
	margin-left: 150px;
	width: 805px;
	margin-top: -26px;
	background-size: 100% 100%;
	height: 4px;
}
.xImg{
	width:21px;
}
.bulletRed{
	color:rgb(211, 27, 27);
}
</style>
		
<div class="mainlanding">
	<div class="newlanding"> 
			<div style="float:left;">
				<img src="{{asset('images/serviceNewLogo_small.png')}}" class="imgLogoService">
			</div>
			<div style="float:right;margin-right:32px;margin-top:66px;">
				<ul class="serviceLinks">
					<li><a href="contact_us" class="servicesLink1 slink1"></a></li>
					<li><a href="plan" class="servicesLink2 slink2 servicesLink2selected"></a></li>
					<li><a href="login" class="servicesLink3 slink3"></a></li>
				</ul>
			</div>
			<div>
				<img src="{{asset('images/bgWhite3.png')}}" class="lineImg">
			</div>
			<div style="clear:both"></div>
			<div style="float:left;">
				<div class="Plans">
					<div class="choose">Choose your Plans and Pricing</div>
					<nav class="planList">
						<li><span class="bulletRed">&#8226;</span> # of Invoices Transactions</li>
						<li><span class="bulletRed">&#8226;</span> # of Expenses Transactions</li>  
						<li><span class="bulletRed">&#8226;</span> # of Journal Entries</li>  
						<li><span class="bulletRed">&#8226;</span> # of Client List</li>
						<li><span class="bulletRed">&#8226;</span> # of Vendor List</li>
						<li><span class="bulletRed">&#8226;</span> Support Access</li>
						<li></li>
						<li></li>
						<li></li>
					</nav>
				</div>
			</div>
			<div  style="float:left;">
				<div class="freePlan">
					<div class="freeText">FREE</div>
					<div class="planLine"></div>
					
					<nav class="planList2">
						<li>20</li>
						<li>20</li>  
						<li>20</li>
						<li>20</li>
						<li>20</li>
						<li></li>
						<li></li>
						<li></li>
						<input type="button" class="buttonPlan">
					</nav>
				</div>
			</div>
			<div  style="float:left;">
				<div style="margin-top:67px;margin-left:-5px;position:absolute;">
					<img src="{{asset('images/silverTop2.png')}}">
				</div>
				<div class="basicPlan">
					<div class="freeText2">BASIC<br/> Php 1,299 / month</div>
					<div class="planLine"></div>
					<nav class="planList3">
						<li>Unlimited</li>
						<li>Unlimited</li>  
						<li>Unlimited</li>
						<li>Unlimited</li>
						<li>Unlimited</li>
						<li>2 Ticket & Live Chat</li>
						<li></li>
						<li></li>
						<li></li>
						<input type="button" class="buttonPlan2">
					</nav>
				</div>
			</div>
			<div  style="float:left;display:none;">
				<div style="position:absolute;margin-top:33px;margin-left:-2px;">
					<img src="{{asset('images/goldTop2.png')}}">
				</div>
				<div class="premiumPlan">
					<div class="freeText2">PREMIUM</div>
					<div class="peso">Php 499 / month</div>
					<div class="planLine"></div>
					
					<nav class="planList4">
						<li>Unlimited</li>
						<li>Unlimited</li>  
						<li>Unlimited</li>
						<li>Unlimited</li>
						<li><img class="logo" src="{{asset('images/checkBasic.png')}}" style="width:27px;"></li>
						<li><img class="logo"  src="{{asset('images/checkBasic.png')}}" style="width:27px;"></li>
						<li style="margin-top:-9px;">5</li>
						<li>5 Ticket & Live Chat/Remote</li>
						<li><img class="logo"  src="{{asset('images/checkBasic.png')}}" style="width:27px;margin-top:-2px;"></li>
						<li></li>
						<li></li>
						<li></li>
						<input type="button" class="buttonPlan3" value="GO PREMIUM">
					</nav>
				</div>
			</div>
			<div style="clear:both;"></div>
			<div style="height:30px;"></div>
	</div>
	<div class="footerLanding">
		<nav id="landingfooter" style="margin-left:36px;">
			<li><a href="/user/contact_us" class="footerLanding taxtableNew">Contact Us</a>
			</li>
			<li><div class="lineLandingFooter"></div>
			<li><a href="/about_us" class="footerLanding contact">About Us</a>
			</li>
			<li><div class="lineLandingFooter"></div>
			</li>
			<li><a href="/plan" class="footerLanding NTCTax">Plan & Pricing</a>
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
			<li><a href="/learn?" class="footerLanding NTCTax">Learn More...</a>
			</li>
		</nav>
	</div>
	
	
	
</div>