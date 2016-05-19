@extends('template.common')

@section('title', $pageTitle)

@section('content')
    <div class='commonList'>
        <ul class='top'>
            @foreach ($topList as $t)
            <li class='item'>
                <div class='title'>
                    {{ $t['title'] }}
                </div>
                <div class='content'>
                    {{ $t['content'] }}
                </div>
            </li>
            @endforeach
        </ul>

        <ul class='all'>
            @foreach ($lists as $l)
            <li class='item'>
                <div class='title'>
                    {{ $l['title'] }}
                </div>
                <div class='content'>
                    {{ $l['content'] }}
                </div>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
