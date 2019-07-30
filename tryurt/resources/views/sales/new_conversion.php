<?php
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Server.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Session.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/include_dao.php';
?>

<style>
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
    .popup2{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
    .container{
        margin: auto;
    }
    .table1Enter, td{
        padding-top:3px;
    }
    .cmform{
        background-color: white;
        width:651px;
        margin: auto !important;
        margin-top: 70px !important;
        border: 2px solid #24b6ef;
        padding-bottom: 67px;
        /* box-shadow: 1px 1px 1px 1px rgb(7, 124, 7); */
        margin-bottom:30px !important;
    }

    .close1Client{
        /* background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 24px;
        right: 245px;
        top: 25px;
        outline-style: none;
        cursor: pointer;
        float: right; */
    }
    .formCm{
        width:90%;
        margin:auto;
        /* margin-top:30px; */
    }
    .formCmtable{
        width: 100%;
        margin: auto;
        font-family: verdana;
        font-size: 12px;
        margin-top: 15px;
    }
    .buttonContainer{
        margin-top:35px;
        text-align:right;
    }
    .buttonCm{
        background-color:#183867;
        color:#fff;
        font-family:agency fb2;
        font-size:18px;
        border:none;
        border-radius:5px;
        padding: 2px 15px 2px 15px;
    }
    .saveBCNTs{
        margin-right:10px;
        width: 100px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        /* background-image:url('<?= URL ?>public/images/s.png');
        background-repeat:no-repeat; */
        outline-style:none;
    }
    .saanBCNTs{
        width: 123px;
        height: 28px;
        border-radius: 4px;
        border: none;
        /* background-image:url('<?= URL ?>public/images/saan.png');
        background-repeat:no-repeat; */
        cursor: pointer;
        outline-style:none;
    }
    .divCNTsBelow{
        float: right;
        margin-top: 18px;
        margin-right: 44px;
    }
    .formCmtable input[type="text"]{
        width: 100%;
        height: 27px;
        font-family: verdana;
        font-size: 12px;
        padding: 5px;
    }
    .formCmtable select{
        width: 100%;
        height: 27px;
        font-family: verdana;
        font-size: 12px;
        padding: 5px;
    }
    .purchaseDiv{
        background:#CE1414;
        margin-left: 25px;
        padding: 5px;
        width: 162px;
        font-family: verdana;
        font-size: 15px;
        color: #fff;

    }
	.conversionSelect{
		margin-left: 5px;
		/* width: 235px; */
		height: 27px;
		background-color: white;
		font-family: Verdana;
		font-size: 11px;
		border: solid 1px #C8C8C8;
		padding: 5px;
	}
</style>

<title>
    Collection
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="container">
    <form method="post" action="" class="cmForm boxshadow" id="form">
        <input type="button" class="close1Client hidden" value="x">
        <div id="new1Client">
            <p class="ni1Client"><?php //echo ($task == 'addclient') ? 'CREATE NEW' : 'UPDATE'       ?>ITEM CONVERSION INVENTORY RELATED: <span>Manok</span></p>
            <!--<hr class="hrCNCClient">-->
        </div>
        <div class="purchaseDiv">PO : 
			<select class="conversionSelect uom2" id="uomId" required>
					<option></option>
					<?php
					if ($this->unitmeasure) {
						foreach ($this->unitmeasure as $uom) {
							?>
							<option value="<?php echo $uom->id ?>" ><?php echo $uom->abbreviation ?></option>
							<?php
						}
					}
					?>
					<option value="addnewUom">Add New UOM</option>
			</select>
		</div>

        <div class="formCm">
            <table class="formCmtable">
                <tr>
                    <th width="25%">Measurement</th>
                    <th width="25%">Round off Up/Down </th>
                    <th width="25%">Operation</th>
                    <th width="15%">Qty</th>
                </tr>
                <tr>	
                    <td>
                        <select class="tAccountCNTs uom2" id="uomId" required>
                            <option></option>
                            <?php
                            if ($this->unitmeasure) {
                                foreach ($this->unitmeasure as $uom) {
                                    ?>
                                    <option value="<?php echo $uom->id ?>" ><?php echo $uom->abbreviation ?></option>
                                    <?php
                                }
                            }
                            ?>
                            <option value="addnewUom">Add New UOM</option>
                        </select>
                    </td>
                    <td>
                        <select id='roundoff' required>
                            <option value='Up'>Up</option>
                            <option value='Down'>Down</option>
                        </select>
                    </td>
                    <td>
                        <select id='operation' required>
                            <option value='Multiply'>Multiply</option>
                            <option value='Devide'>Devide</option>
                        </select>
                    </td>
                    <td><input type="text" id='qty' required></td>
                </tr>
            </table>
        </div>
		 <div class="purchaseDiv">
			SO : 
				<select class="conversionSelect uom2" id="uomId" required>
					<option></option>
					<?php
					if ($this->unitmeasure) {
						foreach ($this->unitmeasure as $uom) {
							?>
							<option value="<?php echo $uom->id ?>" ><?php echo $uom->abbreviation ?></option>
							<?php
						}
					}
					?>
					<option value="addnewUom">Add New UOM</option>
				</select>
		</div>
        <div class="divCNTsBelow">	
            <input type="hidden" name="checkitem" value="task"/>  
            <input type="button" value="CANCEL" class="saveBCNTs close1Client addsavebuttonpop">
            <input type="submit" value="SAVE" class="saveBCNTs addsavebuttonpop" id='conv-btn'>


            <input type="hidden" name="task"  value="<?php echo $this->task ?>" />
        </div>

    </form>

</div>

<script type='text/javascript'>
    $('.cmForm').submit(function () {
        addConversion();//alert($('#roundoff2 option:selected').val());
        return false;
    });

    function addConversion() {
        uomId = $('#uomId option:selected').val();
        
        $('#conversion-line input[name="uomId2[]"]').val(uomId);
        $('#conversion-line input[name="roundOff[]"]').val($('#roundoff option:selected').val());
        $('#conversion-line input[name="operation[]"]').val($('#operation option:selected').val());
        $('#conversion-line input[name="qty[]"]').val($('#qty').val());

        $('#tblconversion > tbody').append($('#conversion-line').html());
        $('#conversion-line input[type="hidden"]').val('');

        $('.conversioning option:last').before($('<option/>', {
            value: uomId,
            text: $('#uomId option:selected').text()
        }));

        $('.conversioning option').removeAttr('selected')
                .filter('[value="' + uomId + '"]')
                .attr('selected', true);
        
        $('.popup2').addClass('hidden');
    }
</script>