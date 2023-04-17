<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.nice-number.min.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

</head>
<body>
    
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <div class="header___top-nav">
                            <a class="header__top-link" href="/">Главная</a>
                            <a class="header__top-link" href="/contacts">Контакты</a>
                            <a class="header__top-link" href="/paydeliver">Услуги и сервис</a>
                        </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="nav-link">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-link">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            @endif
                        @endauth
                    @endif
                    </ul>
                </div>
            </div>
        </nav>
</div>

<div class="container" style="padding: 100px 0px 210px 0px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="patronymic" class="col-md-4 col-form-label text-md-end">{{ __('Patronymic') }}</label>

                            <div class="col-md-6">
                                <input id="patronymic" type="text" class="form-control @error('patronymic') is-invalid @enderror" name="patronymic" value="{{ old('patronymic') }}" required autocomplete="patronymic" autofocus>

                                @error('patronymic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phonec') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
<div class="container-xl">
    <div class="footer__inner">
        <div class="row">
            <div class="col-xl-2">
                <div class="header__content-logoWrapper">
                    <a class="header__content-logoLink footer__logo-link" href="#!">
                        <img class="header__content-logo" src="./img/logo2.png" alt="Logo">
                    </a>
                    <p class="footer__logo-text">Интернет-магазин музыкальных инструменов</p>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 col-xl-5">
                <div class="footer__link-store">
                    <ul class="footer__list">
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#!">О нас</a>
                        </li>
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#!">Контакты</a>
                        </li>
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#!">Услуги и сервис</a>
                        </li>
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#!">Оплата и доставка</a>
                        </li>
                        <li class="footer__list-item">
                            <a class="footer__list-link" href="#!">Категории</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-3">
                <div class="footer__waysToPay">
                    <h4 class="footer__waysToPay-title">Cпособы оплаты</h4>
                    <div class="footer__payments">
                        <ul>
                            <li>
                                <img class="footer__payment-icon" src="./img/footer-payme.png" alt="">
                            </li>
                            <li>
                                <img class="footer__payment-icon" src="./img/footer-visa.png" alt="">
                            </li>
                            <li>
                                <img class="footer__payment-icon" src="./img/footer-master.png" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer__socials">
                    <h4 class="footer__socials-title">Социальные сети</h4>
                    <div class="footer__socials-store">
                        <a class="footer__socials-link" href="#!">
                            <i class="fa fa-vk" aria-hidden="true"></i>
                        </a>
                        <a class="footer__socials-link" href="#!">
                            <i class="fa fa-telegram" aria-hidden="true"></i>
                        </a>
                        <a class="footer__socials-link" href="#!">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>

</body>
</html>
