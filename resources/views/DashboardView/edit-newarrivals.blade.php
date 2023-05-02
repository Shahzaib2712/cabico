@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Edit New Arrivals</h2>
                <form action="{{url('/update-newarrivals')}}/{{$newarrivals->na_id}}" enctype="multipart/form-data" class="my-4" method="post">
					@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Title:</label>
                            <input type="text" class="form-control" value="{{$newarrivals->na_title}}" placeholder="Product Title" name="na_title" id="">
                            @error('na_title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="">Image:</label>
                            <input type="file" name="na_image" id="" class="form-control " placeholder="" aria-describedby="helpId">
                    <br>
                    <img src="{{ url('/public/newarrivals')}}/{{$newarrivals->na_image}}" width="50px" alt="">
                <input type="hidden"  name="oldimg" value="{{$newarrivals->na_image}}" >
							@error('na_image')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4" type="submit">Update New Arrivals</button>
                </form>
            </div>
        </div>
    </div>

</div>




@endsection
