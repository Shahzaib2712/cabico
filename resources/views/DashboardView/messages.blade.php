@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <h1 class="text-center my-4">Messages From Users</h1>
      <div class="container">
          <div class="row">
              <div class="col-md-12 my-5">
                  <div class="table-responsive table-striped">
                      <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Contact</th>
                          <th>Email</th>
                          <th>Date</th>
                          <th>Message</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($messages as $message)

                          <tr>
                              <td class="text-nowrap">{{$message->user_name}}</td>
                              <td class="text-nowrap">{{$message->user_contact}}</td>
                              <td class="text-nowrap">{{$message->user_email}}</td>
                              <td class="text-nowrap">{{$message->user_date}}</td>
                              <td class="text-nowrap">{{$message->user_message}}</td>
                              <td class="text-nowrap">
                                <a href="{{ url('/delete-messages')}}/{{$message->user_id}}"><button class="btn btn-danger">Delete</button></a>
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
