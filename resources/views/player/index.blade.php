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
            <div class="player mb-5">
                <p class="mb-2 text-2xl">{{ $p->first_name }}</p>
                <div class="option grid grid-cols-4 gap-2">
                    <a href="/player/{{ $p->id }}/bat" class="col-span-2 px-4 py-2 text-center border border-transparent text-sm leading-5 font-medium text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:shadow-outline-green focus:border-green-700 active:bg-green-700 transition duration-150 ease-in-out">Batting</a>
                    <a href="/player/{{ $p->id }}/pitch" class="col-span-2 px-4 py-2 text-center border border-transparent text-sm leading-5 font-medium text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:shadow-outline-green focus:border-green-700 active:bg-green-700 transition duration-150 ease-in-out">Pitching</a>
                    <a href="/player/{{ $p->id }}" class="col-span-4 px-4 py-2 text-center border border-transparent text-sm leading-5 font-medium text-white bg-gray-600 hover:bg-green-500 focus:outline-none focus:shadow-outline-green focus:border-green-700 active:bg-green-700 transition duration-150 ease-in-out">Profile</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
