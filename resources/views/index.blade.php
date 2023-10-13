@extends('layouts/until')

@section('content')
    @if (session('success'))
            <script>
                alert('{{ session('success') }}');
            </script>
        @endif
@endsection
