<x-layout>
    <x-slot:title>
        MLP To Do List
    </x-slot>

    <header>
        <section class="hero">
            Hero component here, logo
        </section>
    </header>

    <section class="main-content">
        <!-- @todo task list component -->
        
        <div class="to-do-list">
            <div class="row">
                <div class="col-md-6">
                    To do form
                </div>
                <div class="col-md-6">
                    @if(isset($tasks))
                        @foreach ($tasks as $task)
                            {{ $task }}
                        @endforeach
                    @else
                    <p>No outstanding tasks</p>
                    @endif
                </div>
            </div>
        </div>


    </section>
</x-layout>