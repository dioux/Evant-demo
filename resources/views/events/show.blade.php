@extends('layouts.app')

@section('content')
    <h1>{{$event->title}}</h1>

   <p>{{$event->description}}</p>
   <a href="{{ route('events.edit',$event->id) }}" class="btn btn-default">Modifier</a> 
   <form action="{{ route('events.destroy', $event->id)}}" method="POST"
        class="inline-block" onsubmit="return confirm('Etes-vous sur?')">
   @csrf
   {{-- method_field('DELETE') --}}
   @method('DELETE')
   <input type="submit" value="Supprimer" class="btn btn-danger">
   </form>
   <a href="{{route('home')}}" class="btn btn-primary">Tous les evenements</a> 
   
    
@stop