<?php
	// $org = $this->org;
	// $info = $this->info;
	// $report = $this->form2550m;
	// $report2 = $this->form2550mOpen;
?>
<style>
.currentHolder{
	width: 895px;
	box-shadow: 1px 1px 2px 2px #c8c8c8;
	margin:30px auto;
	overflow: scroll;
	height:590px !important;
}
.transHistory{
	background-color: #183867;
    color: #fff;
    font-family: Verdana;
    font-size: 12px;
    border: none;
    border-radius: 5px;
    width: 140px;
    height: 25px;
    font-weight: bold;
    cursor: pointer;
}
.containerForm{
	font-family:Verdana;
	font-size:12px;
	width: 96%;
	margin-left: 15px;
	text-align: center;
	height: auto!important;
	padding-top: 20px;
}
.tblCRB{
	margin-top: 20px;
	border-collapse: collapse;
	font-family: Verdana;
	font-size: 12px;
	border: 1px solid #c8c8c8;
	width: 100%;
}
.tblCRB th {
    background: #183867;
    color: #fff;
    padding:0px;
    border: 1px solid #c8c8c8;
}
.tblCRB td{
	border:1px solid #c8c8c8;
	padding:5px;	
}
.viewPreviewMode {
    background-color: #183867;
    color: #fff;
    font-family: Verdana;
    font-size: 12px;
    border: none;
    border-radius: 5px;
    width: 130px;
    height: 25px;
    font-weight: bold;
}
</style>
<div class="currentHolder">
	<div style="margin-top:20px;margin-left:15px;">
		<input type="button" value="Transaction History" class="transHistory">
	</div>
	
	<div class="containerForm">
			<!--?php
				if ($report){
			?-->
		<div>	
			<div class="ORCompanyInfo">
				MONTHLY VALUE-ADDED TAX DECLARATION - 2550M
			</div>
			<table class="tblCRB">
				<tr>
					<th colspan="2">SALES</th>
					<th>Open</th>
					<th>Posted</th>
					<th>Total Sales/Receipt for the Month (Exc. of VAT)</th>
					<th>Output Tax Due for the Month</th>
				</tr>
				
				<!--?php if($report->part2Item12A || $report2->part2Item12A){
						
				?-->
				<tr>
					<td class="leftAlign" colspan="2">Vatable Sales/Reciept</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item12A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item12A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item12A + $report->part2Item12A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item12B + $report2->part2Item12B) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item13A || $report2->part2Item13A){
					
				?-->
				<tr>
					<td class="leftAlign" colspan="2">Sales to Government</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item13A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item13A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item13A + $report2->part2Item13A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item13B + $report2->part2Item13B) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item14 || $report2->part2Item14){
					
				?-->
				<tr>
					<td class="leftAlign" colspan="2">Zero Rated Sales/Receipts</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item14) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item14) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item14 + $report2->part2Item14) ?--></td>
					<td></td>
				</tr>
				<!--?php } ?-->
				
				<!--?php if($report->part2Item15 || $report2->part2Item15){ ?-->
				<tr>
					<td class="leftAlign" colspan="2">Exempt Sales/Receipts</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item15) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item15) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item15 + $report2->part2Item15) ?--></td>
					<td></td>
				</tr>
				<!--?php } ?-->
			
				<!--?php if($report->part2Item16A || $report2->part2Item16A){ ?-->
				<tr>
					<td class="leftAlign" colspan="2">Total Sales Receipt and Output Tax Due</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item16A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item16A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item16A + $report2->part2Item16A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item16B + $report2->part2Item16B) ?--></td>
				</tr>
				<!--?php } elseif(
					$report->part2Item12A || $report->part2Item13A || $report->part2Item14 || $report->part2Item15 || 
					$report2->part2Item12A || $report2->part2Item13A || $report2->part2Item14 || $report2->part2Item15
				){
					$report2->part2Item16A = $report2->part2Item12A + $report2->part2Item13A + $report2->part2Item14 + $report2->part2Item15;
					$report->part2Item16A = $report->part2Item12A + $report->part2Item13A + $report->part2Item14 + $report->part2Item15;
					$report2->part2Item16B = $report2->part2Item12B + $report2->part2Item13B;
					$report->part2Item16B = $report->part2Item12B + $report->part2Item13B;
					?-->
				<tr>
					<td class="leftAlign" colspan="2">Total Sales Receipt and Output Tax Due</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item16A + $report2->part2Item16A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item16B + $report2->part2Item16B) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if(
					$report->part2Item17A || $report->part2Item17B || $report->part2Item17C || $report->part2Item17D || $report->part2Item17E || $report->part2Item17F || 
					$report2->part2Item17A || $report2->part2Item17B || $report2->part2Item17C || $report2->part2Item17D || $report2->part2Item17E || $report2->part2Item17F
				){
					
				?-->
				<tr>
					<td class="leftAlign" colspan="6">Less: Allowable Input Tax</td>
				</tr>
				<!--?php
					}
				?-->
				<!--?php if($report->part2Item17A || $report2->part2Item17A){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax Carried Over from Previous Period</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item17A + $report2->part2Item17A) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item17B || $report2->part2Item17B){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax Deferred on Capital Goods Exceeding 1Million from Previous Period</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item17B || $report2->part2Item17B) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item17C || $report2->part2Item17C){
				
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Transitional Input Tax</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item17C + $report->part2Item17C) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item17D || $report2->part2Item17D){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Presumptive Input Tax</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item17D + $report2->part2Item17D) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item17E || $report2->part2Item17E){
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Others</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item17E || $report2->part2Item17E) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item17F || $report2->part2Item17F){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Total(Sum of Item 17A,17B,17C,17D & 17E)</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item17F + $report2->part2Item17F) ?--></td>
				</tr>
				<!--?php } elseif (
						$report->part2Item17A || $report->part2Item17B || $report->part2Item17C || $report->part2Item17D || $report->part2Item17E ||
						$report2->part2Item17A || $report2->part2Item17B || $report2->part2Item17C || $report2->part2Item17D || $report2->part2Item17E
				){ 
				$report->part2Item17F = $report->part2Item17A + $report->part2Item17B + $report->part2Item17C + $report->part2Item17D + $report->part2Item17E;
				$report2->part2Item17F = $report2->part2Item17A + $report2->part2Item17B + $report2->part2Item17C + $report2->part2Item17D + $report2->part2Item17E;
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Total(Sum of Item 17A,17B,17C,17D & 17E)</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item17F + $report2->part2Item17F) ?--></td>
				</tr>
				<!--?php } ?-->
				
				<tr>
					<th class="tl_purchase">PURCHASES</th>
					<th colspan="5"></th>
				</tr>
				
				<!--?php
					if (
					$report->part2Item18A || $report->part2Item18B || $report->part2Item18C || $report->part2Item18D || $report->part2Item18E || 
					$report->part2Item18F || $report->part2Item18G || $report->part2Item18H || $report->part2Item18I || $report->part2Item18J ||
					$report->part2Item18K || $report->part2Item18L || $report->part2Item18M || $report->part2Item18N || $report->part2Item18O || $report->part2Item18P ||
					$report2->part2Item18A || $report2->part2Item18B || $report2->part2Item18C || $report2->part2Item18D || $report2->part2Item18E || 
					$report2->part2Item18F || $report2->part2Item18G || $report2->part2Item18H || $report2->part2Item18I || $report2->part2Item18J ||
					$report2->part2Item18K || $report2->part2Item18L || $report2->part2Item18M || $report2->part2Item18N || $report2->part2Item18O || $report2->part2Item18P
				){
				?-->
				
				<tr>
					<td class="leftAlign" colspan="6">Current Transactions</td>
				</tr>
				<!--?php
					}
				?-->
				
				<!--?php if($report->part2Item18A || $report2->part2Item18A){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Purchase of Capital of Goods not exceeding 1Million (see sch.2)</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item18A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18A + $report2->part2Item18A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18B + $report2->part2Item18B) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item18C || $report2->part2Item18C){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Purchase of Capital of Goods exceeding 1Million (see sch.3)</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item18C) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18C) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18C + $report2->part2Item18C) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18D + $report2->part2Item18D) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item18E || $report2->part2Item18E){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Domestic Purchases of Goods Other than Capital Goods</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item18E) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18E) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18E + $report2->part2Item18E) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18F + $report2->part2Item18F) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item18G || $report2->part2Item18G){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Importation of Goods Other than Capital Goods</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item18G) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18G) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18G + $report2->part2Item18G) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18H + $report2->part2Item18H) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item18I || $report2->part2Item18I){
				
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Domestic Purchase of Services</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item18I) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18I) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18I + $report2->part2Item18I) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18J + $report2->part2Item18J) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item18K || $report2->part2Item18K){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Services rendered by Non-residents</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item18K) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18K) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18K || $report2->part2Item18K) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18L || $report2->part2Item18L) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item18M || $report2->part2Item18M){
				
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Purchases not Qualified for Input Tax</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item18M) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18M) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18M + $report2->part2Item18M) ?--></td>
					<td class="rightAlign"></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item18N || $report2->part2Item18N){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Others</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item18N) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18N) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18N + $report2->part2Item18N) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18O + $report2->part2Item18O) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item18P || $report2->part2Item18P){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Total Current Purchases</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item18P) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18P) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18P + $report2->part2Item18P) ?--></td>
					<td class="rightAlign"></td>
				</tr>
				<!--?php } elseif (
					$report->part2Item18A || $report->part2Item18C || $report->part2Item18E || $report->part2Item18G || $report->part2Item18I || $report->part2Item18K || $report->part2Item18M || $report->part2Item18N ||
					$report2->part2Item18A || $report2->part2Item18C || $report2->part2Item18E || $report2->part2Item18G || $report2->part2Item18I || $report2->part2Item18K || $report2->part2Item18M || $report2->part2Item18N
				){
					$report->part2Item18P = $report->part2Item18A + $report->part2Item18C + $report->part2Item18E + $report->part2Item18G + $report->part2Item18I + $report->part2Item18K + $report->part2Item18M + $report->part2Item18N;
					$report2->part2Item18P = $report2->part2Item18A + $report2->part2Item18C + $report2->part2Item18E + $report2->part2Item18G + $report2->part2Item18I + $report2->part2Item18K + $report2->part2Item18M + $report2->part2Item18N;
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Total Current Purchases</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18P + $report2->part2Item18P) ?--></td>
					<td class="rightAlign"></td>
				</tr>
				<!--?php } ?-->
				
				<!--?php if($report->part2Item19 || $report2->part2Item19){
					
				?-->
				<tr>
					<td class="leftAlign" colspan="2">Total Available Input Tax</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item19 + $report2->part2Item19) ?--></td>
				</tr>
				<!--?php } elseif(
					$report->part2Item17F || $report->part2Item18B || $report->part2Item18D || $report->part2Item18F || $report->part2Item18H || $report->part2Item18J || $report->part2Item18L || $report->part2Item18O || 
					$report2->part2Item17F || $report2->part2Item18B || $report2->part2Item18D || $report2->part2Item18F || $report2->part2Item18H || $report2->part2Item18J || $report2->part2Item18L || $report2->part2Item18O
				){ 
					$report->part2Item19 = $report->part2Item17F + $report->part2Item18B + $report->part2Item18D + $report->part2Item18F + $report->part2Item18H + $report->part2Item18J + $report->part2Item18L + $report->part2Item18O;
					$report2->part2Item19 = $report2->part2Item17F + $report2->part2Item18B + $report2->part2Item18D + $report2->part2Item18F + $report2->part2Item18H + $report2->part2Item18J + $report2->part2Item18L + $report2->part2Item18O;
				?-->
				<tr>
					<td class="leftAlign" colspan="2">Total Available Input Tax</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item19 + $report2->part2Item19) ?--></td>
				</tr>
				<!--?php } ?-->
				
				<!--?php
					if (
						$report->part2Item20A || $report->part2Item20B || $report->part2Item20C || $report->part2Item20D || $report->part2Item20E || $report->part2Item20F ||
						$report2->part2Item20A || $report2->part2Item20B || $report2->part2Item20C || $report2->part2Item20D || $report2->part2Item20E || $report2->part2Item20F
					){
				?-->
				<tr>
					<td class="leftAlign" colspan="6">Less: Deductions from Input Tax</td>
				</tr>
				<!--?php
					}
				?-->
				
				<!--?php if($report->part2Item20A || $report2->part2Item20A){
				
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax on Purchases of Capital Goods exceeding 1Million deferred for the succeeding period (sch.3)</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20A) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20A + $report2->part2Item20A) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item20B || $report2->part2Item20B){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax on Sale to Govt. closed to expense (sch.4)</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20B) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20B) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20B + $report2->part2Item20B) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item20C || $report2->part2Item20C){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax allocable to Exempt Sales</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20C) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20C) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20C + $report2->part2Item20C) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item20D || $report2->part2Item20D){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">VAT Refund/TCC claimed</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20D) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20D) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20D + $report2->part2Item20D) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item20E || $report2->part2Item20E){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Others</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20E) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20E) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20E + $report2->part2Item20E) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item20F || $report2->part2Item20F){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Total(Sum of Item 20A,20B,20C,20D & 20E</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20F) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20F) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20F + $report->part2Item20F) ?--></td>
				</tr>
				<!--?php } elseif(
					$report->part2Item20A || $report->part2Item20B || $report->part2Item20C || $report->part2Item20D || $report->part2Item20E ||
					$report2->part2Item20A || $report2->part2Item20B || $report2->part2Item20C || $report2->part2Item20D || $report2->part2Item20E
				) { 
					$report->part2Item20F = $report->part2Item20A + $report->part2Item20B + $report->part2Item20C + $report->part2Item20D + $report->part2Item20E;
					$report2->part2Item20F = $report2->part2Item20A + $report2->part2Item20B + $report2->part2Item20C + $report2->part2Item20D + $report2->part2Item20E;
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Total(Sum of Item 20A,20B,20C,20D & 20E</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20F + $report->part2Item20F) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item21 || $report->part2Item21){
					
				?-->
				<tr>
					<td class="leftAlign" colspan="2">Total Allowable Input Tax (Item 19 less Item 20F)</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21 + $report2->part2Item21) ?--></td>
				</tr>
				<!--?php } elseif($report->part2Item19 || $report->part2Item20F || $report2->part2Item19 || $report2->part2Item20F){
					$report->part2Item21 = $report->part2Item19 - $report->part2Item20F;
					$report2->part2Item21 = $report2->part2Item19 - $report2->part2Item20F;
				?-->
				<tr>
					<td class="leftAlign" colspan="2">Total Allowable Input Tax (Item 19 less Item 20F)</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21 + $report2->part2Item21) ?--></td>
				</tr>	
				<!--?php } ?-->
				
				<!--?php if($report->part2Item22 || $report2->part2Item22){
					
				?-->
				<tr>
					<td class="leftAlign" colspan="2">Net VAT Payable (Item 16B less Item 21)</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item22) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item22) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item22 + $report2->part2Item22) ?--></td>
				</tr>
				<!--?php } elseif($report->part2Item16B || $report2->part2Item16B || $report->part2Item21 || $report2->part2Item21){
					$report->part2Item22 = $report->part2Item16B - $report->part2Item21;
					$report2->part2Item22 = $report2->part2Item16B - $report2->part2Item21;
				?-->
				<tr>
					<td class="leftAlign" colspan="2">Net VAT Payable (Item 16B less Item 21)</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item22 + $report2->part2Item22) ?--></td>
				</tr>
				<!--?php } ?-->
				
				<!--?php
					if(
						$report->part2Item23A || $report->part2Item23B || $report->part2Item23C || $report->part2Item23D || $report->part2Item23E || $report->part2Item23F || $report->part2Item23G || 
						$report2->part2Item23A || $report2->part2Item23B || $report2->part2Item23C || $report2->part2Item23D || $report2->part2Item23E || $report2->part2Item23F || $report2->part2Item23G
					){
				?-->
				<tr>
					<td class="leftAlign" colspan="6">Less: Tax Credits/Payments</td>
				</tr>
				<!--?php
					}
				?-->
				
				<!--?php if($report->part2Item23A || $report2->part2Item23A){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Creditable Value-Added Tax Withheld (sch.6)</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23A) ?--></td>
				</tr>
				<!--?php } ?->
				<!--?php if($report->part2Item23B || $report2->part2Item23B){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Advance Payments for Sugar and Flour Industries (sch.7)</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23B) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23B) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23B + $report2->part2Item23B) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item23C || $report2->part2Item23C){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">VAT withheld on Sales to Government (sch.8)</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23C) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23C) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23C + $report2->part2Item23C) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item23D || $report2->part2Item23D){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">VAT paid in return previously filed, if this is an amended return</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23D) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23D) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23D + $report2->part2Item23D) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item23E || $report2->part2Item23E){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Advance Payments made (please attach proof of payments -BIR Form No. 0605)</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23E) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23E) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23E + $report2->part2Item23E) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item23F || $report2->part2Item23F){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Others</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23F) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23F) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23F + $report2->part2Item23F) ?--></td>
				</tr>
				<!--?php } ?-->
				
				<!--?php if($report->part2Item23G || $report->part2Item23G){
					
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Total Tax Credits/Payments (Sum of Item 23A,23B,23C,23D,23E & 23F)</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23G) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23G) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23G + $report2->part2Item23G) ?--></td>
				</tr>
				<!--?php } elseif(
					$report->part2Item23A || $report->part2Item23B || $report->part2Item23C || $report->part2Item23D || $report->part2Item23E || $report->part2Item23F ||
					$report2->part2Item23A || $report2->part2Item23B || $report2->part2Item23C || $report2->part2Item23D || $report2->part2Item23E || $report2->part2Item23F
				){
					$report->part2Item23G = $report->part2Item23A + $report->part2Item23B + $report->part2Item23C + $report->part2Item23D + $report->part2Item23E + $report->part2Item23F;
					$report2->part2Item23G = $report2->part2Item23A + $report2->part2Item23B + $report2->part2Item23C + $report2->part2Item23D + $report2->part2Item23E + $report2->part2Item23F;
				?-->
				<tr>
					<td class="leftAlign" style="padding-left:20px;" colspan="2">Total Tax Credits/Payments (Sum of Item 23A,23B,23C,23D,23E & 23F)</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23G + $report2->part2Item23G) ?--></td>
				</tr>
				<!--?php } ?-->
				
				<!--?php if($report->part2Item24 || $report2->part2Item24){
				
				?-->
				<tr>
					<td class="leftAlign" colspan="2">Tax Still Payable (Overpayment)(Item 22 less Item 23G)</td>
					<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item24) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item24) ?--></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item24 + $report2->part2Item24) ?--></td>
				</tr>
				<!--?php } elseif ($report->part2Item22 || $report->part2Item23G || $report2->part2Item22 || $report2->part2Item23G){
					$report->part2Item24 = $report->part2Item22 - $report->part2Item23G;
					$report2->part2Item24 = $report2->part2Item22 - $report2->part2Item23G;
				} ?-->
				<tr>
					<td class="leftAlign" colspan="2">Tax Still Payable (Overpayment)(Item 22 less Item 23G)</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item24 + $report2->part2Item24) ?--></td>
				</tr>
				<!--?php
					if($report->part2Item25A || $report->part2Item25B || $report->part2Item25C || $report->part2Item25D){
				?-->
				<tr>
					<td class="leftAlign" colspan="6">Add: Penalties</td>
				</tr>
				
				<tr>
					<td class="leftAlign">Surcharge</td>
					<td class="leftAlign">Interest</td>
					<td class="leftAlign">Compromise</td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
					<td class="rightAlign"></td>
				</tr>
				<!--?php
					}
				?-->
				<!--?php if($report->part2Item25A || $report->part2Item25B ||  $report->part2Item25C ||  $report->part2Item25D){
					
				?-->
				<tr>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item25A) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item25B) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item25C) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item25D) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item25D) ?--></td>
					<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item25D) ?--></td>
				</tr>
				<!--?php } ?-->
				<!--?php if($report->part2Item26){
					
				?-->
				<tr>
					<td class="leftAlign grayBg" colspan="2">Total Amount Payable (Overpayment)(Sum of Item 24 and 25D)</td>
					<td class="rightAlign grayBg"></td>
					<td class="rightAlign grayBg"></td>
					<td class="rightAlign grayBg"></td>
					<td class="rightAlign grayBg"><!--?= Controller::getFloat($report->part2Item26) ?--></td>
				</tr>
				<!--?php } ?-->
				
				<!--?php
					}
				?-->
				
			</table>
		</div>
	</div>
	<div style="float:right;margin-top:20px;margin-bottom:20px;margin-right:20px;">
		<input type="button" value="VIEW TAX FORM" class="viewPreviewMode">
	</div>
</div>
<div class="popback hidden">
<script>
$(function(){
	$('.viewPreviewMode').click(function() {
			month = $('select[name="month"]').val(); 
			year = $('input[name="year"]').val();
			window.open(URL + 'report/form2550m_newtab?month='+month+'&year='+year);
			return false;
		});
		<?php
			if(isset($_GET['month'])){
		?>
			
				$('select[name="month"]').val('<?= $_GET['month'] ?>'); 
				$('input[name="year"]').val('<?= $_GET['year'] ?>'); 
				
				$('.reportgenerate').click();
		<?php
			}
		?>
		$('.buttonStyles2').click(function(){
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();
			
			$('.popback').removeClass('hidden');
			$('body').css('overflow','hidden');
			$('.popback').css('overflow','auto');
			
			$.post(URL + 'taxplan/getVatMHistory',{'month':month, 'year':year})
				.done(function(returnData){
					$('.popback').html(returnData);
					
					$('.closeJournal').click(function(){
						$('.popback').addClass('hidden');
						$('.popback').html('');
						$('body').css('overflow','auto');
					});
				});
		});
})
</script>
