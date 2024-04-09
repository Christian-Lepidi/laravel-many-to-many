@extends('layouts.app')

@section('title', 'Modifica '. $project->title)

@section('content')
  <section>
    <div class="container py-4">
        <a class="btn btn-primary mb-3" href="{{route('projects.index')}}">Torna alla lista</a>  
      <h1 class="text-center">Modifica {{$project->title}}</h1>
      <form action="{{route('projects.update', $project)}}" class="row g-3" method="POST">
       @csrf
       @method('PATCH')
       
        <div class="col-4">
         <label for="title" class="form-label">Titolo</label>   
         <input value="{{$project->title}}" type="text" name="title" id="title" class="form-control" required>
        </div> 
        <div class="col-4"> 
         <label for="description" class="form-label">Descrizione</label>    
         <input value="{{$project->description}}" type="text" name="description" id="description" class="form-control" required>
        </div>
        <div class="col-4">
           <label for="sale_date" class="form-label">Data di pubblicazione</label>   
           <input value="{{$project->date_of_publication}}" type="text" name="date_of_publication" id="date_of_publication" class="form-control" required>
        </div>
        
        <div class="col-3">   
         <button class="btn btn-success">Salva Modifiche</button>
        </div>
      </form>
    </div>
  </section>
@endsection