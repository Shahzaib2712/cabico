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
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
						@foreach ($bestselling as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->bs_title}}</td>
                        <td><img src="{{ url('/public/bestselling') }}/{{$item->bs_image}}" width="50px" alt=""></td>
						<td>
							<a href="{{ url('/edit-bestselling')}}/{{$item->bs_id}}"><button class="btn btn-primary">Edit</button></a>
							<a href="{{ url('/delete-bestselling')}}/{{$item->bs_id}}"><button class="btn btn-danger">Delete</button></a>
						  </td>
                      </tr>
					  @endforeach
                      <a href="{{ url ('./add-bestselling')}}" class="btn btn-primary my-5">Add Best Selling</a>
                    </tbody>
                  </table>
				  </div>
            </div>
        </div>
    </div>

</div>




@endsection
