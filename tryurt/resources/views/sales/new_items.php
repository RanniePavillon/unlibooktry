<style>
    .invoiceHolderCNTs{
        width: 100%;
        margin-top: 70px;
    }
    #newCNTs{
        font-family: agency fb2;
        color: #c51400;
        font-weight: bold;
        margin-top: 16px;
        padding-bottom: 5px;
        font-size: 30px;
    }
    .divCNTsBelowitem{
        float: right;
        margin-top:114px;
    }
    .cnt-formCNTs{
        width: 806px;
        margin: auto !important;
        font-family: Agency FB;
        font-size: 12px;
        background: #fff;
        padding: 30px;
    }
    .cnt-headCNTs{
        font-size:30px;
        font-family:agency fb2;
        margin-top: -7px;
    }
    .closeCNTs{
        background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 24px;
        right: 355px;
        top: 66px;
        outline-style: none;
        cursor: pointer;
        float: right;
        margin-top: -43px;
        margin-right: -27px
    }
    .NewCheck{
        margin-top: -19px;
        margin-left: 42;
        float: left;
    }
    .taskACNTs{
        color: #000000;
        font-family:Verdana;
        font-size:12px;
        text-align:right;
    }
    .taskCheckNew{
        color: #003366;
        font-family: Agency FB;
        font-size: 12px;
        margin-left: 5px;
        -webkit-transform: scale(0.7);
        width: 20px;
        height: 20px;
    }
    .tAccountCNTs{
        margin-left: 5px;
        width: 248px;
        height: 27px;
        background-color: white;
        font-family:Verdana;
        font-size:12px;
        border: solid 1px #C8C8C8;
        padding:5px;
		margin-top:5px;
    }
    .checkLabel{
        font-size: 12px;
        font-family: Agency FB;
        color: #000000;
    }
    .createNewTasksTble{
        float: right;
        margin-top: -50px;
        margin-right:20px; 
    }
    .rph{
        font-family:Verdana;
        font-size: 11px;
        margin-left: 5px;
        height: 27px;
        width: 270px;
        margin-top: 5px;
        padding:5px;
        border: solid 1px #C8C8C8;
    }
    .descTCNTs{
        color: #000000;
        font-family:Verdana;
        font-size:12px;
        font-weight: bold;
        margin-top: -42px;
    }
    .itemICNTs{
        width: 270px;
        height:90px;
        background-color: white;
        font-family:Verdana;
        font-size:11px;
        border: solid 1px #C8C8C8;
        margin-top: 5px;
        margin-left: 5px;
        max-width: 270px;
        max-height:90px;
        padding:5px;
    }
    .rphCNTs{
        color: #003366;
        font-family: Agency FB;
        font-size: 12px;
    }
    .rphICNTs{
        width: 130px;
        height: 30px;
        background-color: white;
        font-family: Agency FB;
        font-size: 12px;
        border: solid 1px #C8C8C8;
    }
    .vatCNTs{
        color: #003366;
        font-family: Agency FB;
        font-size: 12px;
    }
    .vatSCNTs{
        width: 150px;
        height: 30px;
        background-color: white;
        font-family: Agency FB;
        font-size: 12px;
        border: solid 1px #C8C8C8;
        margin-left: 20px;
        margin-top: 5px;
    }
    .saveBCNTs2{
        margin-right:5px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }
    .saanBCNTs2{
        border: none;
        cursor: pointer;
        outline-style:none;
    }
    .itemtable1{
        float:left;
    }	
    .itemtable2{
        margin-left:406px;
    }	
    .itemtable1 td{
		padding:0px !important;
        padding-top:0px !important;
    }
    .itemtable2 td{
		padding:0px;
        padding-top:0px !important;
    }

    .itemtable1 select{
        width: 248px !important;
		font-family:verdana;
        font-size:12px;
    }
    .viewBranch{
        color:#000;
        font-family:verdana;
        font-size:12px;
    }

</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="jsHolder">
    <!-- pls do not remove this -->
</div>

<div class="invoiceHolderCNTs">
    <form method="post" action="" class="cnt-formCNTs boxshadow" id="formtask">
        <div id="newCNTs">
            <input type="button" class="closeCNTs" value="x">
            <p class="cnt-headCNTs">CREATE NEW ITEM</p>
        </div>


        <div>
            <table class="itemtable1">	

                <tr>
                    <td class="taskACNTs">Item No.:</td>

                    <td>
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <input type="text" class="tAccountCNTs" name="itemCode" value="<?php echo $this->item->itemCode ?>" required>

                    </td>
                </tr>
                <tr>
                    <td class="taskACNTs">Item Description:</td>
                    <td>
                        <input type="text" class="tAccountCNTs" name="description" value="<?php echo $this->item->description ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="taskACNTs">Unit of Measure:</td>
                    <td>
                        <select class="tAccountCNTs uom2" name="uomId" id="uom" required >
                            <option></option>
							<option value="addnewUom">Add New UOM</option>
                            <?php
                            if ($this->unitmeasure) {
                                foreach ($this->unitmeasure as $uom) {
                                    ?>
                                    <option value="<?php echo $uom->id ?>" <?php echo ($uom->id == $this->item->uomId) ? 'selected' : '' ?>><?php echo $uom->abbreviation ?></option>
                                    <?php
                                }
                            }
                            ?>
                            <option value="addnewUom">Add New UOM</option>
                        </select>
                    </td>
                </tr>
<!--                <tr>
                    <td class="taskACNTs">Conversion Unit:</td>
                    <td>
                        <select name="convertionUnitId" class="tAccountCNTs conversioning">
                            <option></option>
                <?php
//                            if ($this->conversion) {
//                                foreach ($this->conversion as $item) {
                ?>
                                        <option value="<?php // echo $item->uomId   ?>" 
                <?php // echo $item->uomId == $this->item->convertionUnitId ? 'selected' :'' ?>
                                                ><?php // echo DAOFactory::getTblUomDAO()->load($item->uomId)->abbreviation   ?></option>
                <?php
//                                }
//                            }
                ?>
                            <option value="addnewConversion">Add Conversion</option>
                        </select>
                    </td>
                </tr>-->
                <tr>
                    <td class="taskACNTs">Product Category:</td>
                    <td>
                        <select class="tAccountCNTs" name="productCategoryId" id="productCategoy" required>
                            <option></option>
                            <?php foreach ($this->productCategory as $pc) { ?>
                                <option value="<?php echo $pc->id ?>" <?php echo ($pc->id == $this->item->productCategoryId) ? 'selected' : ''; ?>><?php echo $pc->description ?></option>
                            <?php } ?>
                            <option value="addnewcategory">Add New Product Category</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="taskACNTs">Product Type:</td>
                    <td>
                        <select class="tAccountCNTs" name="productType" required>
                            <option value="goods" <?php echo ($this->item->productType == 'goods') ? 'selected' : '' ?>>Goods</option>
                            <option value="raw mats" <?php echo ($this->item->productType == 'raw mats') ? 'selected' : '' ?>>Raw Mats</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="taskACNTs">Costing Method:</td>
                    <td>
                        <select class="tAccountCNTs" name="costingMethod" value="<?php echo Controller::getFloat($this->item->costingMethod) ?>">
                             <option value="average" <?php echo $this->item->costingMethod == 'average' ? 'selected' :'' ?>>Average</option>
                            <option value="fifo" <?php echo $this->item->costingMethod == 'fifo' ? 'selected' :'' ?>>FIFO</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="taskACNTs">GL Posting:</td>
                    <td>
                        <!--<input type="text" class="tAccountCNTs" name="glPosting" value="" required>-->
                        <select class="tAccountCNTs glpost" style="background-color:#c8c8c8;">
                            <option></option>
                            <?php foreach ($this->glPosting as $item) { ?>
                                <option value="<?php echo $item->id ?>" <?php echo ($item->id == 8) ? 'selected' : '' ?> > <?php echo $item->accontName ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden"  name="glPosting" value="8" />
                    </td>
                </tr>

                <tr>
                    <td class="taskACNTs">Active Account</td>
                    <td><input type="checkbox" checked class="taskCheckNew" name="active" <?php echo $this->item->active == 'yes' ? 'checked' : '' ?>></td>
                </tr>
            </table>

            <table class="itemtable2">
                <tr>
                    <td class="taskACNTs">Purchased Cost:</td>
                    <td>
                        <input type="text" class="tAccountCNTs isNumeric" name="purchaseCost" value="<?php echo Controller::getFloat($this->item->purchaseCost) ?>" required>
                    </td>
                </tr>

                <tr>
                    <td class="taskACNTs">Last Direct Cost:</td>
                    <td>
                        <input type="text" class="tAccountCNTs isNumeric" name="lastDirectCost" value="<?php echo Controller::getFloat($this->item->lastDirectCost) ?>" required>
                    </td>
                </tr>
               <!-- <tr>
                    <td class="taskACNTs">Branch Selling Price:</td>
                    <td>
                        <input type="text" class="tAccountCNTs isNumeric" name="lastDirectCost" value="<?php //echo Controller::getFloat($this->item->lastDirectCost)      ?>" required>
                    </td>
                </tr>-->
                                <!--<tr>
                    <td class="taskACNTs">Available Stock:</td>
                    <td>
                        <input type="text" class="tAccountCNTs" name="availableStock" value="<?php echo $this->item->availableStock ?>" required>
                    </td>
                </tr>-->
              
                <tr class="<?php echo $this->user->accountType == 'sub' ? 'hidden' :'' ?>">
                    <td class="taskACNTs">Franchise Cost:</td>
                    <td>
                        <input type="text" class="tAccountCNTs isNumeric" name="franchiseSellingPrice" value="<?php echo Controller::getFloat($this->item->franchiseSellingPrice) ?>" required>
                    </td>
                </tr>
                <tr class="hidden">
                    <td class="taskACNTs">Selling Price:</td>
                    <td>
                        <input type="text" class="tAccountCNTs isNumeric" name="sellingCost" value="<?php echo Controller::getFloat($this->item->sellingCost) ?>" required>
                    </td>
                </tr>
                <!--<tr>
                    <td class="taskACNTs">Profit %:</td>
                    <td>
                        <input type="text" class="tAccountCNTs isNumeric" name="profit" value="<?php //echo Controller::getFloat($this->item->profit) ?>" required>
                    </td>
                </tr>-->
                <tr>
                    <td class="taskACNTs" name="srpId">SRP:</td>
                   <td>
                       <input type="text" class="tAccountCNTs isNumeric" name="srp" value="<?php echo Controller::getFloat($this->item->srp) ?>" >
						<!--<select name="srpId" class="tAccountCNTs addSRPSelect">
                            <option></option>
                            <?php
                           // if (isset($this->srplist)) {
                                //foreach ($this->srplist as $srp) {
                                    ?>
                                    <option value="<?php //echo $srp->id ?>" <?php //echo $srp->id == $this->item->srpId ? 'selected' :'' ?>><?php //echo $srp->srpAmount ?></option>
                                    <?php
                                //}
                            //}
                            ?>
                            <option value="addSrp">ADD SRP</option>
                        </select>-->
                    </td>
                </tr>
                <tr class="hidden">
                    <td class="taskACNTs">Average Cost:</td>
                    <td>
                        <!--<input type="text" class="tAccountCNTs isNumeric" name="sellingCost" value="<?php echo Controller::getFloat($this->item->sellingCost) ?>" required>-->
                    </td>
                </tr>
                <tr class="hidden">
                    <td class="taskACNTs"></td>
                    <td style="text-align:right">
                        <a href="" class="viewBranch">View Branch</a>
                    </td>
                </tr>
                <!--<tr>
                    <td class="taskACNTs">Available Stock:</td>
                    <td>
                        <input type="text" class="tAccountCNTs" name="availableStock" value="<?php //echo $this->item->availableStock     ?>" required>
                    </td>
                </tr>-->
            </table>


        </div>


        <div class='hidden'>
            <?php include('ajax/conversion_list.php'); ?>
        </div>

        <div class="hidden srplist">
        <!--<input type="hidden" name="area[]" value="" />-->
        </div>

        <div class="divCNTsBelowitem">	
            <input type="hidden" name="srpAmount" value="" />
            <input type="hidden" name="checkitem" value="task"/>        
            <input type="submit" value="Save" class="saveBCNTs2 addsavebuttonpop saveButtonsPop">
            <input type="button" value="Save And Add New" class="saanBCNTs2 addsavebuttonpop saveAddButtonsPop" id="saveAddNew">
        </div>

        <input type="hidden" name="task" class="forTaskTask" value="<?php echo $this->task ?>"/>
        <div style="clear:both"></div>
    </form>
</div>
<div class="popup2 hidden">
</div>
<script>
    $('.glpost').attr("disabled", true);
</script>
