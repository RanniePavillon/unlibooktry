@include('layouts.header')
<style>
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
    .popup{
        z-index: 10;
    }
    .cnitableClient{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
        height:auto!important;
    }
    .cnitableClient, th{
        border:solid 1px #c8c8c8;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
        border:solid 1px #c8c8c8;
    }

    .tdPadd{
        font-size: 12px;
        color: #fff;
        font-family: verdana;
        font-weight: bold;
        padding:5px;
    }
    .cnitableClient a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: none;
        font-family:Verdana;
    }
    .cnitableClient a:hover{
        color: blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
        font-family: Verdana;
    }
    .cnitableClient tr:HOVER{
        background-color: #E8E8E8;
    }	
    .b a{
        color: black;
    }
    .tbalance{
        font-family:Verdana;
        width:100%;
        font-size:12px;
        border:none;
        background:none;
        height:100%;
        background:none;
        text-align:right;
        padding-right:15px;
    }

    .tfootTable{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top:5px;
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
    }
    .byClients{
        color:#183867;
        font-size:16px;
        font-weight:bold;
        font-family:Agency FB;
        margin-left:7px;
    }
    .allClientsText{
        margin-left:10px;
        float:left;
        width:100%;
    }
    .invNoOption{
        background-color: #fff;
        color: #000;
        font-weight: bold!important;
    }

    .cSearch::-webkit-input-placeholder{
        color:#fff;
        padding-left:35px;
    }

    .buttonHover:hover{
        color:#B13C56;
    }
</style>

<!-- </?php
require_once ('public/paginator.php');
$pages = new Paginator;
?> -->
<title>
    ALL CUSTOMERS
</title>
<link rel="stylesheet" href="{{asset('css/overall.css')}}"/>
<div class="container">
<hr class="hrdashreport"> 
    <div class="customerHolder">
        <div class="allClientsText headings">
            <label class="headTextCollection">ALL CUSTOMERS</label>
            <!-- </?php
                echo (Session::getSession('error') != '') ? Session::getSession('error') : '';
                Session::setSession('error', '');
            ?> -->
            <!-- </?php if ($useraccess->Add == 'yes') { ?> -->
                <a href="{{asset('invoice/customers')}}">	
                    <!-- <label class="crosscustomer"> -->
                    <input type="button" class="createNc buttonslarge" value="CREATE NEW CUSTOMER">
                </a>
          
        </div>

                    <div style="clear:both;"></div>
                    <!-- </?php
                    $page = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : ($_GET['page'])) : 1;
                    $ipp = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : $_GET['ipp']) : 25;
                    ?> -->
                    <form method="post" action="{{('invoice/customers')}}" id="form"> 
                        <div class="cusContainer">
                            <div class="cusButton buttoncontainersviews">
                                <!-- </?php if ($useraccess->Edit == 'yes') { ?> -->
                                    <input type="button" value="EDIT" class="clientEdit buttonHover buttoninvoices" name="edit" onclick="editrec('')">
                                <!-- </?php }if ($useraccess->Delete == 'yes') { ?> -->
                                    <input type="button" value="INACTIVE" class="dlt buttonHover buttoninvoices" name="delete" onclick="deleterec('');">
                                
                            </div>	
                            <div  style="float:right;margin-right:31px;margin-top:10px;">	
                   <!-- <input type="text" placeholder="SEARCH" class="cSearch" name="search" value="">-->

                                <!-- </?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : '' ?> -->
                                <span class="filteredby">Filtered By:</span>
                                <label class="labelclass">
                                    <select class="cNumber inumber" name="searchby">
                                        <option class="invNoOption" value="1" >CUSTOMER NO.</option>
                                        <option class="invNoOption" value="2" >CUSTOMER NAME</option>
                                    </select>
                                </label>
                                <input type="search" name="search" placeholder="SEARCH" class="cSearch"> 
                                <input type="submit" name="search2" value="" class="search22Col">
                <!--<span><input type="submit" name="search2" class="search22Col" value="."></span>-->
                                <a href="{{('/invoice/cost-import')}}"><input type="button" value="IMPORT/EXPORT" class="imEx"></a>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                        
                        <div class="moduleHeight">

                            <table class="cnitableClient">
                                <thead>
                                    <tr class="trcustomer_table">
                                        <th width="3%"><!-- <input type="checkbox" class="toggle"> --></th>
                                        <th width="20%">Customer No.</th>
                                        <th width="36%">Customer Name</th>
                                        <th width="20%">Date Created</th>
                                        <th class="" width="20%">Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- </php
                                    $pages->items_total = count(TblClientMySqlExtDAO::getData('', -1));
                                    $pages->mid_range = 9;
                                    $pages->paginate();
                                    $customers = TblClientMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));

                                    if (count($customers) > 0) {
                                        foreach ($customers as $item) {
                                            ?> -->
                                            <tr class="customer_row">
                                                <td class="tdPadd"><input type="checkbox" name="chk[]" class="chk" value=""></td>
                                                <td class="tdPadd"><a onclick="editrec()"></a></td>
                                                <td class="tdPadd b"><a onclick="editrec()"></a></td>
                                                <td class="tdPadd" style="color:#000;font-weight:normal;font-family:Verdana;font-size:12px;">
                                                </td>
                                                <td class="tdPadd" style="color:#000;font-weight:normal;font-family:Verdana;font-size:11px;"><a href="#" onclick="viewSubsidiary()">
                                                       </a>
                                                </td>
                                            </tr>

                                           
                                       
                                  
                                </tbody>	
                            </table>
                        </div>
                        <table class="tfootTable">
                            <tfoot>
                                <!-- <tr class="under">
                                    <td colspan="5" style="font-family:Verdana;font-size:11px;color:#fff;font-weight:bold;text-align:center;padding: 7px 11px;" class="under">
                                       </?php
                                        echo "<span style=\"margin-left:25px\width:120px\"> " . $pages->display_jump_menu()
                                        . $pages->display_items_per_page() . "</span>";
                                        echo "Page $pages->current_page of $pages->num_pages";
                                        ?> -->
                                    </td>
                                </tr> 
                            </tfoot>
                        </table>
                        <input type="hidden" name="task" value="">
                        <input type="hidden" name="returnurl" class="returnurl" value="" />
                    </form>

                    </div>
                    </div>
                    <div class="popBack hidden">

                    </div>
                    <div class="popup hidden">

                    </div>

                    <script>
                        $(function () {
                            $('.toggle').click(function () {
                                if ($(this).is(':checked')) {
                                    $('input[type="checkbox"]').prop('checked', true);
                                } else {
                                    $('input[type="checkbox"]').prop('checked', false);
                                }
                            });
                        });

                        function deleterec() {
                            if ($('.chk').is(':checked')) {
                                var checked = [];
                                $(".chk:checked").each(function ()
                                {
                                    checked.push(parseInt($(this).val()));
                                    return false;
                                });
                                $.post(URL + 'invoice/checktrans', {clientid: checked})
                                        .done(function (returnData) {
                                            if (returnData) {
                                                alert('Unable to the delete the following record(s) due to existing transaction(s).');
                                                $('input[name="chk[]"]:checked').prop('checked', false);
                                            } else {
                                                if (confirm('Are you sure you want to delete the following record(s)?')) {
                                                    $('input[name="task"]').val('delcustomer');
                                                    $('#form').submit();
                                                }
                                                $('input[name="chk[]"]:checked').prop('checked', false);
                                            }

                                        })

                            } else {
                                alert('Please select record to delete');
                            }
                        }

                        function editrec(clientid) {
                            if ($('.chk').is(':checked') || clientid != '') {
                                var checked = [];
                                count = 0;
                                $("input[name='chk[]']:checked").each(function ()
                                {
                                    checked = parseInt($(this).val());
                                    count++;
                                });

                                if (clientid != '') {
                                    checked = clientid;
                                }

                                if (count > 1) {
                                    alert('Please select one record only to edit.');
                                    $("input[name='chk[]']:checked").prop('checked', false);
                                    return false;
                                }
                                
                                $.post(URL + 'invoice/newCustomer', {clientid: checked})
                                        .done(function (returnData) {
                                            $('.popBack').html(returnData);
                                            $('.popBack').removeClass('hidden');
                                            $('body').css('overflow', 'hidden');


                                            $('.close1Client').click(function () {
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


                    <script>
                        $(function () {
                            $('.aPayment').click(function () {
                                $.post(URL + 'views/invoice/enterPayment.php')
                                        .done(function (returnData) {
                                            $('.popBack').html(returnData);
                                            $('.popBack').removeClass('hidden');
                                            $('body').css('overflow', 'hidden');

                                            $('.closeENTERPayment').click(function () {
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
                    </script>
                    <script>
                        var type = 'client';
                        $(function () {
                            $('.createNc').click(function () {
                                $.post(URL + 'invoice/newcustomer')
                                        .done(function (returnData) {
                                            $('.popBack').html(returnData);
                                            $('.popBack').removeClass('hidden');
                                            $('body').css('overflow', 'hidden');

                                            $('.close1Client').click(function () {
                                                if (confirm('Are you sure you want to leave this page without saving?')) {
                                                    $('.popBack').addClass('hidden');
                                                    $('.popBack').html('');
                                                    $('body').css('overflow', 'auto');
                                                    // location.reload();
                                                }
                                            });
                                        })
                                        .fail(function () {
                                            alert('Connection Error!');
                                        });

                                return false;
                            });
                        })

                        function viewSubsidiary(hmoid) {
                            var type = 'client';
                            id = hmoid;
                            $.post(URL + 'subsidiary', {type: type, id: id})
                                    .done(function (returnData) {
                                        $('.popBack').html(returnData);
                                        $('.popBack').removeClass('hidden');
                                        $('body').css('overflow', 'hidden');
                                        $('.popx').click(function () {
                                            if (confirm('Are you sure you want to leave this page without posting?')) {
                                                $('.popBack').addClass('hidden');
                                                $('.popBack').html('');
                                                $('body').css('overflow', 'auto');
                                            }
                                        });
                                    })
                                    .fail(function () {
                                        alertWithoutNotice('Connection Error!');
                                    });
                            return false;
                        }

                    </script>
@extends('layouts.footer')

