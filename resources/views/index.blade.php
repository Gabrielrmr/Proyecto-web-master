@extends('layouts/until')

@section('content')
    <form action="{{ route('registro') }}" method="post">
        @csrf
        <input type="text" name="fullname" placeholder="nombre" value="{{ old('fullname') }}">
        @error('fullname')
            <small style="color: red">*{{ $message }}</small>
        @enderror
        <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
        @error('email')
            <small style="color: red">*{{ $message }}</small>
        @enderror
        <input type="password" name="password" placeholder="password" value="{{ old('password') }}">
        @error('password')
            <small style="color: red">*{{ $message }}</small>
        @enderror
        <select name="rol_id" id="">
            <option value="" selected hidden>Seleccione su rol</option>
            @foreach ($rol as $item)
                <option value="{{ $item->id }}" {{ old('rol_id') == $item->id ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
            @endforeach
        </select>

        @error('rol_id')
            <small style="color: red">*{{ $message }}</small>
        @enderror

        <input type="submit" value="Enviar">
    </form>

    @if (session('success'))
            <script>
                alert('{{ session('success') }}');
            </script>
        @endif
@endsection
