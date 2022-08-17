@extends('books.layout')
@section('content')


    <div class="card">
        <div class="card-header">Book View</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Book_Name : {{ $books->Book_name }}</h5>
                <p class="card-text">Author_Name : {{ $books->Author_name }}</p>
                <p class="card-text">ISPN : {{ $books->ISPN }}</p>
            </div>

            </hr>

        </div>
    </div>
