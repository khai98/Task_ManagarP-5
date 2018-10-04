<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreatCustumerRequest;
use App\Model\TaskModel;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class TaskController extends Controller
{

    public function index()
    {
        $lists = TaskModel::all();
        return view('index', ['users' => $lists]);

    }

    public function delete( $id)
    {

        $delete = TaskModel::find($id);
        $delete-> delete();
        return redirect()->route('index');

    }

    public function create()
    {
        return view('addview');

    }

    public function store(CreatCustumerRequest $request)
    {
        $create = new TaskModel();
        $create ->name = $request->input('name');
        $create ->phone = $request->input('phone');
        $create ->email = $request->input('email');
        $create ->address = $request->input('address');
        $create ->save();
        $validated = $request->validated();
        return redirect()->route('index');
    }


    public function edit($id)
    {

        $task = TaskModel::find($id);

        return view('update', compact('task'));
    }


    public function update(Request $request,$id)
    {

        $update = TaskModel::find($id);
        $update-> name =  $request->input('name');
        $update-> phone = $request->input('phone');
        $update-> email = $request->input( 'email');
        $update-> address = $request->input( 'address');

        $update->save();
        return redirect()->route('index');
    }

}
