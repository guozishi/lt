<?php

namespace App\Http\Controllers\Admin;

use App\Models\Roles;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index
        $data = Roles::orderBy('role_id','asc')->get();
        return view('admin.roles.index',['title'=>'角色列表'],compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add
        return view('admin.roles.add',['title'=>'角色添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert
        $this->validate($request,[

            'role_name' =>'required',
            'role_desc' =>'required',
        ],[
            'role_name.required'=>'角色名称不能为空',
            'role_desc.required'=>'角色描述不能为空',
        ]);
        $data = $request->except("_token");

        $res = Roles::create($data);

        if ($res) {

            return redirect('/admin/roles')->with(['info.success'=>'添加成功']);
        }else{
            return back()->with(['info.error'=>'添加失败!']);
        }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit
        $data = Roles::find($id);
        return view('admin.roles.edit',['title'=>'角色编辑'],compact('data'));
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
        //update
        $input = $request->except("_token","_method");

        $res = Roles::find($id)->update($input);

        if ($res) {

            return redirect('/admin/roles')->with(['info.success'=>'更新成功']);
        }else{
            return back()->with(['info.error'=>'更新失败!']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        $res = Roles::find($id)->delete();

        if ($res) {
            $data = [
                'data'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'data'=>1,
                'msg'=>'删除成功'
            ];
        }
        return $data;
    }
}
