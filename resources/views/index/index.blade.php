<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>The Greatest Vet Clinic of All Time</title>
</head>
<body>
    
    <h1>Paws Up Veterinary Clinic</h1>

    <form action="/search" method="get">

        <input type="text" name="search" value="">

        <button>Search</button>

    </form>
    <br>
    <h2>Our Patients</h2>
    
    <div class="pet__container">
    @foreach ($animals as $animal)
        <div class="pet__container-mini">
            <img class="pet__image" src="/images/pets/{{ $animal->path }}" alt="{{ $animal->name}}">
            <div class="pet__info-container">
                <p class="pet__info"><strong>Name:</strong> {{ $animal->name }}</p>
                <p class="pet__info"><strong>Owner:</strong> {{ $animal->first_name}} {{ $animal->surname }}</p>
                <p class="pet__info"><strong>Species:</strong> {{ $animal->species }}</p>
                <p class="pet__info"><strong>Breed:</strong> {{ $animal->breed }}</p>
                <p class="pet__info"><strong>Age:</strong> {{$animal->age}}</p>
                <p class="pet__info"><strong>Weight:</strong> {{$animal->weight}}</p>
            </div>
        </div>
        @endforeach
    </div>

<footer class="footer">
    
    <a href="/home">Home</a>
    <a href="/owners">Owners</a>
    <a href="/animals">Animals</a>
    <a href="/search">Search</a>
    <a href="/ownerform/create">Create Owner</a>
    <a href="/animalform/create">Create Animal</a>
    
</footer>
</body>

</html>