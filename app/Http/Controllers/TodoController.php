<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequset;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    //return home page 
    public function index(){
        return view('index');
    }

    //return tasks 
    public function dash(){
        global $tasks;
        $userID = Auth::id();

        $tasks = Todo::where('user_id', $userID)->get();  

        return view('todo.dashboard',[
            'tasks' => $tasks
        ]);
    }

    //store the data from the inputs
    public function store(Request $request){

        // $validated = $request->safe()->only(['title', 'description']);
        $user = Auth::user();
        if($user!= null){
            $task =new Todo();
            $task->title = $request->title;
            $task->description = $request->description;
            $task->user()->associate($user);
            $task->save();

            return redirect('/todo/dashboard');
        }else {
            return redirect('login');
        }
    }

    //return the task view 
    public function show ($id){
        $show = Todo::find($id);

        return view('/todo.show',['show'=>$show]);
    }
    
    //return the data of a task 
    public function update($id)
    {
        $task = Todo::find($id);

        return view('todo.update',['task'=>$task]);
    }

    //update the inputs 
    public function up(Request $request){
        $task =Todo::find($request->id);
        $task -> title = $request ->title;
        $task -> description = $request ->description;
        $task->save();

        
        return redirect('/todo/dashboard');
    }

    //remove function 
    public function remove(Request $req){
        $task =Todo::find($req->id);
        
        $task->delete();
        
        return redirect('/todo/dashboard');
    }
    
    //return contact us view 
    public function contacts(){
        return view('contacts');
    }

    //send the data to the stmp gmail server 
    public function send(Request $req){
        $email = $req->input('email');
        $message = $req->input('message');
        $about = $req->input('about');

        $to= 'Jkennen83@gmail.com';
        $subject = $about ;
        $body = "Email: $email\n\nMessage:\n$message" ;
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        ini_set('SMTP', 'smtp.gmail.com');
        ini_set('smtp_port', '587');
        ;
        if(mail($to,$subject,$body,$headers)){
            return view('contacts');
        }
        else {
            return back()->with('error', 'An error occurred while sending the email.');
        }

    }

    //return aboutus view 
    public function aboutus(){
        return view('aboutus');
    }
}
