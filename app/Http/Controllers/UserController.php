<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Models\User;

class UserController extends Controller
{
    public function _contruct()
    {
        $this->middleware('user');

    }

    public function index(Request $request)
    {
        $user = user::where('level', 'admin')->paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $user = Admin::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('user.index', compact('user'));
    }//end method

    public function create()
    {
        return view('user.create');
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
            return redirect()->route('user.create')->withInput()->withErrors($validasi);
        }


        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('user.index');
    }//end method


    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('user.index');
    }//end method


    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('User.show',compact('user'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit',compact('user'));
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
       return redirect()->route('user.index');
    }

}
