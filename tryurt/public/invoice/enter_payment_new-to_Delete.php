<?php
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Server.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Session.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/include_dao.php';
?>

<style>
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
    .container{
        margin: auto;
    }
	.table1Enter, td{
		padding:11px;
	}
    .enterpaymentForm{
        background-color: white;
        width: 900px;
        margin: auto !important;
        margin-top: 70px !important;
        border: 2px solid #24b6ef;
        padding-bottom: 20px;
        /* box-shadow: 1px 1px 1px 1px rgb(7, 124, 7); */
    }
    .titleEnterPayment{
        margin-top: 16px;
		margin-left: 10px;
		width: 869;
		background-color: -webkit-gradient(linear, right bottom, right top, color-stop(0.06, #F0F0F0), color-stop(1, #CCCACC), color-stop(1, #D9D9D9),color-stop(1, #CFCDCF));
		background-image: -o-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
		background-image: -moz-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
		/* background-image: -webkit-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%); */
		background-image: -ms-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
		/* background-image: linear-gradient(to top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%); */
		padding-left: 10px;
		padding-top: 5px;
		padding-bottom: 5px;
		font-size: 30px;
		font-family: agency fb2;
		/* font-style: italic; */
		font-weight: bold;
		color: #183867;
    }
    .table1Enter{
        margin-left:20px;
        margin-top: 0px;
    }
    .table{
        border-spacing: 5px;
    }
    .table1Enter td{
        font-size:12px;
        font-family:Verdana;
        color: #000000;
        font-weight: bold;
    }
    .cnitableCollection tr th:nth-child(4)(5){
        text-align: right;
    }
    .table1Enter select{
        width:190px;
        height: 24px;
        font-family:Verdana;
        font-size:11px;
		/* background-image: url('<?=URL?>public/images/dropSelect.png');
		background-repeat: no-repeat;
		background-size:100% 100%;
		border: none;
		-webkit-appearance: none; */
    }
    }
    table1Enter input[type=text]{
        width: 170px;
        height: 25px;
        padding-left: 5px;
        margin-top:-5px;
        font-family:calibri;
        font-size:17px;
    }	

    .table2Enter{

    }
    .table2Enter{
        border-spacing: 5px;
    }
    .table2Enter td{
        font-size:12px;
        font-family:Verdana;
        color: #000000;
        font-weight: bold;
    }

    .textEnterPaymentnew{
        height: 27px;
        width: 190px;
        padding-left: 5px;
        font-family:Verdana;
        font-size:11px;
    }
    .textarea{
        width: 248px;
        height: 90px;
        max-height: 90px;
        max-width: 270px;
        padding-left: 5px;
        font-family:Verdana;
        font-size:11px;
    }
    .note{
        position: relative;
        top: -28px;
    }
    .search{
        margin-left: 10px;
		margin-top: 25px;
    }
	.txtsearch2::-webkit-input-placeholder{
		color:#fff;
		padding-left:1px;
	}
    .txtsearch2{
		margin-left: 10px;
		margin-top: 6px;
		width: 160px;
		height: 29px;
		border: none;
		background-image: url('<?=URL?>public/images/searchButtonNew2.png');
		background-repeat: no-repeat;
		padding-left: 5px;
		padding-right:34px;
		text-align: left;
		font-family: Agency FB;
		font-size: 17px;
		font-weight: bold;
		color: #fff;
		outline-style: none;
		border-radius: 5px;
    }
    .searchbutton{
		width: 35px;
		height: 33px;
		/* margin-left: 301px; */
		cursor: pointer;
		border: none;
		background-image: url('<?=URL?>public/images/searchButton.png');
		background-repeat: no-repeat;
		border-radius: 2px 2px 2px 2px;
		font-size: 14px;
		font-family: Agency FB;
		cursor: pointer;
		border: none;
		color: whitesmoke;
		border: solid 1px #c8c8c8;
		background-color: rgb(230, 250, 222);
		background-repeat: no-repeat;
		background-position: 3px;
		/* position: absolute; */
		/* margin-top: -33px; */
		margin-left: -39px;
		background-size: 100%;
		opacity: -8;
    }
    .mainTable{
        border-collapse: collapse;
        width: 97%;
        margin-top: 10px;
        margin:auto;
    }

    .mainTable th{
        background-color: #183867;
        color: white;
        font-weight: bold;
        font-size: 12px;
        font-family:Verdana;
        text-align: left;
        padding:5px;
    }
    .mainTable td{
        color: black;
        font-weight:normal;
        font-size:11px;
        font-family: Verdana;
        text-align: left;
        padding:11px;
    }

    .tableDiv{
        margin-top:10px;
		margin-left:8px;
    }
    .mainTable tr th:nth-child(6){
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
        width: 120px;
        height: 25px;
        text-align: right;
        margin-top: 1px;
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
    .buttons1{
        width: 100px;
        height: 28px;
        border-radius: 4px;
        border: none;
        background-image:url('<?=URL?>public/images/post_payment.png');
		background-repeat:no-repeat;
        cursor: pointer;
        font-family:Agency FB;
        font-size:17px;
		font-weight:bold;
		outline-style:none;
    }
	.buttons{
        width: 100px;
        height: 28px;
        border-radius: 4px;
        border: none;
        background-image:url('<?=URL?>public/images/cancel_payment.png');
		background-repeat:no-repeat;
        cursor: pointer;
        font-family:Agency FB;
        font-size:17px;
		font-weight:bold;
		outline-style:none;
    }
    .buttonscontainer{
        margin-left: 678px;
        margin-top: 65px;
    }
    .selectPay{
        width:248px;
        height:24px;
        font-family:Verdana;
        font-size:11px;
		/* background-image: url('<?=URL?>public/images/dropSelect.png');
		background-repeat: no-repeat;
		background-size:143px 24px;
		border: none;
		-webkit-appearance: none; */
    }
    .mainTable input[type="text"]{
        background:none;
        border:none;
    }
	
	.close1Client{
		background: transparent;
		color: black;
		border: none;
		border-radius: 2px;
		font-family: Arial black;
		font-weight: bold;
		font-size: 24px;
		right: 205px;
		top: 70px;
		outline-style: none;
		cursor: pointer;
		float: right;
		margin-right: 5px;
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
<?php
	/*  $enterPayment = $this->enterPayment;
	$stat = "payment";
		if ($enterPayment == 'posted' && $enterPayment->id != ''){
			 $stat == 'postedPayment';
		} elseif ($enterPayment == 'reversed'){
			 $stat == 'reversedPayment';
		}  */
?>

<title>
	Collection
</title>
<div class="container">
    <form method="post" action="<?php echo URL ?>invoice/collection" class="enterpaymentForm" id="form">
		<input type="button" class="close1Client" value="x">
        <div class="titleEnterPayment">
		<?php
		/* 	if($stat == 'postedPayment'){
				echo 'POSTED';
			} elseif ($stat == 'reversedPayment'){
				echo 'REVERSED';
			} else {
				echo 'ENTER';
			}  */
		?>
			ENTER PAYMENT</div>
        <table class="table1Enter" style="float:left;">
            <tr>
                <td>Date Received:</td>
                <td><input type="text" id="di" name="dateReceived" required style="width:190px!important;" class="textEnterPaymentnew" value="<?php echo date('m/d/Y') ?>"></td>
				<input type="hidden" id="di" name="dateCreated" required style="width:190px!important;" class="textEnterPaymentnew dd" value="<?php echo date('m/d/Y') ?>">
            </tr> 
			<!--<tr>
                <td>Date Created:</td>
                <td><input type="text" id="di" name="dateCreated" required style="width:190px!important;" class="textEnterPaymentnew dd" value="<?php echo date('m/d/Y') ?>"></td>
            </tr>-->
			<tr>
                <td>Received from Client:</td>
                <td colspan="3">
                    <?php
					
                    if (isset($_POST['stat'])) {
                     echo   $invoice = DAOFactory::getTblNewInvoiceDAO()->load($_POST['invoiceid']);
                        ?>
                        <input type="text" class="textEnterPaymentnew" value="<?php echo DAOFactory::getTblClientDAO()->load($invoice->clientId)->clientName ?>" />
                        <?php
                    } else {

                        // $customer = DAOFactory::getTblClientDAO()->queryByOrgId(Session::getSession('orgid'));
						// $customer = TblClientMysqlExtDAO::getClientHasInvoice(Session::getSession('orgid'));
						$overPayment = TblAllCollectionMySqlExtDAO::getLatestCollection(Session::getSession('orgid'), '');
						$customer = TblEnterPaymentMySqlExtDAO::getClient(Session::getSession('orgid'));
						// echo '<pre>';
                        // print_r($customer);
						
                        if (count($customer) > 0) {//
                            ?>
                            <select class="table1Enterselect client" name="clientId" ><option></option>
                                <?php foreach ($customer as $item) { ?>
                                    <option value='<?php echo $item['client_id'] ?>'><?php echo $item['client_name'] ?></option>
                                <?php } ?>
                            </select>
                            <?php
                        } else {
							echo 'No Available Client';
						}
                    }
                    ?>
                </td>
            </tr>
			
			<?php
				$whtTax = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'));
			?>
			
			 <tr>
                <td>Withholding Tax:</td>
                <td>
                    <select class="wtax" name="whtTax" id="whtax" required>
                        <option value="0" <?= $whtTax->whtTax == '0' ? 'selected' : '' ?>>--Select--</option>
                        <option value="1" <?= $whtTax->whtTax == '1%' ? 'selected' : ''  ?>>1%</option>
                        <option value="2"  <?= $whtTax->whtTax == '2%' ? 'selected' : ''  ?>>2%</option>
						<option value="5" <?= $whtTax->whtTax == '5%' ? 'selected' : ''  ?>>5%</option>
                        <option value="10" <?= $whtTax->whtTax == '10%' ? 'selected' : ''  ?>>10%</option>
                        <option value="15"<?= $whtTax->whtTax == '15%' ? 'selected' : ''  ?>>15%</option>
                    </select>
                </td>
            </tr>
			<tr>
				<td colspan="2" style="text-align:left;"><input type="checkbox" class="2307form" name="received2307" id="received2307" required><label>Received 2307 form</label></td>
			</tr>
            <tr>
                <td>Amount Received:</td>
                <td><input required type="text" name="amountReceived" id="amountReceived" class="textEnterPaymentnew isNumeric" id="amountReceived" style="border: 1px solid rgb(187, 185, 185);"></td>
            </tr>
            
			<tr class="hasClientSelected hidden">
				<td>
					<input type="checkbox" id="useEnterPayment" name="overPayment"/>
					<label for="useEnterPayment">
						Apply Overpayment
					</label>
				</td>
				<td>
					<?php
						if($overPayment){
							// print_R($overPayment);
							foreach($overPayment as $each){
								if($each['op_amount'] != 0){
					?>
						<input type="text" class="op textEnterPaymentnew isNumeric"
							value="<?= number_format((float) $each['op_amount'], 2) ?>"
							client="<?= $each['client_id'] ?>" readOnly />     
					<?php
								}
							}
						}
					?>
				</td>
			</tr>
           
        </table>

        <table class="table2Enter" style="float:right;margin-right:20px;">
            <thead>
                <tr>
                    <td>Method of Payment:</td>
                    <td><select class="selectPay" name="mopId">
						<?php
							$mop = DAOFactory::getTblMopDAO()->queryAll();
							foreach($mop as $each){
								echo '<option value="'.$each->id.'" title="'.$each->description.'">'.$each->code.'</option>';
							}
						?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>OR No/Ref. No:</td>
                    <td><input type="text" name="refNum" style="width:248px!important;" class="textEnterPaymentnew" required></td>
                </tr>
                <tr>
                    <td class="note">Notes:</td>
                    <td colspan="3"><textarea name="notes" class="textarea"></textarea></td>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
		<div style="clear:both"></div>
        <div class="search">
            <input type="search" placeholder="Search Billing No." class="txtsearch2" name="search"> 
            <input type="button" class="searchbutton" value="Search" id="search" >
        </div>
        <div class="tableDiv">

            <table class="mainTable">
                <thead>
                    <tr>
                        <th width="3%"><input type="checkbox"></th>
                        <th width="100px">Billing No.</th>
                        <th width="100px">Ref. No.</th>
                        <th width="100px">Billing Date</th>
                        <th width="200px">Total Billing Amount</th>
						<th width="100px" style="text-align:center;">WHT Amount</th>
                        <th  width="120px">Applied Amount</th>
                        <th  width="120px">Amount Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_POST['paymentid'])) {
                        echo print_r(TblEnterPaymentMySqlExtDAO::paymentView($_POST['paymentid']));
                    } elseif (isset($_POST['invoiceid'])) {
                        print_r(TblEnterPaymentMySqlExtDAO::clientInvoice());
                        ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="buttonscontainer">
			<input type="button" value="" class="buttons cancel close1Client2">
            <input type="submit" value="" class="buttons1" style="margin-right:5px;">
            <input type="hidden" name="task" value="payment" />
        </div>

    </form>

</div>
<script>/* 
	function alertWithoutNotice(message){
		setTimeout(function(){
			alert(message);
		}, 1000);
	} */
    $(function() {
		
	$("#di, .dd").datepicker(
		{ 
			dateFormat: 'mm/dd/yy'
		}
    );
        clientid = 0;
        amount = 0;
        search = '';
        $('.client').change(function() {
			clientid = $(this).val();
			
			$('#useEnterPayment').prop('checked',false);
			
			if(clientid != ''){
				viewOP();
				invoicePayment(clientid, '');
            } else {
				$('.mainTable > tbody > tr').remove();
				
				$('.hasClientSelected').addClass('hidden');
			}
        });
		
		$('#useEnterPayment').change(function(){
			viewOP();
		});
		
		
		function viewOP(){
			// $('.op').addClass('hidden');
			clientId = $('.client').val();
			// $('input[client="'+clientid+'"]').removeClass('hidden');
			$('input[client] ').addClass('hidden');
			if(typeof $('.client').val() != 'undefined' && typeof $('input[client="'+clientid+'"]') != 'undefined'){
				// $('input[client="'+clientid+'"]').removeClass('hidden');
				
			}
			/*
			if(typeof $('input[client="'+clientid+'"]').val() == 'undefined'){
				$('.hasClientSelected').addClass('hidden');
			} else {
				$('.hasClientSelected').removeClass('hidden');
			}
			*/
			computeInvoice();
			
		}
		
        $(document).on('keyup', 'input[name="search"]', function() {
            search = $(this).val();
			if($('select[name="clientId"]').val() != ''){
				invoicePayment(clientid, search);
			} else {
				$('.mainTable > tbody > tr').remove();
			}
			
        });

        $(document).on('click', '#search', function() {
//            alert(search);
			if($('select[name="clientId"]').val() != ''){
				invoicePayment(clientid, search);
			} else {
				$('.mainTable > tbody > tr').remove();
			}
			// alert($('select[name="clientId"]').val());
        });

//        $('#search').keyup(function(){
//            alert($(this).val());
//        })
		$(document).on('keyup', '.amount', function() {
			invoiceAmount();
			//alert('test');
		})
		
        function invoicePayment(clientid, search) {
            $('.mainTable > tbody > tr').remove();
            // $.post(URL + 'invoice/clientInvoice', {clientid: clientid, search: search})
            $.post(URL + 'invoice/clientNotCollectedInvoice', {'clientid': clientid,'search': search})
                    .done(function(returnData) {
                        $('.mainTable > tbody').html(returnData);
						computeInvoice();
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        }

		$('#form').submit(function(){
			amount = getInt($('input[name="amountReceived"]').val());
			if(amount > 0){
				confirmDoyou = confirm('Do you want to record/post the Payment?');
				if(confirmDoyou){
					$('body').css('overflow', 'hidden');
					$('.popup').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
					$('.popup').removeClass('hidden');
					return true;
				}
			} else {
				alert('Please enter amount');
				$('input[name="amountReceived"]').focus();
			}
			return false;
		})
		

        $('input[name="amountReceived"]').keyup(function() {
//          invoiceAmount();
            amount = $(this).val().replace(/,/g,'');
//            alert($('input[name="test"]').val());
            // invoiceAmount();
            computeInvoice();
        });

        $(document).on("click", ".chkcol", function() {
            computeInvoice();
			//setAmountR();
			computeInvoice();
        });
		
		function getInt(intVal){
			if(intVal != '' && intVal[0] == '('){
				intVal = intVal.toString().replace(/\(/g,'');
				intVal = intVal.toString().replace(/\)/g,'');
				intVal *= -1;
			}
			
			if(intVal != ''){
				intVal = intVal.toString().replace(/,/g,'');
				intVal = parseFloat(intVal);
			}
			
			if(isNaN(intVal)){
				return 0;
			}
			return intVal;
		}
		
		$('select[name="whtTax"]').change(function(){
			computeInvoice();
			setAmountR();
			computeInvoice();
		});
		
		function setAmountR(){
			amount = 0;
			total = 0;
			$('input[name="chkcol[]"]:checked').each(function(){
				// hiddenWhtAmount = getInt($(this).parent('td').parent('tr').find('.hiddenWhtAmount').val());
				hiddenWhtAmount = getInt($(this).parent('td').parent('tr').find('.whtAmountHolder').html());
				appliedAmount = getInt($(this).parent('td').parent('tr').find('td:nth-child(2) input').val());
				totalinvoice = getInt($(this).parent('td').parent('tr').find('.totalinvoice').val());
				
/* 				alert(
						'wht = ' + hiddenWhtAmount + 
						'\n applied Amount = ' + appliedAmount + 
						'\n totalinvoice = ' + totalinvoice + 
						'\n balance = ' + (totalinvoice - (hiddenWhtAmount + appliedAmount))
					); */
				total += totalinvoice - hiddenWhtAmount;
				amount += totalinvoice - (hiddenWhtAmount + appliedAmount);
			});
			 $('input[name="amountReceived"]').val(roundFloat(amount));
		}
		
		function computeInvoice(){
			amountReceived = getInt($('input[name="amountReceived"]').val().replace(/,/g, ''));
			// alert(amountReceived);
			clientId = $('.client').val();
			if(typeof $('.client').val() != 'undefined' && $('#useEnterPayment').is(':checked')){
				op = getInt($('input[client="'+clientid+'"]').val().replace(/,/g,''));
				amountReceived += op;
			}
			invoiceLastTotal = 0;
			amountReceivedTotal = 0;
			
			whtPercent = $('select[name="whtTax"]').val() != 0 ? getInt($('select[name="whtTax"]').val()) / 100 : 0;
			
			$("input[name='chkcol[]']").each(function(){
				if($(this).is(':checked')){
					appliedAmount = getInt($(this).parent('td').parent('tr').find('td:nth-child(2) input').val().replace(/,/g, ''));
					subTotalAmount = getInt($(this).parent('td').parent('tr').find('td:nth-child(3) input').val().replace(/,/g, ''));
					
					invoicetotal = getInt($(this).parents('tr').find('.totalinvoice').val().replace(/,/g, ''));
					// alert(subTotalAmount);
					whtAmount = whtPercent * subTotalAmount;
					// alert(whtAmount);
					if($(this).parent('td').find('.hiddenWhtAmount').val() != 0){
						whtAmount = $(this).parent('td').find('.hiddenWhtAmount').val();
					}
					whtAmount = getFLoat(whtAmount);
					invoicetotal = invoicetotal - whtAmount;

					dif = invoicetotal - amountReceived;
					
					if(amountReceived != 0){
						amountReceived = appliedAmount + amountReceived;
						
						if(amountReceived > invoicetotal){
							invoiceLastTotal = invoicetotal - amountReceived;
							amountReceived = amountReceived - invoicetotal;
							appliedAmount = invoicetotal;
							// invoiceLastTotal = invoicetotal - amountReceived;
						} else {
							appliedAmount = amountReceived;// - invoicetotal;
							invoiceLastTotal = invoicetotal - amountReceived;
							amountReceived = amountReceived - invoicetotal;
						}
						amountReceivedTotal = appliedAmount;
					}
					// invoiceLastTotal = amountReceived;
					// invoiceLastTotal2 = invoicetotal - appliedAmount;
					
					if(appliedAmount < 0){
						appliedAmount = 0;
					}
					// totalDiff = invoiceLastTotal2 < 0 ? invoiceLastTotal2 : 0;
					$(this).parents('tr').find('.appliedAmount').html($.number(appliedAmount, 2));
					$(this).parents('tr').find('.whtAmountHolder').html($.number(whtAmount, 2));
					
					// $(this).parent('td').parent('tr').find('td:last input').val($.number(appliedAmount, 2));
					// if(invoiceLastTotal2 < 0){
						$(this).parent('td').parent('tr').find('td:last input').val('0.00');
					// } else {
						// $(this).parent('td').parent('tr').find('td:last input').val($.number((invoiceLastTotal2), 2));
					// }
				} else {
					appliedAmount = getInt($(this).parent('td').parent('tr').find('td:nth-child(2) input').val().replace(/,/g, ''));
					subTotalAmount = getInt($(this).parent('td').parent('tr').find('td:nth-child(3) input').val().replace(/,/g, ''));
					
					invoicetotal = getInt($(this).parents('tr').find('.totalinvoice').val().replace(/,/g, ''));
					
					whtAmount = whtPercent * subTotalAmount;
					
					if($(this).parent('td').find('.hiddenWhtAmount').val() != 0){
						whtAmount = $(this).parent('td').find('.hiddenWhtAmount').val();
					}
					
					invoicetotal = invoicetotal - whtAmount;

					balance = invoicetotal - appliedAmount;
					
					$(this).parents('tr').find('.appliedAmount').html($.number(appliedAmount, 2));
					$(this).parents('tr').find('td:last input').val($.number(balance, 2));
					// $(this).parents('tr').find('td:last input').val('asdf');
					$(this).parents('tr').find('.whtAmountHolder').html($.number(whtAmount, 2));
				}
			});
			// alert(invoiceLastTotal);
			if(amountReceivedTotal < 0){
				amountReceivedTotal = 0;
			}
			// invoiceLastTotal = invoiceLastTotal - amountReceived;
			$("input[name='chkcol[]']:checked").last().parent('td').parent('tr').find('td:last input').val($.number(invoiceLastTotal, 2));
			$("input[name='chkcol[]']:checked").last().parent('td').parent('tr').find('.appliedAmount').html($.number(amountReceivedTotal, 2));
		}
		
        function invoiceAmount() {
//            amountreceived = $('input[name="amountReceived"]').val();
//            alert($('input[name="amountReceived"]').text());
			amountreceived = amount; 
			if (amountreceived == '') {
			amountreceived = amount;
				amountreceived = 0;
			}
			
            count = 0;
            $chkchecked = $('.chkcol:checked').length; //alert($chkchecked);
			
			clientId = $('.client').val();
			if(typeof $('.client').val() != 'undefined' && $('#useEnterPayment').is(':checked')){
				appliedAmount = $('input[client="'+clientid+'"]').val();
			}
			
            $("input[name='chkcol[]']:checked").each(function()
            {
                count++;
				appliedAmount2 = getInt($(this).parent('td').parent('tr').find('td:nth-child(2) input').val());
				appliedAmount = 0;
				
				amountreceived = getInt(amountreceived) + getInt(appliedAmount) + appliedAmount2;
				// alert(appliedAmount);
				
				
				
                $object = $(this);
                invoicetotal = getInt($(this).parents('tr').find('.totalinvoice').val().replace(/,/g, ''));
				// alert(invoicetotal);
//                if (amountreceived > invoicetotal) {

//                if ($chkchecked == count) {
//                    $($object).parents('tr').find('.amount').val(amountreceived);
//                } else {
//                    $($object).parents('tr').find('.amount').val(invoicetotal);
//                    amountreceived -= invoicetotal;
//                }

/*
                $.ajax({
                    url: "<?php echo URL ?>invoice/totalPayment",
                    type: "POST",
                    data: {
                        invoiceid: $($object).val()
                    },
                    dataType: "JSON", async: false,
                    success: function(jsonStr) {
//                        alert(jsonStr);
						
                        balance = jsonStr.balance;
                        returnData = parseFloat(jsonStr.total) + parseFloat(amountreceived);
                        if (returnData == invoicetotal && balance > 0) { 
						    $($object).parents('tr').find('.amount').val($.number(balance, 2));
                            $($object).parents('tr').find('.balance').val($.number(0,2)); 
                        } else {
//				alert(returnData);		
                            if (returnData > invoicetotal) { 
                                if (balance > 0) {
                                    $($object).parents('tr').find('.amount').val($.number(balance, 2));
                                }
                                else { //alert(invoicetotal);
                                    $($object).parents('tr').find('.amount').val($.number(invoicetotal, 2));
                                }
                            }
                            else {
                                $($object).parents('tr').find('.amount').val($.number(amountreceived, 2));
                            }

                            $($object).parents('tr').find('.balance').val($.number($($object).parents('tr').find('.totalinvoice').val().replace(/,/g, '') - returnData, 2));
                            
                        }
                        amountreceived -= invoicetotal;

                        if (amount >= 0 && count < $chkchecked) {
                            $($object).parents('tr').find('.balance').val($.number(0,2));
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert(XMLHttpRequest.responseText);
                    }
                });
				*/
            });
            return false;
        }
    })


</script>