@extends('books.layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Details</div>
        <div class="card-body">

            <form action="{{ url('book/' . $books->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $books->id }}" id="id" />
                <label>Book_Name</label></br>
                <input type="text" name="Book_name" id="Book_name" value="{{ $books->Book_name }}"
                    class="form-control"></br>
                <label>Author_Name</label></br>
                <input type="text" name="Author_name" id="Author_name" value="{{ $books->Author_name }}"
                    class="form-control"></br>
                <label>ISPN</label></br>
                <input type="text" name="ISPN" id="ISPN" value="{{ $books->ISPN }}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
