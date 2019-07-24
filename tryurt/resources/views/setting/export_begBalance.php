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
        color:rgb(2, 153, 162);
        font-size: 14px;
    }
    .closeImport{
        float:right;
    }
    .buttonCloseExport{
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
        .selectFile{
        width: 150px;
        height: 25px;
        }
    </style>
    <div class="importHolder">
        <form method="post" action="getTemplate">
            <div>
                <div class="titleImport">EXPORT FILE</div>
                <div class="closeImport"><input class="buttonCloseExport" type="button" value="x"></div>
                <div style="clear:both;"></div>
            </div>
            <div class="sepLine"></div>
            <div style="padding: 10px;">Export your Beginning Balance to be used as sample template on how to format your file for importing.</div>
            <div style="padding: 10px;">
                <label>Template File:</label>
                <select name="template" class="selectFile">
                    <option></option>
                    <option value="sj">Sales Journal</option>
                    <option value="pj">Purchase Journal</option>
                    <option value="ij">Inventory Journal</option>
                    <option value="gj">General Journal</option>
                </select>
            </div>
            <div style="text-align: right;margin-right: 10px;margin-bottom:10px;">
                <input class="importFile" type="submit" value="EXPORT FILE">
            </div>
        </form>
    </div>