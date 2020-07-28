@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <livewire:bat :player="$player"/>
        </div>
    </div>
@endsection
