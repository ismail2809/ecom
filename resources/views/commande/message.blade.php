@extends('layout.master') 

@section('content')

<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Commande réussite</h1>
        </div>
    </div>
</section>
<!-- End Page Title Area -->
<section class="cart-area ptb-70">
    <div class="container">
		<div class="cart-totals"> 

		    <ul> 
		        <li><span>Votre  commande  est faite avec succès ! </span></li>
		    </ul>

		    <ul> 
		        <li><span><a href="{{ url('/products') }}" class="default-btn"><i class="flaticon-trolley"></i> Home</a></span></li>
		    </ul>

		</div>
	</div>
</section>		

@include('layout.service')

@endsection    