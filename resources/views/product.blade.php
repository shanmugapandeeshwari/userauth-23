@extends('layouts.app')
   
@section('content')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>
                <div class="card-body">
                <a class="btn btn-primary float-right mb-4" href="{{url('/add-product')}}">Add product</a>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($product as $products)
                        <tr>
                        <th scope="row">{{$products->id}}</th>
                        <td>{{$products->name}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->category_id}}</td>
                        <td style="display:flex">
                        <div>
                        <a class="btn btn-primary mr-2" href="{{url('/edit-product/'.$products->id)}}">Edit</a>
                        </div>
                        <form action="{{url('/delete-product/'.$products->id)}}" method="post">
                        @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</div>      
                        </form>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection