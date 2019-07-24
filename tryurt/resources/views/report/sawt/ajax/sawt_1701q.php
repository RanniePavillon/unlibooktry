<?php
	$org = $this->org;
	$info = $this->info;
	// print_r($org);
	// print_r($info);
	// $report = $this->auditTrial;
?>
<style>

.rightside{
	text-align:right !important;
	padding:5px;
}
</style>

<?php
	// $sawt = $this->gen1701qSawt;
	// print_r($sawt);
	// $getHospitalNames = $this->getHospitalNames;
?>
<div class="reportHolderOR sawtform">
	<div class="fromReg sawtformmain">
		<?php
			// if($sawt){
				
		?>
		<div class="ORCompanyInfo">
			BIR FORM 1701Q
		</div>
		<div class="ORCompanyInfo">
			SUMMARY ALPHALIST OF WITHHOLDING TAXES(SAWT)
		</div>
		<div class="ORCompanyInfo">
			FOR THE MONTH OF <?php echo (isset($_POST['startdate']))? date('F Y',strtotime($_POST['startdate'])) : ''?>
		</div>
		<div class="ORCompanyInfo" style="padding-bottom:20px;">
			
		</div>
		<div class="ORCompanyInfo">
			TIN: <?= $info->tinNum ?>
		</div>
		<div class="ORCompanyInfo">
			PAYEE'S NAME:  <?= $org->orgName ?>
		</div>
		
		
		<table class="tblCRB">
		
			<tr>
				<th>Seq No.</th>
				<th>Taxpayer Identification Number</th>
				<th>Corporation</th>
				<th>Individual</th>
				<th>ATC Code</th>
				<th>Nature of Payment</th>
				<th>Amount of Income Payment</th>
				<th>Tax Rate</th>
				<th>Amount of Tax Withheld</th>
			</tr>
			<!--?php
				$i = 1;
				$total = 0;
				$atc = '';
				$nature = '';
				foreach($sawt as $each){
					// $total += round($each['grand_total'],2) / 1.12 * $each['wht_amount'];
					$total += round($each['wht_amount'],2);
					$aoip = round($each['grand_total'],2) / 1.12;
					// $atwh = round($each['grand_total'],2) / 1.12 *.10;
					
					$atwh = intVal(round(round($each['wht_amount'],2) / round($each['grand_total'] / 1.12,2)*100),2);
					// $taxRate = ($aoip/$each['wht_amount']) * 100;
					
					if($atwh == 10){
						$atc = 'WI010';
						$nature = 'Professionals (lawyers, CPA`s, engineers, etc.) talent fees paid to individuals';
					}elseif($atwh == 15){
						$atc = 'WI011';
						$nature = 'Management and Technical Consultants paid to individuals';
					}
					
			?>
			<tr>
				<td><?= $i++?></td>
				<td><?= $each['tin']?></td>
				<td><?= $each['name']?></td>
			
				<td></td>
				<td><?= $atc?></td>
				<td><?= $nature?></td>
				<td class="rightside"><?=Controller::getFloat($aoip)?></td>
				<td class="rightside"><?=$atwh?>%</td>
				<td class="rightside"><?=Controller::getFloat($each['wht_amount'])?></td>
			</tr>
			<//?php } ?>
			<tr>
				<th colspan="8" style="text-align:left;">Grand Total:</th>
				<th style="text-align:right;"><?= Controller::getFloat($total) ?></th>
			</tr>
			<tr>
				<th colspan="11" style="text-align:left;">END OF REPORT</th>
			</tr>
		
			-->
		</table>
		<!--?php }else{ ?>	
			<div style="text-align:center">
				YOU DON'T HAVE  SAWT FORM 1701Q
			</div>
		<//?php
		}
		?>
		<!--<div style="margin-top:200;">
			<table class="tblCRB">
				
			</table>
		</div>-->
		
		
		<!--?php else:?>-->		
			<!--<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
				NO AUDIT TRAIL.
			</div>-->
		<!--?php
		endif;
		?>-->
	</div>
</div>
