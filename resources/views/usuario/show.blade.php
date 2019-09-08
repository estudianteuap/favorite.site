Usuario:{{$user->name}}
<p>
Roles<br>
@forelse ($user->roles as $rol)
    {{$rol->name}}
@empty
    Usuario Sin Roles
@endforelse
<p>
@forelse ($user->album as $album)
    {{$album->titulo}}<br>
        @forelse ($album->fotos as $foto)
            {{$foto->resenia}}<br>
        @empty
            Album sin fotos <br>
        @endforelse
@empty
    Sin album<br>
@endforelse