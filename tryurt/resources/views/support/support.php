<style>
@font-face {
    font-family: 'agency fb'!important;  /*a name to be used later*/
    src: url('<?= URL ?>public/fonts/AGENCYR.ttf'); /*URL to font*/
}

@font-face {
    font-family: 'agency fb2'!important; /*a name to be used later*/
    src: url('<?= URL ?>public/fonts/AGENCYB.ttf'); /*URL to font*/
}
#new1Client{
	font-family:Agency FB;
	font-weight:bold;
	margin-left: 20px;
	font-size:28.4px;
	color:#04805c;
}
.new1Client22{
	font-family:Agency FB;
	font-weight:bold;
	margin-left: 20px;
	font-size:28.4px;
	color:#04805c;
}

.boxshadow {
	border: solid 1px #183867;
	box-shadow: 0px 1px 2px 2px gray;
}
.maincommentscontainer{
	width:100%;
	margin:auto;
}
.commentsnew{
	width:500px;
	margin:auto;
	margin-top:30px;
	padding:10px;
	background-color:white;
}
.emailconcern{
	margin-top: 20px;
	padding-left: 0px;
	color:#183867;
	font-family:agency fb2;
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
	color:#183867;
	font-family:agency fb2;
	font-weight:bold;
	font-size: 16px;
	margin-top:35px;
	letter-spacing:1;
}
.titlesupport{
	width:438px;
	margin-left:6px;
	height:29px;
}
.mainform{
	padding-left:10px;
}
.textareasupport{
	margin-top: 16px;
	width: 480px;
	height: 187px;
	max-width: 480px;
	max-height: 187px;
	padding:5px;
	font-size: 11px;
	font-family: Verdana;
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

<script>
	$(document).ready(function(e) {
	 $('#mainform').submit(function() {
		 var sEmail = $('#title').val();
	});
</script>


</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="maincommentscontainer">
	<div class="commentsnew boxshadow">
		 <input type="button" class="xsupport" value="X">
		 <div class="emailconcern">EMAIL CONCERN</div>
		<form method="post" action="<?php echo URL ?>support/sendMessage" class="mainform" name="frmSample"  id="mainform" onSubmit="return ValidateForm()" >
			<div class="titlecontainer">Title: <input type="text" class="titlesupport" name="title" id="title"></div>
			<div><textarea class="textareasupport" placeholder="ENTER YOUR CONCERN" name="message"></textarea></div>
			<input type="submit" name="submit" class="submitsupport" value="SEND">
		</form>
	</div>
</div>
