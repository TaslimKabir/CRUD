@extends('master')

@section('title')
    Add-Product Page
@endsection

@section('content')
    <section class="py-5 bg-color">
        <h3 class="font margin">Please Fillup the Form properly</h3>
        <div class="col-md-8 mx-auto">
            <div class="container bg-dark rounded">
                <h4 class="text-danger text-center textFont">{{Session :: get ('msg')}}</h4>
                <form action="{{route('recinfo')}}" method="post" class="my-5" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="text" class="form-label text-white  textFont">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="">

                        <label for="text" class="form-label text-white  textFont">Category_name:</label>
                        <input type="text" class="form-control" name="ctName" id="ctName" aria-describedby="">

                        <label for="text" class="form-label text-white  textFont">Brand_name:</label>
                        <input type="text" class="form-control" name="bdName" id="bdName" aria-describedby="">
             
                        <label for="text" class="form-label text-white textFont">Description</label>
                        <input type="text" class="form-control" name="description" id="description"
                            aria-describedby="emailHelp">

                        <label for="img" class="form-label text-white textFont">Image:</label>
                        <input type="File" class="form-control" name="img" id="img" aria-describedby="">

                         <label for="text" class="form-label text-white  textFont">Status:</label>
                         <input type="text" class="form-control" name="status" id="status" aria-describedby="">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-light textFont" name="btn">Submit</button><br><br>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
