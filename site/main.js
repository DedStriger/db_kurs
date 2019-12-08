$(document).ready(function(){
$.ajax({ 
	url:'main_table.php',
	data: {go:'yes',table:'farmers'},
	type: 'POST',
	success: function(resp){
		$('#table').html(resp);
	}
});

$('.btn').on('click', function(e){
	e.preventDefault();
	let nt = $(this).data('name');
	$.ajax({ 
	url:'main_table.php',
	data: {go:'yes',table:nt},
	type: 'POST',
	success: function(resp){
		$('#table').html(resp);
	}
});

});

$('#goFood').on('click', function(e){
	e.preventDefault();
	let aidT = $('#animal').val();
	let cofT = $('#countFood').val();
	$.ajax({ 
	url:'main_table.php',
	data: {food:'yes',aid:aidT,cof:cofT},
	type: 'POST',
	success: function(resp) {
		$('#response').html("животное с id"+aidT+" покормленно" );
		$('#animal').val(null);
		$('#countFood').val(null);
	}
});
});

$('#addF').on('click', function(e){
	e.preventDefault();
	let nT = $('#name').val();
	let bT = $('#barn').val();
	let cT = $('#cornfield').val();
	let aT = $('#anim').val();
	let acT = $('#countA').val();
	let sT = $('#stern').val();
	$.ajax({ 
	url:'main_table.php',
	data: {add:'yes',n:nT,b:bT, c:cT, a:aT, ac:acT, s:sT},
	type: 'POST',
	success: function(resp) {
		$('#responseAdd').html("фермер "+nT+" успешно добавлен" );
		$('#name').val(null);
	 $('#barn').val(null);
	 $('#cornfield').val(null);
	 $('#anim').val(null);
	 $('#countA').val(null);
	 $('#stern').val(null);
	}
});
});


});