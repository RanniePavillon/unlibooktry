<style>
    .mainformschart{
        width:100%;
    }
    .chartforms{
        width:484px;
        margin:auto;
        padding:15px;
        background-color:#fff;
        margin-top:100px;
        border: 2px solid #24b6ef;
        padding-bottom:75px;
    }	
    .close1Client{
        background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 24px;
        outline-style: none;
        cursor: pointer;
        float: right;
    }
    .ni1Client{
        margin-top:5px;
        font-size: 30px;
        text-shadow:none;
        font-family:agency fb2;
        color:#c51400;
        float:left;
    }
    .divCNCBelowClient{
        float: right;
        margin-top: 18px;
        margin-right:53px;
    }
    .saveBCNCClient{
        width: 100px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
    }

    .saanBCNCClient{
        
    }
    .charttables{
        margin:auto;
    }
    .charttables td{
        font-family:verdana;
        font-size:12px;
        padding:5px !important;
    }
    input[type="text"], select{
        width:248px;
        height:27px;
        font-family:verdana;
        font-size:12px;
        margin-left: 10px;
    }
</style>
<?php
$coa = new TblCoa();
$task = 'addcoa';
$isreadonly = '';
if (isset($_POST['coaid'][0])) {
    $coaid = $_POST['coaid'][0];

    $coa = DAOFactory::getTblCoaDAO()->load($coaid);
    Session::setSession('coaid', $coaid);
    $task = 'updatecoa';

    if (count(DAOFactory::getAdminCoaDAO()->queryByAccountNum($coa->accountNum)) > 0) {
        $isreadonly = "readonly";
        Session::setSession('coadefault', 'default');
    }
}
?>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>

<div class="mainformschart">
    <div class="chartforms boxshadow">
        <input type="button" class="close1Client" value="x">
        <div id="new1Client">
            <div class="ni1Client"><?php echo ($task == 'addcoa') ? 'CREATE NEW' : 'UPDATE' ?> ACCOUNT</div>
            <div style="clear:both;"></div>
        </div>
        <form class="setCoa">
            <div style="margin-top:20px;">
                <table class="charttables">
                    <tr>
                        <td>Type :</td>
                        <td>
                            <input type="hidden" name="token" value="<?=$this->token;?>">
                            <select class="chartType" name="chartType">
                                <?php
                                if ($this->chartType) {
                                    foreach ($this->chartType as $each) {
                                        ?>
                                        <option value="<?= $each->accountType ?>"><?= ucfirst($each->accountType) ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Main Account:</td>
                        <td>
                            <select class="mainAccount" name="mainAccount">
                                <?php
                                if ($this->chartMain) {
                                    foreach ($this->chartMain as $each) {
                                        ?>
                                        <option value="<?= $each->id ?>"
                                                coaType="<?= $each->accountType ?>"
                                                title="<?= $each->accountNum ?>">
                                                    <?= ucfirst($each->accontName) ?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-left: 140px !important;">
                            <input type="radio" name="nameAccount" value="main" class="mainSubAccount" checked > <label>Main Sub Account</label> 
                            <input type="radio" name="nameAccount" value="sub" class="subAccount"> <label>Sub Account</label>
                        </td>
                    </tr>
                    <tr class="glaccountTr hidden">
                        <td>GL Account:</td>
                        <td>
                            <select class="glPosting" name="glPosting">
                                <?php
                                if ($this->chartSub) {
                                    foreach ($this->chartSub as $each) {
                                        ?>
                                        <option value="<?= $each->id ?>"
                                                mainCoa="<?= $each->subAccount ?>"
                                                title="<?= $each->accountNum ?>">
                                                    <?= ucfirst($each->accontName) ?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr class="hidden accountCodeGl">
                        <td>GL Account Code:</td>
                        <td><input type="text" name="accountCodeGl"></td>
                    </tr>
                    <tr>
                        <td>GL Name Account:</td>
                        <td><input type="text" name="glNameAccount"></td>
                    </tr>
                </table>

                <div class="divCNCBelowClient">	
                    <?php ?>
                    <input type="submit" value="SAVE" class="saveBCNCClient addsavebuttonpop">

                    <?php
                    if ($task == 'addcoa') {
                        ?>
                        <?php if (Session::getSession('function') != 'add' && Session::getSession('function') != 'newRecurring') { ?>
                            <input type="button" value="SAVE AND ADD NEW" class="saanBCNCClient addsavebuttonpop saveAddButtonsPop" id="saveAddNew" >
                        <?php } ?>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </form>
    </div>
</div>


<script>
    $(function () {
        $('.chartAddSave').click(function () {
            evnt = "addnew";
        });

        $('#taxId').change(function () {
            if ($(this).val() == 'addtax')
                $.post(URL + 'accounting/tax', {returnurl: 'supplier'})
                        .done(function (returnData) {
                            $('.popup').html(returnData);
                            $('.popup').removeClass('hidden');

                            $('.closeNTaxes').click(function () {
                                $('.popup').addClass('hidden');
                                $('.popup').html('');
                            });
                        });
        });

        $('.chart-form').submit(function () {
            accntcode = $('input[name="accountNum"]').val();
            name = $('input[name="accountName"]').val();

            $.ajaxSetup({async: false});
            result = 0;
            $.post(URL + 'accounting/checkchart', {accountcode: accntcode})
                    .done(function (returnData) {
                        result = returnData;
                    });
            if (result > 0) {
                alert('Account number already exist');
                return false;
            }

            if (evnt == "addnew") {
                $.post(URL + 'accounting/setCoa', $('.chart-form').serialize())
                        .done(function (returnData) {
                            $('input[type="text"]').val('');
                            $('.descInput').text('');
                            $('.chart-form input[name="task"]').val('addcoa');
                            $evnt = '';
                        })
                        .fail(function () {
                            alert('Connection Error!');
                        });
                return false;
            }
        });


        $('.subAccount').click(function () {
            if ($(this).is(':checked')) {
                $('.glaccountTr').removeClass('hidden');
            }
            $('.chartType').change();
        });
        $('.mainSubAccount').click(function () {
            if ($(this).is(':checked')) {
                $('.glaccountTr').addClass('hidden');
            }
        });
        $('.chartType').val($('.chartType option').attr('value'));

        $('.chartType').change(function () {
            ct = $(this).val();
            ma = $('.mainAccount option:selected').val();
            ma_main = $('.mainAccount option:selected').attr('coatype');
            
            $('.mainAccount option').addClass('hidden');
            $('.mainAccount option[coatype="' + ct + '"]').removeClass('hidden');
            
            $('.mainAccount').val($('.mainAccount option[coatype="' + ct + '"]').attr('value'));
                        
            if(ma != undefined && ma_main == ct){
                $('.mainAccount').val(ma);
            }
            
            $('.mainAccount').change();
        });
        $('.chartType').change();
        $('.mainAccount').change(function () {
            ct = $(this).val();
            $('.glPosting option').addClass('hidden');
            $('.glPosting option[maincoa="' + ct + '"]').removeClass('hidden');
            glp = $('.glPosting option[maincoa="' + ct + '"]').attr('value');
            $('.glPosting').val(glp);
            if (typeof glp === 'undefined') {
                $('input[name="nameAccount"]').prop('checked', false);
                $('.mainSubAccount').prop('checked', true);
                $('.mainSubAccount').click();
            }
        });
        $('#saveAddNew').click(function () {
            confirmAdd = confirm('Adding chart of account.');
            if (confirmAdd) {
                setCoa(true);
            }
        });
        $('.setCoa').submit(function () {
            confirmAdd = confirm('Adding chart of account.');
            if (confirmAdd) {
                setCoa(false);
            }
            return false;
        });

<?php
if (isset($_POST['id'])) {
    $coa = DAOFactory::getTblCoaDAO()->load($_POST['id']);
    ?>
            $('input[name="glNameAccount"]').val('<?= $coa->accontName ?>');
            $('select[name="chartType"]').val('<?= $coa->accountType ?>');
            $('select[name="chartType"]').change();

            if ('<?= $coa->subType ?>' == 'sub_sub') {
                $('input[name="nameAccount"]').prop('checked', false);
                $('input[name="nameAccount"][value="sub"]').prop('checked', true);
                $('input[name="nameAccount"][value="sub"]').click();
                $('select[name="glPosting"]').val('<?= $coa->subAccount ?>');
                $('input[name="accountCodeGl"]').val('<?= $coa->accountNum ?>');
                $('input[name="accountCodeGl"]').prop('readonly', true);
                $('select[name="mainAccount"]').val(<?= DAOFactory::getTblCoaDAO()->load($coa->subAccount)->subAccount ?>);
                $('.accountCodeGl').removeClass('hidden');
            }else{
                $('select[name="mainAccount"]').val(<?= $coa->subAccount ?>);
            }
            
            $('#saveAddNew').addClass('hidden');

            function setCoa(hasNew) {
                accountName = $('input[name="glNameAccount"]').val();
                
                $.ajaxSetup({async: false});
                result = 0;
                $.post(URL + 'accounting/checkCoaName', {id:<?= $coa->id ?>,glNameAccount: accountName})
                        .done(function (returnData) {
                            result = returnData;
                        });
                if (result > 0) {
                    alert('Account name already exist');
                    return false;
                }
                
                if (accountName != '') {
                    $.ajax({async: false});
                    $.post(URL + 'accounting/setUserCoa?id=<?= $coa->id ?>', $('.setCoa').serialize())
                            .done(function (returnData) {
                                if (returnData != '') {
                                    alert(returnData);
                                } else {
                                    location.reload();
                                }

                            });
                }
            }
            $('select[name="chartType"], select[name="mainAccount"], input[name="nameAccount"], select[name="glPosting"]').prop('disabled', true);
    <?php
} else {
    ?>

            function setCoa(hasNew) {
                accountName = $('input[name="glNameAccount"]').val();
                
                 $.ajaxSetup({async: false});
                result = 0;
                $.post(URL + 'accounting/checkCoaName', {glNameAccount: accountName})
                        .done(function (returnData) {
                            result = returnData;
                        });
                if (result > 0) {
                    alert('Account name already exist');
                    return false;
                }

                if (accountName != '') {
                    $.ajax({async: false});
                    $.post(URL + 'accounting/setUserCoa', $('.setCoa').serialize())
                            .done(function (returnData) {
                                if (returnData != '') {
                                    alert(returnData);
                                } else if (hasNew) {
                                    $.post(URL + 'accounting/getGLBalance', {'accountNum': accountNum})
                                            .done(function (returnData) {
                                                $('.popBack').html(returnData);
                                                $('.popBack').removeClass('hidden');
                                                $('body').css('overflow', 'hidden');

                                                $('.close1Client').click(function () {
                                                    $('.popBack').addClass('hidden');
                                                    $('.popBack').html('');
                                                    $('body').css('overflow', 'auto');
                                                });
                                            })
                                            .fail(function () {
                                                alert('Connection Error!');
                                            });
                                } else {
                                    location.reload();
                                }

                            });
                }
            }
    <?php
}
?>
    });
</script>