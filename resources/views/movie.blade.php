<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Here</title>
</head>
<body>
    <h1 style="color: red;">Detail Movie</h1>
    <table border="0">
        <tr>
            <th>Title</th>
            <td>{{ $movie['title'] }}</td>
        </tr>
        <tr>
            <th>Synopsis</th>
            <td>{{ $movie['synopsis'] }}</td>
        </tr>
    </table>
</body>
</html>