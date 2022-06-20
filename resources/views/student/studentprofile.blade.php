@extends('basics.sturoom')
@section('content')

        <!-- Main -->
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active" href="{{route('studentprofile',$student->id)}}">{{__('room.profile')}}</a>
            <a class="nav-link" href="{{route('studentpassword',$student->id)}}">{{__('room.security')}}</a>
            <a class="nav-link" href="{{route('notification',$student->id)}}">{{__('room.notifications')}}</a>
        </nav>

        <hr class="mt-0 mb-4">

        <div class="row">
            <div class="col-xl-4 col-md-4 ">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">{{__('room.profile_img')}}</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-5" src="{{asset($student->profile->image)}}" alt="">
                        <!-- Profile picture upload button-->
                        <form action="{{route('studentupdate',$student->id)}}" method="POST"  enctype="multipart/form-data"> 
                     @csrf
                        <input type="file" id="image_input" name="image"value="{{$student->profile->image}}" class="upload">
                        <div id="display_image"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><h3>{{__('room.account_details')}}</h3></div>
                    <div class="card-body">
                       
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">{{__('room.username')}}</label>
                                <input class="form-control" id="inputUsername" name="name" value="{{$student->name}}"type="text" placeholder="Enter your username">
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">{{__('room.phone')}}</label>
                                    <input class="form-control" id="inputPhone" type="text" name="phone" value="{{$student->profile->studentphone}}" placeholder="+20-123-456-789">
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="mb-3 col-md-6">
                                    <label class="small mb-1" for="inputEmailAddress">{{__('room.email')}}</label>
                                    <input class="form-control" id="inputEmailAddress" type="email"   name="email" value="{{$student->email}}" onkeypress="return false;">
                                </div>
                            </div>
                            <!-- Form Group (Specialization)-->
                            <div class="mb-3 col-md-12">
                                <label class="small mb-1" for="inputEmailAddress">{{__('room.acadmic_year')}}</label>
                                <input class="form-control" id="inputEmailAddress" type="text" name="acadmicyear"  value="{{$student->acadmicyear}}">
                            </div>
                            <!-- Form Row-->
                            <div class=" col-mb-3">
                                <!-- Form Group (country)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">{{__('room.country')}}</label>
                                    <input class="form-control" id="inputEmailAddress" type="text" name="country"  value="{{$student->profile->country}}">
                                </div>
                             
                             
                                   
                            
                            <!-- Save changes button-->
                            <button class="btn btn-success" type="submit">{{__('room.save')}}</button>
                            
                            <a class="btn btn-primary" type="button" href="{{route('studentroom')}}">{{__('room.back')}}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

