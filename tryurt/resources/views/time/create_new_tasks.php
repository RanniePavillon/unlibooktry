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
	font-family: Agency FB;
	margin-left:11px;
	font-weight: bold;
	color: #183867;
}
.divCNTsBelow{
	height: 50px;
	float: right;
	margin-bottom: -22px;
}
.cnt-formCNTs{
	width: 520px;
	margin: auto !important;
	font-family: Agency FB;
	font-size: 12px;
	background: #fff;
	border: 2px solid #24b6ef;
	padding:10px 20px;
	
}
.cnt-headCNTs{
	font-size: 30px;
	font-family:agency fb2;
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
	background: transparent;
	color: black;
	border: none;
	border-radius: 2px;
	font-family: Arial black;
	font-weight: bold;
	font-size: 42px;
	outline-style: none;
	cursor: pointer;
	float: right;
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
	font-weight: bold;
}
.taskCheckNew{
	color: #003366;
	font-family: Agency FB;
	font-size: 12px;
	margin-left: 5px;
}
.tAccountCNTs{
	margin-left: 5px;
	margin-top: 7px;
	width: 270px;
	height: 27px;
	background-color: white;
	font-family:Verdana;
	font-size: 11px;
	border: solid 1px #C8C8C8;
	padding: 5px;
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
	font-family:Verdana;
	font-size: 12px;
	margin-left: 5px;
	height: 27px;
	width: 270px;
	margin-top: 5px;
	padding: 5px;
	border: solid 1px #C8C8C8;
}
.descTCNTs{
	color: #000000;
	font-family:Verdana;
	font-size:12px;
	font-weight: bold;
	margin-top:-42px;
}
.itemICNTs{
	width: 270px;
	height: 90px;
	background-color: white;
	font-family:Verdana;
	font-size:11px;
	border: solid 1px #C8C8C8;
	margin-top: 5px;
	margin-left: 5px;
	max-width: 270px;
	max-height: 90px;
	padding: 5px;
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
	margin-right: 20px;
	width: 100px;
	height: 28px;
	border-radius: 4px;
	border: none;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/s.png');
	background-repeat: no-repeat;
}
.saanBCNTs{
	width: 123px;
	height: 28px;
	border-radius: 4px;
	border: none;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/saan.png');
	background-repeat: no-repeat;
}
@font-face {
	font-family: 'agency fb'; /*a name to be used later*/
	src: url('<?=URL?>public/fonts/AGENCYR.ttf'); /*URL to font*/
}

@font-face {
	font-family: 'agency fb2'; /*a name to be used later*/
	src: url('<?=URL?>public/fonts/AGENCYB.ttf'); /*URL to font*/
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
    <!--<form method="post" action="<?php echo URL ?>timeTracking/tasks" class="cnt-formCNTs" id="formtask">-->
    <form method="post" action="<?php echo URL ?>invoice/tasks" class="cnt-formCNTs" id="formtask">
         <input type="button" class="closeCNTs" value="x">
		<div id="newCNTs">
           
            <p class="cnt-headCNTs"><?php echo ($task == 'addtask') ? 'CREATE NEW' : 'UPDATE' ?> SERVICE ITEM</p>
        </div>

        <div>
            <table>	
                <tr>
                    <td class="taskACNTs">Service Item No.:</td>
                    <td><input type="text" class="tAccountCNTs" name="taskCode" value="<?php echo $tbltask->taskCode ?>" required></td>
                </tr>
                <tr>
                    <td class="taskACNTs">Description:</td>
                    <td><input type="text" class="tAccountCNTs" name="description" id="description" value="<?php echo $tbltask->description ?>" required></td>
                </tr>
				<tr>
                    <td><div class="descTCNTs">Particulars:</div></td>
                    <td><textarea class="itemICNTs" name="particular"  id="description" required><?php echo $tbltask->particular ?></textarea></td>
                </tr>				
                <tr>	
                    <td class="taskACNTs">Rate per hour:</td>
                    <td><input type="text" class="rph isNumeric" name="ratePerHour" value="<?php echo $tbltask->ratePerHour ?>" required style="border: solid 1px #C8C8C8;"></td>
                </tr>
                <tr>	
					<td class="taskACNTs">Active Account</label>
                    <td><input type="checkbox" checked class="taskCheckNew"></td>
                </tr>
            </table>
            <!--<div class="NewCheck"> <label class="checkLabel">Active Account</label></div>-->

            <table class="createNewTasksTble">

<!--                <tr>
    <td><input type="checkbox" value="yes" class="InclusiveOfVatCreatecheck" name="vatInclusive" <?php echo ($tbltask->vatInclusive == 'yes') ? 'checked' : '' ?>></td>

</tr>-->
            </table>

        </div>
        <div class="hrclassTaskNew"></div>
        <div class="divCNTsBelow">	
            <input type="submit" value="" class="saveBCNTs">
            <?php if (Session::getSession('function') != 'add' && Session::getSession('function') != 'newRecurring') { ?>
                <input type="submit" value="" class="saanBCNTs" id="saveAddNew">
            <?php } ?>
        </div>
        <input type="hidden" name="task" value="<?php echo $task ?>"/>
        <div style="clear:both"></div>
    </form>
</div>

