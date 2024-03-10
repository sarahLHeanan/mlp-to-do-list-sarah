<form class="task-form" method="POST" action="/tasks">
  @csrf
  @method('POST')
  <div class="form-group">
    <input type="text" class="form-control" id="task" name="task" placeholder="Insert task name">
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>