@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Edit Top Rated</h2>
                <form action="{{url('/update-toprated')}}/{{$toprated->tr_id}}" enctype="multipart/form-data" class="my-4" method="post">
					@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Title:</label>
                            <input type="text" class="form-control" value="{{$toprated->tr_title}}" placeholder="Product Title" name="tr_title" id="">
                            @error('tr_title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="">Image:</label>
                            <input type="file" name="tr_image" id="" class="form-control " placeholder="" aria-describedby="helpId">
                    <br>
                    <img src="{{ url('/public/toprated')}}/{{$toprated->tr_image}}" width="50px" alt="">
                <input type="hidden"  name="oldimg" value="{{$toprated->tr_image}}" >
							@error('tr_image')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4" type="submit">Update Top Rated</button>
                </form>
            </div>
        </div>
    </div>

</div>




@endsection
