<div class="task-list">
    <table class="table">
        <tr>
            <th>#</th>
            <th colspan="3">Task</th>
        </th>
        <tr>
            <td>1</td>
            <td>Entry one</td>
            <td class="icon">
                <span class="glyphicon glyphicon-ok"></span>
            </td>            
            <td class="icon">
                <span class="glyphicon glyphicon-remove"></span>
            </td>
        </tr>        
        <tr>
            <td>2</td>
            <td>Entry two</td>
            <td class="icon">
                <span class="glyphicon glyphicon-ok"></span>
            </td>            
            <td class="icon">
                <span class="glyphicon glyphicon-remove"></span>
            </td>
        </tr>
    </table>

    @if(isset($tasks))
        @foreach ($tasks as $task)
            {{ $task }}
        @endforeach
    @endif
</div>