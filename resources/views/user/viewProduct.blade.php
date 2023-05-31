@extends('master')

@section('title')
    View-Product Page
@endsection

@section('content')
<section class="bg-color py-5">
  <div class="container">
    <table class="table table-bordered border-white bg-dark text-white" border="5px solid " >
      <thead>
        <tr>
          <th scope="col"  class="text-center font">Id</th>
          <th scope="col"  class=" text-center font">Name</th>
          <th scope="col"  class=" text-center font">Category-Name</th>
          <th scope="col"  class=" text-center font">Brand-Name</th>
          <th scope="col" class="text-center font">Description</th>
          <th scope="col" class="text-center font">Image</th>
          <th scope="col" class="text-center font">Status</th>
          <th scope="col" class="text-center font">Edit/Delete</th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($blogs as $blog)
        <tr>
          <td>{{$blog->id}}</td>
          <td class="text-center textFont text-white">{{$blog->Name}}</td>
          <td class="text-center textFont">{{$blog->Category_name}}</td>
          <td class="text-center textFont">{{$blog->Brand_name}}</td>
          <td class=" text-center textFont">{{$blog->Description}}</td>
          <td><img src="{{asset("/$blog->Image")}}" class="card-img-top" alt="" width="50px" height="100px"></td>
          <td class="text-center textFont">{{$blog->status}}</td>
      
          <td class="text-center text-center"><a href="#" class="btn btn-danger textFont" >Edit</a> &nbsp;<a href="{{route('delete',['id'=> $blog->id])}}" class="btn btn-success textFont">Delete</a></td>
        
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>
@endsection