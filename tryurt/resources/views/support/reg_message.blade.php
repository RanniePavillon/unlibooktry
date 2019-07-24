<link rel="stylesheet" href="{{asset('css/popup.css')}}"/>
<style>
.img2{
	z-index:-1 !important;
}
.contnt{
    height: 100%;
    margin: 0 auto;
    padding-top: 30px;
}

.optcontent{
    width:513px;
    margin: 0 auto;
    background-color: #fff;
    padding: 15px;
    font-family:verdana;
    font-size:12px;
    margin-top: 18px;
	border:solid 1px #026CA0;
}

input[type="submit"]{
    display: block;
    margin: 0 auto;
    width: 54px;
    height: 21px;
    background-color: rgb(37, 181, 239);
    border: none;
    color: #fff;
    font-weight: bold;
    border-radius: 3px;
    margin-top:30px;
}
.linestand {
    z-index:-1;
}
.hrlink{
    z-index:-1;
}
.formsdi{
	margin-top: 20px;
	  font-size: 13px;
	  font-family: verdana;
}
.happy{
	font-weight:bold;
	font-size:14px;
}
.phone{
	width: 44px;
    height: 38px;
    margin-top: 4px;
    margin-left: 20px;
}
.textphone{
	margin-top: -25px;
    margin-left: 83px;
}
.popx2{
	margin-top: -23px;
	margin-right: -10px;
}
</style>
<div class="popBack">
    <div class="contnt">
        <div class="optcontent boxshadow">
				<div style="padding-left: 23px; padding-top:15px;padding-bottom:15px;">
					<input type="button" class="popx2">
					Hi [registered name/email add],		
					<br>
					<br> 
					You have to confirm your email address first, [user email address] to continue.
					<br>
					<br>
					Check your inbox to confirm your account.
					<br>
					<br> 
					Need assistance? Feel free to contact us:
					<br>
					<br>
					 <div><img class="phone"  style="" src="{{asset('images/phone.png')}}"> <div class="textphone">+63977 6495377</div></div>
					<br>
					<div style="padding-bottom:20px;"><img class="phone"  style="" src="{{asset('simages/email.jpg')}}"> <div class="textphone">vip@unlibooks.com</div> </div>
				</div>
        </div>
    </div>
</div>
<?php //Session::setSession('firstlog', 1); ?>