<x-layout>
<div class="container mt-5 vh-100">
    <div class="row justify-content-center align-items-center vh-100">
        @foreach($prodotti as $prodotti)
        <div class="col-12 col-md-3 card-custom2 card-custom">
            <div class="card ms-5 card-custom2" style="width: 20rem;">
            <img src="{{$prodotti['Img']}}  " class="card-img-top" alt="$prodotti['nomeprodotto']">
            <div class="card-body">
                @if(str_contains($prodotti['nomeprodotto'], 'tt'))
                <h3 class="card-title">
                {{$prodotti['nomeprodotto']}}
                </h3>
                <p>Prodotto che contiene la stringa tt</p>
                @else
                <h3 class="card-title">
                {{$prodotti['nomeprodotto']}}
                </h3>
                <p>Il prodotto non contiene la stringa tt</p>
                @endif
            <p class="card-text">{{$prodotti['Categoria']}}</p>
            <a href="{{route('DettaglioProdotto',[$prodotti['nomeprodotto']])}}" class="btn btn-primary mx-auto">Vai al dettaglio</a>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</x-layout>