@extends('layouts.front.app')

@section('content')
        <div class="container product-in-cart-list">
            @if(!empty($products) && !collect($products)->isEmpty())
                <div class="row">  
                    <div class="inner-page-banner-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="breadcrumb-area">
                                        <h1>Cart Page</h1>
                                        <ul>
                                            <li><a href="{{ route('home') }}">Home</a> /</li>
                                            <li>Cart</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 
                    <!-- Cart Page Area Start Here -->
                    <div class="cart-page-area">
                        <div class="box-body">
                            @include('layouts.errors-and-messages')
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cart-page-top table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <td class="cart-form-heading"></td> <!-- Imagen -->
                                                    <td class="cart-form-heading">Product</td>
                                                    <td class="cart-form-heading">Price</td>
                                                    <td class="cart-form-heading">Quantity</td>         
                                                    <td class="cart-form-heading">Total</td>
                                                    <td class="cart-form-heading"></td> <!-- X -->
                                                </tr>
                                            </thead>

                                            <tbody id="quantity-holder">
                                                @foreach($products as $product)
                                                    <tr>
                                                        <td class="cart-img-holder"> <!-- imagen -->
                                                            <a href="{{ route('front.get.product', [$product->slug]) }}"  class="cart-img-holder">
                                                                @if(isset($product->cover))
                                                                    <img src="{{ asset("storage/$product->cover") }}" alt="{{ $product->name }}" class="img-bordered img-responsive">
                                                                @else
                                                                    <img src="https://placehold.it/120x120" alt="" class="img-responsive">
                                                                @endif
                                                            </a>      
                                                        </td>
                                                        <td> <!-- nombre -->
                                                            <h3><a href="{{ route('front.get.product', [$product->slug]) }}">{{ $product->name }}</a></h3>
                                                        </td>
                                                        <td class="amount"> <!-- precio Unitario -->
                                                            {{config('cart.currency')}} {{ number_format($product->price, 0) }}
                                                        </td>
                                                        <td class="quantity"> <!-- cantidad -->
                                                            
                                                                <form action="{{ route('cart.update', $product->rowId) }}" class="form-inline" method="post">
                                                                    {{ csrf_field() }}
                                                                    
                                                                    <input type="hidden" name="_method" value="put">

                                                                    <div class="input-group quantity-holder">

                                                                        <input type="text" name="quantity" class="form-control quantity-input" value="{{ $product->qty }}"/>
                                                                        

                                                                        <div class="input-group-btn-vertical">
                                                                            <button class="btn btn-default quantity-plus" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                                            <button class="btn btn-default quantity-minus" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                                        </div>
                                                                    </div>                                                                    
                                                                    <button class="btn btn-default"><i  class="fa fa-refresh"></i></button>
                                                                                         
                                                                </form>
                                                            </div>
                                                        </td>

                                                        <td class="amount"> <!-- precio Total -->
                                                            {{config('cart.currency')}} {{  number_format( $product->qty * $product->price, 0) }}
                                                        </td>
                                                        <td  class="dismiss"><!-- X -->
                                                            <form action="{{ route('cart.destroy', $product->rowId) }}" method="post">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="_method" value="delete">
                                                                <button onclick="return confirm('Are you sure?')" >
                                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach                                               
                                            </tbody>
                                        </table>
                                        <!-- Actualizar carro ---------------------
                                        <div class="update-button">
                                            <button class="btn-apply-coupon disabled" type="submit" value="Login">Update Cart</button>
                                        </div>
                                        -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cart-page-bottom-left">
                                        <h2>Coupon</h2>
                                        <form method="post">
                                            <input type="text" id="coupon" name="coupon" placeholder="Enter your coupon code if you have one">
                                            <button value="Coupon" type="submit" class="btn-apply-coupon disabled">Apply Coupon</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cart-page-bottom-right">
                                        <h2>Total</h2>
                                        <h3>Subtotal<span>{{config('cart.currency')}} {{ $subtotal }}</span></h3>
                                        @if(isset($shippingFee) && $shippingFee != 0)
                                            <h3>Shipping<span>{{config('cart.currency')}} {{ $shippingFee }}</span></h3>
                                        @endif
                                        <h3>Tax<span>{{config('cart.currency')}} {{ number_format($tax, 2) }}</span></h3>
                                        <h3>Total<span>{{config('cart.currency')}} {{ $total }}</span></h3>
                                        <div class="proceed-button">
                                            <a href="{{ route('home') }}" class="btn-apply-coupon disabled">Continue shopping</a>
                                            <a href="{{ route('checkout.index') }}" class="btn-apply-coupon disabled">Go to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cart Page Area End Here -->
                </div>
            @else
                <div class="row">
                    <div class="col-md-12">
                        <p class="alert alert-warning">No products in cart yet. <a href="{{ route('home') }}">Shop now!</a></p>
                    </div>
                </div>
            @endif
        </div>
@endsection