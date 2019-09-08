Roles
<form method="POST" action="/Role">
@csrf
<label for="Nombre">
Nombre
<input type="text" name="name" 
placeholder="Nombre"
value="{{old('name')}}"
>
<br>
{!! $errors->first('name','<small>:message</small><br>'); !!}
</label>
<label for="Descripcion">
Descripcion
</label>
<br>
<textarea name="description" 
id="" cols="30" 
rows="10" placeholder="Descripcion">
</textarea>
{!! $errors->first('description','<br><small>:message</small>'); !!}
<br>
<button type="submit">Agregar</button>
</form>