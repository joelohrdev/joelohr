<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pick a Player</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="min-h-screen flex items-center justify-center flex-col items-stretch bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        @foreach($players as $p)
            <a href="/player/{{ $p->id }}" class="block px-4 py-2 my-3 text-center border border-transparent text-2xl leading-5 font-medium text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:shadow-outline-green focus:border-green-700 active:bg-green-700 transition duration-150 ease-in-out">{{ $p->first_name }}</a>
        @endforeach
    </div>
</body>
</html>
