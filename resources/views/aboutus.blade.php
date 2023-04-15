@extends('layouts.app')

@section('title-block')SoundSpace - О@endsection

@section('content')
    <div class="container-xl">
        <nav class="basket__breadcrumb breadcrumb">
            <ul class="breadcrumb__list">
                <li class="breadcrumb__item">
                    <a href="./index.html" class="breadcrumb__link">Главная</a>
                </li>
                <li class="breadcrumb__item">
                    <a href="#!" class="breadcrumb__link">Каталог</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="aboutUs">
        <section>
            <div class="container-xl">
                <div class="aboutUs__title title">О нас</div>
                <div class="row aboutUs__row1">
                    <div class="col-md-6">
                        <div class="aboutUs__row1-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet ipsum consectetur quisque
                                ultrices sed elementum. At ut amet venenatis enim erat. Nec vitae ultrices magna id
                                felis
                                laoreet pellentesque nunc. Vivamus mattis ullamcorper quis consectetur. Maecenas massa
                                erat
                                consequat odio purus massa. Tincidunt semper adipiscing lectus dui et odio faucibus
                                lectus.
                                <br>
                                Aenean fringilla ut pellentesque ultricies dictum. Maecenas ullamcorper ipsum eget morbi
                                leo
                                leo lectus. Egestas lacus et aliquam ullamcorper id vulputate mauris tortor nullam. Mi
                                nec
                                libero orci, quisque at. Orci eleifend netus urna fusce a amet neque. Fermentum lacinia
                                dictum.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="aboutUs__row1-img">
                            <img src="./img/product1.jpg" alt="">
                        </div>
                    </div>
                </div>
        </section>
        
        <section class="aboutUs__row3-wrapper">
            <div class="container-xl">
                <div class="aboutUs__row3 row">
                    <div class="col-md-6">
                        <div class="aboutUs__row3-img">
                            <img src="./img/product1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="aboutUs__row3-info">
                            <h6>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, viverra nisi
                                scelerisque vestibulum mattis. Lacus scelerisque magna.
                            </h6>
                            <p>
                                <svg width="34" height="34" fill="#FFD600">
                                    <use xlink:href='#checked'></use>
                                </svg>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </p>
                            <p>
                                <svg width="34" height="34" fill="#FFD600">
                                    <use xlink:href='#checked'></use>
                                </svg>
                                Lorem ipsum dolor sit, amet consectetur.
                            </p>
                            <p>
                                <svg width="34" height="34" fill="#FFD600">
                                    <use xlink:href='#checked'></use>
                                </svg>
                                Lorem ipsum dolor sit, amet consectetur adipisicing adipisicing.
                            </p>
                            <p>
                                <svg width="34" height="34" fill="#FFD600">
                                    <use xlink:href='#checked'></use>
                                </svg>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection