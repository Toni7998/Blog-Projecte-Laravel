@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{$post->titol}}</div>

				<div class="card-body">
					<p>{{$post->contingut}}</p>

				</div>
			</div>
			<p>Autor: {{$post->user->name}}</p>
		</div>
	</div>
</div>
@endsection
