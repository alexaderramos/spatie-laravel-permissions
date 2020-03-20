<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }


    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        $name= $request->get('name');
        $exits_role = Role::where('name',$request->get('name'))->count();
        if (!$exits_role){
            $role = Role::create(['name' => $name]);//guardamos el rol
            $role->syncPermissions($request->get('permissions')); // guardamos los permisos
            toast('Success Rol Creation: '.$role->name,'success'); //ok
            return redirect()->route('roles');
        }else{
            toast('Fail Creation "Is Duplicated": '.$name,'error'); //ok
            return redirect()->route('roles.create')->withInput();
        }
        //Alert::success('Success Title', 'Success Message'); //ok
        //alert()->success('Success Title', 'Success Message'); //ok
    }


    public function show($id)
    {
        //
    }


    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return  view('roles.edit', compact('role','permissions'));
    }


    public function update(Request $request, Role $role)
    {
        //dd($request->all());
        $role->update($request->except('permissions'));
        $role->syncPermissions($request->get('permissions'));

        toast('Success Updated: '.$role->name,'success'); //ok
        return redirect()->route('roles');
    }


    public function destroy($id)
    {
        //
    }
}
