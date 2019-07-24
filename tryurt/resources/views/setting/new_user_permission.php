<style>
    body{
        overflow:hidden;
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


    .rowTable{
        height: 30px;
        width: 100%;
        margin-top:10px;
    }
    .rowTable2{
        height: 30px;
        width: 100%;
        margin-top: 10px;
    }

    .changePassword{
        float: right;
        margin-right:31px;
        font-size:13px;
        font-family:verdana;
        color:white;
        font-weight:bold;
        border:none;
        border-radius: 5px;
        width: 140px;
        padding: 5px;
        cursor:pointer;
        background: #B6B1B1; /* Old browsers */
        background: -moz-linear-gradient(top, #B6B1B1 0%, #494949 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B6B1B1), color-stop(100%,#494949)); 
        background: -webkit-linear-gradient(top, #B6B1B1 0%,#494949 100%);
        background: -o-linear-gradient(top, #B6B1B1 0%,#494949 100%); 
        background: -ms-linear-gradient(top, #B6B1B1 0%,#494949100%); 
        background: linear-gradient(to bottom, #B6B1B1 0%,#494949 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='B6B1B1', endColorstr='#494949',GradientType=0 );
    }
    .userTable2{

    }
    .cnt-headNNUser{
        margin-top: 0px;
        font-size: 30px;
        color: #183867;
        font-family:agency fb2;
    }
    .aText{
        font-family:agency fb2;
        margin-top:0px!important;
    }
    .formUserPermissionTable{
        margin-top:0px!important;
    }
    .tableUser td{
        font-family: Verdana!important;
        font-size: 12px!important;
        font-weight: normal!important;
    }
    .TableUser2new td {
        font-family: Verdana !important;
        font-size: 12px!important;
        font-weight: normal!important;
    }
    input[type="text"]{
        font-family:Verdana !important;
        font-size:12px !important;
    }
    .PermisionName2, .PermisionEmail2, .formUserPermissionTable{
        font-family:Verdana !important;
        font-size:12px !important;
    }
    .PermisionName2{
        width: 260px!important;
        height: 28px!important;
    }
    .PermisionEmail2{
        width:260px !important;
        height: 28px !important;
    }
    .aText, .PermissionFormUser{
        font-family:agency fb2 !important;
    }
    .TableUser2new{
        float: right;
        margin-right:22px;
        margin-top:0px !important;
        font-family:Verdana !important;
    }
    .rowTable td{
        font-family: Verdana !important;
        font-size: 12px!important;
        font-weight: normal!important;
        padding:
    }
    .rowTable2 td{
        font-family: Verdana !important;
        font-size: 12px!important;
        font-weight: normal!important;
    }
    .UserPermissionTDTitle{
        font-family:agency fb2 !important;
    }
    .UserPermissionTDInvoices2new{
        margin-left:12px !important;
        overflow: hidden !important;
    }
    .UserPermissionTDInvoices3new{
        margin-left:12px !important;
        margin-top:0px !important;
    }
    .checkTd{
        width:20px;
    }
    .invoices{
        width:136px;
    }
    .accounting{
        width: 136px;
    }
    .report{
        width: 136px;
    }
    .closeNNUser{
        font-size:31px !important;
    }
    .cnt-formNNUser{
        margin-bottom:30px !important;
    }
    .invoiceHolderNNUser{
        margin-top: 30px !important;
    }
    .UserPermissionTDTitle{
        padding: 2px 19px !important;
    }
    .arrowup{

    }
    .showpassword{
        position: relative;
        top: 1;
        left: -3;
    }
    .tableUser td{
        padding-top:3px;
        padding-bottom:0px;
    }
    .TableUser2new td{
        padding-top:3px;
        padding-bottom:0px;
    }
</style>
<?php
$task = "adduser";
$user = new TblUser();
$user->userNo = TblUserMySqlExtDAO::getMaxNumId();
$userlevel = new TblUserLevel();
$useracces = new TblUserAcces();

if (isset($_POST['userid'])) {
    $userid = $_POST['userid'];
    $user = DAOFactory::getTblUserDAO()->load($userid);
    $userlevel = DAOFactory::getTblUserLevelDAO()->queryByUserId($user->id)[0];
    $useracces = DAOFactory::getTblUserAccessDAO()->queryByUserLevelId($userlevel->id)[0];
    Session::setSession('userid', $userid);
    $task = 'updateuser';
}
?>
<link href="<?= URL ?>views/setting/css/ajax.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overalls.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<title>
    Update User
</title>
<div class="invoiceHolderNNUser">

    <form method="post" action="<?php echo URL ?>setting/permission" class="cnt-formNNUser boxshadow" id="userfrm2" style="margin-bottom:30px!important;">
        <!-- <div id="newNNUser">
             <input type="button" class="closeNNUser" value="x" style="font-size:24px;">
             <p class="cnt-headNNUser"></p>
         </div>-->
        <input type="button" class="closeNNUser" value="x">
        <div id="new1Client">
            <p class="ni1Client">NEW USER</p>
            <!--<hr class="hrCNCClient">-->
        </div>

        <div class="chart-boxPermission"> 
            <p class="aText"><b>Account</b></p><span id="error" style="color:red"></span>
            <table class="tableUser" style="margin-left: 20px;float:left;">
                <tr>
                    <td class="">User No.:</td>
                    <td>
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <input type="text" class="PermisionUserNo" name="userNo" value="<?php echo $user->userNo ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="">Type:</td>
                    <td><select name="type" id="type" class="PermisionName2" required>
                            <option></option>
                            <option value="admin" <?php echo ($user->type == "admin") ? 'selected' : '' ?>>Admin</option>
                            <option value="staff" <?php echo ($user->type == "staff") ? 'selected' : '' ?>>Staff</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="">Name:</td>
                    <td><input type="text" class="PermisionName2" id="name" name="name" value="<?php echo $user->fullName ?>" required></td>
                </tr>


            </table>

            <table class="TableUser2new">

                <tr>
                    <td class="">Email Address:</td>
                    <td><input type="email" class="PermisionEmail2" name="email" value="<?php echo $user->emailAddress ?>" required></td>
                </tr>

                <?php
                if ($task == "adduser") {
                    ?>
                    <tr>
                        <td class="PermisionUserNamePer">Password:</td>
                        <td><input type="password" class="PermisionUserName2Per" name="password"></td>
                    </tr>
                    <tr>
                        <td class="PermisionUserNamePer">Confirm Password:</td>
                        <td><input type="password" class="PermisionUserName2Per" name="confirmpassword"></td>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <td class="PermisionUserNamePer">Password:</td>
                        <td><input type="password" class="PermisionUserName2Per passwordtext" name="password" value="<?php echo $user->password ?>" readonly></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="showpassword" name="showpassword">Show Password</td>
                    </tr>
                <?php } ?>
                <tr>
                    <td><input type="checkbox" name="active" <?php echo $user->active == 'yes' || $user->active == '' ? 'checked' : '' ?> class="ActiveAccountUserPermission">Active Account</td>
                </tr>
            </table>
            <div style="clear:both;"></div>
            <?php if ($task == "updateuser") { ?>
                <input type="button" class="changePassword" value="Change Password">
            <?php } ?>
        </div>
        <div style="clear:both;"></div>
        <div class="formUserPermissionTable">
            <div style="font-family:agency fb2;font-size:20px;margin-left:15px;margin-bottom:10px;"><b>Permission</b></div>
            <input type="checkbox" name="add" class="adding" <?php echo $useracces->Add == 'yes' ? 'checked' : '' ?>>Add <input type="checkbox" name="edit" <?php echo $useracces->Edit == 'yes' ? 'checked' : '' ?>>Edit <input type="checkbox" name="delete" <?php echo $useracces->Delete == 'yes' ? 'checked' : '' ?>>Cancel <br />
            <table class="rowTable">	
                <tr class="rowTable">
                    <th class="UserPermissionTDTitle" colspan="3"><input type="checkbox" name='invoiceModule' <?php echo $userlevel->invoiceModule == 'yes' ? 'checked' : '' ?>> Billing Module 
                        <span><input type="button" value="" class="arrowup hidden"><input type="button" value="" class="arrowdown"></span></th>
                </tr>
                <tr class="updown hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='cashReceipt' class="UserPermissionTDInvoices2new cashReceipt" <?php echo $userlevel->cashReceipt == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Cash Receipt </td>
                    <td>Allow user to <span class="create hidden">create,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the cash receipts <span class="cancel hidden">and cancel the open transaction</span></td>
                </tr>
                <tr class="updown hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='billing' class="UserPermissionTDInvoices3new" <?php echo $userlevel->billing == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Billing</td>
                    <td>Allow user to <span class="create hidden">create,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the billing invoice <span class="cancel hidden"> and cancel the open transaction</span></td>
                </tr>
<!--                <tr>
                    <td><input type="checkbox" class="UserPermissionTDInvoices3new">&nbsp Recurring</td>
                    <td style="padding-left: 117px;padding-top: 10px;">Allow user to create, post and send recurring transactions</td>
                </tr>-->
                <tr class="updown hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='collections' class="UserPermissionTDInvoices3new" <?php echo $userlevel->collections == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Collections</td>
                    <td>Allow user to <span class="create hidden">record,</span><span class="edit hidden"> edit,</span> view, save, post, <span class="and hidden">and</span> reverse the collections <span class="cancel hidden"> and cancel the open transaction</span></td>
                </tr>
                <tr class="updown hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='client' class="UserPermissionTDInvoices3new" <?php echo $userlevel->client == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Customers</td>
                    <td>Allow user to add new customer, edit and deactivate the vendor</td>
                </tr>
                <tr class="updown hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='serviceItem' class="UserPermissionTDInvoices3new" <?php echo $userlevel->serviceItem == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Items</td>
                    <td>Allow user to add new service item and edit the existing</td>
                </tr>
            </table>	


            <table class="rowTable">	
                <tr class="rowTable">
                    <th class="UserPermissionTDTitle" colspan="3"><input type="checkbox" name='salesModule' <?php echo $userlevel->salesModule == 'yes' ? 'checked' : '' ?>>Sales Module 
                        <span><input type="button" value="" class="arrowup5 hidden"><input type="button" value="" class="arrowdown5"></span></th>
                </tr>
                <tr class="updown5 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='cashInvoice' class="UserPermissionTDInvoices2new cashReceipt" <?php echo $userlevel->cashInvoice == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Cash Invoice</td>
                    <td>Allow user to <span class="create hidden">create,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the cash invoice <span class="cancel hidden">and cancel the open transaction</span></td>
                </tr>
                <tr class="updown5 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='salesOrder' class="UserPermissionTDInvoices3new" <?php echo $userlevel->salesOrder == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Sales Order</td>
                    <td>Allow user to <span class="create hidden">create,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the sales order <span class="cancel hidden"> and cancel the open transaction</span></td>
                </tr>
                <tr class="updown5 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='deliveryReceipt' class="UserPermissionTDInvoices3new" <?php echo $userlevel->deliveryReceipt == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Delivery Receipt</td>
                    <td>Allow user to <span class="create hidden">create,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the delivery receipt <span class="cancel hidden"> and cancel the open transaction</span></td>
                </tr>
                <tr class="updown5 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='salesInvoice' class="UserPermissionTDInvoices3new" <?php echo $userlevel->salesInvoice == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Sales Invoice</td>
                    <td>Allow user to <span class="create hidden">create,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the sales invoice <span class="cancel hidden"> and cancel the open transaction</span></td>
                </tr>
                <tr class="updown5 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='salesCollection' class="UserPermissionTDInvoices3new" <?php echo $userlevel->salesCollection == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Sales Collections</td>
                    <td>Allow user to <span class="create hidden">record,</span><span class="edit hidden"> edit,</span> view, save, post, <span class="and hidden">and</span> reverse the collections <span class="cancel hidden"> and cancel the open transaction</span></td>
                </tr>
                <tr class="updown5 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='cm' class="UserPermissionTDInvoices3new" <?php echo $userlevel->cm == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">CM</td>
                    <td>Allow user to <span class="create hidden">record,</span><span class="edit hidden"> edit,</span> view, save, post, <span class="and hidden">and</span> reverse the credit memo <span class="cancel hidden"> and cancel the open transaction</span></td>
                </tr>
                <tr class="updown5 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='salesReturn' class="UserPermissionTDInvoices3new" <?php echo $userlevel->salesReturn == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Sales Return</td>
                    <td>Allow user to <span class="create hidden">create,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the sales return <span class="cancel hidden"> and cancel the open transaction</span></td>
                </tr>
                <tr class="updown5 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='salesItem' class="UserPermissionTDInvoices3new" <?php echo $userlevel->salesItem == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Items</td>
                    <td>Allow user to add new item and edit the existing</td>
                </tr>
            </table>

            <table class="rowTable">	
                <tr class="rowTable">
                    <th class="UserPermissionTDTitle" colspan="3"><input type="checkbox" name='purchaseModule' <?php echo $userlevel->purchaseModule == 'yes' ? 'checked' : '' ?>>Purchase Module 
                        <span><input type="button" value="" class="arrowup6 hidden"><input type="button" value="" class="arrowdown6"></span></th>
                </tr>
                <tr class="updown6 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='purchaseOrder' class="UserPermissionTDInvoices2new cashReceipt" <?php echo $userlevel->purchaseOrder == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Purchase Order</td>
                    <td>Allow user to <span class="create hidden">create,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the purchase order <span class="cancel hidden">and cancel the open transaction</span></td>
                </tr>
                <tr class="updown6 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='receiveOrder' class="UserPermissionTDInvoices3new" <?php echo $userlevel->receiveOrder == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Receive Order</td>
                    <td>Allow user to <span class="create hidden">create,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the receive order <span class="cancel hidden"> and cancel the open transaction</span></td>
                </tr>
                <tr class="updown6 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='purchaseInvoice' class="UserPermissionTDInvoices3new" <?php echo $userlevel->purchaseInvoice == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Purchase Invoice</td>
                    <td>Allow user to <span class="create hidden">create,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the purchase invoice <span class="cancel hidden"> and cancel the open transaction</span></td>
                </tr>
                <tr class="updown6 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='purchaseReturn' class="UserPermissionTDInvoices3new" <?php echo $userlevel->purchaseReturn == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Purchase Return</td>
                    <td>Allow user to <span class="create hidden">create,</span> <span class="edit hidden">edit,</span> view, save, post the purchase return <span class="cancel hidden"> and cancel the open transaction</span></td>
                </tr>

<!--                <tr class="updown6 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='serviceItem' class="UserPermissionTDInvoices3new" <?php echo $userlevel->serviceItem == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Items</td>
                    <td>Allow user to add new item and edit the existing</td>
                </tr>-->
            </table>

            <table class="rowTable">	
                <tr class="rowTable">
                    <th class="UserPermissionTDTitle" colspan="3"><input type="checkbox" name='inventoryModule' <?php echo $userlevel->inventoryModule == 'yes' ? 'checked' : '' ?>>Inventory Module 
                        <span><input type="button" value="" class="arrowup7 hidden"><input type="button" value="" class="arrowdown7"></span></th>
                </tr>
                <tr class="updown7 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='onHand' class="UserPermissionTDInvoices2new cashReceipt" <?php echo $userlevel->onHand == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">On Hand</td>
                    <td>Allow user to <span class="create hidden">view inventory of an item on hand.</td>
                </tr>
                <tr class="updown7 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='counting' class="UserPermissionTDInvoices2new cashReceipt" <?php echo $userlevel->counting == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Counting</td>
                    <td>Allow user to <span class="create hidden">view and add inventory of an item. </td>
                </tr>
                <tr class="updown7 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='transfer' class="UserPermissionTDInvoices2new cashReceipt" <?php echo $userlevel->transfer == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Transfer</td>
                    <td>Allow user to <span class="create hidden">create,</span> <span class="edit hidden">edit,</span> view, save, post the transfer of an item from one warehouse to another. </td>

                </tr>
                <tr class="updown7 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='warehouse' class="UserPermissionTDInvoices3new" <?php echo $userlevel->warehouse == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">All Warehouses</td>
                    <td>Allow user to add new warehouse and edit the existing</td>
                </tr>
                <tr class="updown7 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='productCat' class="UserPermissionTDInvoices3new" <?php echo $userlevel->productCat == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Product Category</td>
                    <td>Allow user to add new product category and edit the existing</td>
                </tr>
                <tr class="updown7 hidden">
                    <td class="checkTd">
                        <input type="checkbox" name='area' class="UserPermissionTDInvoices3new" <?php echo $userlevel->area == 'yes' ? 'checked' : '' ?>>
                    </td>
                    <td class="invoices">Area</td>
                    <td>Allow user to add new area and edit the existing</td>
                </tr>

            </table>

            <table class="rowTable2">	
                <tr class="rowTable">
                    <th class="UserPermissionTDTitle" colspan="3">
                        <input type="checkbox" name='expensesModule' <?php echo $userlevel->expensesModule == 'yes' ? 'checked' : '' ?>>
                        Expenses <span><input type="button" value="" class="arrowup1 hidden"><input type="button" value="" class="arrowdown1">
                            </th>
                            </tr>
                            <tr class="updown1 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='expense' class="UserPermissionTDInvoices2new " <?php echo $userlevel->expense == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td style="width:136px;">Expenses</td>
                                <td>Allow user to <span class="create hidden">record,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the expenses <span class="cancel hidden">and cancel the open transaction</span></td>
                            </tr>
                            <tr class="updown1 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='quickExpense' class="UserPermissionTDInvoices3new" <?php echo $userlevel->quickExpense == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td>Quick Expense</td>
                                <td>Allow user to <span class="create hidden">record,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the expenses <span class="cancel hidden">and cancel the open transaction</span></td>
                            </tr>
                            <tr class="updown1 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='expense' class="UserPermissionTDInvoices2new " <?php echo $userlevel->expense == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td style="width:136px;">Bill Payable</td>
                                <td>Allow user to <span class="create hidden">record,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the bill payable <span class="cancel hidden">and cancel the open transaction</span></td>
                            </tr>
                            <tr class="updown1 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='expense' class="UserPermissionTDInvoices2new " <?php echo $userlevel->expense == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td style="width:136px;">Payment</td>
                                <td>Allow user to <span class="create hidden">record,</span> <span class="edit hidden">edit,</span> view, save, post, <span class="and hidden">and</span> reverse the payment <span class="cancel hidden">and cancel the open transaction</span></td>
                            </tr>
                            <tr class="updown1 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='vendor' class="UserPermissionTDInvoices3new" <?php echo $userlevel->vendor == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td>Vendors</td>
                                <td>Allow user to add new vendor , edit the existing and deactivate the vendor</td>
                            </tr>

            </table>	

            <table class="rowTable2">	
                <tr class="rowTable">
                    <th class="UserPermissionTDTitle" colspan="3">
                        <input type="checkbox" name='accountingModule' <?php echo $userlevel->accountingModule == 'yes' ? 'checked' : '' ?>>
                        Accounting <span><input type="button" value="" class="arrowup2 hidden"><input type="button" value="" class="arrowdown2">
                            </th>
                            </tr>
                            <tr class="updown2 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='cOA' class="UserPermissionTDInvoices2new " <?php echo $userlevel->cOA == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="accounting" style="width:136px;">COA</td>
                                <td>Allow user to add chart of account and edit only the added GL</td>
                            </tr>
                            <tr class="updown2 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='journalEntry' class="UserPermissionTDInvoices3new" <?php echo $userlevel->journalEntry == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="accounting">Journal Entry</td>
                                <td>Allow user to record, save and post the transaction or adjusting entries</td>
                            </tr>
            </table>

            <table class="rowTable2 hidden">	
                <tr class="rowTable">
                    <th class="UserPermissionTDTitle" colspan="3">
                        <input type="checkbox" name='taxPlanModule' <?php echo $userlevel->taxPlanModule == 'yes' ? 'checked' : '' ?>>
                        Taxplan <span><input type="button" value="" class="arrowup4 hidden"><input type="button" value="" class="arrowdown4">
                            </th>
                            </tr>
                            <tr class="updown4 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='forecasted' class="UserPermissionTDInvoices2new " <?php echo $userlevel->forecasted == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="accounting" style="width:136px;">Forecasted</td>
                                <td>Allow user to plan/forecast the tax for the year</td>
                            </tr>
                            <tr class="updown4 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='current' class="UserPermissionTDInvoices3new" <?php echo $userlevel->current == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="accounting">Current</td>
                                <td>Allow user to view the current  tax for the year</td>
                            </tr>
                            <tr class="updown4 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='taxCalendar' class="UserPermissionTDInvoices3new" <?php echo $userlevel->taxCalendar == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="accounting">Current</td>
                                <td>Allow user to add, edit and delete item transactions</td>
                            </tr>
            </table>

<!--            <table class="rowTable2">	
                <tr class="rowTable">
                    <td class="UserPermissionTDTitle" colspan="3">Time Tracking</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="UserPermissionTDInvoices2new ">&nbsp Time Tracking </td>
                    <td style="padding-left: 133px;padding-top: 10px;">Allow user to access the whole time tracking transactions</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="UserPermissionTDInvoices3new">&nbsp Time Sheet</td>
                    <td style="padding-left: 133px;padding-top: 10px;">Allow user to create, edit, cancel and delete time sheet transactions</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="UserPermissionTDInvoices3new">&nbsp Project</td>
                    <td style="padding-left: 133px;padding-top: 10px;">Allow user to add, edit and delete project transactions</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="UserPermissionTDInvoices3new">&nbsp Task</td>
                    <td style="padding-left: 133px;padding-top: 10px;">Allow user to add, edit and delete task transactions</td>
                </tr>

            </table>-->

<!--            <table class="rowTable2">	
                <tr class="rowTable">
                    <td class="UserPermissionTDTitle" colspan="3"><input type="checkbox" name="setting">Setting <input type="checkbox" name="settingview">View <input type="checkbox" name="settingadd">Add <input type="checkbox" name="settingedit">Edit <input type="checkbox" name="settingdelete">Delete</td>
                </tr>-->
<!--                <tr>
                    <td><input type="checkbox" name="setting" class="UserPermissionTDInvoices2new ">&nbsp Setting </td>
                    <td style="padding-left: 58px;padding-top: 10px;">Allow user to access the whole setting transactions</td>
                </tr>-->
<!--                <tr>
                    <td><input type="checkbox" name="company" class="UserPermissionTDInvoices3new">&nbsp Company</td>
                    <td style="padding-left: 58px; padding-top: 10px;">Allow user to view and edit company profile</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="taxes" class="UserPermissionTDInvoices3new">&nbsp Taxes</td>
                    <td style="padding-left: 58px; padding-top: 10px;">Allow user to add, edit and delete tax transactions</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="bank" class="UserPermissionTDInvoices3new">&nbsp Bank</td>
                    <td style="padding-left: 58px; padding-top: 10px;">Allow user to add, edit and delete bank transactions</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="coa" class="UserPermissionTDInvoices3new">&nbsp Chart of Account</td>
                    <td style="padding-left: 58px; padding-top: 10px;">Allow user to add, edit and delete chart of account transactions</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="user" class="UserPermissionTDInvoices3new">&nbsp User & Permission</td>
                    <td style="padding-left: 58px; padding-top: 10px;">This permissions is for admin user only</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="importexport" class="UserPermissionTDInvoices3new">&nbsp Import & Export</td>
                    <td style="padding-left: 58px;padding-top: 10px;">Allow user to import and export files</td>
                </tr>

            </table>	-->

            <table class="rowTable2">	
                <tr class="rowTable">
                    <th class="UserPermissionTDTitle" colspan="3">
                        <input type="checkbox" name='reports' <?php echo $userlevel->reports == 'yes' ? 'checked' : '' ?> >
                        Reports <span><input type="button" value="" class="arrowup3 hidden"><input type="button" value="" class="arrowdown3">
                            </th>
                            </tr>
                            <tr class="updown3 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='fS' class="UserPermissionTDInvoices2new " <?php echo $userlevel->fS == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="report">Financial Statement</td>
                                <td>Allow user to generate, export and print the reports</td>
                            </tr>

                            <tr class="updown3 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='aR' class="UserPermissionTDInvoices2new " <?php echo $userlevel->aR == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="report">Accounts Receivable</td>
                                <td>Allow user to generate, export and print the reports</td>
                            </tr>
                            <tr class="updown3 hidden">
                                <td class="checkTd">
                                    <input type="checkbox" name='aR' class="UserPermissionTDInvoices2new " <?php echo $userlevel->aR == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="report">Accounts Payable</td>
                                <td>Allow user to generate, export and print the reports</td>
                            </tr>

                            <tr class="updown3 hidden">
                                <td class="checkTd"	>
                                    <input type="checkbox" name='sales' class="UserPermissionTDInvoices2new " <?php echo $userlevel->sales == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="report">Sales </td>
                                <td>Allow user to generate, export and print the reports</td>
                            </tr>
                            <tr class="updown3 hidden">
                                <td class="checkTd"	>
                                    <input type="checkbox" name='sales' class="UserPermissionTDInvoices2new " <?php echo $userlevel->sales == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="report">Purchase</td>
                                <td>Allow user to generate, export and print the reports</td>
                            </tr>
                            <tr class="updown3 hidden">
                                <td class="checkTd"	>
                                    <input type="checkbox" name='sales' class="UserPermissionTDInvoices2new " <?php echo $userlevel->sales == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="report">Inventory </td>
                                <td>Allow user to generate, export and print the reports</td>
                            </tr>
                            <tr class="updown3 hidden">
                                <td class="checkTd"	>
                                    <input type="checkbox" name='OR' class="UserPermissionTDInvoices2new " <?php echo $userlevel->OR == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="report">Other Reports</td>
                                <td>Allow user to generate, export and print the reports</td>
                            </tr>
                            <tr class="updown3 hidden">
                                <td class="checkTd"	>
                                    <input type="checkbox" name='bIR' class="UserPermissionTDInvoices2new " <?php echo $userlevel->bIR == 'yes' ? 'checked' : '' ?>>
                                </td>
                                <td class="report">BIR Reports</td>
                                <td>Allow user to generate, save , post,export and print the reports</td>
                            </tr>

            </table>		

        </div>	
        <input type="hidden" name="task" value="<?php echo $task ?>" />
        <div class="buttonNBank">	
            <input type="submit" value="Save" class="saveBNNUserP addsavebuttonpop saveButtonsPop">
            <input type="submit" value="Save And Add New" class="saanBNNUserP addsavebuttonpop saveAddButtonsPop" id="saveAddNew">
        </div>
        <div style="clear:both"></div>
    </form>
    <span><input type="button" value="" class="arrowup hidden"><input type="button" value="" class="arrowdown"></span>
</div>

<script>
    $(function () {
        returnurl = '';

        $('input[name="showpassword"]').click(function () {
            if ($(this).is(':checked')) {
                $('.passwordtext').replaceWith($('.passwordtext').clone().attr('type', 'text'));
            } else {
                $('.passwordtext').replaceWith($('.passwordtext').clone().attr('type', 'password'));
            }
        });

        $('.arrowup').click(function () {
            $('.arrowdown').removeClass('hidden');
            $('.arrowup').addClass('hidden');
            $('.updown').addClass('hidden');
        });
        $('.arrowdown').click(function () {
            $('.arrowup').removeClass('hidden');
            $('.arrowdown').addClass('hidden');
            $('.updown').removeClass('hidden');
        });

        $('.arrowup1').click(function () {
            $('.arrowdown1').removeClass('hidden');
            $('.arrowup1').addClass('hidden');
            $('.updown1').addClass('hidden');
        });
        $('.arrowdown1').click(function () {
            $('.arrowup1').removeClass('hidden');
            $('.arrowdown1').addClass('hidden');
            $('.updown1').removeClass('hidden');
        });

        $('.arrowup2').click(function () {
            $('.arrowdown2').removeClass('hidden');
            $('.arrowup2').addClass('hidden');
            $('.updown2').addClass('hidden');
        });
        $('.arrowdown2').click(function () {
            $('.arrowup2').removeClass('hidden');
            $('.arrowdown2').addClass('hidden');
            $('.updown2').removeClass('hidden');
        });
        $('.arrowup3').click(function () {
            $('.arrowdown3').removeClass('hidden');
            $('.arrowup3').addClass('hidden');
            $('.updown3').addClass('hidden');
        });
        $('.arrowdown3').click(function () {
            $('.arrowup3').removeClass('hidden');
            $('.arrowdown3').addClass('hidden');
            $('.updown3').removeClass('hidden');
        });

        $('.arrowup4').click(function () {
            $('.arrowdown4').removeClass('hidden');
            $('.arrowup4').addClass('hidden');
            $('.updown4').addClass('hidden');
        });
        $('.arrowdown4').click(function () {
            $('.arrowup4').removeClass('hidden');
            $('.arrowdown4').addClass('hidden');
            $('.updown4').removeClass('hidden');
        });

        $('.arrowup5').click(function () {
            $('.arrowdown5').removeClass('hidden');
            $('.arrowup5').addClass('hidden');
            $('.updown5').addClass('hidden');
        });
        $('.arrowdown5').click(function () {
            $('.arrowup5').removeClass('hidden');
            $('.arrowdown5').addClass('hidden');
            $('.updown5').removeClass('hidden');
        });

        $('.arrowup6').click(function () {
            //alert('fdg');
            $('.arrowdown6').removeClass('hidden');
            $('.arrowup6').addClass('hidden');
            $('.updown6').addClass('hidden');
        });
        $('.arrowdown6').click(function () {
            $('.arrowup6').removeClass('hidden');
            $('.arrowdown6').addClass('hidden');
            $('.updown6').removeClass('hidden');
        });
        $('.arrowup7').click(function () {
            //alert('fdg');
            $('.arrowdown7').removeClass('hidden');
            $('.arrowup7').addClass('hidden');
            $('.updown7').addClass('hidden');
        });
        $('.arrowdown7').click(function () {
            $('.arrowup7').removeClass('hidden');
            $('.arrowdown7').addClass('hidden');
            $('.updown7').removeClass('hidden');
        });


        $('.changePassword').click(function () {
            $.post(URL + 'setting/change_password')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');


                        $('.changebuttonCancel').click(function () {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });

        $('input[name="invoiceModule"],input[name="expensesModule"],input[name="taxPlanModule"],input[name="accountingModule"],input[name="reports"],\n\
            input[name="salesModule"],input[name="purchaseModule"],input[name="inventoryModule"]').click(function () {
            if ($(this).is(':checked')) {
                $(this).parents('table').find('input[type="checkbox"]').prop('checked', true);
            } else {
                $(this).parents('table').find('input[type="checkbox"]').prop('checked', false);
            }
        })

        $('#saveAddNew').click(function () {
            returnurl = 'savenew';
        });


        $('#userfrm2').submit(function () {
            $('#error').text('');

            if ($("#userfrm2 input[name='task']").val() == "adduser") {
                if (checkeEmail($('input[name="email"]').val()) == 0) {
                    $('#error').text('Email already exist');
                    alertWithoutNotice('Email already exist');
                    return false;
                }
            }

            if ($("input[name='confirmpassword']").length) {
                if ($("input[name='password']").val() !== $("input[name='confirmpassword']").val()) {
                    alert('Password and confirm password do not match.');
                    return false;
                }
            }


            $.post(URL + "setting/setUser",
                    $('#userfrm2').serialize()
                    ,
                    function (result) {
                        if (returnurl == "savenew") {
                            $('.createNewUserPermission').click();
                        }
                        if (returnurl != 'savenew') {
                            $('.popBack').addClass("hidden");
                            $('.userfrm2').addClass('hidden');
                            $('body').css('overflow', 'auto');

                            location.reload();
                        }
                    });
            return false;

        });

<?php if ($task == 'adduser') { ?>
            $('input[type="checkbox"]').prop('checked', true);
<?php } ?>
    })

    function checkeEmail(email) {
        //get the email  
        stat = 0;
        $.ajaxSetup({async: false});
        $.post("<?= URL ?>user/checkEmail", {email: email},
                function (result) {
                    if (result > 1) {
                        stat = 0;
                    } else {
                        stat = 1;
                    }
                });
        $.ajaxSetup({async: true});
        return stat;
    }
</script>

<script>
    $(function () {

        $(function () {
            checkadd();

            function checkadd() {
                if ($('input[name="add"]:checked').is(':checked')) {
                    $('.create').removeClass('hidden');
                } else {
                    $('.create').addClass('hidden');
                }
            }
            $('input[name="add"]').change(function () {
                checkadd();
            });
        });

        $(function () {
            checkedit();

            function checkedit() {
                if ($('input[name="edit"]:checked').is(':checked')) {
                    $('.edit').removeClass('hidden');
                } else {
                    $('.edit').addClass('hidden');
                }
            }
            $('input[name="edit"]').change(function () {
                checkedit();
            });
        });

        $(function () {
            checkcancelled();

            function checkcancelled() {
                if ($('input[name="delete"]:checked').is(':checked')) {
                    $('.cancel').removeClass('hidden');
                    $('.and').addClass('hidden');
                } else {
                    $('.cancel').addClass('hidden');
                    $('.and').removeClass('hidden');
                }
            }
            $('input[name="delete"]').change(function () {
                checkcancelled();
            });
        });
    });

</script>
