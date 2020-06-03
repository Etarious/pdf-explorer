/*====================== POPUP STARTS =====================*/

$(".popup-form-info")
	.popup({
		inline: true,
		on: "focus"
	});

/*====================== POPUP STARTS =====================*/






/*====================== MODAL STARTS =====================*/

$('#showRegisterModal').on('click', function(e){
	$('#registerModal')
	.modal({
		closable: false
	})
		.modal('show');

		e.preventDefault();
});

$('#reshowRegisterModal').on('click', function(e){
	$('#registerModal')
	.modal({
		closable: false
	})
		.modal('show');

		e.preventDefault();
});


//LoginModal 
//
$("#showLoginModal").on('click', function(e){
	$('#loginModal')
	.modal({
		closable: false
	})
		.modal('show');

		e.preventDefault();



});

/*====================== MODAL ENDS =====================*/