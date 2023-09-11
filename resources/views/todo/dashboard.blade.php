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
    @vite(['resources/css/dashboard.css','resources/js/menu.js'])
    <link rel="icon" href="{{URL ('/Images/tab-icon.png') }}"/>

    <title>My Tasks</title>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <img src="{{URL ('/Images/taskmastermind-logo.png') }}" alt="" />
        <button id="menu-btn">
          <span class="material-icons-sharp"> menu </span>
        </button>
        <div class="account">
          <span class="material-icons-sharp">account_circle</span>
        </div>
      </div>
    </header>
    <div id="container">
      <aside>
        <div class="sidebar">
          <a href="#" class="task-icon"
            ><span class="material-icons-sharp">task_alt</span>
            <h3>Tasks</h3></a
          >

          <a href="#" class="settings"
            ><span class="material-icons-sharp">settings</span>
            <h3>Settings</h3></a
          >
          <a class="logout" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <span class="material-icons-sharp"> logout </span><h3>Log Out</h3>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </div>
      </aside>

      <main>
        <div class="maincontent">
          <div class="head">
            <span id="current-day"></span>
            <div class="addTask">
              <button id="addTaskBtn">
                <span class="material-icons-sharp"> add </span> Add Task
              </button>
            </div>
          </div>
          <div class="content">
            <div class="today-tasks">
              <h4 id="">Tasks List</h4>

              <div class="task-box">
              @foreach($tasks as $task)
                <div class="task" id="task">
                  <div class="task-header">
                    <input type="checkbox" />
                    <p class="task-title">{{$task -> title}}</p>
                    <button id="icon-viewBtn"  href="{{ route('todo.show', $task->id) }}">
                      <a  href="{{ route('todo.show', $task->id) }}"> <span class="material-icons-sharp">
                        visibility
                        </span></a>
                    </button>
                    <form method='post' action="{{route('todo.remove')}}" class="inner">
                      @csrf
                      @method('DELETE')
                      <input type="hidden" name="id" value="{{$task->id}}">
                      <button type="submit" id="icon-deleteBtn" value="remove">

                        <span class="material-icons-sharp"> delete </span>
                      </button>
                    </form>

                    <a id="icon-editBtn"  href="{{ route('todo.update', $task->id) }}">
                    <span class="material-icons-sharp" > edit </span></a>

                  </div>
                  <div class="task-body">
                    <p class="task-description">{{$task -> description}}</p>

                  </div>
                </div>

              @endforeach
              </div>
            </div>
          </div>

          </div>
        </div>
      </main>
    </div>

    <!-- add task modal -->
    <div id="addTaskModal" class="addTaskmodal">
      <!-- Modal content -->
      <div class="add-modal-content">
        <div class="title">
          <h2>Add Task</h2>
        </div>
        <form method="POST" action="{{ route('todo.store') }}">
          @csrf
          <input
            type="text"
            id="title"
            name="title"
            placeholder="Task Name"
          /><br /><br />
          <textarea
            id="description"
            name="description"
            placeholder="Description"
          ></textarea
          ><br />


          <button type="submit" id="addTaskFormSubmit">Add</button>
          <button type="button" id="add-CancelBtn">Cancel</button>
        </form>
      </div>
    </div>
    <!-- end add task modal -->


    <script src="js/menu.js"></script>
  </body>
</html>
