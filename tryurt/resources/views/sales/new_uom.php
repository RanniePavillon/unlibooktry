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
        width:523px;
        margin: auto !important;
        margin-top: 70px !important;
        border: 2px solid #24b6ef;
        padding-bottom: 75px;
        /* box-shadow: 1px 1px 1px 1px rgb(7, 124, 7); */
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
        width:90%;
        margin:auto;
        /* margin-top:30px; */
    }
    .formCmtable{
        width:84%;
        margin:auto;
        font-family:verdana;
        font-size:12px;
    }
    .formCmtable input[type="text"]{
        width: 236px;
        height: 27px;
        font-family: verdana;
        font-size: 12px;
        padding: 5px;
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
    .divCNTsBelowuom{
        float: right;
        margin-top: 21px;
        margin-right: 53px;
    }
</style>

<title>
    UOM
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="container">
    <form method="post" class="cmForm boxshadow" id="form">
        <input type="button" class="close1Client" value="x">
		<div id="new1Client">
            <p class="ni1Client"><?php //echo ($task == 'addclient') ? 'CREATE NEW' : 'UPDATE' ?>CREATE NEW UOM</p>
            <!--<hr class="hrCNCClient">-->
        </div>
        <div class="formCm">
            <table class="formCmtable">
                <tr>
                    <td>UOM No.:</td>
                    <td><input type="text" name="uomNumber" value="<?php echo $this->uom->uomNumber ?>"></td>
                </tr>
                <tr>
                    <td>Measure:</td>
                    <td><input type="text" name="measure" value="<?php echo $this->uom->measure ?>"></td>
                </tr>
                <tr>
                    <td>Abbreviation:</td>
                    <td><input type="text" name="abbreviation" value="<?php echo $this->uom->abbreviation ?>"></td>
                </tr>
            </table>
        </div>
        <div class="divCNTsBelowuom">	
            <input type="hidden" name="checkitem" value="task"/>        
            <input type="hidden" name="id" value="<?php echo $this->uom->id ?>"/> 
            <input type="submit" value="SAVE" class="saveBCNTs addsavebuttonpop">
            <input type="button" value="SAVE AND ADD NEW" class="saanBCNTs addsavebuttonpop" id="saveAddNew">
        </div>
    </form>
</div>

