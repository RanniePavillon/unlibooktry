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
        width:529px;
        margin: auto !important;
        margin-top: 70px !important;
        border: 2px solid #24b6ef;
        padding-bottom: 67px;
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
        width:94%;
        margin:auto;
        font-family:verdana;
        font-size:12px;
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
        width: 248px;
        height: 27px;
        font-family: verdana;
        font-size: 12px;
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
        <input type="button" class="close1Client" value="x">
        <div id="new1Client">
            <p class="ni1Client"><?php echo ($this->product->id == '') ? 'CREATE NEW' : 'UPDATE'   ?> PRODUCT CATEGORY</p>
            <!--<hr class="hrCNCClient">-->
        </div>
        <div class="formCm">
            <table class="formCmtable">

                <tr>
                    <td>Product Category No.:</td>
                    <td>
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <input type="text" name="productCategoryCode" value="<?php echo $this->product->productCategoryCode ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Product Category Description:</td>
                    <td><input type="text" name="description" value="<?php echo $this->product->description ?>" required></td>
                </tr>
            </table>
        </div>
        <div class="divCNTsBelow">	
            <input type="hidden" name="checkitem" value="task"/>        
            <input type="submit" value="Save" class="saveBCNTs addsavebuttonpop saveButtonsPop">
            <input type="button" value="Save And Add New" class="saanBCNTs addsavebuttonpop saveAddButtonsPop" id="saveAddNew">
            <input type="hidden" name="task"  value="<?php echo $this->task ?>" />
            <input type="hidden" name="id" value="<?php echo $this->product->id ?>" />
        </div>

    </form>

</div>

