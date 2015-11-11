@extends('indexbooking')
@section('main')
<section class="content-header">
    <h1>
        Gebruikers
        <small>Overzicht van gebruikers</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Gebruikers</li>
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
                            <li><a href="#resellers" data-toggle="tab">Resellers</a></li>
                            <li class="active"><a href="#customers" data-toggle="tab">Klanten</a></li>

                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane active" id="customers">
                                <table class="table table-striped table-hover" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>E-mailadres</th>
                                        <th>Rol</th>
                                        <th>Geactiveerd?</th>
                                        <th>Datum aangemaakt</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <form action="" method="GET">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn btn-primary btn-xs">Bewerken</button>
                                                    </form>
                                                </td>
                                                <td>

                                                    <form method="POST" action="">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn btn-danger btn-xs">Verwijderen</button>
                                                    </form>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="resellers">
                                <table class="table table-striped table-hover" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>E-mailadres</th>
                                        <th>Rol</th>
                                        <th>Geactiveerd?</th>
                                        <th>Datum aangemaakt</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <form action="" method="GET">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn btn-primary btn-xs">Bewerken</button>
                                                    </form>
                                                </td>
                                                <td>

                                                    <form method="POST" action="">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn btn-danger btn-xs">Verwijderen</button>
                                                    </form>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane" id="apartments">
                                <table class="table table-striped table-hover" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Naam</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                @foreach($apartments as $apartment)
                                                <td>{{$apartment->name}}</td>
                                                <!--<td>
                                                    <form action="{{action("AdminController@editApartment")}}" method="GET">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="hidden" name="id" value="{{$apartment->id}}">
                                                        <button type="submit" class="btn btn-primary btn-xs">Bewerken</button>
                                                    </form>
                                                </td>-->
                                                <td>
                                                    <form method="POST" action="{{action("AdminController@destroyApartment")}}">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="hidden" name="id" value="{{$apartment->id}}">
                                                        <button type="submit" class="btn btn-danger btn-xs">Verwijderen</button>
                                                    </form>
                                                </td>
                                                @endforeach
                                            </tr>
                                    </tbody>
                                </table>
                                <a href="{{action("AdminController@newApartment")}}" class="btn btn-"</a>
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