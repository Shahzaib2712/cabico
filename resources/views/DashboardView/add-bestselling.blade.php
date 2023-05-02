@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Best Selling</h2>
                <form action="{{url('/add-bestselling/store')}}" method="post" class="my-4" enctype="multipart/form-data">
					@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Title:</label>
                            <input type="text" value="{{old('bs_title')}}" class="form-control" placeholder="Product Title" name="bs_title" id="">
							@error('bs_title')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Image:</label>
                            <input type="file" class="form-control" value="{{old('bs_image')}}" name="bs_image" id="">
                            @error('bs_image')
                               <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4" >Add Best Selling</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
