var authBtn = $('#authBtn'),
	authBox = $('#authBox'),
	fade = $('#fade'),
	closeBox = $('#closeBox'),
	loginEmail = $('#loginEmail'),
	loginPass = $('#loginPass'),
	loginBtn = $('#loginBtn'),
	signEmail = $('#signEmail'),
	signPass = $('#signPass'),
	signCPass =$('#signCPass'),
	signBtn = $('#signBtn');

authBtn.on('click', function(){
	fade.show();
	authBox.show('blind');	

});
closeBox.on('click', function(){
	authBox.hide('blind');	
	fade.hide('blind');
});

signEmail.on('keyup', function(){
	
});