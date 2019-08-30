
@extends('index')

@section('content')
	<div class="grid gridheader">
		<div class="fila">
			<div class="columna" class="">
				Album
			</div>
			<div class="columna" class="">
				Action
			</div>
		</div>
	</div>
	@forelse($albumes as $album)
	<div class="grid">
		{{$album->resenia}}
		<div class="fila">
			<div class="columna">
				
				@foreach($album->fotos as $foto)
					{{$foto->ruta}}
					{{$foto->resenia}}
				@endforeach
			</div>
			
			<div class="columna">
				<div class="btn-group-vertical">
					
				</div>
			</div>
		</div>
	</div>
	@empty
	no album
	@endforelse
	

@endsection
@section('scripts')

@endsection