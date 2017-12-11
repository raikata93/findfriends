@extends('layouts.app')

@section('content')
<?php
$appendData = [];
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Приятели</div>
                    <div class="panel-body">
                        <table  class="table table-striped table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Име</th>
                                    <th>Мейл</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($friends as $friend)
                                    <tr>
                                        <td>{{$friend->real_name}}</td>
                                        <td>{{$friend->email}}</td>
                                    </tr>
                                @endforeach                                
                            </tbody>
                        </table>
                        {!! $friends->appends($appendData)->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
