<style>
    .createNewUserPermission{
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
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="invoiceHolderUseP">
    <div class="">
        <div id="newUseP">
            <label class="headTextUseP">USER & PERMISSION</label>
			<?php if (DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->tinNum != '') { ?>
                <!-- <label class="crossPermission"> -->
                    <input type="button"  class="createNewUserPermission buttonslarge" value="ADD NEW USER">
                <!-- </label> -->
                <!--</a>-->
            <?php } else {
                echo 'Please complete first the company setup before adding user.';
            } ?>
        </div>
        <div style="clear:both;"></div>
        <div class="div2UseP">
            <div id="button_containerUseP" style="float:left;margin-top:15px;">
                <input type="button" value="EDIT" class="printUseP addpaymentUseP buttonHover buttoninvoices" onclick="editrec('')">
                <input type="button" value="INACTIVE" class="edit1UseP buttonHover buttoninvoices" onclick="deleterec()">
            </div>
            <div style="float:right;margin-right:30px;margin-top:4px;">
            </div>
            <div style="clear:both;"></div>
        </div>

        <form method="post" id="userfrm">
            <div class="moduleHeight">
                <table class="collect_tableUseP">

                    <tr class="head_collectUseP">
                        <th width="2%"></th>
                        <th>User No.</th>
                        <th>Name</th>
                        <th>E-Mail Address</th>
                        <th>Type</th>
                    </tr>
                    <?php
                    $user = DAOFactory::getTblUserDAO()->queryByOrgInfoId(Session::getSession('infoid'));

                    if (count($user) > 0) {
                        foreach ($user as $item) {
                            ?>
                            <tr class="table_collectionUseP">
                                <td><input type="checkbox"  name="chk[]" class="chk" value="<?php echo $item->id ?>"></td>
                                <td><a onclick="editrec(<?php echo $item->id ?>)"><?php echo $item->userNo ?></a></td>
                                <td><?php echo $item->fullName ?></td>
                                <td><?php echo $item->emailAddress ?></td>
                                <td><?php echo $item->type ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>	
            </div>	
            <input type="hidden" name="task" value="" />
        </form>
    </div>
</div>
<div class="popBack hidden">

</div>
<script>
    $(function () {
        $('.createNewUserPermission').click(function () {
            $.post(URL + 'setting/user')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.closeNNUser').click(function () {
                            if (confirm('Are you sure you want to leave this page without posting?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                                location.reload();
                            }
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });
    })

    function deleterec() {
        if ($('.chk').is(':checked')) {
            var checked = [];
            $("input[name='chk[]']:checked").each(function ()
            {
                checked.push(parseInt($(this).val()));
                return false;
            });

            $.post(URL + 'setting/setUser', {users: checked})
                    .done(function (returnData) {
//                                alert(returnData); return false;
//                            if (returnData) {
//                                alert('Unable to the delete the following record(s) due to existing transaction(s).')
//                            }
//                            else {
                        if (confirm('Are you sure you want to inactive the following record(s)?')) {
                            $('input[name="task"]').val('deluser');
                            $.post(URL + 'setting/setUser', $('#userfrm').serialize())
                                    .done(function(resultData){
                                        location.reload();
                            });
                        }
//                            }

                    });

        } else {
            alert('Please select record to delete');
        }
    }
    function editrec(userid) {
        if ($('.chk').is(':checked') || userid != '') {
            var checked;
            $("input[name='chk[]']:checked").each(function ()
            {
                checked = parseInt($(this).val());
                return false;
            });

            if (userid != '') {
                checked = parseInt(userid);
            }
//                alert(checked);
            $.post(URL + 'setting/user', {userid: checked})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');


                        $('.closeNNUser').click(function () {
                            if (confirm('Are you sure you want to leave this page without posting?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                            }
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        } else {
            alert('Please select record to edit');
        }
    }
</script>		