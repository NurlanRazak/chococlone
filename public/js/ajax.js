$(document).ready(function($) {
$("#sortByCost").on('click',function(){
 $.ajax({
	url: '/main/sort',
	type: 'GET',
	data: 'price',
})
.done(function(data) {
	console.log("ssdfdsfds");
	
})
.fail(function() {
	console.log("error");
})


});	
});