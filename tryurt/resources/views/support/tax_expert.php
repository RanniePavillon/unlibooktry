<style>

</style>

<script>
//	$(document).ready(function(e) {
//	 $('#mainform').submit(function() {
//	 var sEmail = $('#title').val();
//	 
//	});
</script>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/support/css/support.css"/>

<div class="maincommentscontainer">
	<div class="commentsnew2 boxshadow">
		 <input type="button" class="xsupport popx" value="">
		 <div class="emailconcern">Ask a Tax Expert</div>
		<form method="post" action="<?php echo URL ?>" class="mainform" name="frmSample"  id="mainform" onSubmit="return ValidateForm()" >
			<div class="titlecontainer">Subject: <input type="text" class="titlesupport" name="title" id="title"></div>
			<div><textarea class="textareasupport" placeholder="ENTER YOUR CONCERN" name="message"></textarea></div>
			<input type="submit" name="submit" class="submitsupport" value="SEND">
		</form>
	</div>
</div>
