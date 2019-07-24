<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="purchase_per_item.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->purchaseItem;
?>
<style>
	.reportHolderOR{
		width: 50%;
		text-align:center;
		padding-left:30px;
	}
	.tblmainsumlist{
		width:50%;
		text-align:center;
	}
	.exportHolder{
		font-family: Verdana;
		margin-left: 15;
		text-align: center;
		height:auto!important;
		margin-top:20px;
		font-size:12px;
		font-weight:bold;
	}
	.orgName{
		font-size:14px;
		font-family:Verdana;
		text-transform: uppercase;
		font-weight: bold;
	}
	.reportTh{
		background-color: #BE3323;
		color: white;
		padding: 5px;
		height: 27px;
		border: solid 1px #000;
	}
	.reportTd{
		color: #000;
		padding: 5px;
		height: 27px;
		border: solid 1px #000;
	}
	.tdTotal{
		background:#BE3323;
		color:#fff;
		font-size:12px!important;
		font-weight:bold;
	}
</style>
<div class="reportHolderOR">
	<div class="exportHolder">
		<div class="orgName">
			<?= $org->orgName ?>
		</div>
		<div style="">
			<?= $info->address ?>
		</div>
		<div style="">
			<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
		</div>
		<br/>
		<div class="">
			PURCHASE PER ITEM
		</div>
		<div style="">
			<?php echo (isset($_GET['from']))? date('F d,Y',strtotime($_GET['from'])) : date('F d,Y') ?> - 
			<?php echo (isset($_GET['to']))? date('F d,Y',strtotime($_GET['to'])) : date('F d,Y')?>
		</div>
		<br>
	<table class="tblmainsumlist" style="font-size: 12px;font-family: Verdana;color: black;border-collapse: collapse;">
		<?php
	if($report){
	?>
		<tr>
			<td colspan="7">
			</td>
		</tr>
		<tr>
			<td colspan="7">
			</td>
		</tr>
		<tr>
			<th width="75px" style="text-align: left;" class="reportTh">Date Purchased</th>
			<th width="80px" style="text-align: left;" class="reportTh">Purchased Invoice No.</th>
			<th width="50px" style="text-align: left;" class="reportTh">Item No.</th>
			<th width="50px" style="text-align: left;" class="reportTh">Item Description</th>
			<th width="141px" style="text-align: center;" class="reportTh">UOM</th>
			<th width="30px" style="text-align: center;" class="reportTh">Qty</th>
			<th width="30px" style="text-align: right;" class="reportTh">Unit Price</th>
			<th width="80px" style="text-align: right;" class="reportTh">Amount</th>
		</tr>
		<?php
			$total = '';
			foreach ($report as $item) { 
				$total =(float)$total + (float)$item['net_amount'];
			?>
		<tr class="">
			<td style="text-align: left;" class="reportTd"><?= $item['date_purchased'] ?></td>
			<td style="text-align: left;" class="reportTd"><?= $item['purchase_invoice_no'] ?></td>
			<td style="text-align: left;" class="reportTd"><?= $item['item_code'] ?></td>
			<td style="text-align: left;" class="reportTd"><?= $item['description'] ?></td>
			<td style="text-align: center;" class="reportTd"><?= $item['abbreviation'] ?></td>
			<td style="text-align: center;" class="reportTd"><?= $item['received_qty'] ?></td>
			<td class="isNumeric reportTd" style="text-align: right;border: solid 1px #000;">
				<?= Controller::getFloat($item['unit_price']) ?>
			</td>
			<td class="isNumeric reportTd" style="text-align:right;border: solid 1px #000;">
				<?= Controller::getFloat($item['net_amount']) ?>
			</td>
		</tr>
		 
		<?php
			}	 
		?>
		<tr style="background:#BE3323;color:#fff;">
			<td style=" border:1px solid #000;font-weight:bold;text-align:left;padding-right:40px;" colspan="7">Total Amount</td>
			<td style="border:1px solid #000;font-weight:bold;font-weight:bold;padding-left:0px;text-align:right;" colspan="1"><?= Controller::getFloat($total) ?></td>
		</tr>
		<?php
		}else {
		?>
			<div style="margin-top:-250px;margin-left: 100px; position:absolute;left:80%; text-align:center;" >';
				NO PURCHASE PER ITEM.
			</div>';
		<?php
		}
		?>
	</table>
	
	</div>
</div>