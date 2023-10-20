<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Search results</title>
</head>
<body>
    <h1>Search results</h1>

    <h2>Search term: <?= $search_term ?></h2>

    <form action="/search" method="get">
        <input type="text" name="search" value="<?= htmlspecialchars($search_term) ?>">
        <button>Search</button>
    </form>


    <h3>Search results by pet name:</h3>
    
        @if (count($results_animal) > 0)
        <ul>
            @foreach ($results_animal as $result_item)
                <li>
                    {{-- {{route('animal')}} --}}
                    <a href="">
                        {{ $result_item->name }} (Breed: {{ $result_item->breed }})
                    </a>
                </li>
            @endforeach
        </ul>
        @else
            <p>No results found</p>
        @endif
    


    <h3>Search results by owner name:</h3>

    @if (count($results_owner) > 0)
    <ul>
        @foreach ($results_owner as $result_item)
            <li>
                {{-- {{route('animal')}} --}}
                <a href="">
                    {{ $result_item->first_name . " " . $result_item->surname }}
                </a>
            </li>
        @endforeach
    </ul>
    @else
        <p>No results found</p>
    @endif

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