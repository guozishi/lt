<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    // add
    public function add()
    {      
        return view('admin.advert.add',['title'=>'添加广告']);     
    }

    // insert
    public function insert(Request $request)
    {       
        // 表单验证
        // dd($request->all());
        $this->validate($request,[
            'atitle' => 'required',
            'adesc' => 'required',
            'apic' => 'required|image',
            ],[
            'atitle.required' => '广告名不能为空',
            'adesc.required' => '广告描述不能为空',
            'apic.required' => '广告图片不能为空',
            'apic.image' => '请上传一个图片文件',
            ]);
        
        $data = $request->except('_token');

        // 上传图片
        if($request->hasFile('apic'))
        {
            if($request->file('apic')->isValid())
            {   
                // 移动文件
                $ext = $request->file('apic')->getClientOriginalExtension();
                // 文件名称
                $filename = time().mt_rand(1000000,9999999).'.'.$ext;
                // 移动
                $request->file('apic')->move('./uploads',$filename);
                // 修改 apic 数据
                $data['apic'] = $filename;
            }
        }

        $data['remember_token'] = str_random(50);
        $time = date('Y-m-d H:i:s', time());
        $data['atime'] = $time;

        // dd($data);

        // 执行添加数据库
        $res = \DB::table('data_advert')->insert($data);
        if($res)
        {
            return redirect('/admin/advert/index') -> with(['info' => '添加成功']);
            // return back()->with(['info' => '添加成功']);

        }else
        {
            return back()->with(['info' => '添加失败']);
        }

    }

    // index
    public function index(Request $request)
    {

        // $data = $request->all();
        // dd($data);

        $data = \DB::table('data_advert')->where('atitle', 'like', '%'.$request->input('keywords').'%')->orderby('aid')->paginate($request->input('num', 10));

        // dd($data);
        
        return view('admin.advert.index',['data'=>$data,'page'=> $request->input('page'), 'title'=>'广告列表','request' => $request->all()]);
    }

    // edit
    public function edit(Request $request, $aid)
    {
        // dd($aid);
        $data = \DB::table('data_advert')->where("aid" , $aid)->first();
        return view('admin.advert.edit', ['data'=>$data, 'title'=> '广告编辑', 'page'=> $request->input('page')]);
    }

    // update
    public function update(Request $request)
    {
        // dd($request->all());
        // 表单验证
        $this->validate($request,[
            'atitle' => 'required',
            'adesc' => 'required',
            'apic' => 'required|image',
            ],[
            'atitle.required' => '广告名不能为空',
            'adesc.required' => '广告描述不能为空',
            'apic.required' => '广告图片不能为空',
            'apic.image' => '请上传一个图片文件',
            ]);

         $aid = $request->input('aid');
         $data = $request->except('_token', 'aid', 'page');


        // 上传图片
        if($request->hasFile('apic'))
        {
            if($request->file('apic')->isValid())
            {   
                // 查询图片路径
                $oldApic = \DB::table('data_advert')->where('aid', $aid)->first()->apic;
                // dd($oldApic);
                if(file_exists('./uploads/'.$oldApic))
                {
                    unlink('./uploads/'.$oldApic);
                }

                // 移动文件
                $ext = $request->file('apic')->getClientOriginalExtension();
                // 文件名称
                $filename = time().mt_rand(1000000,9999999).'.'.$ext;
                // 移动
                $request->file('apic')->move('./uploads',$filename);
                // 修改 apic 数据
                $data['apic'] = $filename;
               
            }
        }

        // 更新数据
        $res = \DB::table('data_advert')->where('aid', $aid)->update($data);
        if($res)
        {
            return redirect('/admin/advert/index?page='.$request->input('page')) -> with(['info' => '更新成功']);
        }else
        {
            return back()->with(['info' => '更新失败']);
        }
    }

    // delete
    public function delete($aid)
    {
        $res = \DB::table('data_advert')->where('aid', $aid)->delete();
        if($res)
        {
            return redirect('/admin/advert/index')->with(['info'=>'删除成功']);
        }else
        {
            return back()->with(['info' => '删除失败']);
        }
    }








    public function ajaxChangename(Request $request)
    {
        $aid = $request->input('aid');
        $value = $request->input('value');

        $res = \DB::table('data_advert')->where('atitle', $value)->first();
        if($res)
        {
            return response()->json(0); 
        }else
        {
            $res1 = \DB::table('data_advert')->where('aid', $aid)->update(['atitle'=>$value]);
            if($res1)
            {
                return response()->json(1); 
            }else
            {
                return response()->json(2); 
            }
        }

    }

}
