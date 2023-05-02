@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Edit Product</h2>
                <form action="{{url('/update-pro')}}/{{$pro->pro_id}}" enctype="multipart/form-data" method="POST" class="my-4">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" value="{{$pro->pro_name}}" placeholder="product Title" name="pro_name" id="">
                            @error('pro_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Category:</label>
                            <select class="form-select form-control form-select-lg" name="cat_id" id="">
                                <option value="{{$category[0]->cat_id}}">{{ $category[0]->cat_name }}</option>
                      @foreach ($category as $item)
                      <option value="{{$item->cat_id}}">{{$item->cat_name}}</option>
                      @endforeach
                              </select>
                              @error('cat_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="">Short Description</label>
                            <textarea name="pro_short_desc" placeholder="Short Description" class="form-control" id="" cols="30" rows="1">{{$pro->pro_short_desc}}</textarea>
                            @error('pro_short_desc')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Long Description</label>
                            <textarea name="pro_long_desc" placeholder="Short Description" class="form-control" id="" cols="30" rows="1">{{$pro->pro_long_desc}}</textarea>
                            @error('pro_long_desc')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="">Image:</label>
                            <input type="file" name="pro_image" id="" class="form-control " placeholder="" aria-describedby="helpId">
                    <br>
                    <img src="{{ url('/public/proinfo')}}/{{$pro->pro_image}}" width="50px" alt="">
                <input type="hidden"  name="oldimg" value="{{$pro->pro_image}}" >
							@error('pro_image')
               				<p class="text-danger">{{ $message }}</p>
           					@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Status:</label>
                            @if($pro->pro_status == '1')
            <div class="d-flex col-12">
                <div class="form-check">
                  <input class="form-check-input" checked type="radio" name="pro_status" id="" value="1">
                  <label class="form-check-label" for="">
                    Approve
                  </label>
                </div>
                <div class="form-check mx-3">
                  <input class="form-check-input" type="radio" name="pro_status" id="" value="0">
                  <label class="form-check-label text-danger" for="">
                    Pending
                  </label>
                </div>
                @else
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pro_status" id="" value="1">
                  <label class="form-check-label" for="">
                    Approve
                  </label>
                </div>
                <div class="form-check mx-3">
                  <input class="form-check-input" checked type="radio" name="pro_status" id="" value="0">
                  <label class="form-check-label text-danger" for="">
                    Pending
                  </label>
                </div>
                @endif
                        </div>
                    </div>
                        </div>
                        <button type="submit" class="btn btn-primary my-4">Add pro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
