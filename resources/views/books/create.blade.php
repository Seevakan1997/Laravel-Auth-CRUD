@extends('books.layout')
@section('content')

    <div class="card">
        <div class="card-header">Add New Book</div>
        <div class="card-body">

            <form action="{{ url('book') }}" method="post">
                {!! csrf_field() !!}
                <label>Book_Name</label></br>
                <input type="text" name="Book_name" id="Book_name" class="form-control"></br>
                <label>Author_Name</label></br>
                <input type="text" name="Author_name" id="Author_name" class="form-control"></br>
                <label>ISPN</label></br>
                <input type="text" name="ISPN" id="ISPN" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
