<!-- </?php
	function _CreateEmailMessage($name, $email, $company, $message){

		return ' -->
			<html>
				<head>	
					<style>
						.clear{clear: both;}
						.globalcontainer{
							width: 680px;
							background-color: #fcfcfc;
							box-shadow: 0px 1px 5px 0px #888;
						}
						.header{
							padding: 10px 0px;
							background-color: #fcfcfc;
							border-bottom: 8px solid #365879;
							box-shadow: 0px 4px 5px 0px #888;
						}
						.logo{
							width: 200px;
							float: left;
						}
						.nav{
							width: 215px;
							min-height: 50px;
							float: right;
							padding: 45px 15px 0 0;
							color: #398f72;
							font: 17px Arial;
						}
						.content{
							padding: 20px;
						}
						.welcomemessage{
							padding: 10px 0px;
							text-align: center;
							font: 20px Arial;
							font-weight: bold;
							color: #398f72;
						}
						.paragraphmessage{
							padding: 15px 0px 10px;
							font: 13px Arial;
							color: #777;
						}
						.note{
							margin-top: 20px;
							border-top: 1px solid #d4d4d4;
							padding: 15px 0px 0px;		
							font: 11px Arial;
							color: #777;
						}
						.footer{
							border-top: 8px solid #365879;
							text-align: center;
							font: 13px Arial;
							color: #398f72;
							padding: 10px;
						}
					</style>
				</head>
				<body>
					<div style="padding: 10px;">
						<div class="globalcontainer">
							<div class="header">
								<div class="logo">
									<img src="http://service.unlibooks.com/public/images/serviceNewLogo_small.png" style="height: 100px;"/>
								</div>
								<div class="clear"></div>
							</div>
							<div class="content">
								<div class="welcomemessage">
									'.$name.' contacted us.<br/>
									Email: '.$email.'<br/>
									Company: '.$company.'
								</div>
								<hr/>
								<div class="paragraphmessage">
									'.$message.'
								</div>
								<div class="note">
									Note: This message may contain confidential and privileged information. If you are not the intended recipient, you are hereby notified 
									that any dissemination, disclosure, copying or taking any action in reliance on the contents of this information is strictly prohibited.
								</div>
							</div>
							<div class="footer">
								@ All rights reserve - UBService 2015: Aktus Global Management Inc.
							</div>
						</div>
					</div>
				</body>
			</html>
		<!-- ';


	} -->
<!-- ?> -->