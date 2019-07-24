<style>
    .journalBody{
        width:100%;

    }
    .journalform{
        width: 900px;
        margin:auto !important;
        border: 2px solid #24b6ef;
        background-color:white;
        padding-bottom:96px;
        margin-top:70px !important;
    }
    .clientJournal{
        font-size: 12px;
        font-family: Agency FB;
        margin-left: 53px;
        margin-top: 15px;	
        font-weight: bold;
    }
    .clientJournal input[type="text"]{
        width: 350px;
        margin-left: 10px;
        padding: 5px;
        height: 29px;
        font-size: 12px;
        font-family: Agency FB;
    }
    .clientJournal2{
        font-size: 12px;
        font-family: verdana;
        margin-left:50px;
        margin-top: 5px;
    }
    .clientJournal2 td{
        font-size:12px;
        padding-top:3px;
        padding-bottom:3px;
    }
    .clientJournal2 input[type="text"],input[type="date"]{
        width: 248px;
        margin-left: 10px;
        padding: 5px;
        height: 27px;
        font-size: 12px;
        font-family:Verdana;
    }
    .tbJournalform{
        border-collapse:collapse;
        width:99%;
        margin:auto;
        margin-top:20px;
        margin-left:7px;
    }

    .tbJournalform th{
        background-color:#C51400;
        color:white;
        font-size:12px;
        font-family:Verdana;
        font-weight:bold;
        text-align:center;
        padding: 5px;
    }
    .tbJournalform td{
        padding: 0px !important;
        border: 1px solid #c8c8c8;
    }

    .tbJournalform select{
        width: 100%;
        padding: 5px;
        height: 29px;
        font-size: 11px;
        font-family:Verdana;
        border:none;
    }
    .tbJournalform input[type="text"]{
        width: 100%;
        padding: 5px;
        height: 29px;
        font-size:12px;
        font-family: Verdana;
        border:none;
    }
    .tbJournalform tr td:nth-child (5){
        text-align: right;
    }
    .totalJournal{
        font-size:13px;
        font-family:Verdana;
        margin-left:532px;
        font-weight:bold;
        margin-top:20px;
    }
    .textTotalJournal{
        width:115px;
        padding:5px;
        height:25px;
        text-align:right;
        border:none;
        font-weight:bold;
        font-family:Verdana;
        font-size:13px;
    }
    .linejournalLine2{
        width: 96%;
        border-top: 1px solid rgb(214, 211, 211);
        margin: auto;
        margin-top: 2px;
    }
    .journalSave{
        width: 87px;
        height: 28px;
        border-radius: 5px;
        border: none;
        outline-style: none;
        cursor: pointer;
    }
    .JournalPost{
        width: 87px;
        height: 28px;
        border-radius: 5px;
        border: none;
        outline-style: none;
        cursor: pointer;
    }
    .buttonJournal{
        margin-right: 18px;
        margin-top: 38px;
        float:right;
    }
    .adel{
        margin-left: 1px;
        margin-top: 2px;
    }

    .a{
        background-image: url('<?= URL ?>public/images/addNew.png');
        background-repeat: no-repeat;
        width: 18px;
        height: 22px;
        font-style: italic;
        font-size: 11px;
        font-family: Calibri;
        border: none;
        background:white;
    }
    .a:hover, .a-hover{
        cursor: pointer;
        background-image: url('<?= URL ?>public/images/addNew.png');
    }
    .del{
        background-repeat: no-repeat;
        width: 15px;
        height: 22px;
        margin-left:3px;	
        font-style: italic;
        font-size: 11px;
        font-family: Calibri;
        border:  none;
        background:white;
    }
    .del:hover, .del-hover{
        cursor: pointer;
        background-image: url('<?= URL ?>public/images/del1New.png');
    }
    body{
        overflow:hidden;
    }
    .popBack{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }

    .clientJournal td{
        border:none;
    }
    .clientJournal2 td{
        border:none;
    }
    .tdJournal{
        border: solid 1px #c8c8c8; 
    }
    .mystyle{
        border-bottom: solid 1px #c8c8c8;
    }
    .tbJournalform tr th:nth-child(5){
        text-align: right;
    }
    .close1Client{
        background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 24px;
        position: absolute;
        left: 50%;
        margin-left: 418px;
        top: 67px;
        outline-style: none;
        cursor: pointer;
    }
    .tbJournal{
        border:1px solid #c8c8c8;
    }
    .loadingHolder{
        margin-top:15%;
        margin-left:45%;
    }
    .loadingimg{
        width:140px;
        height:140px;
    }

</style>
<script>
    $(function(){
        // $('.genSelectPicker').selectpicker('refresh');
    });
    eventLoader();
    function deleteRow(btn) {
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
        computeTotal();
    }

    function eventLoader()
    {
        $('.tbJournalform').find('tr').mouseover(function () {
            $(this).find('#addtask').addClass('a-hover');
            $(this).find('.deltask').addClass('del-hover');
        });

        $('.tbJournalform').find('tr').mouseout(function () {
            $(this).find('#addtask').removeClass('a-hover');
            $(this).find('.deltask').removeClass('del-hover');
        });

    }



    $(document).on("click", "#addtask", function () {
        $.post(URL + 'accounting/journalType', {type: $(this).val()})
                .done(function (returnData) { 
                    $("#tbJournalform").append('<tr id="tbJournalform2">'
                            + '<td style="border: none;">'
                            + '<input type="button" name="delete"  class="del deltask" onclick="deleteRow(this)" /></td>'
                            + '<td class="jdJournalCode"></td>'
                            + '<td class="typecontent tdJournal">' + returnData + '</td>'
                            + '<td class="tdJournal"><input type="text" style="font-style:Agency FB; text-align:left;" class="textTableText2 particular" name="particulars[]" required></td>'
                            + '<td class="tdJournal"><input type="text" class="textTableText debit isNumeric" style="font-weight:bold; font-style:Agency FB; border:none; text-align:right;" value="0.00" name="debit[]" required></td>'
                            + '<td class="tdJournal"><input type="text" class="textTableText credit isNumeric" style="font-weight:bold; font-style:Agency FB; border:none; text-align:right;" value="0.00" name="credit[]" required></td>'
                            + '<td style="border: none;">'
                            + '<div class="adel">'
                            + '<input type="button" name="add"  class="a addtask" id="addtask"/>'
                            + '</div>'
                            + '</td>'
                            + '</tr>'

                            );
                    eventLoader();
                    accountCodeChange();
                }).fail(function () {
            alert('Connection error.');
        });
        
//        $(document).off('click','#addtask');
        return false;
    });
</script>
<?php
$task = 'addjournal';
$journal = new TblJournalEntry();
$invoicestat = 'x';
$invoicestat2 = '';
$journalines = 0;

if (isset($_POST['journalid'])) {
    $task = 'view';
    $journalid = $_POST['journalid'];
    $journal = DAOFactory::getTblJournalEntryDAO()->load($journalid);
    $journalines = DAOFactory::getTblJournalLinesDAO()->queryByJournalEntryId($journalid);
    if ($journal->status == 'open') {
        $task = 'updatejournal';
    }
    if (isset($_POST['status']) && $_POST['status'] == 'copy') {
        $journal->id = '';
        $journal->journalNumber = 'JN-' . sprintf('%1$07d', TblJournalEntryMySqlExtDAO::getMaxNumId());
        $task = 'addjournal';
    }
    Session::setSession('journalid', $journalid);
}
?>
<title>
    JOURNAL ENTRY
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<script src="<?= URL ?>public/js/custom.js"></script>
<div class="journalBody">
    <form method="post" action="<?php echo URL ?>accounting/setJournal"  class="journalform journalentryform boxshadow">
        <div class="journalTitle headingspop">
            <?= $task == 'updatejournal' ? 'UPDATE' : ($task == 'addjournal' ? 'NEW' : "") ?>
            JOURNAL ENTRY
        </div>
        <input type="button" class="close1Client ekis" value="x">
        <table class="clientJournal2">
            <tr>
                <td>Journal No.:</td>
                <td>
                    <input type="hidden" name="token" value="<?=$this->token;?>">
                    <input type="text" name="journalNumber" style="background:#c8c8c8;border:none;" 
                           value="<?php
                           echo (isset($journal->journalNumber)) ?
                                   $journal->journalNumber : 'JN-' . sprintf('%1$010d', TblJournalEntryMySqlExtDAO::getMaxNumId())
                           ?>"
                           required readonly></td>
            </tr>
            <tr>
                <td>Date Issued:</td>
                <td><input type="text" id="di" name="transDate" value="<?php echo (isset($journal->transDate)) ? date('m/d/Y', strtotime($journal->transDate)) : date('m/d/Y') ?>" <?= $task == 'view' ? 'disabled' : '' ?> required ></td>
            </tr>
            <tr>
                <td>Date Created:</td>
                <td><input type="text" id="di" name="dateCreated" style="background:#c8c8c8;border:none;" disabled value="<?php echo (isset($journal->dateCreated)) ? date('m/d/Y', strtotime($journal->dateCreated)) : date('m/d/Y') ?>" required ></td>
            </tr>
        </table>
        <table class="tbJournalform" id="tbJournalform">
            <tr>
                <th style="background:#fff;"></th>
                <th width="15%">Account Code</th>
                <th width="25%">Account Name</th>
                <th width="30%">Particulars</th>
                <th width="15%">Debit</th>
                <th width="15%" style="text-align:center; ">Credit</th>
                <th style="background:#fff;"></th>
            </tr>

            <?php
                $coas = TblCoaMySqlExtDAO::hideCoaData('');
            if (/* $task == "view" &&  */ isset($journalines) && !empty($journalines)) {
                if ($task == "view") {
                    foreach ($journalines as $journaline) {
                        $jlCoa = DAOFactory::getTblCoaDAO()->load($journaline->accountCode);
                        ?>
                        <tr id="tbJournalform2">
                            <td  style="border:none;"><input type="button" name="delete"  class="del deltask" onclick="deleteRow(this)" disabled /></td>
                            <td class="jdJournalCode"><?php echo $jlCoa->accountNum; ?></td>
                            <td class="tdJournal"><?php echo $jlCoa->accontName; ?></td>
                            <td class="tdJournal"><input type="text" readonly class="textTableText2 particular" name="particulars[]" value="<?php echo $journaline->particulars ?>" required></td>
                            <td class="tdJournal"><input type="text" readonly class="textTableText isNumeric debit" style="text-align:right!important;" value="<?php echo number_format((float) $journaline->debit, 2) ?>" name="debit[]" required></td>
                            <td class="tdJournal"><input type="text" readonly class="textTableText isNumeric credit" style="text-align:right!important;" value="<?php echo number_format((float) $journaline->credit, 2) ?>" name="credit[]" required></td>
                            <td  style="border:none;">
                                <div class="adel">
                                    <input type="button" name="add"  class="a addtask" id="addtask" disabled />                 
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    foreach ($journalines as $journaline) {
                        $jlCoa = DAOFactory::getTblCoaDAO()->load($journaline->accountCode);
                        ?>
                        <tr id="tbJournalform2">
                            <td style="border:none;"><input type="button" name="delete"  class="del deltask" onclick="deleteRow(this)"  /></td>
                            <td class="jdJournalCode"><?= $jlCoa->accountNum ?></td>
                            <td class="tdJournal">
                                <select name="accountCode[]" class="accountCode genSelectPicker" required>
                                    <option></option>
                                    <?php
                                    foreach ($coas as $coa) {
                                        ?>
                                        <option value="<?php echo $coa->id ?>" <?= $coa->id == $journaline->accountCode ? 'SELECTED' : '' ?> title="<?= $coa->accountNum ?>">
                                            <?php echo /*$coa->accountNum . '-' .*/ str_replace('?', '-', $coa->accontName); //iconv('UTF-8', 'ASCII//TRANSLIT', $coa->accontName);  ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </td>
                            <td class="tdJournal"><input type="text" class="textTableText2 particular" name="particulars[]" value="<?php echo $journaline->particulars ?>" required></td>
                            <td class="tdJournal" ><input type="text" class="textTableText isNumeric debit" style="text-align:right" value="<?php echo number_format((float) $journaline->debit, 2) ?>" name="debit[]" required></td>
                            <td class="tdJournal"><input type="text" class="textTableText isNumeric credit" style="text-align:right" value="<?php echo number_format((float) $journaline->credit, 2) ?>" name="credit[]" required></td>
                            <td style="border:none;">
                                <div class="adel">
                                    <input type="button" name="add"  class="a addtask" id="addtask"  />                 
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                }
            } else {
                $count = 1;
                while ($count <= 2) {
                    ?>
                    <tr id="tbJournalform2">
                        <td style="border:none;"><input type="button" name="delete"  class="del deltask" onclick="deleteRow(this)" /></td>
                        <td class="jdJournalCode"></td>
                        <td class="typecontent tdJournal"> 
                            <select name="accountCode[]" class="accountCode genSelectPicker" required>
                                <option></option>
                                <?php
                                foreach ($coas as $coa) {
                                    ?>
                                    <option value="<?php echo $coa->id ?>" title="<?= $coa->accountNum ?>"><?php echo /*$coa->accountNum . '-' .*/ str_replace('?', '-', $coa->accontName); //iconv('UTF-8', 'ASCII//TRANSLIT', $coa->accontName);       ?></option>
                                    <?php
                                }
                                ?>
                            </select></td>
                        <td class="tdJournal"><input type="text" class="textTableText2 particular" name="particulars[]" required></td>
                        <td class="tdJournal"><input type="text" class="textTableText isNumeric debit" style="font-style:Agency FB; border:none;text-align:right; font-weight:bold;" value="0.00" name="debit[]" required></td>
                        <td class="tdJournal"><input type="text" class="textTableText isNumeric credit" style="font-weight:bold; font-style:Agency FB; border:none; text-align:right;" value="0.00" name="credit[]" required></td>
                        <td style="border:none;">
                            <div class="adel">
                                <input type="button" name="add"  class="a addtask" id="addtask" />                 
                            </div>
                        </td>
                    </tr>
                    <?php
                    $count++;
                }
            }
            ?>
        </table>
        <div style="margin-left:26px;margin-top:12px;">
            <?php if ($task == 'addjournal' || $task == 'updatejournal') { ?>
                <input type="button" value="ADD LINE" class="addLineJournal addsavebuttonpop" id="addtask">
                <input type="hidden" name ="task" value="<?php echo $task ?>" />
            <?php } ?>
        </div>
        <div class="totalJournal">Total: &nbsp &nbsp 
            <input type="text" readonly class="textTotalJournal numeric" style="color:#000;" value="<?php echo number_format((float) $journal->amount, 2) ?>" name="totaldebit"> 
            <input type="text" readonly class="textTotalJournal numeric" style="color:#000;margin-left:51px;" value="<?php echo number_format((float) $journal->amount, 2) ?>" name="totalcredit"></div>
        <div class="buttonJournal">
            <?php if ($task == 'addjournal' || $task == 'updatejournal' && ($useraccess->Add == 'yes' || $useraccess->Edit == 'yes')) { ?>
                <input type="submit" class="addsavebutton journalSave addsavebuttonpop" value="Save">
                <input type="submit" class="JournalPost addsavebutton journalEntryPost addsavebuttonpop" value="Post">
                <input type="hidden" name ="task" value="<?php echo $task ?>" />
                <input type="hidden" name="status" value="" />
            <?php } ?>
        </div>
    </form>
</div>
<div class="hidden popup"></div>
<script>

    $(function () {

        $('.journalSave').click(function () {
            $('input[name="status"]').val('open');
        });

        $('.journalEntryPost').click(function () {
            $('input[name="status"]').val('posted');
        });

        $('.journalentryform').submit(function () {
            if (getInt($('input[name="totaldebit"]').val()) == 0 && getInt($('input[name="totalcredit"]').val()) == 0) {
                alert('Total debit and credit should not be zero.');
                return false;
            }
            if ($('input[name="totaldebit"]').val().replace(/,/g, '') != $('input[name="totalcredit"]').val().replace(/,/g, '')) {
                alert('Total debit should be equal total credit');
                return false;
            }

            journalStatus = $('input[name="status"]').val();
            journalStatus2 = '';
            if (journalStatus == 'open') {
                journalStatus2 = 'save';
            } else {
                journalStatus2 = 'post';
            }


            confirmSubmit = confirm('Do you want to ' + journalStatus2 + ' the transaction?');
            if (confirmSubmit) {
                $('body').css('overflow', 'hidden');
                $('.popup').html('<div class="loadingHolder"><img src="<?= URL ?>public/images/processing2.gif" class="loadingimg" /></div>');
                $('.popup').removeClass('hidden');
                saveForm();
            }
            return false;
        });
        $('.journalEntryPost').click(function () {
            $('input[name="status"]').val('posted');
        });

        function saveForm() {
            $.post(URL + 'accounting/setJournal', $('.journalentryform').serialize())
                    .done(function (returnData) {
                        if (returnData == 0) {
                            location.reload();
                        } else {
                            alert(returnData);
                            $('body').css('overflow', 'auto');
                            $('.popup').addClass('hidden');
                        }
                    });
        }


        $(document).on("keyup", ".debit", function (event) {
            if ($(this).val().replace(/,/g, '') > 0) {
                $(this).parents('tr').find('.credit').val("0.00");
            }
            myIndex = $(".debit").index(this);
            lastIndex = $(".debit").length;
            let key = event.which;                
                    switch(key) {
                      case 37:
                          // Key left.
                          
                          break;
                      case 38:
                          // Key up.
                          if(myIndex > 0) {
                            $(".debit:eq("+(myIndex-1)+")").focus();
                          }
                          break;
                      case 39:
                          // Key right.
                          $(".credit:eq("+(myIndex)+")").focus();
                          break;
                      case 40:
                          // Key down.
                          if(myIndex < lastIndex) {
                            $(".debit:eq("+(myIndex+1)+")").focus();
                          }
                          break;
                }   
            computeTotal();
        });

        $(document).on("keyup", ".credit", function (event) {
            if ($(this).val().replace(/,/g, '') > 0) {
                $(this).parents('tr').find('.debit').val("0.00");
            }
            myIndex = $(".credit").index(this);
            lastIndex = $(".credit").length;
            let key = event.which;                
                    switch(key) {
                      case 37:
                          // Key left.
                          $(".debit:eq("+(myIndex)+")").focus();
                          break;
                      case 38:
                          // Key up.
                          if(myIndex > 0) {
                            $(".credit:eq("+(myIndex-1)+")").focus();
                          }
                          break;
                      case 39:
                          // Key right.
                          break;
                      case 40:
                          // Key down.
                          if(myIndex < lastIndex) {
                            $(".credit:eq("+(myIndex+1)+")").focus();
                          }
                          break;
                }   
            computeTotal();
        });


        accountCodeChange();
    });

    function accountCodeChange() {
        $(".accountCode").unbind("change");
        $(".accountCode").bind("change",function(){
            $object = $(this);
            let code = $(this).find('option:selected').attr('title');
            $($object).parents('tr').find('.jdJournalCode').html(code);

            $objtype = $($object).parents('tr').find('.type').val();
            $('.accountCode').each(function () {
                $currtype = $(this).parents('tr').find('.type').val();
                if ($(this).closest('td').parent()[0].sectionRowIndex != $($object).closest('td').parent()[0].sectionRowIndex) {
                    if ($(this).val() == $($object).val() && $objtype == $currtype) {
                        alert('Account name already selected!');
                        $($object).parents('tr').find(".accountCode option:first").attr('selected', 'selected');
                        return false;
                    }
                }
            });
        });
    }
    function computeTotal() {
        totaldebit = totalcredit = 0;
        $('.accountCode').each(function (i) {
            totaldebit += parseFloat($(this).parents('tr').find('.debit').val().replace(/,/g, ''));
            totalcredit += parseFloat($(this).parents('tr').find('.credit').val().replace(/,/g, ''));
        });

        $('input[name="totaldebit"]').val($.number(totaldebit, 2));
        $('input[name="totalcredit"]').val($.number(totalcredit, 2));

        if (totaldebit != totalcredit) {
            $('input[name="totaldebit"]').css('color', 'red');
            $('input[name="totalcredit"]').css('color', 'red');
        } else {
            $('input[name="totaldebit"]').css('color', 'black');
            $('input[name="totalcredit"]').css('color', 'black');
        }
    }
</script>