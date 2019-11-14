@extends('layouts.app')

@section('content')
<h1>Editier l'evenement #{{ $event->id }}</h1>

<form action="{{ route('events.update', $event)}}" method="POST">
   @csrf
  <!-- <input type="hidden" name="_method" value="PUT">
   OR -->

  
   @method('PUT')
    @include('events/_form',['submitBtnText'=>"Modifier l'evenement"])
   
    
</form>
<p><a href="{{ route('home')}}" class="btn btn-default">Annuler</a></p>
@stop