$(document).ready(function(){
	$('#opt').on('click',function(){
		$('#next').show();
		
	});
	$('#opt2').on('click',function(){
		$('#next').show();
	});
	$('#opt3').on('click',function(){
		$('#next').show();
	});
	$('#opt1').on('click',function(){
		$('#next').show();
	});
	var ques_num = 1;
	$('#next').on('click', function(){
		ques_num++;
		$.ajax({
			url: 'examAuthenticator.php',
			data: {num: ques_num},
			dataType: 'JSON',
			method: 'GET',

			success:function(r){
				if(ques_num >10){
					alert()
				}else{
					$('#question_num').html(r.question_num);
					$('#question').html(r.question);
					$('#a').html(r.a);
					$('#b').html(r.b);
					$('#c').html(r.c);
					$('#d').html(r.d);
				}
				//"<span id ='a'><input type='radio' name ='opt' id = 'opt'/>"+r.a+"</span>"
			}
		});
		$(this).hide();
	});
	// $('#next').on('click', function(){
	// 	$('#opt').html(' ');
	// 	$('#opt1').html(' ');
	// 	$('#opt2').html(' ');
	// 	$('#opt3').html(' ');
	// });
});