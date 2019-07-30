<html>
	<head>
		<style>
			body{
				color: white;
				/* padding: 0;
				margin: 0;
				background: url('https://utd.unlibooks.com/public/images/loginBg.png') no-repeat white;
				background-size: 100% 100%; */
				margin: auto;
				padding: 0;
				background-repeat:no-repeat;
				background-attachment:fixed;
				background-position:center center;
				background: -moz-radial-gradient(center, ellipse cover, #290202 -49%, #C50808 100%); /* ff3.6+ */
				background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(-49%, #290202), color-stop(100%, #C50808)); /* safari4+,chrome */
				background:-webkit-radial-gradient(center, ellipse cover, #290202 -49%, #C50808 100%); /* safari5.1+,chrome10+ */
				background: -o-radial-gradient(center, ellipse cover, #290202 -49%, #C50808 100%); /* opera 11.10+ */
				background: -webkit-radial-gradient(center, ellipse cover, #290202 -49%, #C50808 100%); /* ie10+ */
				background:radial-gradient(ellipse at center, #8E8989 47tColorstr='#EE7979', endColorstr='#DC0505',GradientType=1 ); /* ie6-9 */
				background-size: 100% 100%;
				background-repeat: no-repeat;
				margin:0;
			}
			.MainHolder{
				position: absolute;
				width: 700px;
				top: 10%;
				left: 50%;
				margin-left: -350px;
				text-align: center;
				font-family: Arial;
			}
			.MainHeader{
				font-size: 50px;
			}
			.SubHeader{
				padding-top: 20px;
				font-size: 13px;
			}
			.Loading{
				margin-top: 70px;
				height: 30px;
				border: 1px solid #5599bb;
				border-radius: 5px;
				background-color: #004466;
			}
			.Loaded{
				width: 2%;
				height: 100%;
				background-color: #89df20;
				-webkit-transition: 1s ease-in-out;
				-moz-transition: 1s ease-in-out;
				-o-transition: 1s ease-in-out;
				transition: 1s ease-in-out;
			}
		</style>
	</head>
	<body>
		<div class="MainHolder">
			<div class="MainHeader">Please wait while we <br/>configure your account.</div>
			<div class="Loading">
				<div class="Loaded" id="Loaded"></div>
			</div>
			<div class="SubHeader">All rights reserved - UNLIBOOKS FOR RETAIL PROVIDERS 2015.</div>
		</div>
	</body>
</html>