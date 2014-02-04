$(document).ready(function(){
	$('#fname').on('blur', function(){
		var fname = $(this).val();
		if(fname.length > 0){
			$('#c_fname').html("<img src='img/check.jpg'>");
		}else{
			$('#c_fname').html("<img src='img/ex.jpg' style='max-width:3%;'>");
		}
	});

	$('#lname').on('blur', function(){
		var lname = $(this).val();
		if(lname.length > 0){
			$('#c_lname').html("<img src='img/check.jpg'>");
		}else {
			$('#c_lname').html("<img src='img/ex.jpg' style='max-width:3%;'>");
		}
	});

	$('#email').on('blur', function(){
		var email = $(this).val();
		var at = email.indexOf('@');
		var dot = email.indexOf('.');

		if(email.length > 0){
			if(at > -1){
				if(dot > -1){
					$('#c_email').html("<img src='img/check.jpg'>");
				}else{
					$('#c_email').html('Put a dot ');
				}
			}else{
				$('#c_email').html('Put @');
			}
		}else{
			$('#c_email').html("<img src='img/ex.jpg' style='max-width:3%;'>");
		}
	});

	$('#password').on('blur', function(){
		var pass = $(this).val();
		if(pass.length > 0){
			$('#c_pass').html("<img src='img/check.jpg'>");
		}else{
			$('#c_pass').html("<img src='img/ex.jpg' style='max-width:3%;'>");
		}
	});

	$('#c_password').on('blur',function(){
		var confirm = $(this).val();
		var pass = $('#password').val();
		if(confirm == pass){
			$('#c_confirm').html("<img src='img/check.jpg'>");
		}else {
			$('#c_confirm').html("<img src='img/ex.jpg' style='max-width:3%;'>");
		}
	});

	$('#click').on('click', function(){
		if($('#fname').val().length > 0 && $('#lname').val().length > 0 && $('#email').val().length > 0 && $('#password').val().length > 0 && $('#password').val() == $('#c_password').val()){
			return true;
		}else {
			alert("Fill in all");
			return false;
		}
	});
});
//////$('#opt').show();
