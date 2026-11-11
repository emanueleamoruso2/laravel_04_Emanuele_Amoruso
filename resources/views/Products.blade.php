<x-layout>
<div class="container mt-5 vh-100">
    <div class="row justify-content-center align-items-center vh-100">
        @foreach($products as $product)
        <div class="col-12 col-md-3 card-custom2 card-custom">
            <div class="card ms-5 card-custom2" style="width: 20rem;">
            <img src="{{$product['Img']}}  " class="card-img-top" alt="$product['name']">
            <div class="card-body">
                @if(str_contains($product['name'], 'tt'))
                <h3 class="card-title">
                {{$product['name']}}
                </h3>
                <p>Prodotto che contiene la stringa tt</p>
                @else
                <h3 class="card-title">
                {{$product['name']}}
                </h3>
                <p>Il prodotto non contiene la stringa tt</p>
                @endif
            <p class="card-text">{{$product['category']}}</p>
            <a href="{{route('ProductsDetails',[$product['name']])}}" class="btn btn-primary mx-auto">Vai al dettaglio</a>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</x-layout>