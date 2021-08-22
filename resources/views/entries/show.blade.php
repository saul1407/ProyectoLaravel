@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$entry->title}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{$entry->content}}</p>


                     @can ('update', $entry)
                         

                        <a href="{{url('entries/' . $entry->id . '/edit')}} "><button class="btn btn-primary" type="button">Edit Entry</button></a>

                    @endcan
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
