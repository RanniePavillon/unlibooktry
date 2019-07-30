<style>
    .createNSupplier{
		/* width: 210px;
		height: 32px;
		border: none;
		background-image:url('<?= URL ?>public/images/anvButton.png');
		background-repeat:no-repeat;
		background-position:left;
		cursor: pointer;
		border-radius:5px; */
    }

    .cnitableSuppliers{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .cnitableSuppliers, th{
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableSuppliers, td{
		font-size: 12px;
		color: black;
		font-family:Verdana;
		text-align: left;
		border-bottom: 1px solid #c8c8c8;
    }
	 .cnitableSuppliers tr:hover{
		background: #E8E8E8;
	 }
    .cnitableSuppliers a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: none;
		font-family:Verdana;
    }
    .cnitableSuppliers a:hover{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
    }
	/* 
    .cnitableSuppliers tr:HOVER{
        background-color:#E8E8E8;
    }	
 */
    .suppliersFormNew{
        background-color: white;
        padding-top: 1px;
        padding-bottom:70px;
    }
    .editvendor{
       width: 65px;
		font-size: 17px;
		font-family:agency fb2;
		margin-top: 5px;
		cursor: pointer;
		color: #183867;
		border: none;
		font-weight: bold;
		background: none;
    }
	.deleteVendor{
		width: 65px;
		font-size: 17px;
		font-family:agency fb2;
		margin-top: 5px;
		cursor: pointer;
		color: #183867;
		border: none;
		font-weight: bold;
		background: none;
	}
    .SearchSuppliers{
		/* width: 35px;
		height: 33px;
		background-image: url('<?=URL?>public/images/searchButton.png');
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
		margin-top:3px;
		margin-left:-38px;
		background-size: 100%;
		opacity: -8; */
    }
	.vendorformnew{
		/* box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75); */
		
	}
	
	.tfootTable{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .tfootTable, th{
		background: #183867;
		font-size:12px;
		color: white;
		font-family:Verdana;
		text-align: left;
		padding: 5px;
    }
    .tfootTable a{
		color: #fff;
		text-decoration: none;
		cursor: pointer;
		font-family:Verdana;
		font-size:9px;
		font-weight: bold;
    }
    .tfootTable a:hover{
        font-weight:weight;
        text-decoration:underline;
    }
    .tfootTable select{
        width:50px;
        margin-left:10px;
        margin-right:10px;
    }
	.invNoOption{
		background-color: #fff;
		color: #000;
		font-weight: bold!important;
	}
	.centerSuppliers{
		margin-left: 11px;
		height: 45px;
		font-size: 13px;
		font-family: Agency FB;
	}
	.inumberSuppliers{
		background-color: #5E5353;
		border-radius: 5px;
		width: 160;
		height: 29px;
		border: none;
		font-size: 16px;
		font-family:agency fb2;
		font-weight: BOLD;
		color: #fff;
		border: none;
		padding-left: 24px;
		background-image: url('<?=URL?>public/images/invNoButtonNew.png');
		background-repeat: no-repeat;
		outline-style: none;
		-webkit-appearance: none;
		-moz-appearance: none;
		cursor: pointer;
	}
	.searchindexSuppliers::-webkit-input-placeholder{
		color:#fff;
		padding-left:35px;
	}
	.searchindexSuppliers{
		/* margin-top: 6px;
		width: 160px;
		height: 29px;
		border: none;
		background-image: url('<?=URL?>public/images/searchButtonNew2.png');
		background-repeat: no-repeat;
		padding-left: 5px;
		padding-right: 40px;
		text-align: left;
		font-family:agency fb2;
		font-size: 16px;
		font-weight: bold;
		color: #fff;
		outline-style: none;
		border-radius: 5px; */
	}
	.buttonHover:hover{
		color:#B13C56;
	}
	.buttonHover{
		outline-style:none;
	}
	.imEx {
	  width: 160px;
	  height: 29px;
	  border-radius: 5px;
	  /* margin-left: 47px; */
	  cursor: pointer;
	  border: none;
	  background-image: url('<?=URL?>public/images/impExpButton.png');
	  background-repeat: no-repeat;
	  font-size: 16px;
	  font-family:agency fb2;
	  color: #fff;
	  font-weight: bold;
	  outline-style: none;
	}
	.moduleHeight{
		width:100%;
		margin:auto;
	}
</style>
<?php
	require_once ('public/paginator.php');
	$pages = new Paginator;
	$searchBy = isset($_POST['searchby']) ? $_POST['searchby'] : '';
?>
<title>
	ALL VENDORS
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="mainbodyExpenses">

	<form method="post" action="<?php echo URL ?>expenses/suppliers?page=<?= $_GET['page']  ?>&ipp=<?= ($_GET['ipp']) ?>" id="form" style="" class="vendorformnew footerHeight">
	<div id="newAllExp" class="headings">
		<label class="allexp">ALL VENDORS</label>
		<a href="<?= URL ?>invoice/newRecurring">
			<!-- <label class="crossSupplier"> -->
				<input type="button"  class="createNSupplier buttonslarge" value="ADD NEW VENDOR">
			<!-- </label> -->
		</a>
	</div>
	
	<div style="clear:both;"></div>
	<div class="centerSuppliers">
		<div id="searchSuppliers" style="float:left;margin-top:9px;">
			<input type="button" name="sendinvoice" value="EDIT" class="deleteSuppliers addSuppliers editvendor buttonHover buttoninvoices">
			<input type="button" name="sendinvoice" value="INACTIVE" class="deleteSuppliers addSuppliers deleteVendor buttonHover buttoninvoices" onclick="deleterec()">
			<input type="button" name="print" value="Record Expenses" class="createExpenseSuppliers hidden buttoninvoices">
			<input type="button" name="print" value="Transactions" class="TransactionSuppliers hidden buttoninvoices">
		</div>	
		<div style="float:right;margin-right:30px;margin-top:10px;">
			<span class="filteredby">Filtered By:</span>
			<label class="labelclass">	
				<select class="inumberSuppliers inumber" name="searchby">
					<option class="invNoOption" value="1" <?= $searchBy == 1 ? ' SELECTED ' : '' ?>>VENDOR NO.</option>
					<option class="invNoOption" value="2" <?= $searchBy == 2 ? ' SELECTED ' : '' ?>>VENDOR NAME</option>
				</select>
			</label>
			<input type="search" name="search" placeholder="SEARCH" class="searchindexSuppliers searchindex" value="<?= isset($_POST['search']) ? $_POST['search'] : '' ?>">
			<input type="submit" name="add" value="" class="SearchSuppliers search2vendor">
			<a href="<?= URL ?>expenses/vendorImEx"><input type="button" value="IMPORT/EXPORT" class="imEx"></a>
		 </div>
		 <div style="clear:both;"></div>
		 <input type="hidden" name="task" value=""/>
	</div>
		<div class="moduleHeight">
			<table class="cnitableSuppliers">
				<thead class="headinvoiceItemSuppliers">
					<th  width="1%"><!-- <input type="checkbox" class="checkAll"> --></th>
					<th class="">Vendor No.</th>
					<th class="">Date Created</th>
					<th class="">Vendor Name</th>
					<th class="">Active</th>
				</thead>
				<?php
				//$suppliers = TblSupplierMySqlExtDAO::getVNDescendingByOrgId(Session::getSession('orgid'));
				$suppliers = TblSupplierMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));
				$pages->items_total = count(TblSupplierMySqlExtDAO::getData('', -1));
				$pages->mid_range = 9;
				$pages->paginate();
				if (count($suppliers) > 0) {
				
					foreach ($suppliers as $item) {
						?>
						<tr class="tableItemSuppliers">
							<td class=""><input name="chk[]" type="checkbox" class="chk" value="<?php echo $item->id ?>"></td>
							<td class=""><a href="#" value="<?= $item->id ?>" class="viewAct"><?php echo $item->supplierAccount ?></a></td>
							<!--<td class=""><?php echo date('m / d / Y', strtotime($item->dateCreated)) ?></td>-->
							<td class=""><?php echo date('m/d/Y', strtotime($item->dateCreated)) ?></td>
							<td class=""><?php echo $item->name ?></td>
							<td class=""><?php echo $item->activeAccount ?></td>
						</tr>
						<?php
					}
				}
				?>
				
			</table>
		</div>
		<table class="tfootTable">
			<tfoot>
				<tr class="under">
					<td colspan="5" style="text-align:center;font-size:11px;color:#fff;font-weight:bold;" class="under">
						<?php
						// echo $pages->display_pages();
						echo "<span style=\"margin-left:25px\width:120px\"> " . $pages->display_jump_menu()
						. $pages->display_items_per_page() . "</span>";

						echo "Page $pages->current_page of $pages->num_pages";
						?>
					</td>
				</tr>
			</tfoot>
		</table>
		
</form>
</div>
<div class="popBack hidden">

</div>
<script>
    $(function() {
		
		$('.checkAll').click(function(){
			if($(this).is(':checked')){
				$('input[type="checkbox"]').prop('checked', true);
			}else{
				$('input[type="checkbox"]').prop('checked', false);
			}
		});
		
        $('.createNSupplier').click(function() {
            $.post(URL + 'expenses/newvendor')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.closeNewVendor1').click(function() {
                            if (confirm('Are you sure you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                                window.location.reload();
                            }
                        });


                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        });


        $('.editvendor').click(function() {
            // alert('asdf');
            if ($('input[name="chk[]"]:checked').length == 0) {
                alert('Please select item to edit.');
                return false;
            } else if ($('input[name="chk[]"]:checked').length > 1) {
                alert('Please select one record only to edit.');
				$('input[type="checkbox"]').prop('checked', false);
                return false;
            }

            value = $('input[name="chk[]"]:checked').val();
            $.post(URL + 'expenses/newvendor', {id: value})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
						$('input[type="checkbox"]').prop('checked',false);
                        $('body').css('overflow', 'hidden');


                        $('.closeNewVendor1').click(function() {
							if(confirm('Are you sure you want to leave this page without saving?')){
								$('.popBack').addClass('hidden');
								$('.popBack').html('');
								$('body').css('overflow', 'auto');
								$('input[type="checkbox"]:checked').prop('checked', false);
							}
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        });
    })
    function deleterec() {
        if ($('.chk').is(':checked')) {
			
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked.push(parseInt($(this).val()));
                // return false;
            });
// alert(checked);
            $.post(URL + 'expenses/checksuppliers', {'supplierids': checked})
                    .done(function(returnData) {
                               // alert(returnData); return false;
                        if (returnData) {
							$('input[type="checkbox"]').prop('checked',false);
							alert(returnData);
                            // alert('Unable to the delete the following record(s) due to existing transaction(s).asd')
                        } else {
                            if (confirm('Are you sure you want to delete the following record(s)?')) {
                                $('input[name="task"]').val('delsupplier');
                                $('#form').submit();
                            }
							$('input[type="checkbox"]').prop('checked',false);
                        }

                    });
        } else {
            alert('Please select record to delete');
        }
    }

    function editrec(supplierid) {
        if ($('.chk').is(':checked') || supplierid != '') {
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked.push(parseInt($(this).val()));
                return false;
            });

            if (supplierid != '') {
                checked.push(parseInt(supplierid));
            }

            $.post(URL + 'expenses/newvendor', {supplierid: checked})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeNewVendor1').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        } else {
            alert('Please select record to edit');
        }
    }

    // von code
    clickViewAct();
    function clickViewAct() {
        $('.viewAct').click(function() {
            value = $(this).attr('value');
            $.post(URL + 'expenses/newvendor', {id: value})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeNewVendor1').click(function() {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        });
    }
	/*
    $('select[name="searchby"]').change(function() {
        $('.searchindexSuppliers').keyup();
    });
    $('.searchindexSuppliers').keyup(function() {
        search = $(this).val();
        type = $('select[name="searchby"]').val();
        $.post('<?= URL ?>expenses/getSuppliers', {'search': search, 'type': type})
                .done(function(returnData) {
                    $('.cnitableSuppliers td').remove();
                    $('.cnitableSuppliers thead').append(returnData);
                    clickViewAct();
                });

    });
	*/
</script>
