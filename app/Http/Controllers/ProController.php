<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProController extends Controller
{
    public function Pro(){

        $pro = Db::select('select * from pro inner join category on category.cat_id = pro.cat_id');
        return view('DashboardView.pro', compact('pro'));
    }

    public function AddPro(){

        $pro = Db::select('select * from pro');
        $category = Db::select('select * from category');

        return view('DashboardView.add-pro', compact('pro','category'));
    }


    public function AddProStore(Request $req){

        $req->validate(
        [
            'pro_name' => 'required | max:50',
            'cat_id' => 'required',
            'pro_short_desc' => 'required | max:200',
            'pro_long_desc' => 'required | max:2000',
            'pro_image' => 'required | max:200',
            'pro_status' => 'required'
        ]
        );

        $img = $req['pro_image'];
        $imgname = $img->getClientOriginalName();
        $imgname = Str::random(8) . "_" . $imgname;
        $img->move('public/proinfo', $imgname);

        Db::insert('insert into pro(pro_name,cat_id,
        pro_short_desc,pro_long_desc,pro_image,pro_status)
        values(?,?,?,?,?,?)',

        [$req->pro_name, $req->cat_id, $req->pro_short_desc, $req->pro_long_desc, $imgname,
         $req->pro_status]);

        return redirect('pro');
    }

     public function EditPro($id){

        $pro = Db::select('select * from pro where pro_id = ? ', [$id]);
        $category = Db::select('select * from category');

        if ($pro != null) {

            $pro = $pro[0];

        return view('DashboardView.edit-pro', compact('pro','category'));
        }
    }

    public function UpdatePro(Request $req, $id){
        $req->validate(
            [
                'pro_name' => 'required | max:50',
                'cat_id' => 'required',
                'pro_short_desc' => 'required | max:200',
                'pro_long_desc' => 'required | max:2000',
                'pro_image' => 'max:200',
                'pro_status' => 'required'
            ]
            );
            $pro = Db::select('select * from pro where pro_id = ? ', [$id]);

        if($pro != null){

            if ($req['pro_image'] != null) {

                $img = $req['pro_image'];
                $imgname = $img->getClientOriginalName();
                $imgname = Str::random(8) . "_" . $imgname;
                $img->move('public/proinfo/', $imgname);
                unlink('public/proinfo/' . $req['oldimg']);
            } else {
                $imgname = $req['oldimg'];
            };
            Db::update(
                'update pro set pro_name = ? , cat_id = ? ,pro_short_desc = ? ,
                pro_long_desc = ? , pro_image = ? ,pro_status  = ?  where pro_id = ? ',

                [
                    $req['pro_name'], $req['cat_id'], $req['pro_short_desc'],
                    $req['pro_long_desc'], $imgname, $req['pro_status'], $id
                ]
            );

            return redirect('/pro');
        }

        return redirect('/pro');
    }

      public function DeletePro($id){

        $pro = Db::select('select * from pro where pro_id = ?',[$id]);

        if($pro != null){

         unlink('public/proinfo/'.$pro[0]->pro_image);

            Db::delete('delete from pro where pro_id = ?',[$id]);
         return redirect('/pro');

        }

        return redirect('/pro');


     }

}
