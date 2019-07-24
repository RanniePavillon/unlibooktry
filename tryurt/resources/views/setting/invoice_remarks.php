<style>
    .companyHolderNew{
        width: 1000px;
        margin:auto;
        background-color: white;
        padding-bottom:70px;
        box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
        margin-bottom:35px;
    }
    #company-newcompany2{
        margin-left:10px;
        padding-top: 30px;
    }	
    .headTextcompany2{
        font-size: 26px;
        font-family:agency fb2;
        color: #183867;
        font-weight: bold;
    }
    .hrClass2{
        height: 5px;
        margin-left:10px;
        width: 99%;
        background-color: rgb(43, 62, 111);
        border: none;
    }
    .company-form{
        width: 98%;
        margin-left: 0px;
        padding-left:5px;

    }
    .ciText{
        font-family:Verdana;
        font-size: 12px;
        font-weight: normal;
        padding-left: 20px;
    }
    .companyText{
        font-family:Verdana;
        font-size:12px;
        font-weight: normal;
        padding-top:10px;
        padding-left: 20px;
    }
    .companyText2{
        font-family: verdana;
        font-size: 12px;
        padding-top:-50px;
        padding-left: 20px;
    }
    .companyId2{
        font-family:Verdana;
        font-style: normal;
        font-size: 11px;
        border: 1px solid #C8C8C8;
        background-color: white;
        margin-top:5px;
    }
    .cnText{
        font-family: verdana;
        font-size: 12px;
        position: absolute;
        margin-top: 54px;
        margin-left: 35px;
    }
    .companyName{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        width: 3321px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
        margin-top: -0px;
    }
    .caText{
        font-family: verdana;
        font-size: 12px;
        position: absolute;
        margin-top: 86px;
        margin-left: 35px;
    }
    .companyAdd{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        width: 350px;
        height: 87px;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .tinText{
        font-family: verdana;
        font-size: 12px;
    }
    .tinNo{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        width: 350px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .upload1{
        font-family: verdana;
        font-size: 12px;
        position: absolute;
        margin-top: 310px;
        margin-left: 35px;
    }
    .uplogo1{
        font-family: verdana;
        font-size: 12px;
        margin-top: -22px;
        margin-left: 150px;
        cursor: pointer;
    }

    .url-account{
        margin-top: 153px;
        margin-left:504px;
        font-family: verdana;
        font-size: 14px;
        padding: 10px;
        width: 374px;
        text-spacing: 5px;
    }
    .url-link{
        color: blue;
        cursor: pointer;
    }
    .pnText{
        font-family: verdana;
        font-size: 12px;
        float: right;
        padding-right: 40px;
        margin-top: -500px;
    }
    .phoneNo{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        margin-top: 5px;
        margin-right: 40px;
        width: 200px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .phoneNo2{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        margin-top: 5px;
        margin-right: 40px;
        width: 321px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .phoneNo2two{
        font-family:Verdana;
        font-style: normal;
        font-size: 11px;
        margin-top: 5px;
        /*  margin-right: 40px; */
        width: 230px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .fnText{
        font-family: verdana;
        font-size: 12px;
        position: absolute;
        margin-top: 54px;
        margin-left: 575px;
    }
    .faxNo{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        margin-left: 665px;
        margin-top:48px;
        width: 200px;
        height: 27px;
        position: absolute;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .btText{
        font-family: verdana;
        font-size: 12px;
        position: absolute;
        margin-top: 86px;
        margin-left: 575px;
    }
    .bType{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        margin-left: 665px;
        margin-top:79px;
        width: 200px;
        height: 27px;
        position: absolute;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .cText{
        font-family: verdana;
        font-size: 12px;
        position: absolute;
        margin-top: 150px;
        margin-left: 575px;
    }
    .currency{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        margin-left: 665px;
        margin-top:145px;
        width: 200px;
        height: 27px;
        position: absolute;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .divSave{
        width: 100%;
        border: none;
        margin-top: 18px;
        padding-left:21px;
    }
    .companySave{
        margin-left: 12px;
        background-image:url('<?= URL ?>public/images/s.png');
        background-size:100% 100%;
        border:none;
        background-repeat:no-repeat;
        border-radius:2px;
        background-size:100% 100%;
        width:87px;
        height:28px;
        cursor:pointer;
    }
    .EmailText{
        font-family: verdana;
        font-size: 12px;
        position: absolute;
        margin-top: 120px;
        margin-left: 575px;
    }
    .EmailType{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        margin-left: 665px;
        margin-top:112px;
        width: 200px;
        height: 27px;
        position: absolute;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .businessType{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        margin-left: 89px;
        margin-top:-21px;
        width: 200px;
        height: 27px;
        position: absolute;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .cityText{
        font-family: verdana;
        font-size: 12px;
    }
    .cityInput{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        width: 350px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .provinceText{
        font-family: verdana;
        font-size: 12px;
    }
    .provinceInput{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        width: 350px;
        height: 27px;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .countryText{
        font-family: verdana;
        font-size: 12px;
        position: absolute;
        margin-top: 270px;
        margin-left: 35px;
    }
    .countryType{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        margin-left: 109px;
        margin-top:-18px;
        width: 350px;
        height: 27px;
        position: absolute;
        border: 1px solid #C8C8C8;
        background-color: white;
    }
    .tableCompany{
        margin-top:40px;
        margin-left:25px;
    }
    .tableCompany22{
        margin-top: 40px;
        margin-left: 64px;
        float: left;
    }
    .tableCompany222{
        margin-top: 40px;
        margin-left:90px;
        float: left;
    }
    .tablecompany2{
        background-color: #E5F1CE;
        float: right;
        margin-right: 62px;
        margin-top: -330px;
    }
    .url-account a:hover{
        font-weight: normal;
    }
    input[type="text"] {
        padding-left: 5px;
    }
    .tableBrowse{
        margin-left: 515px;
        margin-top: -335px;
    }
    .browseUser{
		width: 68px;
		height: 25px;
		background-color: #183867;
		color: white;
		font-weight: bold;
		border: none;
		padding: 5px 10px;
		border-radius: 5px;
		cursor: pointer;
		font-family: Verdana;
		font-size: 12px;
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
        width: 161px;
        height: 130px;
        border: solid 1px rgb(215, 212, 212);
    }
    .upLogoDiv{
        margin-top: 108px;
        margin-left: -14px;
        font-family: Arial;
        font-size: 12px;
    }	
    .hrClass2bottom{
        height: 5px;
        margin-left: 10px;
        width: 99%;
        background-color: rgb(43, 62, 111);
        border: none;
        margin-top: 25px;
    }
    .inpLong{
        width:259px;
        height:27px;
    }
    .inpShort{
        width:185px!important;
        height:27px;
    }
    .textTd{
        width:223px;
    }
	#addressClass{
		height: 100px;
	}
</style>
<!--<script src="<?php echo URL; ?>public/js/jquery.js"></script>-->
<!--<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>-->
<script type="text/javascript">
    $(function() {
        var fsize;
        $('#uplogo1').click(function() {
            $('input[type="file"]').click();
        });
        $("#imgInp").change(function() {
            fsize = this.files[0].size;
			$('input[name="hasFile"]').val('true');
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

    });
</script>
<?php
$info = $this->orgInfo; //new TblOrganizationInfo();
$org = $this->org; //new TblOrganization();
// if (Session::getSession('meduser')) {
// $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('meduser'))->orgInfoId);
// $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
// Session::setSession('medinfoid', $info->id);
// }
?>
<title>
	Invoice Remarks
</title>
<div class="bodysize">
    <div class="companyHolderNew">
        <form method="post" action="<?= URL ?>setting/updateCompany" class="company-form" enctype="multipart/form-data" >
            <div>
                <div id="company-newcompany2">
                    <label class="headTextcompany2">INVOICE REMARKS</label>
                </div>	
                <div class="hrClass2 linesettings linesettingsstart"></div>
				<div style="float:left;">
					
					<div class="companyText textTd">Remarks:</div>
				   <table class="tableCompany">
						<tr class="tableCompany">
							<td><textarea type="text" class="phoneNo2two inpLong" id="addressClass"  name="remarks" value="" maxlength="1000"></textarea></td>
						</tr>
					</table>
				</div>	
				
                <div style="clear:both;"></div>

                <div class="hrClass2bottom linesettings"></div>
                <div class="divSave"><input type="submit" class="companySave" value=" "></div>
				
            </div>
        </form>
    </div>

</div>
<!--<div class="popBack hidden">
</div>-->



<script>
    $(function() {
		$('form').submit(function(){
			if(valid == 0){
				$.post(URL + 'setting/setRemarks', $('form').serialize())
					
						.done(function(returnData) { 
							result = returnData;
							
							if (result == 1) {
									alert('Old password did not match from the database');
									return false;
							}
							if ($('input[name="newpassword"]').val() !== $('input[name="nconfirmpassword"]').val()) {
								alert('Password and confirm password do not match');
								return false;
							}
							
							alert('Password succesfully changed');
							
							valid = 1;
							$('.changeMainForm').submit();
						})
						.fail(function() {
							alert('Connection Error!');
						});
	//                    alert(result);
			  
			   return false;
		   }
		});
    });
</script>