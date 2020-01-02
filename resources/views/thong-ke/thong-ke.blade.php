@extends('layout')
@section('title')
    
@section('css')
<link href="../assets/libs/britecharts/britecharts.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('main-content')
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Chart Demo</div>

                <div class="panel-body">
                    {!! $chart->html() !!}
                </div>
                
            </div>
        </div>
    </div>
</div>
{!! Charts::scripts() !!}
{!! $chart->script() !!}
@endsection

@endsection
@section('js')
	<script src="../assets/libs/d3/d3.min.js"></script>
    <script src="../assets/libs/britecharts/britecharts.min.js"></script>

    <!-- Init js -->
    <script src="../assets/js/pages/britechart.init.js"></script>
@endsection
