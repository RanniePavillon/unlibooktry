<style>
    .accountContainer{
		padding:20px;
    }
    .accountForm{
       width:850px;
		background-color:rgb(252, 247, 247);
		margin: auto;
		border-radius: 25px;
		padding: 20px;
		padding-bottom: 30px;
    }
    .createYourAccount{
        font-family: Tahoma;
        font-size:18px;
        font-weight:bold;
        color:rgb(174, 173, 173);
        /* width: 900px; */
        text-align:center;
    }
    .createYourAccount2{
        width: 890PX;
		margin: auto;
		font-family: Tahoma;
		font-size: 12px !important;
		padding-bottom: 148px;
		margin-top: 15px;
    }
    .userAccount{
		font-family: Tahoma;
		font-size: 14px;
		font-weight: bold;
		margin-top:60px;
		margin-left: 12px !important;
		color:rgb(174, 173, 173);
    }
    .userAccountTable{
		float:left;
        margin-left: 10px;
        margin-top: 15px;
		font-size: 12px;
		color:rgb(174, 173, 173);
    }
    .userAccountTable input[type="text"],input[type="email"],input[type="password"]{
		margin-right: 20px;
		width: 206px;
		margin-left:45px;
		height: 28px;
		margin-top:18px;
		padding: 5px;
		font-family: Tahoma;
		background-position:0px;
		font-size: 11px;
		border:none;
    }
    .useraccountHR{
        width: 765px;
        margin-left: 9px;
        margin-top: 20px;
        border-top: none;
        border-bottom: 1px solid rgb(146,208,80);
        border-left: none;
        border-right: none;
    }	
    .keyred{
        margin-top:10px;
    }
    .setup{
        margin-left: 12px;
        font-family: Tahoma;
        font-size: 8px;
        margin-top: 5px;
		color: #474545;
    }
    .userAccountTable textarea{
       width: 206px;
		margin-left: 32px;
		height: 88px;
		margin-top: 7px;
		max-height: 68px;
		max-width: 232px;
		padding: 5px;
		font-family: Tahoma;
		font-size: 11px;
		background-position: 0px;
		border:none;
    }
    .userAccountTable2{
       font-size: 12px;
		font-family: Tahoma;
		color: rgb(174, 173, 173);
    }
    .userAccountTable2 input[type="text"],select{
        margin-right: 20px;
		width: 206px;
		margin-left:34px;
		height: 28px;
		margin-top:18px;
		padding: 5px;
		font-family: Tahoma;
		font-size: 11px;
		border: none;
    }
	 .userAccountTable2 input[type="text"]{
        margin-right: 20px;
		width: 206px;
		margin-left:15px;
		height: 28px;
		margin-top:18px;
		padding: 5px;
		font-family: Tahoma;
		font-size: 11px;
		border: none;
    }
    .browseUser{
		padding: 5px 20px;
		background-color: #183867;
		color: white;
		font-weight: bold;
		font-family: Agency FB;
		letter-spacing: 1px;
		border: none;
		text-align: center;
		border-radius: 5px;
		cursor: pointer;
		line-height: 5;
		margin-left:17px;
    }
    .proceedUser{
		background: #96bd45;
		background: -moz-linear-gradient(top, #96bd45 0%, #7d9d38 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#96bd45), color-stop(100%,#7d9d38));
		background: -webkit-linear-gradient(top, #96bd45 0%,#7d9d38 100%);
		background: -o-linear-gradient(top, #96bd45 0%,#7d9d38 100%);
		background: -ms-linear-gradient(top, #96bd45 0%,#7d9d38 100%);
		background: linear-gradient(to bottom, #666464 0%,#333333 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='96bd45', endColorstr='#7d9d38',GradientType=0 );
		border: none;
		width: 120px;
		border-radius: 7px;
		height: 37px;
		float: right;
		margin-right: 45px;
		color: white;
		font-family: Tahoma;
		font-weight: bold;
		font-size: 14px;
		margin-top:60px;
    }
    #error{
        float: right;
        color: red;
        margin-right: 45px;
        font-size: 12px;
        font-family: calibri;
    }

    .hidden{
        display: none;
    }
	#imgprev{
		margin-right: 20px;
	}
	
	 .userAccountTableNEW1{
		float: right;
		font-size: 12px;
		margin-top: 15px;
		margin-right: 25px;
		color:rgb(174, 173, 173);
    }
    .userAccountTableNEW1 input[type="text"],input[type="email"],input[type="password"]{
		margin-right: 20px;
		width: 206px;
		margin-left:45px;
		height: 28px;
		margin-top:18px;
		padding: 5px;
		font-family: Tahoma;
		background-position:0px;
		font-size: 11px;
		border:none;
    }
	.createAccountbackground{
		margin: auto;
		padding: 0;
		background-image: url('<?= URL?>public/images/bgNew2.png');
		background-repeat: no-repeat;
		background-size: 100%100%;
	}
	.bgInput{
		background-image:url('<?=URL?>public/images/inputBg.png');
		background-repeat:no-repeat;
		background-size: 206px 28px;
		border-radius: 5px;
		border-left: none;
		border-right: 1px solid rgb(152, 148, 148);
		outline-style:none;
	}
	.bgInput2{
		background-image:url('<?=URL?>public/images/inputBg.png');
		background-repeat:no-repeat;
		background-size: 206px 88px;
		border-radius: 5px;
		border-left: none;
		border-right: 1px solid rgb(152, 148, 148);
		outline-style: none;
	}
</style>

<script src="<?php echo URL; ?>public/js/jquery.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<script type="text/javascript">
    function checkPassword(str)
    {
        var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
        return re.test(str);
    }

    $(function() {
        $(document).ready(function() {
            $('.accountForm').submit(function() {
                if ($('#password').val() != "" && ($('#password').val() == $('#confirmpassword').val())) {
                    if ($('#password').val().length < 6) {
                        alert("Error: Password must contain at least six characters!");
                        //	$('#password').focus();
                        return false;
                    }

//					 if(!checkPassword(this.password.value)) {
//					  alert("The Password must consists of uppercase, lowercase and number!");
//					  return false;
//					}

                }

                if ($('#password').val() != $('#confirmpassword').val()) {
                    $('#error').text('Password and confirm password do not match');
                    return false;
                } else if (checkeEmail($('input[name="email"]').val()) == 0) {
                    $('#error').text('Email already exist');
                    return false;
                } else if (checkOrganization($('input[name="orgname"]').val()) == 0) {
                    $('#error').text('Organization name already exist');
                    return false;
                }
                //alert(checkOrganization($('input[name="orgname"]').val())); 
                //return false;
				
				/* if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1 && ext!='') {
                    alert('invalid file!');
                    return false;
                }
                if(fsize >= 20000){
                    alert('invalid file!');
                    return false;
                }  */
				
                //alert(checkOrganization($('input[name="orgname"]').val())); 
                //return false;

            });
			
			
        });
        function checkeEmail(email) {
            //get the email  
            stat = 0;
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>user/checkEmail", {email: email},
            function(result) {
                if (result == 1) {
                    stat = 0;
                } else {
                    stat = 1;
                }
            });
            $.ajaxSetup({async: true});
            return stat;
        }

        function checkOrganization(org) {
            //get the email  
            stat = 0;
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>user/checkOrganization", {org: org},
            function(result) {
                if (result == 1) {
                    stat = 0;
                } else {
                    stat = 1;
                }
            });
            $.ajaxSetup({async: true});
            return stat;
        }

        $('#uplogo1').click(function() {
            $('input[type="file"]').click();
			
        });
		
       $("#imgInp").change(function() {
            readURL(this);
		     
        }); 
		/* $('#imgInp').fileupload({
                add: function(e, data) {
                    var fileType = data.files[0].name.split('.').pop(), allowdtypes = 'jpeg,jpg,png,gif';
                    if (allowdtypes.indexOf(fileType) < 0) {
                        alert('Invalid file type, aborted');
                        return false;
                   }
				   readURL(this);
                }
            }); */
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imgprev').attr('src', e.target.result);
                }
				
                reader.readAsDataURL(input.files[0]);
            }
        }
        ;
    });
</script>
<body style="margin:auto!important;">
<div class="createAccountbackground">
	<div class="accountContainer">
    <form method="post" action="<?php echo URL ?>user/userRegister" name="landing" class="accountForm" id="accountForm" enctype="multipart/form-data" >
        
	<?php $result = array();
	      if(isset($_GET["receipt"])): ?>
		<input type="hidden" name="receipt" value="<?= $_GET["receipt"]?>">
		<?php
		
			require_once('registration/amember_api.php');
			
			$amember = new AmemberAPI;
			
			$result = $amember::validate_receipt($_GET["receipt"]);
			
		?>
	<?php endif; ?>
    
        <div class="createYourAccount">CREATE YOUR ACCOUNT</div>
        <div class="createYourAccount2">
            <!--<img src="/unlibooks/public/images/puppet.png">-->
				<div class="userAccount">USER ACCOUNT</div>
				<div id="error"></div>
				<table class="userAccountTable">
					<tr>
						<td>ACCOUNT TYPE</td>
						<td><input type="text" name="fullname" value="Admin" class="bgInput" readonly></td>
					</tr>
					<tr>
						<td>NAME<span style="color:red">*</span></td>
						<td><input type="text" required name="name" class="bgInput" maxlength="100" value="<?php echo !empty($result) ? $result->s_name : ""; ?>"></td>
					</tr>
				</table>
				<table class="userAccountTableNEW1">
					<tr>
						<td>PASSWORD<span style="color:red">*</span></td>
						<td><input type="password" id="password" name="password" required class="bgInput" value="" maxlength="100"></td>
					</tr>
					<tr>
						<td>CONFIRM PASSWORD<span style="color:red">*</span></td>
						<td><input type="password" required name="confirmpassword" id="confirmpassword" class="bgInput" maxlength="100"></td>
					</tr>
				</table>
			<div style="clear:both;"></div>
			
            <!--<div class="keyred"><img src="/unlibooks/public/images/keyRed.png"></div>-->
			
			<div style="float:left;">
				<div class="userAccount"style="margin-left:71px;">COMPANY DETAILS</div>
				<div class="setup">THIS SETUP WILL BE DISPLAY ON REPORTS</div>
				<table class="userAccountTable">
					<tr>
						<td>COMPANY NAME:<span style="color:red">*</span></td>
						<td>
							<input type="text" required name="orgname"  maxlength="100" class="bgInput" style="margin-left:32px!important;"
							value="<?php echo (Session::getSession('companyName')!='') ? Session::getSession('companyName') : '' ?>">
						</td>
					</tr>
					<tr>
						<td style="margin-top:11px;position:absolute;">ADDRESS:</td>
						<td rowspan="1"><textarea name="address" class="bgInput2"><?php echo !empty($result) ? $result->s_address : ""; ?></textarea></td>
					</tr>
					<tr>
						<td>PHONE NUMBER:</td>
						<td><input type="text" name="phoneNum" class="bgInput" value="<?php echo !empty($result) ? $result->s_phone : ""; ?>" style="margin-left:33px!important;" maxlength="30"></td>
					</tr>
					<tr>
						<td>FAX NUMBER:</td>
						<td><input type="text" name="faxNum" class="bgInput" style="margin-left:33px!important;" maxlength="30"></td>
					</tr>
					<tr>
						<td>TIN:</td>
						<td><input type="text" name="tinNum" class="bgInput" style="margin-left:34px!important;" maxlength="100"></td>
					</tr>
					<tr>
						<td>EMAIL ADDRESS:</td>
						<td>
							<input type="email" name="email" required  class="bgInput" style="margin-left:34px!important;" maxlength="100"
							value="<?php echo !empty($result) ? $result->s_email : ((Session::getSession('email')!='') ? Session::getSession('email') : '') ?>">
						</td>
					</tr>
					<tr>
						<td>BUSINESS TYPE:</td>
						<td>
							<select class="phoneNo2" name="businessCode"  class="bgInput">
								<option value="Retail">Merchandising</option>
								<option value="Manufacturing">Manufacturing</option>
								<option value="Service">Service</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>CURRENCY:</td>
						<td>
							<select name="currencyCode" class="bgInput" required>
								<option></option>
									<?php
									$currency = DAOFactory::getTblCurrencyDAO()->queryAll();
									foreach ($currency as $item) {
										?>
										<option value="<?php echo $item->id ?>" <?php echo($item->id==33)?'selected':'' ?>><?php echo $item->code ?></option>
									<?php } ?>
							</select>
						</td>
					</tr>
				</table>
			</div>
			<div style="float:right;margin-right:20px;margin-top:107px;">
				<table class="userAccountTable2">
					<tr>
						<td>CITY:</td>
						<td><input type="text" name="city" class="bgInput" maxlength="100"><td>
					</tr>
					<tr>
						<td>PROVINCE:</td>
						<td><input type="text" name="province" class="bgInput" maxlength="100"><td>
					</tr>
					<tr>
						<td>POSTAL CODE:</td>
						<td><input type="text" name="postalcode" class="bgInput" maxlength="20"><td>
					</tr>
					<tr>
						<td>COUNTRY:</td>
						<td><input type="text" name="country" class="bgInput" maxlength="100"><td>
					</tr>
					<tr>
						<td>UPLOAD YOUR LOGO HEAR:</td>
						<td>
							<label class="browseUser"  id="uplogo1">BROWSE</label>
							
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
							<div style="margin-left:16px;">	
								<input type="file" class="hidden" name="file" id="imgInp">
								<img id="imgprev" src="#" alt="your image" width="90" height="70"/>
							</div>
						</td>
					</tr>
				</table>
            </div>
			<input type="submit" name="submit" value="PROCEED"  class="proceedUser">
			 <div style="clear:both;"></div>
        </div>
    </form>
	</div>
</div>
</body>