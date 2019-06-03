@extends('master')
@section('content')

<div class="container box-bialy">
	<div class="row">
		<div class="col-md-4">
			<h2 class="h2-panel">Opcje</h2>
			@include('menu')
		</div>
		<div class="col-md-8">
			<div class="block-right">
				<p class="opis-panel">Logując się do naszego panelu jesteś w stanie zamówić właśny bilet online do zoo</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultricies dui non nunc iaculis, at porta ex imperdiet. Sed venenatis ipsum in ullamcorper vehicula. Suspendisse sit amet orci leo. Phasellus id sapien nisl. Nam sagittis tincidunt quam, aliquet rutrum augue mollis eu. Fusce quis lorem porttitor, tincidunt leo nec, pulvinar dolor. Morbi ac metus magna. Duis vulputate nisl dignissim diam egestas tincidunt. Curabitur ut magna diam. Nam mattis leo tristique fringilla aliquet. Curabitur tempor, augue at mollis accumsan, purus diam vulputate augue, vitae malesuada magna mi eu nulla.</p>
			</div>
		</div>
	</div>
</div>

@endsection