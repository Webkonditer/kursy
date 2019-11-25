@extends('public.layouts.layout')

@section('content')
	<section >
		<div class="container">
					{!! $page->content !!}
		</div>
	</section>
@endsection
