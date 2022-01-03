<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="" method="POST">
        {{-- @if ($errors->any())
            {{$errors}}
        @endif
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $message)
           <li> {{$message}}</li>
        @endforeach
        </ul>
        
        @endif --}}
        @csrf
        Name:     <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            {{$message}}
        @enderror
        email:    <input type="email" name="email" value="{{old('email')}}">
        {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->get('email') as $message)
            <li>{{$message}}</li>
            @endforeach   
        </ul> 
        @endif --}}
        @error('email')
           <span> {{$message}}</span>
        @enderror
        {{-- @if ($errors->any())
            {{$errors->first('email')}}
        @endif --}}
        password: <input type="password" name="password" value="{{old('password')}}">
        {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->get('password') as $message)
            <li>{{$message}}</li>
            @endforeach   
        </ul> 
        @endif --}}
        @error('password')
           <span>{{$message}}</span> 
        @enderror
        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>