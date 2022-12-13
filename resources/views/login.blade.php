<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body class="font-body">
    @if (session('success'))
            <p class="alert alert-success">{{session('success')}}</p>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{$err}}</p>
            @endforeach
        @endif
    <div class="h-screen md:flex bg-primary">
        <div class="md:flex w-1/2 py-10 justify-around items-center flex-col">
            <form action="{{ route('login.action') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="text-secondary text-center text-5xl font-semibold mb-24">Login</h1>
                <div class="flex items-center mb-4">
                    <input type="text" name="username" id="username" placeholder="Username" class="p-3 pl-8 pr-52 rounded-md outline-none border-none bg-secondary" value="{{ old('username') }}" required>
                </div>
                <div class="flex items-center mb-4">
                    <input type="password" name="password" id="password" placeholder="Password" class= "p-3 pl-8 pr-52 rounded-md outline-none border-none bg-secondary" value="{{ old('password') }}" required>
                </div>
                <button type="submit" name="submit" class="w-full p-3 outline-none border-none rounded-md bg-componen text-secondary mt-24 font-semibold" >Login</button>
            </form>
        </div>
        <div class="relative overflow-hidden md:flex w-1/2 items-center hidden">
            <img src="img/login-bg.jpg" alt="bg-side-img">
        </div>
    </div>
</body>
</html>