

<style>
@font-face {
	font-family: 'verdana'; /*a name to be used later*/
	src: url('{{asset('fonts/Verdana.ttf')}}'); /*URL to font*/
}

@font-face {
	font-family: 'Verdana'; /*a name to be used later*/
	src: url('{{asset('fonts/Verdana.ttf')}}'); /*URL to font*/
}

#error{
	color:red;
}
.bottomSubmit{
	height: 50px;
	width: 361px;
	border: none;
	border-bottom-left-radius: 20px;
	border-bottom-right-radius: 20px;
	border-top-right-radius: 0px;
	border-top-left-radius: 0px;
	border-radius: 0px 0px 15px 15px;
    -moz-box-shadow: inset 0px 5px 8px 4px #6A1060;
    -webkit-box-shadow: inset 0px 5px 8px 4px #6A1060;
        -webkit-box-shadow: inset 0px 5px 8px 4px #5A0404;
    box-shadow: inset 0px -3px 8px 4px #5A0404;
    background: -moz-linear-gradient(90deg, rgb(153, 6, 6) 30%, rgb(122, 5, 5) 60%);
    background: -webkit-linear-gradient(90deg, rgb(153, 6, 6) 30%, rgb(122, 5, 5) 60%);
    background: -o-linear-gradient(90deg, rgb(153, 6, 6) 30%, rgb(122, 5, 5) 60%);
    background: -ms-linear-gradient(90deg, rgb(153, 6, 6) 30%, rgb(122, 5, 5) 60%);
    background: linear-gradient(0deg, rgb(153, 6, 6) 30%, rgb(122, 5, 5) 60%);
	margin-top: 38px;
	text-align:center;
}
.buttonSubmit{
	margin-left:144px;
	margin-top: 25px;
}

.submitLine{
	margin-left: 21px;
		margin-top: 17px;
		margin-bottom: -10px;
}
</style>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<!-- <script>
   /*  $(function(){
        $('#form').submit(function(){  
			checkeEmail($('input[name="email"]').val());
			return false;
        });
        
		
        function checkeEmail(email) {
            //get the email  
            stat = 0;
            $.ajaxSetup({async: false});
            // $.post("{{('user/checkEmail')}}", {email: email},
            $.post("{{('user/sendPassword')}}", {'email': email},
				function(result) { 
					if(result != 0){
						alert(result);
					} else {
						alert('Reset Password was emailed to ' + email);
						location = 'login';
					}
            });
            $.ajaxSetup({async: true});
            
            return stat;
        }
    }) */
// 	 $(function(){
//         $('#form').submit(function(){  
//         if(checkeEmail($('input[name="email"]').val()) == 1){
//                     $('#error').text('Email does not exist');
                    
//                     return false;
//                 }
//         });
        
//         function checkeEmail(email) {
//             //get the email  
//             stat = 0;
//             $.ajaxSetup({async: false});
//             $.post("{{('user/checkEmail')}}", {email: email},
//             function(result) { 
//                 if (result == 1) {
//                     stat = 0;
//                 } else {
//                     stat = 1;
//                 }
//             });
//             $.ajaxSetup({async: true});
            
//             return stat;
//         }
//     })
// </script> -->
<link href="{{asset('user/css/default.css')}}" rel="stylesheet" type="text/css">
<body class="getstartedbodyLog">
    <div class="invoiceHolderLog1">
        <form method="post" action="{{('/user/forgotPass')}}" class="companyFormLog1" id="form">
            <div id="newLog1">
                 <div class ="divlog1">
					<img class="scpLogo"  src="{{asset('images/usv_logo_long.png')}}">
					<!-- <div class="companyNameNew">SISON CORILLO PARONE & CO.</div>-->
                    <!--<hr class="title2lognew">-->
                    <span id="error"></span>
                    <table>
                        <tr>
                            <td class="text1log3"><input type="text" class="fullnameInputlog3" placeholder="Email Address" name="email" required/></td>
                        </tr>
                    </table>
					
                    <div class="text2og3" style="text-decoration: underline;">Your password will be emailed to you.</div>
                       
                    <div class="bottomSubmit">
						<input type="submit" value="SUBMIT" class="Log3button">
					</div>
					<!-- <div class="submitLine">
						<hr class="bottomSubmit"/>
					</div> -->
                    <!--<div class="loginlink"><a href="{{('login')}}"  class="text3log3"> Log In </a><hr class="loginhr"> <div class="loginhr2"><a href="landing"{{('register')}}"  class="text3log3 text3log3New"> Create Account  Now! </a></div></div>
                   
                    </div>
                </div>
        </form>
    </div>
	<div style="clear:both"></div>
</body>
