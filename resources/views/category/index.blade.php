@extends('main.layout')
@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                        
                    </tr>
                </tfoot>
                <tbody>

                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-info">Edit</a>
                            <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>               
                    </tr>
                    @endforeach
                  
                    
                </tbody>
            </table>
        </div>
    </div>
   
   
@endsection