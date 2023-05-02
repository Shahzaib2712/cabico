@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
				<div class="table-responsive table-striped">
					<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Category</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
						@foreach ($category as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->cat_name}}</td>
						<td>
							<a href="{{ url('/edit-category')}}/{{$item->cat_id}}"><button class="btn btn-primary">Edit</button></a>
							<a href="{{ url('/delete-category')}}/{{$item->cat_id}}"><button class="btn btn-danger">Delete</button></a>
						  </td>
                      </tr>
					  @endforeach
                      <a href="{{ url ('./add-category')}}" class="btn btn-primary my-5">Add Category</a>
                    </tbody>
                  </table>
				  </div>
            </div>
        </div>
    </div>

</div>




@endsection
