<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Support\Facades\Input;

class PermissionController extends Controller
{
    public function index()
    {
        $permission = Permission::all();
        return view('permission.index')->withPermission($permission);
    }

    public function create()
    {
        return view('permission.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required'
        ));

        if(Permission::where('name','=',Input::get('name'))->count() > 0 ){
            dd("permission name exist");
        }else{
            $permission = new Permission;
            $permission->name = $request->name;
            $permission->display_name = $request->display_name;
            $permission->description = $request->description;

            if($permission->save()){
                dd("berhasil simpan permission");
            }
            dd("gagal simpan permission");
        }
    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return view('permission.edit')->withPermission($permission);
    }

    public function update(Request $request, $id)
    {
        $permission = Permission::find($id);
        $this->validate($request, array(
            'name' => 'required'
        ));

        if(Permission::where('name','=',Input::get('name'))->count() > 0 ){
            dd("permission name exist");
        }else{
            $permission->name = $request->name;
            $permission->display_name = $request->display_name;
            $permission->description = $request->description;

            if($permission->save()){
                dd("berhasil update permission");
            }
            dd("gagal update permission");
        }
    }

    public function delete($id)
    {
        $permission = permission::whereId($id)->delete();
        if($permission)
        {
            return redirect('permission');
        }
        dd('gagal delete');
    }
}
