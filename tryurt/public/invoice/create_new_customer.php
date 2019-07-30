<?php
$client = $this->client; //new TblClient();
$currency = $this->currency;
$paymentTerms = $this->paymentTerms;
$task = "addclient";
Session::setSession('clientid', '');
if (isset($_POST['clientid'])) {
    $clientid = $_POST['clientid'];
    Session::setSession('clientid', $clientid);
    $task = "updateclient";
}
?>
<style>
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
    .ca_tableClient22b{
        font-family:Verdana;
        font-size:12px;
    }
    .ca_tableClient22{
        padding-top:3px !important;
    }
    .invoiceHolderCNWClient{
        width: 100%;
        margin-top: 30px;
    }	
    .nif1Client{
        width: 896px;
        background-color: white;
        margin: auto !important;
        padding-bottom:15px;
    }
    .close1Client{
        background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 24px;
        right: 245px;
        top: 25px;
        outline-style: none;
        cursor: pointer;
        float: right;
        margin-right: 5px;
        margin-top: -27px;
    }
    .hrCNCClient{
        width:808px;
        border:  solid 2px gray;
        margin-left: -21px;
        margin-top: -20px;
        border-radius: 3px;
        height: 4px;
        background-color: gray;

    }
    .customerNCNCClientNew1{
        width: 248px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size:12px;
        font-family:Verdana;
        padding:5px;
    }
    .tnumberCNCClient{
        margin-top: 73px;
        margin-left: 14px;
        color:#008B8B;
        font-family: Calibri;
        font-weight: bold;
        font-size: 12px;
    }
    .tinNCNCClient{
        margin-top: 73px;
        margin-left: 154px;
        width: 248px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: calibri;
    }
    .eMailCNCClient{
        margin-top: 105px;
        margin-left: 14px;
        color:#008B8B;
        font-family: Calibri;
        font-weight: bold;
        font-size: 12px;
    }
    .mailCNCClient{
        margin-top: 106px;
        margin-left: 154px;
        width: 248px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: calibri;
    }
    .addSCNCClient{
        margin-top: 138px;
        margin-left: 14px;
        color:#008B8B;
        font-family: Calibri;
        font-weight: bold;
        font-size: 12px;
    }
    .addressCNCClientClient{
        font-family:Verdana;
        font-size: 12px;
        width:248px;
        height: 90px;
        background-color: white;
        border: solid 1px #C8C8C8;
        max-width: 248px;
        max-height: 90px;
        float: left;
        padding:5px;
    }
    .phoneNCNCClient{
        margin-top: 218px;
        margin-left: 14px;
        color:#008B8B;
        font-family: Calibri;
        font-weight: bold;
        font-size: 12px;
    }
    .pNoCNCClient{
        width: 128px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: calibri;
    }
    .faxNCNCClient{
        margin-top: 250px;
        margin-left: 14px;
        color:#008B8B;
        font-family: Calibri;
        font-weight: bold;
        font-size: 12px;
    }
    .fNoCNCClient{
        margin-top: 251px;
        margin-left: 154px;
        width: 100px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: calibri;
    }
    .cAccountCNCClient{
        color: #000000;
        font-size:12px;
        font-family:Verdana!important;
        font-weight:bold!important;
    }
    .customerACNCClient{
        height: 27px;
        width:248px;
        font-size:12px;
        font-family:Verdana;
        padding: 5px;
    }
    .cNameCNCClient{
        color:#000000;
        font-family:Verdana;
        font-weight: bold;
        font-size:12px;
    }
    .ccc_tableClient{
        font-family:Verdana;
        font-size:12px;
    }
    .ccpCNCClient{
        font-family:Verdana;
        font-size:12px;
        font-weight: bold;
        color: #183867;
    }
    .contactNaCNCClient{
        color:#000000;
        font-family:Verdana;
        font-weight:bold;
        font-size: 12px;
        padding-top: 22px;
    }
    .cusNameCNCClient{
        width: 248px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family:Verdana;
        padding:5px;
    }
    .contactNoCNCClient{
        color:#000000;
        font-family:Verdana;
        font-weight: bold;
        font-size:12px;
        padding-top: 5px;
        padding-right: 25px;
    }
    .cNoCNCClient{
        width: 248px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family:Verdana;
        padding:5px;
    }
    .acu_tableClient{
        margin-left: -10px;
    }
    .asuCNCClient{
        font-family:Verdana;
        font-size:12px;
        color: #183867;
        font-weight: bold;
    }
    .moptable2Client{
        color:#000000;
        font-family: Agency FB;
        font-weight: normal;
        font-size: 12px;
        padding-left: 14px;
    }
    .table2mopClient{
        width: 155px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: Agency FB;
        margin-left: -18px;
        margin-top: -5px;
    }
    .moptable2aClient{
        color:#000000;
        font-family:Verdana;
        font-size:12px;
        padding-left: 12px;
        padding-top: 12px;
    }
    .moptable2aClient2{
        color:#000000;
        font-family:Verdana;
        font-size:12px;
        padding-left: 12px;
    }
    .table2mop2Client{
        margin-left:23px;
        width: 198px;
        padding-left: 5px;
        height: 28px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family:Verdana;
    }
    .InclusiveOfVatClientcheckClient{
        padding-top: 5px;
        margin-left:10px;
        background-color: gray;
        border-radius: 5px;
        border-color: #C8C8C8;
    }
    .InclusiveOfVatClientTextClient{
        margin-top: -53px; 
        color: #000000;
        font-family: Agency FB;
        font-size: 12px;
        font-style: italic;
    }
    .termsTaCNCClient{
        margin-top: 2px;
        margin-left:0px;
        width: 248px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: Agency FB;
    }
    .moptable2bClientNew3{
        color:#008B8B;
        font-family: Calibri;
        font-weight: bold;
        font-size: 12px;
        -webkit-transform: scale(0.7);
        width: 20px;
        height: 25px;	
        margin-left:15px;
    }
    .moptable2acClient{
        float: right;
        color: #000000;
        font-family: Agency FB;
        font-weight: normal;
        font-size: 12px;
    }
    .table2bankClient{
        float: right;
        width: 128px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: calibri;
        margin-left:30px;
    }
    .moptable2acDivClient{
        float: right;
        color:#000000;
        font-family: Agency FB;
        font-weight: normal;
        font-size: 12px;
    }
    .table2bankDivClient{
        float: right;
        width: 128px;
        height: 27px;
        background-color: white;
        border: solid 1px #C8C8C8;
        font-size: 12px;
        font-family: calibri;
        margin-top: -3px;
    }
    .divCNCBelowClient{
        float: right;
        margin-right: 80px;
    }
    .saveBCNCClient{
        margin-right: 5px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }

    .saanBCNCClient{
        border-radius: 4px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }
    .clientsIOV{
        color:#003366;
        font-family: Calibri;
        font-size: 12px;
        font-style: italic;
        margin-top: -160px;
        margin-left: 33px;
    }
    .table2trtd{
        margin-left: 40px;
    }
    .tble3clients{
        float: right;
        margin-top: -212px;
        margin-right: 90px;
        color:#000000;
        font-weight:normal;
    }
    .IOVClientNew{
        margin-top: -20px;
        float: left;
        margin-left: 28px;
    }
    .checkAdd{
        background-color:yellow;
    }
    .bank{
        width:155px;
        font-family:Agency FB;
        font-size:12px;
        height:27px;
    }
    .banknamespan{
        border: solid 1px #C8C8C8;
        width: 146px;
        font-family: Agency FB;
        font-size: 12px;
        height: 17px;
        padding: 5px 2px 5px 5px;	
    }
    #container_ccpClient{
        padding-right: 10px;
        padding-left: 10px;
        padding-bottom: 40px;
        width: 933px;
    }
    .cncPadd{
        padding:7px!important;
    }

    .accountSetup {
        margin-left:20px;
        margin-top: 8px;
    }
    .loadingHolder{
        margin-top:15%;
        margin-left:45%;
    }
</style>

<script>
    $(function () {
        var $htmltax;
        var $htmlbank;

        $.ajaxSetup({async: false});
        $.when(
                $.get(URL + 'accounting/tax', {
                    returnurl: 'client'
                }),
                $.get(URL + 'accounting/new_bank', {
                    returnurl: 'client'
                })).then(function (res1, res2) {
            $htmltax = res1[0];
            $htmlbank = res2[0];
        });

        $('.taxId').change(function () {
            if ($(this).val() == 'addtax') {
                $('.popup').html($htmltax);
                $('.popup').removeClass('hidden');

                $('.closeNTaxes').click(function () {
                    $('.popup').addClass('hidden');
                    $('.popup').html('');
                });
            }
        });

        $('.bank').change(function () {
            if ($(this).val() == 'addbank') {
                $('.popup').html($htmlbank);
                $('.popup').removeClass('hidden');

                $('.closeNNBank').click(function () {
                    $('.popup').addClass('hidden');
                    $('.popup').html('');
                });
            } else {
                $.post("<?= URL ?>invoice/bankname", {bankid: $(this).val()},
                        function (result) { //alert(result);
                            $('#bankname').text(result);
                        });
            }
        });

        $('#saveAddNew').click(function () {
            returnurl = 'savenew';
            $('#newcustomerform input[name="task"]').val('addclient');
            type = $('select[name="type"]').val();
            terms_id = $('select[name="termsId"]').val();
            client_name = $('input[name="clientName"]').val();
            credit_limit = $('input[name="creditLimit"]').val();
            if (client_name == '')
            {
                alert('Customer Name empty.')
                return false;
            }
            if (type == '')
            {
                alert('Please select a Customer Type.')
                return false;
            }
            if (terms_id == '')
            {
                alert('Please select Customer Term.')
                return false;
            }
            if (credit_limit < 1)
            {
                alert('Credit limit error.')
                return false;
            }
            
            saveCustomer();

        });
        
        $('select[name="termsId"]').change(function(){
                if($(this).val() == 1)
                {
                        $('input[name="creditLimit"]').prop('required',false);
                        $('input[name="creditLimit"]').parent('td').find('span').html('');
                }
                else
                {
                        $('input[name="creditLimit"]').prop('required',true);
                        $('input[name="creditLimit"]').parent('td').find('span').html('*');
                }
        });

<?php
if ($task == 'addclient') {
    ?>

            $('#newcustomerform').submit(function () {
                filled = false;
                $('#newcustomerform select[required]').each(function () {
                    if ($(this).val() == '') {
                        filled = $(this);
                        $(this).focus();
                        return false;
                    }
                });
                
                if ($('#newcustomerform select[name="termsId"]').val() != 1 && ($('#newcustomerform input[name="creditLimit"]').val() == '' || $('#newcustomerform input[name="creditLimit"]').val() == '0.00')) {
                        filled = $('#newcustomerform input[name="creditLimit"');
                        $('#newcustomerform input[name="creditLimit"').focus();
                }
                                
                if (!filled) {
                    newrecord = 'new';
                    saveCustomer();

                } else {
                    alert('please fill-up required fields.');
                    $(filled).focus();
                }
                return false;
            });
    <?php
} else {
    ?>
            $('#newcustomerform').submit(function () {
                filled = true;
                filled = false;
                $('#newcustomerform select[required]').each(function () {
                    if ($(this).val() == '') {
                        filled = $(this);
                        $(this).focus();
                        return false;
                    }
                });
                
                if ($('#newcustomerform select[name="termsId"]').val() != 1 && ($('#newcustomerform input[name="creditLimit"]').val() == '' || $('#newcustomerform input[name="creditLimit"]').val() == '0.00')) {
                        filled = $('#newcustomerform input[name="creditLimit"');
                        $('#newcustomerform input[name="creditLimit"').focus();
                }
                                
                if (!filled) {
                    newrecord = 'new';
                    saveCustomer();

                } else {
                    alert('please fill-up required fields.');
                    $(filled).focus();
                }
                return false;
            });
    <?php
}
?>
        function saveCustomer() {

            email = $('input[name="emailAddress"]').val();
            email_customer = $('input[name="contactEmailAddress"]').val();
            
            isValidEmail = validateEmail(email);
            isValidEmailCustomer = validateEmail(email_customer);

            if (email != '' && !isValidEmail)
            {
                alert('Please enter a valid email in Client.')
                return false;
            }
            if (email_customer != '' && !isValidEmailCustomer)
            {
                alert('Please enter a valid email in Client Contact Person.')
                return false;    
            }
            
            
            

            task = $('.newClientTask').val();
            checkresult = '';
            $.ajaxSetup({async: false});

            $.post("<?= URL ?>invoice/checkClientNum", {clientnum: $('input[name="clientAccount"]').val()},
                    function (result) {
                        checkresult = result;

                    });
            if (checkresult >= 1) {

                newrecord = '';
                returnurl = '';
                alert('Customer Id No. already exist.');
                return false;
            }

            $.ajaxSetup({async: false});
            $.post("<?= URL ?>invoice/checkClientNum", {clientname: $('input[name="clientName"]').val()},
                    function (result) { //alert(result);
                        checkresult = result;
                    });
                    
            if (checkresult >= 1) {
                newrecord = '';
                returnurl = '';
                
                alert('Customer name already exist.');
                return false;
            }
            confirmPost = false;
            
            save_msg = $('#newcustomerform input[name="task"]').val();
            if ($.inArray(save_msg,['addclient','addNewClientOption']) > -1) {
                confirmPost = confirm('Do you want to add new Customer?');
            } else {
                confirmPost = confirm('Do you want to save changes you made for this record?');
            }

            if (!confirmPost) {
                newrecord = '';
                returnurl = '';
                
                return false;
            }


            if (typeof (newrecord) == "undefined") {
                newrecord = '';
            }

            if (typeof (returnurl) == "undefined") {
                returnurl = '';
            }

            if (newrecord == "new" || returnurl == "savenew") {
                $('body').css('overflow', 'hidden');
                $('.popup').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
                $('.popup').removeClass('hidden');
                $.post(URL + 'invoice/addAnotherClient', $('.nif1Client').serialize())
                        .done(function (returnData) {
                            if (task == 'addNewClientOption') {
                                $('.jsHolder').html(returnData);
                            } else if (returnurl == 'savenew') {
                                reloadCustomer();
                            } else {
                                location.reload();
                            }
                            newrecord = '';
                            returnurl = '';

                            $('select[name="termsId"]').change();
                            return false;
                        })
                        .fail(function () {
                            alert('Connection Error!');
                            location.reload();
                        });
                        
                newrecord == "";
                returnurl == "";
                return false;
            } else {
                alert('asdf');
            }
        }
        function reloadCustomer() {
            $.post(URL + 'invoice/newcustomer')
                    .done(function (returnData) {
                        $('.popBack').empty();
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');
                        alert('Client saved!');
                        $('.popup').addClass('hidden');
                        $('.close1Client').click(function () {
                            if (confirm('Are you sure you want to leave this page without saving?')) {
                                location.reload();
                            }
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });

        }
    })
</script>
<?php
if (isset($_GET['returnurl'])) {
    Session::setSession('returnurl', $_GET['returnurl']);
}
?>

<div class="jsHolder">
    <!-- pls do not remove this -->
</div>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<script src="<?php echo URL; ?>public/js/mask.js"></script>
<div class="invoiceHolderCNWClient">
    <form class="nif1Client boxshadow" method="post" action="<?= URL ?>invoice/customers" id="newcustomerform">
        <div id="new1Client">
            <input type="button" class="close1Client" value="x">
            <p class="ni1Client"><?php echo ($task == 'addclient') ? 'CREATE NEW' : 'UPDATE' ?> CUSTOMER</p>
            <!--<hr class="hrCNCClient">-->
        </div>
        <div id="container_ccpClient">
            <div  style="float:left;margin-left:20px;width:443px;">
                <table class="ca_tableClient22b">
                    <tr class="customer_accountClient">
                        <td class="ca_tableClient22">Customer No.:</td>
                        <td  class="ca_tableClient22" style="width:273px!important;">
                            <input type="hidden" name="token" value="<?=$this->token;?>">
                            <input type="text" placeholder="" class="customerACNCClient" maxlength="11" 
                                   name="clientAccount" value="<?php echo $client->clientAccount ?>" required>
                            <span style="color:red">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="ca_tableClient22">Customer Name:</td>
                        <td class="ca_tableClient22">
                            <input type="text" class="customerNCNCClientNew1" name="clientName"
                                   value="<?php echo $client->clientName ?>" required maxlength="100">
                            <span style="color:red">*</span>
                        </td>
                    </tr>
                    <tr class="<?php echo $this->user->accountType == 'sub' ? 'hidden' :'' ?>">
                        <td class="ca_tableClient22">Customer Type:</td>
                        <td class="ca_tableClient22">
                            <select class="cNoCNCClient" name="type" required >
                                <option value="">--Select--</option>
                                <option value="Branch" <?php echo $client->type == 'Branch' || $this->user == 'sub' ? 'selected' : '' ?>>Company Own</option>
                                <option value="Franchise" <?php echo $client->type == 'Franchise' ? 'selected' : '' ?>>Franchise</option>
                                <option value="Direct Customer" <?php echo $client->type == 'Direct Customer' ? 'selected' : '' ?>>Direct Customer</option>
                            </select>
                            <span style="color:red">*</span>
                        </td>
                    </tr>
                    <tr>	
                        <td class="ca_tableClient22">TIN:</td>
                        <td class="ca_tableClient22">
                            <input type="text" placeholder="" class="customerNCNCClientNew1 tinmask" 
                                   name="tinNum" value="<?php echo $client->tinNum ?>" maxlength="16">
                        </td>
                    </tr>
                    <tr>		
                        <td class="ca_tableClient22">Primary Email Add:</td>
                        <td class="ca_tableClient22">
                            <input type="email" class="customerNCNCClientNew1" name="emailAddress"
                                   value="<?php echo $client->emailAddress ?>" maxlength="100">
                        </td>
                    </tr>
                    <tr>		
                        <td class="ca_tableClient22"><div style="margin-top:-30px;">Address:</div></td>
                        <td class="ca_tableClient22"><textarea class="addressCNCClientClient" name="address" id="caddress"><?php echo $client->address ?></textarea></td>
                    </tr>
                    <tr>		
                        <td style="padding-top:3px;">Phone No.:</td>
                        <td style="padding-top:3px;">
                            <input type="text" class="pNoCNC customerNCNCClientNew1 phonemask" maxlength="20"
                                   name="phoneNumber" value="<?= $client->phoneNumber ?> ">
                        </td>
                    </tr>
                    <tr>		
                        <td style="padding-top:3px;">Fax No.:</td>
                        <td style="padding-top:3px;"><input type="text" class="pNoCNC customerNCNCClientNew1 phonemask" name="faxNumber"
                                                            value="<?php echo $client->faxNumber ?> " maxlength="20">
                        <td>
                    </tr>

                </table>	
            </div>
            <div  style="float:left;">
                <table class="ca_tableClient22b">
                    <tr>		
                        <td class="ca_tableClient22ss" style="font-weight:bold;">Client Contact Person:</td>	
                        <td class="ca_tableClient22"></td>
                    </tr> 
                    <tr>		
                        <td class="ca_tableClient22">Contact Name:</td>
                        <td class="ca_tableClient22" style="width:213px!important;">
                            <input type="text" class="cusNameCNCClient" name="contactName"
                                   value="<?php echo $client->contactName ?>" maxlength="100">
                        </td>
                    </tr>
                    <tr>		
                        <td class="ca_tableClient22">Telephone No.:</td>
                        <td class="ca_tableClient22">
                            <input type="text" class="contactNo cNoCNCClient" name="contactNum"
                                   value="<?php echo $client->contactNum ?>" maxlength="27">
                        </td>
                    </tr>
                    <tr>		
                        <td class="ca_tableClient22">Secondary Email Add:</td>
                        <td class="ca_tableClient22">
                            <input type="email" class="cNoCNCClient" name="contactEmailAddress"
                                   value="<?php echo $client->contactEmailAddress ?>" maxlength="100">
                        </td>
                    </tr>

                    <tr>		
                        <td class="ca_tableClient22ss" style="font-weight:bold;padding-top:25px;">Billing Setup:</td>	
                        <td class="ca_tableClient22"></td>
                    </tr> 

                    <tr>		
                        <td class="ca_tableClient22">Term:</td>
                        <td class="ca_tableClient22">
                            <select class="cNoCNCClient" name="termsId" required >
                                <option value="">--Select--</option>
                                <?php foreach ($paymentTerms as $each) { ?>
                                    <option value="<?= $each->id ?>" title="<?= $each->description ?>" 
                                    <?php
                                    if ($each->id == $client->termsId) {
                                        echo 'selected';
                                    }
                                    ?>
                                            ><?= $each->paymentCode ?></option>
<?php } ?>
                            </select>
                            <span style="color:red">*</span>
                        </td>
                    </tr>
                    <tr>		
                        <td class="ca_tableClient22">Currency:</td>
                        <td class="ca_tableClient22">
                            <select class="cNoCNCClient" name="currencyId" required >
                                <?php foreach ($currency as $each) { ?>
                                    <option value="<?= $each->id ?>" title="<?= $each->description ?>" title="<?= $each->description ?>" 
                                    <?php
                                    if ($each->id == $client->currencyId) {
                                        echo 'selected';
                                    } elseif ($each->id == 33 && $client->currencyId == '') {
                                        echo 'selected';
                                    }
                                    ?>
                                            ><?= $each->code ?></option>
<?php } ?>
                            </select>
                            <span style="color:red">*</span>
                        </td>
                    </tr>
                    <tr>		
                        <td class="ca_tableClient22">Credit Limit:</td>
                        <td class="ca_tableClient22">
                            <input type="text" value="<?php echo $client->creditLimit ?>" class="cNoCNCClient isNumeric" name="creditLimit" required>
                            <span style="color:red">*</span>
                        </td>
                    </tr>

                </table>
            </div>
            <div style="clear:both;"></div>
            <div class="accountSetup">
                <table class="acu_tableClient">

                    <div class="asuCNCClient">Account Set-up:</div>
                    <tr class="hidden">
                        <td class="moptable2Client">Method of Payment:</td>
                        <td class="table2trtd">
                            <script>
    $(function () {
        $('#mop').change(function () {
            if ($(this).val() == 'Add New')
            {
                $(this).val('Check');
            }
        });
    });
                            </script>
                            <select id="mop" class="table2mopClient" name="">
                                <option>Check</option>
                                <option>Cash</option>
                                <option>Credit Card</option>
                                <option>Post Dated Check</option>
                                <option>Cash on Delivery</option>
                                <option></option>
                                <option class="checkAdd">Add New</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="hidden">
                        <td class="moptable2aClient">Vat:</td>
                        <td><select class="table2mop2Client taxId" name="taxId" id="taxId">
                                <option></option>
                                <?php
                                $tax = DAOFactory::getTblTaxDAO()->queryAll();

                                if (count($tax) > 0) {
                                    ?>
                                    <?php
                                    foreach ($tax as $item) {
                                        ?>
                                        <option value="<?php echo $item->id ?>" <?php echo ($xitem->id == $client->taxId) ? 'selected' : '' ?>><?php echo $item->description ?></option>-->
                                    <?php } ?>
<?php } ?>
                                <option value="addtax">Add Vat</option>
                            </select></td>
                    </tr>
<?php if ($task == 'updateclient') { ?>
                        <tr>		
                            <td class="moptable2aClient">Date Created:</td>
                            <td><input type="text" readonly class="table2mop2Client" name="dateCreated" value="<?php echo date('m/d/Y', strtotime($client->dateCreated)) ?>"></td>
                        </tr>
<?php } ?>
                    <tr>		
                        <td class="moptable2aClient2">Active Account</td>
                        <?php
                            if ($client->active=='yes'){
                                $active = "checked";
                            }
                            else{
                                $active = '';
                            }                            
                        ?>
                        <td class="cncPadd"><input type="checkbox" <?php echo $active; ?> class="moptable2bClientNew3" name="active"></td>
                    </tr>

                </table>
            </div>
            <div style="clear:both;"></div>
            <table class="tble3clients hidden">
                <tr>
                    <td class="moptable2acClient">Bank Account Code:</td>
                    <td><select name="bankId" id="bank" class="bank">
                            <option></option>
                            <?php
                            $bank = DAOFactory::getTblBankDAO()->queryByOrgId(Session::getSession('orgid'));

                            if (count($bank) > 0) {
                                ?>


                                <?php foreach ($bank as $item) { ?>
                                    <option value="<?php echo $item->id ?>" <?php echo ($item->id == $client->bankId) ? 'selected' : '' ?>><?php echo $item->bankCode ?></option>
                                <?php } ?>
<?php } ?>
                            <option value="addbank">New Bank</option>
                        </select></td>
                </tr>
                <tr>	
                    <td class="moptable2acDivClient">Bank Account No.:</td>
                    <td><div class="banknamespan"><span id="bankname">	</span></div></td>
                </tr>
            </table>
            <div style="clear:both;"></div>
            <div class="divCNCBelowClient">	
<?php if ($useraccess->Add == 'yes') { ?>
                    <input type="submit" value="Save" class="saveBCNCClient addsavebuttonpop saveButtonsPop">

                    <?php
                }
                if ($task == 'addclient' && ($useraccess->Add == 'yes' || $useraccess->Edit == 'yes')) {
                    ?>
                    <?php if (Session::getSession('function') != 'add' && Session::getSession('function') != 'newRecurring') { ?>
                        <input type="button" value="Save And Add New" class="saanBCNCClient addsavebuttonpop saveAddButtonsPop" id="saveAddNew" >
                    <?php } ?>
                    <?php
                }
                ?>
                <input type="hidden" name="task" class="newClientTask" value="<?php echo $task; ?>" />
            </div>
        </div>
</div>
</form>
</div>

<div class="hidden popup"></div>
<?php
if ($client->id != '') {
    $cashReciept = DAOFactory::getTblNewCashInvoiceDAO()->queryByClientId($client->id);
    if (isset($cashReciept) && !empty($cashReciept)) {
        ?>
        <script>
            $('input[name="clientAccount"]').prop('readonly', true);
        </script>
        <?php
    } else {
        $cashReciept = DAOFactory::getTblNewInvoiceDAO()->queryByClientId($client->id);
        if (isset($cashReciept) && !empty($cashReciept)) {
            ?>
            <script>
                $('input[name="clientAccount"]').prop('readonly', true);
            </script>
            <?php
        }
    }
}
?>

<script>

    $(".contactNo").on("keydown", function (event) {
        if ((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105) || event.which <= 8 || event.which <= 46 || event.which >= 186) {
            return true
        } else {
            return false;
        }
    });

    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
    }
</script>