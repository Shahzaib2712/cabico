<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BestSellingController extends Controller
{
    public function BestSelling(){

        $bestselling = Db::select('select * from bestselling');

        return view('DashboardView.bestselling',compact('bestselling'));
    }

    public function AddBestSelling(){

        $bestselling = Db::select('select * from bestselling');

        return view('DashboardView.add-bestselling',compact('bestselling'));
    }

    public function AddBestSellingStore(Request $req){

        $req->validate(
        [
            'bs_title' => 'required | max:30',
            'bs_image' => 'required | max:200'
        ]
        );

        $img = $req['bs_image'];
        $imgname = $img->getClientOriginalName();
        $imgname = Str::random(8) . "_" . $imgname;
        $img->move('public/bestselling', $imgname);

        Db::insert('insert into bestselling(bs_title,bs_image)
        values(?,?)',

        [$req->bs_title,$imgname]);

        return redirect('bestselling');
    }

    public function EditBestSelling($id){

        $bestselling = Db::select('select * from bestselling where bs_id = ? ', [$id]);

        if ($bestselling != null) {

            $bestselling = $bestselling[0];

        return view('DashboardView.edit-bestselling', compact('bestselling'));
        }
    }

    public function UpdateBestSelling(Request $req, $id){
        $req->validate(
            [
                'bs_title' => 'required | max:30',
                'bs_image' => 'max:200'
            ]
            );
            $bestselling = Db::select('select * from bestselling where bs_id = ? ', [$id]);

        if($bestselling != null){

            if ($req['bs_image'] != null) {

                $img = $req['bs_image'];
                $imgname = $img->getClientOriginalName();
                $imgname = Str::random(8) . "_" . $imgname;
                $img->move('public/bestselling/', $imgname);
                unlink('public/bestselling/' . $req['oldimg']);
            } else {
                $imgname = $req['oldimg'];
            };
            Db::update(
                'update bestselling set bs_title = ? , bs_image = ?  where bs_id = ? ',

                [
                    $req['bs_title'] , $imgname, $id
                ]
            );

            return redirect('/bestselling');
        }

        return redirect('/bestselling');
    }

    public function DeleteBestSelling($id){

        $bestselling = Db::select('select * from bestselling where bs_id = ?',[$id]);

        if($bestselling != null){

         unlink('public/bestselling/'.$bestselling[0]->bs_image);

            Db::delete('delete from bestselling where bs_id = ?',[$id]);
         return redirect('/bestselling');

        }

        return redirect('/bestselling');


     }
}
