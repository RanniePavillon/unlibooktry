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
        width:95%;
        margin:auto;
        font-family:verdana;
        font-size:12px;
        margin-top:10px;
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
    .newSrpText{
        font-family:verdana;
        font-size:12px;
        color:#000;
    }
    .srpClassDiv{
        margin-left:38px;
    }
    input[type="text"] {
        width: 236px;
        height: 27px;
        font-family: verdana;
        font-size: 12px;
        padding: 5px;
    }
    .newSRPselect{
        width: 236px;
        height: 27px;
        font-family: verdana;
        font-size: 12px;
        padding: 5px;
        margin-top:5px;
        margin-left:26px;
    }
    .srpClassDivForm{
        border: solid 1px #c8c8c8;
        width: 91%;
        margin: auto;
        margin-top: 10px;
        padding-bottom: 15px;
    }
    .formLaman{
        margin-left:15px;
        margin-top:5px;
    }
</style>

<title>
    SRP
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="container">
    <form method="post" class="cmForm boxshadow" id="srpForm">
        <input type="button" class="close1Client" value="x">
        <div id="new1Client">
            <p class="ni1Client"><?php //echo ($task == 'addclient') ? 'CREATE NEW' : 'UPDATE'   ?>CREATE NEW SRP</p>
            <!--<hr class="hrCNCClient">-->
        </div>
        <div class="srpClassDiv">	
            <span class="newSrpText">New SRP: </span> <input type="text" name="srpAmount2" class="newSRP isNumeric" required />
        </div>
        <div class="srpClassDivForm">	
            <div class="formLaman">
                <span class="newSrpText">Area: </span> 
                <select name="areaId" class="newSRPselect"> 
                    <option></option>
                    <?php
                    $area = DAOFactory::getTblAreaDAO()->queryAll();

                    if ($area) {
                        foreach ($area as $item) {
                            ?>
                            <option value="<?php echo $item->id ?>"><?php echo $item->areaName ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div>
                <div class="formCmtable">
                    <div>
                        <input type="checkbox">
                    </div>
                    <div>
                        <input type="checkbox"> Outlet 1
                    </div>
                    <div>
                        <input type="checkbox"> Outlet 2
                    </div>
                    <div>
                        <input type="checkbox"> Outlet 3
                    </div>
                    <div>
                        <input type="checkbox"> Outlet 4
                    </div>
                    <div>
                        <input type="checkbox"> Outlet 5
                    </div>
                </div>
            </div>
        </div>


        <div class="divCNTsBelowuom">	
            <input type="hidden" name="checkitem" value="task" />        
            <input type="submit" value="SAVE" class="srpBtn saanBCNTs addsavebuttonpop">
            <!--<input type="button" value="SAVE AND ADD NEW" class="saanBCNTs addsavebuttonpop" id="saveAddNew">-->
        </div>
    </form>
    
    
</div>

