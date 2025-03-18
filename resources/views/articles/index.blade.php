<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table>
        <tr>
            <td>Titre</td>
            <td>Image</td>
            <td>Contenu</td>
            <td>Auteur</td>
        </tr>
        <tr>
            @foreach ( $articles as $article )
            <td>{{ $article-> title}}</td>
            <td>{{ $article-> photo}}</td>
            <td>{{ $article-> content}}</td>
            <td>{{ $article-> auteur}}</td>
           


            @endforeach
        </tr>
    </table>

</body>
</html>