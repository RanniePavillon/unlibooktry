<style>
    .tabContent{
        padding-left: 50px !important;
    }
    .tabContent2{
        padding-left: 60px !important;
    }
    .collect_tableCharts{
        border-collapse:collapse;
        width: 98%;
        margin:auto;
        margin-top: 5px;
    }
    .table_collectionCharts:HOVER{
        background:rgb(230, 227, 227) !important;
    }
    .collect_tableCharts, th{
        background-color: #183867;
        font-size:12px;
        color: white;
        font-family:Verdana;
        text-align: left;
        padding: 11px;
    }
    .collect_tableCharts, td{
        font-size: 11px;
        color:black;
        font-family:Verdana;
        text-align: left;
        padding:0px 11px;
    }

    .invoiceHolderCharts{
        background-color: white;
    }
    #newCharts{
        margin-left:10px;
        float:left;
        width:100%;
    }
    .chartsForm{
        background-color: white;
    }	

    .hrClass4Charts{
        border: 2px solid gray;
        margin-top: -8px;
    }
    .div2Charts{
        background-color: #E5F1CE;
        right: 50%;
        margin-top: 5px;
        width: 990px;
        height: 45px;
        margin-left:5px;
        border-radius:10px 10px 0px 0px;
        border: 0px;
    }
    .button_containerCharts{
        margin-left: 10px;
        width: 200px;
        text-align: center;
        height: 28px;
        margin-top: 25px;
    }
    .addpaymentCharts{
        background-color:#C8C8C8 ;
        width: 128px;
        height: 29px;
        border-radius: 5px 0px 7px 0px;
        margin-left: 5px;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        cursor: pointer;
        margin-top: 7px;
    }
    .printCharts{
        background-color:#5e5353;
        width: 128px;
        height: 29px;
        border-radius: 2px 2px 2px 2px;
        margin-left: 5px;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        cursor: pointer;
        color: whitesmoke;
        border: none;
    }
    .edit1Charts{
        background-color:#5e5353;
        width: 128px;
        height: 29px;
        border-radius: 2px 2px 2px 2px;
        margin-left: -1px;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        cursor: pointer;
        color: whitesmoke;
        border: none;
    }

    .head_collectCharts{
        font-family:Verdana;
        letter-spacing:1px;
        font-size: 12px;
        font-weight:bold;
        background-color: #55C768;
        color: white;
        height: 30px;
        text-align: left;
    }
    .collect_tableCharts{
        margin-top:5px;
        margin-left: 10px;
        width: 98%;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size:12px;
    }
    .table_collectionCharts{
        height: 30px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight: normal;
    }
    .table_collectionCharts2{
        background-color: white;
        height: 25px;
    }

    .checkboxCharts{
        text-align: center;


    }
    .paynoCharts{
        color: black;
        margin-top: 200px;
        padding-left: 0px;
        text-align: left;
        background-color:white;
        border-collapse: collapse;
        width: 200px;
        font-size: 12px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight: bold;
        padding-left: 1px;
    }
    .paynoCharts2{
        color: black;
        margin-top: 200px;
        padding-left: 0px;
        text-align: left;
        background-color:white;
        border-collapse: collapse;
        width: 200px;
        font-size: 12px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        padding-left: 1px;
    }
    .balanceLink{
        text-decoration: none;
        color: #000 !important;
        cursor: default !important;
    }
    .cboxCharts{
        text-align: center;
        border: none;
        background-color: white;
        width: 40px;
    }
    .cboxCharts2{
        text-align: center;
        border: none;
        background-color: white;
        width: 40px;
    }
    .table_Title{
        background-color:rgb(195, 194, 194);
        height: 30px;
        border-bottom: 1px solid #C8C8C8;
        font-size:12px;
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight:bold;
        padding-left:30px;
        color:#000 !important;
    }
    .collect_tableCharts tr th:nth-child(2){
        text-align: right;
        padding-right:100px;
    }
    .table_collectionCharts td:nth-child(1){
        text-align: left;
        padding-left: 40px;
    }
    .table_collectionCharts td:nth-child(2){
        text-align: right;
        padding-right:100px;
    }
    .collect_tableCharts:hover{
        background-color:gray;
    }
    .createNewJournal{
        background-color:#C06464;
        width: 210px;
        height: 32px;
        border: none;
        background-image:url('<?= URL ?>public/images/addnewaccount.png');
        background-repeat: no-repeat;
        background-position: -21px -2px;
        cursor: pointer;
        border-radius: 5px;
        outline-style: none;
        background-size: 118% 109%;
    }
</style>
<title>
    CHART OF ACCOUNTS
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="mainbodyAccounting">
    <div class="invoiceHolderCharts">
        <div id="newCharts" class="headings">
            <label class="headTextCharts">CHART OF ACCOUNTS</label>
            <div class="hrClass4Charts hidden"></div>
            <?php if ($useraccess->Add == 'yes') { ?>
                <a href="" class="createNewCharts">
                    <!-- <label class="crossChart"> -->
                        <input type="button"  class="createNewJournal buttonslarge" value="ADD NEW ACCOUNT">
                    <!-- </label> -->
                </a>
            <?php } ?>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div class="chartsForm">
        <table class="collect_tableCharts">

            <tr class="head_collectCharts">
                <th>Name</th>
                <th>Balance</th>
                <th></th>
            </tr>
            <?php
            $coas = array("assets", "liabilities", "equity", "income", "expense");

            $orgId = Session::getSession('orgid');
            $dateNow = date('Y-m-d');
            $year = date('Y');
            $month = intval(date('m'));
            $prevDate = date('Y-m-01');
            $coa2 = '';
            foreach ($coas as $coa) {
                $coa2 = $coa;

                $items = TblTrialBalanceMySqlExtDAO::getOrgTrialBalance2($orgId, $year, $month, $prevDate, $coa);
                ?>

                <tr class="table_Title">
                    <td colspan="" style="font-size:12px;color:#000;font-weight:bold;">
                        <?php
                        if ($coa == "income") {
                            $coa2 = "income";
                            $coa = "SALES/SERVICE REVENUE";
                        }
                        echo strtoupper($coa);
                        ?>

                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
                foreach ($items as $item) {
                    if (strtolower($item['account_type']) == $coa2) {
                        ?>
                        <tr class="table_collectionCharts">
                            <td class="<?= $item['sub_account'] != '' ? ($item['sub_type'] == 'sub_sub' ? 'tabContent2' : 'tabContent' ) : '' ?>">
                                <?= $item['account_num'] . ' - ' . $item['accont_name'] ?>
                            </td>
                            <td class="">
                                <?php if ($item['sub_account'] != '') { ?>
                                    <a href="#getAccount" class="balanceLink" id="<?= $item['id'] ?>">
                                        <?php
                                        if ($item['account_num'] == '1003-002' || $item['account_num'] == '1003-004' || $item['account_num'] == '1003-006' || $item['account_num'] == '1003-006' ||
                                                $item['account_num'] == '1003-008' || $item['account_num'] == '2000-001' || $item['account_num'] == '2000-002' || $item['account_num'] == '2000-005' ||
                                                $item['account_num'] == '2003' || $item['account_num'] == '2004' || $item['account_num'] == '3000' || $item['account_num'] == '3001' ||
                                                $item['account_num'] == '4000-001' || /* $item['account_num'] == '4000-002' || */ $item['account_num'] == '4001-001' || $item['account_num'] == '4001-002' ||
                                                $item['account_num'] == '4001-003' || $item['account_num'] == '6001-002' || $item['account_num'] == '2000-006' || $item['account_type'] == 'income'
                                        ) {

                                            // echo Controller::getFloat($item['balance'] * -1); 
                                            echo '<a href="#" value="' . $item['account_num'] . '" class="accountNum">' . number_format($item['balance'] * -1, 2) . '</a>';
                                        } else {
                                            // echo Controller::getFloat($item['balance']);
                                            echo '<a href="#" value="' . $item['account_num'] . '" class="accountNum"> ' . number_format($item['balance'], 2) . '</a>';
                                        }
                                        ?>
                                    </a>
                                <?php } else { ?>
                                    <?php
                                    if ($item['account_num'] == '3000') {
                                        ?>
                                        <a href="#" value="<?= $item['account_num'] ?>" class="accountNum"><?= number_format($item['balance'] * -1, 2) ?></a>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="#" value="<?= $item['account_num'] ?>" class="accountNum"><?= number_format($item['balance'], 2) ?></a>
                                        <?php
                                    }
                                    ?>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if ($item['admin_coa_account'] == '') { ?> 
                                    <a href="#" value="<?= $item['id'] ?>" class="editCoa">edit</a>
                                    <?php
                                    // print_r($item);
                                    ?>
                                    <?php if ($item['active_account'] == 'yes') { ?>
                                        <a href="#" value="<?= $item['id'] ?>" value="<?= $item['id'] ?>" class="deactivateCoa" style="margin-left:10px;">Deactivate</a>
                                    <?php } else { ?>
                                        <a href="#" value="<?= $item['id'] ?>" value="<?= $item['id'] ?>" class="activateCoa" style="margin-left:10px;">Activate</a>
                                    <?php } ?>

                                <?php } ?>
                            </td>

                        </tr>
                        <?php
                    }
                }
            }
            ?>
        </table>
    </div>
</div>
<div class="popBack hidden">
</div>
<script>
    $(function () {
        $('.createNewCharts').click(function () {
            $.post(URL + 'accounting/newChart')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.close1Client').click(function () {
                            if (confirm('Are you sure you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                            }
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });

        $('.editCoa').click(function () {
            values = $(this).attr('value');
            $.post(URL + 'accounting/newChart', {'id': values})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');
                        $('.close1Client').click(function () {
                            if (confirm('Are you sure you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                            }
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });

        $('.createNewChartofAccount').click(function () {
            $.post(URL + 'accounting/new_charts_account')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.chart-close').click(function () {
                            if (confirm('Are you sure you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                            }
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });

        $('.accountNum').click(function () {

            var accountNum = $(this).attr('value');

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
            return false;
        });

        $('.activateCoa').click(function () {
            id = $(this).attr('value');
            data = $(this).parent('td').parent('tr').find('td:nth-child(1)').html();
            confirmAct = confirm('Activating coa : ' + data);
            if (confirmAct) {
                $.post(URL + 'accounting/activateCoa', {'id': id})
                        .done(function (returnData) {
                            if (returnData == '') {
                                location.reload();
                            } else {
                                alert(returnData);
                            }
                        });
            }
        });
        $('.deactivateCoa').click(function () {
            id = $(this).attr('value');
            data = $(this).parent('td').parent('tr').find('td:nth-child(1)').html();
            confirmAct = confirm('Deactivating coa : ' + data);
            if (confirmAct) {
                $.post(URL + 'accounting/deactivateCoa', {'id': id})
                        .done(function (returnData) {
                            if (returnData == '') {
                                location.reload();
                            } else {
                                alert(returnData);
                            }
                        });
            }
        });
    });

    function editrec(coaid) {
        if ($('.chk').is(':checked') || coaid != '') {
            var checked = [];
            $("input[name='chk[]']:checked").each(function ()
            {
                checked.push(parseInt($(this).val()));
                return false;
            });

            if (coaid != '') {
                checked.push(parseInt(coaid));
            }

            $.post(URL + 'accounting/new_charts_account', {coaid: checked})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.chart-close').click(function () {
                            if (confirm('Are you sure you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                            }
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        } else {
            alert('Please select record to edit');
        }
    }
</script>

