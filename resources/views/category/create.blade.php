@extends('main.layout')
@section('content')
   
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <h3>Create category Form</h3>

            <form action="{{URL::to('post-category-form')}}" method="post">
                    @csrf
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Category name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name" name="categoryName">
                
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
   
@endsection