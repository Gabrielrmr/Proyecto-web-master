@extends('layouts/until')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
        @error('email')
            <small>{{$message}}</small>
        @enderror
        <input type="password" name="password" placeholder="Password" value="{{old('password')}}">
        @error('password')
            <small>{{$message}}</small>
        @enderror
        <input type="submit" value="Enviar">
    </form>
    {{-- @if (session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif --}}
@endsection
