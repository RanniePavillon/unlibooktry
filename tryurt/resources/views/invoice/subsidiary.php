<style>
    .nif1Clienthmo{
        padding:10px;
    }

    .popx{
        float:right;
    }
    #subdiarytable{
        width: 98%;
        margin: auto;
        margin-top:15px;
    }
    #subsidiaryform{
        font-size:12px;
        font-family:verdana;
        padding-bottom:40px;
		background-color: #fff;
		margin: auto !important;
		margin-top: 30px !important;
    }
    .parameter input[type="text"]{
        width:125px;
        height:27px;
        font-size:12px;
        font-family:verdana;
        margin-left: 5px;
        padding:5px;
    }
	#subdiarytable th{
		font-family:verdana;
		font-size:12px;
		padding:5px !important;
	}
	#subdiarytable td{
		font-family:verdana;
		font-size:12px;
		padding:5px !important;
	}
    .parameter{
        margin-left: 10px;
    }
    .named{
        margin-left: 10px;
    }
    .searchsub{
        width: 80px;
        border: none;
        height: 27px;
        color: #fff;
        cursor:pointer;
		background-color: #183867;
		border-radius:5px;
    }
	.close1Client {
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
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/invoice/css/hmo.css"/>
<!--<script src="<?php echo URL; ?>views/invoice/js/hmo.js"></script>-->

<div class="invoiceHolderCNWClient" >	
    <form class="nif1Clienthmo boxshadow" id="subsidiaryform" style="width:934px">
        <div id="new1Client" >
            <input type="button" class="close1Client close1Clienthmo popx" value="x">
        </div><div style="clear: both "></div>
        <div class="parameter">
            From Date: <input type="text" name="fromdate" class="hasDate" value="<?php echo $this->fromdate ?>" />
            To Date: <input type="text" name="todate" class="hasDate" value="<?php echo $this->todate ?>"/>
            <input type="button" value="Search" id="btnsearch" class="addsavebutton searchsub"/>
        </div>
        <span class="named">Name: <?php echo ucwords($this->name) ?></span>
        <div id="container_ccpClient" style="">

            <table id="subdiarytable">
                <thead>
                    <tr>
                        <th width="11%">Created Date</th>
                        <th width="10%">Issued Date</th>
                        <th width="10%">Type</th>
                        <th width="13%">Billing No.</th>
                        <th width="14%">Collection No.</th>
                        <th width="12%">Reference No.</th>
                        <th width="12%">Patient</th>
                        <th width="6%">Status</th>
                        <th width="12%" style="text-align:right">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($this->data) { ?>
                        <?php
                        $total = 0;
                        foreach ($this->data as $item) {
                            $total += $item['grand_total'];
                            ?>
                            <tr class="customer_row">
                                <td class="fontalltd"><?php echo $item['date_created']; ?></td>
                                <td class="fontalltd"><?php echo $item['date_issued']; ?></td>
                                <td class="fontalltd"><?php echo $item['type']; ?></td>
                                <td class="fontalltd"><?php echo $item['invoice_number']; ?></td>
                                <td class="fontalltd"><?php echo $item['collection_number']; ?></td>
                                <td class="fontalltd"><?php echo $item['ref_number']; ?></td>
                                <td class="fontalltd"><?php echo $item['client_name']; ?></td>
                                <td class="fontalltd"><?php echo $item['status']; ?></td>
                                <td class="fontalltd" style="text-align:right"><?php echo Controller::getFloat($item['grand_total']); ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td style="padding-top:10px;"></td>
                        </tr>
                        <tr style="background-color: #25b5ef;">
                            <th colspan="7" style="font-weight:bold;color:#fff;">TOTAL</th>
                            <th colspan="2" style="font-weight:bold;color:#fff;text-align:right"><?php echo Controller::getFloat($total) ?></th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div style="clear:both"></div>
        </div>
    </form>
</div>

<script>
    $(function () {
        $('#btnsearch').click(function () {
            $.post(URL + 'subsidiary/filterSearch', {type: type, id: id, fromdate: $('input[name="fromdate"]').val(), todate: $('input[name="todate"]').val()})
                    .done(function (returnData) {
                        $('#subdiarytable > tbody').html(returnData);
                        /* $('#subdiarytable > tbody').load(html(returnData)); */
                        //$('#container_ccpClient').load();
                    })
                    //returnData.reload();
                    .fail(function () {
                        alert('Connection Fail');
                    })

            return false;
        });

        $('.hasDate').prop('readonly', true);
        $('.hasDate').datepicker({
            dateFormat: 'yy-mm-dd'
        });
        $('.hasDate').change(function () {
            dates = $.datepicker.formatDate('yy-mm-dd', new Date($(this).val()));
            $(this).val(dates);
        });
    })

</script>

