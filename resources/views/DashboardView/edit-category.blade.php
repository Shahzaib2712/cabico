@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Edit Category</h2>
                <form action="{{url('/update-category')}}/{{$category[0]->cat_id}}" class="my-4" method="post">
					@csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Category:</label>
                            <input type="text" class="form-control" placeholder="Enter Category" name="cat_name" value="{{$category[0]->cat_name}}" id="">
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4" type="submit">Update Category</button>
                </form>
            </div>
        </div>
    </div>

</div>




@endsection
