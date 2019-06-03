@extends('master2')
@section('content')

<div class="container box-bialy">
	<div class="row">
		<div class="col-md-4">
			<h2 class="h2-panel">Opcje</h2>
		@include('menu')
		</div>
		<div class="col-md-8">
			<h1 class="marg">Zamów bilet </h1>
		{!! Form:: open() !!}
			<div class="form-group">
			    <div  class="col-md-3 control-label">
			        {!! Form::label('imie','Imię i nazwisko:') !!}
			    </div>
			    <div class="col-md-6">
			        {!! Form::text('imie',null,['class'=>'form-control' ]) !!}
			    </div>
			</div>

			<div class="clearboth"></div>

			<div class="form-group">
			    <div  class="col-md-3 control-label">
			        {!! Form::label('data','Data przybycia:') !!}
			    </div>
			    <div class="col-md-6">
			        {!! Form::date('data',null,['class'=>'form-control']) !!}
			    </div>
			</div>
			<div class="clearboth"></div>

			<div class="form-group">
			    <div  class="col-md-3 control-label">
			        {!! Form::label('godzina','Godzina:') !!}
			    </div>
			    <div class="col-md-6">
			        {!! Form::time('godzina',null,['class'=>'form-control']) !!}
			    </div>
			</div>

			<div class="clearboth"></div>
			<div class="form-group">
			    <div  class="col-md-3 control-label">
			        {!! Form::label('ilosc','Ilość osób:') !!}
			    </div>
			    <div class="col-md-6">
			        {!! Form::number('ilosc',null,['class'=>'form-control']) !!}
			    </div>
			</div>


			<div class="clearboth"></div>
			<div class="form-group">
			    <div class="col-md-3 col-md-offset-3">
			        {!! Form::submit("Zamów",['class'=>'btn btn-primary']) !!}
			    </div>
			</div>
		{!! Form:: close() !!}
		</div>
	</div>
</div>

@endsection