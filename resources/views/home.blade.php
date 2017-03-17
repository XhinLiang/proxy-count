@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div id="content">
                <ul>
                    @foreach ($list as $item)
                    <li style="margin: 50px 0;">
                        <div class="title">
                            <h4>{{ $item->name }}</h4>
                        </div>
                        <div class="body">
                            <a href="{{ url('proxy', ['id' => $item->id]) }}">
                                <p>{{ url('proxy', ['id' => $item->id]) }}</p>
                            </a>
                            <a href="{{ url($item->target_url) }}">
                                <p>{{ $item->target_url }}</p>
                            </a>
                            <p>{{ $item->count }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
