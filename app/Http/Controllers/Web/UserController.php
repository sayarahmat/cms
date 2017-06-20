<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
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
        return view('user.create');
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
                dd("berhasil simpan");
            }
            dd("gagal simpan");
        }
    }

    public function edit()
    {
        
    }
}
