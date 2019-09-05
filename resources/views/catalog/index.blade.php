@extends('app')
@section('breadcrumbs')
@include('catalog.advanced-breadcrumbs')
@endsection
@section('content')
@include('layout.breadcrumbs',['title' =>  'Catálogo'])
<section class="section-md  text-center bg-white">
	<div class="shell">
		<div class="range">
			<div class="cell-sm-12 cell-md-3">
				@include('catalog._sidebar')
			</div>
			<div class="cell-sm-12 cell-md-9">
				<div class="range spacing-30">
					@foreach ($products as $product)
					<div class="cell-sm-6 cell-md-4">
						@include('catalog._item')
					</div>
					@endforeach
				</div>
			</div>
			<div class="cell-xs-12 text-center m-t-lg">
				{{ $products->appends(request()->all())->links() }}
			</div>
			<div class="cell-xs-12 text-center m-t-lg category-carousel-from-category">
				@include('catalog._categories-carousel', ['categories' => $carousel])
			</div>
			<script>document.querySelector('.category-carousel-from-category .section-md').classList.remove('section-md');</script>
		</div>
	</div>
</section>
@stop
