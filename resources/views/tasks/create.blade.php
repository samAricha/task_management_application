<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Tasks</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('tasks.index') }}>TASKS CRUD</a>
      <div class="justify-end ">
        <div class="col ">
          <a class="btn btn-sm btn-success" href={{ route('tasks.create') }}>Add Task</a>
        </div>
      </div>
    </div>
  </nav>

    <div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
        <h3>Add a Task</h3>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" required></input>
            <div class="form-group">
            <label for="task_name">Name</label>
            <input type="text" id="task_name" name="task_name" required></input>

            <label for="priority">Priority</label>
            <input type="text" id="priority" name="priority" required></input>

            <label for="status">Status</label>
            <input type="text" id="status" name="status" required></input>

            <label for="date">Date</label>
            <input type="text" id="date" name="date" required></input>
            </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
        </div>
    </div>
    </div>

</body>
</html>