<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class FeaturedController extends Controller
{
    public function Featured(){

        $featured = Db::select('select * from featured');

        return view('DashboardView.featured',compact('featured'));
    }

    public function Addfeatured(){

        $featured = Db::select('select * from featured');

        return view('DashboardView.add-featured',compact('featured'));
    }

    public function AddFeaturedStore(Request $req){

        $req->validate(
        [
            'f_title' => 'required | max:30',
            'f_image' => 'required | max:200'
        ]
        );

        $img = $req['f_image'];
        $imgname = $img->getClientOriginalName();
        $imgname = Str::random(8) . "_" . $imgname;
        $img->move('public/featured', $imgname);

        Db::insert('insert into featured(f_title,f_image)
        values(?,?)',

        [$req->f_title,$imgname]);

        return redirect('featured');
    }

    public function EditFeatured($id){

        $featured = Db::select('select * from featured where f_id = ? ', [$id]);

        if ($featured != null) {

            $featured = $featured[0];

        return view('DashboardView.edit-featured', compact('featured'));
        }
    }

    public function UpdateFeatured(Request $req, $id){
        $req->validate(
            [
                'f_title' => 'required | max:30',
                'f_image' => 'max:200'
            ]
            );
            $featured = Db::select('select * from featured where f_id = ? ', [$id]);

        if($featured != null){

            if ($req['f_image'] != null) {

                $img = $req['f_image'];
                $imgname = $img->getClientOriginalName();
                $imgname = Str::random(8) . "_" . $imgname;
                $img->move('public/featured/', $imgname);
                unlink('public/featured/' . $req['oldimg']);
            } else {
                $imgname = $req['oldimg'];
            };
            Db::update(
                'update featured set f_title = ? , f_image = ?  where f_id = ? ',

                [
                    $req['f_title'] , $imgname, $id
                ]
            );

            return redirect('/featured');
        }

        return redirect('/featured');
    }

    public function DeleteFeatured($id){

        $featured = Db::select('select * from featured where f_id = ?',[$id]);

        if($featured != null){

         unlink('public/featured/'.$featured[0]->f_image);

            Db::delete('delete from featured where f_id = ?',[$id]);
         return redirect('/featured');

        }

        return redirect('/featured');


     }
}
