<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome Film</th>
            <th scope="col">Titolo Originale</th>
            <th scope="col">Nazionalitá</th>
            <th scope="col">data di uscita</th>
            <th scope="col">voto</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <th scope="row">{{ $movie->title }}</th>
                <td>{{ $movie->original_title }}</td>
                <td>{{ $movie->nationality }}</td>
                <td>{{ $movie->date }}</td>
                <td>{{ $movie->vote }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>