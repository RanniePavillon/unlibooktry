<?php
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Server.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Session.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/include_dao.php';
?>

<?php //Session::setSession('orgid', 46);?>
<style>
    .popBack, .popup{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
    .popback:parent{
        overflow:hidden;
    }
	
	
	
	
.invoiceHolderCNTs{
	width: 100%;
	margin-top: 50px;
}
#newCNTs{
	font-family: Calibri;
	margin-left: 20px;
	font-style: italic;
	font-weight: none;
}
.divCNTsBelow{
	/* width: 735px; */
	height: 50px;
	/*background-color: #E1F1CE;*/
	margin-top: 2px;
	float:right;
	margin-right:15px;
}
.cnt-formCNTs{
	width: 583px;
	margin: auto;
	background-color: white;
	
}
.cnt-headCNTs{
	margin-top: -15px;
	font-size: 30px;
	font-family:verdana;
}

.hrCNTs{
	width: 583px;
	border: 2px solid gray;
	margin-left: -21px;
	margin-top: -20px;
	border-radius: 3px;
	height: 4px;
	background-color: gray;
	
}
.closeCNTs{
	background-color: gray;
	color: white;
	border: none;
	border-radius: 2px;
	font-family: Cambria;
	font-style: bold;
	font-size: 16px;
	height: 25px;
	margin-left: 541px;
	
}
.NewCheck{
	margin-top: -19px;
	margin-left: 42;
	float: left;
}
.taskACNTs{
	color: #000000;
	font-family: verdana;
	font-size: 12px;
	padding-left: 20px;
}
.taskCheckNew{
	color: #003366;
	font-family: Calibri;
	font-size: 12px;
	margin-left: 19px;
}
.tAccountCNTs{
	margin-left: 25px;
	margin-top: 7px;
	width: 190px;
	height: 27px;
	background-color: white;
	font-family: verdana;
	font-size: 12px;
	border: solid 1px #C8C8C8;
	padding:5px;
}
.checkLabel{
	font-size: 12px;
	font-family: verdana;
	color: #000000;
}
.createNewTasksTble{
	float: right;
	margin-top: -50px;
	margin-right:20px; 
}
.rph{
	font-family: verdana;
	font-size: 12px;
	margin-left: 25px;
	height: 27px;
	width: 190px;
	margin-top: 5px;
	padding:5px;
	border: solid 1px #C8C8C8;
}
.descTCNTs{
	color: #000000;
	font-family: verdana;
	font-size: 12px;
	padding-left: 16px;
	margin-top: -41px;
}
.itemICNTs{
	width: 270px;
	height:90px;
	background-color: white;
	font-family: verdana;
	font-size: 12px;
	border: solid 1px #C8C8C8;
	margin-top: 5px;
	margin-left: 25px;
	max-width: 270px;
	max-height:90px;
	padding:5px;
}
.rphCNTs{
	color: #003366;
	font-family: Calibri;
	font-size: 12px;
}
.rphICNTs{
	width: 130px;
	height: 30px;
	background-color: white;
	font-family: Calibri;
	font-size: 12px;
	border: solid 1px #C8C8C8;
}
.vatCNTs{
	color: #003366;
	font-family: Calibri;
	font-size: 12px;
}
.vatSCNTs{
	width: 150px;
	height: 30px;
	background-color: white;
	font-family: Calibri;
	font-size: 12px;
	border: solid 1px #C8C8C8;
	margin-left: 20px;
	margin-top: 5px;
}
.saveBCNTs{
	margin-top: 10px;
	margin-left: 0px;
	width: 105px;
	height:31px;
	border-radius: 5px;
	font-family: verdana;
	font-style: bold;
	font-size: 13px;
	color: white;
	border: none;
	background: ##B6B1B1;
	background: -moz-linear-gradient(top, #B6B1B1 0%, #494949 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B6B1B1), color-stop(100%,#494949));
	background: -webkit-linear-gradient(top, #B6B1B1 0%,#494949 100%);
	background: -o-linear-gradient(top, #B6B1B1 0%,#494949 100%);
	background: -ms-linear-gradient(top, #B6B1B1 0%,#494949100%);
	background: linear-gradient(to bottom, #B6B1B1 0%,#494949 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='B6B1B1', endColorstr='#494949',GradientType=0 );
	cursor: pointer;
}
.saanBCNTs{
	margin-top: 10px;
	margin-left: 0px;
	width: 150px;
	height:31px;
	border-radius: 5px;
	font-family: verdana;
	font-style: bold;
	font-size: 12px;
	color: white;
	border: none;
	background: ##B6B1B1;
	background: -moz-linear-gradient(top, #B6B1B1 0%, #494949 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#B6B1B1), color-stop(100%,#494949));
	background: -webkit-linear-gradient(top, #B6B1B1 0%,#494949 100%);
	background: -o-linear-gradient(top, #B6B1B1 0%,#494949 100%);
	background: -ms-linear-gradient(top, #B6B1B1 0%,#494949100%);
	background: linear-gradient(to bottom, #B6B1B1 0%,#494949 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='B6B1B1', endColorstr='#494949',GradientType=0 );
	cursor: pointer;
}
	
	
	
</style>

<script>
    $(function() {
        $('#saveAddNew').click(function() {
            returnurl = 'savenew';
            $('#formtask input[name="task"]').val('addtask');
        });

        $('#formtask').submit(function() {
//            if (newrecord == "new" || $('#formitem input[name="task"]').val() == "addtask") {
            checkresult = 0;
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>timeTracking/checkDuplicate", {checkitem: 'task', text: $('input[name="taskCode"]').val()},
            function(result) { //alert(result);
                checkresult = result;
            });

            if (checkresult >= 1) {
                alert('Task code already exist/record already in used in transaction(s)');
                return false;
            }
//            }

            if (typeof (newrecord) == "undefined") {
                newrecord = '';
            }

            if (newrecord == "new" || returnurl == "savenew") {


//            task = $('#form input[name="task"]').val().length; alert(task);
                $.ajax({
                    url: "<?= URL ?>timeTracking/addtaskOption",
                    type: "POST",
                    data: {
                        taskCode: $('input[name="taskCode"]').val(),
                        description: $('#formtask #description').val(),
                        ratePerHour: $('input[name="ratePerHour"]').val(),
                        vatInclusive: 'yes',
                        task: $('#formtask input[name="task"]').val(),
                        returnurl: 'invoice'
               },
                    dataType: "JSON",
                    success: function(jsonStr) {

                        $("#formtask").trigger('reset');
                        $("#formtask input[type='text']").val('');
                        $("#formtask #description").text('');

                        if (newrecord == 'new') {
                            $('.taskid').each(function(i) {
                                $('option:last', $(this)).before($('<option/>', {
                                    value: jsonStr.id,
                                    text: jsonStr.text
                                }));
                            });

                            $('.activeObj').parents('tr').find('.description').val(jsonStr.description);
                            $('.activeObj').parents('tr').find('.rate').val($.number(jsonStr.value, 2));
                            $('.activeObj').parents('tr').find('.tasknet').val($.number(jsonStr.value.replace(/,/g, '') * $('.activeObj').parents('tr').find('.hour').val().replace(/,/g, ''), 2));
                            $('.activeObj option').removeAttr('selected')
                                    .filter('[value="' + jsonStr.id + '"]')
                                    .attr('selected', true);

                            $('.activeObj').removeClass('activeObj');
                            subTotal();
                            $('.popBack').addClass("hidden");
                            $('.taskfrm').addClass('hidden');
                            $('body').css('overflow', 'auto');
                        }

                        returnurl = '';
                        return false;
                    }, error: function(xhr, textStatus, errorThrown) {
                        alert(xhr.responseText);
                    }
                });
                return false;
            }
        });
    })
</script>
<?php
$tbltask = new TblTask();
$task = 'addtask';
Session::setSession('taskid', '');
if (isset($_POST['taskid'])) {
    $taskid = $_POST['taskid'];

    $tbltask = DAOFactory::getTblTaskDAO()->load($taskid);
    Session::setSession('taskid', $taskid);
    $task = 'updatetask';
}
//if (isset($_POST['returnurl'])) {
//    Session::setSession('returnurl', $_POST['returnurl']);
//    echo Session::getSession('returnurl');  
//}
?>
<link href="/unlibooks/views/time/css/ajax.css" rel="stylesheet" type="text/css">
<div class="invoiceHolderCNTs">
    <form method="post" action="<?php echo URL ?>timeTracking/tasks" class="cnt-formCNTs" id="formtask">
        <div id="newCNTs">
            <input type="button" class="closeCNTs" value="X">
            <p class="cnt-headCNTs"><?php echo ($task == 'addtask') ? 'Create New' : 'Update' ?> Tasks:</p>
            <hr class="hrCNTs">
        </div>

        <div>
            <table>	
                <tr>
                    <td class="taskACNTs">Task Account:</td>
                    <td><input type="text" class="tAccountCNTs" name="taskCode" value="<?php echo $tbltask->taskCode ?>" required></td>
                </tr>
                <tr>
                    <td><div class="descTCNTs">Description:</div></td>
                    <td><textarea class="itemICNTs" name="description"  id="description" required><?php echo $tbltask->description ?></textarea></td>
                </tr>	
                <tr>	
                    <td class="taskACNTs">Rate per hour:</td>
                    <td><input type="text" class="rph isNumeric" name="ratePerHour" value="<?php echo $tbltask->ratePerHour ?>" required style="border: solid 1px #C8C8C8;"></td>
                </tr>
                <tr>	
                    <td><input type="checkbox" checked class="taskCheckNew"></td>
                </tr>
            </table>
            <div class="NewCheck"> <label class="checkLabel">Active Account</label></div>

            <table class="createNewTasksTble">

<!--                <tr>
    <td><input type="checkbox" value="yes" class="InclusiveOfVatCreatecheck" name="vatInclusive" <?php echo ($tbltask->vatInclusive == 'yes') ? 'checked' : '' ?>></td>

</tr>-->
            </table>

        </div>
        <div class="hrclassTaskNew"></div>
        <div class="divCNTsBelow">	
            <input type="submit" value="Save" class="saveBCNTs">
            <?php if (Session::getSession('function') != 'add' && Session::getSession('function') != 'newRecurring') { ?>
                <input type="submit" value="Save and Add New" class="saanBCNTs" id="saveAddNew">
            <?php } ?>
        </div>
        <input type="hidden" name="task" value="<?php echo $task ?>"/>
        <div style="clear:both"></div>
    </form>
</div>

