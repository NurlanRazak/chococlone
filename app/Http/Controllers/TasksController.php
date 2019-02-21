<?php

namespace App\Http\Controllers;
use App\questions;
use App\deals;
use App\images;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
//use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Task;
use App\Comment;

class TasksController extends Controller
{
 //   use ValidatesRequests;

    public function index()
    {

        $tasks = questions::all();
        return view('tasks.index', ['tasks'=>$tasks]);
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {

       /* $task = new questions();
        $task->title = $request->get('title');
        $task->description = $request->get('description');

        $task->save();

        return redirect()->route('tasks.index');
*/
       $this->validate($request, [
           'title' => 'required',
           'description' => 'required'
        ]);
        questions::create($request->all());
        return redirect()->route('tasks.index');
        }
    public function edit($id)
    {
        $myTask = questions::find($id);
        return view('tasks.edit',['task' => $myTask]);
    }

    public function update(Request $request, $id)
    {
         $this->validate($request, [
             'title' => 'required',
             'description' => 'required'
         ]);
         $myTask = questions::find($id);


         $myTask->fill($request->all());
         $myTask->save();

         return redirect()->route('tasks.index');
    }
    public function show()
    {  
        $show = deals::paginate(3);
        return view('main', compact('show'));
    }
     public function sort()
    {
     
        $var=deals::orderBy('price','asc')->get();
        return view('include.sort', ['var'=>$var])->render();
    }
        
    public function inpage($id_deals)
    {  
        $infind = deals::find($id_deals); 
        //dd($infind->comments());
    
    // $comment=Comment::find($prod_id);
        return view('indexes.product-page',['infind'=>$infind]);
      
    }
    public function destroy($id)
    {
        questions::find($id)->delete();
        return redirect()->route('tasks.index');
    }
}
