
function viewpdf(invoiceid) {
	window.open(URL + 'invoice/pdfview?invoiceid='+invoiceid) 
			.done(function(returnData) {
				
			})
			.fail(function() {
				alert('Connection Error!');
			});
	return false;
} 
$(function(){
	$("#imgInp").change(function() {
			fsize = this.files[0].size;
			$('input[name="hasFile"]').val('true');
			readURL(this);
		});
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#imgprev').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
	}
});