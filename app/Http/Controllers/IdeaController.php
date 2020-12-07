<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Idea;
use App\Category;
use App\User;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category = Category::All();
        return view('idea/createIdea', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // return $request;
        if ($request->hasFile('image')) {
            //  Let's do everything 
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'ideaname' => 'required|string|max:50',
                    'description' => 'required|string|min:10',
                    'qa' => 'required|string|min:10',
                    'goal' => 'required|numeric',
                    'category' => 'required',
                    'tierAmount' => 'required|numeric',
                    'dateDeadline' => 'required|date_format:Y-m-d',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public', $validated['ideaname'].".".$extension);
                $url = Storage::url($validated['ideaname'].".".$extension);
                $idea = Idea::create([
                   'categoryid' => $request->category,
                   'userid' => $request->user_id,
                   'ideaname' => $request->ideaname,
                   'ideadescription' => $request->description,
                   'qa' => $request->qa,
                   'ideatarget' => $request->goal,
                   'tierAmount' => $request->tierAmount,
                   'ideadeadline' => $request->dateDeadline,
                   'ideaimg' => $url,
                   'currentearning' => 0,
                   'donatorcount' => 0
                ]);
                // Session::flash('success', "Success!");
                return redirect('/home');
            }else{
                return $request;
            }
        }
        else{
            return $request;
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $idea = Idea::Find($id);

        //CACULATE FOR PROGRESSING BAR
        $result = round(($idea->currentearning/$idea->ideatarget) * 100);

        return view('idea/showIdea', ['idea' => $idea, 'result' => $result]);
    }

    /**
     * Display donate page.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showDonate($id){
        $idea = Idea::Find($id);
        return view('donate/donate', ['idea' => $idea]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
