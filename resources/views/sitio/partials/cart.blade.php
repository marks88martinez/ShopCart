 <!-- ::::::  Start Popup Add Cart ::::::  -->
 {{-- <div  id="offcanvas-add-cart__box" class="offcanvas offcanvas-cart offcanvas-add-cart">
    <div class="offcanvas-add-cart__top m-b-40">
        <span class="offcanvas-add-cart__top-text"><i class="icon-shopping-cart"></i> Total: 4</span>
        <button class=" offcanvas-close">&times;</button>
    </div>
    <!-- Start Add Cart Item Box-->
    <ul class="offcanvas-add-cart__menu">
        <!-- Start Single Add Cart Item-->
        <li class="offcanvas-add-cart__list pos-relative">
            <div class="offcanvas-add-cart__img-box pos-relative">
                <a href="single-1.html" class="offcanvas-add-cart__img-link img-responsive"><img src="template_front/assets/img/product/size-small/product-home-1-img-1.jpg" alt="" class="add-cart__img"></a>
                <span class="offcanvas-add-cart__item-count pos-absolute">2x</span>
            </div>
            <div class="offcanvas-add-cart__detail">
                <a href="single-1.html" class="offcanvas-add-cart__link">PlayStation 4 Pro 1TB Star Wars Battlefront II Bundle</a>
                <span class="offcanvas-add-cart__price">$29.00</span>
                <span class="offcanvas-add-cart__info">Dimension: 40x60cm</span>

            </div>
            <button class="offcanvas-add-cart__item-dismiss pos-absolute">&times;</button>
        </li> <!-- Start Single Add Cart Item-->
        <!-- Start Single Add Cart Item-->
        <li class="offcanvas-add-cart__list pos-relative">
            <div class="offcanvas-add-cart__img-box pos-relative">
                <a href="single-1.html" class="offcanvas-add-cart__img-link img-responsive"><img src="template_front/assets/img/product/size-small/product-home-1-img-2.jpg" alt="" class="add-cart__img"></a>
                <span class="offcanvas-add-cart__item-count pos-absolute">1x</span>
            </div>
            <div class="offcanvas-add-cart__detail">
                <a href="single-1.html" class="offcanvas-add-cart__link">PlayStation 4 Pro 1TB Star Wars Battlefront II Bundle</a>
                <span class="offcanvas-add-cart__price">$29.00</span>
                <span class="offcanvas-add-cart__info">Dimension: 40x60cm</span>

            </div>
            <button class="offcanvas-add-cart__item-dismiss pos-absolute">&times;</button>
        </li> <!-- Start Single Add Cart Item-->
    </ul> <!-- Start Add Cart Item Box-->
    <!-- Start Add Cart Checkout Box-->
    <div class="offcanvas-add-cart__checkout-box-bottom">
        <!-- Start offcanvas Add Cart Checkout Info-->
        <ul class="offcanvas-add-cart__checkout-info">
            <!-- Start Single Add Cart Checkout Info-->
            <li class="offcanvas-add-cart__checkout-list">
                <span class="offcanvas-add-cart__checkout-left-info">Subtotal</span>
                <span class="offcanvas-add-cart__checkout-right-info">$60.59</span>
            </li> <!-- End Single Add Cart Checkout Info-->
            <!-- Start Single Add Cart Checkout Info-->
            <li class="offcanvas-add-cart__checkout-list">
                <span class="offcanvas-add-cart__checkout-left-info">Shipping</span>
                <span class="offcanvas-add-cart__checkout-right-info">$7.00</span>
            </li> <!-- End Single Add Cart Checkout Info-->
            <!-- Start Single Add Cart Checkout Info-->
            <li class="offcanvas-add-cart__checkout-list">
                <span class="offcanvas-add-cart__checkout-left-info">Taxes</span>
                <span class="offcanvas-add-cart__checkout-right-info">$0.00</span>
            </li> <!-- End Single Add Cart Checkout Info-->
            <!-- Start Single Add Cart Checkout Info-->
            <li class="offcanvas-add-cart__checkout-list">
                <span class="offcanvas-add-cart__checkout-left-info">Total</span>
                <span class="offcanvas-add-cart__checkout-right-info">$67.59</span>
            </li> <!-- End Single Add Cart Checkout Info-->
        </ul> <!-- End offcanvas Add Cart Checkout Info-->

        <div class="offcanvas-add-cart__btn-checkout">
            <a href="checkout.html" class="btn btn--block btn--box btn--gray btn--large btn--uppercase btn--weight">Checkout</a>
        </div>
    </div> <!-- End Add Cart Checkout Box-->
</div>  --}}
<!-- :::::: End Popup Add Cart :::::: -->

<div  id="offcanvas-add-cart__box" class="offcanvas offcanvas-cart offcanvas-add-cart">
    
    @if(count(\Cart::getContent()) > 0)
    <div class="offcanvas-add-cart__top m-b-40">
        <span class="offcanvas-add-cart__top-text"><i class="icon-shopping-cart"></i> Total:  {{ \Cart::getTotalQuantity()}}</span>
        <button class=" offcanvas-close">&times;</button>
    </div>
    
    <ul class="offcanvas-add-cart__menu">
        @foreach(\Cart::getContent() as $item)
       
        {{-- ///////// Cart //////////// --}}
        <li class="offcanvas-add-cart__list pos-relative">
            <div class="offcanvas-add-cart__img-box pos-relative">
                <a href="single-1.html" class="offcanvas-add-cart__img-link img-responsive"><img src="{{ $item->attributes->image }}" alt="" style="width: 70px; height:70px" class="add-cart__img"></a>
                <span class="offcanvas-add-cart__item-count pos-absolute">{{$item->quantity}}x</span>
            </div>
            <div class="offcanvas-add-cart__detail">
                <a href="single-1.html" class="offcanvas-add-cart__link">{{$item->name}}</a>
                {{-- <span class="offcanvas-add-cart__price">${{$item->name}}</span> --}}
                {{-- <span class="offcanvas-add-cart__info">######</span> --}}
                <span class="offcanvas-add-cart__info">${{$item->name}}</span>

            </div>
            {{-- <div class="col-lg-6">
                <b>1-{{$item->name}}</b>
                <br><small>2-Qty: {{$item->quantity}}</small>
            </div> --}}
            <p>${{ \Cart::get($item->id)->getPriceSum() }}</p>
            <form action="{{ route('cart.remove') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                {{-- <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button> --}}
        
                <button class="offcanvas-add-cart__item-dismiss pos-absolute">&times;</button>
            </form>
        </li> <!-- Start Single Add Cart Item-->
        {{-- ///////// Cart //////////// --}}
        @endforeach
        {{-- ////////////// --}}
        <br>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-10">
                    <b>Total: </b>${{ \Cart::getTotal() }}
                </div>
                <div class="col-lg-2">
                    <form action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <button class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></button>
                    </form>
                </div>
            </div>
        </li>
        <br>
        <div class="row" style="margin: 0px;">
            <a class="btn btn--gray btn-sm btn-block" href="{{ route('cart.index') }}">
                CARRITO <i class="fa fa-arrow-right"></i>
            </a>
            <a class="btn btn-success btn-sm btn-block" href="">
                CHECKOUT <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        {{-- ////////////// --}}

    </ul>   
        {{-- <br> --}}
        <!-- Start Add Cart Checkout Box-->
            {{-- <div class="offcanvas-add-cart__checkout-box-bottom">
                <!-- Start offcanvas Add Cart Checkout Info-->
                <ul class="offcanvas-add-cart__checkout-info">
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Subtotal</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$60.59</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Shipping</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$7.00</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Taxes</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$0.00</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Total</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$67.59</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                </ul> <!-- End offcanvas Add Cart Checkout Info-->

                <div class="offcanvas-add-cart__btn-checkout">
                    <a href="checkout.html" class="btn btn--block btn--box btn--gray btn--large btn--uppercase btn--weight">Checkout</a>
                </div>
            </div> --}}
        <!-- End Add Cart Checkout Box-->
            
    @else
        <li class="list-group-item">Tu carrito esta vacío</li>
    @endif
</div> 
<!-- :::::: End Popup Add Cart :::::: -->
