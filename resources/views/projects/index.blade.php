@extends('layouts.app')

@section('title', 'Progetti')

@section('content')
  <section>
    <div class="container py-4">
      <h1 class="text-center">Lista progetti</h1>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Data di pubblicazione </th>
            
            <th></th>
          </tr>
        </thead>
        <tbody>
          @forelse ($projects as $project)
          <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->title}}</td>
            <td>{{$project->description}}</td>
            <td>{{$project->date_of_publication}}</td>
            <td>
              <a href="{{route('projects.show', $project)}}">Dettagli</a>
              <a href="{{route('projects.edit', $project)}}">Modifica</a>
              <button type="button" class="btn btn-danger my-2" data-bs-toggle="modal" data-bs-target="#delete-comic-{{$project->id}}-modal">
                Elimina
              </button>
              <div class="modal fade" id="delete-comic-{{$project->id}}-modal" tabindex="-1" aria-labelledby="delete-comic-{{$project->id}}-modal" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina {{$project->title}}</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Operazione irreversibile. Sicuro di voler proseguire?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Indietro</button>
                      <form action="{{route('projects.destroy', $project)}}" method="POST">
                        @csrf
                        @method('DELETE') 
                        <button class="btn btn-danger">Conferma Eliminazione</button>
                       </form>
                    </div>
                  </div>
                </div>
              </div>
              
            </td>
          </tr>  
          @empty
          <tr>
           <td colspan="100%">
            Nessun risultato
           </td> 
          </tr>    
          @endforelse
          

          
        </tbody>
      </table>
    </div>
  </section>
@endsection