<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('role.role-index',['roles'=> $roles]);
    }

    public function create()
    {
        return view('role.role-create');
    }

    public function store(Request $request)
    {
        Role::create($request->all());
        return redirect('/roles');   
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

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('role.role-edit', ['role' => $role]);
    }

    public function update(Request $request, $id)
    {
        Role::findOrFail($id)->update($request->all());
        return redirect('/roles');
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
    }
}
