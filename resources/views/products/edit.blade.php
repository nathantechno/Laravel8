@extends('products.base')
@section('title', 'Create Poduct')

@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div><br />
                  @endif
                    <form action="{{ route('products.update',$product->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="detail">Product Detail</label>
                            <textarea name="detail" id="detail" cols="30" rows="10" class="form-control">
                                {{ $product->detail }}
                            </textarea>
                        </div>
                        <div class="form-group mb-3">  
                            <button   class="btn btn-info" type="submit">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
