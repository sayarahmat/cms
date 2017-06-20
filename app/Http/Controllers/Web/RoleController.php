<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Support\Facades\Input;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view('role.index')->withRole($role);
    }

    public function create()
    {
        return view('role.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required'
        ));

        if(Role::where('name','=',Input::get('name'))->count() > 0 ){
            dd("role name exist");
        }else{
            $role = new Role;
            $role->name = $request->name;
            $role->display_name = $request->display_name;
            $role->description = $request->description;

            if($role->save()){
                dd("berhasil simpan role");
            }
            dd("gagal simpan role");
        }
    }
}
