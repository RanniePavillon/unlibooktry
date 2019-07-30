@include('layouts.header')
@extends('layouts.footer')
<style>
    .cSearch::-webkit-input-placeholder{
        color:#fff;
        padding-left:35px;
    }
    .hrdashreport {
        height: 5px;
        width: 0%;
        background-color: #c51400;
        border:none;
    }	
    .container {
        background-color: white;    
        max-width: 1000px;
        width: 100%;
        padding-right: 15px;
        padding-top: 1px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        border-style: solid;
        border-color: #A21414;
        box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
        margin-top:90px;
        margin-bottom:10px;
    }
    .mainbodyInvoice{
        background-color: white;
        padding-bottom:400px;
        width: 1000px;
        margin: auto;
        height:auto!important;
    }
    .cnitableTasks{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
        height:auto!important;
    }
    .cnitableTasks, th{
       /*  background-color: #55C768; */
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableTasks, td{
        font-size: 12px;
        color: black;
        font-family:Verdana;
        text-align: left;
    }
    .cnitableTasks a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: none;
    }
    .cnitableTasks a:hover{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
    }
    .cnitableTasks tr:HOVER{
        background-color: #E8E8E8;
    }
	.cnitableTasks tr{
		border:solid 1px #c8c8c8;
	}
    .rphNew{
        font-family:Verdana;
        font-size: 12px;
        background: none;
        border: none;
    }
    .taskformsNew{
        background-color: white;
        padding-top: 1px;
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
        padding: 11px;
    }
    .tfootTable a{
        color:#fff;
        text-decoration:none;
        cursor:pointer;
        font-family:Verdana;
        font-size:9px;
    }
    .tfootTable a:hover{
        text-decoration:underline;
    }
    .tfootTable select{
        width: 65px;
        height: 18px;
        margin-left: 10px;
        margin-right: 10px;
        /* background-image: url('{{asset('images/dropSelect.png')}}');
        background-size: 65px 18px;
        background-repeat: no-repeat;
        -webkit-appearance: none; */
    }
    .byTasks{
        font-family:Agency FB;
        font-size:16px;
        font-weight:bold;
        color:#183867;
    }
    .invNoOption{
        background-color: #fff;
        color: #000;
        font-weight: bold!important;
    }
    .buttonHover:hover{
        color:#B13C56;
    }
	.tdPadd {
		padding: 5px;
	}
</style>
<!-- </?php
require_once ('public/paginator.php');
$pages = new Paginator;
?> -->
<!-- </?php
$page = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : ($_GET['page'])) : 1;
$ipp = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : $_GET['ipp']) : 25;
?> -->
<title>
    ALL SERVICE ITEMS
</title>
<link rel="stylesheet" href="{{asset('css/overall.css')}}"/>
<div class="container">
    <hr class="hrdashreport"> 
    <div style="">
        <form method="post" action ="{{('invoice/tasks')}}" id="form">
            <div class="TaskHolder headings">
                <div id="newTask">
                    <label class="textHeadTasks">ALL SERVICE ITEMS</label>	
					<!-- </?php if ($useraccess->Add == 'yes') { ?> -->
                        <a href="#">	
                           <!-- <label class="crosstask">  -->
                            <input type="button" class="createNewTask buttonslarge" value="CREATE NEW SERVICE ITEM">
                            <!-- </label> -->
                        </a>
										
                </div>	
                
                <div class="centerTasks">
                    <div id="searchTasks" class="buttoncontainersviewstask">
                        <!-- </?php if ($useraccess->Edit == 'yes') { ?> -->
                        <input type="button" name="del" value="EDIT" class="deleteTasks2 buttonHover buttoninvoices" onclick="editrec('');"  >
                        <!-- </?php }if ($useraccess->Delete == 'yes') { ?> -->
                        <input type="button" name="del" value="INACTIVE" class="deleteTasks buttonHover buttoninvoices" onclick="deleterec();">
                       
                    </div>	
                    <div  style="float:right;margin-right:31px; margin-top:8px;">	
                            <!--<input type="search" name="search" placeholder="SEARCH" class="searchindexTasks" 
                            value="</?= isset($_POST['search']) ? $_POST['search'] : '' ?>">-->

                        <!-- </?php
                        $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : '';
                        ?> -->
						<span class="filteredby">Filtered By:</span>
						<label class="labelclasstask">
							<select class="inumberTasks inumber" name="searchby">
								<option class="invNoOption" value="1" >SERVICE ITEM NO.</option>
								<option class="invNoOption" value="3" >DATE CREATED</option>
							</select>
						</label>
                        <input type="search" name="search" placeholder="SEARCH" class="cSearch">  
                        <input type="submit" name="del" value="" class="SearchTasks">
                        <!--<span><input type="button" name="del" class="SearchTasks"></span>-->
                        <a href="{{('invoice/serviceItemImEx')}}"><input type="button" value="IMPORT/EXPORT" class="buttonTasks imEx"></a>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
			<div class="moduleHeight">
				<div class="taskformsNew">	
					<table class="cnitableTasks">
						<tr class="headinvoiceItem">
							<th width="2%"><!-- <input type="checkbox" class="toggle"> --></th>
							<th width="24%">Service Item No.</th>
							<th width="26%">Description</th>
							<th width="24%">Date Created</th>
							<th width="24%" style="text-align:right;padding-right:20px;">Amount</th>
						</tr>
								<tr class="tableTasks">
									<td id="tDTasks" class="tdPadd"><input type="checkbox" name="chk[]" class="chk" value=""></td>
									<td id="tDTasks" class="tdPadd"><a onclick="editrec()" style="color: blue"></a></td>
									<td id="tDTasks" class="tdPadd"></td>
									<td id="tDTasks" class="tdPadd">
										<!-- </?= date('m/d/Y', strtotime($item->dateCreated)) ?> -->
									</td>
									<td id="tDTasks" class="tdPadd" style="text-align:right; padding-right: 20px;">
										<!-- </?= Controller::getFloat($item->ratePerHour) ?> -->
									</td>           
								</tr>																											
					</table>
					<div class="popBack hidden">

					</div>
					<input type="hidden" name="task" />
				</div>
			</div>
			
				<table class="tfootTable">
					<tfoot>
						<tr class="under">
							<td colspan="5" style="text-align:center;color:#fff;font-family:Verdana;font-size: 12px;font-weight:bold;" class="under">
								
							</td>
						</tr>
					</tfoot>
				</table>
			
        </form>
    </div>
</div>
<script>
    $(function () {
        $('.createNewTask').click(function () {
            $.post(URL + 'invoice/task')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeCNTs').click(function () {
                            if (confirm('Are you sure you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                            }
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });

    })

    $(function () {

        $('.toggle').click(function () {
            if ($(this).is(':checked')) {
                $('input[type="checkbox"]').prop('checked', true);
            } else {
                $('input[type="checkbox"]').prop('checked', false);
            }
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

            $.post(URL + 'timeTracking/checktask', {taskids: checked})
                    .done(function (returnData) {
//                            alert(returnData);
//                            return false;
                        if (returnData) {
                            alert('Unable to the delete the following record(s) due to existing transaction(s).');
                            $('input[name="chk[]"]:checked').prop('checked', false);
                        }
                        else {
                            if (confirm('Are you sure you want to delete the following record(s)?')) {
                                $('input[name="task"]').val('deltask');
                                $('#form').submit();
                            }
                            $('input[name="chk[]"]:checked').prop('checked', false);
                        }

                    })

        } else {
            alert('Please select record to delete');
        }
    }

    function editrec(taskid) {
        // alert('sadsadsa');
        if ($('.chk').is(':checked') || taskid != '') {
            var checked = [];
            count = 0;
            $("input[name='chk[]']:checked").each(function ()
            {
                checked = parseInt($(this).val());
                count++;
            });

            if (taskid != '') {
                checked = taskid;
            }

            if (count > 1) {
                alert('Please select one record only to edit.');
                $('input[type="checkbox"]').prop('checked', false);
                return false;
            }

            // $.post(URL + 'timetracking/task', {taskid: checked})
            $.post(URL + 'invoice/task', {taskid: checked})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeCNTs').click(function () {
                            if (confirm('Are you sure you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                                $('input[name="chk[]"]:checked').prop('checked', false);
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