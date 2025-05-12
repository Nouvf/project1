@extends('layouts.app')

@section('content')
<div>
    @if(isset($categories2s) && count($categories2s) > 0)
        @foreach($categories2s as $item)
            <div>
                <h3>{{ $item->name }}</h3>
                <p>{{ $item->description }}</p>
                <p>Icon: {{ $item->icon }}</p>
            </div>
        @endforeach
    @else
        <p>لا توجد فئات متاحة حاليًا.</p>
    @endif
</div>
@endsection