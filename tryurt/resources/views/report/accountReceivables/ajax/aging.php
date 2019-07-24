<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->getAging;
?>
<style>
.tdTotal{
	background:#183867;
	color:#fff;
	font-size:12px!important;
	font-weight:bold;
}
.inpAddress{
	width: 310px;
	word-break: break-word;
	border: none;
	text-align: center;
	font-weight: bold;
	padding-bottom: 5px;
	font-family:Verdana;
	font-size:12px;
	margin-left:185px;
}
</style>
<div class="outstanding_holder">
	<div class="reportHolderOR agingRep">
		<div class="fromReg">
			<div class="nameText orgNameNew">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddress">
				<?= ucwords($info->address) ?>
			</div>
			<div class="ORCompanyInfo">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo">
				<?php
				if($report){
					if($_POST['aging'] == 'billing'){
						echo 'BILLING COLLECTION REPORT'
				?>
				<?php
				} else{
					echo 'SALES COLLECTION REPORT'
				?>
				<?php
				} 
				?>
				<?php
				} 
				?>
			</div>
			<div class="ORCompanyInfo">
				<?php
				if($_POST['client'] != '%%'){
					$clientName = DAOFactory::getTblClientDAO()->load($_POST['client']);
					echo 'For Client ' . $clientName->clientName;
				}else{
					echo 'For All Customers';
				}
				?>
			</div>
			<div class="ORCompanyInfo">
				As of <?php echo (isset($_POST['enddate']))? date('F d, Y',strtotime($_POST['enddate'])) : date('F d, Y')?>
			</div>
		</div>
		<?php
			if($report){
				if($_POST['aging'] == 'billing'){
		?>
		<table class="tblShowReport">
			<tr>
				<th style="text-align:left;">
					Customer Name
				</th>
				<th style="text-align:right;">
					Total Amount Due
				</th>
				<th style="text-align:right;">
					0-3 Months
				</th>
				<th style="text-align:right;">
					3-6 Months
				</th>
				<th style="text-align:right;">
					6-9 Months
				</th>
				<th style="text-align:right;">
					Over 9 Months
				</th>
			</tr>
			<?php
			foreach($report as $each){
				$start = new DATETIME(date("M d Y ", strtotime($each['trans_date'])));
				$end = new DATETIME(date("M d Y "));
				
				$days = $start->diff($end);
				$days = $days->format("%r%a");
			?>
			<tr>
				<td style="text-align:left;"><?= $each['client_name']?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['grand_total'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['amount1'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['amount2'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['amount3'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['amount4'])?></td>
			</tr>
			<?php
			}
			?>
		</table>
		<!--for sales-->
		<?php
		}else{
		?>
		<table class="tblShowReport">
			<tr>
				<th style="text-align:left;">
					Customer Name
				</th>
				<th style="text-align:right;">
					Total Amount Due
				</th>
				<th style="text-align:right;">
					0-3 Months
				</th>
				<th style="text-align:right;">
					3-6 Months
				</th>
				<th style="text-align:right;">
					6-9 Months
				</th>
				<th style="text-align:right;">
					Over 9 Months
				</th>
			</tr>
			<?php
			foreach($report as $each){
				$start = new DATETIME(date("M d Y ", strtotime($each['trans_date'])));
				$end = new DATETIME(date("M d Y "));
				
				$days = $start->diff($end);
				$days = $days->format("%r%a");
			?>
			<tr>
				<td style="text-align:left;"><?= $each['client_name']?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['grand_total'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['amount1'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['amount2'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['amount3'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['amount4'])?></td>
			</tr>
			<?php
			}
			?>
		</table>
		
		<?php
			}
			} else {
				echo'<div style="margin-top:80px;font-weight:bold;color:#183867;font-family:Verdana;font-size:14px;text-align:center;">';
				echo 'No Aging Report.';
				echo'</div>';
			}
		?>
	</div>
</div>	