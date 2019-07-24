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

        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link rel="shortcut icon" href="{{asset('images/ubServices_titleLogo.png')}}">
        <link rel="stylesheet" href="{{asset('css/default.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}"/>
                <!--<link rel="stylesheet" href="{{asset('css/datepicker.css')}}"/>-->
        <link href="{{asset('css/ajax.css')}}" rel="stylesheet" type="text/css')}}">
		<link rel="stylesheet" href="{{asset('pixeden/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
		<link rel="stylesheet" href="{{asset('pixeden/pe-icon-7-stroke/css/helper.css')}}">

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
        <script>
            URL = '{{('')}};
        </script>

        <script src="{{asset('js/custom.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/default.css')}}"/>
        <!-- </?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script src="' . URL . 'views' . $js . '"></script>';
            }
        }
        ?> -->
    </head>

    <style>
        @font-face {
            font-family: 'agency fb'; /*a name to be used later*/
            src: url('{{asset('fonts/AGENCYR.ttf')}}'); /*URL to font*/
        }

        @font-face {
            font-family: 'agency fb2'; /*a name to be used later*/
            src: url('{{asset('fonts/AGENCYB.ttf')}}'); /*URL to font*/
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
        .subscribeNow{
            font-size:14px!important;
            margin-right:15px;
            color:orange!important;
        }
        .subscribeNow:hover{
            color:#183867!important;
        }
        #imgprevs{
            width: 161px;
            height:100px;
            margin-top:10px;
			margin-bottom:20px;
        }
		.orderNowPopHolder
		{
			z-index: 100;
			position: fixed;
			overflow: hidden;
		}
    </style>
     <script>

            $(function () {
                
                 $("#imgInp").change(function() {
                 fsize = this.files[0].size;
                 $('input[name="hasFile"]').val('true');
                 readURL(this);
                 });
                 function readURL(input) {
                 if (input.files && input.files[0]) {
                 var reader = new FileReader();
                 reader.onload = function(e) {
                 $('#imgprevs').attr('src', e.target.result);
                 }
                 
                 reader.readAsDataURL(input.files[0]);
                 }
                 }
                 */
            });
    </script>
    <!-- </?php
    $company = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'));
    ?>

</?php
    $subLink = '';
    if(Session::getSession('UB_SUBDOMAINS'))
    {
        $subLink = Session::getSession('UB_SUBDOMAINS').'/';
    }
?> --> -->
    <body>
        <div id="headerHead">
            <div class="top">

                <div id="link">

                    <!--<a href="#" class="mainHeaderLink supportlink </?php echo ($cl == 'setting') ? 'activemainHeaderLink' : '' ?>">
                        SUPPORT
                    </a>-->
                    <a href="#" class="hidden mainHeaderLink supportlink toremove">
                        ASK TAX EXPERT
                    </a>
                    <a href="{{('approval')}}" class="mainHeaderLink toremove hidden">
                        DOC. FOR APPROVAL
                    </a>
                    <a href="http://audit.dadaslitson.com/" target="_BLANK" class="mainHeaderLink toremove hidden">
                        AUDIT FORMS
                    </a>
                    <a href="{{asset('help/pdf/how to use UB Service - All.pdf')}}" target="_blank" class="mainHeaderLink supportlink2 toremove </?php echo ($cl == 'setting') ? 'activemainHeaderLink' : '' ?>">
                        HELP
                    </a>
                    <!-- </?php if (DAOFactory::getTblUserDAO()->load(Session::getSession('user'))->type == 'admin') { ?> -->
                        <a href="{{('/setting/company')}}" class="mainHeaderLink supportlink3 toremove </?php echo ($cl == 'setting') ? 'activemainHeaderLink' : '' ?>">
                            SETTINGS
                        </a>
                    <!-- </?php } ?> -->
                    <a href="{{('/index/index')}}" class="mainHeaderLink supportlink2">
                        LOGOUT
                    </a>
                </div>	
                <div class="unlibooks">
                    <!-- </?php if ($company->logoName == '') {
                        <!-- ?> -->
                                             <!-- <img class="logo"src="{{asset('images/serviceNewLogo.png')}}">  -->
                        <img class="logo"src="{{asset('images/usv_logo_long.png')}}">
                    <!-- </?php } else if ($company->logoName != '') {
                        ?> -->
                        <!-- <img id="imgprevs" src ="{{('companylogo')}}" alt="your logo"/> -->

                    <!-- </?php } ?> -->
                </div>

                <div class="belowTop">
                    <div class="hidden link2">
                        <a class="refer">Referral</a>
                        <a class="subTop">Pricing & Upgrade</a>
                    </div>	
                    <div>
                         <!-- <img class="hidden upload" src ="{{asset('companylogo')}}" /> -->
                        <!-- <a href="{{('Upload')}}"><img class="img"  src="{{asset('images/unlibook.png')}}"></a> -->
                    </div>
                    <div class="hidden companyName2">
                        <!-- </?php
                        echo $organization->orgName;
                        ?> -->
                    </div>
                    <div class="" style="padding-bottom:5px;width:100%;text-align:center;margin-left:67px;margin-top:20px;">
                        <a class="hidden" style="color:gray;font-size:12px;font-family:Verdana!important;font-weight:normal;">
                            You have <b style="color:#183867;"> day(s)</b> remaining in your .
                        </a>
						<!--
                        <a href="#" id="orderNow" class="subscribeNow" style="font-family:Verdana!important;">
                            PAY NOW!
                        </a>-->
						<a href="#"  class="hidden subscribeNow enterLicense"  style="font-family:Verdana!important;">
						   <!-- PAY NOW.-->
						   Enter License
						</a>
                    </div>

                    <div class="discountcontainer"><a href="" class="hidden discountcoupon" >GET DISCOUNT COUPON CODE NOW!</a></div>
                    <div style="height: 15px" class="discountcontainer"></div>

                    <div class="div">
                        <div id="lowerLink">
                            <a href="{{('/dashboard/index')}}" class="submit " >DASHBOARD</a>
                            <img class="linestand" src="{{asset('images/linestand.png')}}">

                                           
                                <a href="{{('Invoice')}}" class="submit" >BILLING</a>
                                <img class="linestand" src="{{asset('images/linestand.png')}}">
                               
                     
                            <!-- if ($userlevel->salesModule == 'yes') {
                                ?>                 -->
                                <a href="{{('Sales')}}" class="submit" >SALES</a>
                                <img class="linestand" src="{{asset('images/linestand.png')}}">
                                <!-- </?php
                            }
                            if ($userlevel->purchaseModule == 'yes') {
                                ?>                 -->
                                <a href="{{('Purchase')}}" class="submit" >PURCHASE</a>
                                <img class="linestand" src="{{asset('images/linestand.png')}}">
                                <!-- </?php
                            }
                            if ($userlevel->expensesModule == 'yes') {
                                ?>                                 -->
                                <a href="{{('Expenses')}}" class="submit">EXPENSES</a>
                                <!-- <a href="</?= URL ?>TimeTracking" class="submit </?php echo ($cl == 'timetracking') ? 'link-selected' : '' ?> ">TIME TRACKING</a>-->
                                <img class="linestand" src="{{asset('images/linestand.png')}}">
                                <!-- </?php
                            }
                            if ($userlevel->accountingModule == 'yes') {
                                ?>        -->
                                <a href="{{('Accounting')}}" class="submit">ACCOUNTING</a>
                                <img class="linestand" src="{{asset('images/linestand.png')}}">
                                <!-- </?php
                            }
                            ?>  -->
                            <a href="{{('Taxplan')}}" class="submit hidden">TAXPLAN</a>
                            <img class="linestand" src="{{asset('images/linestand.png')}}">
                            <!-- </?php if ($userlevel->inventoryModule == 'yes') { ?>  -->
                                <a href="{{('/inventory/menu')}}" class="submit">INVENTORY</a>
                                <img class="linestand" src="{{asset('images/linestand.png')}}">
                                <!-- </?php
                            }
                            if ($userlevel->reports == 'yes') {
                                ?>        -->
                                <a href="{{('/report/index')}}" class="submit">REPORTS</a>
  

                        </div>
                    </div>
                    <!-- </?php
                    if (isset($this->menu)) {
                        require_once $this->menu;
                    }
                    ?> -->

                </div>	
            </div>

        </div>
    </body>
</html>
<div class="supportPopBack hidden">

</div>
<div class="orderNowPopHolder">

</div>
<script>
	$(function(){
		$('.enterLicense').click(function(){
				var email = '</?=Session::getSession('main_email')?>';
				$.post(URL+'user/checkPortal',{'email':email})
					.done(function(result){
						
						if(result == 'client')
						{
							$.post(URL+'user/resellerModal',{'email':email,'login':true})
								.done(function(result){
									$('.popBack').html(result);
									$('.popBack').removeClass('hidden');
								});
							
						}
						else
						{
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

	$('#orderNow').click(function(){
		
		$('body').css('overflow-y','hidden');
		$.post('</?=URL?>index/orderNowPop')
		.done(function(returnData){
			$('.orderNowPopHolder').html(returnData);
			$('#cancelOrder').click(function(){
				$('body').css('overflow-y','scroll');
				$('.orderNowPopHolder').html('');
			})
		})
		return false;
	})
	
     $('.casa').click(function() {
     $.post(URL + 'support/cas')
     .done(function(returnData) {
     $('.popBack').html(returnData);
     $('.popBack').removeClass('hidden');
     $('body').css('overflow', 'hidden');
     $(".popBack").css('z-index', '100');
     
     $('.no').click(function() {
     if (confirm('Are you sure, you want to leave this page?')) {
     $('.popBack').addClass('hidden');
     $('.popBack').html('');
     $('body').css('overflow', 'auto');
     // location.reload();
     }
     });
     
     })
     .fail(function() {
     alert('Connection Error!');
     });
     
     return false;
     
     }); 

    $('.referalLink').click(function() {
     $.post(URL + 'support/referral')
     .done(function(returnData) {
     $('.popBack').html(returnData);
     $('.popBack').removeClass('hidden');
     $('body').css('overflow', 'hidden');
     $(".popBack").css('z-index', '100');
     
     $('.xsupport').click(function() {
     if (confirm('Are you sure, you want to leave this page without sending?')) {
     $('.popBack').addClass('hidden');
     $('.popBack').html('');
     $('body').css('overflow', 'auto');
     location = URL + 'dashboard/index';
     }
     });
     
     })
     .fail(function() {
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
