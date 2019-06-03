@extends('master2')
@section('content')

<div class="container box-bialy">
	<div class="row">
		<div class="col-md-4">
			<h2 class="h2-panel">Opcje</h2>
			@include('menu')
		</div>
		<div class="col-md-8">
			<div class="block-right">
				<h1 class="opis-panel marg" style="margin-left:0;">Historia zamowien</h1>
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Id</th>
					      <th scope="col">Imię i nazwisko</th>
					      <th scope="col">Data</th>
					      <th scope="col">Godzina</th>
					      <th scope="col">Ilość osób</th>
					      <th scope="col">Status</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($tickets as $ticket)
					    <tr>
					      <td scope="row">{{$ticket->id}}</td>
					      <td scope="row">{{$ticket->imie}}</td>
					      <td scope="row">{{$ticket->data}}</td>
					      <td scope="row">{{$ticket->godzina}}</td>
					      <td scope="row">{{$ticket->ilosc}}</td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>

				

			</div>
		</div>
	</div>
</div>

@endsection