<x-layout title="Revisiona">
    @if (session()->has('message'))
        <div class="alert alert-success my-3">
            {{session('message')}}
        </div>
    @endif
    @if (session()->has('warning'))
        <div class="alert alert-warning my-3">
            {{session('warning')}}
        </div>
    @endif
    @if({{$add_to_check}})
        <h2 class="display-2 text-center">"Ecco l'annuncio da revisionare"</h2>
         @else
            <h2 class="display-2 text-center">"Ecco l'annuncio da revisionare"</h2>
            <div class="d-flex justify-content-center">
                <form action="{{route('revisor.addBack')}}" method="POST">
                        
                    @csrf
                    @method('PATCH')

                    <button type="submit" class="btn btn-secondary shadow text-white">Annulla ultima revisione</button>

                </form>
            </div>
    @endif
        

    @if($add_to_check)
        <div class="container">
            <div class="row justify-content-center w-100">
                <div class="col-12 col-md-6">
                    <img src="https://picsum.photos/600" class="img-fluid my-2" alt="{{$add_to_check->title}}">
                    <div class="d-flex justify-content-evenly">
                        <img src="https://picsum.photos/120" class="img-fluid" alt="{{$add_to_check->title}}">
                        <img src="https://picsum.photos/120" class="img-fluid" alt="{{$add_to_check->title}}">
                        <img src="https://picsum.photos/120" class="img-fluid" alt="{{$add_to_check->title}}">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h3 display-3>{{$add_to_check->title}}</h3>
                    <hr>
                    <h4>{{$add_to_check->price}} €</h4>
                    <hr>
                    <p class="my-3">{{$add_to_check->description}}</p>
                </div>


            </div>
        </div>

        <div class="row my-3 justify-content-center">
            <div class="col-12 col-md-3">
                <form action="{{route('revisor.addAccepted', ['add'=>$add_to_check])}}" method="POST">
                
                    @csrf
                    @method('PATCH')

                    <button type="submit" class="btn btn-success shadow">Accetta</button>

                </form>
            </div>
            <div class="col-12 col-md-3">
                <form action="{{route('revisor.addBack')}}" method="POST">
                
                    @csrf
                    @method('PATCH')

                    <button type="submit" class="btn btn-secondary shadow text-white">Annulla ultima revisione</button>

                </form>
            </div>
            <div class="col-12 col-md-3">
                <form action="{{route('revisor.addRefused', ['add'=>$add_to_check])}}" method="POST">
                
                    @csrf
                    @method('PATCH')

                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>

                </form>
            </div>
        </div>
    @endif
    <div class="row w-100 justify-content-center">
        <div class="col-12 d-flex justify-content-center mt-5">
            <a href="{{route('add.index')}}" class="btn btn-lg btnCustomPage bg-prim bg-gradient h6 rounded text-center anton-font mb-3 shadow">Torna agli annunci</a>
        </div>
    </div>

</x-layout>