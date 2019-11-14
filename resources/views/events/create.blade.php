@extends('layouts.app')

@section('content')
<h1>Creer un evenement</h1>
<form action="{{route('events.store')}}" method="POST">
   @csrf
   @include('events/_form',['submitBtnText'=>'Creer un evenement'])
   
    
</form>
<p><a href="{{ route('home')}}">Annuler</a></p>
@stop