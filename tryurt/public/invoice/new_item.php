<style>
    body{
        /*overflow:hidden;*/
    }
    .popBack{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
    .popback:parent{
        overflow:hidden;
    }
    .invoiceHolderNewItem{
        width: 100%;
        margin-top:70px;

    }
    .cni-formNewItem{
        width: 520px;
		margin: auto !important;
		font-family: Agency FB;
		font-size: 12px;
		background: #fff;
		border: 2px solid #24b6ef;
		padding: 30px;
    }
    #newNewItem{
        font-family: Agency FB;
		margin-left: 20px;
		font-weight: bold;
		color: #183867;
    }
    .closeNewItem{
        background: transparent;
		color: black;
		border: none;
		border-radius: 2px;
		font-family: Arial black;
		font-weight: bold;
		font-size: 42px;
		right: 355px;
		top: 66px;
		outline-style: none;
		cursor: pointer;
		float: right;
		margin-right: -10px;
		margin-top: -20px;
    }
    .cni-headNewItem{
		font-size: 30px;
		font-family: Agency FB;
		margin-left: -21px;
		margin-top: -7px;
    }
	.newITEMTableb {
		margin-left: -11px;
	}
	
    .item-ANewItem{
        color: #000000;
        font-family: Agency FB;
        font-size: 17px;
		font-weight: bold;
    }
    .item-textNewItem{
        margin-top: 5px;
        margin-left: 5px;
        height: 27px;
        width: 248px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-family: Agency FB;
        font-size: 12px;
        padding:5px;
    }
    .item-text2NewItem{
        margin-top: 5px;
        margin-left: 5px;
        height: 27px;
        width: 248px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-family: Agency FB;
        font-size: 12px;
    }
    .cni-descNewItem{
        position: absolute;
        margin-left: 10px;
        margin-top: 39px;
        color: #003366;
        font-family: Calibri;
        font-size: 12px;
    }
    .cni-textNewItem{
        width: 248px;
        height: 90px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-family: Agency FB;
        font-size: 12px;
        max-width: 248px;
        max-height:90px;
    }
    .aveCostNewItem{
        position: absolute;
        margin-top: 153px;
        margin-left: 10px;
        color: #003366;
        font-family: Calibri;
        font-size: 12px;
    }
    .aCostNewItem{
        position: absolute;
        margin-top: 154px;
        margin-left: 115px;
        width: 150px;
        height: 31px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-family: Calibri;
        font-size: 12px;
    }
    .unitCostNewItem{
        position: absolute;
        margin-top: 190px;
        margin-left: 10px;
        color: #003366;
        font-family: Calibri;
        font-size: 12px;
    }
    .u-CostNewItem{
        position: absolute;
        margin-top: 193px;
        margin-left: 115px;
        width: 150px;
        height: 31px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-family: Calibri;
        font-size: 12px;
    }
    .cni-vatNewItem{
        float: right;
        padding-right: 60px;
        margin-top: -110px;
        color: #003366;
        font-family: Calibri;
        font-size: 12px;
    }
    .vat-selectNewItem{
        margin-top: 5px;
        margin-right: 50px;
        width: 125px;
        height: 31px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-family: Calibri;
        font-size: 12px;
    }
    .cni-uomNewItem{
        color: #003366;
        font-family: Calibri;
        font-size: 12px;
    }
    .uom-selectNewItem{
        width: 125px;
        height: 31px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-family: Calibri;
        font-size: 12px;
    }
    .cni-categNewItem{

        color: #003366;
        font-family: Calibri;
        font-size: 12px;
    }
    .categ-selectNewItem{

        width: 125px;
        height: 31px;
        border: 1px solid #C8C8C8;
        background-color: white;
        font-family: Calibri;
        font-size: 12px;
    }
    .cni-saveNewItem{
        margin-right: 20px;
		width: 100px;
		height: 28px;
		border-radius: 4px;
		font-family: Agency FB;
		font-weight: bold;
		font-size: 17px;
		color: white;
		border: none;
		cursor: pointer;
		background: #183867;
		background: -moz-linear-gradient(top, #B6B1B1 0%, #494949 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B6B1B1), color-stop(100%,#494949));
		background: #183867;
		background: -o-linear-gradient(top, #B6B1B1 0%,#494949 100%);
		background: -ms-linear-gradient(top, #B6B1B1 0%,#494949 100%);
		background: linear-gradient(bottom, #B6B1B1 0%,#494949 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='B6B1B1', endColorstr='#494949',GradientType=0 );
		cursor: pointer;

    }
    .cni-saanNewItem{
        width: 122px;
		height: 28px;
		border-radius: 4px;
		font-family: Agency FB;
		font-size: 17px;
		color: white;
		font-weight: bold;
		border: none;
		color: white;
		background: #B6B1B1;
		background: -moz-linear-gradient(top, #B6B1B1 0%, #494949 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B6B1B1), color-stop(100%,#494949));
		background: #183867;
		background: -o-linear-gradient(top, #B6B1B1 0%,#494949 100%);
		background: -ms-linear-gradient(top, #B6B1B1 0%,#494949 100%);
		background: linear-gradient(bottom, #B6B1B1 0%,#494949 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='B6B1B1', endColorstr='#494949',GradientType=0 );
		cursor: pointer;
    }
    .newItemTable2NewItem{
        margin-top: -229px;
        float: right;

    }
    .InclusiveOfVatTextNewItem{
        float: right;
        padding-right: 168px;
        margin-top: -176px;
        color:#003366;
        font-family: Calibri;
        font-size: 12px;
        font-style: italic;
    }
    .InclusiveOfVatTextCheckNewItem{
        float: right;
        padding-right: 20px;
        margin-top: -110px;
        color: #003366;
        font-family: Calibri;
        font-size: 12px;
    }
    .divBelowNewItemNewItem{
		height: 50px;
		/* width: 735px; */
		/* background-color: #E1F1CE; */
		margin-top: 2px;
		float: right;
		margin-right: 0px;
		margin-bottom: -22px;
    }
    .moptable2bClient{
        margin-top: 6px;
        margin-left: 5px;
    }
    textdescription{
        float: left;
    }
    .newTextDesc{
        margin-top: 5px;
    }
	.divContent{
		padding-left: 20px;
	}
</style>

<script>

    $(function() {

        $('#saveAddNew').click(function() {
            returnurl = 'savenew';
            $('#formitem input[name="task"]').val('additem');
			
			// return falsel
        });

        $('#formitem').submit(function() {

//            if (newrecord == "new" || $('#formitem input[name="task"]').val() == "additem") {
            checkresult = 0;
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>invoice/checkDuplicate", {checkitem: 'item', text: $('input[name="itemCode"]').val()},
            function(result) {
                checkresult = result;
            });

            if (checkresult >= 1) {
                alert('Item code already exist/record already in used in transaction(s)');
                return false;
            }
//            }


            if (typeof (newrecord) == "undefined") {
                newrecord = '';
            }


            if (newrecord == "new" || returnurl == "savenew") {

//            task = $('#form input[name="task"]').val().length; alert(task);

                $.ajax({
                    url: URL + "invoice/additemOption",
                    type: "POST",
                    data: {
                        itemCode: $('input[name="itemCode"]').val(),
                        description: $('#formitem #description').val(),
                        unitCost: $('input[name="unitCost"]').val(),
                        task: $('#formitem input[name="task"]').val(),
                        returnurl: 'addoption'
                    },
                    dataType: "JSON",
                    success: function(jsonStr) {


                        $("#formitem").trigger('reset');
                        $("#formitem input[type='text']").val('');
                        $("#formitem #description").text('');
//                        alert($('.activeObj').val());

                        if (newrecord == 'new') {
                            $('.items').each(function(i) {
                                $('option:last', $(this)).before($('<option/>', {
                                    value: jsonStr.id,
                                    text: jsonStr.text
                                }));
                            });
                            $('.activeObj').parents('tr').find('.description').val(jsonStr.description);
                            $('.activeObj').parents('tr').find('.unitCost').val($.number(jsonStr.value, 2));
                            $('.activeObj').parents('tr').find('.itemnet').val($.number(jsonStr.value.replace(/,/g, '') * $('.activeObj').parents('tr').find('.quantity').val().replace(/,/g, ''), 2));

//                        alert($('.activeObj').val());
                            $(".activeObj option").removeAttr('selected')
                                    .filter('[value="' + jsonStr.id + '"]')
                                    .attr('selected', true);


                            $('.activeObj').removeClass('activeObj');
                            subTotal();
                            $('.popBack').addClass("hidden");
                            $('.itemfrm').addClass('hidden');
                            $('body').css('overflow', 'auto');
                        }
                        returnurl = '';
                        return false;
                    }, error: function(xhr, textStatus, errorThrown) {
//                        alert('resf');
                        alert(xhr.responseText);
                    }
                });
                return false;
            }
        });
    })

</script>



<?php
$item = new TblItem();
$task = 'additem';
Session::setSession('itemid', '');
if (isset($_POST['itemid'])) {
    $itemid = $_POST['itemid'];

    $item = DAOFactory::getTblItemDAO()->load($itemid);
    Session::setSession('itemid', $itemid);
    $task = 'updateitem';
}
?>
<div class="invoiceHolderNewItem">
    <form method="post" action="<?php echo URL ?>invoice/items" class="cni-formNewItem" id="formitem">
        <div id="newNewItem">
            <input type="button" class="closeNewItem" value="x">
            <p class="cni-headNewItem"><?php echo ($task == 'additem') ? 'CREATE NEW' : 'UPDATE' ?> ITEM</p><?php //echo $_POST['itemid'][0].'dd';              ?>
        </div>
        <div class="divContent">
            <table class="newITEMTableb">	
                <tr>
                    <td class="item-ANewItem">Item Account:</td>
                    <td><input type="text" class="item-textNewItem" name="itemCode" value="<?php echo $item->itemCode ?>" required></td>
                </tr>

                <tr class="textdescription">
                    <td class="item-ANewItem"><div style="margin-top: -38px;">Description:</div></td>
                    <td class=""><textarea class="cni-textNewItem item-textNewItem item-text2NewItem newTextDesc " name="description" id="description" required><?php echo $item->description ?></textarea></td>
                </tr>

                <tr>	
                    <td class="item-ANewItem">Unit Cost:</td>
                    <td><input type="text" class="item-text2NewItem item-textNewItem isNumeric" id="numbersOnly" name="unitCost" value="<?php echo $item->unitCost ?>" required></td>
                </tr>
               <!-- <tr>
                    <td class="item-ANewItem">Category:</td>
                    <td><select class="item-text2NewItem"><option></option></select></td>
                </tr>-->
                <tr>		
                    <td class="item-ANewItem">Active Account</td>
                    <td><input type="checkbox" checked class="moptable2bClient" name=""></td>
                </tr>
            </table>


        </div>
        <div class="divBelowNewItemNewItem">	
            <input type="submit" value="Save" class="cni-saveNewItem">
            <?php if (Session::getSession('function') != 'add' && Session::getSession('function') != 'newRecurring') { ?>
                <input type="submit" value="Save and Add New" class="cni-saanNewItem" id="saveAddNew">
            <?php } ?>
            <input type='hidden' name='task' value='<?php echo $task ?>' />
            <!--<input type="hidden" name="returnurl" class="returnurl" value="" />-->
        </div>
        <div style="clear:both"></div>
    </form>

</div>	
