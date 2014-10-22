(function(){

	$('form[data-remote]').validate({ 

		ignore: [],

		errorPlacement : function(error, element) {
			error.css('color', 'red');
			error.insertBefore(element.parent());
		}

	});    

	$('form[data-remote]').on('submit', function(e){

		var isvalid = $('form[data-remote]').valid();

		if(isvalid)
		{
			
			var form = $(this);

			var method = form.find('input[name="_method"]').val() || 'POST';

			var url = form.prop('action');

			$.ajax({
				type: method,
				url: url,
				data: form.serialize(),
				success: complete_handler

			});

			function complete_handler(data)
			{
				form.closest('div[data-modal]').modal('hide');
				console.log(data);
			}

			e.preventDefault();
		}

	});

})();