<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="aging.xls"');
?>
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

.outstanding_holder{
	width: 50% !important;
	text-align:center !important;
	padding-left:30px !important;
}
.tblShowReport{
	width:50% !important;
	text-align:center !important;
}
.exportHolder{
	font-family: Verdana !important;
	margin-left: 15px !important;
	text-align: center !important;
	height:auto!important !important;
	margin-top:20px !important;
	font-size:12px !important;
	font-weight:bold !important;
}
.orgName{
	font-size:14px !important;
	font-family:Verdana !important;
	text-transform: uppercase !important;
	font-weight: bold !important;
}
.reportTh{
	background-color: #BE3323 !important;
	color: white !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
	text-align:left;
	padding:5px;
}
.reportThRight{
	background-color: #BE3323 !important;
	color: white !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
	text-align:right;
}
.reportThCenter{
	background-color: #BE3323 !important;
	color: white !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
	text-align:center;
}
.reportTd{
	color: #000 !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
}
.reportTdRight{
	color: #000 !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
	text-align:right;
}
.reportTdRight{
	color: #000 !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
	text-align:right;
}
.titleUp{
	font-weight:bold !important;
}
.tdTotal{
	border: solid 1px #000 !important;
}
</style>
<div class="outstanding_holder">
	<div class="reportHolderOR agingRep">
		<div class="fromReg exportHolder">
			<div style="font-weight:bold;">
				<?= $org->orgName ?>
			</div>
			<div style="font-weight:bold;">
				<?= ucwords($info->address) ?>
			</div>
			<div style="font-weight:bold;">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div style="font-weight:bold;">
				<?php
				if($report){
					if($_POST['aging'] == 'billing'){
						echo 'BILLING AGING REPORT'
				?>
				<?php
				} else{
					echo 'SALES AGING REPORT'
				?>
				<?php
				} 
				?>
				<?php
				} 
				?>
			</div>
			<div style="font-weight:bold;">
				<?php
				if($_POST['client'] != '%%'){
					$clientName = DAOFactory::getTblClientDAO()->load($_POST['client']);
					echo 'For Client ' . $clientName->clientName;
				}else{
					echo 'For All Customers';
				}
				?>
			</div>
			<div style="font-weight:bold;">
				As of <?php echo (isset($_POST['enddate']))? date('F d, Y',strtotime($_POST['enddate'])) : date('F d, Y')?>
			</div>
		</div>
		<br>
		<?php
			if($report){
				if($_POST['aging'] == 'billing'){
		?>
		<table class="tblShowReport">
			<tr>
				<th class="reportTh">
					Customer Name
				</th>
				<th class="reportThRight">
					Total Amount Due
				</th>
				<th class="reportThRight">
					0-3 Months
				</th>
				<th class="reportThRight">
					3-6 Months
				</th>
				<th class="reportThRight">
					6-9 Months
				</th>
				<th class="reportThRight">
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
				<td class="reportTd"><?= $each['client_name']?></td>
				<td class="reportTdRight"><?= Controller::getFloat($each['grand_total'])?></td>
				<td class="reportTdRight"><?= Controller::getFloat($each['amount1'])?></td>
				<td class="reportTdRight"><?= Controller::getFloat($each['amount2'])?></td>
				<td class="reportTdRight"><?= Controller::getFloat($each['amount3'])?></td>
				<td class="reportTdRight"><?= Controller::getFloat($each['amount4'])?></td>
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
				<th class="reportTh">
					Customer Name
				</th>
				<th class="reportThRight">
					Total Amount Due
				</th>
				<th class="reportThRight">
					0-3 Months
				</th>
				<th class="reportThRight">
					3-6 Months
				</th>
				<th class="reportThRight">
					6-9 Months
				</th>
				<th class="reportThRight">
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
				<td class="reportTd"><?= $each['client_name']?></td>
				<td class="reportTdRight"><?= Controller::getFloat($each['grand_total'])?></td>
				<td class="reportTdRight"><?= Controller::getFloat($each['amount1'])?></td>
				<td class="reportTdRight"><?= Controller::getFloat($each['amount2'])?></td>
				<td class="reportTdRight"><?= Controller::getFloat($each['amount3'])?></td>
				<td class="reportTdRight"><?= Controller::getFloat($each['amount4'])?></td>
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