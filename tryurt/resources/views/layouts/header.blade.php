<!-- </?php
$organization = DAOFactory::getTblOrganizationDAO()->load(Session::getSession('orgid'));
//$userlevel = DAOFactory::getTblUserLevelDAO()->queryByUserId(Session::getSession('user'))[0];
//$useraccess = DAOFactory::getTblUserAccessDAO()->queryByUserLevelId($userlevel->id)[0];

$serviceAccount = DAOFactory2::getServiceAccountsDAO()->queryByEmail(Session::getSession('main_email'));
// print_r($serviceAccount);
// exit;
$dateStart = $organization->dateCreated;
$expireDay = 7;
$expiration = AmApiSubscriptionMySqlExtDAO::getExpiration();

if($expiration != '')
{
	if($expiration['status'] == 'active')
	{
		$dStart = new DateTime(date('Y-m-d'));
		$dEnd  = new DateTime($expiration['expiration']);
		$dDiff = $dStart->diff($dEnd);
		$days = $dDiff->days;
		$type = "subscription";		
	}
}
elseif(date('Y-m-d') <= $serviceAccount[0]->trialExpirationDate) {

	$dStart = new DateTime(date('Y-m-d'));
	$dEnd  = new DateTime($serviceAccount[0]->trialExpirationDate);
	$dDiff = $dStart->diff($dEnd);
	$days = $dDiff->days;
	$type = "trial";
} 
else
{
	$days = 0;
	/*if ($days <= 0) {
        require_once('public/expire.php');
        exit;
    }
    */
}
?> -->
<html>
<!-- <head> </?php
        $cl = strtolower(Session::getSession('class'));
        $fc = Session::getSession('function');
        ?> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="{{asset('images/ubServices_titleLogo.png')}}">
<link rel="stylesheet" href="{{asset('css/default.css')}}" />
<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" />
<link rel="stylesheet" href="{{asset('css/datepicker.css')}}" />
<link href="{{asset('css/ajax.css')}}" rel="stylesheet" type="text/css')}}">
<link rel="stylesheet" href="{{asset('pixeden/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
<link rel="stylesheet" href="{{asset('pixeden/pe-icon-7-stroke/css/helper.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="{{asset('datable/datatables.min.css')}}"> -->


<!-- </?php
        if (isset($this->css)) {
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views' . $css . '"/>';
            }
        }
        ?> -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery.redirect.min.js')}}"></script>
<script src="{{asset('js/jquery.price_format.1.8.js')}}"></script>
<!--<script src="{{asset('js/jquery.numberformatter-1.2.4.js')}}"></script>-->
<script src="{{asset('js/jquery.number.min.js')}}"></script>
<script src="{{asset('js/jquery.maskedinput.js')}}"></script>
<!-- <script type="text/javascript" src="{{asset('datatable/datatables.min.js')}}" </script> <script> -->


</script>

<head>
    </nav>
    <script src="{{asset('js/custom.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/default.css')}}" />
</head>

<style>
    @font-face {
        font-family: 'agency fb';
        /*a name to be used later*/
        src: url('{{asset('fonts/AGENCYR.ttf')}}');
        /*URL to font*/
    }

    @font-face {
        font-family: 'agency fb2';
        /*a name to be used later*/
        src: url('{{asset('fonts/AGENCYB.ttf')}}');
        /*URL to font*/
    }

    /* @font-face {
            font-family: 'verdana'; 
            src: url('{{asset('fonts/HelveticaNeueLTStd-Ex.otf')}}'); 
        }
		@font-face {
            font-family: 'Verdana'; 
            src: url('{{asset('fonts/HelveticaNeueLTStd-Ex.otf')}}'); 
        } */
    @font-face {
        font-family: 'verdana';
        src: url('{{asset('fonts/Verdana.ttf')}}');
    }

    @font-face {
        font-family: 'Verdana';
        src: url('{{asset('fonts/Verdana.ttf')}}');
    }

    .subscribeNow {
        font-size: 14px !important;
        margin-right: 15px;
        color: orange !important;
    }

    .subscribeNow:hover {
        color: #183867 !important;
    }

    #imgprevs {
        width: 161px;
        height: 100px;
        margin-top: 10px;
        margin-bottom: 20px;
    }

    .orderNowPopHolder {
        z-index: 100;
        position: fixed;
        overflow: hidden;
    }

    .settingDrop {
        background-color: #A21414;
    }

    #my-nav {
        height: 70px;
    }

</style>
<script>
    $(function () {

        $("#imgInp").change(function () {
            fsize = this.files[0].size;
            $('input[name="hasFile"]').val('true');
            readURL(this);
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgprevs').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

    });

</script>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#A21414;">
         <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
            aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
                <img class="logo" src="{{asset('images/usv_logo_long.png')}}">
             
                <li><a href="{{('/dashboard/index')}}" class="mainHeaderLink supportlink2 toremove" style="font-size: 28.24px;">DASHBOARD </a></li>
                <li class="dropdown"><a href="#"class=" dropdown-toggle logging mainHeaderLink supportlink2 toremove"data-toggle="dropdown">BILLING</a>
                    <ul class="dropdown-menu settingDrop">
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/salesreceipt')}}" class="mainHeaderLink">CASH RECEIPT</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/index')}}" class="mainHeaderLink">BILLING</a> </li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/collection')}}" class="mainHeaderLink">COLLECTION </a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/customers')}}" class="mainHeaderLink">CUSTOMERS </a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/tasks')}}" class="mainHeaderLink">SERVICE ITEMS </a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle logging mainHeaderLink" data-toggle="dropdown">SALES</a>
                    <ul class="dropdown-menu settingDrop">
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/setting/user')}}" class="mainHeaderLink">CASH INVOICE</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/setting/department')}}" class="mainHeaderLink">SALES ORDER</a> </li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/setting/serviceItem')}}" class="mainHeaderLink">DELIVER  RECECIEPT</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/setting/serviceItem')}}" class="mainHeaderLink">SALES INVOICE</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/setting/serviceItem')}}" class="mainHeaderLink">COLLECTION</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a  href="{{('/setting/serviceItem')}}" class="mainHeaderLink">CM</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/setting/serviceItem')}}" class="mainHeaderLink">SALES RETURN</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/setting/serviceItem')}}" class="mainHeaderLink">ITEMS</a> </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle logging mainHeaderLink" data-toggle="dropdown">PURCHASE </a>
                    <ul class="dropdown-menu settingDrop">
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/salesreceipt')}}" class="mainHeaderLink">PURCHASE ORDER</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/index')}}" class=" mainHeaderLink">RECIEVE ORDER</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/collection')}}" class="mainHeaderLink">RECEIVE INVOICE</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/customers')}}" class="mainHeaderLink">RECEIVE RETURN</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/tasks')}}" class="mainHeaderLink">ITEMS</a>
                        </li>
                    </ul>
                <li class="dropdown"><a href="#" class="dropdown-toggle logging mainHeaderLink" data-toggle="dropdown">EXPENSES </a>
                    <ul class="dropdown-menu settingDrop">
                        <li class=" mainHeaderLink "><a href="{{('/invoice/salesreceipt')}}" >QUICK EXPENSES</a></li>
                        <li class=" mainHeaderLink "><a href="{{('/invoice/index')}}" >BILL PAYABLE</a> </li>
                        <li class=" mainHeaderLink "><a href="{{('/invoice/collection')}}" >PAYMENT</a></li>
                        <li class=" mainHeaderLink "><a href="{{('/invoice/customers')}}" >CASH ADVANCES</a></li>
                        <li class=" mainHeaderLink "><a href="{{('/invoice/tasks')}}" >VENDOR</a>
                        </li>
                    </ul>
                <li class="dropdown"><a href="#" class="dropdown-toggle logging mainHeaderLink" data-toggle="dropdown">ACCOUNTING </a>
                    <ul class="dropdown-menu settingDrop">
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/salesreceipt')}}" class="mainHeaderLink">CHART OF ACCOUNTS</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/index')}}" class="mainHeaderLink">JOURNAL ENTRY</a> </li>
                        </li>
                    </ul>                   
                <li class="dropdown"><a href="#" class="dropdown-toggle logging mainHeaderLink" data-toggle="dropdown">INVENTORY </a>
                    <ul class="dropdown-menu settingDrop">
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/salesreceipt')}}" class="mainHeaderLink">ON HAND</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/index')}}" class="mainHeaderLink">COUNTING</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/collection')}}" class="mainHeaderLink">TRANSFER</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/customers')}}" class="mainHeaderLink">WAREHOUSE</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/tasks')}}" class="mainHeaderLink">PRODUCT CATEGORY</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a href="{{('/invoice/tasks')}}" class="mainHeaderLink">AREA</a></li>
                        
                    </ul>
                <li><a href="{{('/report/index')}}" class="mainHeaderLink">REPORTS</a></li>
                <li><a href="{{asset('help/pdf/how to use UB Service - All.pdf')}}" target="_blank"class="mainHeaderLink">HELP</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle logging mainHeaderLink" data-toggle="dropdown">SETTINGS </a>
                    <ul class="dropdown-menu settingDrop">
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"> <a class="mainHeaderLink" href="{{('')}}">COMPANY</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"> <a class="mainHeaderLink" href="{{('')}}">BEGINNING BALANCE</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a class="mainHeaderLink" href="{{('')}}">USER & PERMISSION</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a class="mainHeaderLink" href="{{('')}}">OUTLET BRANCHING</a></li>
                        <li class="settingDropdown mainHeaderLink supportlink2 toremove"><a class="mainHeaderLink" href="{{('')}}">IMPORT  EXPORT</a></li>
                    </ul>
                <a href="{{('/index/index')}}" class="mainHeaderLink supportlink2">LOGOUT</a>
        </div>
    </nav>
</body>
</html>
<div class="supportPopBack hidden">
</div>
<div class="orderNowPopHolder">
</div>
<script>
    $(function () {
        $('.enterLicense').click(function () {
            var email = '</?=Session::getSession('
            main_email ')?>';
            $.post(URL + 'user/checkPortal', {
                    'email': email
                })
                .done(function (result) {

                    if (result == 'client') {
                        $.post(URL + 'user/resellerModal', {
                                'email': email,
                                'login': true
                            })
                            .done(function (result) {
                                $('.popBack').html(result);
                                $('.popBack').removeClass('hidden');
                            });

                    } else {
                        $('.form-submit-button').click();
                    }

                });

            return false;
        });
    });

    $('.supportlink').click(function () {
        window.open(URL + 'support/lists');

        $.post(URL + 'support/support')
            .done(function (returnData) {
                $('.supportPopBack').html(returnData);
                $('.supportPopBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $(".supportPopBack").css('z-index', '100');

                $('.xsupport').click(function () {
                    if (confirm('Are you sure, you want to leave this page without sending?')) {
                        $('.supportPopBack').addClass('hidden');
                        $('.supportPopBack').html('');
                        $('body').css('overflow', 'auto');
                        // location = URL + 'dashboard/index';
                    }
                });

            })
            .fail(function () {
                alert('Connection Error!');
            });

        return false;

    });

    $('.casa').click(function () {
        $.post(URL + 'support/cas')
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $(".popBack").css('z-index', '100');

                $('.no').click(function () {
                    if (confirm('Are you sure you want to leave this page?')) {
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

    $('#orderNow').click(function () {

        $('body').css('overflow-y', 'hidden');
        $.post('</?=URL?>index/orderNowPop')
            .done(function (returnData) {
                $('.orderNowPopHolder').html(returnData);
                $('#cancelOrder').click(function () {
                    $('body').css('overflow-y', 'scroll');
                    $('.orderNowPopHolder').html('');
                })
            })
        return false;
    })

    $('.casa').click(function () {
        $.post(URL + 'support/cas')
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $(".popBack").css('z-index', '100');

                $('.no').click(function () {
                    if (confirm('Are you sure, you want to leave this page?')) {
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

    $('.referalLink').click(function () {
        $.post(URL + 'support/referral')
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $(".popBack").css('z-index', '100');

                $('.xsupport').click(function () {
                    if (confirm('Are you sure, you want to leave this page without sending?')) {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                        location = URL + 'dashboard/index';
                    }
                });

            })
            .fail(function () {
                alert('Connection Error!');
            });

        return false;

    });

</script>
<div class="mainBody"></div>

<!-- 

</?php
	if(Session::getSession('useractive') != 'yes'){
		require_once 'views/user/confirmation.php';
		exit;
	}
?> -->
