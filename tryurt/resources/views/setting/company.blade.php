@include('layouts.header')
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
    }	
    .headTextcompany2{
        font-size: 28.4px;
        font-family:agency fb2;
        color: #c51400;
        font-weight: bold;
    }
    .hrClass2{
        height: 5px;
        margin-left:10px;
        width: 99%;
        background-color: rgb(197, 20, 0);
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
        font-size: 12px;
        border: 1px solid #C8C8C8;
        background-color: white;
        margin-top:3px;
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
        font-size: 12px;
        margin-top: 3px;
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
        border:none;
        background-repeat:no-repeat;
        border-radius:2px;
        width:87px;
        height:28px;
        cursor:pointer;
        font-family: agency fb2;
        font-size: 15.5px;
        font-weight: bold;
        border-radius: 5px;
        color: rgb(230, 230, 230);
        -moz-border-radius: 30px;
        background: rgb(28, 181, 239);
        background: -moz-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        background: -webkit-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        background: -o-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        background: -ms-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        background: linear-gradient(0deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        -moz-box-shadow: 0px 2px 1px rgba(50, 50, 50, 0.75);
        border:none;
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
        background-color: #C51400;
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
        height:100px;
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
        background-color: #C51400;
        border: none;
        margin-top: 25px;
    }
    .inpLong{
        width:217px;
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
        max-width:217px;
        max-height:100px;
    }
    .loadingHolder{
        margin-top:15%;
        margin-left:45%;
    }
    .loadingimg{
        width:140px;
        height:140px;
    }
    .promo {
        margin-left: 406px;
        font-weight: bold !important;
        text-decoration: underline;
        cursor: pointer;
    }


</style>
<script src="{{asset('js/mask.js')}}"></script>
 <script type="text/javascript">
    $(function () {
        var fsize;
        $('#uplogo1').click(function () {
            $('input[type="file"]').click();
        });
        $("#imgInp").change(function () {
            fsize = this.files[0].size;
            $('input[name="hasFile"]').val('true');
            readURL(this);
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgprev').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $('.company-form').submit(function () {

            email = $('input[name="accountantEmail"]').val();
            email_customer = $('input[name="secretaryEmail"]').val();

            isValidEmail = validateEmail(email);
            isValidEmailCustomer = validateEmail(email_customer);

            if (email != '' && !isValidEmail)
            {
                alert('Please enter a valid accountant`s email address.')
                $('input[name="accountantEmail"]').focus();
                return false;
            }
            if (email_customer != '' && !isValidEmailCustomer)
            {
                alert('Please enter a valid secretary`s email address.')
                $('input[name="secretaryEmail"]').focus();
                return false;
            }

            inputRdo = $('input[name="rdoCode"]').val();

            if ($.inArray(inputRdo, code) === -1)
            {
                alert('Invalid RDO Code');
                return false;
            }

            $('body').css('overflow', 'hidden');
            $('.popup').html('<div class="loadingHolder"><img src="' + URL + '{{asset('images/processing2.gif')}}" class="loadingimg" /></div>');
            $('.popup').removeClass('hidden');
            if ($('input[name="hasFile"]').val() == 'true') {
                var ext = $('#imgInp').val().split('.').pop().toLowerCase();
                if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1 && ext != '') {
                    alert('invalid file!');
                    return false;
                }
                if (fsize >= 1000000) {
                    alert('invalid file!');
                    return false;
                }
            }

            return true;
            $.post(URL + "setting/updateCompany", $('.company-form').serialize())
                    .done(function (result) {
                        if (typeof (newrecord) == "undefined") {
                            newrecord = '';
                        }

                        if (newrecord == "new" && result == '') {
                            $('.popBackNew').addClass("hidden");
                            $('.popBackNew').html('');

                            if (document.getElementById("formNewInvoice") !== null)
                            {
                                $('#formNewInvoice').submit();
                            } else if (document.getElementById("form-new") !== null) {
                                $('#form-new').submit();
                            } else if (document.getElementById("form") !== null) {
                                $('#form').submit();
                            }

                            return false;
                        } else if (result == '') {
                            window.location.reload();
                            return false;
                        } else {
                            alert(result);
                            return false;
                        }
                        return false;
                    });
            return false;
        });

    });
</script> -->
<!-- </?php
$info = $this->orgInfo;
$org = $this->org;
$rdo = DAOFactory::getTblRdoDAO()->queryAll();
$code = array();
?>
<script>
    code = new Array();
<!-- </?php
foreach ($rdo as $each) {
    ?>
        code.push('</?= $each->code ?>');
    </?php
}
?> -->
<!-- </script>  -->

<title>
    Company
</title>
<link rel="stylesheet" href="{{asset('css/loading.css')}}"/>
<div class="bodysize">
    <div class="companyHolderNew">
        <form method="post" action="{{('setting/updateCompany')}}" class="company-form" enctype="multipart/form-data" >
            <div>

                <div id="company-newcompany2">
                    <label class="headTextcompany2">PROFILE</label>
                </div>	
                <div class="hrClass2 linesettings linesettingsstart"></div>
                <div class="cas tobehidden" style="margin-top:17px!important;margin-left:45px!important;">
                    <a href="" class="casa" style="font-size:12px;margin-right: 45px;">Do you want to register this software to BIR?</a>
                    <a class="promo tobehidden" style="color:#FFAF02 !important;font-weight:bold !important;text-decoration: underline;">Avail Promo</a>
                </div>
                <div style="float:left;">	
                    <table class="tableCompany">
                        <tr class="tableCompany">
                            <td class="textTd"><div class="companyText" style="font-weight:normal;font-size:13.5px;padding-bottom:15px;"><b>USER ACCOUNT</b></div></td>
                            <td></td>
                        </tr>
                        <tr class="tableCompany">
                            <td class="companyText textTd">E-Mail Address:</td>
                            <td>
                                <input type="hidden" name="token" value="{{('token')}}">
                                <input type="text" class="phoneNo2two inpLong" value="" maxlength="50" readonly />
                            </td>
                        </tr>
                        <tr class="tableCompany">
                            <td class="textTd"><div class="companyText" style="font-weight:normal;font-size:13px;padding-top:25px;"><b>BASIC INFORMATION</b></div></td>
                            <td></td>
                        </tr>
                        <tr class="tableCompany">
                            <td class="ciText textTd">Registered Name:</td>
                            <td><input type="text" class="companyId2 inpLong" value="" name="orgName" maxlength="50" required><span style="color:red">*</span></td>
                        </tr>

                        <tr class="tableCompany">
                            <td class="companyText textTd">Registered Address:</td>
                            <td><textarea type="text" class="phoneNo2two inpLong" id="addressClass"  name="address" maxlength="1000" > </textarea><span style="color:red">*</span></td>
                        </tr>
                        <tr class="tableCompany">
                            <td class="companyText textTd">Phone No.:</td>
                            <td><input type="text" class="phoneNo2two inpLong phonemask" name="phoneNum" style="margin-top: 0px;" ><span style="color:red">*</span></td>
                        </tr>
                        <tr class="tableCompany">
                            <td class="companyText textTd">Fax No.:</td>
                            <td><input type="text" class="phoneNo2two inpLong phonemask" name="faxNum" value="" maxlength="20" required><span style="color:red">*</span></td>
                        </tr>
                        <tr class="tableCompany">
                            <td class="companyText textTd"><div style="">TIN:</div></td><td><input type="text" class="companyId2 inpLong tinmask" value="" name="tinNum" maxlength="50" required><span style="color:red">*</span></td>
                        </tr>
                        <tr class="tableCompany">
                            <td class="companyText textTd">
                                <div style="">RDO Code:</div>
                            </td>
                            <td>
                                <input type="text" class="companyId2 inpLong" name="rdoCode" required value="" maxlength="3"><span style="color:red">*</span>
                                <label class="rdoNotMatched hidden" style="color:red;font-size:11px;">Invalid RDO Code </label>
                            </td>
                        </tr>
                        <tr class="tableCompany">
                            <td class="companyText textTd">
                                Zip Code:
                            </td>
                            <td>
                                <input type="text" class="companyId2 inpLong" name="zipCode" value="" maxlength="4" required><span style="color:red">*</span>
                            </td>
                        </tr>
                        <tr class="tableCompany">
                            <td class="companyText textTd">Line of Business/Occupation:</td>
                            <td><input type="text" class="companyId2 inpLong" name="lineOfBusiness" value="" maxlength="50" required><span style="color:red">*</span></td>
                        </tr>
                        <tr class="tableCompany">
                            <td class="companyText textTd">Accountant's E-Mail Address:</td>
                            <td><input type="text" class="companyId2 inpLong" name="accountantEmail" value="" maxlength="100"></td>
                        </tr>
                        <tr class="tableCompany">
                            <td class="companyText textTd">Secretary's E-Mail Address:</td>
                            <td><input type="text" class="companyId2 inpLong" name="secretaryEmail" value=""></td>
                        </tr>

                    </table>
                </div>
                <div style="float:right;margin-top:49px;margin-right:30px;" class="logoUploadHolder tohide">
                    <div style="float:left;">
                        <label style="font-family:Verdana;font-size:12px;">Upload Your Logo Here:</label>
                        <br>
                        <br>
                        <label class="browseUser"  id="uplogo1">Browse..</label>
                    </div>
                    <div style="float:right;">
                        <input type="file" class="hidden" name="file" id="imgInp">
                        <input type="hidden" value="false" name="hasFile"/>
                        <img id="imgprev" src ="{{asset('companylogo')}}" alt="your logo"/>			
                    </div>
                    <div style="clear:both"></div>
                </div>
                <div style="clear:both"></div>				
                <div style="clear:both;"></div>
                <table class="tableCompany22">	
                    <tr class="tableCompany" style="margin-top:30px;">
                        <td class="companyText">
                            <b>METHOD OF DEDUCTION</b>
                        </td>
                    </tr>	
                   
					 <!-- </?php if ($info->modeOfPayment == '') { ?> -->
                        <tr>
							<td class="companyText">
								<input type="radio" name="modeOfPayment" value="itemized"
									   style="margin-left:-39px;"> Itemized Deduction<br/>
							</td>
						</tr>	
						<tr>
							<td class="companyText">
								<input type="radio" name="modeOfPayment" value="osd"
								
									   style="margin-left:-39px;"> Optional Standard Deduction
							</td>
						</tr>
                </table>	
                <table class="tableCompany222">	
                    <tr class="tableCompany">
                        <td class="companyText" style="margin-top:30px;padding-left: 10px;">
                            <b>TYPE OF TAX</b>
                        </td>
                    </tr>

                    <!-- </?php if ($info->typeOfTax == '') { ?> -->
                        <tr>
                            <td class="companyText">
                                <input type="radio" name="typeOfTax" value="vat"
                              
                                       style="margin-left:-39px;">
                                Value-Added Tax
                            </td>
                        </tr>	
                        <tr>	
                            <td class="companyText">
                                <input type="radio" name="typeOfTax" value="percentage"
                          
                                       style="margin-left:-39px;">
                                Percentage Tax
                            </td>
                        </tr>
                        </table>	
                <div style="clear:both;"></div>	
                <div style="float:right;margin-top:45px;">	
                    <table>	
                        <tr class="wala">
                            <th width="150px" style="background:none !important;"></th>
                            <th style="background:none !important;"></th>
                        </tr>



                        <tr class="tableCompany hidden">
                            <td class="companyText">Business Type:</td>
                            <td><select class="phoneNo2" name="businessCode">
                                    <option>Select</option>
                                    <option value="1" selected>Retail</option>
                                    <option value="2">Manufacturing</option>
                                    <option value="3">Service</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div style="clear:both;"></div>

                <!-- </?php
                if ($info->typeOfTax == 'percentage') {
                    ?>
                    <script>
                        $('input[name="typeOfTax"]').prop('disabled', false);
                    </script>
                    </?php
                }
                ?> -->
                <div class="hrClass2bottom linesettings"></div>
                <div class="divSave"><input type="submit" class="companySave" value="SAVE"></div>

            </div>
        </form>
    </div>

</div>
<div class="popup hidden">
</div>
<div class="supportPopBack hidden">
</div>
<div class="popBackNew hidden">
</div>


<!-- 
<script>
    $('.casa').click(function () {
        $.post(URL + 'support/cas')
                .done(function (returnData) {
                    $('.popBackNew').html(returnData);
                    $('.popBackNew').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $(".popBackNew").css('z-index', '100');

                    $('.no').click(function () {
                        if (confirm('Are you sure you want to leave this page?')) {
                            $('.popBackNew').addClass('hidden');
                            $('.popBackNew').html('');
                            $('body').css('overflow', 'auto');
                        }
                    });

                })
                .fail(function () {
                    alert('Connection Error!');
                });

        return false;

    });

    $(function () {
        $('input[name="rdoCode"]').keyup(function () {
            inputRdo = $('input[name="rdoCode"]').val();

            if ($.inArray(inputRdo, code) !== -1)
            {
                $('.rdoNotMatched').addClass('hidden');
            } else {
                $('.rdoNotMatched').removeClass('hidden');
            }
        });
    })

    $('.promo').click(function () {
        $.post(URL + 'setting/coupon')
                .done(function (returnData) {
                    $('.supportPopBack').html(returnData);
                    $('.supportPopBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $(".supportPopBack").css('z-index', '100');

                    $('.close1Clienthmo').click(function () {
                        if (confirm('Are you sure you want to leave this page?')) {
                            $('.supportPopBack').addClass('hidden');
                            $('.supportPopBack').html('');
                            $('body').css('overflow', 'auto');
                        }
                    });

                })
                .fail(function () {
                    alert('Connection Error!');
                });

        return false;

    });

    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
    }
</script> -->