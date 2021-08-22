<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    //

    function __construct()
    {
        $this->middleware('auth');
    }
    
    function create (){

        return view('entries.create');
    }

    function store (Request $request){

       // dd($request->all());

        $validateDate =  $request->validate([

        'title' => 'required|min:7|max:255|unique:entries',
        'content' => 'required|min:7|max:3000'

       ]);

       $entries = new Entry();
       $entries->title =  $validateDate['title'];
       $entries->content =  $validateDate['content'];
       $entries->user_id =  auth()->id();
       $entries->save();

       $status = 'you Entry hasg been published successfully';

       return back()->with(compact('status'));
    }

    function edit (Entry $entry){

        $this->authorize('update', $entry);

        return view('entries.edit', compact('entry'));
    }

    function update (Request $request, Entry $entry){

        // dd($request->all());
 
         $validateDate =  $request->validate([
 
         'title' => 'required|min:7|max:255|unique:entries,id,' . $entry->id,
         'content' => 'required|min:7|max:3000'
 
        ]);
 
        
        $entry->title =  $validateDate['title'];
        $entry->content =  $validateDate['content'];
        $entry->user_id =  auth()->id();
        $entry->save();
 
        $status = 'you Entry hasg been update successfully';
 
        return back()->with(compact('status'));
     }
 
}
