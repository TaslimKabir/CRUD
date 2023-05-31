@extends('master')

@section('title')
    Home Page
@endsection
@section('content')
    <section class="py-5 bg-color">

        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4  py-2">
                        <div class="card rounded" style="width: 18rem;">
                            <img src="{{ asset("$blog->Image") }}" class="card-img-top" alt="..." width="100px"
                                height="300px">

                            <div class="card-body  text-white bg-dark ">
                                <h5 class="card-title font text-white text-center"><b>{{ $blog->Name }}</b></h5>
                                <h3 class="card-text textFont text-center"><b>{{ $blog->Brand_name }}</b></h3>
                                &nbsp; &nbsp;<a href="{{route('details',['id'=>$blog->id])}}" class="btn btn-outline-danger mx-5 font"> See More</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
