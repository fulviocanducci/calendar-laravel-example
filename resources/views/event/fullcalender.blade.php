@extends('layout')
@section('style')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fullcalendar.min.css"/>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Full Calendar Example</div>
                    <div class="panel-body">
                        {!! $calendar->calendar() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/js/lib/moment.min.js"></script>
    <script src="/js/fullcalendar.min.js"></script>
    <script src="/js/pt-br.js"></script>
    {!! $calendar->script() !!}
@endsection