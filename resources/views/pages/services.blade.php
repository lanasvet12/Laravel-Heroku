@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $title }}</h1>
                @if(count($skills) > 0)
                    <ul class="list-group">
                        @foreach($skills as $skill)
                            <li class="list-group-item">{{ $skill }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection