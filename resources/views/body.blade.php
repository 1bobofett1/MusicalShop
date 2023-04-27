@extends('layouts.app')

@section('title-block')SoundSpace - Интернет магазин музыкальных инструментов@endsection

@section('content')

<section class="newProducts">
        <div class="container-xl">
            <div class="newProducts__inner">
                <h2 class="newProducts__title default-title"><span class="default-title__before">Скидки</span></h2>
            </div>
        </div>
    </section>

<section class="main-content">
    <div class="container">
        <div class="row">
            
            @foreach($products as $product)
            <!-- Product -->
            @php
                $image = '';
                if(count($product->images)>0){
                   $image = $product->images[0]['img'];
                } else {
                   $image = 'no-image.png';
                }
            @endphp
            <div class="cardnum col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-thumb">
                        <a href="#"><img src="{{$image}}" alt="{{$product->title}}"></a>
                    </div>
                    <div class="product-details">
                        <h4><a href="#">{{$product->title}}</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus facilis eaque possimus itaque, deleniti quasi!</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            @if($product->new_price != null)
                                <div class="product-price">
                                    <small>${{$product->price}}</small> ${{$product->new_price}}
                                </div>
                            @else
                                <div class="product-price">${{$product->price}}</div>
                            @endif
                            <div class="product-links">
                                <a href="{{route('showProduct',['category',$product->id])}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>    
</section>
@endsection