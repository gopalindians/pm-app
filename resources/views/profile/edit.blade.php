@extends('layouts.app')

@section('title', 'ff')

@section('content')
    <div class="container">
        <section class="my_profile">
            <div class="container">
                <div class="row">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/profile/edit/{{$user[0]->id}}" method="post" enctype="multipart/form-data">
                        <div class="col-md-8 offset-md-2">
                            <div class="profile_head">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="editProfile_img">
                                            @php
                                                if($user[0]->profile_image == ''){
                                                  @endphp
                                                 <img src="{{\App\CH::getAssetUrl('/images/default_img.jpg')}}"
                                                 class="img-thumbnail" alt=""/>
                                          
                                                     @php 
                                                 } else{
                                                     @endphp
                                                    
                                                   <img src="{{ URL::asset('storage/'.$user[0]->profile_image) }}"
                                                 class="img-thumbnail" alt=""/>
                                                    @php 
                                                     }
                                                  @endphp
                                               
                                            <p class="file_btn">
                                                <label class="btn-bs-file btn btn-primary">
                                                    Upload Image
                                                    <input type="file" name="profile_image" id="fileToUpload"
                                                           accept="image/*"/>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="editPersonal_info">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="usr">Name:</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                       value="{{$user[0]->name??old('name')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="usr">Email:</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                       value="{{$user[0]->email??old('email')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="usr">Date of birth:</label>
                                                <input type="text" class="form-control" placeholder="" name="dob" id="dob" value="{{$user[0]->dob??old('dob')}}" aria-describedby="sizing-addon2" >
                                            </div>
                                            <div class="form-group">
                                                <label for="usr">Phone:</label>
                                                <input type="tel" class="form-control" name="phone" id="phone"
                                                       value="{{$user[0]->phone??old('phone')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="comment">Bio</label>
                                                <textarea class="form-control" rows="2" name="position" id="position"
                                                          value="">{{$user[0]->position??old('position')}}</textarea>
                                            </div>
                                            <div class="edit_submit">
                                                <input type="submit" class="btn btn-success" value="Submit"
                                                       name="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
