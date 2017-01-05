@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                About Page
            </div>
            <div>
                @if (empty($people))
                    There are no people
                @endif

                @foreach ($people as $person)
                  <li>{{ $person }}</li>
                @endforeach
            </div>
        </div>
    </div>
@stop
