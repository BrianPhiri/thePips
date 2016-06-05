@extends('layouts.master')
@section('content')
<!-- navbar for products -->
@include('homepage._navbar')
<!-- end navbar -->
<!---->
<form action="" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_GIjjWsmv1wDgFvt2BG0Fhtpl"
    data-amount="900"
    data-name="ThePips"
    data-description="Buying product"
    data-image="/img/documentation/checkout/marketplace.png"
    data-locale="auto">
  </script>
</form>
@endsection
