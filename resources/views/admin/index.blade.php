@extends('indexbooking')
@section('main')
<section class="content-header">
    <h1>
        Adminpanel
        <small>Adminpanel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Admin</li>
    </ol>
</section>

<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="box">
        <div class="box-body">
            <div class="row">

                <div class="col-lg-12">

                    <div id='usertabs' class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                            <li id="usertabsheader" class="pull-left header"></li>
                            <li><a href="#apartments" data-toggle="tab">Appartementen</a></li>
                            <li class="active"><a href="#bookings" data-toggle="tab">Boekingen</a></li>

                        </ul>
                        <div class="tab-content">



                            <div class="tab-pane" id="bookings">
                                <table class="table table-striped table-hover" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Naam</th>
                                        <th>Adres</th>
                                        <th>Postcode</th>
                                        <th>Stad</th>
                                        <th>E-mailadres</th>
                                        <th>Telefoonnummer</th>
                                        <th>Aankomstdatum</th>
                                        <th>Vertrekdatum</th>
                                        <th>Aantal gasten</th>
                                        <th>Aantal kinderen</th>
                                        <th>Apartement</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bookings as $booking)
                                            <tr>
                                                <td>{{$booking->name}}</td>
                                                <td>{{$booking->address}}</td>
                                                <td>{{$booking->postalCode}}</td>
                                                <td>{{$booking->city}}</td>
                                                <td>{{$booking->email}}</td>
                                                <td>{{$booking->phone}}</td>
                                                <td>{{$booking->arrivalDate}}</td>
                                                <td>{{$booking->leavingDate}}</td>
                                                <td>{{$booking->amountOfGuests}}</td>
                                                <td>{{$booking->amountOfChildren}}</td>
                                                <td>{{$booking->apartmentName}}</td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane" id="apartments">
                                <table class="table table-striped table-hover" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Naam</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($apartments as $apartment)
                                            <tr>
                                                <td>{{$apartment->name}}</td>
                                                <!--<td>
                                                    <form action="" method="GET">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="id" value="{{$apartment->id}}">
                                                    <button type="submit" class="btn btn-primary btn-xs">Bewerken</button>
                                                    </form>
                                                </td>-->
                                                    <td>
                                                    <form method="POST" action="{{action("AdminController@destroyApartment")}}">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="hidden" name="id" value="{{$apartment->id}}">
                                                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                                <a href="{{action("AdminController@newApartment")}}" class="btn btn-success">Nieuw appartement</a>
                            </div>

                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>

                    <!-- /.table-responsive -->
                </div>

            </div>
        </div>
    </div>
</section>
@stop