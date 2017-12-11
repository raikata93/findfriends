@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Намери приятели</div>
                    <div class="panel-body" style="margin-left: 35%">
                        <a href="{{url('/find')}}" class="btn btn-danger">Намери приятел</a>       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
