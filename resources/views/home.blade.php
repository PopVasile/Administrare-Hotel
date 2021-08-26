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
@else

@endif

@endsection