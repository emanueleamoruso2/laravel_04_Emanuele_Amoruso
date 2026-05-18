<x-layout>
    <div class="container-fluid mt-3">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 text-center text-danger">
                <h1>Dettaglio del prodotto : {{$prodotto['nomeprodotto']}}</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-3">
    <div class="col-12 col-md-6 d-flex justify-content-center align-items-start">
        <img src="{{$prodotto['Img']}}" alt="{{$prodotto['nomeprodotto']}}" class="img-fluid">
    </div>
    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center flex-column">
        <h1>Prodotto : {{$prodotto['nomeprodotto']}}</h1>
        <h3>Categoria: {{$prodotto['Categoria']}}</h3>
        <p>Prezzo: {{$prodotto['Prezzo']}}</p>
    </div>
        </div>
    </div>
</x-layout>