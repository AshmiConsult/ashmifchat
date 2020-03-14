<div>
    @extends('layouts.app')

    @section('content')
        <div class="container flex">

            <x-panel class="shadow-md bg-green-200">
                @include('posts.sidebar')
            </x-panel>

            <livewire:posts />
    
            <x-panel class="shadow-md bg-blue-200">
                @include('posts.trending')
            </x-panel>

        </div>
    @endsection
</div>