<style>
.contnt{
    height: 100%;
    margin: 0 auto;
    padding-top: 30px;
}

.optcontent{
    width: 461px;
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
	width: 445px;
	margin: auto;
}
.regcas{
		display: block;
		margin: 0 auto;
		width: 155px;
		height: 34px;
	   /*  background-color: rgb(100, 165, 6); */
		border: none;
		color: #fff;
		font-weight: bold;
		border-radius: 3px;
		cursor:pointer;
		margin-top:50px;
		/* background-image:url('../public/images/reg.png');
		 background-size:100% 100%; */
		 background-color:#183867;
	}
	.no{
		float: right;
		border: none;
	}
	.pos:hover{
		color:#B13C56;
		cursor:pointer;
	}
	.castext:hover{
		color:#B13C56;
		cursor:pointer;
	}
	.ebf:hover{
		color:#B13C56;
		cursor:pointer;
	}
	.question_content_pos {
		  border: 1px solid red;
		  padding: 5px;
		  width: 171px;
		  position: absolute;
		 /*  left: 421px; */
		  margin-left: 434px;
		  margin-top: -75px;
		  background-color:#fff;
		  border-radius:5px;
		  padding:5px;
	}
	.question_content_cas {
		  border: 1px solid red;
		  padding: 5px;
		  width: 158px;
		  position: absolute;
		 /*  left: 421px; */
		  margin-left:434px;
		  margin-top: -64px;
		  background-color:#fff;
		  border-radius:5px;
		  padding:5px;
	}
	.question_content_ebf {
		  border: 1px solid red;
		  padding: 5px;
		  width: 171px;
		  position: absolute;
		  /* left: 421px; */
		  margin-left: 434px;
		  margin-top: -16px;
		  background-color: #fff;
		  border-radius: 5px;
		  padding: 5px;
	}
	.no{
		  background: transparent;
		  color: black;
		  border: none;
		  border-radius: 2px;
		  font-family: Arial black;
		  font-weight: bold;
		  font-size: 24px;
		  right: 245px;
		  top: 25px;
		  outline-style: none;
		  cursor: pointer;
		  float: right;
		  margin-right: -15px;
		  margin-top: -17px;
		}
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>

<div class="popBack">
    <div class="contnt">
        <div class="optcontent boxshadow">
			<input type="button" class="popx no" value="x">
            <form method="post" action="<?php echo URL ?>">
                <div class="textform" style="margin-top: 19px;">Please select  which type of registration would you like to choose:</div>
			<div class="choosecontainer">
				<ul class="choose">
					<li>
						<span>
							<input type="checkbox"> Online eBIR Tax Filing <span class="ebf"><i>(What's this?)</i></span>
							<div class="question_content_ebf hidden">	
							 Generates monthly, quarterly and annual tax returns in compliance with BIR statutory requirements
							</div>
						</span>
					</li>
					<li>
						<span>
							<input type="checkbox"> Computerized Accounting System (CAS)<span class="castext"><i>(What's this?)</i></span>
							<div class="question_content_cas hidden">	
							 Generates computerized books of accounts and computer-generated accounting records and documents in replacement of manual books and ledgers
							</div>
						</span>
					</li>
					<li class="hidden">
						<span>
							<input type="checkbox"> Point of Sale (POS)<span class="pos"><i>(What's this?)</i></span>
							<div class="question_content_pos hidden">	
							 Generates receipts/invoices at the time where a service is provided or goods are sold
							</div>
						<span>
				    </li>
				</ul>
				
				<input type="submit" class="regcas regcasbutton" value="REGISTER">
			</div>
			
                
            </form>
        </div>
    </div>
</div>

<script>
	$('.regcasbutton').click(function() {
		if (confirm('Are you sure you want to register in BIR?')) {
			$('.popBack').addClass('hidden');
			$('.popBack').html('');
			$('body').css('overflow', 'auto');
			// location.reload();
		}
		
		$('.no').click(function() {
			if (confirm('Are you sure you want to leave this page?')) {
				$('.popBack').addClass('hidden');
				$('.popBack').html('');
				$('body').css('overflow', 'auto');
				// location.reload();
			}
			return false;
		});
		return false;
	});
	
	
	$('.pos').hover(
		function(){
			$('.question_content_pos').removeClass('hidden');
		}, function(){
			$('.question_content_pos').addClass('hidden');
		}
	);
	$('.castext').hover(
		function(){
			$('.question_content_cas').removeClass('hidden');
		}, function(){
			$('.question_content_cas').addClass('hidden');
		}
	);
	$('.ebf').hover(
		function(){
			$('.question_content_ebf').removeClass('hidden');
		}, function(){
			$('.question_content_ebf').addClass('hidden');
		}
	);

</script>