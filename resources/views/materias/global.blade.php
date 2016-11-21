{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='form-group row'>
   {!!Form::label('nombre','Nombre',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
		{!!Form::text('nombre',$materia->nombre,['class'=>'form-control','placeholder'=>'nombre'])!!}
	</div>	
</div>

<div class='form-group row'>
   {!!Form::label('licenciatura','Licenciatura',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
		{!!Form::select('licenciatura_id[]',$licenciaturas,null,['licenciatura_id'=>'id','class'=>'form-control','multiple'])!!}
	</div>	
</div>

<div class='form-group row'>
   {!!Form::label('cuatrimestre','cuatrimestre',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::select('cuatrimestre',array('1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'),$materia->cuatrimestre,['class'=>'form-control select-category'])!!}
   </div>
</div>

<div class='form-group row'>
   {!!Form::submit('enviar',['class'=>'btn btn-primary col-xs-offset-1'])!!}

</div>
 {!!Form::close()!!}
