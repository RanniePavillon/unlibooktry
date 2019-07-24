<style>
.contnt{
    height: 100%;
    margin: 0 auto;
    padding-top: 30px;
}

.optcontent{
    width: 331px;
    margin: 0 auto;
    background-color: #fff;
    padding: 15px;
    font-family:verdana;
    font-size:12px;
    margin-top: 18px;
}


.linestand {
    z-index:-1;
}
.hrlink{
    z-index:-1;
}
.buttonNo{
	margin-top: 19px;
	padding-left: 167px;
}
.submitcas {
	float:left;
	margin-left: 98px;
}
.textform{
	text-align: justify;
}

.choose li{
	font-family:verdana;
	font-size:12px;
	padding-top:10px;
}
.choosecontainer{
	width: 339px;
	margin: auto;
	margin-top: 18px;
}
.regcas{
		display: block;
		margin: 0 auto;
		width: 120px;
		height: 37px;
	    background-color: rgb(100, 165, 6); */
		border: none;
		color: #fff;
		font-weight: bold;
		border-radius: 3px;
		cursor:pointer;
		margin-top:30px;
		background-image:url('{{asset('images/submitcas.png')}}');
		 background-size:100% 100%;
	}
	.no{
		float: right;
		border: none;
	}
	.nono{
		margin-left: 16px;
	}
	.choices {
	  margin-left: 45px;
	}
</style>
<link rel="stylesheet" href="{{asset('css/popup.css')}}"/>

<div class="popBack">
    <div class="contnt">
        <div class="optcontent boxshadow">
			<input type="button" class="popx no">
            <form method="post" action=" {{('supports')}} ">
                <div class="textform" style="">Do you want to register in BIR?</div>
			<div class="choosecontainer">
				<div class="choices">
					<input type="radio" name="registered" value="yes" checked><label>Yes</label> 
					<input type="radio" name="registered" class="nono" value="no"><label>No</label>
				</div>
				<input type="submit" class="regcas" value="submit">
			</div>	
            </form>
        </div>
    </div>
</div>

<script>
	$('.regcas').click(function() {
		if (confirm('Are you sure you want to leave this page?')) {
			$('.popBack').addClass('hidden');
			$('.popBack').html('');
			$('body').css('overflow', 'auto');
			// location.reload();
		}
	});
</script>