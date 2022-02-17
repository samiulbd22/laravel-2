@extends('master')

@section('title')
    Product Detail
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{$data['image']}}" alt="" class=""/>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>{{$data['name']}}</h1>
                        <h1>TK. {{$data['price']}}</h1>
                        <h1>{{$data['description']}}</h1>
                        <hr/>
                        <button type="button" class="btn btn-outline-success">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
