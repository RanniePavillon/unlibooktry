<style>
    .taxexpert{
        color:rgb(21, 21, 21) !important;
    }
    .datetimes{
        color:#1B89D3;
        font-size:12px!important;
        margin-left:10px;
    }
    .bodyask2{
        width: 990px;
        margin-top: 76px;
        margin-left:10px;
    }
    .titleLists{
        padding:0px;
        padding-top:10px;
    }
    .titleLists li{
        list-style-type:circle;
    }
    .titleLists li a{
        text-decoration:none;
        color:rgb(47, 121, 182);
        font-family:verdana;
        font-size:12px;
    }
    .mainmenuform2{
        width: 909px;
        height: 54px;
        background-image: url('<?= URL ?>public/images/buttonlistcontainer.png');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        margin: auto;
        float: left;
        margin-left: 62px;
        padding-left: 15px;
    }
    .commentsname2{
        font-family: Verdana;
        font-size: 11px;
        font-weight: bold;
    }
    .titleLists li a:hover{
        color:#000;
    }
    .linkArticle{
        /* color:rgb(47, 121, 182); */
        color:blue;
    }
    .link-selected{
        color:#000;
    }
    .hidden{
        display:none;
    }
    .answerforms{
        float: right;
        width: 539px;
        text-align: justify;
        border: solid 1px rgb(209, 211, 211);
        /* box-shadow: 0px 1px 2px 1px gray; */
        padding-bottom: 15px;
        height: 482px;
    }
    .scrollcontainer{
        /* overflow: auto; */
        padding: 5px;
        height: 412px;
        margin-top: 14px;
        color: rgb(47, 121, 182);
        margin: 10px;
    }
    .answertext{
        font-weight: bold;
        text-align: center;
        padding-top: 15px;
    }
    .titletext{
        font-size:14px;
        font-weight:bold;
        padding-bottom:5px;
    }
    .infoform{
        margin-top:10px;
        color:#000; 
        line-height: 1.6;
    }
    .scrollone{
        overflow: scroll;
        height: 336px;
        margin-top: 15px;
        padding: 10px;
    }
    .linkfaq a{
        cursor: pointer;
        text-decoration:none;
    }
    .linkfaq a:hover{
        color:rgb(47, 121, 182)
    }
    .colortext{
        color:#000;
    }

</style>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/support/css/list.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/support/css/supportheader.css"/>
<script src="<?php echo URL; ?>views/support/js/list.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.redirect.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.price_format.1.8.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.number.min.js"></script>
<script>
    URL = '<?php echo URL; ?>';
</script>


<?php
$cl = strtolower(Session::getSession('class'));
$fc = Session::getSession('function');
// print_r($this->data);
?>
<div class="listformcontainer">
    <div class="listformsupportlist">
        <img class="logosupportimg"  src="<?= URL ?>public/images/medical PNG.png">
        <div class="linkformsupport">
            <a href="<?= URL ?>support/lists" style="padding: 5px 9px;" class="mainHeaderLink supportlink">ASK TAX EXPERT </a>
            <a href="<?= URL ?>support/articles" style="padding: 5px 9px;" class="mainHeaderLink supportlink taxexpert">FAQ</a>
            <a href="<?= URL ?>support/taxNews" style="padding: 5px 9px;" class="mainHeaderLink supportlink">TAX NEWS FOR DOCTORS </a>
            <a href="<?= URL ?>support/birRules" style="padding: 5px 9px;" class="mainHeaderLink supportlink">BIR TAX RULES & UPDATES </a>
        </div>
        <div class="mainmenuform">
            <a href="<?= URL ?>Dashboard"><input type="button" class="mainmenu"></a>
        </div>
        <div class="bodyask2 bodyarticle">
            <div style="float:left;width:311px;padding-right: 25px;">
                <div>
                    <b>FREQUENTLY ASKED QUESTIONS</b>
                </div>
                <div class="spacearticles">
                    <?php
                    $count = 1;
                    if ($this->data) {

                        foreach ($this->data as $item) {
                            ?>
                            <ul class="titleLists">
                                <li class="commentsname2">
                                    <a href="" class="questionLink titlelinktext">
                                        <input type="hidden"  class="q_a" value="<?= $item->titleId ?>">
                                        <?php echo $item->title ?>
                                    </a>
                                </li>
                            </ul>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div style="" class="answerforms">
                    <?php
                    // if ($this->data) {
                    foreach ($this->data as $item) {
                        ?>	


                        <div class="qa_info qa_info_<?= $item->titleId ?> hidden scrollcontainer">

                            <div class="titletext"><?php echo $item->title ?></div>
                            <div>
                                <?php echo $item->remarks ?>
                            </div>
                            <div class="linkfaq"><br><a href="http://businesstips.ph/what-taxes-should-i-pay-in-the-philippines-self-employed/" class="linkArticle" target="_blank"><?php echo $item->link ?></a></div>
                            <div class="scrollone">
                                <div style="" class="infoform">
                                    <p><?php echo $item->info ?></p>
                                </div>


                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <div style="clear:both;"></div>

            <div class="commentsnamearticless">
                <span><!--?php echo $item->remarks ?>
                        <a href="<!--?= URL ?>views/support/pdf/<!--?= $item->link ?> " class="view" target="_blank" style="color: #183867;font-weight: bold;">VIEW FULL CONTENT</a></span>
        </div>-->
                    <div>
                        <span class="datetimes"><!--?php echo date('F d', strtotime($item->articlesDate)) ?>
                                <span>at <!--?= date('h:i a', strtotime($item->articlesDate)) ?></span>
                        </span>-->
                    </div>
                    <?php echo $this->display_pages ?>
                    <div class="paginate hidden">

                        <!--?php
                        if ($this->pagecount > 1 && $this->page != 1) {
                            ?>
                            <a href="<!--?php echo URL ?>support/articles?page=1" class="paginateimg"><< First</a> &nbsp 
                            <a href="<!--?php echo URL ?>support/articles?page=<!--?php echo $this->page - 1 ?>" class="paginateimg"><<</a> &nbsp 
                        <!--?php
                    }
    
                    for ($i = 1; $i <= $this->pagecount; $i++) {
                        ?>
                        <a href="<!--?php echo URL ?>support/articles?page=<!--?php echo $i ?>" class="paginateimg <!--?php echo $i == $this->page ? 'active' : '' ?>"><!--?php echo $i ?></a> &nbsp 
                        <!--?php
                    }
    
                    if ($this->pagecount > 1 && $this->page < $this->pagecount) {
                        ?>                             
                        <a href="<!--?php echo URL ?>support/articles?page=<!--?php echo $this->page + 1 ?>" class="paginateimg">>></a> &nbsp 
                        <a href="<!--?php echo URL ?>support/articles?page=<!--?php echo $this->pagecount ?>" class="paginateimg">Last >></a>
                        <!--?php } ?>-->
                    </div>
            </div>
        </div>
    </div>

    <div class="hidden popup"></div>
</div>
<script>
    $(function () {
        $('.questionLink').click(function () {
            qLinkVal = $(this).find('.q_a').val();
            // alert(qLinkVal);
            $('.qa_info').addClass('hidden');
            $('.qa_info_' + qLinkVal).removeClass('hidden');


            return false;
        });


        $('.titlelinktext').click(function () {
            $('.q_a').addClass('colortext');
            return false;
        });



    });
</script>