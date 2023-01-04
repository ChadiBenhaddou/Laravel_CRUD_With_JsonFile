<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>
    <form action="{{route('posts.store')}}" method='POST'>

        @csrf
        <input type="hidden" name="action" value="ajouter">
        Name: <input type="text" name="name"><br><br>
        Post: <input type="text" name="poste"><br><br>
        Description: <textarea name="description" cols="30" rows="2"></textarea><br><br>

        <button type="submit">Ajouter</button>
  
    </form>
<br>

    <table>
        <tr>
            <th>Name</th>
            <th>Post</th>
            <th>Description</th>
            <th>Modifier</th>
            <th>Suprimmer</th>
        </tr>
        
        
            @foreach ($list as $post)
                <tr>
                    <td>{{$post->name}}</td>
                    <td>{{$post->poste}}</td>
                    <td>{{$post->description}}</td>
                    <td>
                    <form action="{{route('posts.edit',$post->id)}}" method="GET">
                        
                        <button>Modifier</button>
                    </form></td>
                    <td>
                        <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="action" value="suprimer">
                        <button>Delete</button>
                        </form>
                    </td>
                   
                </tr>
            @endforeach
        
    </table>

</body>

</html>