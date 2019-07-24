<style>

</style>

<script>
	/* $(document).ready(function(e) {
	 $('#mainform').submit(function() {
	 var sEmail = $('#title').val();
	 }
	});  */
</script>
<link rel="stylesheet" href="{{('views/support/css/support.css')}}"/>
<link rel="stylesheet" href="{{asset('css/popup.css')}}"/>
<div class="maincommentscontainer">
	<div class="commentsnew boxshadow">
		 <input type="button" class="xsupport popx" value="">
		 <div class="emailconcern">EMAIL CONCERN</div>
		<form method="post" action="{{('support/sendMessage')}}" class="mainform" name="frmSample"  id="mainform" onSubmit="return ValidateForm()" >
			<div class="titlecontainer">Subject: <input type="text" class="titlesupport" name="title" id="title"></div>
			<div><textarea class="textareasupport" placeholder="ENTER YOUR CONCERN" name="message"></textarea></div>
			<input type="submit" name="submit" class="submitsupport" value="SEND">
		</form>
	</div>
</div>
