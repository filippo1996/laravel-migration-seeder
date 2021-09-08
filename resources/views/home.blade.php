@extends('templates.layout')
@section('title', 'Regalati un viaggio')

@section('content')

    {{-- inizio componente jumbotron --}}
    @component('components.jumbotron',[
        'title' => 'Scopri tutti i viaggi',
        'subTitle' => 'I nostri viaggi sono quelli più gettonati come mete turistiche'
        ])

        <a href="#" class="btn btn-primary my-2">Accedi a viaggi</a>

    @endcomponent
    {{-- fine componente jumbotron --}}

    {{-- inizio sezione vista cards --}}
    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

              {{-- inizio componente card --}}
              @foreach ($trips as $trip)

                @component('components.card',[
                    'img' => $trip->path_img,
                    'title' => $trip->name,
                    'description' => $trip->description
                ])
                
                @endcomponent
                  
              @endforeach
              {{-- fine componente card --}}

          </div>
          <div class="paginate">
            {{-- paginazione --}}
            {{ $trips->links() }}
          </div>
        </div>
    </div>
    {{-- fine sezione vista cards --}}

@endsection