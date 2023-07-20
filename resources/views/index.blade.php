@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col">
                <h1>Città visitate</h1>
                <ul>
                    @foreach( $projects as $project)

                        <a href="{{ route('show', $project -> id) }}">
                            <li>{{ $project -> city}}</li>
                        </a>
            
                    @endforeach
                </ul>
            </div>
        </div>
    
    </div>
@endsection