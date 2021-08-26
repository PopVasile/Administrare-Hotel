@extends('layouts.app')
@section('content')
@if (Auth::check())
    @include('layouts.left_meniu')
    
    @if($value=='Dashboard')
    
        @include('pages.dashboard')
    
    @endif

    @if($value=='RoomsManager')
    
        @include('pages.roomsManager')
    
    @endif

    @if($value=='GuestManager')
    
        @include('pages.guestManager')
    
    @endif
    @if($value=='PriceManager')
    
        @include('pages.priceManager')

    @endif
    @if($value=='FrontOffice')
    
        @include('pages.frontOffice')

    @endif
    @if($value=='Help')
    
        @include('pages.help')

    @endif
    @if($value=='HouseKeeping')
    
        @include('pages.houseKeeping')

    @endif
    @if($value=='NightAuditor')
    
        @include('pages.nightAuditor')

    @endif
    @if($value=='PointOfSale')
    
         @include('pages.pointOfSale')

    @endif
    @if($value=='ReserManager')
    
        @include('pages.reserManager')

    @endif
    @if($value=='Security')
    
        @include('pages.security')

    @endif
    @if($value=='Setting')
    
        @include('pages.setting')

    @endif
@else

@endif

@endsection