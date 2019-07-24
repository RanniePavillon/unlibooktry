<script src="<?php echo URL; ?>public/js/jquery.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<script>
    URL = '<?php echo URL; ?>';
</script>
<script>
    $(function() {
        $('#loginForm').submit(function() {
            $('.loginDevider').html('<div>LOADING. . .</div>');
            email = $('input[name="email"]').val();
            if (email == '') {
                $('.loginDevider').html('<div class="error">Please Enter Username!</div>');
                $('input[name="email"]').focus();
                return false;
            }

            password = $('input[name="password"]').val();
            if (password == '') {
                $('.loginDevider').html('<div class="error">Please Enter Password!</div>');
                $('input[name="password"]').focus();
                return false;
            }

            msg = $.ajax({
                url: URL + "login/userLogin",
                type: 'POST',
                data: {'email': email, 'password': password},
                async: false,
                error: function() {
                    return 'Connection Error!';
                }
            }).responseText;
            
            if (msg == '') {
                validate = $.ajax({
                    url: URL + "dashboard",
                    async: false,
                    error: function() {
                        return 'Connection Error!';
                    }
                }).responseText;

                if (validate == 0) {
                    location.reload();
                } else {
                    location = URL + "dashboard";
                }
            } else {
                if (msg == '1') {
                    location = URL + 'login/userLogin';
                } else {
                    $('.loginDevider').html('<div class="error">' + msg + '</div>');
                }
            }
            return false;
        });
    })
</script>
<link href="<?= URL ?>views/user/css/default.css" rel="stylesheet" type="text/css">
<body class="bgLogin">
	<form method="post" action="<?php echo URL ?>login/userLogin" class="companyFormLog1"  id="loginForm">
		<div class ="divlog1">
			<div class="hidden">
				<img src="<?=URL?>public/images/loginX.png" style="margin-top:-8px;float:right;margin-right:-5px;">
			</div>
			<img class="scpLogo"  src="<?= URL ?>public/images/serviceNewLogo.png">
			<div class="loginDevider"></div>
			<table class="logintr">
				<tr class="logintr">
					<td class="text1log2">USER NAME:</td>
				</tr>	
				<tr>	
					<td class="logintd"><input type="email" class="fullnameInputlog2" placeholder="username" name="email" required></td>
				</tr>
				<tr>
					<td>
						<div style="margin-top:10px;">
						</div>
					</td>
				</tr>
				
				<tr class="logintr">
					<td class="text1log2">PASSWORD:</td>
				</tr>	
				<tr>	
					<td><input type="password" class="fullnameInputlog2" placeholder="****************" name="password" required></td>
				</tr>
				<tr>
					<td>
						<div class="ban"><a href="<?= URL ?>forgotpassword" class="textlogin">Forgot your Password?</a></div>
					</td>
					<td>
					</td>
				</tr>

			</table>
			 
			
			<div class="tryCreate">
				<input type="submit" class="Log2button" value="">
				<div>Don't have any account yet? <a href="<?php echo URL?>" style="color:#fff;">Create Account Now</a></div>
			</div>
		</div>
	</form>
</body> 
