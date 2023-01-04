<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>
    <form action="{{route('posts.update',$list->id)}}" method="POST">
        @csrf
        @method("put")
        <input type="hidden" name="action" value="modifier">
        Name: <input type="text" name="name" value="{{$list->name}}"><br><br>
        Post: <input type="text" name="poste" value="{{$list->poste}}"><br><br>
        Description: <textarea name="description" cols="30" rows="2"> {{$list->description}} </textarea><br><br>

        <button type="submit">Modifier</button>
  
    </form>
<br>

</body>

</html>