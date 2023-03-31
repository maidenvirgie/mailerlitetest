@extends('layout')

@section('content')


    @include('partials.session-status')

    <div class="container px-4 flex flex justify-center items-center flex-column mb-4">
        <h1 class="mb-4">Create Subscriber</h1>


        <form action="{{ route('subscribers.store') }}" method="POST">
            @csrf
            @include('subscribers._form', ['btnTxt' => 'Submit'])

        </form>
    </div>
@endsection
