<style>
    .createNewBegBalance{
        /*  background-color: #C06464;
         width: 210px;
         height: 32px;
         border: none;
         background-image: url('<?= URL ?>public/images/addNewUser.png');
         background-repeat: no-repeat;
         background-position: left;
         cursor: pointer;
         border-radius: 5px; */
    }
    .collect_tableUseP{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 15px;
    }
    .collect_tableUseP, th{
        background-color: #183867;
        padding: 11px;
        font-size:12px;
        color: white;
        font-family:Verdana;
        text-align: left;
    }
    .collect_tableUseP, td{
        font-size: 12px;
        color:black;
        font-family:Verdana;
        text-align: left;
        padding:5px;
    }
    .collect_tableUseP a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
    }
    .taxestr{
        background-color: white;
        border-bottom: solid 1px #C8C8C8;
        height: 25px;
    }
    .collect_tableUseP tr:HOVER{
        background-color: #E8E8E8;
    }	
    .buttonHover:hover{
        color:#981007;
    }
    .buttonHover{
        outline-style:none;
        font-family:agency fb2;
    }
    .hidden{
        display:none;
    }
    .moduleHeight{
        width:1000px;
    }
    .transType{
        font-size: 12px;
        font-family: Verdana;
    }
    .transTypeSelect{
        width: 150px;
        height: 27px;
        font-size: 12px;
        font-family: Verdana;
    }
    .importBegBal{
        background: none;
        border-right: 1px solid #000;
        border-left: none;
        border-top: none;
        border-bottom: none;
        padding-right: 11px;
        font-size: 12px;
        font-family: Verdana;
        outline-style: none;
        cursor:pointer;
    }
    .exportBegBal{
        background: none;
        border: none;
        font-size: 12px;
        font-family: Verdana;
        outline-style: none;
        cursor:pointer;
    }
    .invoiceHolderUseP{
        padding-bottom: 50px !important;
        margin-bottom: 20px !important;
    }
    .crossPermission:after{
        left: 605px !important;
    }

    .tfootTable{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .tfootTable, th{
        background-color: #183867;
        font-size:12px;
        color: white;
        font-family:Verdana;
        text-align: left;
        padding: 5px;
    }
    .tfootTable a{
        color: #FFF;
        text-decoration: none;
        cursor: pointer;
        font-family:Verdana;
        font-size: 9px;
        font-weight: bold;
    }
    .tfootTable a:hover{
        text-decoration:underline;
    }
    .tfootTable select{
        width: 65px;
        height: 18px;
        margin-left: 10px;
        margin-right: 10px;
    }
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="invoiceHolderUseP">
    <div class="">
        <div id="newUseP" style="float:none!important;">
			<div style="float:left;">
				<div class="headTextUseP">BEGINNING BALANCE</div>
				<div style="margin-top:10px;">
					<label class="transType">Transaction Type:</label>
					<select name="selectTransType" class="transTypeSelect">
						<option value="">--Select--</option>
						<option value="salesJournal" <?php echo $this->beginning_bal == 'sj' || $this->beginning_bal == '' ? 'selected' : '' ?>>Sales Journal</option>
						<option value="purchaseJournal" <?php echo $this->beginning_bal == 'pj' ? 'selected' : '' ?>>Purchase Journal</option>
						<option value="inventoryJournal" <?php echo $this->beginning_bal == 'ij' ? 'selected' : '' ?>>Inventory Journal</option>
						<option value="generalJournal" <?php echo $this->beginning_bal == 'gj' ? 'selected' : '' ?>>General Journal</option>
					</select>
				</div>
				<div style="margin-top: 10px;">
					<input type="button" value="Import" class="importBegBal hidden" style="padding:0px!important;">
					<input type="button" value="Export" class="exportBegBal hidden">
				</div>
				<div class="div2UseP hidden">
					<div id="button_containerUseP" style="float:left;margin-top:15px;">
						<input type="button" value="EDIT" class="printUseP addpaymentUseP buttonHover buttoninvoices" onclick="editrec('')">
						<input type="button" value="INACTIVE" class="edit1UseP buttonHover buttoninvoices" onclick="deleterec()">
					</div>
					<div style="float:right;margin-right:30px;margin-top:4px;">
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
            <!--?php if (DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->tinNum != '') { ?-->

            <div class="crossPermissions" style="float:right!important;margin-top:30px;">
				<button type="button" class="createNewBegBalance buttonslarge hidden" style="float:none!important;width:160px;margin-right:75px !important;">
					<i class="fa fa-plus-circle"></i>
					ADD NEW
				</button>
			</div>
			<div style="clear:both;"></div>
            <!--</a>-->
            <!--?php } else {
                echo 'Please complete first the company setup before adding user.';
            } ?-->
        </div>

        <form method="post" id="userfrm">
            <div class="content" style="height:820px;">
            </div>	
            
            <input type="hidden" name="task" value="" />
        </form>
    </div>
</div>
<div class="popBack hidden">

</div>
<div class="popBackImport hidden">

</div>
<div class="popBackExport hidden">

</div>
<script>
    $(function () {
        type = frm = '';

        $('.transTypeSelect').change(function () {
            type = $(this).val();

            if (type == '') {
                $('.importBegBal, .exportBegBal, .createNewBegBalance').fadeOut();
            } else {
                $('.importBegBal, .exportBegBal, .createNewBegBalance').fadeIn();
            }

            switch (type) {
                case 'salesJournal' :
                    frm = 'salesjournal/newSales';
                    break;
                case 'purchaseJournal' :
                    frm = 'purchasejournal/newPurchase';
                    break;
                case 'inventoryJournal' :
                    frm = 'inventoryjournal/newInventory';
                    break;
                case 'generalJournal' :
                    frm = 'generaljournal/newGeneral';
                    break;
            }

            showRecord(type);

            return false;
        });
        
        $('.transTypeSelect').trigger('change');

        $('.createNewBegBalance').click(function () {
            $.post(URL + frm)
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.closeNewBegBal').click(function () {
//                            if (confirm('Are you sure you want to leave this page without posting?')) {
                                $(document).off('click','#addtask');
                                $(document).off('click','.addline');
                                $(document).off('click','.addLineSales');
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                                //location.reload();
//                            }
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });
    });

    $('.importBegBal').click(function () {
        $.post(URL + 'setting/importBegBalance')
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');

                    if(type =='salesJournal'){
                        $('.type').removeClass('hidden');
                    }else if(type == 'inventoryJournal'){
                        $('.begbal').removeClass('hidden');
                    }
                    
                    $('.buttonCloseImport').click(function () {
//                        if (confirm('Are you sure you want to leave this page without posting?')) {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                            //location.reload();
//                        }
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    });

    $('.exportBegBal').click(function () {
        $.post(URL + 'setting/exportBegBalance')
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');

                    $('.buttonCloseExport').click(function () {
                        //if (confirm('Are you sure you want to leave this page without posting?')) {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                            // location.reload();
                        //}
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    });


    function showRecord(type) {
        if (type != '') {
            $.post(URL + 'setting/' + type)
                    .done(function (returnData) {
                        $('.content').html(returnData);
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
        } else {
            $('.content').html('');
        }
    }

</script>		