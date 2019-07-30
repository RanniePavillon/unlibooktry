$(function(){
	$('.addVendorOption').html('Add Employee');
	
	$(document).on("change", "#glPosting2", function() {
			object = $(this);
			$activeobjct = $(this);
			if ($(this).val() === 'addBank') {   
				$(this).addClass('activeObj');
				$('.activeObj option').removeAttr('selected')
						.filter('[value=""]')
						.attr('selected', true);
				$('.returnurl').val('expense');
				addNewBank();
			} else if ($(this).val() != 3) {
			   $('input[name="particular"]').attr("required", true);
			} else if ($(this).val() == 3) {
			   $('input[name="particular"]').attr("required", false);
			}
			
			return false;
		});
		 $('#glPosting2').change();
		
	function addNewBank() {
	$.post(URL + 'accounting/addBankAccount', {view: 'expense'})
			.done(function(returnData) {
				$('.popBack').html(returnData);
				$('.forBank').val('addBankOption');
				$('.popBack').removeClass('hidden');
				$('body').css('overflow', 'hidden');

				$('.closeAccount').click(function() {
					if (confirm('Are you sure you want to leave this page without saving?')) {
						$('.popBack').addClass('hidden');
						$('.popBack').html('');
						$('body').css('overflow', 'auto');
					}
				});
				return false;
			})
			.fail(function() {
				alert('Connection Error!');
			});
		return false;
	} 
	
    $('.bnpreApproved').click(function () {
		if (confirm('Are you sure you want pre-approve this transaction?')) {
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg"/></div>');
			$('.popBack').removeClass('hidden');
			$('input[name="approvalStatus"]').val('preapproved');
                        $('#form').submit();
		}
                return false;
    });

    $('.bnReject').click(function () {
		if (confirm('Are you sure you want reject this transaction?')) {
			$('input[name="approvalStatus"]').val('rejected');
                        $('#form').submit();
		}
                return false;
    });
	
    $('.bnApprove').click(function () {
		if (confirm('Are you sure you want approve this transaction?')) {
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg"/></div>');
			$('.popBack').removeClass('hidden');
			$('input[name="approvalStatus"]').val('approved');
                        $('#form').submit();
		}
                return false;
    });

	$('.inputAddline, .addtask, .delitem').remove();
    $('#supplierId').change(function () {
        if ($(this).val() == 'addsupplier') {
            $.post(URL + 'expenses/newvendor', {returnurl: 'expense'})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
						//$('select[name="type"]').find('option').not('option[value="Employee"]').remove();
						$('select[name="type"]').find('option[value="Professional"]').hide().prop('disabled',true);
						$('select[name="type"]').find('option[value="General Vendor"]').hide().prop('disabled',true);
						$('select[name="type"]').find('option[value="General Professional Partnership"]').hide().prop('disabled',true);
						$('select[name="type"]').val('Employee');
                                                $('select[name="type"]').parents('tr').addClass('hidden');
                                                
						$('input[name="trig"]').val('ajaxLoad');
						$('.vendor101').addClass('objSelected');
						
						$('.niNewVendor').html('NEW EMPLOYEE');
						$('.vendorPop').find('tr:nth-child(1) td:nth-child(1)').html('Employee No.:');
						$('.vendorPop').find('tr:nth-child(2) td:nth-child(1)').html('Employee Name:');
						$('.vendorPop').find('tr:nth-child(3) td:nth-child(1)').html('Employee Type:');
						
						
						
                        $('.closeNewVendor').click(function () {
                            if (confirm('Are you sure you want to leave this page without saving?')) {
                                $('#supplierId').val('');
                                $('#supplierId').change();
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                            }
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
        } else if ($(this).val() != '') {
            address = $('select[name="supplierId"] option:selected').attr('address');
            tin = $('select[name="supplierId"] option:selected').attr('tin');
            $('textarea[name="address"]').val(address);
            $('input[name="tin"]').val(tin);
            //alert(tin);
        } else {
            $('textarea[name="address"]').val('');
			$('input[name="tin"]').val('');
        }
    });
	
	
	$('input[name="discount"], input[name="amount[]"]').keyup(function () {
        computeAmount();
    });
	
    $('.bnSend').click(function () {
        $('input[name="approvalStatus"]').val('pending');
    });

	
    $('.postExpense, .bnSend').click(function () {
        var stat = false;
////////////////////////////////////////////////////////////////////////	
        $('input[name="amount[]"]').each(function () {
            if (getInt($(this).val()) == 0) {
                stat = true;
                return false;
//                    break;
            }
        });
        if (stat) {
            alert('Net amount lines should not be equal to 0');
            return false;
        }

        allowWithHolding = false;
        obj = false;
        count = 0;
        if (obj && count > 1) {
            alert('Account is not allowed for multiple selection.');
            return false;
        }
        type = true;
        count = 0;
        myThis = '';
        $('input[required]').each(function () {
            if ($(this).val() == '') {
                myThis = $(this);
                count++;
            }
        })
        $('select[required]').each(function () {
            if ($(this).val() == '') {
                myThis = $(this);
                count++;
            }
        })
        if (count == 0) {

            ext = $('input[name="approvalStatus"]').val() == 'pending' ? 'post' : 'save';
            confirmation = confirm('Are you sure you want to '+ ext +' this Cash Advance?');
            if (!confirmation) {
                return false;
            }
            if (hasProfile == 1) {
                save(true);
                return false;
            } else {
                $.post(URL + 'invoice/getInfoForm')
                .done(function(returnData) {
                    $('body').css('overflow','hidden');
                    $('.popBack').css('overflow','auto');
                    $('.popBack').html('');
                    $('.popBack').html( returnData);
                    $('.popBack').removeClass('hidden');
                    $('.top').addClass('hidden');
                    $('.company-form').submit(function() {
                        if ($('.company-form input[name="tinNum"]').val() != '') {
                            $.post(URL + 'invoice/setCompany', $('.company-form').serialize())
                                    .done(function(returns) {
                                        if (returns == 0) {
                                            save(true);
                                        } else {
                                            alert(returns);
                                            location.reload();
                                        }
                                    })
                                    .fail(function() {
                                        
                                        location.reload();
                                    });
                        } else {
                            alert('Pls fill-up the required fields.');
                            $('.company-form input[name="tinNum"]').focus();
                        }
                        return false;
                    });

                });
            }
        } else {
            alert('Unable to save, please fill-up required items');
            $(myThis).focus();
			$(myThis).css('border-color','red !important');
        }
    });

	
    $('.form1NExpense').submit(function () {
        stat = false;
        $('input[name="amount[]"]').each(function () {
            if (getInt($(this).val()) == 0) {
                stat = true;
                return false;
//                    break;
            }
        });
        if (stat) {
            alert('Net amount lines should not be equal to 0');
            return false;
        }

        confirmDoyou = confirm('Do you want to record the Cash Advance?');
        if (!confirmDoyou) {
            return false;
        }
        if (hasProfile == 1) {
            save(false);
            return false;
        } else {
            $.post(URL + 'invoice/getInfoForm')
                    .done(function (returnData) {
                        $('body').css('overflow', 'hidden');
                        $('.popBack').css('overflow', 'auto');
                        $('.popBack').html('');
                        $('.popBack').html($('.popBack').html() + returnData);
                        $('.popBack').removeClass('hidden');
                    $('.top').addClass('hidden');
                        // $('popBack').css('overflow', 'auto');
                        // $('body').css('overflow', 'hidden');
                        $('.company-form').submit(function () {
                            if ($('.company-form input[name="tinNum"]').val() != '') {
                                $.post(URL + 'invoice/setCompany', $('.company-form').serialize())
                                        .done(function (returns) {
                                            if (returns == 0) {
                                                save(false);
                                            } else {
                                                alert(returns);
                                                location.reload();
                                            }
                                        })
                                        .fail(function () {

                                            location.reload();
                                        });
                            } else {
                                alert('Pls fill-up the required fields.');
                                $('.company-form input[name="tinNum"]').focus();
                            }
                            return false;
                        });

                    });
        }
        return false;

    });

    function save(type) {
        allowWithHolding = false;
        obj = false;
        count = 0;
        if (obj && count > 1) {
            alert('Account is not allowed for multiple selection.');
            return false;
        }
        ext = '';
        if (type) {
            ext = $('input[name="approvalStatus"]').val() == 'pending' ? '?type=pending' : '?type=posted';
			ext = '?type=posted';
            $('input[name="approvalStatus"]').val('');
        }

        $('body').css('overflow', 'hidden');
        $('.popBack').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg" /></div>');
        $('.popBack').removeClass('hidden');

        $.post(URL + 'expenses/addCashAdv' + ext, $('form').serialize())
			.done(function (returnData) {
				if (returnData == 0) {
					location = URL + 'expenses/cashAdvances';
				} else {
					alert(returnData);
					$('body').css('overflow', 'auto');
					$('.popBack').addClass('hidden');
				}
			});
    }
	
	
    function computeAmount() {
        total = 0;
        vat = 0;
        discountAmount = 0;
        ewtPercent = 0;
        ewtAmount = 0;
        if (ewtPercent != 0) {
            ewtPercent = getInt($('select[name="eWT"]').val()) / 100;
        }
        if ($('#includeInputTax').is(':checked')) {
            total2 = 0;
            $('input[name="amount[]"]').each(function () {
                rate = 0;//getInt($(this).parent('td').prev('td').prev('td').find('select option:selected').attr('rate'));
                if ($('#inclusiveOfVat').is(':checked')) {
                    rate = getInt($(this).parent('td').parent('tr').find('select[name="vat[]"] option:selected').attr('rate'));
                }
                value = getInt($(this).val());// / (1 + (rate / 100));
                total += value;
                total2 += value / (1 + (rate / 100));
                // value = value - (value * ewtPercent);
                whtRate = 0; //getInt($(this).parent('td').parent('tr').find('select[name="eWT[]"]').val());
                ewtAmount += (whtRate / 100) * (value / (1 + (rate / 100)));
            });
            // ewtAmount = (total2) * ewtPercent;
        } else if ($('#inclusiveOfVat').is(':checked')) {
            $('input[name="amount[]"]').each(function () {
                rate = 0;//getInt($(this).parent('td').parent('tr').find('select[name="vat[]"] option:selected').attr('rate'));
                value = getInt($(this).val());
                // alert(value);
                value = getInt((value / (1 + (rate / 100))).toFixed(2));
                total += value;
                // alert(total);
                vat += getInt((value * (rate / 100)).toFixed(2));
                whtRate = 0; //getInt($(this).parent('td').parent('tr').find('select[name="eWT[]"]').val());
                ewtAmount += (whtRate / 100) * value;
                discountAmount += ($(this).parent('td').prev('td').find('select').val() / 100) * value;
            });
        } else {
            $('input[name="amount[]"]').each(function () {
                rate = 0;//getInt($(this).parent('td').parent('tr').find('select[name="vat[]"] option:selected').attr('rate'));
                value = getInt($(this).val());
                total += value;
                vat += getInt((value * ((rate / 100))).toFixed(2));
                whtRate = 0; //getInt($(this).parent('td').parent('tr').find('select[name="eWT[]"]').val());
                ewtAmount += (whtRate / 100) * value;
                discountAmount += ($(this).parent('td').prev('td').find('select').val() / 100) * value;
            });
        }
        $('.totalAmount').val(roundFloat(total));
        $('.vatAmount').val(roundFloat(vat));
        discountAmount2 = discountAmount * -1;
        $('.ewtAmountTotal').val(roundFloat(ewtAmount));
        $('input[name="discountAmount"]').val(roundFloat(total + vat));
        $('.vatTotalAmount').val(roundFloat((total + vat - ewtAmount)));
    }
	
})