<style>
    .taxexpert{
        color:rgb(21, 21, 21) !important;
    }
</style>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/support/css/list.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/support/css/supportheader.css"/>
<script src="<?php echo URL; ?>views/support/js/list.js"></script>
<?php
$cl = strtolower(Session::getSession('class'));
$fc = Session::getSession('function');
?>
<div class="listformcontainer">
    <div class="listformsupportlist">
        <img class="logosupportimg"  src="<?= URL ?>public/images/medical PNG.png">
        <div class="linkformsupport">
            <a href="<?= URL ?>support/lists" style="padding: 5px 9px;" class="mainHeaderLink supportlink">ASK TAX EXPERT </a>
            <a href="<?= URL ?>support/articles" style="padding: 5px 9px;" class="mainHeaderLink supportlink">FAQ</a>
            <a href="<?= URL ?>support/taxNews" style="padding: 5px 9px;" class="mainHeaderLink supportlink taxexpert">TAX NEWS FOR DOCTORS </a>
            <a href="<?= URL ?>support/birRules" style="padding: 5px 9px;" class="mainHeaderLink supportlink">BIR TAX RULES & UPDATES </a>
        </div>
        <div class="mainmenuform">
            <a href="<?= URL ?>Dashboard"><input type="button" class="mainmenu"></a>
        </div>


        <div class="bodyask bodyarticle">
            <?php
            if ($this->data) {
                foreach ($this->data as $item) {
                    ?>
                    <div class="spacearticles">
                        <div>
                            <span class="commentsname"><?php echo $item->title ?> </span>
                        </div>
                        <div class="commentsnametax">
                            <span><?php echo $item->remarks ?></span>
                            <br>
                            <a href="<?php echo $item->link ?>" target="_blank"><?php echo $item->link ?></a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

            <div class="clear"></div>

            <div class="paginate2">
                <?php
                echo $this->display_pages ?>     
            </div>
<div class="clearBoth"></div>
        </div>
    </div>

    <div class="hidden popup"></div>

    <script>
        /* $(function(){
         $('.see').click(function(){
         //$(".other").removeClass('hidden');
         $('.see').parents(".formCertificate").find(".seemoreText").addClass('hidden');
         $('.see').removeClass('hidden');
         $(this).parents(".formCertificate").find(".seemoreText").removeClass('hidden');
         $(this).addClass('hidden');
         return false;
         });
         }) */
    </script>