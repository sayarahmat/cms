<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index')->withUser($user);
    }

    public function create()
    {
        $role = Role::all();
        return view('user.create')->withRoles($role);
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'nama' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ));

        if(User::where('email', '=', Input::get('email'))->count() > 0 )
        {
            return "email exist";
        }else{
            $user = new User;
            $user->email = $request->email;
            $user->name = $request->nama;
            $user->password = bcrypt($request->password);

            if($user->save())
            {
                if($user->attachRole($request->role))
                {
                    return redirect('user');
                }
                return redirect('user');
            }
            dd("gagal simpan");
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        $userRole = '';
        foreach ($user->roles as $role) {
            $userRole = $role->id;
        }
        $roles = Role::all();
        return view('user.edit')
            ->withUser($user)
            ->withRoles($roles)
            ->withUserrole($userRole);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $this->validate($request, array(
            'name' => 'required|max:255'
        ));
        $user->name = $request->input('name');
        foreach($user->roles as $role)
        {
            $user->detachRole($role->id);
        }
        if($user->save())
        {
            if($user->attachRole($request->role))
            {
                return redirect('user');
            }
            return redirect('user');
        }
        return "gagal";
    }

    public function delete($id)
    {
        $user = User::find($id);
        if($user->delete())
        {
            return redirect('user');
        }
        return "gagal";
    }
}
