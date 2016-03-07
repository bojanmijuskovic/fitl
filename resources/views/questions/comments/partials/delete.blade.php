{!! Form::open([
	'route' => ['questions.comments.destroy', $object->id, $comment->id],
	'method' => 'delete'
	]) !!}

&nbsp;<button type="submit" class="btn btn-danger btn-xs">delete</button>

{!! Form::close() !!}