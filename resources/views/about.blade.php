@extends('master')

@section('title')
    About Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">

                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{$product['image']}}" alt="" class="card-img-top h-300" style="height: 300px"/>
{{--                        <div class="card-header"></div>--}}
                        <div class="card-body">
                            <h3 class="card-title">{{$product['name']}}</h3>
                            <p>TK. {{$product['price']}}</p>
                            <hr/>
                            <a href="{{route('detail',['myid'=>$product['id']])}}" class="btn btn-outline-success">Details</a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>
@endsection
