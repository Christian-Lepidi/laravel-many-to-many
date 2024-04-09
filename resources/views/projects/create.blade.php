@extends('layouts.app')

@section('title', 'Inserisci nuovo Progetto')

@section('content')
  <section>
    <div class="container py-4">
        <a class="btn btn-primary mb-3" href="{{route('projects.index')}}">Torna alla lista</a>  
      <h1 class="text-center">Inserisci nuovo progetto</h1>
      <form action="{{route('projects.store')}}" class="row g-3" method="POST">
       @csrf
       
        <div class="col-4">
         <label for="title" class="form-label">Titolo</label>   
         <input type="text" name="title" id="title" class="form-control" required>
        </div> 
        <div class="col-4"> 
         <label for="description" class="form-label">Descrizione</label>    
         <input type="text" name="description" id="description" class="form-control" required>
        </div>
        <div class="col-4">
         <label for="date-of-publication" class="form-label">Data di pubblicazione</label>      
         <input type="text" name="date-of-publication" id="date-of-publication" class="form-control" required>
        </div>
        <div class="row">
          <div class="col-12 my-3">
           @foreach($technologies as $technology)
    
           <input type="checkbox" name="technologies" id="technologies" class="form-check-input">
           <label for="technologies" class="form-check-label">{{$technology->name}}</label>

           @endforeach
          </div>
        </div>
        
        <div class="col-3 ">   
         <button class="btn btn-success">Salva</button>
        </div>
      </form>
    </div>
  </section>
@endsection