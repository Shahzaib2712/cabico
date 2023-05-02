@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Featured</h2>
                <form action="{{url('/add-featured/store')}}" method="post" class="my-4" enctype="multipart/form-data">
					@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Title:</label>
                            <input type="text" value="{{old('f_title')}}" class="form-control" placeholder="Product Title" name="f_title" id="">
							@error('f_title')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Image:</label>
                            <input type="file" class="form-control" value="{{old('f_image')}}" name="f_image" id="">
                            @error('f_image')
                               <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4" >Add Featured</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
