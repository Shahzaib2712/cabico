@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Edit Best Selling</h2>
                <form action="{{url('/update-bestselling')}}/{{$bestselling->bs_id}}" enctype="multipart/form-data" class="my-4" method="post">
					@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Title:</label>
                            <input type="text" class="form-control" value="{{$bestselling->bs_title}}" placeholder="Product Title" name="bs_title" id="">
                            @error('bs_title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="">Image:</label>
                            <input type="file" name="bs_image" id="" class="form-control " placeholder="" aria-describedby="helpId">
                    <br>
                    <img src="{{ url('/public/bestselling')}}/{{$bestselling->bs_image}}" width="50px" alt="">
                <input type="hidden"  name="oldimg" value="{{$bestselling->bs_image}}" >
							@error('bs_image')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4" type="submit">Update Best Selling</button>
                </form>
            </div>
        </div>
    </div>

</div>




@endsection
