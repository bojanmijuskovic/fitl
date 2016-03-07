$('form.delete-object').submit(function(e) {

	var deleteConfirmed = confirm('Are you sure you want to delete this?');

	// if this is true, submission will be processed
	// but if is false, submission will be halted
	return deleteConfirmed;

});

// Toggle comment edit forms when "edit" buttons are clicked
$('.edit-object').click(function(e){
	var $commentItem = $(this).closest('li');
	var $commentForm = $commentItem.find('form.edit-object-form');
	$commentForm.toggleClass('hide');
});