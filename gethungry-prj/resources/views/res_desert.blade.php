@extends('home') @section('content')

    <div class="contaner-fluid">
        <br>
        <br><br>
        <div class="row">
            @foreach($DATAS as $data)
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="/storage/profile/{{$data->file}}" alt="Card image cap"style="height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->fname}}</h5>
                        <p class="card-text">{{$data->aboutf}}</p>
                        <br>
                        <div class="food-card_price">

                            <span>{{$data->price}}₹</span>
                            <a href="#" class="btn" style="color: black;">Add to Cart</a>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>





    </div>

@endsection