<style>
</style>
<script src="<?php echo URL; ?>public/js/jquery.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>	
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/setting/css/change_password.css"/>
<script>
$(function(){
	$('form').submit(function(){
		if($('input[name="newpassword"]').val() != $('input[name="nconfirmpassword"]').val()){
			alert('Unable to submit, password confirmation do not match.');
			return false;
		}
	});
});
</script>

<div class="changeMain">
    <form method="post" action="<?= URL ?>setUserPassword" class="changeMainForm">
		<input type="hidden" name="c" value="<?= $_GET['c'] ?>"/>
		<input type="hidden" name="cd" value="<?= $_GET['cd'] ?>"/>
		<input type="hidden" name="cl" value="<?= $_GET['cl'] ?>"/>
        <div class="changeText">Create New Password</div>
        <div class="changeLine"></div>
        <table class="changeTable">
            <tr>
                <td>New Password:</td>
                <td><input type="password" name="newpassword" placeholder="Enter New Password" class="inputtexttable" required></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="nconfirmpassword" placeholder="Confirm Password" class="inputtexttable" required></td>
            </tr>
        </table>
        <div class="buttonHolder">
            <input type="submit" class="changebutton changebuttonOK addsavebutton" value="Ok">
            <input type="button" class="changebutton changebuttonCancel addsavebutton" value="Cancel">
            <input type="hidden" name="task" value="changepassword" />
        </div>

    </form>
</div>

<script>
    
</script>
