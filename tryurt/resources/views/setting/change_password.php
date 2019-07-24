<style>
    @font-face {
        font-family: 'agency fb'; /*a name to be used later*/
        src: url('<?= URL ?>public/fonts/AGENCYR.ttf'); /*URL to font*/
    }

    @font-face {
        font-family: 'agency fb2'; /*a name to be used later*/
        src: url('<?= URL ?>public/fonts/AGENCYB.ttf'); /*URL to font*/
    }
    .changeMain{
        width:100%;
    }
    .changeMainForm{
        width:335px;
        padding:10px;
        margin:auto;
        background-color:white;
        margin-top:100px;
        padding-bottom:15px;
        box-shadow: 0px 1px 1px 0px #c51400;
        border-radius:5px;
        border: 1px solid #c8c8c8;
    }
    .changeText{
        color: #c51400;
        font-family:agency fb2;
        font-size:23.4px;
        font-weight: bold;
        padding: 5px;
    }
    .changeLine{
        border-top: 3px solid #c51400;
    }
    .changeTable{
        margin-top:10px;
        margin-left:5px;
    }
    .changeTable td{
        color: #c51400;
        font-family: agency fb2;
        font-size: 15px;
        font-weight: bold;
    }
    .changeTable input[type="text"]{
        width: 200px;
        padding: 4px 5px 4px 5px;
        font-family:calibri;
        font-size:12px;
        border:1px solid rgb(191, 191, 191);
    }

    .buttonHolder{
        margin-top:10px;
        margin-left:180px;
    }
    .changebutton{
        width: 60px;
        height:25px;
        font-family: agency fb2;
        font-size: 15px;
        font-weight: bold;
        border-radius: 5px;
        color: rgb(230, 230, 230);
        -moz-border-radius: 30px;
        background: rgb(28, 181, 239);
        background: -moz-linear-gradient(90deg, rgb(172, 42, 27) 30%, rgb(197, 56, 40) 78%);
        background: -webkit-linear-gradient(90deg, rgb(172, 42, 27) 30%, rgb(197, 56, 40) 78%);
        background: -o-linear-gradient(90deg, rgb(172, 42, 27) 30%, rgb(197, 56, 40) 78%);
        background: -ms-linear-gradient(90deg, rgb(172, 42, 27) 30%, rgb(197, 56, 40) 78%);
        background: linear-gradient(0deg, rgb(172, 42, 27) 30%, rgb(197, 56, 40) 78%);
        -moz-box-shadow: 0px 2px 1px rgba(50, 50, 50, 0.75);
        border: none;
    }
    .inpPass{
        width: 190px;
        height: 25px;
        margin-left: 10px;
        padding-left: 3px;
        font-size: 12px;
    }
    .changeTable, tr td{
        padding-top:5px;
    }
</style>
<title>
    Change Password
</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
<script src="<?php echo URL; ?>public/js/jquery.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<div class="changeMain">
    <form method="post" action="<?php echo URL ?>setting/permission" class="changeMainForm" style="margin:auto !important;margin-top:30px !important;">
        <div class="changeText">Change Password</div>
        <div class="changeLine"></div>
        <table class="changeTable">
            <tr>
                <td>Old Password</td>
                <td><input type="password" class="inpPass" name="oldpassword" placeholder="Enter Old Password" required></td>
            </tr>
            <tr style="padding-top:5px;">
                <td>New Password</td>
                <td><input type="password" class="inpPass" name="newpassword" placeholder="Enter New Password" required ></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" class="inpPass" name="nconfirmpassword" placeholder="Confirm Password" required></td>
            </tr>
        </table>
        <div class="buttonHolder">
            <input type="submit" class="changebutton changebuttonOK addsavebuttonreports" value="Ok">
            <input type="button" class="changebutton changebuttonCancel addsavebuttonreports" value="Cancel">
            <input type="hidden" name="task" value="changepassword" />
        </div>

    </form>
</div>

<script>
    $(function () {
        result = "";
        var valid = 0;
        $('.changeMainForm').submit(function () {

            if (valid == 0) {
                $.post(URL + 'setting/checkpassword', {oldpassword: $('input[name="oldpassword"]').val()})

                        .done(function (returnData) {
                            result = returnData;

                            if (result == 1) {
                                alert('Old password did not match from the database');
                                return false;
                            }
                            if ($('input[name="newpassword"]').val() !== $('input[name="nconfirmpassword"]').val()) {
                                alert('Password and confirm password do not match');
                                return false;
                            }

                            alert('Password succesfully changed');

                            valid = 1;
                            $('.changeMainForm').submit();
                        })
                        .fail(function () {
                            alert('Connection Error!');
                        });

                return false;
            }
        });
    });
</script>
