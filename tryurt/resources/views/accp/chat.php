<style>
#accpChatBox {
	overflow-y: auto;
	height: 294px;
	padding: 5px;
	margin-top: 10px;
	margin-bottom: -5px;
	border-top: 1.5px solid #FFB000;
	border-bottom: 1.5px solid #FFB000;
	font: 15px arial;
}

.rows {
	width: 100%;
}

.nine {
	width: 82%;
	float: left;
	margin: 10px 0 0 2px;
}

.one {
	width: 15%;
	float: left;
	margin: 15px 0 0 0;
}

@font-face {
  font-family: 'Glyphicons Halflings';

  src: url('views/accp/fonts/glyphicons-halflings-regular.eot');
  src: url('views/accp/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('views/accp/fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('views/accp/fonts/glyphicons-halflings-regular.woff') format('woff'), url('views/accp/fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('views/accp/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}

/* .glyphicon {
	position: relative;
	top: 1px;
	display: inline-block;
	font-family: 'Glyphicons Halflings';
	font-style: normal;
	font-weight: normal;
	line-height: 1;

	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.glyphicon-send:before {
  content: "\e171";
} */

.green-light {
	font-family: -webkit-body;
	font-size: 100px;
	color: #00CA00;
	position: absolute;
	z-index: 300;
	top: -20px;
	left: 0;
}

.triangle-isosceles {
  position:relative;
  padding:15px;
  margin:1em 0 1em;
  color:#000;
  font: 15px arial;
  background:#fff; 
  
  background:-webkit-gradient(linear, 0 0, 0 100%, from(#fff), to(#fff));
  background:-moz-linear-gradient(#fff, #fff);
  background:-o-linear-gradient(#fff, #fff);
  background:linear-gradient(#fff, #fff);
  -webkit-border-radius:10px;
  -moz-border-radius:10px;
  border-radius:10px;
}

.triangle-isosceles.left {
  margin-left: 30%;
  background:#fff;
}

.triangle-isosceles.right {
  margin-right: 30%;
  background:#FBFF5D;
}

.bubSupport {
	position:relative;
	padding: 15px;
	background-color: #FBFF5D;
	border-radius: 10px;
}
</style>

<div>
	<span class="green-light">&middot;</span><span style="margin-left: 15px; font: 15px arial;">Customer Support Representative</span>
	<div id="accpChatBox">
		<div class="bubSupport fr">
			<div> Hello, thank you for contacting Customer Happiness. How may I help you? </div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div id="accpChatEnter">
		<form action="javascript:void(0)" method="POST" class="accpEnterChat">
			<div class="rows">
				<img src="<?= URL; ?>views/accp/img/msgload.gif" class="hidden" id="accpMsgLoad" style="width: 10%; position: absolute; left: 50%; bottom: 7%; margin-left: -14%;">
				<div class="nine"><textarea name="message" class="chatInput" id="accpChatTextarea" align="right" placeholder="Enter Text..." rows="2" style="width: 99%"></textarea></div>
				<div class="one"><button class="btn btn-default btn-lg" id="subChat"><i class="glyphicon glyphicon-send" style="font-size: 28px; color: #FF8F00;"></i></button></div>
			</div>
		</form>
	</div>
</div>

<script>

$("#accpChatTextarea").keypress(function(e) {
	var pressedKey = e.keyCode || e.which;
	if (pressedKey == 13) {
		accpSendMessage();
		return false;
		e.preventDefault();
	}
});
	
$("#subChat").click(function() {
	mensahe = $('textarea[name="message"]').val();
	if(mensahe != '') {
		accpSendMessage();
	}
	return false;
});

function accpSendMessage() {
	msg = $('textarea[name="message"]').val();
	
	$("#accpMsgLoad").removeClass('hidden');
	$("#accpChatTextarea").prop('disabled', true);
	$("#subChat").prop('disabled', true);
	
	if(msg != '') {
		$('textarea[name="message"]').val('');
		$.post('<?= URL; ?>accp/enterMsg', {'message':msg, 'salesChatId':<?= $_POST['salesChatId']; ?>})
		.done(function(result) {
			$("#accpMsgLoad").addClass('hidden');
			$("#accpChatTextarea").prop('disabled', false);
			$("#subChat").prop('disabled', false);
		});
	}
};

var accpRequestSent = false;
var accpMsgLoop = setInterval(function() {accpLoopMsg()}, 1000);

function accpLoopMsg() {
	accpLastMedsChatId = 0;
	
	if(accpRequestSent == false) {
		accpRequestSent = true;
		
		accpLastMedsChatId = (typeof($('.saleschat:last').attr('id')) == 'undefined' ? 0 : $('.saleschat:last').attr('id') );
		
		$.post('<?= URL; ?>accp/openMsg', {'id':accpLastMedsChatId, 'salesChatId':<?= $_POST['salesChatId']; ?>})
		.done(function(returnData) {
			if(returnData != "0") {
				if(($('#accpChatBox').scrollTop() + $('#accpChatBox').innerHeight()) >= $('#accpChatBox')[0].scrollHeight) {
					$('#accpChatBox').append(returnData);
					$('#accpChatBox').scrollTop($("#accpChatBox")[0].scrollHeight);
				} else {
					$('#accpChatBox').append(returnData);
				}
			}
			accpRequestSent = false;
		});
	}
};

</script>