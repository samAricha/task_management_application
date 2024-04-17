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
        <h3>Update Post</h3>
        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                value="{{ $post->title }}" required>
            </div>
            <div class="form-group">
            <label for="task_name">Body</label>
            <textarea class="form-control" id="task_name" name="task_name" rows="3" required>{{ $post->task_name }}</textarea>

            <label for="priority">Body</label>
            <textarea class="form-control" id="priority" name="priority" rows="3" required>{{ $post->priority }}</textarea>

            <label for="status">Body</label>
            <textarea class="form-control" id="status" name="status" rows="3" required>{{ $post->status }}</textarea>

            <label for="date">Body</label>
            <textarea class="form-control" id="date" name="date" rows="3" required>{{ $post->date }}</textarea>
            </div>
            <button type="submit" class="btn mt-3 btn-primary">Update Task</button>
        </form>
        </div>
    </div>
    </div>

</body>
</html>