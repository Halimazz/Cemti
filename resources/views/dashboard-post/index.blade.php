@extends('layout.main')

@section('css-library')

@endsection

@section('css-custom')
    <style>
        article > img {
            object-fit: cover;
        }

        .justify-right {
            text-align: justify;
            text-align-last: right;
        }
    </style>
@endsection

@section('header')

    @include('layout.header')

@endsection

@section('content')
    <div class="w-full max-w-11xl mx-auto">
        <center>
            <div id="lintangDef" class="place-content-center mt-36">
                <a href="{{ route('dashboard-post.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add Image And Description
                    </button>
                </a>
            </center>
        
        <div id="lintangDef" class="mt-10">
            <!-- alert modal -->
            @if (session()->has('sukses') || session()->has('gagal'))
                        <div id="alertModal" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
                            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md mx-auto">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-lg font-bold">
                                        {{ session()->has('sukses') ? 'Success' : 'Error' }}
                                    </h2>
                                    <button class="ml-2 text-black" onclick="closeAlert()">x</button>
                                </div>
                                <div class="mt-4">
                                    <p class="{{ session()->has('sukses') ? 'text-green-500' : 'text-red-500' }}">
                                        {{ session('sukses') ?? session('gagal') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- end alert modal -->
                    <div class="container mx-auto p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Vision</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($vision as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $item->title }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Strategy</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($strategy as $item)
                                            @if ($item == null)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                       Data Masih Kosong
                                                    </div>
                                                </td>
                                            @else
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $item->title }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Target</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($target as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Organization</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($target as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $target->links() }}
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Capstone</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($capstone as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $capstone->links() }}
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Research Drant</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($researchDrant as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $researchDrant->links() }}
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Medical Rehabilitation</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($medicalRehabilitation as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $medicalRehabilitation->links() }}
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Medical Image Processing</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($medicalImageProcessing as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $medicalImageProcessing->links() }}
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Facilities</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($facilities as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $facilities->links() }}
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Education And Training</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($education as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $education->links() }}
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Product Development</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($productDevelopment as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $productDevelopment->links() }}
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Sales</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($sales as $item)
                                            <tr>
                                                div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Medical Image Processing</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($medicalImageProcessing as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $medicalImageProcessing->links() }}
                            </div>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $sales->links() }}
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Consulting</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($consulting as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $consulting->links() }}
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Commercil</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($commercil as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $commercil->links() }}
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">Event</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($event as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $event->links() }}
                            </div>
                            <div class="bg-white p-4 text-center border rounded-lg shadow">
                                <h2 class="text-lg font-semibold mb-4">News</h2>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($news as $item)
                                            <tr>
                                                @if ($item == null)
                                                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Data Masih Kosong
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $item->title }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        <a href="{{ route('dashboard-post.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        <form action="{{ route('dashboard-post.destroy', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Data Masih Kosong
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                                <!-- Pagination -->
                                {{ $news->links() }}
                            </div>
                            
                           
                        </div>
                   
                        {{-- <div class="bg-white p-4 text-center border rounded-lg shadow">Target</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">Organization</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">Capstone</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">Research Drant</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">Medical Rehabilitation</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">Medical Image Processing</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">Facilities</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">Education</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">Product Development</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">Sales</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">Consulting</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">Commercil</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">Event</div>
                        <div class="bg-white p-4 text-center border rounded-lg shadow">News</div> --}}
                    </div>
        </div>
    </div>
    
@endsection
    
@section('footer')

    @include('layout.footer')

@endsection

@section('js-custom')

@endsection