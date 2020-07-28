<div>
    <h1 class="text-3xl text-center font-bold">{{ $first_name }} is up to bat.</h1>
    <input type="number" value="{{ $player_id }}" wire:model="player_id" hidden>
    <div class="form-group mb-5">
        <p>Date</p>
        <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" type="date" wire:model="date">
        @error('date')
        <span class="block text-red-700">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group mb-5">
        <p>Inning</p>
        <input max="9" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" type="number" wire:model="inning">
        @error('inning')
        <span class="block text-red-700">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group mb-5">
        <p>Balls</p>
        <div class="grid grid-cols-6">
            <button class="col-span-1 appearance-none rounded-none relative block w-full p-1 bg-blue-500 text-white font-bold focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" wire:click="ballDecrement">-</button>
            <input class="col-span-4 appearance-none rounded-none relative block w-full px-3 py-2 text-center border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" type="number" value="{{ $balls }}" readonly>
            <button class="col-span-1 appearance-none rounded-none relative block w-full p-1 bg-blue-500 text-white font-bold focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" wire:click="ballIncrement">+</button>
            @error('balls')
            <span class="block text-red-700">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-group mb-5">
        <p>Strikes</p>
        <div class="grid grid-cols-6">
            <button  class="col-span-1 appearance-none rounded-none relative block w-full p-1 bg-blue-500 text-white font-bold focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" wire:click="strikeDecrement">-</button>
            <input class="col-span-4 appearance-none rounded-none relative block w-full px-3 py-2 text-center border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" type="number" wire:model="strikes" readonly>
            <button class="col-span-1 appearance-none rounded-none relative block w-full p-1 bg-blue-500 text-white font-bold focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" wire:click="strikeIncrement">+</button>
        </div>
        @error('strikes')
        <span class="block text-red-700">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group mb-5">
        <p>Outcome</p>
        <select class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" name="outcome" wire:model="outcome" id="">
            <option value=""></option>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
            <option value="Home Run">Home Run</option>
            <option value="Hit By Pitch">Hit By Pitch</option>
        </select>
        @error('outcome')
        <span class="block text-red-700">{{$message}}</span>
        @enderror
    </div>
    <button class="block w-full mt-3 py-3 bg-green-500 leading-5 font-medium text-white" wire:click.prevent="store()">Save</button>
{{--    <div>--}}
{{--        <button wire:click="increment">+</button>--}}
{{--        <h1>{{ $count }}</h1>--}}
{{--        <button wire:click="decrement">-</button>--}}
{{--    </div>--}}
</div>
