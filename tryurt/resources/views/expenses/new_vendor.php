<style>
    @font-face {
        font-family: 'agency fb'; /*a name to be used later*/
        src: url('<?= URL ?>public/fonts/AGENCYR.ttf'); /*URL to font*/
    }

    @font-face {
        font-family: 'agency fb2'; /*a name to be used later*/
        src: url('<?= URL ?>public/fonts/AGENCYB.ttf'); /*URL to font*/
    }
    .popBack, .popup{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
    .popback:parent{
        overflow:hidden;
    }
    .newVendorNameInput{
        font-family:Verdana;
        font-size: 12px!important;
        margin-top: 5px;
        height: 27px;
        width: 248px !important;
        margin-left: 24px;
        padding:5px;
    }
    .NewInputVendor{
        font-family:Verdana;
        font-size:12px!important;
        height: 27px;
        width:248px!important;
        margin-left:10px;
        padding:5px;
        margin-left:24px;
    }
    .hrclasssuppliers{
        width: 99%;
        margin: auto;
        margin-top: 15px;
        border-top: none;
        /* border-bottom: 1px solid c8c8c8; */
        border-left:none;
        border:right:none;
        margin-top:272px;
    }
    .vendorPop{
        font-family: Agency FB;
        /*  font-weight: bold; */
        /* margin-top: 10px; */
    }
    }	
    .newVendorNameTextA{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        width: 282px;
        background-color: white;
        margin-top: 8px;
        margin-left: 30px;
        height: 90px;
        /* position: absolute; */
        border: 1px solid #C8C8C8;
        max-width: 248px;
        max-height: 70px;
        padding: 5px;
    }
    .newVendorPhoneInput2{
        font-family:Verdana;
        font-size: 12px;
        margin-top: 3px;
        height: 27px;
        width: 248px;
        padding:5px;
        margin-left:23px;
    }
    .actib{
        margin-left: 2px;
        -webkit-transform: scale(0.7);
        width: 25px;
        height: 20px;
        position: absolute;
        margin-top: -3px;
    }
    textarea.newVendorNameTextA {
        margin-left: 24px;
        width: 248px;
        height: 90px;
        max-width: 248px;
        max-height: 90px;
        font-size: 12px;
        font-family: Verdana;
        margin-top:3px;
    }
    .vendorPop, td{
        font-family:Verdana!important;
        font-size:12px!important;
    }
    .saveBNewVendor2{
        margin-right:10px!important;
        width: 100px!important;
        height: 28px!important;
        border-radius: 4px!important;
        border: none!important;
        cursor: pointer!important;
        /*  background: url('<?= URL ?>public/images/s.png') no-repeat!important;
         background-size:100% 100%!important; */
    }
    .saanBNewVendor2{
        width: 123px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        background: url('<?= URL ?>public/images/saan.png') no-repeat;
        background-size:100% 100%;
    }

    .tblNewVendor2 td{
        padding:1px;
        font-size: 17px;
    }
    .tblNewVendor2{
        text-align: left;
        padding: 5px;
        font-size: 17px !important;
        font-family: Agency FB;
        font-weight: bold;
        padding: 0px 2px 0px 2px;
        color: black;
    }
    table td{
        border: none;
    }
    .labelPSC{
        font-family:Verdana;
        font-size:12px;
        margin-left: 104px;
    }
    .closeNewVendor1{
        background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 24px;
        outline-style: none;
        cursor: pointer;
        margin-right:5px;
    }
    .divSaveBBelowNewVendor1{
        margin-bottom: 65px;
        margin-right: 22px;
    }
</style>
<link href="<?= URL ?>views/expenses/css/ajax.css" rel="stylesheet" type="text/css">
<script src="<?php echo URL; ?>public/js/jquery.maskedinput.js"></script>
<script src="<?php echo URL; ?>public/js/mask.js"></script>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<?php
$returnurl = '';
if (isset($_POST['returnurl'])) {
    $returnurl = $_POST['returnurl'];
}
?>

<?php
$supplier = $this->supplier;
$type = '';
if ($supplier->id != '') {
    $status = DAOFactory::getTblNewExpenseDAO()->queryBySupplierId($supplier->id);
    if (isset($status) && !empty($status)) {
        $type = 'readonly';
    }
}
$task = 'addsupplier';
?>

<script>
    supplierid = "<?= $supplier->id ?>";
</script>

<div class="invoiceHolderNewVendor" style="margin-top:20px!important;">
    <form method="post" class="nifNewVendor boxshadow" id="vendorfrm" style="padding:0px !important;width:471px!important;">
        <div style="float:right;">
            <input type="button" class="closeNewVendor1" value="x">
        </div>
        <div style="clear:both;"></div>
        <div id="newNewVendor" style="font-family:agency fb2!important;margin-left:20px!important;">
            <p class="niNewVendor"><?= $supplier->id == '' ? 'NEW' : 'UPDATE' ?> VENDOR</p><p class="venDetails hidden">Vendor Details</p>
        </div>
        <div style="margin: 0 auto; width: 735px;">
            <div style="float: left;margin-left: 50px;">
                <table class="vendorPop">
                    <tr>
                        <td class="">Vendor No.:</td>
                        <td class="">
                            <input type="hidden" name="token" value="<?=$this->token;?>">
                            <input type="text" name="supplierAccount" class="NewInputVendor"
                                   value="<?php echo $supplier->supplierAccount ?>" required maxlength="11" <?= $type ?>>
                            <span style="color:red;">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="">Vendor Name:</td><!--value="<--?php echo (Session::getSession('companyName')!='') ? Session::getSession('companyName') : '' ?>"-->
                        <td>
                            <input type="text" name="name" class="newVendorNameInput " 
                                   value="<?php echo $supplier->name ?>" required maxlength="100" <?= $type ?>/> 
                            <span style="color:red;">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 0px;">Vendor Type:</td>
                        <td style="padding-top: 0px;">
                            <select class="newVendorNameInput vendorType" name="type" required>
                                <option value="">--Select--</option>
                                <option value="General Vendor" <?= $supplier->type == 'General Vendor' ? ' selected ' : '' ?>>General Vendor</option>
                                <option value="Professional" <?= $supplier->type == 'Professional' ? ' selected ' : '' ?>>Professional</option>
                                <option value="General Professional Partnership" <?= $supplier->type == 'General Professional Partnership' ? ' selected ' : '' ?>>General Professional Partnership(GPP)</option>
                            </select>
                            <span style="color:red">*</span>
                        </td>
                    </tr>
                    <tr class="grossIncomeHolder">
                        <td style="padding-top: 10px;" colspan="2">
                            <label class="labelPSC">
                                How much is the annual gross income?
                            </label>
                            <div style="margin-left:118px;">
                                <input type="radio" id="cygi1" name="grossIncome" class="grossIncome" value="<720,00"
                                       <?= $supplier->grossIncome == '<720,00' ? 'checked' : '' ?>/>
                                <label for="cygi1" style="font-weight:normal">< 720,000</label>
                                <input type="radio" id="cygi2" name="grossIncome" class="grossIncome" value=">720,00"
                                       <?= $supplier->grossIncome == '>720,00' ? 'checked' : '' ?>/>
                                <label for="cygi2" style="font-weight:normal">> 720,000</label>
                            </div>
                        </td>
                    </tr>
                    <tr class="hidden">
                        <td style="padding-top: 0px;">Category:</td>
                        <td style="padding-top: 0px;">
                            <select class="newVendorNameInput" name="category" >
                                <option value="">--Select--</option>
                                <option value="supplier" <?= $supplier->category == 'supplier' ? ' selected ' : '' ?> >Supplier</option>
                                <option value="employee" <?= $supplier->category == 'employee' ? ' selected ' : '' ?> >Employee</option>
                            </select>
                            <span style="color:red">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="">TIN:</td><!--value="<--?php echo (Session::getSession('companyName')!='') ? Session::getSession('companyName') : '' ?>"-->
                        <td>
                            <input type="text" name="tin" class="newVendorNameInput tinmask" 
                                   value="<?php echo $supplier->tin ?>" required maxlength="100"/> 
                            <span style="color:red">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="">Address:</td>
                        <td><textarea class="newVendorNameTextA" name="address"><?php echo $supplier->address ?></textarea></td>
                    </tr>
                    <tr>
                        <td class="">E-Mail Address:</td>
                        <td>
                            <input type="text" class="newVendorNameInput" name="emailAddress"
                                   value="<?php echo $supplier->emailAddress ?>" maxlength="100">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Phone No:</td>
                        <td class="">
                            <input type="text" class="newVendorPhoneInput2 phonemask" name="phoneNum" 
                                   value="<?php echo $supplier->phoneNum ?>" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td class="">Fax No:</td>
                        <td class="">
                            <input type="text" class="newVendorPhoneInput2 phonemask" name="faxNum" 
                                   value="<?php echo $supplier->faxNum ?>" maxlength="20">
                        </td>
                    </tr>
                    <tr class="hidden">
                        <td style="padding-top: 0px;">GL Posting:</td>
                        <td style="padding-top: 0px;">
                            <select class="newVendorNameInput" name="glPosting"  >
                                <option value="">--Select--</option>
                                <?php foreach ($this->coa as $each){ ?>
                                <option value="<?php  echo $each->id ?>" <?php echo $each->id == $supplier->glPosting ? 'selected' :'' ?>><?php echo $each->accontName ?></option>
                                <?php } ?>    
                            </select>
                            <span style="color:red">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-top: 8px;">Active Account: <input class="actib" name="isactive" type="checkbox" 
                                                                                         <?= $supplier->activeAccount == 'no' ? '' : 'checked' ?>>
                        </td>

                    </tr>
                </table>
            </div>
            <div style="float:right;">
                <table class="tblNewVendor2">
                    <tr class="hidden">
                        <td class="">Phone No:</td>
                        <td class="">
                            <input type="text" class="newVendorPhoneInput2 phonemask" name="phoneNum" 
                                   value="<?php echo $supplier->phoneNum ?>" maxlength="20">
                        </td>
                    </tr>
                    <tr class="hidden">
                        <td class="">Fax No:</td>
                        <td class="">
                            <input type="text" class="newVendorPhoneInput2 phonemask" name="faxNum" 
                                   value="<?php echo $supplier->faxNum ?>" maxlength="20">
                        </td>
                    </tr>
                    <tr class="hidden">
                        <td class="">Currency:</td>
                        <td class="txttbl2Input"><select class="newVendorPhoneInput" name="currencyId" required>
                                <option></option>
                                <?php
                                $currency = DAOFactory::getTblCurrencyDAO()->queryAll();
                                foreach ($currency as $item) {
                                    ?>
                                    <option value="<?php echo $item->id ?>" <?php
                                    echo ($item->id == $supplier->currencyId) ? 'selected' :
                                            ($supplier->id == '' && $item->code == 'PHP' ? 'selected' : '' )
                                    ?>>
                                        <?php echo $item->code ?></option>
                                <?php } ?>
                            </select></td>
                    </tr>
                    <!--<tr>
                        <td style="padding-top: 8px;" colspan="2">
                            Are you Professional or Sub-Contractor?
                            <div>
                                <input type="radio" id="pos1" name="profSub" value="yes"
                    <? //= $supplier->profSub == 'yes' ? 'checked' : '' ?> />
                                <label for="pos1">Yes</label>
                                <input type="radio" id="pos2" name="profSub" value="no"
                    <? //= $supplier->profSub == 'no' ? 'checked' : '' ?> />
                                <label for="pos2">No</label>
                            </div>
                        </td>
                    </tr>
                                        
                    <tr class="grossIncomeHolder ">
                        <td style="padding-top: 8px;" colspan="2">
                            How much is your current year's gross income?
                            <div>
                                <input type="radio" id="cygi1" name="grossIncome" value="<720,00"
                    <? //= $supplier->grossIncome == '<720,00' ? 'checked' : '' ?> />
                                <label for="cygi1"><720,000</label>
                                <input type="radio" id="cygi2" name="grossIncome" value=">720,00"
                    <? //= $supplier->grossIncome == '>720,00' ? 'checked' : '' ?> />
                                <label for="cygi2">>720,000</label>
                            </div>
                        </td>
                    </tr>-->
                </table>
            </div>	
            <div style="clear:both;"></div>	
        </div>
        <div class="divSaveBBelowNewVendor1">
            <div style="float:right;margin-top:20px;">
                <input type="submit" value="Save" class="saveBNewVendor2 addsavebuttonpop saveButtonsPop">
                <?php
                if ($returnurl != 'expense') {
                    echo $returnurl
                    ?>
                    <input type="submit" value="Save And Add New" class="saanBNewVendor2 addsavebuttonpop saveAddButtonsPop" id="saanBNewVendor">
                <?php } ?>

            </div>
            <input type="hidden" name="task" value="<?php echo $task ?>"/>
        </div>
        <input type="hidden" value="notpopOut" class="trig" name="trig"/>
    </form>
</div><div class="clear"></div>
<div class="hidden popup"></div>
<script>
    $(function () {
        $('#saanBNewVendor').click(function(){
            $('.trig').val('add new');
        });
        
        $('#vendorfrm').submit(function () {
            email = $('input[name="emailAddress"]').val();
			if(email != ''){
				isValidEmail = validateEmail(email);
				
				if(!isValidEmail){
					alert('Please enter a valid email address.');
					return false;
				}
			}
			
            trig = $('.trig').val();
			
            vendorType = $('.vendorType').val();
			
			if(vendorType == 'Professional'){				
				if (typeof $('input[name="grossIncome"]:checked').val() == 'undefined') {
					alert('Annual gross income is required');
					return false;
				}	
			}
            
            validate = '';
            $.ajaxSetup({async: false});
            $.post(URL + 'expenses/validateSupplier?id=' + supplierid, $(this).serialize())
                    .done(function (returnData) {
                        validate = returnData.trim();
                    });

            if (validate != "no data" ){
                alert(validate);
                $('.popup').addClass('hidden');
                return false;
            }

            confirmSave = confirm('Do you want to save this Vendor?');
            if (confirmSave) {
				if (trig == 'notpopOut') {
					$.post('<?= URL ?>expenses/setSupplier?id=<?= $supplier->id ?>', $(this).serialize())
						.done(function (returnData) {
							if (returnData == 0) {
								location.reload();
							} else {
								alert(returnData);
							}
						});
				} else if (trig == 'add new') {
					$.post('<?= URL ?>expenses/setSupplier?id=<?= $supplier->id ?>', $(this).serialize())
						.done(function (returnData) {
							$('.popBack').addClass('hidden');
							$('.popBack').html('');
							$('body').css('overflow', 'auto');
							$('.createNSupplier').click();
						});
				} else {
					$.post('<?= URL ?>expenses/setSupplier?id=<?= $supplier->id ?>', $(this).serialize())
							.done(function (returnData) {
								// alert(returnData);
								$('.scriptHolder').html(returnData);
							});
				}
			} else {
				$('.trig').val(lastTrig);
			}
			return false;
        });
                                                            });
</script>
<script>
    $('.vendorType').change(function () {
        checkType();
    });

    function checkType() {
        vendorType = $('.vendorType').val();
        if (vendorType == 'Professional') {
            $('.grossIncomeHolder').removeClass('hidden');
        } else {
            $('.grossIncomeHolder').addClass('hidden');
            $('input[name="grossIncome"]:checked').prop('checked', false);
        }
    }
    checkType();

    /*  $(function () {
     checkProfSub();
     function checkProfSub() {
     if ($('input[name="profSub"]:checked').val() == 'yes') {
     $('.grossIncomeHolder').removeClass('hidden');
     } else {
     $('.grossIncomeHolder').addClass('hidden');
     $('input[name="grossIncome"]:checked').prop('checked', false);
     }
     }
     $('input[name="profSub"]').change(function () {
     checkProfSub();
     });
     }) */
</script>

<script>
    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
    }
</script>
