@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h2>Last Entries</h2>

            @foreach ($entries as $entry)

            <div class="card mt-4">
                <div class="card-header">{{$entry->id}}. {{$entry->title}} </div>

                <div class="card-body">
                     

                    {{$entry->content}} 

                </div>

                <div class="card-footer">

                   <small>Author:</small>  <a href="{{url('/@'. $entry->user->userName . '/')}} ">{{$entry->user->name}}</a>

                </div>
            </div>
                    
            @endforeach

            {{$entries->links()}}
            
        </div>
    </div>
</div>
@endsection
