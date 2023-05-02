@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Product</h2>
                <form action="{{url('/add-pro/store')}}" method="post" enctype="multipart/form-data" class="my-4">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" value="{{old('pro_name')}}" placeholder="Product Title" name="pro_name" id="">
                            @error('pro_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="">Category:</label>
                            <select class="form-select form-control form-select-lg" name="cat_id" id="">
                                <option value="{{old('cat_id')}}" selected disabled>Select Product Category</option>
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
                            <textarea name="pro_short_desc" placeholder="Short Description" class="form-control" id="" cols="30" rows="1">{{old('pro_short_desc')}}</textarea>
                            @error('pro_short_desc')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Long Description</label>
                            <textarea name="pro_long_desc" placeholder="Long Description" class="form-control" id="" cols="30" rows="1">{{old('pro_long_desc')}}</textarea>
                            @error('pro_long_desc')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                    </div>
                    <div class="row my-3">

                        <div class="col-md-6">
                            <label for="">Image:</label>
                            <input type="file" class="form-control" value="{{old('pro_image')}}" name="pro_image" id="">
                            @error('pro_image')
                               <p class="text-danger">{{ $message }}</p>
                               @enderror
                            </div>
                                <div class="col-md-6 my-4">
                                    <div class="d-flex col-12">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="pro_status" id="" value="1">
                                          <label class="form-check-label" for="">
                                            In Stock
                                          </label>
                                        </div>
                                        <div class="form-check mx-3">
                                          <input class="form-check-input" type="radio" name="pro_status" id="" value="0">
                                          <label class="form-check-label text-danger" for="">
                                            Out Stock
                                          </label>
                                        </div>
                                      </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary my-4">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
