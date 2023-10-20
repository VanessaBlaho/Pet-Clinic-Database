<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Animals</h1>
   <table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Photo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($animals as $animal)
        <tr>
            <td>{{ $animal->name }}</td>
            <td>{{ $animal->species }}</td>
            <td>{{ $animal->breed }}</td>
            <td>{{ $animal->age }}</td>
            <td>{{ $animal->weight }}</td>
            <td> <img src="/images/pets/ {{$animal->path}}" alt="{{ $animal->name }}"></td>
        </tr>
            
        @endforeach
    </tbody>
   </table>
   </ul>
</body>
</html>