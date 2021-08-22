@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Entry</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form action="{{url('/entries')}} " method="post">

                    @csrf
                

                    <div class="form-group">
                        <label for="title" class="col text-center">Title</label>

                        <div class="col">
                            <input id="email" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col text-center">Content</label>

                        <div class="col">
                            <textarea id="content" type="email" class="form-control @error('content') is-invalid @enderror" name="content" >
                                {{ old('content') }}
                            </textarea>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Publish</button>
                      </div>

                      
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
