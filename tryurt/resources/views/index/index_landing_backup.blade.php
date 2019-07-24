<style>
    @font-face {
		font-family: 'Agency FB'!important;  /*a name to be used later*/
		src: url('{{asset('fonts/AGENCYR.ttf')}}'); /*URL to font*/
	}
	.bgLanding{
		background-image:url('{{asset('images/landingBg.png')}}');
		background-repeat:no-repeat;
		background-size:100%100%;
		background-attachment: initial!important;
		margin: auto;
		padding: 0;
	}
    .newlanding{
        background-color: white;
        margin: auto;
		margin-top:10px;
        width:875px;
       /*  border: 1px solid rgb(219, 219, 219); */
		height:auto!important;
		box-shadow: 1px 1px 10px rgb(218, 210, 210);
		padding-bottom:30px;
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
        float:right;
		margin-right: 107px;
		margin-top: 10px;
    }
    .linklanding a{
        font-size:12px;
		font-family:Agency FB;
		text-decoration:none;
		color:gray;
		border-left:1px solid gray;
		border-right:1px solid gray;
    }
	.linklanding a:hover{
		color:red;
	}
	.ubServiceMenu{
		padding: 0px 17px;
	}
    .hrDiv{
        background-color: rgb(248, 200, 8);
        width: 951px;
        height: 15px;
    }
    .textLanding{
        font-family: Agency FB;
		text-align: center;
		font-size: 20px;
		margin-top: 20px;
    }
    .picLanding{
        margin-left: 60px;
        margin-top: 15px;
    }
    .features{
        background-color: RGB(195, 214, 155);
        width: 300px;
        height: 23px;
        padding: 8px 5px 5px 5px;
        text-align: center;
        color: rgb(0,32,96);
        font-size: 16px;
        font-family: Arial Rounded MT Bold;
        border-radius: 5px 5px 0px 0px;
        margin-top: 30px;
    }
    .checklanding{
        width: 18;
        position: absolute;
        margin-left: -24px;
        margin-top: -4px;
    }
    .checkText{
        margin-left: 39px;
        font-family: Arial Rounded MT Bold;
        font-size: 16px;
        color: rgb(33,89,104);
    }
    .checkContainer{
        margin-top:15px;
    }
    .trial{
        width: 350px;
		background-color:rgb(81, 131, 153);
		padding-bottom:10px;
		border-radius:5px;
    }
    .trialTitle{
        width: 287px;
        margin: auto;
        text-align: center;
        margin-top: 15px;
        background-color: #1EBE39;
        padding-top: 21px;
        padding-bottom: 26px;
        box-shadow: 5px 0px 14px 12px white inset;
        border: 1px solid white;
        color: white;
        font-family: Georgia;
        font-weight: bold;
    }
    .getStarted{
        font-size: 16px;
        color:#fff;
        font-family: Agency FB;
        font-weight: bold;
        margin-top: 15px;
        margin-left:39px;
    }
    .getStarted input[type="text"],input[type="email"]{
        width: 267px;
        height: 32px;
        padding: 5px;
        margin-top:10px;
        margin-bottom:10px;
        font-family:Tahoma;
        font-size:12px;
        background:#fff;
        border: 1px solid rgb(127,127,127);
		outline-style:none;
    }
    .agree{
        font-family: Agency FB;
        font-size: 12px;
        margin-top: 2px;
		font-weight: normal;
    }
    .spanAgree{
        color:rgb(0, 176, 80);
        font-weight:bold;
    }
    .getStartedButton{
        width: 173px;
        padding-top: 6px;
        padding-bottom: 5px;
        border-radius: 5px;
        border: none;
        height: 32px;
        color: white;
        font-weight: bold;
        font-size: 14px;
        margin-left: 66px;
        margin-top: 20px;
        text-align: center;
        background: #9cc647;
        background: -moz-linear-gradient(top, #9cc647 0%, #7b9b38 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#9cc647), color-stop(100%,#7b9b38));
        background: -webkit-linear-gradient(top, #9cc647 0%,#7b9b38 100%);
        background: -o-linear-gradient(top, #9cc647 0%,#7b9b38 100%);
        background: -ms-linear-gradient(top, #9cc647 0%,#7b9b38 100%);
        background: linear-gradient(to bottom, #9cc647 0%,#7b9b38 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9cc647', endColorstr='#7b9b38',GradientType=0 );
    }
    .getStartedButton a{
        color:white;
        text-decoration:none;
    }
    .lineAgree{
        border-bottom:1px solid blue;
        border-top:none;
        margin-top: 15px;
    }
    .or{
        font-family: Agency FB;
		font-size: 13px;
		color: #000;
		text-align: center;
		margin-top: 5px;
		font-weight: normal;
    }
    .or a{
        color:#fff;
        /* font-weight:bold; */
		font-family: Agency FB;
		font-size: 12px;
		text-decoration:none;
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
        margin-left: 112px;
        margin-top: -20px;
    }
    .fbLanding{
        width: 20px;
        height: 20px;
        border: none;
        background-image: url('{{asset('images/fbpic2.jpg')}}');
        background-repeat: no-repeat;
        background-position: left;
        cursor: pointer;
    }
    .inLanding{
        width: 20px;
        height: 20px;
        border: none;
        background-image: url('{{asset('images/tweet.jpg')}}');
        background-repeat: no-repeat;
        background-position: left;
        cursor: pointer;
    }
    .tweetLanding{
        width: 20px;
        height: 20px;
        border: none;
        background-image: url('{{asset('images/inpic.png')}}');
        background-repeat: no-repeat;
        background-position: left;
        cursor: pointer;

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
	.ubServiceLogo{
		width: 826px;
		height: 260px;
		margin-left: 25px;
	}
	.hidden{
		display:none;
	}
	.isAnAcct{
		font-size: 30px;
		font-family: Agency FB;
		color: #302F2F;
		margin-left: 5px;
	}
	.manModel{
		width:178px;
		height: 245px;
		background-image:url('{{asset('images/manCheck2.png')}}');
		background-repeat:no-repeat;
		background-size:100% 100%;
	}
	.textManCheck{
		font-family: Agency FB;
		font-size: 17px;
		margin-left: 189px;
		width: 245px;
		padding-left: 0;
	}
	.blueHolder{
		width:400px;
		height:400px;
		background: rgb(57, 141, 178);
	}
 .custom-checkbox{
		width: 14px;
		height: 14px;
		margin-left:24px;
		display: inline-block;
		position: relative;
		z-index: 1;
		top: 3px;
		background: url('{{asset('images/redBox3.png')}}') no-repeat;
		background-size: 16px 16px;
		-webkit-transform: scale(0.7);
	}
	
	.selected{
		width: 14px;
		height: 14px;
		display: inline-block;
		position: relative;
		z-index: 1;
		top: 3px;
		background: url('{{asset('images/redBox4.png')}}') no-repeat;
		background-size:16px 16px;
		-webkit-transform: scale(0.7);
		
	}
	.custom-checkbox input[type="checkbox"]{
		margin: 0;
		position: absolute;
		z-index: 2;
		cursor: pointer;
		outline: none;
		opacity: 0;
		_noFocusLine: expression(this.hideFocus=true); 
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);
		-khtml-opacity: 0;
		-moz-opacity: 0;
	}
	.landingFooter{
		float: right;
		/* margin-right:192px; */
		margin-top:35px;
	}
	li{
		list-style-type:none;
	}
	.ulFooter li{
		display:inline-block;
		margin-right: 63px;
		font-family: Agency FB;
		font-size:13px;
	}
	.bottomLink{
		color:#000;
		text-decoration:none;
	}
	.bottomLink:hover{
		text-decoration:underline;
	}
	.textManCheck li{
		padding-top:25px;
	} 
	.bottomHolder{
		/* background:#c8c8c8; */
		margin-top: 60px;
	}
</style>

<!-- include js file here -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<!-- <script>
    $(document).ready(function(e) {
        $('#landingForm').submit(function() {
            var sEmail = $('#txtEmail').val();

// checking empty fields
            if ($.trim(sEmail).length == 0 || $("#name").val() == "" || $("#lname").val() == "") {
                alert('All fields are mandatory');
                return false;
            }
            if (!validateEmail(sEmail)) {
                alert('Invalid Email Address');
                return false;
            }

            if (!$('.Log1Check').is(':checked')) {
                alert('Please check first the Agreement and Term of Use');
                return false;
            }
        });
		
		$('.submitLink').click(function(){
			$('#landingForm').submit();
			return false;
		});
    });

	
// Function that validates email address through a regular expression.
    function validateEmail(sEmail) {
        var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

        if (filter.test(sEmail)) {
            return true;
        }
        else {
            return false;
        }
    }
	
	function customCheckbox(checkboxName){
        var checkBox = $('input[name="'+ checkboxName +'"]');
		
        // $(checkBox).each(function(){
            $(checkBox).wrap( "<span class='custom-checkbox'></span>" );
            if($(checkBox).is(':checked')){ 
                $(checkBox).parent().addClass("selected");
            }
        // });
        $(checkBox).click(function(){
            $(this).parent().toggleClass("selected");
        });
    }
	
	
	$(document).ready(function (){
        customCheckbox("check");
    })

</script> -->
<link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}">
<body class="bgLanding">
<div class="mainlanding">
    <form method="post" action="{{('/index/createaccount')}}" name="landing" class="" id="landingForm" >
        <div class="newlanding"> 
			<div class="linklanding">
				<!--<a href="contact_us" class="ubServiceMenu" style="border-right:none;">CONTACT US</a>-->
				<a href="plan" class="ubServiceMenu" style="border-right:none;">PLAN & PRICING</a>
				<a href="/user/login" class="ubServiceMenu">LOG IN</a>
            </div>
			<div>
				<img src="{{asset('images/ubServicesLogoNew.png')}}" class="ubServiceLogo">
			</div>
            <div class="textLanding">
				<label style="font-size:40px;font-family:Agency FB;">UNLIBOOKS</label>
				<!--<span class="isAnAcct">IS A SIMPLE, AUDIT-READY ACCOUNTING SOFTWARE<br/> THAT GIVES YOU FULL FINANCIAL CONTROL OF YOUR COMPANY.</span>-->
				<span class="isAnAcct">is a quick and easy-to-use BIR compliant<br/> accounting solution specifically designed for service providers.</span>
			</div>
			<div class="bottomHolder">
				<div style="float:left;margin-left:33px;width:424px;">
					<div class="manModel" style="float:left;">
					</div>
					<div class="textManCheck">
						<div style="margin-top:23px;">
							Quick billing to your clients
						</div>
						<div style="margin-top:29px;">
							Simple recording of expenses
						</div>
						<div style="margin-top:30px;">
							Useful tracking of collections and expenses
						</div>
						<div style="margin-top:27px;">
							Easy to understand financial and tax reports
						</div>
					</div>
					<div style="clear:both;"></div>
				</div>
				<div style="float:right;margin-right:25px;">
					<div class="trial">
						<div><img src="{{asset('images/button30daysred.png')}}" style="padding: 20px 0px 0px 68px;"></div>
						<table class="getStarted">
							<!--<tr>
								<td>Company Name</td>
							</tr>
							<tr>
								<td><input type="text" name="companyName" id="name" placeholder="Enter Company Name" required></td>
							</tr>-->
							<tr>
								<td>Email Address</td>
							</tr>
							<tr>
								<td><input type="email" name="email" placeholder="Enter Email Address" id="txtEmail" required></td>
							</tr>
						</table>
						<input type="checkbox" name="check" value="check" class="Log1Check" id="agree">
						<label for="agree" class="agree"> I have read and agree to the Unlibooks End User's Agreement and Terms of Use.</label>
						<div>
							<a href="{{('landing')}}" class="submitLink">
								<img src="{{asset('images/buttonGetRed.png')}}" style="margin-left: 110px; margin-top:10px;">
							</a>
						</div>
						
						<div class="Or">Or <a href="/user/login">Log In</a> if you already have an account.</div>
					</div>
				</div>
				<div style="clear:both;"></div>
			</div>
			
			<div style="padding-bottom:30px;">
			</div>
			
			<div class="landingFooter">	
			<ul class="ulFooter">
				<li><a href="{{('/user/contact_us')}}" class="bottomLink">Contact Us</a>
				<li><a href="{{('/about_us')}}" class="bottomLink">About Us</a>
			</ul>
		</div>
		</div>	
		
    </form>
</div>
</body>

<div class="popBack hidden">

</div>
