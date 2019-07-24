<style>
    .bodyJournalMain{
        width: 100%;
        background-color: white;
        padding-bottom: 300px;
        box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
        margin-bottom: -18px;
        margin-top:80px;
    } 
    .journalMainForm{
        background-color:white;
        padding-bottom:300px;
    }
    #newJournal{
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        margin-left: 20px;
        font-style: italic;
    }
    .headTextJournal{
        font-size: 30px;
        padding-top: 20px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size:30px;
    }
    .createNewJournal{
        margin-left: 748px;
        margin-top: -75px;
        width: 212px;
        height: 47px;
        border: none;
        background-image:url('<?= URL ?>public/images/newEntry.png');
        background-repeat:no-repeat;
        background-position:left;
        border-radius: 10px;
        cursor: pointer;
    }
    .hrClass4Journal{
        width:985px;
        border: 2px solid gray;
        margin-left: -15px;
        margin-top: -8px;
    }
    .collect_tableJournal{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .collect_tableJournal, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .collect_tableJournal, td{
        font-size: 12px;
        color:black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px 5px 5px 5px;
        background-color:white;
        border-bottom: solid 1px #c8c8c8;
    }
    .collect_tableJournal a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: none;
    }
    .collect_tableJournal a:hover{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
    }

    .collect_tableJournal tr:HOVER{
        background-color: #E8E8E8;
    }	
    .centerAllExp {
        margin-left: 5px;
        width: 989px;
        height: 45px;
        margin-top: 5px;
        background-color: #E5F1CE;
        border-radius: 5px 5px 0px 0px;
        font-size: 13px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
    }
    .search3Journal{
        margin-left: 10px;
        width: 200px;
        text-align: center;
        height: 28px;
        margin-top: 20px;
    }

    .searchindexAllE{
        margin-left: -4px;
        margin-top: 6px;
        width: 300px;
        height: 33px;
        border: 1px solid #C0C0C0;
        text-align: left;
        background-image:url('<?= URL ?>public/images/imagesearch1.png');
        background-repeat:no-repeat;
        background-position:left;
        font-size: 13px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        padding-left: 22px;
    }	
    .inumberAllExp{
        background-color:#5E5353 ;
        margin-left: 10px;
        width: 136px;
        height: 33px;
        border:none;
        font-size:12px;
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        color: whitesmoke;
        border: none;
        padding:5px;
    }
    .searchBJournal{
        width: 29px;
        height: 33px;
        border-radius: 2px 2px 2px 2px;
        margin-left: -11px;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        cursor: pointer;
        border: none;
        color: whitesmoke;
        background-image: url('<?= URL ?>public/images/za.png');
        border: solid 1px #c8c8c8;
        background-color: rgb(230, 250, 222);
        background-repeat: no-repeat;
        background-position: 3px;
    }
</style>
<div class="bodyJournalMain">
    <form class="journalMainForm">
        <div id="newJournal">
            <p class="headTextJournal">Journal Entry</p>
            <a href="/unlibooks/invoice/newRecurring">
                <input type="button"  class="createNewJournal">
            </a>
            <div class="hrClass4Journal"></div>
        </div>
        <div class="centerAllExp">
            <div id="search3Journal">
                <select class="inumberAllExp">
                    <option>Journal Number</option>
                    <option>Date</option>
                </select>
                <input type="search" name="search" placeholder="Search" class="searchindexAllE" > 
                <div style="margin-top:-33px;margin-left: 427px;"><input type="button" name="addpayment" value="" class="searchBJournal"></div>	
            </div>
        </div>

        <table class="collect_tableJournal">
            <tr class="">
                <th width="1%"></th>
                <th width="15%">Journal No.</th>
                <th width="15%">Date</th>
                <th width="20%" style="text-align:right">Amount</th>
                <th width="20%"></th>
                <th width="20%"></th>
            </tr>
            <?php
            $journals = DAOFactory::getTblJournalEntryDAO()->queryByOrgId(Session::getSession('orgid'));
            foreach ($journals as $item) {
                ?>
                <tr class="">
                    <td class=""></td>
                    <td class=""><a onclick="viewRecord(<?php echo $item->id ?>)"><?php echo $item->journalNumber ?></a></td>
                    <td class=""><?php echo date('m / d / Y', strtotime($item->transDate)) ?></td>
                    <td class=""style="text-align:right"><?php echo number_format((float) $item->amount, 2) ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
            }
            ?>
        </table>	
    </form>

</div>

<div class="popBack hidden">

</div>

<script>
    $(function () {
        $('.createNewJournal').click(function () {
            $.post(URL + 'accounting/journal')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeJournal').click(function () {
                            if (confirm('Are you sure, you want to leave this page without posting?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                            }
                        });
                    });
            return false;
        });
    });

    function viewRecord(journalid) {
        $.post(URL + 'accounting/journal', {journalid: journalid})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');


                    $('.closeJournal').click(function () {
                        if (confirm('Are you sure, you want to leave this page without posting?')) {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        }
                    });
                });
    }
</script>
