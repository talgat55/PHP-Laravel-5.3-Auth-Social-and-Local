@extends('layouts.master')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            @if (isset($user->avatar_original))
                <h1>Original image :</h1>
                <img alt="Original image" src="{{$user->avatar_original}}" class="img-circle img-responsive">
            @endif
            
        </div>
        <div class="col-sm-8" >
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$user->name}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <h4>Thumbnail : </h4>
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="Thumbnail image" src="{{$user->avatar}}" class="img-circle img-responsive"> </div>
                        <div class=" col-md-9 col-lg-9 "> 
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$user->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="mailto:info@support.com">{{$user->email}}</a></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection