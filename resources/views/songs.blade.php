<!DOCTYPE html>

<head>

    <title>Songs Page</title>
</head>
<body>
    <h1>HEllossdjskjg</h1>
    <h2>Songs Class</h2>
    <table border="1" >
     
    <tr>
        <th>Title: </th>
    </tr>
    <tr>
        <td>{{ $song -> getTitle() }}</td>
    </tr>

    <tr>
        <th>Artist: </th>
    </tr>
    <tr>
        <td>{{ $song -> getArtist() }}</td>
    </tr>

    <tr>
        <th>Genre: </th>
    </tr>
    <tr>
        <td>{{ $song -> getGenre() }}</td>
    </tr>

    <tr>
        <th>Tempo: </th>
    </tr>
    <tr>
        <td>{{ $song -> getTempo() }}</td>
    </tr>
    
    </table>


</body>
</html>