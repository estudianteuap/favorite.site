@if (session('msg'))
    {{session('msg')}}
@endif
<br>
@forelse ($roles as $rol)
    {{$rol->name}}
    <br>
@empty
    No Ahi Roles
@endforelse