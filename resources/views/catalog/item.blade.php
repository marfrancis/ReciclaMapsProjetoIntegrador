<div class="product-wrap">
        <div class="product-image">
            <figure>
                <img  class="img-responsive center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADCAYAAAC09K7GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjlDRDhDQTI0NTNCQjExRTdCNjIwOTFGN0VCOTBGQTgyIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjlDRDhDQTI1NTNCQjExRTdCNjIwOTFGN0VCOTBGQTgyIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OUNEOENBMjI1M0JCMTFFN0I2MjA5MUY3RUI5MEZBODIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OUNEOENBMjM1M0JCMTFFN0I2MjA5MUY3RUI5MEZBODIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7PtUUyAAAAF0lEQVR42mL8//8/AzJgYkADGAIAAQYAkzkDAwxZKisAAAAASUVORK5CYII=" style="width: 90%;background-position: center;background-size: contain;background-repeat: no-repeat;background-image: url('{{ productThumbnail($product) }}');">
            </figure>
            @if ($product->promocao)
            <div class="product-price">
                Promocional
            </div>
            @endif
            <div class="product-caption">
                <div class="product-caption-centered">
                    <ul class="list-product">
                        <li><a class="product-info" href="{{ route('catalog.show', [$product->id, $product->produto_slug]) }}">Código: {{ $product->codigo }}</a></li>
                    </ul>
                    <a class="btn btn-white-outline btn-sm btn-square" href="{{ route('catalog.show', [$product->id, $product->produto_slug]) }}">
                        SAIBA MAIS
                    </a>
                </div>
            </div>
        </div>
        <div class="product-title">
            <a class="link-gray-darker" href="{{ route('catalog.show', [$product->id, $product->produto_slug]) }}">
                {{ $product->legenda }}
            </a>
        </div>
    </div>
