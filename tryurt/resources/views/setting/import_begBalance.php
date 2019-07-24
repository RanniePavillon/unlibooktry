<style>
    .importHolder{
        width:440px;
        background:#fff;
        border:2px solid #c51400;
        font-family: Verdana;
        font-size: 12px;
        margin:200px auto;
    }
    .titleImport{
        float:left;
        padding: 10px;
        font-weight: bold;
        color:#c51400;
        font-size: 14px;
    }
    .closeImport{
        float:right;
    }
    .buttonCloseImport{
        font-size: 20px;
        font-weight: bold;
        font-family: Verdana;
        background: none;
        border: none;
        outline-style: none;
        cursor: pointer;
    }
    .sepLine{
        height:2px;
        background:#c51400;
        }
        .buttonBrowse {
        width: 169px;
        height: 20px;
        font-size: 13px;
        font-weight: bold;
        font-family: calibri;
        font-style: italic;
        }
        .importFile {
        background: #c51400;
        border-radius: 4px;
        width: 105px;
        height: 30px;
        border: none;
        margin-left: 5px;
        outline-style: none;
        color: white;
        font-family: Verdana;
        font-size: 12px;
        font-weight: bold;
        cursor: pointer;
        }
    </style>
    <div class="importHolder">
        <form method="post" id="frmImport" class="frmImport" enctype="multipart/form-data">
            <div>
                <div class="titleImport">IMPORT FILE</div>
                <div class="closeImport"><input class="buttonCloseImport" type="button" value="x"></div>
                <div style="clear:both;"></div>
            </div>
            <div class="sepLine"></div>
            <div style="padding: 10px;">Import your Beginning Balance data using template from export file.
                <div class="begbal hidden"><input type="checkbox" name="begBalance" />Beginning Balance</div>
                <div class="type hidden">
                    <input type="radio" name="transType" value="service" checked />Service
                    <input type="radio" name="transType" value="sales" />Sales
                </div>
            </div>
            <div style="padding: 10px;">                
                <label>Select Your File:</label>
                <input type="file" class="buttonBrowse" name="file" required>
            </div>
            <div style="text-align: right;margin-right: 10px;margin-bottom: 10px;">
                <input class="importFile" type="submit" value="IMPORT FILE">
            </div>
        </form>
		<div class="importLoad hidden" style="text-align: center;">
			<h3>Importing.. Please Wait..</h3>
		</div>
    </div>

    <script>
    $(function () {
        $('.frmImport').submit(function () {
//            if (tin) {
//                displayCompany();
//                return false;
//            }
//
			$('.importLoad').removeClass('hidden');
            event.preventDefault();
            saveBilling();
        });
    });

    function saveBilling() {
        fn = '';

        switch (type) {
            case 'salesJournal' :
                fn = 'salesjournal';
                break;
            case 'purchaseJournal' :
                fn = 'purchasejournal';
                break;
            case 'inventoryJournal' :
                fn = 'inventoryjournal';
                break;
            case 'generalJournal' :
                fn = 'generaljournal';
                break;
        }
//        event.preventDefault();
        $.ajax({
            url: URL + fn + '/saveImport',
//            type: $(this)).attr("method"), //use if not in function
            type: $(document.getElementById('frmImport')).attr("method"),
            dataType: "JSON",
//            data: new FormData(this), //use if not in function
            data: new FormData(document.getElementById('frmImport')),
            processData: false,
            contentType: false,
            success: function (data, status)
            {
                if (data.status == 'success') {
                    alertWithoutNotice('Import successful');
                    $('body').css('overflow', 'auto');
                    $('.popBack').addClass('hidden');
                    showRecord(type);
                } else {
                    alertWithoutNotice(data.status);
                    $('body').css('overflow', 'auto');
                    $('.popBack').addClass('hidden');
                }

            },
            error: function (xhr, desc, err)
            {
                alertWithoutNotice('Connection failed.' + err);
            }
        });
    }
    </script>
