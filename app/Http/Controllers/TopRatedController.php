<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class TopRatedController extends Controller
{
    public function TopRated(){

        $toprated = Db::select('select * from toprated');

        return view('DashboardView.toprated',compact('toprated'));
    }

    public function AddTopRated(){

        $toprated = Db::select('select * from toprated');

        return view('DashboardView.add-toprated',compact('toprated'));
    }

    public function AddTopRatedStore(Request $req){

        $req->validate(
        [
            'tr_title' => 'required | max:30',
            'tr_image' => 'required | max:200'
        ]
        );

        $img = $req['tr_image'];
        $imgname = $img->getClientOriginalName();
        $imgname = Str::random(8) . "_" . $imgname;
        $img->move('public/toprated', $imgname);

        Db::insert('insert into toprated(tr_title,tr_image)
        values(?,?)',

        [$req->tr_title,$imgname]);

        return redirect('toprated');
    }

    public function EditTopRated($id){

        $toprated = Db::select('select * from toprated where tr_id = ? ', [$id]);

        if ($toprated != null) {

            $toprated = $toprated[0];

        return view('DashboardView.edit-toprated', compact('toprated'));
        }
    }

    public function UpdateTopRated(Request $req, $id){
        $req->validate(
            [
                'tr_title' => 'required | max:30',
                'tr_image' => 'max:200'
            ]
            );
            $toprated = Db::select('select * from toprated where tr_id = ? ', [$id]);

        if($toprated != null){

            if ($req['tr_image'] != null) {

                $img = $req['tr_image'];
                $imgname = $img->getClientOriginalName();
                $imgname = Str::random(8) . "_" . $imgname;
                $img->move('public/toprated/', $imgname);
                unlink('public/toprated/' . $req['oldimg']);
            } else {
                $imgname = $req['oldimg'];
            };
            Db::update(
                'update toprated set tr_title = ? , tr_image = ?  where tr_id = ? ',

                [
                    $req['tr_title'] , $imgname, $id
                ]
            );

            return redirect('/toprated');
        }

        return redirect('/toprated');
    }

    public function DeleteTopRated($id){

        $toprated = Db::select('select * from toprated where tr_id = ?',[$id]);

        if($toprated != null){

         unlink('public/toprated/'.$toprated[0]->tr_image);

            Db::delete('delete from toprated where tr_id = ?',[$id]);
         return redirect('/toprated');

        }

        return redirect('/toprated');


     }
}
