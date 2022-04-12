@extends('layouts.app')
@section('content')

<h1>Квадрат</h1>
<form action="{{route('calculate')}}" method="POST">
    @csrf
    <label for="side">
        Сторона квадрата
    <input name="side" id="side" value="{{$side ?? old('side', '')}}">
    </label>
    <button type="submit" name="calculate">
        Вычеслить
    </button>
</form>
<p>
    Периметр:{{$perimeter ?? ''}}
</p>

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
