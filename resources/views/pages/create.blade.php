<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <style type="text/css">

    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">

            <h3>Insert Post</h3>
            {!! Form::open([ 'method'=>'POST' , 'action'=>'PostController@store' , 'id' => 'form-create']) !!}
            
            <div class="form-group">
            {!!Form::label('name','Name :') !!}
            {!!Form::text('name',null,['class'=>'form-control','id'=>'name']) !!}
            </div>

            <div class="form-group">
            {!!Form::label('body','Body :') !!}
            {!!Form::text('body',null,['class'=>'form-control','id'=>'body']) !!}
            </div>

            <div class="form-group">
            {!!Form::label('category_id','Category :') !!}
            {!!Form::select('category_id', array(''=>'Chose category')+$category , null , ['class'=>'form-control','id'=>'category_id']) !!}
            </div>

            <div class="form-group">
            {!!Form::submit('Create',['class'=>'btn btn-primary','id'=>'submit']) !!}
            </div>

            {!! Form::close() !!}
        </div>
        
        <div class="col-md-8 show-data"> </div>
        @include('pages.update')

    </div>
</div>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="{{ URL::to('js\master.js') }}"></script>
</body>
</html>