@extends('main.layout')
@section('content')
        @if(Session::get('success'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{Session::get('success')}}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{Session::get('failed')}}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
    <div class="row justify-content-center my-3">
        
       

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