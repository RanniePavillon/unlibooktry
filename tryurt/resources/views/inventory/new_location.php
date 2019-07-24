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
        width:460px;
        margin: auto !important;
        margin-top: 70px !important;
        border: 2px solid #24b6ef;
        padding-bottom: 75px;
        margin-bottom:30px !important;
    }

    .close1Client{
        background: transparent;
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
        float: right;
    }
    .formCm{
        width:94%;
        margin:auto;
    }
    .formCmtable{
        width:84%;
        margin:auto;
        font-family:verdana;
        font-size:12px;
    }
    .formCmtable td{
        padding:0px !important;
    }
    .formCmtable input[type="text"]{
        width: 248px;
        height: 27px;
        font-family: verdana;
        font-size: 12px;
        padding: 5px;
        margin-top:5px;
        margin-left:10px;
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
        outline-style:none;
    }
    .saanBCNTs{
        width: 123px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }
    .divCNTsBelowuom{
        float: right;
        margin-top: 21px;
        margin-right: 53px;
    }
    .activeLocation{
        margin-top: 1px;
        position: absolute;
    }
    input[type="text"]:disabled{
        background:#EBEBE4;
    }
</style>

<title>
    LOCATION
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="container">
    <form method="post" class="cmForm boxshadow" id="form" >
        <input type="button" class="close1Client" value="x">
        <div id="new1Client">
            <p class="ni1Client"><?php //echo ($task == 'addclient') ? 'CREATE NEW' : 'UPDATE'   ?>CREATE NEW LOCATION</p>
            <!--<hr class="hrCNCClient">-->
        </div>
        <div class="formCm">
            <table class="formCmtable">
                <tr>
                    <td>Location No.:</td>
                    <td>
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <input type="text" name="warehouseCode" value="<?php echo $this->warehouse->warehouseCode ?>" required >
                    </td>
                </tr>
                <tr>
                    <td>Location Name:</td>
                    <td><input type="text" name="warehouseName" value="<?php echo $this->warehouse->warehouseName ?>" required></td>
                </tr>
                <tr>
                    <td><label>Active: <input type="checkbox" name="activeAccount" checked class="activeLocation"<?php echo $this->warehouse->activeAccount == 'yes' ? "checked" : "" ?>></label></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="divCNTsBelowuom">	
            <input type="hidden" name="checkitem" value="task" />
            <input type="hidden" name="task" value="<?php echo $this->task ?>" />
            <?php if ($useraccess->Add == 'yes') { ?>
                <input type="submit" value="Save" class="saveBCNTs addsavebuttonpop saveButtonsPop">
                <input type="submit" value="Save And Add New" class="saanBCNTs addsavebuttonpop saveAddButtonsPop" id="saveAddNew">
            <?php } ?>
            <input type="hidden" name="id" value="<?php echo $this->warehouse->id ?>" />
        </div>
    </form>
</div>