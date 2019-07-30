<?php
$tbltask = $this->task;
$task = 'addtask';
Session::setSession('taskid', '');
if (isset($_POST['taskid'])) {
    $taskid = $_POST['taskid'];
    Session::setSession('taskid', $taskid);
    $task = 'updatetask';
}
?>
<style>
    .invoiceHolderCNTs{
        width: 100%;
        margin-top: 70px;
    }

    .divCNTsBelow{
        height: 50px;
        float: right;
        margin-bottom: -22px;
        margin-top:15px;
    }
    .cnt-formCNTs{
        width: 377px;
        margin: auto !important;
        font-size: 12px;
        background: #fff;
        padding: 30px;
    }
    .cnt-headCNTs{
        font-size:30px;
        font-family:agency fb2;
        margin-top: -7px;
    }
    .closeCNTs{
        background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 24px;
        right: 355px;
        top: 66px;
        outline-style: none;
        cursor: pointer;
        float: right;
        margin-top: -27px;
        margin-right: -27px
    }
    .NewCheck{
        margin-top: -19px;
        margin-left: 42;
        float: left;
    }
    .taskACNTs{
        color: #000000;
        font-family:Verdana;
        font-size:12px;
    }
    .taskCheckNew{
        color: #003366;
        font-family: Agency FB;
        font-size: 12px;
        margin-left: 3px;
        -webkit-transform: scale(0.7);
        width: 19px;
        height: 28px;
    }
    .tAccountCNTs{
        margin-left: 5px;
        width: 248px;
        height: 27px;
        background-color: white;
        font-family:Verdana;
        font-size: 12px;
        border: solid 1px #C8C8C8;
        padding:5px;
    }
    .checkLabel{
        font-size: 12px;
        font-family: Agency FB;
        color: #000000;
    }
    .createNewTasksTble{
        float: right;
        margin-top: -50px;
        margin-right:20px; 
    }
    .rph{
        font-family:Verdana;
        font-size: 12px;
        margin-left: 5px;
        height: 27px;
        width: 248px;
        padding:5px;
        border: solid 1px #C8C8C8;
        margin-top:3px;
    }
    .descTCNTs{
        color: #000000;
        font-family:Verdana;
        font-size:12px;
        /* font-weight: bold; */
        margin-top: -42px;
    }
    .itemICNTs{
        width: 248px;
        height:90px;
        background-color: white;
        font-family:Verdana;
        font-size: 12px;
        border: solid 1px #C8C8C8;
        margin-left: 5px;
        max-width: 248px;
        max-height:90px;
        padding:5px;
        margin-top:3px;
    }
    .rphCNTs{
        color: #003366;
        font-family: Agency FB;
        font-size: 12px;
    }
    .rphICNTs{
        width: 130px;
        height: 30px;
        background-color: white;
        font-family: Agency FB;
        font-size: 12px;
        border: solid 1px #C8C8C8;
    }
    .vatCNTs{
        color: #003366;
        font-family: Agency FB;
        font-size: 12px;
    }
    .vatSCNTs{
        width: 150px;
        height: 30px;
        background-color: white;
        font-family: Agency FB;
        font-size: 12px;
        border: solid 1px #C8C8C8;
        margin-left: 20px;
        margin-top: 5px;
    }
    .saveBCNTs{
        margin-right:10px;
        width: 100px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }
    .saanBCNTs{
        width: 123px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }
    .taskstables td{
        padding-top:0px;
    }	


</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<script>
    $(function () {

        $('#formtask').submit(function () {
            type = 'new';
            saveTask();

            return false;
        });
        $('#saveAddNew').click(function () {
            type = 'savenew';
            saveTask();
        });

        function saveTask() {
            task = $('.forTaskTask').val();
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>timeTracking/checkDuplicate", {'checkitem': 'task', text: $('input[name="taskCode"]').val()},
                    function (result) {
                        checkresult = result;
                    });

            if (checkresult >= 1) {
                alert('Service code already exist/record already in used in transaction(s)');
                return false;
            }

            $.ajaxSetup({async: false});

            $.post("<?= URL ?>invoice/checkDuplicate", {'checkitem': 'task', text2: $('input[name="description"]').val()},
                    function (result) { //alert(result);
                        checkresult = result;
                    });

            if (checkresult >= 1) {
                alert('Service Item description already exist/record already in used in transaction(s)');
                return false;
            }

            if ($('#formtask input[name="task"]').val() == 'addTaskOption') {
                confirmPost = confirm('Do you want to add new Service Item?');
            } else {
                confirmPost = confirm('Do you want to save changes you made for this record?');
            }

            if (!confirmPost) {
                return false;
            }

            $.post(URL + 'invoice/addtaskOption', $('#formtask').serialize())
                    .done(function (returnData) {
                        if (task == 'addTaskOption') {
                            // $('.jsHolder').html(returnData);
                            $('.taskfrm').addClass('hidden');
                            $('.popBack').addClass('hidden');
                            $('body').css('overflow', 'auto');

                            sinimulan = $(object).parent("td").parent("tr").index();
                            if (sinimulan == 1) {
                                sinimulan = 2;
                            }

                            $('#formtask')[0].reset();
                            $.ajaxSetup({async: false});
                            returns = $.ajax({
                                url: "<?= URL ?>invoice/getTaskOptions",
                                type: "POST",
                                dataType: "JSON",
                                success: function (jsonStr) {
                                    // alert(jsonStr.length);
                                    $('select[name="taskid[]"]').each(function () {
                                        value = $(this).val();
                                        str = '<option></option>';
                                        for (x = 0; x < jsonStr.length; x++) {
                                            str = str + '<option value="' + jsonStr[x].id + '" ' + (value == jsonStr[x].id ? ' selected ' : '') + '>'
                                                    + '' + jsonStr[x].description + '</option>';
                                        }
                                        str = str + '<option value="addtask">[Add Service Item]</option>';
                                        $(this).html(str);
                                    });
                                    selectedVale = $('.table1-new').find('tr:nth-child(' + sinimulan + ') td:nth-child(2) select option:nth-last-child(2)').val();

                                    $('.table1-new').find('tr:nth-child(' + sinimulan + ') td:nth-child(2) select').val(selectedVale);
                                    $('.table1-new').find('tr:nth-child(' + sinimulan + ') td:nth-child(2) select').change();

                                    eventLoader();
                                    function eventLoader()
                                    {
                                        $('.table1-new').find('tr').mouseover(function () {
                                            $(this).find('#addtask').addClass('a-hover');
                                            $(this).find('.deltask').addClass('del-hover');
                                        });

                                        $('.table1-new').find('tr').mouseout(function () {
                                            $(this).find('#addtask').removeClass('a-hover');
                                            $(this).find('.deltask').removeClass('del-hover');
                                        });
                                        $('.table2-new').find('tr').mouseover(function () {
                                            $(this).find('#additem').addClass('a-hover');
                                            $(this).find('.delitem').addClass('del-hover');
                                        });

                                        $('.table2-new').find('tr').mouseout(function () {
                                            $(this).find('#additem').removeClass('a-hover');
                                            $(this).find('.delitem').removeClass('del-hover');
                                        });
                                    }

                                }
                            });
                            $.ajaxSetup({async: true});
                        } else if (type == 'savenew') {
                            $.post(URL + 'invoice/task')
                                    .done(function (returnData) {
                                        $('.popBack').removeClass('hidden');
                                        $('body').css('overflow', 'hidden');

                                        $('.popBack').html(returnData);

                                        $('.closeCNTs').click(function () {
                                            $('.popBack').addClass('hidden');
                                            $('.returnurl').val('');
                                            $('body').css('overflow', 'auto');
                                            window.location.reload();
                                        });
                                    })
                                    .fail(function () {
                                        alert('Connection Error!');
                                    });
                        } else {
                            location.reload();
                        }
                    })
                    .fail(function () {
                        alert('Connection Error!');
                        location.reload();
                    });
        }
    });
</script>
<?php
if (isset($_GET['returnurl'])) {
    Session::setSession('returnurl', $_GET['returnurl']);
}
?>
<div class="jsHolder">
    <!-- pls do not remove this -->
</div>
<!--<link href="<?= URL ?>views/time/css/ajax.css" rel="stylesheet" type="text/css">-->
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="invoiceHolderCNTs">
    <form method="post" action="<?php echo URL ?>invoice/tasks" class="cnt-formCNTs boxshadow" id="formtask">
        <div id="newCNTs" class="popheadings">
            <input type="button" class="closeCNTs" value="x">
            <p class="cnt-headCNTs"><?php echo ($task == 'addtask') ? 'CREATE NEW' : 'UPDATE' ?> SERVICE ITEM</p>
        </div>

        <div>
            <table class="taskstables">	

                <tr>
                    <td class="taskACNTs">Service Item No.:</td>

                    <td>
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <input type="text" class="tAccountCNTs" name="taskCode" value="<?php echo $tbltask->taskCode ?>" required>
                        <span style="color:red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="taskACNTs">Description:</td>
                    <td>
                        <input type="text" class="tAccountCNTs" name="description" style="margin-top:3px;" value="<?php echo $tbltask->description ?>" required>
                        <span style="color:red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td><div class="descTCNTs">Particulars:</div></td>
                    <td><textarea class="itemICNTs" name="particular"  id="particular"><?php echo $tbltask->particular ?></textarea></td>
                </tr>	
                <tr>	
                    <td class="taskACNTs">Amount:</td>
                    <td>
                        <input type="text" class="rph isNumeric" name="ratePerHour" value="<?php echo Controller::getFloat($tbltask->ratePerHour) ?>" required style="border: solid 1px #C8C8C8;">
                        <span style="color:red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="taskACNTs">Active Account</td>
                    <td><input type="checkbox" checked class="taskCheckNew" name="active"></td>
                </tr>
            </table>

            <table class="createNewTasksTble">

<!--                <tr>
    <td><input type="checkbox" value="yes" class="InclusiveOfVatCreatecheck" name="vatInclusive" <?php echo ($tbltask->vatInclusive == 'yes') ? 'checked' : '' ?>></td>

</tr>-->
            </table>

        </div>

        <div class="divCNTsBelow">	
            <input type="hidden" name="checkitem" value="task"/>
            <?php if ($useraccess->Add == 'yes' || $useraccess->Edit == 'yes') { ?>
                <input type="submit" value="Save" class="saveBCNTs addsavebuttonpop saveButtonsPop">
            <?php } ?>
            <!--?php if (Session::getSession('function') != 'add' && Session::getSession('function') != 'newRecurring') { ?-->
            <?php if (!isset($_POST['view']) && $useraccess->Add == 'yes' && $tbltask->id == '') { ?>
                <input type="button" value="Save And Add New" class="saanBCNTs addsavebuttonpop saveAddButtonsPop" id="saveAddNew">
            <?php } ?>
        </div>

        <input type="hidden" name="task" class="forTaskTask addsavebuttonpop" value="<?php echo $task ?>"/>
        <div style="clear:both"></div>
    </form>
</div>
<?php
if ($tbltask->id != '') {
    $invoice = DAOFactory::getTblCashInvoiceLinesDAO()->queryByTaskId($tbltask->id);
    if (isset($invoice) && !empty($invoice)) {
        ?>
        <script>
            $('input[name="taskCode"]').prop('readonly', true);
            $('input[name="description"]').prop('readonly', true);
        </script>
        <?php
    } else {
        $invoice = DAOFactory::getTblInvoiceLinesDAO()->queryByTaskId($tbltask->id);
        if (isset($invoice) && !empty($invoice)) {
            ?>
            <script>
                $('input[name="taskCode"]').prop('readonly', true);
                $('input[name="description"]').prop('readonly', true);
            </script>
            <?php
        }
    }
}
?>