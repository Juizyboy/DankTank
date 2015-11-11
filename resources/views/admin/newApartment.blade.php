@extends('indexbooking')
@section('main')
<section class="content-header">
    <h1>
        Appartement aanmaken
        <small>Maak hier een nieuw appartement</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{action('AdminController@index')}}"><i class="fa fa-user"></i>Appartement</a></li>
        <li class="active">Appartement aanmaken</li>
    </ol>
</section>

<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="box">
        <div class="box-body">
            <div class="row">
                <div class="col-lg-12">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <form action="{{action("AdminController@createApartment")}}" method="post">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group has-feedback">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Naam"/>
                            <span class="glyphicon glyphicon-person form-control-feedback"></span>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop