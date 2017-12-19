@extends('admin.layout')

@section('content')
    <div class="container">


        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Username</th>
                <th scope="col">Username</th>
                <th scope="col">Username</th>
                <th scope="col">Username</th>
                <th scope="col">Username</th>
                <th scope="col">Username</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">1</th>
                    <td>

                        @if($user->profile_image=='' || $user->profile_image==null)
                            <img style="width: 150px;height: 150px;"
                                 src="{{\App\CH::getAssetUrl('/images/emloye_image_2)}}"/>
                        @else
                            <img style="width: 150px;height: 150px;"
                                 src="{{\App\CH::getAssetUrl('/storage/'.$user->profile_image)}}"/>

                        @endif
                    </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->dob}}</td>
                    <td>{{$user->gender}}</td>
                    <td>{{$user->position}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
@endsection