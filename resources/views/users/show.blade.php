@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-4">

            <div class="card">
                <div class="card-header">
                    tweets
                </div>
                <div class="card-body">
                    
                    <p class="card-text">Twetter api</p>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>My Entry</p>
                    <ul>
                        @foreach ($entries as $entry)
                            
                         <li><a href="{{$entry->getUrl()}}">{{$entry->title}}</a></li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
