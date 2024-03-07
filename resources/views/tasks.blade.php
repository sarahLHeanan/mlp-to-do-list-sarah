<x-layout>
    <x-slot:title>
        MLP To Do List
    </x-slot>

    <section class="main-content tasks">
        <div>
            <div class="row">
                <div class="col-md-5">
                    <x-task-form />
                </div>
                <div class="col-md-7">
                    <x-task-list />
                </div>
            </div>
        </div>
    </section>
</x-layout>