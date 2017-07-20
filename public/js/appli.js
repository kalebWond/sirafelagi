$('.items').on('click','.apply', function(e) {
	e.preventDefault();
	$this = $(this);
	var url = $this.attr('href');
	$.ajax({
		url: url,
		method: 'GET',
		success: function(){
			Materialize.toast('Application Sent!!', 3000, 'orange');
			$this.siblings('.card-title').trigger('click');
			$this.parents('div.card').find('.badge').remove();
			$this.parents('div.card').find('.card-content').append(`<a class="btn disabled" style="margin-top:10px;">
				Application Already Sent</a>`);
		}
	});
});
$('.ok').click(function(e) {
	// e.preventDefault();
	// $this= $(this);
	// console.log($this.attr('href'));
	// $.ajax({
	// 	url: $this.attr('href'),
	// 	method: 'GET',
	// 	success: function() {
	// 		 Materialize.toast('Notification Erased', 4000);
	// 		 $this.parents('.horizontal').remove();
	// 	}
	// });
});

$('#next').click(function (e) {
	e.preventDefault();
	var $this = $(this);
	$('.loader').html('').append(`
	  <div class="progress animated slidInUp" >
	      <div class="indeterminate" style="margin-top:15px;"></div>
	  </div>
	`);
	$.ajax({
		url: $this.attr('href'),
		method: 'GET',
		complete: function () {
			$('.progress').remove();
		},
		success: function(data) {
			var $data = $(data),
				 url = $(data).find('#next').attr('href');
			if(url == ''){
				$this.remove();
			}
			else{
				$this.attr('href', url);
			}
			$data.find('.hoverable').appendTo('.items');
			
		}
	});
})
