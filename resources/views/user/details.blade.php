@extends('master')

@section('title')
    Details Page
@endsection
@section('content')
    <section class="py-5 bg-color">

        <div class="container">
            <div class="row">

                <div class="col-md-4 card-border py-2">
                    <div class="card rounded" style="width: 18rem;">
                        <img src="{{ asset("$blog->Image") }}" class="card-img-top" alt="..." width="100px"
                            height="300px">

                        <div class="card-body  text-white bg-dark ">
                            <h3 class="card-title font text-white text-center"><b>{{ $blog->Name }}</b></h3>
                            <h3 class="card-title font text-white text-center"><b>{{ $blog->Category_name}}</b></h3>
                            <h3 class="card-title font text-white text-center"><b>{{ $blog->Brand_name }}</b></h3>
                            <h3 class="card-title font text-white text-center"><b>{{ $blog->Description }}</b></h3>
                            <h3 class="card-title font text-white text-center"><b>{{ $blog->Status }}</b></h3>
                       
                            &nbsp; &nbsp;<a href="{{ route('details', ['id' => $blog->id]) }}"
                                class="btn btn-outline-danger mx-5 font"> See More</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
@endsection
