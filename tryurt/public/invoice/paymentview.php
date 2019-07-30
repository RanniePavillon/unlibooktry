<?php
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Server.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Session.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/include_dao.php';
?>

<style>
    .container{
        margin: auto;
    }
    .enterpaymentForm{
        background-color: white;
		width: 900px;
		margin: auto !important;
		margin-top: 70px !important;
		/* border: 2px solid #24b6ef; */
		padding-bottom: 20px;
    }
    .titleEnterPayment{
        margin-top: 16px;
		margin-left: 10px;
		width: 869;
		background-color: -webkit-gradient(linear, right bottom, right top, color-stop(0.06, #F0F0F0), color-stop(1, #CCCACC), color-stop(1, #D9D9D9),color-stop(1, #CFCDCF));
		background-image: -o-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
		background-image: -moz-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
		background-image: -ms-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
		padding-left: 10px;
		padding-top: 5px;
		padding-bottom: 5px;
		font-size: 30px;
		font-family:agency fb2;
		font-weight: bold;
		/* color: #183867; */
    }
    .table1Enter{
    }
    .table{
        border-spacing: 5px;
    }
    .table1Enter td{
		/* text-align: right; */
		font-size:12px;
		font-family:Verdana;
		width: 176px;
		color: #000000;
		font-weight: normal;
    }
    .cnitableCollection tr th:nth-child(4)(5){
        text-align: right;
    }
    .table1Enter select{
        width: 223px;
        margin-left: 5px;
        height: 25px;
    }
    table1Enter input[type=text]{
        width: 170px;
        height: 25px;
        padding-left: 5px;
        margin-top:-5px;
    }

    .table2Enter{
		/* border-spacing: 1px;
		margin-top: -141px;
		margin-left: 424px; */
    }
    .table2Enter{
        border-spacing: 5px;
    }
    .table2Enter td{
		/* text-align: right; */
		font-size:12x;
		font-family:Verdana;
		/* width: 176px; */
		color: #000000;
		font-weight: normal;
    }
	.img2{
		z-index:-1!important;
	}
    input[type=text]{
        width: 220px;
        height: 27px;
        padding-left: 5px;
		padding-right:7px;
		font-family: Verdana;
		font-size: 12px;
    }
    .textarea{
        height: 80px;
        width: 220px;
        max-height: 80px;
        max-width: 268px;
        padding-left: 5px;
    }
    .note{
        position: relative;
        top: -28px;
    }
    .search{
		margin-left:14px;
		margin-top:15px;
    }
    .txtsearch22{
		width: 208px;
		height: 30px;
		border: 1px solid #c8c8c8;
		padding-left: 5px;
		padding-right: 34px;
		text-align: left;
		font-family: agency fb2;
		font-size: 16px;
		font-weight: bold;
		color: #000;
		outline-style: none;
		border-radius: 2px;
		background: #fff;
    }
	.txtsearch22::-webkit-input-placeholder{
		color:gray;
		padding-left:7px;
	}
    .searchbutton2{
		width: 29px !important;
		height: 30px !important;
		cursor: pointer;
		border: none !important;
		background-image: url('<?= URL ?>public/images/searchback.png');
		background-repeat: no-repeat;
		background-size: 100%;
		border-radius: 2px !important;
		font-size: 14px;
		font-family: Agency FB;
		cursor: pointer;
		margin-top: 0px !important;
		margin-left: -30px !important;
		opacity:1 !important;
		position:absolute;
	}
    .mainTable{
        border-collapse: collapse;
        width:97%;
        margin-top: 10px;
        margin:auto;
    }

    .mainTable th{
		color: white;
		font-weight: bold;
		font-size:12px;
		font-family:Verdana;
		text-align: left;
		padding:7px 11px!important;
    }
    .mainTable td{
        color: black;
        font-weight:normal;
        font-size:11px;
        font-family: Verdana;
        text-align: left;
        padding:7px 11px;
    }

    .tableDiv{
        margin-top: 5px;
    }
    .mainTable tr th:nth-child(6){
        text-align: right;
    }
	.mainTable tr th:nth-child(4){
        text-align: right;
    }
    .mainTable tr th:nth-child(5){
        text-align: right;
    }
    .mainTable tr th:nth-child(7){
        text-align: right;
    }
    .mainTable tr td:nth-child(6){
        text-align: right;
    }
    .mainTable tr td:nth-child(5){
        text-align: right;
    }
    .mainTable tr td:nth-child(7){
        text-align: right;
    }
    .mainTable a{
        color: blue;
    }
    .mainTable input[type=text]{
        width: 100%;
        height: 25px;
        text-align: right;
        margin-top: 1px;
		background:none;
		font-family:Verdana;
		font-size:11px;
    }
    .hrclass{
        width: 99%;
        margin: auto;
        margin-top: 40px;
        border-top: none;
        border-bottom: 1px solid c8c8c8;
    }

    .mainTable tr:hover{
        background-color: c8c8c8;
    }
    .buttons{
        width: 60;
        height: 24px;
        border-radius: 2px;
        border: 1px solid c8c8c8;
        background-color: -webkit-gradient(linear, right bottom, right top, color-stop(0.06, #F0F0F0), color-stop(1, #CCCACC), color-stop(1, #D9D9D9),color-stop(1, #CFCDCF));
        background-image: -o-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -moz-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -webkit-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -ms-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: linear-gradient(to top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        cursor: pointer;
    }
    .buttonscontainer{
        margin-left: 820px;
        margin-top: 15;
    }
	.close{
		background: transparent;
		color: black;
		border: none;
		border-radius: 2px;
		font-family: Arial black;
		font-weight: bold;
		font-size:23px;
		top: 70px;
		outline-style: none;
		cursor: pointer;
		float: right;
		margin-right:4px;
	}
	#received2307{
		margin: 0px;
		padding: 0px!important;
	}
</style>

<script>
    $(function() {
        $('.client').change(function() {
            $('.mainTable > tbody > tr').remove();
            $.post(URL + 'invoice/clientInvoice', {clientid: $(this).val()})
                    .done(function(returnData) {
                $('.mainTable > tbody').append(returnData);
            })
                    .fail(function() {
                alert('Connection Error!');
            });
            return false;
        });

        $('#form').submit(function() {

        });

        amountreceived = 0;
        $('input[name="amountReceived"]').keyup(function() {
//          invoiceAmount();
            amountreceived = $(this).val();
        });

        $(document).on("click", ".chk", function() {
//            alert(parseFloat($('input[name="amountReceived"]').val()));
            invoiceAmount();
        });

        function invoiceAmount() {
//            amountreceived = $('input[name="amountReceived"]').val();
            if (amountreceived == '') {
                amountreceived = 0;
            }

            $("input[name='chk[]']:checked").each(function()
            {
                invoicetotal = parseFloat($(this).parents('tr').find('.totalinvoice').text());

                if (amountreceived > invoicetotal) {
                    amountreceived -= invoicetotal;
                    $(this).parents('tr').find('.amount').val(invoicetotal);
                } else {
                    $(this).parents('tr').find('.amount').val('');
                }

            });
            return false;
        }


    })
</script>
<?php
if (isset($_POST['paymentid'])) {
	// echo $_POST['paymentid'];
    $paymentview = TblEnterPaymentMySqlExtDAO::paymentView($_POST['paymentid'], '');
    $jspaymentview = TblEnterPaymentMySqlExtDAO::paymentViewJournal($_POST['paymentid'], '');
    $paymentview = !$paymentview ? $jspaymentview : $paymentview;
	// print_R($paymentview);
   // print_r($paymentview); exit;
}

?>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>

<div class="container">
    <form method="post" action="<?php echo URL ?>invoice/collection" class="enterpaymentForm boxshadow" id="form">
		<input type="button" class="close" value="x">
        <div class="titleEnterPayment headingspop"><?= strtoupper($paymentview[0]->status) ?> PAYMENT</div>
		<div style="float:left;margin-top:15px;width:420px;margin-left:25px;">
			<table class="table1Enter">
				<tr>
					<td>Date Received:</td>
					<td><input type="text"  readonly="readonly" name="" value="<?php echo date('m/d/Y', strtotime($paymentview[0]->dateIssued)) ?>"></td>
				</tr>
				<?php
				if($paymentview[0]->status == 'posted' || $paymentview[0]->status == 'reversed'){
				?>
				<tr>
					<td>Date Created:</td>
					<td><input type="text"  style="background:#c8c8c8;border:none;" readonly="readonly" name="" value="<?php echo date('m/d/Y', strtotime($paymentview[0]->dateCreated)) ?>"></td>
				</tr>
				<?php
				}
				?>
				
				<tr>
					<td>Amount Received:</td>
					<td><input type="text" readonly="readonly" name="amountReceived" class="numeric" id="amountReceived" value="<?php echo number_format((float) $paymentview[0]->amountReceived,2) ?>"></td>
				</tr>
				<tr>
					<td>Received from Client:</td>
					<td colspan="3">
						<input type="text" readonly="readonly" name="client" value="<?php echo DAOFactory::getTblClientDAO()->load($paymentview[0]->clientId)->clientName ?>"/>
					</td>
				</tr>
                                <tr>
                                    <td>WHT</td>
                                    <td><?php echo $paymentview[0]->whtTax != 0 ?  $paymentview[0]->whtTax : 0 ?> %</td>
                                </tr>
				<tr>
					<td style="padding:7px;"><input type="checkbox" class="2307form" checked name="received2307" id="received2307" required disabled><label>Received 2307 form</label></td>
				</tr>
			</table>
		</div>	
		<div style="float:right;margin-top:15px;margin-right:20px;">
			<table class="table2Enter">
				<thead>
					<tr>
						<td>Method of Payment:</td>
						<?php $mop = DAOFactory::getTblMopDAO()->load($paymentview[0]->mopId); ?>
						<td><input type="text" style="width:220px;" readonly="readonly" value="<?= $mop->code ?>"></td>
					</tr>
					<tr>
						<td>OR No.:</td>
						<td>
							<input type="text" name="refNum" style="width:220px;" readonly="readonly" value="<?php echo $paymentview[0]->casNo != '' ?  $paymentview[0]->casNo : $paymentview[0]->refNum ?>">
							<span style="color:red;">*</span>
						</td>
					</tr>
					<tr>
						<td class="note">Notes:</td>
						<td colspan="3"><textarea class="textarea" readonly="readonly"><?php echo $paymentview[0]->notes ?></textarea></td>
					</tr>
                                        <?php // if($paymentview[0]->phpRate != 1){ ?>
<!--                                        <tr>
                                            <td>PHP Rate:</td>
                                            <td><?php // echo $paymentview[0]->phpRate ?></td>
                                        </tr>-->
                                        <?php // } ?>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
		<div style="clear:both;"></div>
        <div class="search" >
            <input type="search" placeholder="Search Billing No." class="txtsearch22"> 
            <input type="button" class="searchbutton2" value="" id="search102">
        </div>
        <div class="tableDiv">
            <table class="mainTable">
                <thead>
                    <tr>
                        <th width="100px">Billing No.</th>
                        <th width="150px">Billing Date</th>
                        <th width="150px" style="text-align:right;">Total Billing Amount</th>
                        <th width="150px">WHT Amount</th>
                        <th width="150px">Applied Amount</th>
                        <th width="150px">Amount Balance</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <!--<div class="buttonscontainer">
            <input type="button" value="Close" class="buttons close">
        </div>-->

    </form>

</div>
<script>
$(function(){
	// $('#search').die();
	$('#search102').click( function() {
		search = $('.txtsearch2').val();
		// if($('select[name="clientId"]').val() != ''){
			invoicePayment('<?= $paymentview[0]->clientId ?>', search);
		// } else {
			// $('.mainTable > tbody > tr').remove();
		// }
		// alert($('select[name="clientId"]').val());
	});

	$('#search102').click();
        function invoicePayment(clientid2, search101) {
			// alert('asdf');
            $('.mainTable > tbody > tr').remove();
			// alert(URL);
			// alert(clientid2);
            $.post(URL + 'invoice/clientInvoicePosted', {'search': search101, 'clientid': clientid2, 'id':'<?= $_POST['paymentid'] ?>'})
                    .done(function(returnData) {
                        $('.mainTable > tbody').append(returnData);
                    })
                    .fail(function() {
                        // alert('Connection Error!');
                    });
            return false;
        }

})
</script>