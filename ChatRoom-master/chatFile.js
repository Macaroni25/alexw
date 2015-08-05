var instance = false;
var state;
var mes;
var file;

function Chat () {
    this.update = updateChat;
    this.send = sendChat;
	this.getState = getStateChat;
}

//gets the state of the chat
function getStateChat(){
	if(!instance){
		 instance = true;
		 $.ajax({
			   type: "POST",
			   url: "chat.php",
			   data: {  
			   			'func': 'getState',
						'file': file
						},
			   dataType: "json",
			
			   success: function(data){
				   state = data.state;
				   instance = false;
			   },
			});
	}	 
}

//Updates the chat
function updateChat(){
	 if(!instance){
		 instance = true;
	     $.ajax({
			   type: "POST",
			   url: "chat.php",
			   data: {  
			   			'func': 'update',
						'state': state,
						'file': file
						},
			   dataType: "json",
			   success: function(data){
				   if(data.text){
						for (var i = 0; i < data.text.length; i++) {
                            $('#chat-area').append($("<p>"+ data.text[i] +"</p>"));
                        }								  
				   }
				   document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
				   instance = false;
				   state = data.state;
			   },
			});
	 }
	 else {
		 setTimeout(updateChat, 1500);
	 }
}

//send the message
function sendChat(message, nickname)
{       
    updateChat();
     $.ajax({
		   type: "POST",
		   url: "chat.php",
		   data: {  
		   			'func': 'send',
					'message': message,
					'nickname': nickname,
					'file': file
				 },
		   dataType: "json",
		   success: function(data){
			   updateChat();
		   },
		});
}
