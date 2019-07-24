<style>
.contnt{
    height: 100%;
    margin: 0 auto;
    padding-top: 30px;
}

.optcontent{
    width: 411px;
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
                <div class="textform" style="height: 205px;">Fill up the required information:</div>
			<div class="choosecontainer">
				
				
				<input type="submit" class="regcas" value="SUBMIT">
			</div>	
			
                
            </form>
        </div>
    </div>
</div>
