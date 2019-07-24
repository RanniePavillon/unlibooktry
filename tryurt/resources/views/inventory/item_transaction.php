
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
    <form method='post' action='<?php echo URL ?>inventory/itemTransaction?itemid=<?php echo $_GET['itemid'] ?>' id='form'>
        <div class="invoiceHolderInvoice">
            <div id="newInvoice" class="headings aaaa">
                <label class="headText">ITEM TRANSACTION</label>
            </div>	
			 <div style="clear:both;"></div>
            <div class="center2">
				 
			
                <?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?>
                <div style="float:right;margin-right:30px;margin-top:4px;">
                    <span class="filteredby">Filtered By:</span>
					<label class="labelclass">	
						<select class="inumber" name="searchby" id="searchby">
							<option class="invNoOption" value="1" <?php echo ($searchby == 1) ? 'selected' : '' ?>>Item NO.</option>
							<option class="invNoOption" value="2" <?php echo ($searchby == 2) ? 'selected' : '' ?>>Description</option>
						</select>
					</label>
                    <input type="search" name="search" placeholder="SEARCH" class="searchindex
                           <?php echo ($searchby == 3) ? 'hidden' : '' ?>" value="<?= ISSET($_POST['search']) ? $_POST['search'] : '' ?>"> 

                    <input type="text" name="startdate" value="<?= ISSET($_POST['startdate']) ? $_POST['startdate'] : '' ?>" 
                           placeholder="From Date" class="date dateInputText hasDate <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                    <input type="text" name="enddate" value="<?= ISSET($_POST['enddate']) ? $_POST['enddate'] : '' ?>"
                           placeholder="To Date" class="date dateInputText hasDate <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                    <input type="submit" name="search2" value="SEARCH" class="search2 <?php echo ($searchby != 3) ? 'hidden' : '' ?>">

                    <div><input type="submit" name="search2" value="" class="search2Col <?php // echo ($searchby != 3) ? 'hidden' : ''      ?>" style="margin-left:331px;"></div>
                </div>
                <div style="clear:both;"></div>
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
					<?php
					if($this->data){
						foreach($this->data as $item){						
					?>
							<tr>
								<td><?php echo $item->itemCode ?></td>
								<td><?php echo $item->itemDescription ?></td>
								<td><?php echo $item->abbreviation ?></td>
								<td><?php echo $item->warehouseName ?></td>
								<td><?php echo $item->transDate ?></td>
								<td><?php echo $item->documentType ?></td>
								<td><a href="#" class="link"><?php echo $item->refNo ?></a></td>
								<td style="text-align:center"><?php echo $item->qty ?></td>
								<td><?php echo ucfirst($item->status) ?></td>
							</tr>
					<?php
						}
					}
					?>
				</table>
			</div>
			
			
			
			
        </div> 
    </form>
</div>
<div class="popBack hidden"></div>

<script>
   $(function(){
	   $('.link').click(function(){
		   text = $(this).parents('tr').find('td:nth-child(6)').text();
		   link = '';
		   switch(text){
			   case 'Cash Invoice': link = "sales/newCashInvoice";
			   break;
			   case 'Sales Order' : link = "sales/newSalesOrder";
			   break;
			   case 'Delivery Receipt' : link = "sales/newSalesInvoice";
			   break;
			   case 'Sales Return': link = "sales/newSalesReturn";
			   break;
			   case 'Purchase Order': link = "purchase/newPurchaseOrder";
			   break;
			   case 'Receiving Receipt': link = "purchase/newReceiveOrder";
			   break;
			   case 'Purchase Invoice': link = "purchase/newPurchaseInvoice";
			   break;
			   case 'Purchase Return': link = "purchase/newPurchaseReturn";
			   break;
		   }
		   
		   $().redirect(URL + link, {'id': checked, 'status': stat, 'task101': 'updatecashinvoice'})
	   });
   });
</script>

