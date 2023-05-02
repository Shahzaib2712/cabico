<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class NewArrivalsController extends Controller
{
    public function NewArrivals(){

        $newarrivals = Db::select('select * from newarrivals');

        return view('DashboardView.newarrivals',compact('newarrivals'));
    }

    public function AddNewArrivals(){

        $newarrivals = Db::select('select * from newarrivals');

        return view('DashboardView.add-newarrivals',compact('newarrivals'));
    }

    public function AddNewArrivalsStore(Request $req){

        $req->validate(
        [
            'na_title' => 'required | max:30',
            'na_image' => 'required | max:200'
        ]
        );

        $img = $req['na_image'];
        $imgname = $img->getClientOriginalName();
        $imgname = Str::random(8) . "_" . $imgname;
        $img->move('public/newarrivals', $imgname);

        Db::insert('insert into newarrivals(na_title,na_image)
        values(?,?)',

        [$req->na_title,$imgname]);

        return redirect('newarrivals');
    }

    public function EditNewArrivals($id){

        $newarrivals = Db::select('select * from newarrivals where na_id = ? ', [$id]);

        if ($newarrivals != null) {

            $newarrivals = $newarrivals[0];

        return view('DashboardView.edit-newarrivals', compact('newarrivals'));
        }
    }

    public function UpdateNewArrivals(Request $req, $id){
        $req->validate(
            [
                'na_title' => 'required | max:30',
                'na_image' => 'max:200'
            ]
            );
            $newarrivals = Db::select('select * from newarrivals where na_id = ? ', [$id]);

        if($newarrivals != null){

            if ($req['na_image'] != null) {

                $img = $req['na_image'];
                $imgname = $img->getClientOriginalName();
                $imgname = Str::random(8) . "_" . $imgname;
                $img->move('public/newarrivals/', $imgname);
                unlink('public/newarrivals/' . $req['oldimg']);
            } else {
                $imgname = $req['oldimg'];
            };
            Db::update(
                'update newarrivals set na_title = ? , na_image = ?  where na_id = ? ',

                [
                    $req['na_title'] , $imgname, $id
                ]
            );

            return redirect('/newarrivals');
        }

        return redirect('/newarrivals');
    }

    public function DeleteNewArrivals($id){

        $newarrivals = Db::select('select * from newarrivals where na_id = ?',[$id]);

        if($newarrivals != null){

         unlink('public/newarrivals/'.$newarrivals[0]->na_image);

            Db::delete('delete from newarrivals where na_id = ?',[$id]);
         return redirect('/newarrivals');

        }

        return redirect('/newarrivals');


     }
}
