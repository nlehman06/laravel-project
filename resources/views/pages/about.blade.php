@extends('app')

@section('content')
<h1> About Me</h1>

@if(count($people))
	<h3>People I like: </h3>

	<ul>
		@foreach ($people as $person)
			<li>{{ $person }} </li>
		@endforeach

	</ul>
@endif

<p>
blah blah blah lskjdflkj sdkljf sld jfksdljflks jflksdj f;lksd kjfklsd fls;kj fldsjf klsdjf ;sldfj ds

</p>
@stop