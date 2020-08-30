@extends('layouts.app')

@section('content')

<div class="grid grid-cols-3 gap-5">
    @foreach($tournaments as $t)
        <div class="bg-gray-100 p-6 rounded-lg">
            <h1 class="text-2xl leading-tight mb-5 text-indigo-700">{{ $t->name }}</h1>
            @if($t->tournamentDates)
                @foreach($t->tournamentDates as $td)
                    {{ \Carbon\Carbon::parse($td->date)->format('F d, Y g:i A') }}<br />
                @endforeach
            @else
                <p>Dates TBD</p>
            @endif
        </div>
    @endforeach
</div>

@endsection
