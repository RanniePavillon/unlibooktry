$(function () {
    $('#branch').submit(function () {
        task = $('#branch input[name="task"]').val();
		data = $(this).serialize();
		 $('body').css('overflow', 'hidden');
		 $('#branch').addClass('hidden');
		$('.popBack').append('<div class="loadingHolder">'+
								'<img src="' + URL + 'public/images/processing2.gif" class="loadingimg" />'+
							'</div>');
        if (task == 'addoutlet') {
            addOutlet();
        } else {
            $.post(URL + 'branch/setBranch', data)
                    .done(function (returnData) {
                        returnData = returnData.trim();
                        if (returnData == '') {
                            location = URL + 'setting/branch';
                        } else {
                            $('.popBack').addClass('hidden');
							location = URL + 'setting/branch';
                        }
                    });
        }

        return false;
    });
});

function addOutlet() {
    var sEmail = $('#txtEmail').val();
    var valid = $('#valid').val();
    var password = $('input[name="password"]').val();
    var confirm_password = $('input[name="confirmPassword"]').val();
    var task = $('#branch input[name="task"]').val();
    var token = $('input[name="token"]').val();

    if (valid == 0) {
        if ($.trim(sEmail).length == 0 || $("#code").val() == "") {  /*original code*/
            // if ($.trim(sEmail).length == 0) {/* ADDITIONAL CODES-BELLE */
            alert('All fields are mandatory');
            return false;
        }
        if (!validateEmail(sEmail)) {
            alert('Invalid Email Address');
            return false;
        }

        if (password != confirm_password) {
            alert('Password and confirm password should be the same');
            return false;
        }

        $.post(URL + 'index/checkEmail', $('form').serialize())
                .done(function (returnData) {
                    returnData = returnData.trim();
                    if (returnData == 0) {
                        $('#valid').val("1");
                        outlet = $('input[name="outletCode"]').val();
                        oname = $('input[name="outletName"]').val();
                        areaId = $('select[name="areaId"] :selected').val();
                        $().redirect(URL + 'branch/setBranch', {'outletCode': outlet, 'outletName': oname,
                            'areaId': areaId, 'email': sEmail, 'password': password, 'task': task, 'type': $('select[name="type"]').val(),
                            'token':token});
                    } else {
                        alert(returnData);
                    }
                })
                .fail(function () {
                    alert('Connection Error');
                });
        return false;
    }
}

$(document).on("change", "#areaId", function () {
    if ($(this).val() === 'addNewArea') {
        $('#areaId option').removeAttr('selected')
                .filter('[value=""]')
                .attr('selected', true);
        addNewArea();
        $('.categoryfrm').removeClass('hidden');
        $('body').css('overflow', 'hidden');
        $('.close1Client').click(function () {
            $('.popup2').addClass('hidden');
            $('.categoryfrm').addClass('hidden');
            $('body').css('overflow', 'auto');
        });
    }
});

function addNewArea() {
    $.post(URL + 'inventory/newArea')
            .done(function (returnData) {
                $('.popup2').html(returnData);
                $('#saveAddNew').addClass('hidden');
                $('.popup2').removeClass('hidden');
                $('body').css('overflow', 'hidden');

                rdata = true;

                if (typeof (newrecord) != "undefined") {
                    $('.cmForm  #saveAddNew').hide();
                }

                $('.close1Client').click(function () {
                    $('.popup2').addClass('hidden');
                    $('.popup2').html('');
                    $('body').css('overflow', 'auto');
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}

function validateEmail(sEmail) {
    var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

    if (filter.test(sEmail)) {

        return true;
    } else {
        return false;
    }
}


