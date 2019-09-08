<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
{{$user->name}}
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