<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function Category(){

        $category = Db::select('select * from category');

        return view('DashboardView.category',compact('category'));
    }

    public function AddCategory(){

        $category = Db::select('select * from category');

        return view('DashboardView.add-category',compact('category'));
    }
    public function AddCategoryStore(Request $req){
        $req->validate(
            [
                'cat_name' => 'required | max:30',
            ]
            );

        Db::insert('insert into category(cat_name) values(?)',[$req->cat_name]);
        return redirect('/category');
    }

    public function EditCategory($id){


        $category = Db::select('select * from category where cat_id = ?',[$id]);

        if($category != null){


            return view('DashboardView.edit-category',compact('category'));
        }

        return redirect('/category');



    }
    public function UpdateCategory($id,Request $req){



        $category = Db::select('select * from category where cat_id = ?',[$id]);

        if($category != null){

            Db::update('update category set cat_name = ? where cat_id = ?',[$req['cat_name'],$id]);

        return redirect('/category');

        }

        return redirect('/category');


    }

    public function DeleteCategory($id){


        $category = Db::select('select * from category where cat_id = ?',[$id]);

        if($category != null){

            Db::delete('delete from category where cat_id = ?',[$id]);

        return redirect('/category');

        }

        return redirect('/category');


    }
}
