@extends('layout')



@section('content')

    <h1>Resturant list page here</h1>
    @if (Session::get('status'))
        <div class="alert alert-warning d-flex align-items-center" role="alert">
            {{ Session::get('status') }}
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
                An example warning alert with an icon
            </div>
        </div>
    @endif
    {{-- {{ print_r($data) }} --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nmae</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <p>{{ $item->name }}</p>
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->address }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>


@endsection
