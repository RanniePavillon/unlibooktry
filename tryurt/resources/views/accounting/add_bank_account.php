<style>
    .popup2{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
    .abaHolder{
        width: 495px;
        margin:105px auto;
        border: 2px solid #A8574E;
        background:#fff;
    }
    .abaCont{
        padding:20px;
    }
    .saveABA{
        width: 100px !important;
        height: 28px !important;
        border-radius: 4px !important;
        border: none !important;
        cursor: pointer!important;
        background: -webkit-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        background: -o-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        background: -ms-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        background: linear-gradient(0deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        color: #fff!important;
        font-size: 17px !important;
        font-family: agency fb2 !important;
        text-shadow: 1px 1px 2px #282927 !important;
    }
    .saanABA{
        width: 156px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        color:#fff;
    }
    .abaTitle{
        font-size: 30px;
        font-family: agency fb2;
        color:#c51400;
    }
    .tblAddAccount{
        /* width:100%; */
		margin:auto;
        margin-top:20px;
    }
    .tblAddAccount td{
        font-size:12px!important;
        padding-top:3px;
        font-family:verdana;
        font-size:12px;
    }
    .inpABA{
        width:248px;
        height:27px;
		padding:5px;
		font-family:verdana;
        font-size:12px;
    }
    .tblAddAccount td{
        border:none;
    }
    .closeAccount{
        margin-top:-21px!important;
        margin-right:-20px!important;
        height:27px !important;
    }
</style>

<div class="jsHolder">
    <!-- pls do not remove this -->
</div>

<link rel="stylesheet" href="<?= URL ?>public/css/popup.css">
<script src="<?php echo URL ?>public/js/custom.js"></script>

<div class="abaHolder">
    <div class="abaCont" id="addBankform">
        <div  style="float:left;">
            <label class="abaTitle">ADD BANK ACCOUNT</label>
        </div>

        <div style="float:right;">
            <input type="button" class="closeAccount popx" value="x">
        </div>

        <div style="clear:both;"></div>

        <div>
            <table class="tblAddAccount">
                <tr>
                    <td style="width:176px;">Account:</td>
                    <td>
                        <input type="text" class="inpABA" value="<?= $this->cashInBank->accontName ?>" readonly style="background: #c8c8c8;border:none;padding-left:3px;">
                        <input type="hidden" name="account" value="<?= $this->cashInBank->id ?>"/>
                    </td>
                </tr>
                <tr>
                    <td style="width:176px;">GL Account Code:</td>
                    <td>
                        <input type="text" class="inpABA" name="glAccount" value="<?= $this->getCashInBankMaxNum ?>"  readonly style="background: #c8c8c8;border:none;padding-left:3px;">
                    </td>
                </tr>
                <tr>
                    <td style="width:176px;">Bank Account Name:</td>
                    <td><input type="text" class="inpABA" name="bankName" style="padding-left:3px;" value="<?= $this->coa->accontName ?>"></td>
                </tr>
                <tr>
                    <td style="width:176px;">Maintaining Balance:</td>
                    <td><input type="text" class="inpABA isNumeric" name="fundBalance" style="padding-left:3px;border:solid 1px #c8c8c8;" value="<?= Controller::getFloat($this->coa->fundBalance) ?>"></td>
                </tr>
            </table>
            <div style="margin-top:25px;text-align:right;margin-bottom:5px;">
                <input type="button" value="SAVE" class="addsavebutton saveBank saveABA">
                <input type="hidden" name="task" class="forBank" value="<?php echo $task ?>"/>
            </div>
        </div>
    </div>
</div>

<script>
    $('.saveBank').click(function () {
        confirmAdd = confirm('Save Bank?');
        if (!confirmAdd) {
            return false;
        }
        saved = save(false);
    });

    $('.saveNewBank').click(function () {
        confirmAdd = confirm('Save Bank?');

        if (!confirmAdd) {
            return false;
        }
        saved = save(true);
    });

    function save(saveNew) {
        name = $('input[name="bankName"]').val();
        returns = false;
        if (typeof (newrecord) == "undefined") {
            newrecord = '';
        }

        if (name != '') {
            code = $('input[name="glAccount"]').val();
            account = $('input[name="account"]').val();
            fundbalance = $('input[name="fundBalance"]').val();
            $object = $('.popBack');

            if ($('div').hasClass("popup2")) {
                $object = $('.popup2');
            }
            $('body').css('overflow', 'hidden');
            $($object).html('<div class="loadingevent2" style="background-color: none;width: 108px;height: 74px;margin: auto;margin-top: 218px;padding: 10px;"><img src="' + URL + 'public/images/processing.gif" class="loadingimg" style="background-color: none;width: 123px;height: 123px;"/></div>');

            $($object).removeClass('hidden');
            $.post(URL + 'accounting/saveBank', {
                'account': account,
                'code': code,
                'name': name,
                'newrecord': newrecord,
                'id': '<?= $this->coa->id ?>',
                'fundbalance': fundbalance
            })
            .done(function (returnData) {
                if (newrecord == 'new') {

                    $('.jsHolder').html(returnData);
                    $($object).addClass('hidden');
                    $($object).html('');
                    $('body').css('overflow', 'auto');
                    $('input[name="remarks[]"],.poso,input[name="particular"]').attr("required", true);
                    return false;
                } else if (returnData == 0) {

                    if (saveNew) {

                    } else {
                        location.reload();
                    }
                    returns = true;
                } else {
                    alert(returnData);
                    returns = false;
                }
            });
        }
        $('input[name="bankName"]').focus();
        return returns;
    }
</script>