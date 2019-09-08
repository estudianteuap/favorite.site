<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<script src="/js/dropzone.js"></script>
<link rel="/css/dropzone.css">
<body>
    <h1>Feeback</h1>
<form action="/Foto" 
method="post" 
class="dropzone"
id="my-awesome-dropzone">
    @csrf
    <div>
        <br>
    <label for="resenia"></label>
    <br>
    <textarea name="resenia" cols="30" rows="10">
    </textarea>
    </div>
    <br>
    <div>
    <label for="File">File
        <input type="file" name="file" id="file">
    </label>
    </div>
    <button type="submit">Ok</button>
</form>

</body>
</html>