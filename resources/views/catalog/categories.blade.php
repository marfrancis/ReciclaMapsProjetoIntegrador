
@extends('app')
@section('breadcrumbs')
<li class="active">Catálogo de produtos</li>
@endsection
@section('content')
@include('layout.breadcrumbs',['title' =>  'Catálogo'])
<section class="section-md  text-center bg-white">
	<div class="shell">

		<div class="range">
			<?php
			$link_base = './catalogo/?';
			$categorias = Categoria_img::find();
			$capas = array(); $capas_ = Registros::find('','','','',"where modulo.pagina = 'imagem_categoria'");
			foreach ($capas_ as $key => $capa) {
				$capas[ $capa->promocional == '0' ? $capa->codigo : 'PROMOCIONAL' ] = Utilidades::getImagemURL( 'imagem_categoria', $capa->imagem );
			}
			?>
			<?php foreach ($categorias as $key => $categoria): ?>
				<?php $produtos = Mercadoria::find('',6,'','',"where mercadoria_thumb.site = 'sim' and mercadoria_thumb.legenda != '' and categoria_img.categoria_id = '{$categoria->categoria_id}' group by mercadoria.ID order by mercadoria_thumb.legenda asc"); ?>
				<?php $link_categoria = $link_base . 'categoria_slug=' . $categoria->categoria_id ?>
				<?php if (sizeof($produtos) > 0 ): ?>
					<div class="categoria">
						<div class="range">
							<div class="cell-sm-12 cell-md-3">
								<a href="<?= $link_categoria ?>">
									<img src="<?= $capas[$categoria->categoria_id] ?>" class="img-responsive">
								</a>
							</div>
							<div class="cell-sm-12 cell-md-9">
								<div class="range spacing-30">
									<?php foreach ($produtos as $key => $produto): ?>
										<div class="cell-sm-6 cell-md-4">
											@include('catalog._item-category-direto')
										</div>
									<?php endforeach ?>
									<div class="clearfix"></div>
									<div class="cell-sm-12">
										<a class="btn btn-primary btn btn-effect-ujarak btn-square" href="<?= $link_categoria ?>">Clique e confira mais produtos</a>
									</div>
								</div>
							</div>
							<hr style="margin: 30px 0 45px 0;" />
						</div>
					</div>
				<?php endif ?>
			<?php endforeach ?>

			<!-- promocionais -->
			<?php $produtos = Mercadoria::find('',6,'','',"where mercadoria_thumb.site = 'sim' and mercadoria_thumb.legenda != '' and mercadoria.PROMC = '1' group by mercadoria.ID order by rand()"); ?>
			<?php $link_categoria = $link_base . 'promocao=1' ?>
			<div class="categoria">
				<div class="range">
					<div class="cell-sm-12 cell-md-3">
						<a href="<?= $link_categoria ?>">
							<img src="<?= $capas['PROMOCIONAL'] ?>" class="img-responsive">
						</a>
					</div>
					<div class="cell-sm-12 cell-md-9">
						<div class="range spacing-30">
							<?php foreach ($produtos as $key => $produto): ?>
								<div class="cell-sm-6 cell-md-4">
									@include('catalog._item-category-direto')
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
@stop
