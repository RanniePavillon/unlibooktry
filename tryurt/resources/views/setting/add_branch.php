<?php ?>
<style>
    .invoiceHolderCNTs{
        width: 100%;
        margin-top: 70px;
    }

    .divCNTsBelow{
        height: 42px;
        float: right;
        margin-bottom: -22px;
        margin-right: -16px;
    }
    .cnt-formCNTs{
        width: 392px;
        margin: auto !important;
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
        margin-top: -27px;
        margin-right: -27px
    }
    .NewCheck{
        margin-top: -19px;
        margin-left: 42px;
        float: left;
    }
    .taskACNTs{
        color: #000000;
        font-family:Verdana;
        font-size:12px;
    }
    .taskCheckNew{
        color: #003366;
        font-family: Agency FB;
        font-size: 12px;
        margin-left: 3px;
        -webkit-transform: scale(0.7);
        width: 19px;
        height: 28px;
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
    .taskstables td{
        padding:3px;
        padding-top:3px !important;
    }



</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>

<?php
if (isset($_GET['returnurl'])) {
    Session::setSession('returnurl', $_GET['returnurl']);
}

$taskstat = 'addoutlet';

if ($this->outlet->id != '') {
    $taskstat = 'updateoutlet';
}
?>
<div class="jsHolder">
    <!-- pls do not remove this -->
</div>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="invoiceHolderCNTs">
    <form method="post" class="cnt-formCNTs boxshadow" id="branch">
        <div id="newCNTs" class="popheadings">
            <input type="button" class="closeCNTs" value="x">
            <p class="cnt-headCNTs">CREATE NEW OUTLET</p>
        </div>

        <div>
            <table class="taskstables">	

                <tr>
                    <td class="taskACNTs">Outlet Code:</td>
                    <td>
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <input type="text" class="tAccountCNTs" id="code" name="outletCode" value="<?php echo $this->outlet->outletCode ?>" required>
                        <span style="color:red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="taskACNTs">Outlet Name:</td>
                    <td>
                        <input type="text" class="tAccountCNTs" id="oname" name="outletName" value="<?php echo $this->outlet->outletName ?>" required>
                        <span style="color:red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="taskACNTs">Outlet Type:</td>
                    <td>
                        <select class="tAccountCNTs" name="type" required >
                            <option></option>
                            <option value="Branch" <?php echo ($this->outlet->type == 'Branch') ? 'selected' : '' ?>>Company Own</option>
                            <option value="Franchise" <?php echo ($this->outlet->type == 'Franchise') ? 'selected' : '' ?>>Franchise</option>
                        </select>
                        <span style="color:red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="taskACNTs">Area Name:</td>
                    <td>
                        <select name="areaId" class="tAccountCNTs" id="areaId" required>
                            <option></option>
                            <?php
                            if ($this->areas) {
                                foreach ($this->areas as $area) {
                                    ?>
                                    <option value="<?php echo $area->id ?>" <?php echo $area->id == $this->outlet->areaId ? 'selected' :'' ?>><?php echo $area->areaName ?></option>
                                    <?php
                                }
                            }
                            ?>
                            <option value="addNewArea">[Add Area]</option>
                        </select>
                        <span style="color:red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="taskACNTs">Email Address:</td>
                    <td>
                        <input type="text" class="tAccountCNTs" id="txtEmail" name="email" value="<?php echo $this->outlet->emailAddress ?>" required>
                        <span style="color:red;">*</span>
                    </td>
                </tr>

                <?php
                if ($taskstat == 'addoutlet') {
                    ?>
                    <tr>
                        <td class="taskACNTs">Password:</td>
                        <td>
                            <input type="password" class="tAccountCNTs" name="password" minlength="6" value="<?php //echo $tbltask->description       ?>" required>
                            <span style="color:red;">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="taskACNTs">Confirm Password:</td>
                        <td>
                            <input type="password" class="tAccountCNTs" name="confirmPassword" minlength="6" value="<?php //echo $tbltask->description       ?>" required>
                            <span style="color:red;">*</span>
                        </td>
                    </tr>
                <?php } ?>

            </table>  

        </div>

        <div class="divCNTsBelow" style="margin-top:10px;">	
            <input type="hidden" name="checkitem" value="task"/>
            <?php //if($useraccess->Add == 'yes' || $useraccess->Edit == 'yes'){   ?>
            <input type="submit" value="Save" class="saveBCNTs addsavebuttonpop">
            <?php // } ?>
            <!--?php if (Session::getSession('function') != 'add' && Session::getSession('function') != 'newRecurring') { ?-->
            <?php //if (!isset($_POST['view']) && $useraccess->Add == 'yes' && $tbltask->id == '') { ?>

            <?php //} ?>
        </div>

        <input type="hidden" id="valid" value="0" />
        <input type="hidden" name="id" value="<?php echo $this->outlet->id ?>" />
        <input type="hidden" name="task" class="forTaskTask addsavebuttonpop" value="<?php echo $taskstat ?>" />
        <div style="clear:both"></div>
    </form>
</div>
<div class="popup2 hidden">

</div>
