@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <h1 class="text-center my-4">All Products</h1>
    <div class="container">
      <a href="{{url('./add-pro')}}" class="btn btn-primary">Add Product</a>
        <div class="row">
			<div class="col-md-12 my-5">
				<div class="table-responsive table-striped">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Short Description</th>
                        <th>Long Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($pro as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->pro_name}}</th>
                        <td class="text-nowrap">{{$item->cat_name}}</td>
                        <td class="text-nowrap">{{$item->pro_short_desc}}</td>
                        <td class="text-nowrap">{{$item->pro_long_desc}}</td>
                        <td><img src="{{ url('/public/proinfo') }}/{{$item->pro_image}}" width="50px" alt=""></td>
                        <td class="text-nowrap">
                          @if ($item->pro_status == 1)
                    <span class="badge badge-primary">In Stock</span>

                    @else
                    <span class="badge badge-danger">Out Stock</span>

                  @endif
                        </td>
                        <td class="text-nowrap">
                          <a href="{{ url('/edit-pro')}}/{{$item->pro_id}}"><button class="btn btn-primary">Edit</button></a>
                          <a href="{{ url('/delete-pro')}}/{{$item->pro_id}}"><button class="btn btn-danger">Delete</button></a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
				</table>
            </div>
		</div>
        </div>
    </div>

</div>







@endsection
