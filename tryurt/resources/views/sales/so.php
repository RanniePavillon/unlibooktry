
<style>
    .invoiceHolderCNTs{
        width: 100%;
        margin-top: 70px;
    }

    .divCNTsBelowitem{
        text-align:right;
    }
    .cnt-formCNTs{
        width: 914px;
        margin: auto !important;
        font-family: verdana;
        font-size: 12px;
        background: #fff;
        padding: 30px;
    }
    .cnt-headCNTs{
        font-size:30px;
        font-family:verdana;
        margin-top: -7px;
    }

    .saveBCNTs2{
        margin-right:10px;
        width: 100px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }
    .saanBCNTs2{
        width: 123px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }


    .isButton{
        height:27px;
        width:100px;
    }
    .dropButtonContainer{
        float:right;
        margin-top:15px;
        margin-right:35px;
    }
    .invoiceListTable{
        border:solid 1px #c8c8c8;
        width:100%;
        margin:auto;
        margin-top:7px;

    }
    .invoiceListTable td{
        font-size:10px;
        padding:5px;
    }
    .siDrop{
        background:none;
        text-decoration:underline;
        border:none;
        color:blue;
        corsur:pointer;
    }
    .dropdownTables td{
        font-family:verdana;
        font-size:12px;
		padding:5px;
    }
    .dropdownTables{
        margin-bottom:50px;
        width:100%;
    }

    #newCNTs{
        font-family: agency fb2;
        color: #c51400;
        font-weight: bold;
        font-size: 30px;
    }
    .invNoOption{
        background-color: #fff;
        color: #000;
        font-weight: bold!important;
    }
	.dropdownTables tr:hover{
		background:#c8c8c8;
	}
	.dropdownTableContainer{
		height:450px;
		max-height:450px;
		overflow: scroll;
		padding-bottom:10px;
	}
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="jsHolder">
    <!-- pls do not remove this -->
</div>
<script>
    siId = '';
    code = '';
    $(function () {

        getData();

        $('.siDrop').click(function () {
            $list = $(this).val();
            siId = $(this).parents('td').find('input[name="siId"]').val();
            code = $(this).val();
            $('input[type="checkbox"]').prop('checked', false);
            $('.dataInvoice').addClass('hidden');
            $('#' + $list).removeClass('hidden');

        });

        $('#btnsubmit').click(function () {
            var chk = 0;

            if ($('.chkinvoice:checked').length != 1) {
                alertWithoutNotice('Please select Sales Order from the list.');
                return false;
            }

            $('.chkinvoice:checked').each(function () {
                // $tr = $(this).parents('tr');
                // $html = '<input type="text" name="itemId[]" value="' + $($tr).find('.itemId').val() + '" />' +
                // '<input type="text" name=""'

                chk = $(this).val();
                code = $(this).parents('tr').find('.soNo').text();
                $('#salesOrderId option').removeAttr('selected');

                $('option:last', $('#salesOrderId')).before($('<option/>', {
                    value: chk,
                    text: code,
                    selected: true,
                    'class': 'list'
                }));
            });



            $.post(URL + 'deliveryReceipt/getSalesOrderTask', {salesorderid: chk})
                    .done(function (returnData) {
                        $('.tablesalesnew > tbody').html(returnData);
                        $('.popBack').html('').addClass('hidden');
                        $('body').css('overflow', 'auto');

                        computeDr();
                    });
        });

        $('#searchby').change(function () {
            if ($(this).val() == 2) {
                $('input[type="search"]').addClass('hidden');
                $('.date').removeClass('hidden');
                $('.search2').removeClass('hidden');
                $('.search2Col').addClass('hidden');
            } else {
                $('input[type="search"]').removeClass('hidden');
                $('.date').addClass('hidden');
                $('.search2').addClass('hidden');
                $('.search2Col').removeClass('hidden');

            }
        });

        $('#searchby').change();
        $(".date").datepicker({
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
        });

        $('#formso').submit(function () {
            getData();
            return false;
        });
    });

function computeDr() {

        $('[name="qty[]"]').change(function(){
            var subTotal = 0;
            var discountTotal = 0;
            var netAmountTotal = 0;
            var vatAmount = 0;
            var grandTotal = 0;
            $('[name="qty[]"]').each(function(){

                myTr = $(this).parent('td').parent('tr');

                var qty = getInt($(this).val());
                var vatType = $(myTr).find('td:nth-child(3) input').val();
                var unitPrice = getInt($(myTr).find('td:nth-child(7) input').val());
                var discount = getInt($(myTr).find('td:nth-child(9) input').val()) / 100;

                amount = (qty * unitPrice);
                $(myTr).find('td:nth-child(8) input').val(roundFloat(amount));

                netAmount = amount * (1 - discount);
                $(myTr).find('td:nth-child(10) input').val(roundFloat(netAmount));

                vat = 0;
                sub = amount - vat;
                disc = sub * discount;
                netAmnt = sub - disc;

                if(vatType == 'Vatable') {
                    vat = (amount / 1.12) * 0.12;
                    sub = amount - vat;
                    disc = sub * discount;
                    netAmnt = sub - disc;
                    vat = vat * (1 - discount);
                }

                subTotal += sub;
                discountTotal += disc;
                netAmountTotal += netAmnt;
                vatAmount += vat;
                grandTotal += netAmountTotal + vatAmount;
            });
            
            $('[name="subTotalAmount"]').val(roundFloat(subTotal));
            $('[name="discountAmount"]').val(roundFloat(discountTotal));
            $('.netamounttotal').val(roundFloat(netAmountTotal));
            $('[name="vatAmount"]').val(roundFloat(vatAmount));
            $('[name="grandTotal"]').val(roundFloat(grandTotal));
        });

}

    function getData() {
        $.post(URL + 'sales/getSOFilter', $('#formso').serialize())
                .done(function (returnData) {
                    $('#tbl_so > tbody').html(returnData);
                });
    }


</script>
<div class="invoiceHolderCNTs">
    <form method="post" action="" class="cnt-formCNTs boxshadow" id="formso">
        <div id="newCNTs">
            SALES ORDER
        </div>
        <div class="center2">
            <div id="search3" style="float:left;margin-top:15px;">

            </div>
            <?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?>
            <div style="float:right;margin-right:30px;margin-top:4px;">
                <span class="filteredby">Filtered By:</span>
                <label class="labelclass">
                    <select class="inumber" name="searchby" id="searchby">
                        <option class="invNoOption" value="1" <?php echo ($searchby == 1) ? 'selected' : '' ?>>SO NO.</option>
                        <option class="invNoOption" value="2" <?php echo ($searchby == 2) ? 'selected' : '' ?>>DATE ISSUED</option>
                    </select>
                </label>
                <input type="search" name="search" placeholder="SEARCH" class="searchindex
                       <?php echo ($searchby == 3) ? 'hidden' : '' ?>" value="<?= ISSET($_POST['search']) ? $_POST['search'] : '' ?>"> 

                <input type="text" name="startdate" value="<?= ISSET($_POST['startdate']) ? $_POST['startdate'] : '' ?>" 
                       placeholder="From Date" class="date dateInputText hasDate <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                <input type="text" name="enddate" value="<?= ISSET($_POST['enddate']) ? $_POST['enddate'] : '' ?>"
                       placeholder="To Date" class="date dateInputText hasDate <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                <input type="submit" name="search2" value="SEARCH" class="search2 <?php echo ($searchby != 3) ? 'hidden' : '' ?>">

                <div><input type="submit" name="search2" value="" class="search2Col <?php // echo ($searchby != 3) ? 'hidden' : ''             ?>" style="margin-left:331px;"></div>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div class="dropdownTableContainer">
			<table class="dropdownTables" id="tbl_so">
				<thead>
					<tr>
						<th width="1%"></th>
						<th>Sales Order No.</th>
						<th>Date Issued</th>
						<th>Client Name</th>
						<th style="text-align:right;">Amount</th>
					</tr>
				</thead>
				<tbody></tbody>
				<?php /* if($this->salesInvoice){
				  foreach($this->salesInvoice as $item){
				  $invoicelines = DAOFactory::getTblSalesInvoiceLinesDAO()->queryBySalesInvoiceId($item->id); */
				?>
				<?php
				//}
				//} 
				?>



			</table>
		</div>
        <div class="divCNTsBelowitem">	
            <input type="button" class="addsavebuttonpop isButton closeCNTs saveButtonsPop" value="Cancel">
            <input type="button" class="addsavebuttonpop isButton saveAddButtonsPop" id="btnsubmit" value="Get SO Line">
        </div>

        <input type="hidden" name="clientid" value="<?php echo $_POST['clientid'] ?>" />
    </form>
</div>
