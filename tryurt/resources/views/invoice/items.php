<style>
    .cnitableAllItems{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .cnitableAllItems, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice, td{
        font-size: 11px;
        color: #000;
        font-family:Verdana;
        text-align: left;
        padding:11px;
    }
    .cnitableAllItems a{
        color:blue;
        font-weight: normal;
        cursor: pointer;
		font-family:Verdana;
        font-size: 11px;
        text-decoration: none;
    }
    .cnitableAllItems a:hover{
        color:blue;
        font-weight: normal;
        cursor: pointer;
        font-size: 11px;
        text-decoration: underline;
    }
    .cnitableAllItems tr:HOVER{
        background-color: #E8E8E8;
    }
    .AllItemsBack{
        background-color: white;
        margin-top: -1px;
        padding-top: 1px;
        padding-bottom:100px;
		margin-bottom: -142px;
    }	
	.ucostItem{
		width: 100%;
		border:none;
		background:none;
		font-family:Verdana;
		font-size:11px;
		background:none;
		padding-right:15px;
		height:100%;
		text-align:right;
	}
	 .tfootTable{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .tfootTable, th{
       background-color: #183867;
		font-size: 18px;
		color: white;
		font-family: Agency FB;
		text-align: left;
		padding: 11px;
		font-weight: bold;
    }
	.tfootTable a{
		color:blue;
		text-decoration:none;
		cursor:pointer;
		font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
		font-size:12px;
	}
	.tfootTable a:hover{
		font-weight:normal;
		text-decoration:underline;
	}
	.tfootTable select{
		width:50px;
		margin-left:10px;
		margin-right:10px;
	}
	.byItems{
		color: #183867;
		font-weight: bold;
		margin-left:10px;
	}
</style>
<?php
require_once ('public/paginator.php');
$pages = new Paginator;
?>
<?php
$page = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : ($_GET['page'])) : 1;
$ipp = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : $_GET['ipp']) : 25;
?>
<div class="mainbodyInvoice">
<form method='post' action='<?php echo URL ?>invoice/items?page=<?= $page ?>&ipp=<?= $ipp ?>' id='form' style="margin:0">
    <div class="ItemHolder">
        <div id="newItem">
            <p class="textHead">ALL ITEMS</p>
            <a href="#">	
                <input type="button" class="createNewI">
            </a>
        </div>	
        <div class="centerItem">
            <div id="searchItem" style="margin-left:51px;margin-top:-28px;">
                <input type="button" name="edit" value="EDIT" class="editItem" onclick="editrec('');">
                <input type="button" name="delete" value="DELETE" class="deleteItem" onclick="deleterec()">
                <input type="search" name="search" placeholder="SEARCH" class="searchindexItem" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>"> 	
                <label class="byItems">BY:</label>
                <?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : '' ?>
                <select class="inumberItem" name="searchby">
                    <option value="1" <?php echo $searchby == 1 ? 'selected' : '' ?>>ITEM NUMBER</option>
                    <option value="2" <?php echo $searchby == 2 ? 'selected' : '' ?>>DESCRIPTION</option>
                </select>
                <input type="submit" name="search2" class="search22Col" value=" ">	
				<a href="<?= URL ?>invoice/itemImport"><div style="float:left;margin-top:-32px;margin-left:506px;"><input type="button" class="buttonImp"></div></a>
            </div>
        </div>
    </div>

    <div class="AllItemsBack">
        <table class="cnitableAllItems">
            <tr class="headinvoiceItem">
                <th width="1%"><input type="checkbox" class='toggle'></th>
                <th width="24%">Item Number</th>
                <th width="26%">Item Name</th>
                <th width="24%">Date Created</th>
                <th width="24%" style="text-align:right; padding-right:20px;">Unit Cost</th>

            </tr>

            <?php
//            $items = DAOFactory::getTblItemDAO()->queryByOrgId(Session::getSession('orgid'));
            $items = TblItemMySqlExtDAO::getData();
            if (count($items) > 0) {
                foreach ($items as $item) {
                    ?>
                    <tr class="tableItem">
                        <td class=""><input type="checkbox" name='chk[]' class='chk' value='<?php echo $item->id ?>'></td>
                        <td class=""><a onclick="editrec(<?php echo $item->id ?>)"><?php echo $item->itemCode ?></a></td>
                        <td class=""><?php echo $item->description ?></td>
                        <td class=""><?php echo $item->dateCreated ?></td>
                        <td class=""><input type="text" class="numeric ucostItem" readonly="readonly" value='<?php echo $item->unitCost ?>'></td>


                    </tr>
                    <?php
                }
            }
            ?>
			
			<table class="tfootTable">
				<tfoot>
					<tr class="under">
						<td colspan="5" style="color:#fff;text-align:center;font-family:Agency FB;font-size:14px;" class="under">
							<?php
								echo $pages->display_pages();
								echo "<span style=\"margin-left:25px\width:120px\"> " . $pages->display_jump_menu()
								. $pages->display_items_per_page() . "</span>";

								echo "Page $pages->current_page of $pages->num_pages";
							?>
						</td>
					</tr>
				</tfoot>
			</table>
			
			
        </table>
    </div>
    <input type='hidden' name='task' value=''/>
</form>
</div>
<div class="popBack hidden">

</div>
<script>
    $(function() {
        $('.toggle').click(function() {
            if ($(this).is(':checked')) {
                $('input[type="checkbox"]').prop('checked', true);
            } else {
                $('input[type="checkbox"]').prop('checked', false);
            }
        });


    })

    function deleterec() {
        if ($('.chk').is(':checked')) {
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked.push(parseInt($(this).val()));
                return false;
            });

            $.post(URL + 'invoice/checkitem', {itemids: checked})
                    .done(function(returnData) {
//                                alert(returnData); return false;
                        if (returnData) {
                            alert('Unable to the delete the following record(s) due to existing transaction(s).')
                        }
                        else {
                            if (confirm('Are you sure you want to delete the following record(s)?')) {
                                $('input[name="task"]').val('delitem');
                                $('#form').submit();
                            }
                        }

                    });

        } else {
            alert('Please select record to delete');
        }
    }

    function editrec(itemid) {
        sessionStorage.setItem("username", "John");
        if ($('.chk').is(':checked') || itemid != '') {
            var checked = [];
            $("input[name='chk[]']:checked").each(function()
            {
                checked = parseInt($(this).val());
                return false;
            });

            if (itemid != '') {
                checked = parseInt(itemid);
            }

            $.post(URL + 'invoice/item', {itemid: checked})
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
						$('body').css('overflow','hidden');


                        $('.closeNewItem').click(function() {
							if (confirm('Are you sure you want to leave this page without saving?')) {
								$('.popBack').addClass('hidden');
								$('.popBack').html('');
								$('body').css('overflow','auto');
							}
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
</script>

<script>
    $(function() {
        $('.createNewI').click(function() {
            $.post(URL + 'invoice/item')
                    .done(function(returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
						$('body').css('overflow','hidden');

                        $('.closeNewItem').click(function() {
							if (confirm('Are you sure you want to leave this page without saving?')) {
								$('.popBack').addClass('hidden');
								$('.popBack').html('');
								$('body').css('overflow','auto');
							}
                        });
                    })
                    .fail(function() {
                        alert('Connection Error!');
                    });
            return false;
        });

    })
</script>