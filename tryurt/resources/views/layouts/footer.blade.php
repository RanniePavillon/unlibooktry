<style>
    li{
        list-style-type: none;

    }
    .footerdiff{
        color: rgb(165, 163, 163);
        font-size: 13px;
        text-shadow: none;
        font-family: Agency FB;
        cursor:pointer;
    }
    .fbFooter{
        width: 18px;
        height: 18px;
        border: none;
        background-image:url('{{asset('images/fbpic2.jpg')}}');
        background-repeat: no-repeat;
        background-position: -1px;
        cursor: pointer;
        border-radius: 5px;
        background-color: gray;
    }
    .tweetFooter{
        width: 18px;
        height: 18px;
        border: none;
        background-image:url('{{asset('images/tweet.jpg')}}');
        background-repeat: no-repeat;
        background-position: -1px;
        cursor: pointer;
        border-radius: 5px;
        background-color: gray;
    }
    .inFoot{
        width:18px;
        height: 18px;
        border: none;
        background-image:url('{{asset('images/inpic.png')}}');
        background-repeat:no-repeat;
        background-position:-1px;
        cursor: pointer;
        border-radius:5px;
        background-color:gray;
    }
    .inFoot:hover{
        background-image:url('{{asset('images/tweet2_hover.jpg')}}');
        border-radius:5px;
    }
    .tweetFooter:hover{
        background-image:url('{{asset('images/tweet_hover.jpg')}}');
        border-radius:5px;
    }
    .fbFooter:hover{
        background-image:url('{{asset('images/fbpic2_hover.jpg')}}');
        border-radius:5px;
    }
    .tableFooter{
        margin-top:20px;
    }
    .tableFooter li{
        display:inline-block;
    }
    .textFooter{
        font-family:Verdana;
        font-size:10px;
        color:#fff;
        text-decoration:none;
    }
    .footerHolderNew{
        background: rgb(159, 7, 7);
        width:100%;
        bottom: 0;
        padding: 0;
        height:117px;
    }
    .footerContainer{
        margin-left:131px;
    }
    .hidden{
        display:none;
    }
    .footerHover:hover{
        text-decoration:underline;
    }

    /* PO Request */
    .poRequest{
        position: absolute;
        background-color: #fff;
        padding: 5px;
        top: 67px;
        right: 0px;
        width: 179px;
        padding-right: 12px;
        height: 40px;
        font-family:verdana;
        font-size:12px;
        color:#000;
    }   
    .poRequestNo{
        color:red;
    }
    .bell{
        width: 41px;
        position: absolute;
        left: 6px;
        background: #FB6760;
        border-radius: 33px;
        height: 41px;
    }
    .bellCont{
        margin-left: 47px;
        padding-top: 5px;
        padding-left: 5px;
    }
    .gifCon{

    }

</style>
<!-- </?php
$class = Session::getSession('class');
Session::setSession('class', 'approval');

$total = Session::getSession('TblSalesOrderCOUNT');


if(!$total || $total == 0){
    $total = count(TblSalesOrderMySqlExtDAO::getData('', -1));
    Session::setSession('TblSalesOrderCOUNT',$total);
    
}
Session::setSession('class', $class);

if ($total > 0) {
    ?> -->
    <a href="{{('approval')}}" class="toremove">		
        <div class="poRequest">
            <div>
                <div class="gifCon"><img class="bell"src="{{asset('images/bell.gif')}}"></div>
            </div>
            <div class="bellCont">You have <span class="poRequestNo"></span> S.O waiting for approval</div>
        </div>
    </a>


<div class="footerHolderNew" >
    <div class="footerContainer hidden">
        <div style="float:left">
            <ul>
                <li>
                    <label class="textFooter" style="font-size:13px;font-weight: bold;">COMPANY</label>
                </li>
                <li style="margin-top:10px;margin-left:2px;">
                    <a href="contact_us" class="textFooter footerHover">Contact Us</a>
                </li>
                <li style="margin-left:2px;">
                    <a href="#" class="textFooter footerHover">About Us</a>
                </li>
                <li style="margin-left:2px;">
                    <a href="{{('referral')}}" class="textFooter referal footerHover">Referrals</a>
                </li>
            </ul>
        </div>
        <div style="float:left;margin-left:40px;">
            <ul>
                <li>
                    <label class="textFooter" style="font-size:13px;font-weight: bold;">PRODUCT</label>
                </li>
                <li style="margin-top: 10px;">
                    <a href="{{('plan')}}" class="textFooter footerHover">Pricing and Upgrade</a>
                </li>
                <li>
                    <a href="#" class="textFooter footerHover">Unlibooks Features and Benefits</a>
                </li>
                <li>
                    <a href="#" class="textFooter footerHover">Watch video for DEMO </a>
                </li>
            </ul>
        </div>
        <div style="float:left;margin-left:10px;">
            <ul>
                <li>
                    <label class="textFooter" style="font-size:13px;font-weight: bold;">COMMUNITY</label>
                </li>
                <li style="margin-top:10px;">
                    <a href="#" class="textFooter footerHover">Stay Connected</a>
                </li>
                <li>
                    <a href="#" class="textFooter comments footerHover">Your Comments</a>
                </li>
                <li class="footerdiff footerCommunity3">
                    <input type="button" class="inFoot">
                    <input type="button" class="tweetFooter">
                    <input type="button" class="fbFooter">
                </li>
            </ul>
        </div> 
        <div style="float:left;margin-left:30px;">
            <ul>
                <li>
                    <a href class="textFooter footerHover" style="font-size:13;font-weight:bold; ">Learn More....</a>
                </li>
            </ul>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>
<!--<div class="popBack hidden">

</div>		-->
<!-- <script>
    $(function () {
        $('.comments').click(function () {
            $.post(URL + 'support/comments')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');


                        $('.popx').click(function () {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });

        $('.referal').click(function () {
            $.post(URL + 'support/referral')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');


                        $('.popx').click(function () {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });


        var check = setInterval(function () {
            checkLoginStatus();
        }, 10000);
        checkLoginStatus();
    });
    function checkLoginStatus() {
        $.post(URL + 'user/getLoginStatus')
                .done(function (returnData) {
                    if (returnData != 1) {
                        location = URL + 'user/logout';
                    }
                });
    }
</script>
<script>
    $(function() {
        </?php
            $link = isset($_GET['url']) ? $_GET['url'] : null;
            $arrayLink = explode('/', trim($link, '/'));
            $params = '?';
            foreach($_GET as $e=>$a)
            {
                if($e != 'url'){
                    $params .= $e.'='.$a.'&';
                }
            }
            if(Session::getSession("UB_SUBDOMAINS") && strtolower($arrayLink[0]) != Session::getSession("UB_SUBDOMAINS")){
                $links = isset($_GET['url']) ? $_GET['url'] : null;
                $subsDomain = Session::getSession("UB_SUBDOMAINS");
      ?>
                history.pushState({}, '', "</?= URL.$subsDomain.'/'.$links.$params ?>");
      </?php
            }
        ?>
    });
</script> -->