<x-layout>
    <div class="container-fluid mt-3">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 text-center text-danger">
                <h1>Dettaglio del prodotto : {{$product['name']}}</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-3">
    <div class="col-12 col-md-6 d-flex justify-content-center align-items-start">
        <img src="{{$product['Img']}}" alt="{{$product['name']}}" class="img-fluid">
    </div>
    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center flex-column">
        <h1>Prodotto : {{$product['name']}}</h1>
        <h3>Categoria: {{$product['category']}}</h3>
        <p>Prezzo: {{$product['price']}}</p>
    </div>
        </div>
    </div>
</x-layout>