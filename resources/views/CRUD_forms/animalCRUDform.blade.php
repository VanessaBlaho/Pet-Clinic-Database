<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>

@include('common.success_message')
    @include('common.error_message')
    
@if ($animal->id)
        <h1>Admin: Edit Animal</h1>
    @else
        <h1>Admin: Create Animal</h1>
    @endif


@if($animal->id)
<form action="{{route('animals.update', $animal->id )}}" method="post">
    @method('put')

    @else

    <form action="{{route('animals.store')}}" method="post">

@endif
    @csrf 
        <label for="owner_id">Owner ID</label>
        <br>
        <input type="text" name="owner_id" id="" value="{{ old('owner_id', $animal->owner_id)}}">
        <br>
        <label for="name" >Name</label>
        <br>
        <input type="text" name="name" id="" value="{{ old('name', $animal->name)}}">
        <br>
        <label for="species">Species</label>
        <br>
        <input type="text" name="species" id="" value="{{ old('species', $animal->species)}}">
        <br>
        <label for="breed">Breed</label>
        <br>
        <input type="text" name="breed" id="" value="{{ old('breed', $animal->breed)}}">
        <br>
        <label for="age">Age</label>
        <br>
        <input type="text" name="age" id="" value="{{ old('age', $animal->age)}}">
        <br>
        <label for="weight">Weight</label>
        <br>
        <input type="text" name="weight" id="" value="{{ old('weight', $animal->weight)}}">
        <br>
        <br>
        <button>Save</button>
</form>



</body>
</html>