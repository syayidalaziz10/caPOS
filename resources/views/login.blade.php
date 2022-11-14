<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body>
    <div class="h-screen md:flex">
        <div class="relative overflow-hidden md:flex w-1/2 py-10 bg-primary justify-around items-center">
            <form action="">
                <h1 class="text-secondary text-center text-5xl font-bold mb-24">Login</h1>
                <div class="flex items-center mb-4">
                    <input type="text" name="username" id="username" placeholder="Username" class="p-3 pr-52 rounded-md outline-none border-none bg-secondary">
                </div>
                <div class="flex items-center mb-4">
                    <input type="password" name="password" id="password" placeholder="Password" class= "p-3 pr-52 rounded-md outline-none border-none bg-secondary" >
                </div>
                <button type="submit" name="submit" class="w-full p-3 outline-none border-none rounded-md bg-componen text-secondary mt-24" >Login</button>
            </form>
        </div>
        <div class="relative overflow-hidden md:flex w-1/2 justify-around items-center hidden">
            <img src="img/login-bg.jpg" alt="bg-side-img">
        </div>
    </div>
</body>
</html>