<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Notice;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::where('id', '>=', 1)->paginate(9999999999);              
        return view('notice.allNotice', ['notices' => $notices]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('notice.addNotice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
        'name' => 'required|max:255',
        'input_file' => 'required',
    ]);


        $notice = new Notice();
        $notice['name'] = $request->input('name');

        if ($request->hasFile('input_file')) {

            $file = array('input_file' => Input::file('input_file'));
            $destinationPath = 'file/'; // upload path
            $extension = Input::file('input_file')->getClientOriginalExtension(); 
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            Input::file('input_file')->move($destinationPath, $fileName);
            $notice->input_file = $fileName;
        }else{
            echo "Please Add Your File!";
        }
        $notice->save();
        \Session::flash('flash_message','Notice successfully added.');
        return redirect(route('addNotice'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $notice = Notice::findOrFail($id);
        return view('notice.editNotice', ['id' => $id, 'notice' => $notice]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=0)
    {
        //
        $id = $request->input("id");
        $notice = Notice::find($id);
        $notice->name = $request->input('name');
        $notice->input_file = $request->input('input_file');
        
        $notice->save();
         
        return redirect(route('allNotice'));
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
        $notice = Notice::find($id);
        $notice->delete();
        \Session::flash('flash_message','Notice successfully Deleted.');
        return redirect(route('allNotice'));
    }
}
