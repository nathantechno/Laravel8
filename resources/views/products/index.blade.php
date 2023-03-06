@extends('products.base')
@section('title', 'Create Poduct')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>

                    </div>
                    @if (session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br />
                    @endif
                    Total:{{ $prod->total() }}
                    Current page:{{ $prod->count() }}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Detail</th>
                                <th scope="col" colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prod as $row)
                                <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->detail }}</td>
                                    <td>
                                        <a href="{{ route('products.edit', $row->id) }}"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <form action="{{ route('products.destroy', $row->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm/">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <nav>
                        <ul class="pagination">

                            {{ $prod->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

@endsection
