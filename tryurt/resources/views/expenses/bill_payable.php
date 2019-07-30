<style>
.printPrev{
	padding-top: 20px;
}
.popBack{
	overflow:auto;
}	
.cnitableExp{
	border-collapse:collapse;
	width: 99%;
	margin:auto;
	margin-top: 5px;
}
.cnitableExp, th{
	/* background-color: #183867; */
	padding: 2px 2px 2px 2px;
	font-size: 12px;
	color: white;
	font-family:Verdana;
	text-align: left;
	padding: 5px;
	font-weight: bold;
}
.cnitableExp, td{
	font-size: 12px;
	color: black;
	font-family:Verdana;
	text-align: left;
	padding:5px;
	font-weight: normal;
	/* border-bottom:1px solid #c8c8c8; */
}
.cnitableExp a{
	color:blue;
	font-size: 12px;
	font-weight: normal;
	cursor: pointer;
	text-decoration: none;
	font-family:Verdana;
}
.cnitableExp a:hover{
	color:blue;
	font-size: 12px;
	font-weight: normal;
	cursor: pointer;
	text-decoration: underline;
}

.cnitableExp tr th:nth-child(6){
	text-align: right;
}
.cnitableExp tr th:nth-child(7){
	text-align: center;
}
.cnitableExp tr td:nth-child(6){
	text-align: right;
}
.cnitableExp tr td:nth-child(7){
	text-align: center;
}
.cnitableExp tr:HOVER{
	background-color: #E8E8E8;
}	
.searchB{
	/* width: 35px;
	height: 33px;
	background-image: url('<?= URL ?>public/images/searchButton.png');
	background-repeat: no-repeat;
	border-radius: 2px 2px 2px 2px;
	font-size: 14px;
	font-family: Agency FB;
	cursor: pointer;
	border: none;
	color: #fff;
	background-color: rgb(230, 250, 222);
	background-position: 3px;
	position: absolute;
	margin-top: -33px;
	margin-left: 362px;
	background-size: 100%;
	opacity: -8; */
}
.createAll{
	/* width: 210px;
	height: 32px;
	border: none;
	background-image:url('<?= URL ?>public/images/reButton.png');
	background-repeat:no-repeat;
	background-position:left;
	cursor: pointer;
	border-radius:5px;
	outline-style:none; */
}
.createAllpayable{
	/* width: 210px;
	height: 32px;
	border: none;
	background: none;
	background-image:url('<?= URL ?>public/images/RECORDBILLPAYABLE.png');
	background-repeat: no-repeat;
    background-position: -25px 0px;
    cursor: pointer;
    border-radius: 5px;
    outline-style: none;
    background-size: 126% 107%;
	/* background-repeat:no-repeat;
	background-position:left;
	cursor: pointer;
	border-radius:5px;
	outline-style:none; */ */
}
.cnitableExpHolderPage{
	background-color:#A70C0C;
	margin: auto;
	margin-top: 6px;
	width: 99%;
}
.invNoOption{
	background-color: #fff;
	color: #000;
	font-weight: bold!important;
}
.buttonHover:hover{
	color:#B13C56;
}
.buttonHover{
	outline-style:none;
}
/* .lineExpense{
	border-bottom:1px solid #e8e8e8;
} */
</style>
<title>
	ALL PAYABLE
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="mainbodyExpenses">
<div class="invoiceHolderAllExp footerHeight">
	<div id="newAllExp"  class="headings">
		<label class="allexp">ALL PAYABLE</label>
		 <?php if ($useraccess->Add == 'yes') { ?>
			<a href="<?= URL ?>expenses/newBillPayable">	 
				<!-- <label class="crossBillPayable"> -->
					<input type="button" class="createAllpayable buttonslarge" value="RECORD BILL PAYABLE">
				<!-- </label> -->
			</a>
		<?php } ?>
	</div>	
   
	<div style="clear:both;"></div>
		<div class="centerAllExp">
			<div id="search3" style="float:left;margin-top:9px;">
                            <?php if ($useraccess->Edit == 'yes') { ?>
				<input type="button" name="edit" value="EDIT" class="edit2aAllExp buttonHover buttoninvoices">
                                <?php }if ($useraccess->Add == 'yes') { ?>
				<input type="button" name="copy" value="COPY" class="copy2aAllExp buttonHover buttoninvoices">
                                <?php }if ($useraccess->Delete == 'yes') { ?>
				<input type="button" name="del" value="CANCEL" class="deleteAllExp buttonHover buttoninvoices">
                                <?php } ?>
				<input type="button" name="print" value="PRINT PREVIEW" class="printPreview buttonHover buttoninvoices">
			</div>	
			<div style="float:right;margin-right:30px;margin-top:10px;">
			<span class="filteredby">Filtered By:</span>
				<label class="labelclass">
					<select class="inumberAllExp inumber">
						<option class="invNoOption" value="payable_number">BILL PAYABLE NO.</option>
						<option class="invNoOption" value="name">VENDOR NAME</option>
					</select>
				</label>
				<input type="search" name="search" placeholder="SEARCH" class="searchindexAllE searchindex" > 
				<input type="button" name="addpayment" value="" class="searchB search2Col" style="margin-left:338px;">
			</div>
			<div style="clear:both;"></div>
		</div>
		<div class="moduleHeight">
			<table class="cnitableExp">
				<thead class="headinvoice">
					<th width="1%"><!-- <input type="checkbox" class="checkAll"> --></th>
					<th class="">Bill Payable No.</th>
					<th class="">Date</th>
					<th class="">Vendor Name</th>
					<th class="">Remarks</th>
					<th class="">Total Amount</th>
					<th class="">Status</th>
					<th class="">Date Reversed</th>
				</thead>
			</table>
		</div>
		<div class="cnitableExpHolderPage">
			
		</div>
	</div>
</div>

<div class="popBack hidden printPrev">

</div>

<script>
	$(function(){
		$('.checkAll').click(function(){
			if($(this).is(':checked')){
				$('input[type="checkbox"]').prop('checked', true);
			}else{
				$('input[type="checkbox"]').prop('checked', false);
			}
		});
	
		$('.printAllExp').click(function(){
			 $.post(URL + 'views/invoice/print_invoice.php')
				.done(function(returnData){
					$('.popBack').html(returnData);
					$('.popBack').removeClass('hidden');
					// $('body').css('overflow, auto');
					
					$('.closePrint').click(function(){
						$('.popBack').addClass('hidden');
						$('.popBack').html('');
						// $('body').css('overflow, hidden');
					});
				})
				.fail(function(){
					alert('Connection Error!');
				});
			return false;
		});
		
		$('.deleteAllExp').click(function(){
			myArray = new Array();
			
			if($('input[name="trig[]"]:checked').length == 0){
			
				alert('Please select item to delete.');
			
				return false;
					
			}
			
			$('input[name="trig[]"]:checked').each(function(){
				myArray.push($(this).val());
			});
			
			// status = $('input[name="trig[]"]:checked').parent('td').parent('tr').find('td:nth-child(7)').html();
			status = '';
			
			$('input[name="trig[]"]:checked').parent('td').parent('tr').each(function(){
				values = $(this).find('td:nth-child(7)').html();
				if(values == 'Posted' || values=='Reversed'){
					status = 'Posted';
				}
			});
			if(status == 'Posted' || status=='Reversed'){
				alert('Expense(s) may be posted/reversed. You can no longer delete the expense.');
				$('input[name="trig[]"]:checked').prop('checked',false);
				return false;
			}
			
			confirmation = confirm('Are you sure you want to delete Expense(s)?');
			if(confirmation){
				$.post(URL + 'expenses/delete',{'array':myArray})
					.done(function(returnData){
						if(returnData == 0){
							location.reload();
						} else {
							alert(returnData);
							loadEapenseList();
						}
					});
			}
			$('input[name="trig[]"]:checked').prop('checked',false);
			
		});
		
		// loadEapenseList();
		setPagenation();
		$('.searchindexAllE').keyup(function(){
			setPagenation();
		});
		
		$('.inumberAllExp').change(function(){
			setPagenation();
		});
		
		$('.edit2aAllExp').click(function(){
			if($('input[name="trig[]"]:checked').length == 0){
				alert('Please select item to edit.');
				return false;
			} else if($('input[name="trig[]"]:checked').length > 1){
				alert('Please select one record only to edit.');
				$('input[type="checkbox"]').prop('checked', false);
				return false;
			}
			
			status = '';
			
			$('input[name="trig[]"]:checked').parent('td').parent('tr').each(function(){
				values = $(this).find('td:nth-child(7)').html();
				if(values == 'Posted' || values=='Reversed'){
					status = 'Posted';
				}
			});
			
			if(status == 'Posted' || status=='Reversed'){
				alert('Expense(s) may be posted. You can no longer edit this transaction.');
				$('input[type="checkbox"]').prop('checked', false);
				return false;
			}
			
			id = $('input[name="trig[]"]:checked').val();
			
			edit(id);
		});
		
		$('.copy2aAllExp').click(function(){
			if($('input[name="trig[]"]:checked').length == 0){
				alert('Please select item to copy.');
				return false;
			} else if($('input[name="trig[]"]:checked').length > 1){
				alert('Please select one record only to copy.');
				$('input[type="checkbox"]').prop('checked', false);
				return false;
			}
			
			id = $('input[name="trig[]"]:checked').val();
			
			copy(id);
		});
		
		<?php if(Session::getSession('expenseId')){ ?>
			printPreview('<?= Session::getSession('expenseId') ?>');
		<?php } ?>
	})
	
	
	// setPagenation();
	function setPagenation(){
		search = $('.searchindexAllE').val();
		type = $('.inumberAllExp').val();
		$.post(URL + 'expenses/payablePagenation',{'search':search, 'type':type, 'pageNumber': 25})
			.done(function(returnData){
				$('.cnitableExpHolderPage').html(returnData);
			});
		
	}
	
	function edit(id){
		$.post(URL + 'expenses/editPayable',{'expenseId':id})
			.done(function(returnData){
				$('.invoiceHolderAllExp').html(returnData);
				
				$('.form1NExpense').unbind();
				$('.form1NExpense').submit(function(){
					comfirmSave = confirm('Saving changes.');
					if(!comfirmSave){
						return false;
					}
					allowWithHolding = false;
					obj = false;
					count = 0;
					$('.selectNewExp').each(function(){
						code = $(this).find('option:selected').attr('accountNum');
						// $('.wtHolder').addClass('hidden');
						
						if(code == '6000-001'){
							$('.wtHolder').removeClass('hidden');
							allowWithHolding = true;
							obj = this;
						} else if(code == '6000-004'){
							$('.wtHolder').removeClass('hidden');
							allowWithHolding = true;
							obj = this;
						} else if(code == '6000-005'){
							$('.wtHolder').removeClass('hidden');
							allowWithHolding = true;
							obj = this;
						}
						count++;
					});
					
					if(obj && count > 1){
						alert('Account is not allowed for multiple selection.');
						$(obj).focus();
						return false;
					}
					
					$.post(URL + 'expenses/editBillPayable?id='+id,$('.form1NExpense').serialize())
						.done(function(returnData){
							if(returnData == 0){
								location.reload();
							} else {
								alert(returnData);
							}
						});
					return false;
				});
				
				
				$('.postExpense').unbind();
				$('.postExpense').click(function(){
					allowWithHolding = false;
					obj = false;
					count = 0;
					$('.selectNewExp').each(function(){
						code = $(this).find('option:selected').attr('accountNum');
						// $('.wtHolder').addClass('hidden');
						
						if(code == '6000-001'){
							$('.wtHolder').removeClass('hidden');
							allowWithHolding = true;
							obj = this;
						} else if(code == '6000-004'){
							$('.wtHolder').removeClass('hidden');
							allowWithHolding = true;
							obj = this;
						} else if(code == '6000-005'){
							$('.wtHolder').removeClass('hidden');
							allowWithHolding = true;
							obj = this;
						}
						count++;
					});
					if(obj && count > 1){
						alert('Account is not allowed for multiple selection.');
						$(obj).focus();
						return false;
					}
					confirmation = confirm('Are you sure you want to post this bill payable?');
					if(confirmation){
						$.post(URL + 'expenses/editBillPayable?type=posted&id='+id,$('form').serialize())
						.done(function(returnData){
							if(returnData == 0){
								location = URL + 'expenses/billPayable';
							} else if(returnData == 'add') {
								location = URL + 'expenses/newBillPayable';
							} else {
								alert(returnData);
							}
						});
					}
				});
			});
	}
	function copy(id){
		$.post(URL + 'expenses/copyPayable',{'expenseId':id})
			.done(function(returnData){
				$('.invoiceHolderAllExp').html(returnData);
				
				$('.form1NExpense').unbind();
				$('.form1NExpense').submit(function(){
					comfirmSave = confirm('Saving data.');
					if(!comfirmSave){
						return false;
					}
					$.post(URL + 'expenses/addBillPayable',$('.form1NExpense').serialize())
						.done(function(returnData){
							if(returnData == 0){
								location.reload();
							} else {
								alert(returnData);
							}
						});
					return false;
				});
				
				$('.postExpense').unbind();
				$('.postExpense').click(function(){
					confirmation = confirm('Are you sure you want to post this expense?');
					if(confirmation){
						$.post(URL + 'expenses/addBillPayable?type=posted',$('form').serialize())
						.done(function(returnData){
							returnData = returnData.trim();
							if (returnData == 'add') {
                            location = URL + 'expenses/billPayable';
                            // location.reload();
							} else if(returnData == 0){
								// location = URL + 'expenses';
								location.reload();
							} else {
								alert(returnData);
							}
						});
					}
				});
			});
	}
	
	function printPreview(id){
		// $('.popupBack').removeClass('hidden');
		$('input[type="checkbox"]').prop('checked',false);
		$.post( URL + 'expenses/printPreviewPayable',{'id':id})
			.done(function(returnData){
				$('.popBack').html(returnData);
				$('.popBack').removeClass('hidden');
				$('body').css('overflow', 'hidden');
				
				$('.xButton').click(function(){
					$('.popBack').html('');
					$('.popBack').addClass('hidden');
					$('body').css('overflow', 'auto');
				});
			})
	}
</script>
<script>
	$(function(){
		$('.addAllExp').click(function(){
			 $.post(URL + 'views/invoice/enter_payment_new.php')
				.done(function(returnData){
					$('.popBack').html(returnData);
					$('.popBack').removeClass('hidden');
					
					$('.closeENTERPayment').click(function(){
						$('.popBack').addClass('hidden');
						$('.popBack').html('');
					});
				})
				.fail(function(){
					alert('Connection Error!');
				});
			return false;
		});
		
		$('.printPreview').click(function(){
			if($('input[name="trig[]"]:checked').length == 0){
				alert('Please select item to preview.');
				return false;
			} else if($('input[name="trig[]"]:checked').length > 1){
				alert('Please select one record only to preview.');
				$('input[type="checkbox"]').prop('checked', false);
				return false;
			}
			
			status = '';
			
			$('input[name="trig[]"]:checked').parent('td').parent('tr').each(function(){
				values = $(this).find('td:nth-child(7)').html();
				if(values == 'Posted' || values=='Reversed'){
					status = 'Posted';
				}
			});
			if(status == 'Posted' || status=='Reversed'){
				
			} else {
				alert('Sorry, unable to preview transaction.');
				$('input[name="trig[]"]:checked').prop('checked',false);
				return false;
			}
			
			id = $('input[name="trig[]"]:checked').val();
			printPreview(id);
		});
		
	})
</script>