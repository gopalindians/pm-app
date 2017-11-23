@extends('layouts.app')

@section('title', 'ff')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="/profile/edit/{{$user[0]->id}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2">Name</span>
                                    <input type="text" class="form-control" name="name" placeholder=""
                                           aria-describedby="sizing-addon2" value="{{$user[0]->name??old('name')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2">DOB</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-describedby="sizing-addon2">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2">Gender</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-describedby="sizing-addon2">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2">Position</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-describedby="sizing-addon2">
                                </div>
                            </div>

                            <div class="form-group">
                                <p>Profile image</p>
                                <div class="row">

                                    <div class="col-xs-4 col-md-3">
                                        <a href="#" class="thumbnail">
                                            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWZlOGY3MTdjYiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1ZmU4ZjcxN2NiIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy4xNzk2ODc1IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="
                                                 alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" name="profileImage" id="fileToUpload">

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit"  class="btn btn-primary" value="Update" name="submit">
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
