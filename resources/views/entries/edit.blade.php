@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Entry</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form action="{{url('/entries/' . $entry->id )}} " method="post">

                    @method('PUT')

                    @csrf
                

                    <div class="form-group">
                        <label for="title" class="col">Title</label>

                        <div class="col">
                            <input id="email" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $entry->title) }}" required>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col">Content</label>

                        <div class="col">
                            <textarea id="content" type="email" class="form-control @error('content') is-invalid @enderror" name="content"  required>
                                {{ old('content', $entry->content) }}
                            </textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Save Chager</button>
                      </div>

                      
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
