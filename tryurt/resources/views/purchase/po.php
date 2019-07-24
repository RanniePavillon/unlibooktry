
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
    }

    #newCNTs{
        font-family: agency fb2;
        color: #c51400;
        font-weight: bold;
        font-size: 30px;
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

        $(document).on('click', '.siDrop', function () {
            $list = $(this).val();
            siId = $(this).parents('td').find('input[name="siId"]').val();
            code = $(this).val();
            $('input[type="checkbox"]').prop('checked', false);
            $('.dataInvoice').addClass('hidden');
            $('#' + $list).removeClass('hidden');

        });

        $('#btnsubmit').click(function () {
            var chks = new Array();

            if (siId == '') {
                alertWithoutNotice('Please select Purchase Order from the list.');
                return false;
            }

            $('input[type="checkbox"]:checked').each(function () {
                chks.push($(this).val());
            });

            if (chks.length == 0) {
                alertWithoutNotice('Please select item(s) from the list.');
                return false;
            }

            if (siId != '') {
                $('.list').remove();
                $('.selectpo option').removeAttr('selected');
                
                $('option:last', $('.selectpo')).before($('<option/>', {
                    value: siId,
                    text: code,
                    selected: true,
                    'class': 'list'
                }));
            }

            $.post(URL + 'receiveorder/getPurchaseOrderTask', {purchaseorderid: siId, itemIds: chks})
                    .done(function (returnData) {
                        $('.tablesalesnew > tbody').html(returnData);
                        $('.popBack').html('').addClass('hidden');
                        $('body').css('overflow', 'auto');
                        computeAmount();
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

        $('#formpo').submit(function () {
            getData();
            return false;
        });
    });

    function getData() {
        $.post(URL + 'receiveorder/getPOFilter', $('#formpo').serialize())
                .done(function (returnData) {
                    $('#tbl_po > tbody').html(returnData);
                });
    }
</script>
<div class="invoiceHolderCNTs">
    <form method="post" action="" class="cnt-formCNTs boxshadow" id="formpo">
        <div id="newCNTs">
            PURCHASE ORDER
        </div>
        <div class="center2">
            <div id="search3" style="float:left;margin-top:15px;">

            </div>
            <?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?>
            <div style="float:right;margin-right:30px;margin-top:4px;">
                <span class="filteredby">Filtered By:</span>
                <label class="labelclass">
                    <select class="inumber" name="searchby" id="searchby">
                        <option class="invNoOption" value="1" <?php echo ($searchby == 1) ? 'selected' : '' ?>>PO NO.</option>
                        <option class="invNoOption" value="2" <?php echo ($searchby == 2) ? 'selected' : '' ?>>DATE ISSUED</option>
                    </select>
                </label>
                <input type="search" name="search" placeholder="SEARCH" class="searchindex
                       <?php echo ($searchby == 2) ? 'hidden' : '' ?>" value="<?= ISSET($_POST['search']) ? $_POST['search'] : '' ?>"> 

                <input type="text" name="startdate" value="<?= ISSET($_POST['startdate']) ? $_POST['startdate'] : '' ?>" 
                       placeholder="From Date" class="date dateInputText hasDate <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                <input type="text" name="enddate" value="<?= ISSET($_POST['enddate']) ? $_POST['enddate'] : '' ?>"
                       placeholder="To Date" class="date dateInputText hasDate <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                <input type="submit" name="search2" value="SEARCH" class="search2 <?php echo ($searchby != 3) ? 'hidden' : '' ?>">

                <div><input type="submit" name="search2" value="" class="search2Col <?php // echo ($searchby != 3) ? 'hidden' : ''          ?>" style="margin-left:331px;"></div>
            </div>
            <div style="clear:both;"></div>
        </div>
		<div class="dropdownTableContainer">
			<table class="dropdownTables" id="tbl_po" style="width:100%;">
				<thead>
					<tr>
						<th>PO No.</th>
						<th>Date</th>
						<th style="text-align:right;">Amount</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
        <div class="divCNTsBelowitem">	
            <input type="button" class="addsavebuttonpop isButton closeCNTs saveButtonsPop" value="Cancel">
            <input type="button" class="addsavebuttonpop isButton saveAddButtonsPop" id="btnsubmit" value="Get PO Line">
        </div>

        <input type="hidden" name="supplierId" value="<?php echo $_POST['supplierId'] ?>" />
    </form>
</div>

<div class="dropdown">
    <div class="dropdown-content">
    </div>
</div>