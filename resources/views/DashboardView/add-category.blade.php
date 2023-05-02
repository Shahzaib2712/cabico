@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Category</h2>
                <form action="{{url('/add-category/store')}}" method="post" class="my-4">
					@csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Category:</label>
                            <input type="text" value="{{old('cat_name')}}" class="form-control" placeholder="Enter Category" name="cat_name" id="">
							@error('cat_name')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4" >Add New Category</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
