@extends('layouts.app')

@section('title-block')SoundSpace - Корзина@endsection

@section('content')
<div class="container-xl">
        <nav class="basket__breadcrumb breadcrumb">
            <ul class="breadcrumb__list">
                <li class="breadcrumb__item">
                    <a href="./index.html" class="breadcrumb__link">Главная</a>
                </li>
                <li class="breadcrumb__item">
                    <a href="#!" class="breadcrumb__link">Корзина</a>
                </li>
            </ul>
        </nav>
    </div>
<section class="basket">
    <div class="container-xl">
        <div class="basket__inner">
            <div class="row">
                <div class="col-lg-8 basket__inner-content">
                    <h1 class="basket__title title">Всего 4 товара</h1>

                    <div class="basket__product-wrapper basket-product">

                        <div class="basket-product__img-wrapper">
                            <img class="basket-product__img" src="./img/product-info-img1.jpg" alt="">
                            <p class="basket-product__btns">
                                <span class="basket-product__favorite">В избранное</span>
                                <span class="basket-product__delete">Удалить</span>
                            </p>
                        </div>

                        <div class="basket-product__info active">
                            <h2 class="basket-product__title">New Year Candle, Christmas Gift Idea</h2>
                            <p class="basket-product__about">Коротко о товаре</p>
                            <ul class="basket-product__list">
                                <li class="basket-product__item">Handmade</li>
                                <li class="basket-product__item">Lorem ipsum dolor sit amet.</li>
                                <li class="basket-product__item">Handmade</li>
                                <li class="basket-product__item">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Labore, voluptate.</li>
                            </ul>
                        </div>

                        <div class="basket-product__count">
                            <div class="basket-product__current-price">1 000 000 UZS</div>
                            <div class="basket-product__old-price">1 000 000 UZS</div>
                            <div class="basket-product__sale">Sale: 10%</div>
                            <div class="basket-product__quantity">
                                <div class="nice-number">
                                    <input class="" type="number" value="100">
                                </div>
                            </div>
                            <div class="basket-product__total">Общая цена:</div>
                            <div class="basket-product__total-cost">100 000 000 UZS</div>
                        </div>
                    </div>

                    <div class="basket__product-wrapper basket-product">

                        <div class="basket-product__img-wrapper">
                            <img class="basket-product__img" src="./img/product-info-img1.jpg" alt="">
                            <p class="basket-product__btns">
                                <span class="basket-product__favorite">В избранное</span>
                                <span class="basket-product__delete">Удалить</span>
                            </p>
                        </div>

                        <div class="basket-product__info">
                            <h2 class="basket-product__title">New Year Candle, Christmas Gift Idea</h2>
                            <p class="basket-product__about">Коротко о товаре</p>
                            <ul class="basket-product__list">
                                <li class="basket-product__item">Handmade</li>
                                <li class="basket-product__item">Lorem ipsum dolor sit amet.</li>
                                <li class="basket-product__item">Handmade</li>
                                <li class="basket-product__item">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Labore, voluptate.</li>
                            </ul>
                        </div>

                        <div class="basket-product__count">
                            <div class="basket-product__current-price">1 000 000 UZS</div>
                            <div class="basket-product__old-price">1 000 000 UZS</div>
                            <div class="basket-product__sale">Sale: 10%</div>
                            <div class="basket-product__quantity">
                                <div class="nice-number">
                                    <input type="number" value="100">
                                </div>
                            </div>
                            <div class="basket-product__total">Общая цена:</div>
                            <div class="basket-product__total-cost">100 000 000 UZS</div>
                        </div>
                    </div>

                    <div class="basket__product-wrapper basket-product">

                        <div class="basket-product__img-wrapper">
                            <img class="basket-product__img" src="./img/product-info-img1.jpg" alt="">
                            <p class="basket-product__btns">
                                <span class="basket-product__favorite">В избранное</span>
                                <span class="basket-product__delete">Удалить</span>
                            </p>
                        </div>

                        <div class="basket-product__info">
                            <h2 class="basket-product__title">New Year Candle, Christmas Gift Idea</h2>
                            <p class="basket-product__about">Коротко о товаре</p>
                            <ul class="basket-product__list">
                                <li class="basket-product__item">Handmade</li>
                                <li class="basket-product__item">Lorem ipsum dolor sit amet.</li>
                                <li class="basket-product__item">Handmade</li>
                                <li class="basket-product__item">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Labore, voluptate.</li>
                            </ul>
                        </div>

                        <div class="basket-product__count">
                            <div class="basket-product__current-price">1 000 000 UZS</div>
                            <div class="basket-product__old-price">1 000 000 UZS</div>
                            <div class="basket-product__sale">Sale: 10%</div>
                            <div class="basket-product__quantity">
                                <div class="nice-number">
                                    <input type="number" value="100">
                                </div>
                            </div>
                            <div class="basket-product__total">Общая цена:</div>
                            <div class="basket-product__total-cost">100 000 000 UZS</div>
                        </div>
                    </div>

                    <div class="basket__product-wrapper basket-product">

                        <div class="basket-product__img-wrapper">
                            <img class="basket-product__img" src="./img/product-info-img1.jpg" alt="">
                            <p class="basket-product__btns">
                                <span class="basket-product__favorite">В избранное</span>
                                <span class="basket-product__delete">Удалить</span>
                            </p>
                        </div>

                        <div class="basket-product__info">
                            <h2 class="basket-product__title">New Year Candle, Christmas Gift Idea</h2>
                            <p class="basket-product__about">Коротко о товаре</p>
                            <ul class="basket-product__list">
                                <li class="basket-product__item">Handmade</li>
                                <li class="basket-product__item">Lorem ipsum dolor sit amet.</li>
                                <li class="basket-product__item">Handmade</li>
                                <li class="basket-product__item">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Labore, voluptate.</li>
                            </ul>
                        </div>

                        <div class="basket-product__count">
                            <div class="basket-product__current-price">1 000 000 UZS</div>
                            <div class="basket-product__old-price">1 000 000 UZS</div>
                            <div class="basket-product__sale">Sale: 10%</div>
                            <div class="basket-product__quantity">
                                <div class="nice-number">
                                    <input type="number" value="100">
                                </div>
                            </div>
                            <div class="basket-product__total">Общая цена:</div>
                            <div class="basket-product__total-cost">100 000 000 UZS</div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4">
                    <form class="basket__payment-card payment-card">
                        <h3 class="payment-card__title">Выберите способ оплаты</h3>
                        <div class="payment-card__payment-types">
                            <img class="payment-card__img" src="./img/footer-payme.png" alt="">
                            <img class="payment-card__img" src="./img/footer-click.png" alt="">
                            <img class="payment-card__img" src="./img/footer-uzcard.png" alt="">
                            <img class="payment-card__img" src="./img/footer-apelsin.png" alt="">
                            <img class="payment-card__img" src="./img/humo.png" alt="">
                            <img class="payment-card__img" src="./img/footer-master.png" alt="">
                            <img class="payment-card__img" src="./img/footer-visa.png" alt="">
                        </div>
                        <div class="payment-card__info">
                            <div class="payment-card__products">
                                <div><span>Товарвы</span></div> <span>4</span>
                            </div>
                            <div class="payment-card__totalCost">
                                <div><span>Общая стоимоость</span></div> <span>10 655 940 сум</span>
                            </div>
                            <div class="payment-card__saleOnProduct">
                                <div><span>Скидки на товары</span></div> <span>213 118 сум</span>
                            </div>
                            <div class="payment-card__delivery">
                                <div><span>Доставка</span></div> <span>Беспалатно</span>
                            </div>
                            <div class="payment-card__intotal">
                                <div><span>Итого</span></div> <span>10 442 822 сум</span>
                            </div>
                        </div>
                        <div class="payment-card__btns">
                            <input type="text" class="payment-card__promo" placeholder="Промокод на скидку">
                            <button type="button" class="payment-card__apply">Применить</button>
                        </div>
                        <button class="payment-card__toPay" type="submit">Перейти к оплате</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection