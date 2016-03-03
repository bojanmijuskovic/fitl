$('form.delete-object').submit(function(e) {

	var deleteConfirmed = confirm('Are you sure you want to delete this?');

	// if this is true, submission will be processed
	// but if is false, submission will be halted
	return deleteConfirmed;

});