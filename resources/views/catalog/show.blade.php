@extends('app')

@section('breadcrumbs')
<li><a href="{{ route('catalog.index') }}">Catálogo</a></li>
<li><a href="{{ route('catalog.index', ['categoria_slug' => $product->categoria_slug]) }}">{{ $product->categoria_nome }}</a></li>
{{--
	@if (App\Supplier::where('marca_id', $product->fornecedor)->get()->count())
	<li>
		<a href="{{ route('catalog.index', ['fornecedor' => App\Supplier::where('marca_id', $product->fornecedor)->get()->first()->marca_id]) }}">
			{{ $product->fornecedor }}
		</a>
	</li>
	@endif
	--}}
	{{-- <li class="active">{{ $product->legenda }}</li> --}}
	@stop

	@section('content')

	@include('layout.breadcrumbs',['title' =>  $product->categoria_nome])

	<section class="section-md bg-white text-center">
		<div class="shell">
			<div class="range range-md-center spacing-55">
				<div class="cell-md-10">
					<div class="range range-xs-center spacing-55">
						<div class="cell-sm-8 cell-md-6">
							<div class="product-carousel">
								<div class="slick-slider carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel" data-photo-swipe-gallery="gallery" data-slick data-fade="true">
									<div class="item">
										<a class="img-thumbnail-variant-2" href="{{ productFeaturedImage($product) }}" rel="fancybox[g]">
											<figure>
												<img src="{{ productThumbnail($product) }}"/>
											</figure>
											<div class="caption">
												<span class="icon icon-md fl-bigmug-line-search74 icon-default"></span>
											</div>
										</a>
										<a class="btn btn-info btn btn-effect-ujarak btn-square" role="button" href="{{ productFeaturedImage($product) }}" download>BAIXAR IMAGEM EM ALTA</a>
									</div>
								</div>
							</div>
						</div>
						<div class="cell-sm-8 cell-md-6 text-sm-left">
							<div class="product-single">
								<p class="product-stock">{{ $product->categoria_nome }}</p>
								<h3>{{ $product->legenda }}</h3>
								<table class="table-product-shop">
									<tbody>
										<tr>
											<td>Código</td>
											<td>{{ $product->codigo }}</td>
										</tr>

										<tr>
											<td>Nome</td>
											<td>{{ $product->legenda }}</td>
										</tr>

										<tr>
											<td>Fornecedor</td>
											<?php
											$marca = new Marca_img();
											$marca->marca_id = "%$product->fornecedor%";
											$marcas = Marca_img::find($marca, 1, false, false);
											if(sizeof($marcas) > 0) $marca = $marcas[0];
											else $marca->marca = $product->fornecedor;
											?>
											<td>{{ $marca->marca }}</td>
										</tr>
										<tr>
											<td>Embalagem</td>
											<td>{{ $product->embalagem }}</td>
										</tr>
										<tr>
											<td>Categoria</td>
											<td>{{ $product->categoria_nome }}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('catalog._related')
	@include('catalog._categories-carousel')
	@stop
