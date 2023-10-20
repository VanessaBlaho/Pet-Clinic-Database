<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>owners</title>
</head>
<body>
    <h1>List of Owners</h1>

    <table class="table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Surname</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($owners as $owner)
                <tr>
                    <td>{{ $owner->first_name }}</td>
                    <td>{{ $owner->surname }}</td>
                    <td>{{ $owner->email }}</td>
                    <td>{{ $owner->phone }}</td>
                    <td>{{ $owner->address }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
<footer class="footer">
    
    <a href="/home">Home</a>
    <a href="/owners">Owners</a>
    <a href="/animals">Animals</a>
    <a href="/search">Search</a>
    <a href="/ownerform/create">Create Owner</a>
    <a href="">Create Animal</a>
    
</footer>

</body>
</html>