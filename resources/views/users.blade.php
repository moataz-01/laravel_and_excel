<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="p-4 text-5xl font-black">Users' data</h1>
                    <table
                        class="mb-4 border-separate border-spacing-2 border border-slate-400 table-auto text-white rounded-lg">
                        <thead>
                            <tr>
                                <th class="text-2xl p-2 border border-slate-300 rounded-lg">ID</th>
                                <th class="text-2xl p-2 border border-slate-300 rounded-lg">Name</th>
                                <th class="text-2xl p-2 border border-slate-300 rounded-lg">E-mail</th>
                                <th class="text-2xl p-2 border border-slate-300 rounded-lg">Phone number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="p-1 border border-slate-300 rounded-lg text-center">{{ $user->id }}
                                    </td>
                                    <td class="p-1 border border-slate-300 rounded-lg text-center">
                                        {{ $user->full_name }}</td>
                                    <td class="p-1 border border-slate-300 rounded-lg text-center">{{ $user->email }}
                                    </td>
                                    <td class="p-1 border border-slate-300 rounded-lg text-center">
                                        {{ $user->phone_number }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-3xl font-semibold">export users data</h3>
                    <form action="{{ route('users.export') }}" method="get">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 text-xl my-4">Download</button>
                    </form>

                    <h3 class="text-3xl font-semibold">import users data</h3>
                    <form action="{{ route('users.import') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" id="file"
                            class="block w-full text-l text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 mt-4
                            file:mr-4 file:py-2 file:px-4
                             file:border-0
                            file:text-sm file:font-semibold
                            file:bg-gray-500 file:text-white
                            hover:file:bg-gray-600 file:duration-300">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 my-4">Upload</button>
                    </form>
                    @if (session('status') === 'data-imported')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-green-600 dark:text-green-400">{{ __('Imported.') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
