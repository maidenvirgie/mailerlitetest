@extends('layout')



@section('content')
    <div class="container mx-auto px-4">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">

                    <div class="overflow-hidden">
                        @include('partials.session-status')

                        <table id="myTable" class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Country</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Time</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($table as $item)
                                    <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-900 dark:even:bg-slate-800">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $item['name'] }} </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-blue-800 dark:text-gray-200 hover:text-blue-700">
                                            <a href="{{ route('subscribers.edit', $item['id']) }}">{{ $item['email'] }}
                                            </a></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $item['country'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $item['subscribed_at_date'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $item['subscribed_at_time'] }}</td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="text-blue-500 hover:text-blue-700"
                                                href="{{ route('subscribers.delete', $item['id']) }}">Delete</a>
                                        </td>
                                    </tr>


                                @empty
                                    <h1>There isn't any subscriber yet.</h1>
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <nav class="flex justify-center items-center space-x-2">
            @if (!empty($prev_cursor))
                <a class="text-gray-500 hover:text-blue-600 p-4 inline-flex items-center gap-2 rounded-md"
                    href="{{ route('subscribers.index', $prev_cursor) }}">
                    <span aria-hidden="true">«</span>
                    <span class="">Previous</span>
                </a>
            @endif
            @if (!empty($next_cursor))
            <a class="text-gray-500 hover:text-blue-600 p-4 inline-flex items-center gap-2 rounded-md"
                href="{{ route('subscribers.index', $next_cursor) }} ">
                <span class="">Next</span>
                <span aria-hidden="true">»</span>
            </a>
            @endif
        </nav>
    @endsection
