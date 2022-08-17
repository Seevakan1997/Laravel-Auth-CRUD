@extends('books.layout')
@section('content')
    <div>
        <h2>Welcome {{ auth()->user()->name }}!</h2>
        <div style="padding-left: 75%"><a class="btn btn-success btn-sm" href="logout">LogOut</a></div>

    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Books Details</h2>

                    </div>

                    <div class="card-body">
                        <a href="{{ url('/book/create') }}" class="btn btn-success btn-sm" title="Add New Book">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Book_Name</th>
                                        <th>Author_Name</th>
                                        <th>ISPN</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->Book_name }}</td>
                                            <td>{{ $item->Author_name }}</td>
                                            <td>{{ $item->ISPN }}</td>

                                            <td>
                                                <a href="{{ url('/book/' . $item->id) }}" title="View Book"><button
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/book/' . $item->id . '/edit') }}"
                                                    title="Edit Book"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button></a>

                                                <form method="POST" action="{{ url('/book' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Book"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
    </div>
@endsection
