<x-layout>
    <x-slot:title>
        MLP To Do List
    </x-slot>

    <section class="main-content tasks">
        <!-- @todo task list component -->
        
        <div>
            <div class="row">
                <div class="col-md-5">
                    <x-task-form />
                </div>
                <div class="col-md-7">
                    <div class="to-do-list">
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
        </div>


    </section>
</x-layout>