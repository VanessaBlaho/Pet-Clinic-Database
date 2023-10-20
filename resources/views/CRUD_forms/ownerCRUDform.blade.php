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
    
@if ($owner->id)
        <h1>Admin: Edit</h1>
    @else
        <h1>Admin: Create</h1>
    @endif


@if($owner->id)
<form action="{{route('owners.update', $owner->id )}}" method="post">
    @method('put')

    @else

    <form action="{{route('owners.store')}}" method="post">

@endif
    @csrf 
        <label for="first_name">First name</label>
        <br>
        <input type="text" name="first_name" id="" value="{{ old('first_name', $owner->first_name)}}">
        <br>
        <label for="surname" >Surname</label>
        <br>
        <input type="text" name="surname" id="" value="{{ old('surname', $owner->surname)}}">
        <br>
        <label for="email">Email</label>
        <br>
        <input type="text" name="email" id="" value="{{ old('email', $owner->email)}}">
        <br>
        <label for="phone">Phone</label>
        <br>
        <input type="text" name="phone" id="" value="{{ old('phone', $owner->phone)}}">
        <br>
        <label for="address">Address</label>
        <br>
        <input type="text" name="address" id="" value="{{ old('address', $owner->address)}}">
        <br>
        <br>
        <button>Save</button>
</form>



</body>
</html>