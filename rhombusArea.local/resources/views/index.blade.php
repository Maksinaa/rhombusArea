@extends('layouts.app')
@section('content')

<h2>Result:{{$area ?? ''}}</h2>
<form action="{{route('calculate')}}" method="POST">
    @csrf
    <label for="side">
        Side
    <input name="side" id="side" value="{{$side ?? old('side', '')}}">
    </label>
    <label for="height">
        Height
    <input name="height" id="height" value="{{$height ?? old('height', '')}}">
    </label>
    <button type="submit" name="calculate">
        Calculate
    </button>
</form>


@if ($errors->any())
    <hr>
    <p>Ошибки данных:</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
