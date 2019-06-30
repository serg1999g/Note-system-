@extends('layout')

@section('content')

@include('errors')

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            {!! Form::open(['route' => 'tasks.handleImport','method' => 'POST', 'enctype' => 'multipart/form-data' ])!!}

            {{csrf_field()}}

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Configurations</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="file">Select a file to import</label>

                            {!! Form::file('file') !!}
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">
                                <i class="glyphicon glyphicon-cloud-upload"></i> Upload
                            </button>
                            <a href="{{route('tasks.index')}}" class="btn btn-success">Back</a>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        <div class="col-sm-9">

        </div>
    </div>

</div>
@endsection