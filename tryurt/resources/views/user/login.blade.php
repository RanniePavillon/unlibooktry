<style>
@font-face {
	font-family: 'verdana'; /*a name to be used later*/
	src: url('{{asset('fonts/Verdana.ttf')}}'); /*URL to font*/
}

@font-face {
	font-family: 'Verdana'; /*a name to be used later*/
	src: url('{{asset('fonts/Verdana.ttf')}}'); /*URL to font*/
}

</style>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<!-- <script>
    URL = '</?php echo URL; ?>';
	</?php if(isset($_GET['autologin']) && $_GET['autologin'] == 'true'){ ?>
		autologin = true;
	</?php } else { ?>
		autologin = false;
	</?php } ?>	
</script> -->
<!-- <script>
    $(function() {
    	var allow_submit = false;
        $('#loginForm').submit(function() {
            if(!allow_submit){
        
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
	            
	            if ($.trim(msg) == '') {
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
	                } else if(msg == 'No Subdomain') { 
		                
	                    subdomain = $.ajax({
		                url: URL + "login/userLogin",
		                type: 'POST',
		                data: {'email': email, 'password': password, 'task': 'get subdomain', 'autologin': autologin},
		                async: false,
		                error: function() {
		                    return 'Connection Error!';
		                }
		            }).responseText;
		            
		            if(subdomain != '-s'){
		            	    sub_validate = $.ajax({
								url: URL + "login/userLogin",
								type: 'POST',
								data: {'email': email, 'password': password, 'subdomain': subdomain,'task': 'validate subdomain user', 'autologin': autologin},
								async: false,
								error: function() {
									return 'Connection Error!';
								}
							}).responseText;
		            	
		            	    if(sub_validate == '-v'){
		            	    	$("#subdomain").val(subdomain);
			            
			                allow_submit = true;
			                $('#loginForm').submit();
		            	    }
		            	    else
		            	    {
		            	    	$('.loginDevider').html('<div class="error">Invalid Username or Password!</div>');
		            	    	return false;
		            	    }
		            
			            
		            } else {
		            	$('.loginDevider').html('<div class="error">Invalid Username or Password!!!</div>');
		            }
		             
	                    
	                } else {
	                    $('.loginDevider').html('<div class="error">' + msg + '</div>');
	                }
	            }
	            return false;
	     }
        });
		$('input[name="email"]').focus();
    })
</script> -->
<link href="{{asset('user/css/default.css')}}" rel="stylesheet" type="text/css">
<body class="bgLogin">
	<form method="get" action="{{('/dashboard/index')}}" class="companyFormLog1"  id="loginForm">
	    	<input type="hidden" name="subdomain" id="subdomain"/>
		<div class ="divlog1">
			<div class="hidden">
				<img src="{{asset('images/loginX.png')}}" style="margin-top:-8px;float:right;margin-right:-5px;">
			</div>
			<img class="scpLogo"  src="{{asset('images/usv_logo_long.png')}}">
			<!--<img class="scpLogo"  src="{{asset('images/services.png')}}">-->
			<div class="loginDevider"></div>
			<table class="logintr">
				<tr class="logintr">
					<td class="text1log2">USERNAME:</td>
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
						<div class="ban"><a href="{{('/user/reset')}}" class="textlogin">Forgot your Password?</a></div>
					</td>
					<td>
					</td>
				</tr>

			</table>
			 
			
			<!-- </?php if(isset($_GET['autologin']) && $_GET['autologin'] == 'true'){ ?> -->
					<input type="hidden" name="autologin" value="true" />
					<input type="hidden" name="redirect" value="{{('')}}" />
				<!-- </?php } ?> -->
			<div class="tryCreate">
				<input type="submit" class="Log2button" value="LOGIN">
				<div style="margin-top:5px;">Don't have any account yet? <a href="{{('#')}}'" style="color:#fff;">Create Account Now</a></div>
			</div>
		</div>
	</form>
</body> 
<!-- <script>
	</?php if(isset($_GET['autologin']) && $_GET['autologin'] == 'true'){ ?>
		$('input[name="email"]').val('</?= $_GET['email'] ?>');
		$('input[name="password"]').val('</?= $_GET['code'] ?>');
		$('form').submit();
	</?php } ?>
</script> -->