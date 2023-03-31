@extends('layout')

@section('content')
    <div class="container"></div>




    <div class="container px-4 flex flex justify-center items-center flex-column mb-4">
        <h1>Edit Subscriber</h1>

        @include('partials.session-status')


        <form action="{{ route('subscribers.update', $id) }}" method="POST">
            @method('PATCH')
            @csrf

            <label for="">Name</label><br>
            <input type="text" name="name" value="{{ old('name') }}"
                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
            {!! $errors->first('name', '<small>:message</small><br>') !!}

            <label for="">Country</label><br>
            <input type="text" name="country" value="{{ old('country') }}"
                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
            {!! $errors->first('country', '<small>:message</small><br>') !!}

            <button
                class="mt-4 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md bg-gray-100 border border-transparent font-semibold text-gray-800 hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 ring-offset-white focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:bg-gray-700 dark:hover:bg-gray-900 dark:text-white">Edit</button>

        </form>
    </div>
@endsection
