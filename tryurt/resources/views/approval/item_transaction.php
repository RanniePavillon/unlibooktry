
<style>
    .cnitableAllInvoice{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
        height:auto!important;
    }
    .cnitableAllInvoice, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice, td{
        font-size: 12px;
        color:black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice a{
        color:blue;
        font-size:11px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
        font-family:Verdana;
    }

    .cnitableAllInvoice tr th:nth-child(){
        text-align: right;
    }
    .cnitableAllInvoice tr th:nth-child(6){
        text-align: right;
    }
    .cnitableAllInvoice tr th:nth-child(7){
        text-align: right;
    }
    .cnitableAllInvoice tr td:nth-child(5){
        text-align: left;
    }
    .cnitableAllInvoice tr td:nth-child(6){
        text-align: right;
        padding:5px;
    }
    .cnitableAllInvoice tr td:nth-child(7){
        text-align: center;
    }
    .cnitableAllInvoice tr td:nth-child(8){
        text-align: center;
    }
    .cnitableAllInvoice tr th:nth-child(8){
        text-align: center;
    }
    .cnitableAllInvoice tr td:nth-child(2){
        text-decoration: none;
       /*  font-family: Agency FB; */
    }
    .itemTransactTable{
		width:98%;
		margin:auto;
	}
	.itemTransactContainer{
		padding-top:25px;
	}
	.aaaa{
		padding-bottom:20px;
	}
	.itemTransactContainer th{
		padding:5px;
	}
	.itemTransactContainer tr{
		border-bottom:solid 1px #c8c8c8;
	}
</style>

<script>
    $(function () {
        
    })
</script>

<title>
    ITEM TRANSACTION
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="mainbodyInvoice">
    <form method='post' action='<?php echo URL ?>inventory/itemTransaction' id='form'>
        <div class="invoiceHolderInvoice">
            <div id="newInvoice" class="headings aaaa">
                <label class="headText">ITEM TRANSACTION</label>
            </div>	
			
			<div class="itemTransactContainer">
				<table class="itemTransactTable">
					<tr>
						<th width="11%">Item No.</th>
						<th width="15%">Item Description</th>
						<th width="5%">UOM</th>
						<th width="11%">Warehouse</th>
						<th width="12%">Transaction Date</th>
						<th width="12%">Document Type</th>
						<th width="8%">Ref. No.</th>
						<th width="8%" style="text-align:center">Qty</th>
						<th width="9%">Status</th>
					</tr>
					<tr>
						<td>ITM-01</td>
						<td>Item-One</td>
						<td>Pcs</td>
						<td>WH-01</td>
						<td>3/9/2016</td>
						<td>Sales Order</td>
						<td><a href="#">SO-01</a></td>
						<td style="text-align:center">10.00</td>
						<td>On Order</td>
					</tr>
				</table>
			</div>
			
			
			
			
        </div> 
    </form>
</div>
<div class="popBack hidden"></div>

<script>
   
</script>

