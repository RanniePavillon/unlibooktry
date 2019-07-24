<style>
    .terms{
        color: #ffffff;
    }
    .hidden{
        display: none;
    }
    a{
        color: #000;
        text-decoration: none;
    }
    a:HOVER{
        text-decoration: underline;
    }
    .bgLanding{
        /* background-image:url('{{asset('images/landingBg.png')}}'); */
        background-attachment: initial!important;
        padding: 0;
        background: -moz-radial-gradient(center, ellipse cover, #290202 26%, #C50808 100%); /* ff3.6+ */
        background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(26%, #290202), color-stop(100%, #C50808)); /* safari4+,chrome */
        background:-webkit-radial-gradient(center, ellipse cover, #290202 26%, #C50808 100%); /* safari5.1+,chrome10+ */
        background: -o-radial-gradient(center, ellipse cover, #290202 26%, #C50808 100%); /* opera 11.10+ */
        background: -webkit-radial-gradient(center, ellipse cover, #290202 26%, #C50808 100%); /* ie10+ */
        background:radial-gradient(ellipse at center, #8E8989 47tColorstr='#EE7979', endColorstr='#DC0505',GradientType=1 ); /* ie6-9 */
        background-size: 100% 100%;
        margin:0;
    }
    .newlanding{
        background-color: white;
        margin: auto;
        margin-top:10px;
        width:875px;
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
        width: 326px;
        background-color:rgb(193, 15, 15);
        padding-bottom:10px;
        border-radius:5px;
        padding-top: 20px;
    }
    .trialTitle{
        margin: auto;
        font-family: agency fb2;
        text-align: center;
        padding: 7px 0px 2px 0px;
        height: 34px;
        width: 210px;
        color: #E9E9EC;
        font-size: 25px;
        text-shadow: 1px 0px 1px rgba(0, 0, 0, 0.8);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background: #def2ff;
        background-image: -webkit-linear-gradient(top, #def2ff -154%, #AA1A17);
        background-image: -moz-linear-gradient(top, #def2ff -154%, #AA1A17);
        background-image: -ms-linear-gradient(top, #def2ff -154%, #AA1A17);
        background-image: -o-linear-gradient(top, #def2ff -154%, #AA1A17);
        background-image: linear-gradient(to bottom, #def2ff -154%, #AA1A17);
        -webkit-box-shadow: 0px 1px 1px rgba(251, 251, 251, 0.75) inset;
        -moz-box-shadow: 0px 1px 1px rgba(251, 251, 251, 0.75) inset;
        box-shadow: 0px 1px 1px rgba(251, 251, 251, 0.75) inset;
    }
    .getStarted{
        font-size: 16px;
        color:#fff;
        font-family: Agency FB;
        font-weight: bold;
        margin-top: 15px;
    }
    .getStarted input[type="text"],input[type="email"]{
        width: 263px;
        height:24px;
        padding: 5px;
        margin-top:3px;
        margin-bottom:10px;
        font-family:Tahoma;
        font-size:12px;
        background:#fff;
        border: 1px solid rgb(127,127,127);
        outline-style:none;
    }
    .getStarted input[type="text"], input[type="password"] {
        width: 263px;
        height:24px;
        padding: 5px;
        margin-top: 3px;
        margin-bottom: 10px;
        font-family: Tahoma;
        font-size: 12px;
        background: #fff;
        border: 1px solid rgb(127,127,127);
        outline-style: none;
    }
    .agree{
        font-family: Agency FB;
        font-size:14px;
        margin-top: 2px;
        font-weight: normal;
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
        font-size:14px;
        color: #000;
        text-align: center;
        margin-top: 5px;
        font-weight: normal;
    }
    .or a{
        color:#fff;
        font-family: Agency FB;
        font-size:14px;
        text-decoration:none;
    }
    .or a:hover{
        text-decoration:underline;
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
        width:157px;
        height: 245px;
        background-image:url('{{asset('images/manCheck2.png')}}');
        background-repeat:no-repeat;
        background-size:100% 100%;
        margin-left:25px;
    }
    .textManCheck{
        font-family: agency fb2;
        font-size: 16px;
        margin-left: 189px;
        width: 245px;
        margin-top: 25px;
        color: #000000;
    }
    .blueHolder{
        width:400px;
        height:400px;
        background: rgb(57, 141, 178);
    }
    .custom-checkbox{
        top:2px;
        margin-left:6px;
        display: inline-block;
        position: relative;
        z-index: 1;
        -webkit-transform: scale(0.7);
    }

    .selected{
        margin-left:6px;
        display: inline-block;
        position: relative;
        z-index: 1;
        background-size: 14px 14px;
        -webkit-transform: scale(0.7);
    }
    .custom-checkbox input[type="checkbox"]{
        margin: 0;
        position: absolute;
        z-index: 2;
        cursor: pointer;
        outline: none;
        _noFocusLine: expression(this.hideFocus=true); 
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        filter: alpha(opacity=0);
        -khtml-opacity: 0;
        -moz-opacity: 0;
    }
    .landingFooter{
        float: right;
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
        color:#fff;
        text-decoration:none;
    }
    .bottomLink:hover{
        text-decoration:underline;
    }
    .textManCheck li{
        padding-top:25px;
    } 
    .bottomHolder{
        margin-top: 23px;
    }
    .button30DaysFree{
        background-size: 100% 100%;
        width: 190px;
        height: 33px;
        margin-top: 20;
    }
    .getStartedButtonService{
        margin-top: 10px;
        background-size: 100% 100%;
        height: 27px;
        width: 95px;
    }
    @font-face {
        font-family: 'agency fb'; /*a name to be used later*/
        src: url('{{asset('fonts/AGENCYR.ttf')}}'); /*URL to font*/
    }

    @font-face {
        font-family: 'agency fb2'; /*a name to be used later*/
        src: url('{{asset('fonts/AGENCYB.ttf')}}'); /*URL to font*/
    }
    .textAgency{
        font-family:agency fb2;
    }
    .agreetable{
        width:299px;
        margin:auto;
        margin-top: -4px;
    }
    .agreement{
        margin-top:20px;
    }
    .agree{
        font-family: agency fb;
        font-size: 14px;
        margin-left:24px;
        margin-top:1px;
    }
    .orlog {
        font-family: agency fb;
        font-size:14px;
        margin:auto;
        text-align:center;
        margin-top:-16px;
    }
    .Log1Check{
        width:15px;
        height:20px;
    }
    .submitLink{
        height: 27px;
        width: 93px;
        margin: auto;
        margin-top: 21px;
        border: none;
        border-radius: 5px;
        outline-style: none;
        background: #7A0687;
        background-image: -webkit-linear-gradient(to bottom, #BC6366, #AA1D1A);
        background-image: -moz-linear-gradient(to bottom, #BC6366, #AA1D1A);
        background-image: -ms-linear-gradient(to bottom, #BC6366, #AA1D1A);
        background-image: -o-linear-gradient(to bottom, #BC6366, #AA1D1A);
        background-image: linear-gradient(to bottom, #BC6366, #AA1D1A);
        -webkit-border-radius: 28px;
        -moz-border-radius: 28px;
        border-radius: 5px;
        font-family: agency fb2;
        color: #ffffff;
        font-size: 16px;
        padding: 5px;
        text-decoration: none;
        box-shadow: 0px 0px 3px 0px #F9F9F9 inset;
    }
    .sblik a{
        text-decoration:none;
    }
</style>

<!-- include js file here -->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<script src="{{asset('/js/google.jquery.min.js')}}."></script>

<!-- <script>
    $(document).ready(function (e) {
        $('#landingForm').submit(function () {
            var sEmail = $('#txtEmail').val();
            var valid = $('#valid').val();
            var password = $('#password').val();

            if (valid == 0) {
// checking empty fields
                if ($.trim(sEmail).length == 0 || $("#name").val() == "" || $("#lname").val() == "" || password == '') {  /*original code*/
                    // if ($.trim(sEmail).length == 0) {/* ADDITIONAL CODES-BELLE */
                    alert('All fields are mandatory');
                    return false;
                }
                if (!validateEmail(sEmail)) {
                    alert('Invalid Email Address');
                    return false;
                }

                if (!$('.Log1Check').is(':checked')) {
                    alert('Please check first the Agreement and Terms of Use');
                    return false;
                }

                $.post('{{('index/checkEmail')}}', $('form').serialize())
                        .done(function (returnData) {
                            if (returnData == 0) {
                                $('#valid').val("1");
                                //location = '{{('index/createaccount')}}';
                                $('#landingForm').submit();
                            } else {
                                alert(returnData);
                            }
                        })
                        .fail(function () {
                            alert('Connection Error');
                        });
                return false;
            }
        });

        $('.submitLink').click(function () {
            $('#landingForm').submit();
            return false;
        });
    });


    // Function that validates email address through a regular expression.
    function validateEmail(sEmail) {
        var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

        if (filter.test(sEmail)) {

            return true;
        } else {
            return false;
        }
    }

    function customCheckbox(checkboxName) {
        var checkBox = $('input[name="' + checkboxName + '"]');

        // $(checkBox).each(function(){
        $(checkBox).wrap("<span class='custom-checkbox'></span>");
        if ($(checkBox).is(':checked')) {
            $(checkBox).parent().addClass("selected");
        }
        // });
        $(checkBox).click(function () {
            $(this).parent().toggleClass("selected");
        });
    }


    $(document).ready(function () {
        customCheckbox("check");
    })

</script> -->
<link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}">
<body class="bgLanding">
    <div class="mainlanding">
        <form method="post" action="{{('/user/userRegister')}}" name="landing" class="" id="landingForm" >
            <input type="hidden" name="valid" id="valid" value="0">
            <div class="newlanding"> 
                <div class="linklanding">
                    <!--<a href="contact_us" class="ubServiceMenu" style="border-right:none;">CONTACT US</a>-->
                    <a href="plan" class="ubServiceMenu hidden" style="border-right:none;">PLAN & PRICING</a>
                    <a href="{{('/user/login')}}" class="ubServiceMenu">LOG IN</a>
                </div>
                <div>
                    <img src="{{asset('images/urt_landing_new.png')}}" class="ubServiceLogo">
                    <!--<img src="{{asset('images/service_landing_new3.png')}}" class="ubServiceLogo">-->
                </div>
                <div class="textLanding">
                    <label style="font-size:40px;font-family:Agency FB;">UNLIBOOKS</label>
                    <!--<span class="isAnAcct">IS A SIMPLE, AUDIT-READY ACCOUNTING SOFTWARE<br/> THAT GIVES YOU FULL FINANCIAL CONTROL OF YOUR COMPANY.</span>-->
                    <span class="isAnAcct">is a quick and easy-to-use BIR compliant<br/> accounting solution, specifically designed for small and medium enterprises.</span>
                </div>
                <div class="bottomHolder">
                    <div style="float:left;margin-left:33px;width:424px;  margin-top: 35px;">
                        <div class="manModel" style="float:left;">
                        </div>
                        <div class="textManCheck">
                            <div>
                                Quick billing to your customers
                            </div>
                            <div style="margin-top:28px;">
                                Simple recording of expenses
                            </div>
                            <div style="margin-top:29px;">
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
                            <div style="margin-left:20px;margin-right:20px;">
                                <!--<div style="text-align:center;">
                                        <img src="{{asset('images/button30daysred.png')}}" class="button30DaysFree">
                                </div>-->
                                <div class="trialTitle">
                                    <!--<div class="30daytry">FREE >-DAY TRIAL</div>-->
                                    <div class="30daytry">FREE TRIAL</div>
                                </div>
                                <div style="margin-left:10px;margin-right:10px;">
                                    <table class="getStarted">
                                            <!--<tr>
                                                    <td>Company Name</td>
                                            </tr>
                                            <tr>
                                                    <td><input type="text" name="companyName" id="name" placeholder="Enter Company Name" required></td>
                                            </tr>-->
                                        <tr>
                                            <td class="textAgency">EMAIL ADDRESS</td>
                                        </tr>
                                        <tr>
                                            <td><input type="email" name="email" placeholder="Enter Email Address" id="txtEmail" required></td>
                                        </tr>
                                        <tr>
                                            <td class="textAgency" style="padding-top: 0px;">PASSWORD</td>
                                        </tr>
                                        <tr>
                                            <td><input type="password" name="password" placeholder="******" id="password" required class="email"></td>
                                        </tr>                                       
                                    </table>
                                </div>

                                <table class="agreetable">
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="checkbox" id="check" class="Log1Check" name="check" value="check" id="agree">
                                                <div class="agree"> I have read and agreed to the <a href="{{('terms')}}" class="terms"><span class="spanAgree">Unlibooks End User's Agreement</span> and <span class="spanAgree">Terms of Use</a>.</span></div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
								
								<div style="text-align:center;">
									<!-- a href="landing" class="submitLink" -->
										<input type="button" value="GET STARTED" class="submitLink checkPortal">
										<input type="submit"  class="hidden form-submit-button">
									<!--/a-->
								</div>

                                <div class="Or">Or <a href="/user/login">Log In</a> if you already have an account.</div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                </div>

                <div style="padding-bottom:30px;">
                </div>

                <div class="landingFooter">	
                    <ul class="ulFooter">
                        <li><a href="{{('/user/contact_us')}}" class="bottomLink">Contact Us</a>
                        <li><a href="{{('about_us')}}" class="bottomLink">About Us</a>
                    </ul>
                </div>
            </div>	
            <input type="submit" style="display: none;"/>
        </form>
    </div>
</body>

<div class="popBack hidden">

</div>

<!-- <script>
	var URL = '{{('URL')}};
    $(function () {
        $('.terms').click(function () {
            href = $(this).attr('href');
            url = "http://unlibooks.com/policy/terms.pdf";

            window.open(url, 'Terms and Use', "height=700,width=600");

            return false;
        });
        $('.agree').click(function () {
            $('.popBack').addClass('hidden');
            $('#check').prop('checked', true);
            $('#check').change();
        });
		
		$('.checkPortal').unbind('click');
		$('.checkPortal').bind('click',function(){
		    $('.form-submit-button').click();
		    return false;
			var formData = $('#landingForm').serialize();
			
			$.post(URL+'user/checkPortal',formData)
				.done(function(result){
					
					if(result == 'client')
					{
						var email = $('input[name="email"]').val();
						
						$.post(URL+'user/resellerModal',{'email':email})
							.done(function(result){
								
								$('.popBack').html(result);
								$('.popBack').removeClass('hidden');
							});
						
					}
					else
					{
						$('.form-submit-button').click();
					}
					
				});
		});
    })
</script> -->