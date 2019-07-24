<style>
.showTrialBalance{
    height: 1070px;
}
.inpAddress{
	height: 40px;
	word-break: break-word;
	border: none;
	text-align: center;
	font-weight: bold;
	padding-bottom: 5px;
	font-family: Verdana;
	font-size: 11px;
}
.amountclass{
	text-align:right;
	padding:5px;
	font-family:verdana;
	font-size:12px;
	width:163px;
}
.titlecashflow{
	font-weight:bold;
}
.paddingtdcash{
	padding-left:10px;
}
.trialcontainer{
	    width: 720px;
		height: 1425px;
		box-shadow: 2px 2px 15px #3A3434;
		padding-top: 10px;
		margin-left: 9px;
		overflow: scroll;
		padding-bottom: 20px;
		float: left;
}
.orgreport{
	font-family: Verdana;
	font-size: 16px;
}
.fortheyear{
	font-family: Verdana;
	font-size: 14px;
}
.total-line
{
	border-bottom:solid 1px #000;
}
.total-line-upper
{
	border-top:1px solid #000;
}
.max-double-rule
{
	margin: 5px 0px 0px 0px;
	border-top: 1px solid #000;
	width: 100%;
}
</style>
<?php
	$CGFO = $this->cashflows['collections'] + ($this->cashflows['expenses'] * -1) + ($this->cashflows['op_ex'] * -1);
	$DIIT = ($this->cashflows['div_received'] + $this->cashflows['int_received'] - $this->cashflows['int_paid'] - ($this->cashflows['tax_paid'] * -1));
	$NCFFOA = $CGFO + $DIIT;
	$NCFFIA = $this->cashflows['ad_equip'] + $this->cashflows['proceed_equip'];
	$NCFFFA = $this->cashflows['capital'] + $this->cashflows['loan'] + $this->cashflows['loan_paid'] + $this->cashflows['drawing'];
	$NIDIC = $this->cashflows['end_period'] - $this->cashflows['beginning'];
?>
<div class="trialcontainer">
	<div class="fromReg">
		
		<div class="orgreport">
			Cash Flow Statement
		</div>
		<div class="fortheyear">
			for the Year: <?= (isset($_POST['startdate']))? date('F d, Y',strtotime($_POST['startdate'])) : $_POST['year'] ?>
		</div>
	<table class="tblShowReportOR tblShowReportORprint trialtable1">
		<tr>
			<td width="" class="titlecashflow">CASH FLOW FROM OPERATING ACTIVITIES</td>
			<td>P</td>
		</tr>
		<tr>
			<td class="paddingtdcash">Cash Receipts  from Sales of Goods and Services </td>
                        <td class="amountclass"><?= Controller::getFloat($this->cashflows['collections']); ?></td>
		</tr>
<!--		<tr>
			<td class="paddingtdcash">Cash Payments for Operating Expenses</td>
                        <td class="amountclass"><?= Controller::getFloat($this->cashflows['expenses'] * -1); ?></td>
		</tr>-->
		<tr>
			<td class="paddingtdcash">Cash paid to Suppliers & Operating Expense</td>
			<td class="amountclass" style="border-bottom:solid 1px #000;"><?= Controller::getFloat($this->cashflows['expenses']); ?></td>
		</tr>
		<tr>
			<td class="paddingtdcash">Cash generated from operations</td>
			<td class="amountclass"><?= Controller::getFloat($CGFO); ?></td>
		</tr>
		<tr>
			<td style="padding-top:20px;"></td>
		<tr>
		<tr>
			<td>Dividends received</td>
			<td class="amountclass"><?= Controller::getFloat($this->cashflows['div_received']); ?></td>
		</tr>
		<tr>
			<td>Interest Received</td>
			<td class="amountclass"><?= Controller::getFloat($this->cashflows['int_received']); ?></td>
		</tr>
		<tr>
			<td>Interest Paid</td>
			<td class="amountclass"><?= Controller::getFloat($this->cashflows['int_paid'] * -1); ?></td>
		</tr>
		<tr>
			<td>Tax Paid</td>
			<td class="amountclass" style="border-bottom:solid 1px #000;"><?= Controller::getFloat($this->cashflows['tax_paid'] * -1); ?></td>
		</tr>
		<tr>
			<td>Net Cash Flow From Operating Activities</td>
			<td class="amountclass"><?= Controller::getFloat($NCFFOA); ?></td>
		</tr>
		<tr>
			<td style="padding-top:20px;"></td>
		<tr>
		<tr>
			<td class="titlecashflow">CASH FLOW FROM INVESTING ACTIVITIES</td>
			<td class="amountclass"></td>
		</tr>
		<tr>
			<td class="paddingtdcash">Additions /Replacement to  Equipments</td>
                        <td class="amountclass"><?= Controller::getFloat($this->cashflows['ad_equip']) ?></td>
		</tr>
		<tr>
			<td class="paddingtdcash">Proceeds from sale of Equipment</td>
                        <td class="amountclass" style="border-bottom:solid 1px #000;"><?= Controller::getFloat($this->cashflows['proceed_equip']) ?></td>
		</tr>
		<tr>
			<td class="paddingtdcash"> Net Cash flow from Investing Activities</td>
                        <td class="amountclass"><?= Controller::getFloat($NCFFIA) ?></td>
		</tr>
		<tr>
			<td style="padding-top:10px;"></td>
		<tr>
		<tr>
			<td class="titlecashflow">CASH FLOW FROM FINANCING ACTIVITIES</td>
			<td class="amountclass"></td>
		</tr>
		<tr>
			<td class="paddingtdcash">Proceeds from capital contributed</td>
			<td class="amountclass"><?= Controller::getFloat($this->cashflows['capital']); ?></td>
		</tr>
		<tr>
			<td class="paddingtdcash">Proceeds from loan</td>
			<td class="amountclass"><?= Controller::getFloat($this->cashflows['loan']); ?></td>
		</tr>
		<tr>
			<td class="paddingtdcash">Payment of loan</td>
			<td class="amountclass"><?= Controller::getFloat($this->cashflows['loan_paid']); ?></td>
		</tr>
                <tr>
			<td class="paddingtdcash">Drawing</td>
			<td class="amountclass" style="border-bottom:solid 1px #000;"><?= Controller::getFloat($this->cashflows['drawing']); ?></td>
		</tr>
		<tr>
			<td class="paddingtdcash">Net Cash Flow from Financing Activities</td>
			<td class="amountclass"><?= Controller::getFloat($NCFFFA); ?></td>
		</tr>
		<tr>
			<td style="padding-top:20px;"></td>
		<tr>
		<tr>
			<td class="titlecashflow">NET INCREASE/DECREASE IN CASH</td>
			<td></td>
		</tr>
		<tr>
			<td class="paddingtdcash" >Net Increase/decrease in cash</td>
			<td class="amountclass"><?= Controller::getFloat($NCFFOA + $NCFFIA + $NCFFFA)?></td>
		</tr>
		<tr>
			<td class="paddingtdcash">Cash at the beginning of the period</td>
			<td class="amountclass total-line"><?= Controller::getFloat($this->cashflows['beginning'])?></td>
		</tr>
		<tr>
			<td class="paddingtdcash">Cash at the end of the period</td>
			<td class="amountclass total-line"><?= Controller::getFloat($NCFFOA + $NCFFIA + $NCFFFA)?><div class="max-double-rule"></div></td>
		</tr>
	</table>
	</div>

</div>