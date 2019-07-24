<style>
@font-face {
    font-family: 'agency fb'!important;  /*a name to be used later*/
    src: url('<?= URL ?>public/fonts/AGENCYR.ttf'); /*URL to font*/
}

@font-face {
    font-family: 'agency fb2'!important; /*a name to be used later*/
    src: url('<?= URL ?>public/fonts/AGENCYB.ttf'); /*URL to font*/
}
.maincommentscontainer{
	width:100%;
	margin:auto;
}
.commentsnew{
	width:500px;
	margin:auto;
	border:solid #183867;
	margin-top:30px;
	padding:10px;
	background-color:white;
}
.emailconcern{
	margin-top: 20px;
	padding-left: 0px;
	color: #398f72;
	font-family:Agency FB;
	font-weight:bold;
	font-size: 24.4px;
}
.xsupport{
	border: none;
	float: right;
	background: none;
	font-size: 21px;
	font-weight: bold;
	font-family: Verdana;
	cursor:pointer;
}
.titlecontainer{
	color: #398f72;
	font-family:Agency FB;
	font-weight:bold;
	font-size: 16px;
	margin-top:15px;
}
.titlesupport{
	width:375px;
	margin-left:25px;
	height:29px;
	
}
.mainform{
	padding-left:10px;
	margin-top:35px;
}
.textareasupport{
	margin-top: 16px;
	width: 480px;
	height: 187px;
	max-width: 480px;
	max-height: 187px;
	padding:5px;
}
.submitsupport{
	width: 71px;
	margin-top: 20px;
	margin-left: 409px;
	background-color:#183867;
	border: none;
	border-radius: 3px;
	height: 23px;
	color: white;
	font-family: verdana;
	font-size: 13px;
	font-weight: bold;
	cursor:pointer;
}
</style>

<script>
$(document).ready(function(e) {
	$('#mainform').submit(function(){
			$.post(URL + 'support/emailReferral',$('#mainform').serialize())
				.done(function(returnData){
					if(returnData == 0){
						location.href='';
					} else{
						alert(returnData);
					}

				})
				.fail(function(){
						alert('Connection Error');
				});
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
</script>



<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="maincommentscontainer">
	<div class="commentsnew boxshadow">
		 <input type="button" class="xsupport popx" value="X">
		 <div class="emailconcern">EMAIL YOUR FRIENDS ABOUT UNLIBOOKS</div>
		<form method="post" action="<?php echo URL ?>support/sendReferrals" class="mainform" name="frmSample"  id="mainform" onSubmit="return ValidateForm()" >
			<div class="titlecontainer">Name of Friend: <input type="text" class="titlesupport" name="nameOfFriend" id="nameOfFriend"></div>
			<div class="titlecontainer">Email of Friend: <input type="text" class="titlesupport" name="emailOfFriend" id="emailOfFriend"></div>
			<div><textarea class="textareasupport" placeholder="ENTER YOUR CONCERN" name="message" id="message"></textarea></div>
			<input type="submit" name="submit" class="submitsupport" value="SEND">
		</form>
	</div>
</div>
