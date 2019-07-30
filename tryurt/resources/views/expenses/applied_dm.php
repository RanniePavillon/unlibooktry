<?php ?>
<style>
    .invoiceHolderCNTs{
        width: 100%;
        margin-top: 70px;
    }

    .divCNTsBelow{
        height: 50px;
        float: right;
        margin-bottom: -22px;
        margin-right:15px;
    }
    .cnt-formCNTs{
        width: 677px;
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
        margin-left: 42;
        float: left;
    }
    .taskACNTs{
        color: #000000;
        font-family:Verdana;
        font-size:12px;
        /*  font-weight: bold; */
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
        width: 270px;
        height: 27px;
        background-color: white;
        font-family:Verdana;
        font-size:11px;
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
    .cmTable input[type="text"]{
        width:208px;
        height:27px;
        font-family:verdana;
        font-size:12px;
        padding:5px;
    }
    .partialpaymentforms{
        margin-top:25px;
    }
    .partialpayments{
        width:208px;
        height:27px;
        font-size:12px;
        font-family:verdana;
        padding:5px;
        border:solid 1px #c8c8c8;
    }
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>

<?php
if (isset($_GET['returnurl'])) {
    Session::setSession('returnurl', $_GET['returnurl']);
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
            <p class="cnt-headCNTs">APPLIED CM</p>
        </div>
        <div>
            <table class="mainTable">
                <thead>
                    <tr>
                        <th width="10%">Ref. PR No.</th>						
                        <th  width="10%">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($this->cm) { ?>
                    <td><?php echo $this->cm->PurchaseReturnNo ?></td>
                    <td><?php echo Controller::getFloat($this->total); ?></td>
                <?php } ?>
                </tbody>
            </table>

        </div>
    </form>
</div>