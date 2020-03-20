<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public  function  create(){
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function edit(User $user){
        $roles = Role::all();
        return view('users.edit', compact('user','roles'));
    }

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







    public function update(Request $request, User $user)
    {
        $user->update($request->except('role'));
        $user->syncRoles($request->get('role'));
        toast('Success Update: '.$user->name,'success'); //ok
        return redirect()->route('users');
    }

}
