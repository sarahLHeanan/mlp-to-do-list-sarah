<div class="task-list mt-2 lg:mt-0">
    <table class="table">
        <tr>
            <th>#</th>
            <th colspan="3">Task</th>
        </th>

        @if(!empty($tasks))
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id ?? '' }}</td>
                    <td>{{ $task->name ?? '' }}</td>
                    <td class="icon">
                        <form action="/tasks/{{ $task->id }}" method="POST" class="manage-task-form">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="">
                                <span class="glyphicon glyphicon-ok"></span>
                            </button>
                        </form>
                    </td>            
                    <td class="icon">
                        <form action="/tasks/{{ $task->id }}" method="POST" class="manage-task-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="">
                            <span class="glyphicon glyphicon-remove"></span>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">All tasks are complete, hooray!</td>
            </tr>
        @endif
    </table>
</div>