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
    @vite(['resources/css/update.css'])
    <link rel="icon" href="{{URL ('/Images/tab-icon.png') }}"/>

    <title>Update Task</title>
  </head>
  <body>




      <div id="editTaskModal" class="editTaskmodal">
      <!-- Modal content -->
      <div class="edit-modal-content">
        <div class="title">
          <h2>Update Task</h2>
        </div>

        <form id="editTaskModal" method="POST" action="{{ route('todo.up') }}">
          @csrf
          @method('put')

          <input style="display:none" type="number" name="id" value="{{$task->id}}">
          <input
            type="text"
            id="title"
            name="title"
            placeholder="Task Name"
            value="{{$task->title}}"
          /><br /><br />
          <textarea
            id="description"
            name="description"
            placeholder="Description"
          >{{$task->description}}</textarea
          ><br />

          <button type="submit" id="editTaskFormSubmit">Update</button>
          <button type="button" id="edit-cancelBtn">Cancel</button>

        </form>
      </div>
    </div>
    <!-- end edit task modal -->
    </div>


  </body>
</html>
