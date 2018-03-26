<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Task List</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            body {
                font-family: 'Lato';
            }
            .fa-btn {
                margin-right: 6px;
            }
        </style>
    </head>

    <body id="app-layout">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="/">
                        Task List
                    </a>
                </div>

            </div>
        </nav>

        <!-- Bootstrap Boilerplate... -->

        <div class="container">
            <div class="col-sm-offset-2 col-sm-8">
                @if(Session::has('create_article_success'))
        <div class="alert alert-success">
        {{Session::get('create_article_success')}}
        </div>
    @endif
    
    @if(count($errors)>0)
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <p>{{$error}}</p>
      @endforeach
    </div>
  @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        New Task
                    </div>

                    <div class="panel-body">
                        <!-- Display Validation Errors -->

                        <!-- New Task Form -->
                        <form action="{{url('/task')}}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <!-- Task Name -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Task</label>

                                <div class="col-sm-6">
                                    <input type="text" name="name" id="task-name" class="form-control">
                                </div>
                            </div>

                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-btn fa-plus"></i>Add Task
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Current Tasks -->
                @if (count($tasks) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current Tasks
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">
                                <thead>
                                    <th>Task</th>
                                    <th>&nbsp;</th>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>
                                        <td class="table-text"><div>{{$task->name}}</div></td>

                                            <!-- Task Delete Button -->
                                            <td>
                                                <form action='{{url("task/$task->id/delete")}}' method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-btn fa-trash"></i>Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>