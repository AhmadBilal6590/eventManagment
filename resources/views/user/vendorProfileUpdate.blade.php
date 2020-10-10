@extends('layouts.app')

@section('content')

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
        Vendor
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.html">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="active ">
            <a href="./user.html">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <div class="content">
        <div class="row justify-content-center">
        <!-- <form method="POST" action="{{ route('register') }}">
                        @csrf -->
          <!-- <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title">Chet Faker</h5>
                  </a>
                  <p class="description">
                    @chetfaker
                  </p>
                </div>
                <p class="description text-center">
                  "I like the way you work it <br>
                  No diggity <br>
                  I wanna bag it up"
                </p>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                      <h5>12<br><small>Files</small></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <h5>2GB<br><small>Used</small></h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                      <h5>24,6$<br><small>Spent</small></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div> -->
          <!-- </form> -->
         
                        
          <div class="col-md-8">
          <form method="post" action="{{URL::to('vendor/'.$vendor->id)}}">
          @csrf
          <input type="hidden" name="_method"  value="PATCH" />
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
            
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="name" class="form-control" value="{{$vendor->name}}"placeholder="Username" >
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email"  name="email" class="form-control" value="{{$vendor->email}}" placeholder="Email">
                      </div>
                    </div>
                    <!-- <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <input type="hidden"  name="user_role" class="form-control" value="{{$vendor->user_role}}" >
                      </div>
                    </div> -->
                  </div>
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Pssword</label>
                        <input type="password" name="password" class="form-control" value="{{$vendor->password}}" placeholder="Password" >
                      </div>
                    </div>
                  </div>
                  <div class="form-group row  ">
                        <label class="col-md-2 col-form-label text-md-right">User type</label>
                        <select  name="user_role"  class="text-white bg-primary mb-2 ml-3 col-md-4">
                            <option value="vendor">vendor</option>
                           <option value="user">user</option>
                        </select>
                    </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            </form>
          </div>
         
        </div>
      </div>
    </div>
  </div>

@endsection