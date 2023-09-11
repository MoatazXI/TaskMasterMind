<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
    <link rel="icon" href="{{URL ('/Images/tab-icon.png') }}"/>

    @vite(['resources/css/update.css','resources/js/menu.js'])

    <title>Show Task</title>
  </head>
  <body>

      <div id="editTaskModal" class="editTaskmodal">
      <!-- Modal content -->
      <div class="edit-modal-content">
        <div class="title">
          <h2>View Task</h2>
        </div>

        <form method="get" action="{{ route('todo.show',$show->id) }}">
          @csrf

          <input style="display:none" type="number" name="id" value="{{$show->id}}">
          <input
            type="text"
            id="title"
            name="title"
            placeholder="Task Name"
            readonly
            value="{{$show->title}}"
          /><br /><br />
          <textarea
            id="description"
            name="description"
            placeholder="Description"
            readonly
          >{{$show->description}}</textarea
          ><br />


        </form>
      </div>
    </div>
    <!-- end edit task modal -->
    </div>


  </body>
</html>
