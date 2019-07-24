@include('layouts.header')
<?php
$total = 0;
	$videoTitles = array(
		array(
			'Getting started',
			'How to create new cash receipt',
			'How to create new billing',
			'How to record new payment',
			'How to create new client',
			'How to create new service item',
			'How to record expenses',
			'How to record/import quick expense	',
			'How to add new vendor',
			'How to create new entry',
			'How to import/export data',
			'How to generate report'
		),
		array(
			'-uVt182IMgM',
			'QWUnl0QX7xA',
			'YrV9ZKjLqvA',
			'mN-1DEfhp38',
			'0YuIvmd2Zp4',
			'64M_SMesJ2I',
			'2fbrc1dDK5A',
			'iXTGEUK2_zs',
			'PNQLqEa0LS0',
			'UVHjm0ImYBo',
			'',
			''
		)
	);
?> 
<style>
    .overlay {
        position: absolute;
        width: 676px;
        background-color: rgba(244,241,241,0.5);
        border-radius: 10px;
        height:410px;
        margin: 0px;
        padding: 5px;
        opacity: 0.5;
    }
    .overlay2 {
        position: absolute;
        width: 676px;
        background-color: rgba(244,241,241,0.5);
        border-radius: 10px;
        height: 410px;
        margin: 0px;
        padding: 5px;
        opacity:0.5;
    }
    .overlay3 {
        position: absolute;
        width: 676px;
        background-color: rgba(244,241,241,0.5);
        border-radius: 10px;
        margin: 0px;
        height: 410px;
        padding: 5px;
        opacity: 0.5;
    }
    .DashboardContainer{
        position:relative;
    }
    .start{
        font-size: 34px;
        font-family:agency fb2;
        font-weight: bold;
        color: rgb(0, 0,0);
        padding-bottom: 10px;
        padding-left: 49px;
        color:#183867;
        padding-top: 20px;
    }
    .ciCont{
        width:100%;
        margin:0;
        padding:0;
    }
    .ciHolder {
        border: 1px solid #c8c8c8;
        float: right;
        height: 325px;
        margin: 15px;
        padding: 18px 14px;
        width: 613px;
    }
    .leftDiv{
        font-family:Arial;
        font-size:12px;
        margin-left:5px;
        margin-top:-8px;
    }
    .blueJan{
        padding:6px;
        width:75px;
        background:rgb(4, 169, 255);
    }
    .yellowFeb{
        padding:6px;
        width:75px;
        background:rgb(255, 184, 0);
    }
    .maroonMar{
        padding:6px;
        width:75px;
        background:rgb(169, 70, 70);
    }
    .violetApr{
        padding:6px;
        width:75px;
        background:rgb(148, 13, 178);
    }	
    .topMar{
        margin-top:5px;
    }
    .topMarMon{
        margin-top:8px;
        font-size:10px;
        font-family:Arial;
    }
    .topMarDash{
        margin-top:3px;
    }
    .topMarAmount{
        margin-top:6px;
        font-size:10px;
    }

    .monthly_sales {
        border: 1px solid gray;
        float:right;
        font-size:12px;
        margin-bottom:15px;
        margin-left:-66px;
        margin-top:-22px;
        width:323px;
    }


    .cibDiv {
       /*  height: 180px; */
        margin-left: 176px;
        margin-top: 60px;
        position: absolute;
        width: 317px;
        border:2px solid #c8c8c8;
        border-radius: 5px;
        z-index: 0;
        background-color: #fff
    }
    .cibDivlast {	
        height: 180px;
        margin-left: 176px;
        margin-top: 60px;
        position: absolute;
        width: 317px;
        border:2px solid #c8c8c8;
        border-radius: 5px;
        z-index: 11;
        background-color: #fff
    }
    .startCreateInv{
        width: 203px;
        height: 29px;
        color: #000;
        background-color: #fff;
        border: none;
        border-radius: 20px;
        margin-left: 49px;
        font-weight: bold;
        background-image: url('{{asset('dashchek.png')}}');
        background-position: 101% 50%;
        background-repeat: no-repeat;
        background-size: 55px;
    }
    .hidden{
        display:none;
    }
    .ms2014{
        font-weight:bold;
        font-size:18px;
        text-align:center;
        margin-top:10px;
    }

    .wrapcontent{
        width:600px;
        height:300px;
        padding-bottom:20px;
    }
    .wrapexpcontent{
        width:600px;
        height:300px;
        padding-bottom:20px;
    }
    .tblGraph2{
        width: 173px;
        height: 146px;
        border-left:1px solid gray;
        border-top:1px solid gray;
        border-bottom:1px solid gray;
    }
    .graphAmount{
        margin-top:10px;
        text-align:right;
    }


    .div1{
        height:23.5px;
        width:173px;
        background:#EFEFEF;
        border-bottom:1px solid gray;
    }
    .barGraph1{
        width: 30px;
        height: 116px;
        background: rgb(4, 169, 255);
        border: 1px solid #c8c8c8;
        margin-top: -119px;
        margin-left: 107px;
    }
    .barGraph2{
        width: 30px;
        height: 70px;
        background: rgb(255, 184, 0);
        border: 1px solid #c8c8c8;
        margin-top: -72px;
        margin-left: 139px;
    }
    .barGraph3{
        width: 30px;
        height: 119px;
        background: rgb(169, 70, 70);
        border: 1px solid #c8c8c8;
        margin-top: -121px;
        margin-left: 171px;
    }
    .barGraph4{
        width: 30px;
        height: 46px;
        background:rgb(148, 13, 178);
        border: 1px solid #c8c8c8;
        margin-top: -48px;
        margin-left: 203px;
    }
    .boxBlue{
        width:7px;
        height:7px;
        background:rgb(107, 148, 98);
        border:1px solid #c8c8c8;
    }
    .boxYellow{
        width:7px;
        height:7px;
        background: rgb(104, 32, 129);
        border:1px solid #c8c8c8;
    }
    .boxMaroon{
        width:7px;
        height:7px;
        background:rgb(22, 118, 131);
        border:1px solid #c8c8c8;
    }
    .boxViolet{
        width:7px;
        height:7px;
        background:rgb(231, 98, 39);
        border:1px solid #c8c8c8;
    }
    .boxLightBlue{
        width:7px;
        height:7px;
        background:rgb(86, 143, 208);
        border:1px solid #c8c8c8;
    }
    .boxDarkBlue{
        width:7px;
        height:7px;
        background:rgb(45, 72, 205);
        border:1px solid #c8c8c8;
    }
    .bbox{
        margin-top:18px;
    }
    .monthBox{
        margin-top:12px;
        magin-right:7px;


    }

    <!--for expense -->

    .expshade {
        background: none repeat scroll 0 0 rgb(244, 241, 124);
        border-radius: 60px;
        height: 350px;
        margin-left: -16px;
        margin-top: -8px;
        opacity: 0.8;
        position: absolute;
        width: 635px;
    }
    .ciContexp{
        width:100%;
        margin:0;
        padding:0;
    }
    .ciHolderexp {
        border: 1px solid #c8c8c8;
        float: right;
        height: 325px;
        margin: 30px -15px 15px;
        padding: 18px 14px;
        width: 613px;
    }
    .leftDivexp{
        width:195px;
        font-family:Arial;
        font-size:12px;
        margin-left:5px;
        margin-top:5px;
    }
    .tblExpenseexp{
        font-family:Arial;
        font-size:11px;
        border-collapse:collapse;
        margin-top:7px;
        width:100%;
    }
    .tblExpenseexp tr td{
        padding:5px;
        border:1px solid #c8c8c8;
        background:#e8e8e8;
    }
    .tblExpenseexp th{
        padding:5px;
        border:1px solid #c8c8c8;
        background:rgb(129, 160, 75);
    } 
    .expensesDivexp{
        border: 1px solid gray;
        width: 323px;
        margin-top: -289px;
        margin-left: 225px;
        font-family: Arial;
        font-size: 12px;
        padding: 26px;

    }
    .ex2014exp{
        font-weight:bold;
        font-size:18px;
        font-family:Arial;
        text-align:center;
        margin-top:10px;
    }
    .boxBexp{
        width:7px;
        height:7px;
        background:blue;
        border:1px solid #c8c8c8;
    }
    .boxVexp{
        width:7px;
        height:7px;
        background:rgb(145, 46, 224);
        border:1px solid #c8c8c8;
    }
    .boxSexp{
        width:7px;
        height:7px;
        background:rgb(194, 187, 187);
        border:1px solid #c8c8c8;
    }
    .boxBrexp{
        width:7px;
        height:7px;
        background:brown;
        border:1px solid #c8c8c8;
    }
    .boxSBexp{
        width:7px;
        height:7px;
        background:rgb(26, 153, 203);
        border:1px solid #c8c8c8;
    }
    .boxYGexp{
        width:7px;
        height:7px;
        background:rgb(136, 195, 50);
        border:1px solid #c8c8c8;
    }
    .boxOexp{
        width:7px;
        height:7px;
        background:rgb(255, 128, 4);
        border:1px solid #c8c8c8;
    }
    .bboxexp{
        margin-top:20px;
    }
    .textline1{
        margin-top:6px;
    }


    .popCont {
        background: none repeat scroll 0 0 rgb(244, 241, 241);
        border-radius: 60px;
        height: 350px;;
        margin-left: -16px;
        margin-top: -8px;
        opacity: 0.8;
        position: absolute;
        width: 635px;
    }
    .popConttwo {
        background: none repeat scroll 0 0 rgb(244, 241, 241);
        border-radius: 60px;
        height: 350px;;
        margin-left: -16px;
        margin-top: -20px;
        opacity: 0.8;
        position: absolute;
        width: 635px;
    }

    .cibDivexp{
        width: 336;
        height: 195;
        background:rgb(211, 231, 187);
        position: absolute;
        margin-top: -235px;
        margin-left: 159px;
    }
    .startCreateInvexp{
        width:157px;
        height:45px;
        color:#fff;
        background:rgb(129, 160, 75);
        border:none;
    }
    <!--for collected ammount -->
    .ciContcollect{
        width:100%;
        margin:0;
        padding:0;
    }
    .ciHoldercollect {
        border: 1px solid #c8c8c8;
        float: right;
        height: 310px;
        margin: 0 -15px 15px;
        padding: 18px 14px;
        width: 613px;
    }
    .leftDivcollect{
        width: 195px;
        font-family: Arial;
        font-size: 12px;
        margin-top: 9px;
        float:left;
    }
    .leftDivcollect2{
        width: 195px;
        font-family: Arial;
        font-size: 12px;
        margin-top: 9px;
        float:left;
        margin-left:14px;
    }
    .tblColAmcollect{
        font-family:Arial;
        font-size:11px;
        border-collapse:collapse;
        margin-top:5px;
        width:230px;
    }
    .tblColAmcollect tr td{
        padding:5px;
        border:1px solid #c8c8c8;
        background:rgb(250, 223, 200);
    }
    .tblColAmcollect th{
        padding:5px;
        border:1px solid #c8c8c8;
        background:rgb(252, 171, 104);
    } 
    .colAmDivcollect{
        border: 1px solid gray;
        width: 323px;
        margin-top: -269px;
        margin-left: 232px;
        font-family: Arial;
        font-size: 12px;
        padding: 26px;
    }
    .colAm2014collect{
        font-weight:bold;
        font-size:12px;
        font-family:Verdana;
        text-align:center;
    }
    .bboxBcollect{
        width:7px;
        height:7px;
        background:rgb(29, 110, 218);
        border:1px solid #c8c8c8;
    }
    .bboxRcollect{
        width:7px;
        height:7px;
        background:red;
        border:1px solid #c8c8c8;
    }
    .bboxGcollect{
        width:7px;
        height:7px;
        background:rgb(136, 195, 50);
        border:1px solid #c8c8c8;
    }
    .bboxVcollect{
        width:7px;
        height:7px;
        background:rgb(145, 46, 224);
        border:1px solid #c8c8c8;
    }
    .bboxSBcollect{
        width:7px;
        height:7px;
        background:rgb(26, 153, 203);
        border:1px solid #c8c8c8;
    }
    .bboxOcollect{
        width:7px;
        height:7px;
        background:rgb(255, 128, 4);
        border:1px solid #c8c8c8;
    }
    .cABoxcollect{
        margin-top:22px;
    }
    .cABoxTextcollect{
        margin-top:16px;
    }
    .popContcollect{
        width: 627px;
        height: 337px;
        border-radius: 60px;
        background: rgb(244, 241, 241);
        opacity: .8;
        margin-top: -310px;
        position: absolute;
        margin-left: -6px;
    }
    .cibDivcollect{
        width: 336;
        height: 195;
        background:rgb(211, 231, 187);
        position: absolute;
        margin-top: -235px;
        margin-left: 159px;
    }
    .notifydash{
        width: 263px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size: 12px;
        float: left;
        margin-left: 16px;
        margin-top: 10px;
        padding-bottom:290px;
        height:965px;
        background-color: white;
        border:1px solid #c8c8c8;
    }
    .notifytextdash{
        font-family: Verdana;
        font-size:14px;
        width:246px;
        font-weight:bold;
        text-align: center;
        /* padding: 9px 1px 5px 5px; */
        color:#B13C56;
        /* background-color: #fff; */
        border-radius: 14px;
        margin-top: 20px;
    }
    .textline1exp{
        margin-top:15px;
    }

    .content{
        float:right;
        height:auto!important;
        width:688px;
        margin-top:10px;
        margin-right:15px;
    }

    .outerholder {
        border: 1px solid #c8c8c8;
        height:410px;
        width:686px;
        padding-bottom:7px;
    }

    .innerholder {
        border-radius: 10px;
        height: 325px;
        margin: 0;
        /*  padding: 5px; */
        width:686px;
        overflow: visible;
        /* z-index: 1000; */
    }
    .box1 {
        float: left;
        height: 250px;
        margin-left: 14px;
        width: 245px;
    }
    .box2 {
        border: 2px solid pink;
        float: right;
        height: 250px;
        margin-right: 3px;
        width: 400px;
    }
    .box3 {
        border: 2px solid pink;
        float: right;
        height: 270px;
        margin-right: 3px;
        width: 400px;

    }
    .box4 {
        border: 2px solid pink;
        height: 255px;
        margin-right: 3px;
        width: 400px;
        float:right;
        padding:20px 10px;
        margin-top:10px;
    }
    .bargraphs{
        float:left;
        border: 2px solid yellow;
        margin-top:10px;
    }
    .boxes1{
        margin-top:10px;
    }
    .boxes2{
        margin-top:10px;
        margin-left:14px;
    }
    .col1 {
        float: left;
        height: 200px;
        margin-left: -30px;
        margin-top: 12px;
        width: 130px;
        font-family:Arial;
        font-size:12px;
    }
    .col2{
        width:130px;
        height:200px;
        margin-right:20px;
        margin-left:110px;
        margin-top:20px;
    }
    .col3{
        width:100px;
        height:200px;
        float:right;
        margin-top:-200px;
    }
    .colexp {
        float: left;
        height: 365px;
        margin-top: 0px;
        width: 230px;
        overflow: auto;
    }
    .containers{
        height:50px;
    }
    .notecontainer{
        padding: 5px;
        width:253px;
    }
    .cibDiva{
        margin-top: 48px;
		border-radius: 1px 1px 5px 5px;
		height: 25px;
		text-align: center;
		padding: 8px;
		border:none;
		border-top: solid 1px #c8c8c8;
		padding-bottom: 13px;
		
    }
    .startdivNew{
        font-family:agency fb2;
        font-size: 31px;
        margin-top: 31px;
        margin-left: 82px;
        color:#E2180F;
        font-weight: bold;
    }
    .nty{
        font-family:agency fb2;
        font-size: 31px;
        margin-top:63px;
        margin-left:71px;
        color:#E2180F;
        font-weight: bold;
    }
    .hrdash{
        height: 5px;
        width: 99%;
        background-color: rgb(86, 163, 98);
        margin-top: 8px;
    }
    .dashcontainer2{
        background-color: #fff;
        padding-bottom:35px;
        width: 1000px;
        margin: auto;
        height:auto!important;
        margin-bottom: 35px;
        /* box-shadow:2px 2px 15px #000; */
    }
    .hrdashreport {
        height: 5px;
        width: 98%;
        background-color: rgb(189, 45, 35);
        border: none;
        margin-left:10px;
    }
    .recordButtonGet{
        font-family: Agency FB;
        font-size: 31px;
        margin-top: 31px;
        margin-left: 68px;
    }
    .borderBlue{
        width:238px;
        border:1px solid #BA302B;
        margin-left:11px;
        margin-top: 11px;
        box-shadow:1px 3px 6px 1px #c8c8c8;
    }
    li{
        list-style-type:none;
        font-size:12px;
        font-family:Verdana;
    }
    a{
        text-decoration:none;
        color: #183867;
    }
    a:hover{
        color:#B13C56;
    }
    .notifyContents{
        width:218px;
        margin-left:-24px;
    }
    .notifyContents li{
        padding-top:20px;
        color: #183867;
    }
    .wvfdLinks{
        width:218px;
        margin-left:-24px;
    }
    .wvfdLinks li{
        padding-top:20px;
    }
    @font-face {
        font-family: 'agency fb'; /*a name to be used later*/
        src: url('{{asset('fonts/AGENCYR.ttf')}}'); /*URL to font*/
    }

    @font-face {
        font-family: 'agency fb2'; /*a name to be used later*/
        src: url('{{asset('fonts/AGENCYB.ttf')}}'); /*URL to font*/
    }
    .billingTable{
        overflow:auto;
        height:365px;
        width: 250px;
    }
    .ubIcon{
        width:20px;
        height:20px;
    }
	.dashbutton{
		border: solid 1px #c8c8c8;
		border-radius: 10px;
		height: 21px;
		padding: 2px 5px 5px 5px;
		width: 223px;
		margin: auto;
		color: #070B0E;
		font-family: agency fb2;
		font-size: 21px
	}
</style>
<title>
    Welcome to Unlibooks
</title>
<script>
    $(document).on("click", ".popx", function () {
        $('.popBack').addClass('hidden');
        // $('.popBack').html('');
		location.reload();
    });
    // function playVid(play) {
        // switch (play) {
            // case 1:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390"  src="https://www.youtube.com/embed/rimDN_1_loA?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 2:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/fgrLv6j72EA?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 3:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/-uVt182IMgM?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 4:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src=" https://www.youtube.com/embed/YrV9ZKjLqvA?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 5:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/ErBJztsG-FY?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 6:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/IT0an1t5QI0?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 7:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/n1wl_gBC0Dc?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 8:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/64M_SMesJ2I?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 9:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/2fbrc1dDK5A?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 10:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/PNQLqEa0LS0?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 11:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/iXTGEUK2_zs?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 12:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/QWUnl0QX7xA" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 13:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/mN-1DEfhp38" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 14:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/0YuIvmd2Zp4?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
            // case 15:
                // $(".popBack").html('<center><div style="width:700px"><br /><br /><input type="button" class="close1Client close1Clienthmo popx" style="cursor:pointer;border:none;font-size:19px;color:#fff;background:transparent;margin-top:2px;font-weight:bold;margin-left:594px;position:absolute;" value="X"><iframe width="640" height="390" src="https://www.youtube.com/embed/UVHjm0ImYBo?rel=0" frameborder="0" allowfullscreen></iframe></div></center>');
                // break;
        // }
        // $(".popBack").removeClass('hidden');
        // $(".popBack").css('z-index', '100');

    // }


</script>
<!-- </?php
$collectedYesterday = TblEnterPaymentMySqlExtDAO::getCollectedCashYesterday();
$amountReceivable = TblNewInvoiceMySqlExtDAO::getTotalAmountReceivable();
$addedClient = TblClientMySqlExtDAO::getAddedClient();
$expensesYesterday = TblExpenseAmountMySqlExtDAO::getExpensesYesterday();

// print_r($this->collectedAmount);
?> -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!-- </?php
$org = DAOFactory::getTblOrganizationDAO()->load(Session::getSession('orgid'));
?> -->
<div class="dashcontainer2">
    <div class="DashboardContainer">

        <!-- <div class="start">Hi </?php echo DAOFactory::getTblUserDAO()->load(Session::getSession('user'))->fullName; ?>, <br>
            Where would you like to get started?
        </div> -->

        <div class="hrdashreport"></div>
        <div class="notifydash">
            <div class="borderBlue">
                <!--
                <div class="notifytextdash">NOTIFICATIONS</div>
                <div class="notifyContentsHolder">
                        <ul class="notifyContents">
                                <li>* You have posted <span style="font-weight:bold;"></?php echo TblNewInvoiceMySqlExtDAO::gettotalInvoicePostedYesterday() ?></span> billing/s yesterday.</li>
                                <li>* You have <span style="font-weight:bold;"></?php echo TblNewInvoiceMySqlExtDAO::getOpenInvoice() ?></span> open billing/s for posting</li>
                                <li>* Your Total Cash Collection yesterday is: <span style="font-weight:bold;"></?php echo ($collectedYesterday != 0 ? number_format($collectedYesterday, 2) : (number_format(0, 2))) ?></span></li>
                                <li>* Your Total Amount Receivable yesterday is: <span style="font-weight:bold;"></?php echo ($amountReceivable != 0 ? number_format($amountReceivable, 2) : (number_format(0, 2))) ?></span></li>
                                <li>* You added <span style="font-weight:bold;"></?php echo ($addedClient != 0 ? ($addedClient) : (0)) ?></span> new client/s</li>
                                <li>* You added <b>0</b> new Clients Name</li>
                                <li>* Your total expenses yesterday is: <span style="font-weight:bold;"></?php echo ($expensesYesterday != 0 ? number_format($expensesYesterday, 2) : (number_format(0, 2))) ?></span></li>
                        </ul>
                </div>
                -->
                <div>
                    <div class="notifytextdash" style="margin-top:35px!important;">Watch Video for Demo</div>

                    <div class="linkdash">
                        <ul class="wvfdLinks">
                            <!--<li>
                                    <a href="#" class="videos" onclick="playVid(1)">How to create a company</a>
                            </li>-->
                            <!--<li>
                                    <a href="#" class="videos" onclick="playVid(2)">How to setup company</a>
                            </li>-->
                            <!--<li>
                                <a href="#" class="videos" onclick="playVid(3)">Getting started</a>
                            </li>
                            <li>
                                <a href="#" class="videos" onclick="playVid(12)">How to create new cash receipt</a>
                            </li>
                            <li>
                                <a href="#" class="videos" onclick="playVid(4)">How to create new billing</a>
                            </li>
                            <li>
                                <a href="#" class="videos" onclick="playVid(13)">How to record new payment</a>
                            </li>
                            <li>
                                <a href="#" class="videos" onclick="playVid(14)">How to create new client</a>
                            </li>
                            <li>
                                <a href="#" class="videos" onclick="playVid(8)">How to create new service item</a>
                            </li>
                            <li>
                                <a href="#" class="videos" onclick="playVid(9)">How to record expenses</a>
                            </li>
                            <li>
                                <a href="#" class="videos" onclick="playVid(11)">How to record/import quick expense</a>
                            </li>
                            <li>
                                <a href="#" class="videos" onclick="playVid(10)">How to add new vendor</a>
                            </li>
                            <li>
                                <a href="#" class="videos" onclick="playVid(15)">How to create new entry</a>
                            </li>
                            <li>
                                <a href="#" class="videos" onclick="">How to import/export data</a>
                            </li>
                            <li>
                                <a href="#" class="videos" onclick="">How to generate report</a>
                            </li>-->
                            <!--<li>
                                    <a href="#" class="videos" onclick="playVid(5)">How to record payment</a>
                            </li>
                            <li>
                                    <a href="#" class="videos" onclick="playVid(6)">How to add new HMO Partner</a>
                            </li>
                            <li>
                                    <a href="#" class="videos" onclick="playVid(7)">How to add new Patient</a>
                            </li>-->
							<?php
								
								$videoIdCount = 0;
								foreach($videoTitles[0] as $each):
							?> 
								<li>
									<a href="#" class="watchVideo">
										 <?=$each?> 
										<input type="hidden" name="youtubeVidId" value="">
									</a>
								</li>
							 <?php
								$videoIdCount++;
								endforeach;
							?> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">

            <div class="outerholder collectedAmountDashboard " >
                <div class="innerholder">
                    <div class="overlay3">
                        <div class="leftDivcollect2">
                            <div style="font-size:13px;font-family:Verdana;">
                                <b>Collection & Cash Receipt</b>
                            </div>
                            <div style="overflow:auto;height:350px;width:250px;">
                                <!-- </?php
                                $total = 0;
                                if ($this->collectedAmount) {
                                    ?> -->
                                    <table class="tblColAmcollect">
                                        <tr>
                                            <th style="text-align:left;" rowspan="2">Month</th>
                                            <th style="text-align:center;">Collected</th>
                                            <th style="text-align:center;">Cash Receipt</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center;" colspan="2">Amount</th>
                                        </tr>
                                        <!-- </?php
                                        $total = 0;
                                        foreach ($this->collectedAmount as $each) {
                                            $total += $each->amountReceived > 0 ? $each->amountReceived : 0;
                                            ?> -->
                                            <!-- <tr>
                                                <td></?= date('F', strtotime($each->transDate)) ?></td>
                                                <td style="text-align:right;"></?= Controller::getFloat($each->collection > 0 ? $each->collection : 0) ?></td>
                                                <td style="text-align:right;"></?= Controller::getFloat($each->receipt) ?></td>
                                            </tr> -->
                                   </table>
                                
                                <div style="margin-top:10px;font-weight:bold;font-size:13px;font-family:Verdana;">Total Amount  - 
                                  </div>
                            </div>
                        </div>
                        <div class="box4" id="collectedChart">
                            <div class="colAm2014collect">Monthly Collection & Cash Receipt </div>
                            <div style="float:left;margin-top:11px; margin-left:20px;">
                                <img src="{{asset('dashboard_design/public/img/collected_amount.png')}}">
                            </div>
                            <div style="float:left;margin-left:68px;">
                                <div class="cABoxcollect bboxBcollect"></div>
                                <div class="cABoxcollect bboxRcollect"></div>
                                <div class="cABoxcollect bboxGcollect"></div>
                                <div class="cABoxcollect bboxVcollect"></div>
                                <div class="cABoxcollect bboxSBcollect"></div>
                                <div class="cABoxcollect bboxOcollect"></div>
                            </div>
                            <div style="float:left;font-family:Arial;font-size:12px;margin-left:20px;margin-top:2px;">
                                <div class="cABoxTextcollect">January</div>
                                <div class="cABoxTextcollect">February</div>
                                <div class="cABoxTextcollect">March</div>
                                <div class="cABoxTextcollect">April</div>
                                <div class="cABoxTextcollect">May</div>
                                <div class="cABoxTextcollect">June</div>
                                <div style="clear:both"></div>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <div class="cibDivlast">
                        <div class="nty">No Transaction Yet</div>
                        <!-- </?php if($useraccess->Add == 'yes') { ?> -->
                            <div class="cibDiva hidden" style=""><a href="{{('expenses/add')}}"><img src="{{asset('images/startHere2.png')}}" style="width: 319px;"></a></div>
                       
                    </div>
                </div>
            </div>
            <div class="outerholder expenseDashboard">
                <div class="innerholder">
                    <div class="overlay2">
                        <div class="boxes2">
                            <div class="box3" id="expenseChart" style="font-family:Arial;font-size:12px;">
                                <div class="containers">
                                    <div align="center" class="ex2014" style="font-size:12px;margin-top:20px;"><strong>Monthly Expenses for Year </strong></div>
                                    <!--<div class="c1" style="float:left; width:100px; margin-left:28px;">
                                            <div>
                                                    <div class="bboxexp boxBexp"></div>
                                                    <div class="bboxexp boxVexp"></div>
                                                    <div class="bboxexp boxSexp"></div>
                                            </div>
                                            <div style="margin-left:20px; margin-top:-58px;">
                                                    <div class="textline1exp">Water</div>
                                                    <div class="textline1exp">Meals</div>
                                                    <div class="textline1exp">Communication</div>
                                            </div>
                                    </div>
                                    <div class="c2" style="margin-left:150px; margin-top:0px;">
                                            <div class="bboxexp boxBrexp"></div>
                                            <div class="bboxexp boxSBexp"></div>
                                            <div style="margin-left:17px; margin-top:-37px;">
                                                    <div class="textline1exp">Transportation</div>
                                                    <div class="textline1exp">Fuel</div>
                                            </div>
                                    </div>-->
                                    <div class="c3" style="margin-left:300px;margin-top: 20px;">
                                        <div class="bboxexp boxBlue"></div>
                                        <div class="bboxexp boxYellow"></div>
                                        <div class="bboxexp boxMaroon"></div>
                                        <div class="bboxexp boxViolet"></div>
                                        <div class="bboxexp boxLightBlue"></div>
                                        <div class="bboxexp boxDarkBlue"></div>
                                        <div style="margin-left:19px;margin-top: -175px;">
                                            <div class="textline1exp">January</div>
                                            <div class="textline1exp">February</div>
                                            <div class="textline1exp">March</div>
                                            <div class="textline1exp">April</div>
                                            <div class="textline1exp">May</div>
                                            <div class="textline1exp">June</div>
                                        </div>
                                    </div>
                                    <div style="margin-top: -108px;margin-left: 59px; float:left;">
                                        <img src="{{asset('dashboard_design/public/img/monthly_expenses.png')}}">
                                    </div>
                                </div>
                            </div>
                            <div style="font-size:13px;font-family:Verdana;">
                                <b>Expenses</b>
                            </div>
                            <div class="colexp">
                                <!-- </?php
                                $total = 0;
                                if ($this->expenses) {
                                    ?> -->
                                    <table class="tblExpenseexp">
                                        <tr>
                                            <th style="text-align:left;">Month</th>
                                            <th style="text-align:right;">Amount</th>
                                        </tr>
                                        <!-- </?php
                                        $total2 = 0;
                                        $count = 1;
                                        foreach ($this->expenses as $each) {
                                            $total += $each->netAmount;
                                            // if($count < 6){
                                            ?> -->
                                            <!-- <tr>
                                                <td></?= date('F', strtotime($each->transDate)) ?></td>
                                               <td></?= $each->descriptionMemo ?></td>
                                                <td style="text-align:right;"></?= Controller::getFloat($each->netAmount) ?></td>
                                            </tr> -->
                                            <!-- </?php
                                            // } else {
                                            $total2 += $each->netAmount;
                                            // }
                                            $count++;
                                        }
                                        // if(count($this->expenses) > 5){
                                        ?> -->
                                <!--<tr>
                                        <td colspan="2">Other's</td>
                                        <td style="text-align:right;"></?= Controller::getFloat($total2) ?></td>
                                </tr>-->
                                        
                                    </table>
                                <div style="font-size:13px;font-family:Verdana;margin-top:10px;">
                                    <strong>Total Amount</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </?php if($useraccess->Add == 'yes') { ?> -->
                    <div class="cibDiv2 cibDiv">
                        <div class="startdivNew">RECORD EXPENSE</div>
                        <div class="cibDiva" style=""><a href="{{('expenses/add')}}"><div class="dashbutton">Start Here</div><!--<img src="</?= URL ?>public/images/startHere2new.png" style="width: 317px;">--></a></div>
                    </div>                   
                </div>	
            </div>
            <div class="outerholder serviceInvoiceDashboard">
                <div class="innerholder">
                    <div class="overlay">
                        <div class="boxes1">
                            <div class="box1">
                                <div style="font-size:16px; width:150px;font-size:13px;font-family:Verdana;">
                                    <b>Billing</b>
                                </div>
                                <div class="leftDivcollect">
                                    <div class="billingTable">
                                        <!-- </?php
                                        $total = 0;
                                        if ($this->getBilling) {
                                            ?> -->
                                            <table class="tblColAmcollect">
                                                <tr>
                                                    <th style="text-align:left;">Month</th>
                                                    <th style="text-align:right;">Amount</th>
                                                </tr>
                                                <!-- </?php
                                                // $total = 0;
                                                $count = 1;
                                                foreach ($this->getBilling as $each) {
                                                    $total += $each['grand_total'];
                                                    // if($count < 10){
                                                    ?> -->
                                                    <!-- <tr>
                                                        <td></?= date('F', strtotime($each['trans_date'])) ?></td>
                                                        <td style="text-align:right;"></?= Controller::getFloat($each['grand_total']) ?></td>
                                                    </tr> -->
                                                  			
                                            </table>

                                        <div style="float:left;margin-top:10px;font-size:13px;font-family:Verdana;">
                                            <b>Total Amount</b>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="box2" id="invoiceChart">
                                <div style="width:100%;font-size:12px;font-family:Arial;" class="ms2014">Sales for Year</div>
                                <div style="margin-top:34px;margin-left:33px; float:left;">
                                    <img src="{{asset('dashboard_design/public/img/monthly_expenses.png')}}">
                                </div>

                                <div class="col2 hidden">
                                    <div class="tblGraph2">
                                        <div class="div1">
                                        </div>
                                        <div  class="div1">
                                        </div>
                                        <div  class="div1">
                                        </div>
                                        <div  class="div1">
                                        </div>
                                        <div  class="div1">
                                        </div>
                                        <div  class="div1">
                                        </div>
                                    </div>


                                    <div style="margin-left:-77px;">
                                        <div class="barGraph1"></div>
                                        <div class="barGraph2"></div>
                                        <div class="barGraph3"></div>
                                        <div class="barGraph4"></div>
                                    </div>

                                </div>

                                <div class="col3" style="margin-top:7px;">		

                                    <div>
                                        <div class="bbox boxBlue"></div>
                                        <div class="bbox boxYellow"></div>
                                        <div class="bbox boxMaroon"></div>
                                        <div class="bbox boxViolet"></div>
                                        <div class="bbox boxLightBlue"></div>
                                        <div class="bbox boxDarkBlue"></div>
                                    </div>
                                    <div style="margin-left:18px; margin-top:-160px;font-size:12px;font-family:Arial;">
                                        <div class="monthBox">January</div>
                                        <div class="monthBox">February</div>
                                        <div class="monthBox">March</div>
                                        <div class="monthBox">April</div>
                                        <div class="monthBox">May</div>
                                        <div class="monthBox">June</div>
                                    </div>
                                </div>
                                <div style="clear:both"></div>
                            </div>	
                        </div>	
                    </div>
                    <!-- </?php if($useraccess->Add == 'yes') { ?> -->
                    <div class="cibDiv1 cibDiv">
                        <div  class="startdivNew" style="">CREATE BILLING</div>
                        <div class="cibDiva" style=""><a href="{{('invoice/add')}}"><div class="dashbutton">Start Here</div><!--<img src="</?= URL ?>public/images/startHere2new.png" style="width: 317px;">--></a></div>
                    </div>               
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="video-overlay">
	<div class="video-header">
		<div class="video-exit closeVideoWindow">
			<i class="pe-7s-close pe-4x"></i>
		</div>
	</div>
	<div class="video-body">
	</div>
</div>
<div class="popBack hidden"></div>
<!-- <script>
</?php if ($org->orgName == '' && $useraccess->Add == 'yes') { ?>
        viewPopout();
        function viewPopout() {
            $.post(URL + 'dashboard/selectStart')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.closeSelect').click(function () {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        });

                    });
            return false;
        } -->
<!-- 
    $(function () {
        var count = 0;
        $('.start').addClass('hidden');
       /*  $.post(URL + 'dashboard/getInvoices')
                .done(function (returnData) {
                    if (returnData != '') {
                        // $('.serviceInvoiceDashboard').html(returnData);
						alert(returnData);
                        $('.start').remove();
                    } else {
                        count++;
                        setCount();
                    }
                });

        $.post(URL + 'dashboard/getExpenses')
                .done(function (returnData) {
                    if (returnData != '') {
                        // $('.expenseDashboard').html(returnData);
						alert(returnData);
                        $('.start').remove();
                    } else {
                        count++;
                        setCount();
                    }
                });

        $.post(URL + 'dashboard/getCollectedAmount')
                .done(function (returnData) {
                    if (returnData != '') {
                        // $('.collectedAmountDashboard').html(returnData);
						alert(returnData);
                        $('.start').remove();
                    } else {
                        count++;
                        setCount();
                    }
                });

        function setCount() {
            if (count == 3) {
                // $('.start').removeClass('hidden');
            }
        }
 */
        /* $.post(URL + 'dashboard/getNotification')
         .done(function(returnData){
         $('.notifyContentsHolder').html(returnData);
         }) */
    });
</script>
<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});

</?php if ($this->collectedAmount) { ?>
        google.setOnLoadCallback(collectedChart);

        function collectedChart() {
            var data = google.visualization.arrayToDataTable([
                    ['Account Number', 'Rate']
    </?php
    $total = 0;
    $total2 = 0;
    $count = 1;
    foreach ($this->collectedAmount as $each) {
        $total += $each->amountReceived;
        // if($count < 6){
        ?>
                , ['</?= date('F', strtotime($each->transDate)) ?>', </?= round($each->amountReceived > 0 ? $each->amountReceived : 0, 2) ?>]
        </?php
        // } else {
        $total2 += $each->amountReceived;
        // } 
        $count++;
        ?>
        </?php
    }
    // if(count($this->collectedAmount) > 5){
    ?>
            // ,["Other's", </?= $total2 ?>]
    </?php
    // }
    ?>
            ]);
                    var options = {
                        title: 'Monthly Collection & Cash Receipt - </?php echo date("Y") ?>',
                        is3D: true,
                    };

            var chart = new google.visualization.PieChart(document.getElementById('collectedChart'));
            chart.draw(data, options);
        }
        $('.cibDivlast').remove();
        $('.overlay3').css('opacity', 1);
        $('#collectedChart').css('padding', 0);
</?php } ?>

</?php if ($this->getBilling) { ?>
        google.setOnLoadCallback(invoiceChart);

        function invoiceChart() {
            var data = google.visualization.arrayToDataTable([
                    ['Account Number', 'Rate']
    </?php
    $total = 0;
    $total2 = 0;
    $count = 1;
    foreach ($this->getBilling as $each) {
        $total += $each['grand_total'];
        // if($count < 6){
        ?>
                , ['</?= date('F', strtotime($each['trans_date'])) ?>', </?= round($each['grand_total'], 2) ?>]
        </?php
        // } else {
        $total2 += $each['grand_total'];
        // }
        $count++;
        ?>
        </?php
    }
    // if(count($this->getBilling) > 5){
    ?>
            // ,["Other's", </?= $total2 ?>]
    </?php
    // }
    ?>
            ]);
                    var options = {
                        title: 'Billing for Year - </?php echo date("Y") ?>',
                        is3D: true,
                    };

            var chart = new google.visualization.PieChart(document.getElementById('invoiceChart'));
            chart.draw(data, options);
        }
        $('.cibDiv1').remove();
        $('.overlay').css('opacity', 1);
        $('#expenseChart').css('padding', 0);
</?php } ?>
</?php if ($this->expenses) { ?>
        google.setOnLoadCallback(expenseChart);

        function expenseChart() {
            var data = google.visualization.arrayToDataTable([
                    ['Account Number', 'Rate']
    </?php
    $total = 0;
    $total2 = 0;
    $count = 1;
    foreach ($this->expenses as $each) {
        $total += $each->netAmount;
        // if($count < 6){
        ?>
                , ['</?= date('F', strtotime($each->transDate)) ?>', </?= round($each->netAmount, 2) ?>]
        </?php
        // } else {
        // $total2 += $each->netAmount;
        // }
        // $count++;
        ?>
        </?php
    }
    // if(count($this->expenses) > 5){
    ?>
            // ,["Other's", </?= $total2 ?>]
    </?php
    // }
    ?>
            ]);
                    var options = {
                        title: 'Monthly Expenses for Year- </?php echo date("Y") ?>',
                        is3D: true,
                    };

            var chart = new google.visualization.PieChart(document.getElementById('expenseChart'));
            chart.draw(data, options);
        }

        $('.cibDiv2').remove();
        $('.overlay2').css('opacity', 1);
        $('#expenseChart').css('padding', 0);
</?php } ?>
</?php
		if (!$this->collectedAmount && !$this->expenses && !$this->getBilling) {
?>
		// alert('asdf');
		$('.start').removeClass('hidden');
</?php
		}
?>
</script>
<script>
	$(function(){
		$('.watchVideo').click(function(){
			$('.video-overlay').css('top','0px');
			$('.video-overlay').css('opacity','1');
			
			
			var inYoutubeId = $(this).find('input[name="youtubeVidId"]').val();
			
			$.post('</?=URL?>dashboard/playVideo',{'inYoutubeId':inYoutubeId})
			.done(function(returnData){
				$('.video-body').html(returnData);
			});
			return false;
		});
		
		$('.closeVideoWindow').click(function(){
			$(this).closest('.video-overlay').css('top','-100%');
			$(this).closest('.video-overlay').css('opacity','0');
			
			setTimeout(emptyVideoHolder,1000);
		});
		
	})
	function emptyVideoHolder()
	{
		$('.video-body').html('');
	}
	
</script> -->
