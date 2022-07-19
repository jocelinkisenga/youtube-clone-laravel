@extends('layouts.main')
@section('content')
	<div class="row">
		<form action="{{route('video')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<fieldset class="form-group">
				<label for="formGroupExampleInput">title</label>
				<input type="text" name="title" class="form-control"  placeholder="Example input">
			</fieldset>
			<input type="hidden" value="{{Auth::user()->id}}" name="user_id"/>
			<fieldset class="form-group">
				<label for="formGroupExampleInput">description</label>
				<Textarea type="text" class="form-control" name="description" placeholder="Example input"></Textarea>
			</fieldset>
			<label class="file">
				<input type="file" id="file" name="video">
				<span class="file-custom primary"></span>
			</label>
			<button type="submit" class="btn btn-primary">envoyer</button>
		</form>
	</div>
@endsection