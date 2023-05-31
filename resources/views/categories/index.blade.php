@extends('layouts.app')

@section('title')SoundSpace - {{$cat->title}}@endsection

@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/css/style.css">
@endsection

@section('content')
    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url('/images/{{$cat->img}}')"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">{{$cat->title}}<span>.</span></div>
                                <div class="home_text"><p>{{$cat->desc}}</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Product Sorting -->
                    <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                        <div class="results">Найдено <span>{{$cat->products->count()}}</span> результата</div>
                        <div class="sorting_container ml-md-auto">
                            <div class="sorting">
                                <ul class="item_sorting">
                                    <li>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="main-content">
        <div class="container">
            <div class="row">
                @foreach($cat->products as $product)
                    <!-- Product -->
                    <div class="cardnum col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-thumb">
                                <a href="#"><img src="{{Storage::url($product->img)}}" alt="{{$product->title}}"></a>
                            </div>
                            <div class="product-details">
                                <h4><a href="#">{{$product->title}}</a></h4>
                                <p>{{$product->description}}</p>
                                <p>Категория - {{$product->category->title}}</p>
                                <div class="product-bottom-details d-flex justify-content-between">
                                    @if($product->new_price != null)
                                        <div class="product-price">
                                            <small>${{$product->price}}</small> ${{$product->new_price}}
                                        </div>
                                    @else
                                        <div class="product-price">${{$product->price}}</div>
                                    @endif
                                    <div class="product-links">
                                        <a href="{{route('showProduct',[$product->category['alias'],$product->id])}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                    </div>
                                    @csrf
                             </div>
                            </div>
                        </div>
                    </div>
                @endforeach   
            </div>
        </div>
    </section>

@endsection

