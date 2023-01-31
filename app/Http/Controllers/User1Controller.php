<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Arr;
Use App\Models\User;
use Validator;
use Illuminate\Support\Facades\DB;

class User1Controller extends Controller
{
    public function _contruct()
    {
        $this->middleware('user');

    }

    public function index(Request $request)
    {
        $user = user::where('level', 'user')->paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $user = User1::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('user1.index', compact('user'));
    }//end method

    public function create()
    {
        return view('user1.create');
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data,[
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'username'=>'required|max:255',
            'level'=>'required|max:255',
            'password'=>'required|min:8',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('user1.create')->withInput()->withErrors($validasi);
        }



        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('user1.index');
    }//end method


    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('user1.index');
    }//end method


    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user1.show',compact('user'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user1.edit',compact('user'));
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
    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->level = $request->level;
    $user->save();

       return redirect()->route('user1.index');
    }

}
