<style>
    .accountContainer{
        width:100%;
        margin-top:40px;
		margin-b
    }
    .accountForm{
        width:630px;
        background-color:rgb(250, 250, 250);
		background-image: url('<?= URL ?>public/images/createaccountback.png');
		background-size:100% 100%;
        margin:auto;
        border-radius: 35px;
        padding-bottom:30px;
		margin-bottom:50px;
		padding:10px 50px;
		color:gray;
    }
    .createYourAccount{
        font-family:Comic Sans MS;
        font-size:20px;
        font-weight:bold;
        color:rgb(0,0,0);
        width: 800px;
        text-align:center;
    }
	.getstartedbodyLog{
		background-image: url('<?= URL ?>public/images/loginback.png');
		background-size: 100%;
		background-repeat: no-repeat;
		margin:0;
	}
	.spanblue{
		color:rgb(2, 3, 255);
	}
    .createYourAccount2{
		width: 700px;
		margin: auto;
		font-family: Verdana;
		font-size: 12px;
		margin-top: 50px;
		height: auto!important;
		padding-bottom:50px;
    }
   
	 .userAccount{
        font-family:Verdana;
		font-size: 18px;
		color: #8391a7;
		font-weight: bold;
    }
	.setup{
		/* font-weight:bold; */
		font-size: 13px;
		color:gray;
		margin-left:3px;
	}
	table{
		font-family: tahoma;
        font-size: 13px;
		color:#797676;
		font-weight:bold;
		letter-spacing: 1px;
	}
	.maincontact{
		/* margin-top:55px; */
	}
	table input[type="text"],input[type="password"],input[type="email"]{
       /*  margin-right: 20px; */
        width:185px;
        margin-left:5px;
        height:23px;
       /*  margin-top: 3px; */
        padding:5px;
        font-family:tahoma;
        font-size:12px;
		background-image:url('public/images/inputcontainer.png');
		background-size: 100% 100%;	
		border:none;
		color:gray;
		border-radius:5px;
    }
	.rightform{
		float: left;
		margin-left: 454px;
		margin-top: -46px;
	}
	.address{
		margin-top: 40px;
	}
	.div1{
		margin-top:20px;
	}
	.div2{
		margin-top: 15px;
		padding-left: 72px;
	}
	.div3{
		margin-top: 15px;
	}
	.div4{
		float: left;
		margin-top:30px;
	}
	.div5{
		float: left;
		margin-left: 50px;
		margin-top:30px;
	}
	.proceedUser{
		width: 103px;
		height:31px;
		border: none;
		background-image:url('<?=URL?>public/images/proceed.png');
		background-repeat:no-repeat;
		background-size:100% 100%;
		border-radius: 10px;
		cursor: pointer;
		float: right;
		margin-right: 78px;
	}
	td{
		width:195px;
	}
	.tblCreateAcct{
		font-family:Verdana;
		font-size:12px;
	}
	.setup2{
		margin-top:30px;
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
            var fsize;
            $('#imgInp').bind('change', function() {
//                alert(this.files[0].size);
                fsize = this.files[0].size;
            });
            
            $('.accountForm').submit(function() {
                /* var ext = $('#imgInp').val().split('.').pop().toLowerCase(); */
//                alert(fsize);
//                return false;
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

                /* if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1 && ext!='') {
                    alert('invalid file!');
                    return false;
                }
                if(fsize >= 20000){
                    alert('invalid file!');
                    return false;
                } */
                //alert(checkOrganization($('input[name="orgname"]').val())); 
                //return false;

            });

//            $('#imgInp').fileupload({
//                add: function(e, data) {
//                    var fileType = data.files[0].name.split('.').pop(), allowdtypes = 'jpeg,jpg,png,gif';
//                    if (allowdtypes.indexOf(fileType) < 0) {
//                        alert('Invalid file type, aborted');
//                        return false;
//                    }
//                }
//            });
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
//                   alert('test');
            $('input[type="file"]').click();
        });
        $("#imgInp").change(function() {
            readURL(this);
        });
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
<body class="getstartedbodyLog">
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
		
		<div class="createYourAccount2">
			<div class="atherform">
					<div class="setup">THIS SETUP WILL NOT TAKE YOU MORE THAN 60 SECONDS.</div>
				<div class="maincontact">
					<div class="setup setup2">USER ACCOUNT</div>
					<div class="whole ">
						<table class="tblCreateAcct">
							<tr>
								<td>EMAIL ADDRESS</td>
								<td><input type="email" name="email" required  value="<?php echo !empty($result) ? $result->s_email : ((Session::getSession('email') != '') ? Session::getSession('email') : '') ?>" style="width:259px;" maxlength="70"></td>
							</tr>
							<tr>
								<td>PASSWORD</td>
								<td><input type="password" id="password" name="password" required value="<?php echo !empty($result) ? $result->s_email : ((Session::getSession('password') != '') ? Session::getSession('password') : '') ?>" style="width: 185px;" maxlength="20"></td>
							</tr>	
							<tr>	
								<td>CONFIRM PASSWORD</td>
								<td><input type="password" required name="confirmpassword" id="confirmpassword" style="width:185px;" maxlength="20"></td>
							</tr>
						</table>
					<div class="setup setup2">THIS INFO. WILL BE DISPLAYED ON REPORTS</div>
					<div class="setup setup2">BASIC INFORMATION</div>
						<table class="tblCreateAcct">
							<tr>
								<td>REGISTERED NAME</td>
								<td><input type="text" required name="orgname" style="width:259px;" value="<?php echo !empty($result) ? $result->s_name : ((Session::getSession('companyName') != '') ? Session::getSession('companyName') : '') ?>" placeholder="Last Name, First Name, Middle Name"></td>
							</tr>
							<tr>
								<td>REGISTERED ADDRESS</td>
								<td ><input type="text" name="address" style="width:259px;" value="<?php echo !empty($result) ? $result->s_address : ""; ?>" style="width: 585px;" maxlength="100" required></td>
							</tr>
							 <tr>
								<td>PHONE NO.</td>
								<td><input type="text" name="phoneNum" class="rightInput" value="<?php echo !empty($result) ? $result->s_phone : ""; ?>" maxlength="20" required ></td>
							</tr>
							<tr>
								<td>FAX NO.</td>
								<td><input type="text" name="faxNum" class="rightInput" maxlength="20" required></td>
							</tr>
							<tr>
								<td>ZIP CODE</td>
								<td>
									<input type="text" name="zipCode" maxlength="4" required>
								</td>
							</tr>
							<tr>
								<td>RDO CODE</td>
								<td>
									<input type="text" name="rdoCode" maxlength="20" required>
								</td>
							</tr>
							<tr>
								<td>TIN</td>
								<td><input type="text" name="tinNum" maxlength="20" required></td>
							</tr>
							<tr>
								<td>LINE OF BUSINESS/OCCUPATION:</td>
								<td><input type="text" name="lineOfBusiness" style="width:259px;" maxlength="100" required></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="div4">
					<table class="div4a tblCreateAcct">
						<tr>
							<td style="padding-left:47px;font-size:12px;">
								METHOD OF DEDUCTION
							</td>
						</tr>	
						<tr>	
							<td>
								<input type="radio" name="modeOfPayment" value="itemized" title="Can be used if expenses is more than 40% of income. Should provide expense receipts." required> ITEMIZED DEDUCTION<br/>
							</td>
						</tr>	
						<tr>	
							<td style="width:294px!important;">
								<input type="radio" name="modeOfPayment" value="osd"  title="Automatic maximum deduction of 40% of income even without supporting receipts." required> OPTIONAL STANDARD DEDUCTION
							</td>
						</tr>
					</table>
				</div>
				<div class="div5">
					<table>
						<tr>
							<td style="padding-left:29px;font-size:12px;">
								TYPE OF TAX
							</td>
						</tr>	
						<tr>	
							<td>
								<input type="radio" name="typeOfTax" value="vat" title="If your income is over P1,919,500.00 per year" required> VALUE-ADDED TAX
							</td>
						</tr>	
						<tr>	
							<td>
								<input type="radio" name="typeOfTax" value="percentage" title="If your income is below P1,919,500.00 per year" required> PERCENTAGE TAX
							</td>
						</tr>
					</table>
				</div> 
				<div style="clear:both;"></div>
				
				<div style="height:50px;"></div>
			</div>
			<input type="submit" name="submit" value=""  class="proceedUser">
		</div>
		<div id="error"></div>
    </form>
</div>