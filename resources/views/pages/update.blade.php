<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>

      <div class="modal-body">
      {!! Form::open([ 'method'=>'POST' , 'action'=>'PostController@store' , 'id' => 'formupdate']) !!}

      {!! Form::hidden('id', null , ['id' => 'id']) !!}
            
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

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>