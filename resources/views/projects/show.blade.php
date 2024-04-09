@extends('layouts.app')

@section('title', "Progetto $project->id: $project->title" )

@section('content')
<section>
    <div class="container py-4">
      <a class="btn btn-primary mb-3" href="{{route('projects.index')}}">Torna alla lista</a>
      <h1 class="text-center">Dettagli progetto{{$project->id}}:{{$project->title}}</h1>
      <div class="row">
        
        <div class="col-6 my-4">
          <h2 class="h4 text-center">Descrizione</h2> 
          <p>{{$project->description}}</p> 
        </div>
        <div class="col-6 my-4">
          <h2 class="h4 text-center">Data di pubblicazione</h2> 
          <div class="text-center">{{$project->date_of_publication}}</div> 
        </div>
        <div class="col-6">
          @foreach ($project->technologies as $technology)
           {{$technology->name}}
              
          @endforeach
        </div>
      </div>
    </div>
</section> 
@endsection     