@extends('main')

@section('title','|create New Post')

@section('stylesheets')
	{!!  Html::style('css/parsley.css')  !!}	
@endsection

@section('content')


	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>

			 {!! Form::open(['route' => 'posts.store','data-parsley-validate' =>'']) !!}
				{{ Form::label('title','Title:') }}
				 <!-- the first title refers to Id
				  and i want it to be the column in the database title
				  The Second title will be shown at the first of line-->
				{{ Form::text('title', null, array('class' => 'form-control', 'required' =>'', 'maxlength'=> '255')) }}
				<!-- the second null means : the value of the textarea
					 the third value means : the class that belong to the bootstap -->
				{{ Form::label('body','Post Body:') }}
				{{ Form::textarea('body', null, array('class' => 'form-control','required' =>'')) }}
				{{ Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block',
				'style'=>'margin-top: 20px')) }}
			 {!! Form::close() !!}
		</div>
	</div>

@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection