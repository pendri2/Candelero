	<h1>
		<div class="alert alert-danger">
			Usuarios
		</div>
	</h1>

	<ol>
		
		@foreach ($usuarios as $user)
		    <li>{{ $user }}</li>
		@endforeach

	</ol>