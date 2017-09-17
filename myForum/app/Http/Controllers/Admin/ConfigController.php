<?php

namespace App\Http\Controllers\Admin;

use App\Models\Config;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Symfony\Component\Translation\Tests\Dumper\ConcreteFileDumper;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index
        $data = Config::orderBy('conf_order','asc')->get();

        //遍历所有记录
        foreach ($data as $k=>$v){
            switch ($v->field_type){
                case 'input':
                    $data[$k]['_content'] = ' <input class="form-control rounded" name="conf_content[]" style="width: 270px;" value="'.$v->conf_content.'" type="t">';
                    break;
                case 'radio':

                    $str ='';
                    $arr = explode(',',$v->field_value); //0=>1|开启   1=>0|关闭
//                    dd($arr);

                    //再次拆分
                    foreach ($arr as $m=>$n){     //0($m   键)=>1|开启($n  值)   1=>0|关闭
                        $brr = explode('|',$n);   //0=>1  1=>开启
//                        dd($brr);
                        $crr = ($data[$k]['conf_content'] == $brr[0]) ? 'checked ': '';
                        $str.= '<input type="radio" name="conf_content[]" '.$crr.'value="'.$brr[0].'">'.$brr[1];
                        $data[$k]['_content'] = $str;
                    }
                    break;
                case 'textarea':
                    $data[$k]['_content'] ='<textarea class="form-control" rows="6" placeholder="请输入说明..." name="conf_content[]" style="width: 400px;height: 80px;">'.$v->conf_content.'</textarea>';
                    break;
            }

        }
        return view('admin.config.index',compact('data'),['title'=>'配置列表']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add
        return view('admin.config.add',['title'=>'系统设置']);
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
        //判断表单输入是否合法
        $this->validate($request,[

            'conf_name' =>'required|max:12',
            'conf_title' =>'required|max:12',
            'conf_order' =>'numeric',
            'filed_value' =>'between:0,1',
        ],[
            'conf_name.required'=>'名字不能为空',
            'conf_name.max'=>'名字最大不能超过12位',
            'conf_title.required'=>'标题不能为空',
            'conf_title.max'=>'标题最大不能超过12位',
            'filed_value.numeric'=>'只能是0或1',
            'conf_order.numeric'=>'必须为数值类型,请重新输入',
        ]);

        $input = $request->except('_token');

        $res = Config::create($input);

        if ($res) {
            $this->putFile();
            return redirect('/admin/config')->with(['info.success'=>'添加成功']);
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
    public function edit(Request $request, $id)
    {
        //edit
        $data = Config::find($id);

//        dd($data);
        return view('admin.config.edit',compact('data'),['title'=>'配置更新']);

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
//        $input = Config::all();
        $input  = $request->except("_token","_method");
        $res =Config::find($id)->update($input);

        if ($res) {
            $this->putFile();
            return redirect('/admin/config')->with(['info.success'=>'更新成功']);
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
        $res= Config::find($id)->delete();

        if ($res) {
            $data = [
                'status' =>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'status' =>1,
                'msg' =>'删除失败'
            ];
        }
        return $data;
    }

    public function updateContent(Request $request)
    {
        $input = $request->all();
        foreach ($input['conf_id'] as $k=>$v){

            $conf = Config::find($v);
            $res = $conf->update(['conf_content'=>$input['conf_content'][$k]]);
        }
        if ($res) {
            $this->putFile();
            return redirect('/admin/config');
        }else{
            return back()->with(['info.error'=>'修改失败!']);
        }
    }

    //获取网站配置信息   写入conf下  web.php
    public function putFile()
    {
        //获取单列的值 list
        $conf = Config::lists('conf_content','conf_name')->toArray();
//        dd($conf);
        //数组字符串化
        $str ='<?php return '.var_export($conf,true).';';
        //将查询出来的数据写入文件
        file_put_contents(base_path().'/config/web.php',$str);
    }

    //排序处理
    public function order(Request $request)
    {
        $input = Input::except("_token");

//        dd($input);
        $res = Config::find($input['conf_id'])->update($input);

        if ($res) {
            $data=[
                'status' =>0,
                'msg' =>'修改成功'
            ];
        }else{
            $data =[
                'status' =>1,
                'msg'=>'修改失败'
            ];
        }
        return $data;

    }
}
