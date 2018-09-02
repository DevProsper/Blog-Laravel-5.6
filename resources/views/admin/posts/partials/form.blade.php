{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{ Form::label('category_id', 'Categorie') }}
	{{ Form::select('category_id', $categories,null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Nombre de l\'étiquette') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<div class="form-group">
	{{ Form::label('slug', 'Url') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<div class="form-group">
	{{ Form::label('file', 'Image') }}
	{{ Form::file('file') }}
</div>

<div class="form-group">
	{{ Form::label('status', 'Statut') }}
	<label>
		{{ Form::radio('status', 'PUBLISHED') }} Publié
	</label>
	<label>
		{{ Form::radio('status', 'DRAFT') }} Non Publié
	</label>
</div>

<div class="form-group">
	{{ Form::label('tags', 'Etiquette') }}
	<div class="form-control">
		@foreach($tags as $tag)
			<label>
				{{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
			</label>
		@endforeach
	</div>
</div>

<div class="form-group">
	{{ Form::label('excerpt', 'Descripton 1') }}
	{{ Form::textarea('excerpt', null, ['class' => 'form-control', 'row' => '2']) }}
</div>

<div class="form-group">
	{{ Form::label('body', 'Descripton') }}
	{{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Soumettre', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$('#slug').val(text);
			}
		});
	});


	CKEDITOR.config.height = 400;
	CKEDITOR.config.width = 'auto';

	//CKEDITOR.replace('body');
</script>
@endsection