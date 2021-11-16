@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Appointment</div>
                    <form action="{{ route('appointments/store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="card px-1 py-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                               <input class="form-control" type="text" placeholder="Name"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="input-group"> <input class="form-control" type="text" placeholder="Mobile"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="input-group"> <input class="form-control" type="text" placeholder="Email ID"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bootstrap-iso">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group ">
                                                    <label class="control-label " for="date">
                                                        Date
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar">
                                                            </i>
                                                        </div>
                                                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="time" id="inputMDEx1" class="form-control">
                                            <label for="inputMDEx1">Choose time</label>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-dark btn-block">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
