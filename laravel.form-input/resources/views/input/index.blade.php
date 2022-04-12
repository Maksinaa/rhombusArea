@extends('layouts.app')

@section('content')
  <div class="card border border-secondary">
    <div class="card-body">

      <form action="{{ route('index') }}" method="post">

        @csrf

        @include('input.partials.form')

      </form>

    </div>
  </div>
@endsection
