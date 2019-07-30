<?php // Session::setSession('orgid', '46');                           ?>
<style>
    a:hover{
        color: black;
    }
    .taskid{
        width: 100%;
        height: 100%;
        border: none;
    }
    .table1-new tr:hover{
        background-color: #c8c8c8;
    }
    .table2-new tr:hover{
        background-color: #c8c8c8;
    }
    table1-newRecur td{
        padding: 0
    }
    .additionalRecurr{
        margin-top: 16px;
        margin-left: 40px;
        margin-bottom: 0px;
    }
    .taskCheck{
        margin-top: 4px;
    }
    .taskCheck2{
        color: #000000;
        font-size: 12px;
        font-family: calibri;
        margin-left: 75px;
        font-weight: normal;
        margin-top: -14px;
    }
    .taskCheck22{
        color: #000000;
        font-size: 12px;
        font-family: verdana;
        /*margin-left: 24px;*/
        font-weight: normal;
        margin-top: -16px;
    }
    .taskCheck2{
    }
    .taskCheck3{
        color: #000000;
        font-size: 12px;
        font-family: verdana;
        /*margin-left: 97px;*/
        font-weight: normal;
        margin-top: -16px;
    }
    .isNumericDiscount{
        border: 1px solid #C8C8C8;
    }
    .arightNew4{
        text-align: right;
        padding: 6px;
        width: 113px;
    }
</style>
<script>
    newrecord = "new";
</script>
<script>
    $(function() {
        $('#addtasks').click(function() {
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>invoice/invoiceTask",
                    function(result) {
                        $('.table1-new > tbody:last').append(result);
                    });
            $.ajaxSetup({async: true});
        });

        $(document).on("click", "#additem", function() {
            additem($(this));
        });

        function additem($object) {
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>invoice/invoiceItems",
                    function(result) {
                        $('.table2-new > tbody:last').append(result);
                        eventLoader();
                    });
            $.ajaxSetup({async: true});
           /*  $($object).parents('tr').find('.adddel').remove();
            $($object).parents('tr').find('.slash').remove();
            $($object).parents('tr').find('.additem').remove(); */
        }

        $(document).on("click", "#addtask", function() {
            addtask($(this));
        });

        function addtask($object) {
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>invoice/invoiceTask",
                    function(result) {
                        $('.table1-new > tbody:last').append(result);
                        eventLoader();
                    });
            $.ajaxSetup({async: true});
            /* $($object).parents('tr').find('.adel').remove();
            $($object).parents('tr').find('.slash').remove();
            $($object).parents('tr').find('.addtask').remove(); */
        }

        $("#size").change(function() {
            if ($(this).val() == "addtask") {
                addtask($('.taskid').last());
            } else if ($(this).val() == "additem") {
                additem($('.items').last());
            }
        })



        $(document).on("keyup", ".rate", function() {
            $(this).parents('tr').find('.tasknet').val($.number($(this).val().replace(/,/g, '') * $(this).parents('tr').find('.hour').val().replace(/,/g, ''),2));
            subTotal();
        });
        $(document).on("keyup", ".hour", function() {
            $(this).parents('tr').find('.tasknet').val($.number($(this).val().replace(/,/g, '') * $(this).parents('tr').find('.rate').val().replace(/,/g, ''),2));
            subTotal();
        });
        $(document).on("keyup", ".unitCost", function() {
            $(this).parents('tr').find('.itemnet').val($.number($(this).val().replace(/,/g, '') * $(this).parents('tr').find('.quantity').val().replace(/,/g, ''),2));
            subTotal();
        });
        $(document).on("keyup", ".quantity", function() {
            $(this).parents('tr').find('.itemnet').val($.number($(this).val().replace(/,/g, '') * $(this).parents('tr').find('.unitCost').val().replace(/,/g, ''),2));
            subTotal();
        });
        $(document).on("change", "#client", function() {
            if ($(this).val() == 'addclient') {
                $('#client option').removeAttr('selected')
                        .filter('[value=""]')
                        .attr('selected', true);
//                $('.popBack').html(returnData);
                $('.popBack').removeClass('hidden');
                $('.clientfrm').removeClass('hidden');
                $('.returnurl').val('recurring');
                $('body').css('overflow', 'hidden');

                $('.close1Client').click(function() {
                    $('.popBack').addClass('hidden');
                    $('.clientfrm').addClass('hidden');
                    $('.returnurl').val('');
                    $('body').css('overflow', 'auto');
                });
                return false;
            } else if ($(this).val() != '') {
                $.ajax({
                    url: "<?php echo URL ?>invoice/getAddress",
                    type: "POST",
                    data: {
                        clientId: $(this).val()
                    },
                    dataType: "JSON", async: false,
                    success: function(jsonStr) {
                        $('#address').text(jsonStr.address);
                        $('#currencyId option').removeAttr('selected')
                                .filter('[value="' + jsonStr.currencyId + '"]')
                                .attr('selected', true);

                        if (jsonStr.currencyId == 33) {
                            $("input[name='crate']").addClass('hidden');
                            $("input[name='crate']").removeAttr('required');
                            $('#ratetxt').addClass('hidden');
                        } else {
                            $("input[name='crate']").removeClass('hidden');
                            $("input[name='crate']").prop('required', 'required');
                            $('#ratetxt').removeClass('hidden');
                        }
                    }
                });
            }
            subTotal();
//            if ($(this).val() !== 'addclient' && $(this).val() !== '') {
//
//                $.post('<?php echo URL ?>invoice/getAddress', {clientId: $(this).val()},
//                function(result) {
//                    $('#address').text(result);
//                });
//                subTotal();
//            }
        });
        $(document).on("keyup", "input[name='discount']", function() {
            subTotal();
        });
        $(document).on("click", ".deltask", function() {
            $(this).parents('tr').remove();
            subTotal();
        });
        $(document).on("click", ".delitem", function() {
            $(this).parents('tr').remove();
            subTotal();
        });

//        $('#client').click(function() {
//            $.post('<?php echo URL ?>invoice/getAddress', {clientId: $(this).val()},
//            function(result) {
//                $('#address').text(result);
//            });
//        });
        $(document).on("click", ".delitem", function() {
            $(this).parents('tr').remove();
        });
        $(document).on("change", ".taskid", function() {
            object = $(this);
            $activeobjct = $(this);
//            alert($activeobjct.val());
//            $('.popBack').empty();
            if ($(this).val() === 'addtask') {
//                $('.popBack').html($htmltask);
                $(this).addClass('activeObj');
                $('.popBack').removeClass('hidden');
                $('.taskfrm').removeClass('hidden');
                $('.returnurl').val('invoice');
                $('body').css('overflow', 'hidden');

                $('.closeCNTs').click(function() {
                    $('.popBack').addClass('hidden');
                    $('.taskfrm').addClass('hidden');
                    $('.returnurl').val('');
                    $('body').css('overflow', 'auto');
                });

            }
            if ($(this).val() !== 'addtask') {
                $.ajax({
                    url: "<?= URL ?>invoice/getTaskDescription",
                    type: "POST",
                    data: {
                        taskid: $(this).val()
                    },
                    dataType: "JSON", async: false,
                    success: function(jsonStr) {
                        description = jsonStr.description;
                        rate = jsonStr.rate;
                        $(object).parents('tr').find('.description').val(description);
                        $(object).parents('tr').find('.rate').val($.number(rate, 2));
                        $(object).parents('tr').find('.hour').val('1');
                        $(object).parents('tr').find('.tasknet').val($.number((rate * $(object).parents('tr').find('.hour').val()),2));
                    }
                });

            }
            subTotal();
            return false;
        });
        $(document).on("change", ".items", function() {
            object = $(this);
            $activeobjct = $(this);
            $(object).parents('tr').find('.description').val('');
            $(object).parents('tr').find('.unitcost').val('');
            $(object).parents('tr').find('.quantity').val(1);
            $(object).parents('tr').find('.itemnet').val('');

            if ($(this).val() === 'additem') {
                $(this).addClass('activeObj');
                $('.activeObj option').removeAttr('selected')
                        .filter('[value=""]')
                        .attr('selected', true);
                $('.popBack').removeClass('hidden');
                $('.itemfrm').removeClass('hidden');
                $('.returnurl').val('invoice');
				$('body').css('overflow','hidden');
				
                $('.closeNewItem').click(function() {
                    $('.popBack').addClass('hidden');
                    $('.itemfrm').addClass('hidden');
					$('body').css('overflow','auto');
                });
            }
            if ($(this).val() !== 'additem') {
                $.ajax({
                    url: "<?= URL ?>invoice/getItemDescription",
                    type: "POST",
                    data: {
                        itemid: $(this).val()
                    },
                    dataType: "JSON", async: false,
                    success: function(jsonStr) {
                        description = jsonStr.description;
                        unitcost = jsonStr.unitcost;
                        $(object).parents('tr').find('.description').val(description);
                        $(object).parents('tr').find('.unitcost').val($.number(unitcost, 2));
                        $(object).parents('tr').find('.itemnet').val($.number(unitcost * $(object).parents('tr').find('.quantity').val(),2));
                    }
                });
            }

            subTotal();
        });
        $('input[name="dueDate"]').change(function() {
            date1 = new Date($('input[name="dateIssued"]').val());
            date2 = new Date($(this).val());
//        $('input[name="dateIssued"]').getTime()
            diff = (Math.floor((date2.getTime() - date1.getTime()) / 86400000)); // ms per day);

            if (diff < 7) {
                alert('Due date should be 7 days or more ahead from start date');
            }
        });

        $('#currencyId').change(function() {
            if ($('#currencyId :selected').text() == "PHP") {
                $("input[name='crate']").addClass('hidden');
                $("input[name='crate']").removeAttr('required');
                $('#ratetxt').addClass('hidden');
            } else {
                $("input[name='crate']").removeClass('hidden');
                $("input[name='crate']").prop('required', 'required');
                $('#ratetxt').removeClass('hidden');
            }
        });

        $('#taskcheck').click(function() {
//            alert($(this).val());
//            $(this).removeAttr('checked');
            if ($(this).is(':checked')) {
                $('.table1-new').removeClass('hidden');
                $('.taskid').each(function(i) {
                    $(this).prop('required', 'required');
                });
//                $(this).attr('checked', 'checked');
            } else {
                $('.table1-new').addClass('hidden');
                $('.taskid').each(function(i) {
                    $(this).removeAttr('required');
                });

            }
//            $(this).removeAttr('checked');
//            return false;
        });

        $('#itemcheck').click(function() {
//            alert($(this).val());
//            $(this).removeAttr('checked');
            if ($(this).is(':checked')) {
                $('.table2-new').removeClass('hidden');
                $('.items').each(function(i) {
                    $(this).prop('required', 'required');
                });

                $('.quantity').each(function(i) {
                    $(this).prop('required', 'required');
                });
//                $(this).attr('checked', 'checked');
            } else {
                $('.table2-new').addClass('hidden');
                $('.items').each(function(i) {
                    $(this).removeAttr('required');
                });

                $('.quantity').each(function(i) {
                    $(this).removeAttr('required');
                });
            }
//            $(this).removeAttr('checked');
//            return false;
        });
    });

    function subTotal() {
        subtotal = 0;
        discounttotal = 0;
        rate = 0;
        vattotal = 0;
        if ($('#taskcheck').is(':checked')) {
            $('.taskid').each(function(i) {
                object = $(this);
                $.ajaxSetup({async: false});
                $.ajax({
                    url: "<?= URL ?>invoice/calcVat",
                    type: "POST",
                    data: {
                        clientId: $('#client').val(), type: 'task'
                    },
                    dataType: "JSON",
                    success: function(jsonStr) {
                        isvatable = jsonStr.vatable;
                        rate = jsonStr.rate;
                        discountamt = parseFloat($(object).parents('tr').find('.tasknet').val().replace(/,/g, '')) * $('input[name="discount"]').val() / 100;
                        discount = parseFloat($(object).parents('tr').find('.tasknet').val().replace(/,/g, '')) - discountamt;
                        discounttotal += discountamt;
                        vat = discount * rate / 100;
                        vattotal += vat;
//                        vat += parseFloat($(object).parents('tr').find('.tasknet').text()) * result / 100;
                        if (isvatable == 'yes') {
                            subtotal += parseFloat($(object).parents('tr').find('.tasknet').val().replace(/,/g, '')) - vat;
                        } else {
                            subtotal += parseFloat($(object).parents('tr').find('.tasknet').val().replace(/,/g, ''));
                        }
                        //alert($(object).parents('tr').find('.tasknet').text());
                    }
                });
                $.ajaxSetup({async: true});
            });
        }

        if ($('#itemcheck').is(':checked')) {
            $('.items').each(function(i) {
                object = $(this);
                $.ajaxSetup({async: false});
                $.ajax({
                    url: "<?= URL ?>invoice/calcVat",
                    type: "POST",
                    data: {
                        clientId: $('#client').val(), type: 'item'
                    },
                    dataType: "JSON",
                    success: function(jsonStr) {
                        isvatable = jsonStr.vatable;
                        rate = jsonStr.rate;
                        discountamt = parseFloat($(object).parents('tr').find('.itemnet').val().replace(/,/g, '')) * $('input[name="discount"]').val() / 100;
                        discount = parseFloat($(object).parents('tr').find('.itemnet').val().replace(/,/g, '')) - discountamt;
                        discounttotal += discountamt;
//                        vat = parseFloat($(object).parents('tr').find('.itemnet').text()) * rate / 100;
                        vat = discount * rate / 100;
                        vattotal += vat;
                        if (isvatable == 'yes') {
                            subtotal += parseFloat($(object).parents('tr').find('.itemnet').val().replace(/,/g, '')) - vat;
                        } else {
                            subtotal += parseFloat($(object).parents('tr').find('.itemnet').val().replace(/,/g, ''));
                        }

                    }
                });
                $.ajaxSetup({async: true});
            });
        }

        $('#subtotal').val(parseFloat(subtotal).toFixed(2));
        $('#vat').val(parseFloat(vattotal).toFixed(2));
        $('#discount').val(parseFloat(discounttotal).toFixed(2));
        $('#invoicetotal').val(parseFloat(subtotal + vattotal - discounttotal).toFixed(2));
    }
</script>
<?php
Session::setSession('returnurl', 'recurring');
$recurring = new TblNewRecurring();
$recurring->startDate = date('Y-m-d');
$recurring->endDate = date('Y-m-d');
$taskstat = 'addrecurring';
$subtotal = $vattotal = $discounttotal = 0;
if (isset($_POST['recurringid']) && $_POST['status'] != 'copy') {
    $recurringid = $_POST['recurringid'];
    $recurring = DAOFactory::getTblNewRecurringDAO()->load($recurringid);
    Session::setSession('recurringid', $recurringid);

    $allinvoice = DAOFactory::getTblAllInvoiceDAO()->queryByNewRecurringId($recurringid);
//    print_r($allinvoice); exit;
//    Session::setSession('invoiceid', $allinvoice[0]->newInvoiceId);
    $taskstat = 'updaterecurring';
}
if (isset($_POST['status'])) {
    $status = $_POST['status'];
    if ($status == 'copy') {
        $recurringid = $_POST['recurringid'];
        $recurring = DAOFactory::getTblNewRecurringDAO()->load($recurringid);
    }
}
?>
<div class="invoiceHolder2">
    <div id="new2">
        <p class="headTextNewRecur">New Recurring</p>
        <div class="hrClass3"></div>
    </div>	

    <form method="post" action="<?= URL ?>invoice/recurring" class="form-nRecurring">
        <div id="containerRecurr" style="float:left">
            <table class="tblNew1">

                <tr class="recurTable">
                    <td class="SdateRecurr">Start Date:</td>
                    <td class=""><input type="date" class="inputboxes" class="datepickerRecurr" name="dateIssued" required value="<?php echo $recurring->startDate ?>"></td>
                </tr>

                <tr class="recurTable">
                    <td class="EdateRecur">End Date:</td>
                    <td><input type="date" class="inputbox2" class="datepicker2Recur" name="dueDate" required value="<?php echo $recurring->endDate ?>"></td>
                </tr>
                <tr  class="recurTable">
                    <td class="EdateRecur">Frequency:</td>
                    <td><select class="inputbox2" name="frequency">
                            <option value="weekly" <?php echo ($recurring->frequency == 'weekly') ? 'selected' : '' ?>>Weekly</option>
                            <option value="monthly" <?php echo ($recurring->frequency == 'monthly') ? 'selected' : '' ?>>Monthly</option>
                        </select>
                    </td>
                </tr>

                <tr class="recurTable">
                    <td class="EdateRecur">Client:</td>
                    <td><select class="customerInput" name="clientId" id="client" required>
                            <option></option>
                            <?php
                            $customer = DAOFactory::getTblClientDAO()->queryByOrgId(Session::getSession('orgid'));

                            if (count($customer) > 0) {
                                foreach ($customer as $item) {
                                    if($item->active =='yes' || $item->id == $recurring->clientId){
                                    ?>
                                    <option value="<?php echo $item->id ?>" <?php echo ($item->id == $recurring->clientId) ? 'selected' : '' ?>><?php echo $item->clientAccount .' - '.$item->clientName ?></option>
                                    <?php
                                    }
                                }
                            }
                            ?>
                            <option value="addclient">Add Client</option>
                        </select> 
                    </td>
                </tr>
                <tr class="recurTable">
                    <td class="email">Send by Email</td>
                    <td><input type="checkbox" class="emailbox"></td>
                </tr>

            </table>
            <table class="currencyTable">
                <tr>
                    <td>Currency:</td>
                    <td><select class="exchange" name="currencyId" id="currencyId" required><option><option>
                                <?php
                                $currency = DAOFactory::getTblCurrencyDAO()->queryAll();

                                foreach ($currency as $crrncy) {
                                    ?>
                                <option value="<?php echo $crrncy->id ?>" <?php
                                if ($recurring->currencyId != "") {
                                    if ($crrncy->id == $recurring->currencyId) {
                                        echo "selected";
                                    }
                                }
                                ?>><?php echo $crrncy->code ?></option>
                                    <?php } ?>
                        </select></td>

                    <td style="padding-left:10px;" class="<?php echo ($recurring->currencyId == 33 || $recurring->currencyId == '') ? 'hidden' : '' ?>" id="ratetxt">Exchange Rate:</td>
                    <td><input type="text" class="exchange <?php echo ($recurring->currencyId == 33 || $recurring->currencyId == '') ? 'hidden' : '' ?>" name="crate"></td>

                </tr>
            </table>
            <?php
            $recurringtasklines = TblRecurringLinesMySqlExtDAO::getTasks(($recurring->id != '' ) ? $recurring->id : -1 );
            $recuringitemlines = TblRecurringLinesMySqlExtDAO::getItem(($recurring->id != '' ) ? $recurring->id : -1 );
            ?>
            <div class="additionalRecurr">
                <input type="checkbox" name='taskcheck' id="taskcheck" class="taskCheck"  <?php
                if (count($recurringtasklines) > 0) {
                    echo "checked";
                } elseif ($taskstat == "addrecurring") {
                    echo 'checked';
                }
                ?>>
                <span class="taskCheck22">Task</span>
                <input type="checkbox" name='itemcheck' id="itemcheck" class="taskCheck2"  <?php
                if (count($recuringitemlines) > 0) {
                    echo "checked";
                } elseif ($taskstat == "addrecurring") {
                    echo 'checked';
                }
                ?>>
                <span class="taskCheck3">Item</span>
            </div>
        </div>
        <div class="RecurTable2"style="float:left;margin-left: 103;">
            <table class= "tblNew1">
<!--                <tr class="recurTable22">
                    <td class="poso12">Recurring No:</td>
                    <td><input type="text" class="RecuNoNew textNewPad"  value="<?php echo $recurring->recurringNumber ?>" name="recurringNumber"></td>
                </tr>-->
                <tr class="recurTable22">
                    <td class="poso1New">P.O/S.O:<td>
                    <td><input type="text" class="poso2 textNewPad"  value="<?php echo $recurring->pOSO ?>" name="pOSO" value="<?php echo $recurring->pOSO ?>"></td>
                </tr>
                <tr class="recurTable22">
                    <td class="discount1">Discount:</td>
                    <td><input type="percentage" class="discount2  isNumericDiscount textNewPad nodecimal" name="discount" style="border: 1px solid #C8C8C8; text-align: right; padding:5px;" value="<?php echo $recurring->discount ?>">%</td>
                </tr>
                <tr class="recurTable22">
                    <td class="memo1"><div style="margin-top: -36px;">Particulars:</div></td>
                    <td><textarea input type="text"  placeholder="" class="memo2" name="particular"><?php echo $recurring->particular ?></textarea></td>
                </tr>

            </table>

        </div>	
        <div><img class="image5Recurring1"  src="<?= URL ?>public/images/line3.png"></div>
        <?php
        if (count($recurringtasklines) > 0) {
            ?>
            <table class= "table1-new">
                <tr class="t">
					<th></th>
                    <th class="desc aleft">Task No.</th>
                    <th class="desc aleft">Description</th>
                    <th class="aright RateTH">Rate</th>
                    <th class="aright RateTH">Hour</th>
                    <th class="aright RateTH">Net Amount</th>
					<th></th>
                </tr>
                <tbody>
                    <?php
                    // echo $recurring->id; exit;
//                $invoice = TblNewRecurringMySqlExtDAO::getRecurringInvoice(($recurring->id != '' )? $recurring->id : -1 ); 
//               echo $invoice; exit;
//                echo print_r($recurringlines); exit;
                    $client = DAOFactory::getTblClientDAO()->load($recurring->clientId);


                    foreach ($recurringtasklines as $i => $recurringline) {
                        ?>
                        <tr>
							<td><input type="button" name="delete"  class="del deltask"></td>
                            <td class="tasknoNinvoice">
                                <select name="taskid[]" class="taskid" required>
                                    <option></option>
                                    <?php
                                    $tasks = DAOFactory::getTblTaskDAO()->queryByOrgId(Session::getSession('orgid'));
                                    foreach ($tasks as $task) {
                                        ?>
                                        <option value="<?php echo $task->id ?>" <?php echo $recurringline->taskId == $task->id ? 'selected' : '' ?>><?php echo $task->taskCode ?></option>
                                    <?php } ?>
                                </select>                        
                            </td>
                            <?php
                            $tbltask = DAOFactory::getTblTaskDAO()->load($recurringline->taskId);

                            $discountamt = $recurringline->netAmount * $recurring->discount / 100;
                            $discount = $recurringline->netAmount - $discountamt;
                            $discounttotal += $discountamt;
//                            $vat += $invoiceline->netAmount * DAOFactory::getTblTaxDAO()->load($tbltask->taxId)->rate / 100;

                            if ($client->vatInclusive == 'yes') {
                                $vat = DAOFactory::getTblTaxDAO()->load($client->taxId)->rate * $discount / 100;
                                $subtotal += $recurringline->netAmount - $vat;
                                $vattotal += $vat;
                            } else {
                                $subtotal += $recurringline->netAmount;
                            }
                            ?>
                            <td class=""><input type="text" name="taskDescription[]" value="<?php echo ($recurringline->taskDescription != '') ? $recurringline->taskDescription : $tbltask->description ?>" class="description"/></td>
                            <td class="cc aright"><input type="text" name="rate[]"  class="rate isNumeric linetext" value="<?php echo ($recurringline->rate > 0) ? number_format((float) $recurringline->rate, 2, '.', '') : number_format((float) $tbltask->ratePerHour, 2, '.', '') ?>"/></td>
                            <td class="cc1 aright"><input type="text" name="hour[]" class="hour nodecimal linetext" value="<?php echo $recurringline->hour ?>" required/></td>
                            <td class="aright"><input type="text" class="tasknet isNumeric linetext RateTH recurringLine" value="<?php echo number_format((float) $recurringline->netAmount, 2, '.', '') ?>" readonly/></td>
                            <td>
                                <div class="adel">
                                    <?php if ($i == count($recurringtasklines) - 1) { ?>
                                        <input type="button" name="add"  class="a addtask" id="addtask">
                                       
                                    <?php } ?>
                                    <!--<input type="button" name="delete"  class="del deltask">-->
                                    <?php if ($status != 'copy') { ?>
                                        <input type="hidden" name="invoicetaskid[]" value="<?php echo $recurringline->id ?>" />
                                    <?php } ?>
                                </div>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
            <?php
        } else {
            ?>
            <table class= "table1-new <?php echo ($taskstat == "updaterecurring") ? 'hidden' : '' ?>">
                <tr class="t">
					<th></th>
                    <th class="desc aleft">Task No.</th>
                    <th class="desc aleft">Description</th>
                    <th class="aright RateTH">Rate</th>
                    <th class="aright RateTH">Hour</th>
                    <th class="aright RateTH">Net Amount</th>
					<th></th>
                </tr>
                <tr class="row-item">
					<td><input type="button" name="delete"  class="del deltask"></td>
                    <td class="tasknoNinvoice">
                        <select name="taskid[]" class="taskid" required>
                            <option></option>
                            <?php
                            $tasks = DAOFactory::getTblTaskDAO()->queryByOrgId(Session::getSession('orgid'));
                            if (count($tasks) > 0) {
                                foreach ($tasks as $task) {
                                    ?>
                                    <option value="<?php echo $task->id ?>"><?php echo $task->taskCode ?></option>
                                    <?php
                                }
                            }
                            ?>
                            <option value="addtask">Add Task</option>
                        </select>
                        <!--<a href="/unlibooks/000002">000002 </a>-->
                    </td>
                    <td class=""><input type="text" name="taskDescription[]" class="description"/></td>
                    <td class="cc aright"><input type="text" name="rate[]"  class="rate isNumeric linetext" value="0.00"></td>
                    <td class="cc1 aright tasknoNinvoiceRate"><input type="text" name="hour[]" class="hour linetext nodecimal" required value="0"/></td>
                    <td class="aright"><input type="text" class="tasknet isNumeric linetext isNumeric" value="0" readonly /></td>
                    <td>
                        <div class="adel">
                            <input type="button" name="add"  class="a addtask" id="addtask">
    <!--                                    <span class="slash">/</span>-->
                            <div>
                                <!--<input type="button" name="delete"  class="del deltask" style="margin-left: -1838px;margin-top:-22px;">-->
                            </div>
                        </div>
                    </td>	
                </tr>
                </tbody>
            </table>
            <?php
        }

        if (count($recuringitemlines) > 0) {
            ?>

            <table class= "table2-new">
                <tr class="t">
					<th></th>
                    <th class="arightNewItemNo">Item No.</th>
                    <th class="aleftNewDes">Description</th>
                    <th class="arightNew4">Unit Cost</th>
                    <th class="arightNew4">Qty</th>
                    <th class="arightNew4">Net Amount</th>
					<th></th>
                </tr>
                <tbody>
                    <?php
//                print_r($recuringlines);
                    $client = DAOFactory::getTblClientDAO()->load($recurring->clientId);
                    foreach ($recuringitemlines as $recuringline) {
                        ?>
                        <tr>
							<td><input type="button" name="delete"  class="del delitem"></td>
                            <td class="tasknoNinvoice inVoiceItem">
                                <select name="itemid[]" class="items" required>
                                    <option></option>
                                    <?php
                                    $itms = DAOFactory::getTblItemDAO()->queryByOrgId(Session::getSession('orgid'));
                                    foreach ($itms as $itm) {
                                        ?>
                                        <option value="<?php echo $itm->id ?>" <?php echo $recuringline->itemId == $itm->id ? 'selected' : '' ?>><?php echo $itm->itemCode ?></option>
                                    <?php } ?>
                                </select>                        
                            </td>
                            <?php
                            $tblitem = DAOFactory::getTblItemDAO()->load($recuringline->itemId);
                            $discountamt = $recuringline->netAmount * $recurring->discount / 100;
                            $discount = $recuringline->netAmount - $discountamt;
                            $discounttotal += $discountamt;
//                            $vat += $invoiceline->netAmount * DAOFactory::getTblTaxDAO()->load($tbltask->taxId)->rate / 100;

                            if ($client->vatInclusive == 'yes') {
                                $vat = DAOFactory::getTblTaxDAO()->load($client->taxId)->rate * $discount / 100;
                                $vattotal += $vat;
                                $subtotal += $recuringline->netAmount - $vat;
                            } else {
                                $subtotal += $recuringline->netAmount;
                            }
                            ?>
                            <td class="tasknoNinvoiceDes tasknoNinvoiceDes2"><input type="text" name="itemDescription[]" value="<?php echo ($recuringline->itemDescription != '') ? $recuringline->itemDescription : $tblitem->description ?>" class="description"/></td>
                            <td class="ccc aright2 tasknoNinvoiceRate"><input type="text" name="unitCost[]"  class="unitCost numeric isNumeric linetext" value="<?php echo ($recuringline->unitCost) ? number_format((float) $recuringline->unitCost, 2, '.', '') : number_format((float) $tblitem->unitCost, 2, '.', '') ?>"/></td>
                            <td class="cc2 arightQty"><input type="text" name="quantity[]" class="quantity linetext nodecimal" value="<?php echo $recuringline->quantity ?>" required/></td>
                            <td class="aa aright"><input type="text" class="itemnet isNumeric linetext" value="<?php echo number_format((float) $recuringline->netAmount, 2, '.', '') ?>" readonly/></td>
                            <td>
                                <div class="adddel">
                                    <input type="button" name="add"  class="a additem" id="additem">
                                    
                                   
                                    <?php if ($status != 'copy') { ?>
                                        <input type="hidden" name="invoiceitemid[]" value="<?php echo $recuringline->id ?>" >
                                    <?php } ?>
                                </div>
                            </td>
                        </tr>

                    <?php }
                    ?>
                </tbody>
            </table>
            <?php
        } else {
            ?>
            <table class= "table2-new <?php echo ($taskstat == "updaterecurring") ? 'hidden' : '' ?>">
                <tr class="t">
					<th></th>
                    <th class="arightNewItemNo">Item No.</th>
                    <th class="aleftNewDes">Description</th>
                    <th class="arightNew4">Unit Cost</th>
                    <th class="arightNew4">Qty</th>
                    <th class="arightNew4">Net Amount</th>
					<th></th>
                </tr>
                <tr class="row-item">
					<td><input type="button" name="delete"  class="del delitem"></td>
                    <td class="tasknoNinvoice inVoiceItemRecur">
                        <select class="items" name="itemid[]" required>
                            <option></option>
                            <?php
                            $itms = DAOFactory::getTblItemDAO()->queryByOrgId(Session::getSession('orgid'));

                            if (count($itms) > 0) {
                                foreach ($itms as $i => $itm) {
                                    ?>
                                    <option value="<?php echo $itm->id ?>" ><?php echo $itm->itemCode ?></option>
                                    <?php
                                }
                            }
                            ?>
                            <option value="additem">Add Item</option>
                        </select>
                    </td>
                    <td class="tasknoNinvoiceDes tasknoNinvoiceDes2"><input type="text" name="itemDescription[]" class="description"></td>
                    <td class="ccc aright2 tasknoNinvoiceRate"><input type="text" name="unitCost[]" class="unitCost isNumeric linetext" value="0.00" /></td>
                    <td class="cc2 arightQty"><input type="text" name="quantity[]" class="quantity linetext nodecimal" required value="0" /></td>
                    <td class="aa aright"><input type="text" class="itemnet isNumeric linetext" value="0" readonly /></td>
                    <td>
                        <div class="adddel">

                            <input type="button" name="add"  class="a additem" id="additem">
    <!--                                    <span class="slash">/</span>-->
                            <div>
                                
                            </div>	
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <?php
        }
        ?> 



        <div class="search-box2">
            <div class="size1-container">
                <select name="size" id="size">
                    <option id="sizeLabel" value="0">Add Line</option>
                    <option class="aline" value="addtask">Add Task</option>
                    <option value="additem">Add Item</option>
                </select>
            </div>

        </div>


        <table class="table3-new">
            <tr class="sv" >
                <td>Sub Total:</td>
                <td class="saRecur"><input type="text" id="subtotal" style="border:none;" class="numeric" readonly value="<?php echo number_format((float) $subtotal, 2, '.', '') ?> "/></td>
            </tr>

            <tr class="v">
                <td>Vat:</td>
                <td class="saRecur"><input type="text" id="vat" style="border:none;" class="numeric" readonly value="<?php echo number_format((float) $vattotal, 2, '.', '') ?>" /></td>
            </tr>
            <tr class="v">
                <td>Discount Total:</td>
                <td class="sa"><input type="text" id="discount" style="border:none;" class="numeric" readonly value="<?php echo number_format((float) $discounttotal, 2, '.', '') ?>" /></td>
            </tr>

            <tr class="gtotal">
                <td class="gt">Recurring Total:</td>
                <td class="saRecur" id="gt"><input type="text" id="invoicetotal" readonly ="readonly" class="numeric" value="<?php echo number_format((float) $subtotal + $vattotal - $discounttotal, 2, '.', '') ?>" /></td>
            </tr>
        </table>

        <div>

            <div><img class="image6"  src="<?= URL ?>public/images/line3.png"></div>
            <div>
                <h4 class="t">Remarks:</h4>
                <textarea class="tm" name="remarks"></textarea>
            </div>
            <div>
                <input class="bn3" type="submit" name="save" value="Save">
                <input type="hidden" name="task" value="<?php echo $taskstat ?>" />
            </div>	


        </div>

    </form>

</div>
<div class="popBack hidden">
    <div class="popBack hidden">
        <div class="clientfrm hidden">
            <?php include('views/invoice/create_new_customer.php'); ?>
        </div> 

        <div class="taskfrm hidden">
            <?php include('views/time/create_new_tasks.php'); ?>
        </div>

        <div class="itemfrm hidden">
            <?php include('views/invoice/new_item.php'); ?>
        </div>
    </div>    
</div>


<script>
    $(function() {
        $('#size').focus(function() {
            $('#sizeLabel').addClass('hidden');
        });

        $('#size').change(function() {
            $('#sizeLabel').removeClass('hidden');
            $('#size').val(0);
            $('#size').blur();
        });

        eventLoader();
    });

    function eventLoader()
    {
        $('.table1-new').find('tr').mouseover(function() {
            $(this).find('#addtask').addClass('a-hover');
            $(this).find('.deltask').addClass('del-hover');
        });

        $('.table1-new').find('tr').mouseout(function() {
            $(this).find('#addtask').removeClass('a-hover');
            $(this).find('.deltask').removeClass('del-hover');
        });
        $('.table2-new').find('tr').mouseover(function() {
            $(this).find('#additem').addClass('a-hover');
            $(this).find('.delitem').addClass('del-hover');
        });

        $('.table2-new').find('tr').mouseout(function() {
            $(this).find('#additem').removeClass('a-hover');
            $(this).find('.delitem').removeClass('del-hover');
        });
    }


</script>