<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="cashflow.xls"');
?>
<?php
	$CGFO = $this->cashflows['collections'] + $this->cashflows['expenses'] * -1;
	$DIIT = ($this->cashflows['div_received'] + $this->cashflows['int_received'] - $this->cashflows['int_paid'] - ($this->cashflows['tax_paid'] * -1));
	$NCFFOA = $CGFO + $DIIT;
	$NCFFIA = $this->cashflows['ad_equip'] + $this->cashflows['proceed_equip'];
	$NCFFFA = $this->cashflows['capital'] + $this->cashflows['loan'] + $this->cashflows['loan_paid'] + $this->cashflows['drawing'];
	$NIDIC = $this->cashflows['end_period'] - $this->cashflows['beginning'];
?>
<style>
.reportHolderOR{
	width: 50% !important;
	text-align:center !important;
	padding-left:30px !important;
}
.tblIncomeStatement{
	width:50% !important;
	text-align:center !important;
}
.padleft{
	padding-left:20px;
}
.fontBold{
	font-weight:bold;
}
</style>
<div>
	<div class="reportHolderOR">
		
		<div>
			CASH FLOW STATEMENT
		</div>
		<div>
			For the Year Ended <?= (isset($_POST['startdate']))? date('F d, Y',strtotime($_GET['startdate'])) : $_GET['year'] ?> 
		</div>
	<table class="tblIncomeStatement">
		<tr>
			<td class="fontBold">CASH FLOW FROM OPERATING ACTIVITIES</td>
			<td>P</td>
		</tr>
		<tr>
			<td class="padleft">Cash Receipts  from Sales of Goods and Services </td>
                        <td><?= Controller::getFloat($this->cashflows['collections']); ?></td>
		</tr>
		<tr>
			<td class="padleft">Cash Payments for Operating Expenses</td>
			<td></td>
		</tr>
		<tr>
			<td class="paddingtdcash">Cash paid to Suppliers & Operating Expense</td>
			<td class="amountclass" style="border-bottom:solid 1px #000;"><?= Controller::getFloat($this->cashflows['expenses']); ?></td>
		</tr>
		<tr>
			<td class="padleft">Cash generated from operations</td>
			<td><?= Controller::getFloat($CGFO); ?></td>
		</tr>
		<tr>
			<td></td>
		<tr>
		<tr>
			<td>Dividends received</td>
			<td><?= Controller::getFloat($this->cashflows['div_received']); ?></td>
		</tr>
		<tr>
			<td>Interest Received</td>
			<td><?= Controller::getFloat($this->cashflows['int_received']); ?></td>
		</tr>
		<tr>
			<td>Interest Paid</td>
			<td><?= Controller::getFloat($this->cashflows['int_paid'] * -1); ?></td>
		</tr>
		<tr>
			<td>Tax Paid</td>
			<td><?= Controller::getFloat($this->cashflows['tax_paid'] * -1); ?></td>
		</tr>
		<tr>
			<td>Net Cash Flow From Operating Activities</td>
			<td><?= Controller::getFloat($NCFFOA); ?></td>
		</tr>
		<tr>
			<td></td>
		<tr>
		<tr>
			<td class="fontBold">CASH FLOW FROM INVESTING ACTIVITIES</td>
			<td></td>
		</tr>
		<tr>
			<td class="padleft">Additions /Replacement to  Equipments</td>
                        <td><?= Controller::getFloat($this->cashflows['ad_equip']) ?></td>
		</tr>
		<tr>
			<td class="padleft">Proceeds from sale of Equipment</td>
                        <td style="border-bottom:solid 1px #000;"><?= Controller::getFloat($this->cashflows['proceed_equip']) ?></td>
		</tr>
		<tr>
			<td class="padleft"> Net Cash flow from Investing Activities</td>
                        <td><?= Controller::getFloat($NCFFIA) ?></td>
		</tr>
		<tr>
			<td></td>
		<tr>
		<tr>
			<td class="fontBold">CASH FLOW FROM FINANCING ACTIVITIES</td>
			<td></td>
		</tr>
		<tr>
			<td class="padleft">Proceeds from capital contributed</td>
			<td><?= Controller::getFloat($this->cashflows['capital']); ?></td>
		</tr>
		<tr>
			<td class="padleft">Proceeds from loan</td>
			<td><?= Controller::getFloat($this->cashflows['loan']); ?></td>
		</tr>
		<tr>
			<td class="padleft">Payment of loan</td>
			<td><?= Controller::getFloat($this->cashflows['loan_paid']); ?></td>
		</tr>
                <tr>
			<td class="padleft">Drawing</td>
			<td><?= Controller::getFloat($this->cashflows['drawing']); ?></td>
		</tr>
		<tr>
			<td class="padleft">Net Cash Flow from Financing Activities</td>
			<td><?= Controller::getFloat($NCFFFA); ?></td>
		</tr>
		<tr>
			<td></td>
		<tr>
		<tr>
			<td class="fontBold">NET INCREASE/DECREASE IN CASH</td>
			<td></td>
		</tr>
		<tr>
			<td class="padleft">Cash at the beginning of the period</td>
                        <td><?= Controller::getFloat($NCFFOA + $NCFFIA + $NCFFFA)?></td>
		</tr>
		<tr>
			<td class="padleft">Cash at the end of the period</td>
			<td><?= Controller::getFloat($this->cashflows['beginning'])?></td>
		</tr>
		<tr>
			<td  class="padleft">Net Increase/decrease in cash</td>
			<td><?= Controller::getFloat($NCFFOA + $NCFFIA + $NCFFFA)?></td>
		</tr>
	</table>
	
	</div>

</div>