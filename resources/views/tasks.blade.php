<x-layout>
    <x-slot:title>
        Custom Title
    </x-slot>
 
    @if(isset($tasks))
        @foreach ($tasks as $task)
            {{ $task }}
        @endforeach
    @else
     <p>No outstanding tasks</p>
    @endif
</x-layout>