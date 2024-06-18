@extends('layout.main')

@section('css-library')

@endsection

@section('css-custom')
    
@endsection

@section('header')

    @include('layout.header')

@endsection

@section('content')
               
<div class="pb-9 pt-28 w-full max-w-7xl mx-auto">
    <section class="bg-blue-100 min-h-screen flex items-center justify-center py-8">
        <div class="w-full max-w-md">
            <h1 class="text-2xl font-bold text-center mb-6">Image Content Add List</h1>
            <form class="space-y-6" action="{{ route('dashboard-post.store') }}" method="POST" enctype="multipart/form-data">
                <!-- Alert for errors -->
                @if(session('gagal'))
                <div class="bg-red-500 text-white font-bold rounded-lg px-4 py-2 mb-4">
                    {{ session('gagal') }}
                </div>
                @endif
                @if(session('sukses'))
                <div class="bg-green-500 text-white font-bold rounded-lg px-4 py-2 mb-4">
                    {{ session('sukses') }}
                </div>
                @endif
                @csrf
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Content Title" value="{{ old('title') }}">
                    @error('title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Content Description">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="idMenu" class="block text-sm font-medium text-gray-700">For Menu</label>
                    <select id="idMenu" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" name="idMenu" required>
                        <option value="">Pilih</option>
                        @foreach ($menu as $item)
                            <option value="{{ $item->id }}" {{ old('idMenu') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('idMenu')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="bg-gray-50 text-center px-4 rounded max-w-md flex flex-col items-center justify-center cursor-pointer border-2 border-gray-400 border-dashed mx-auto font-[sans-serif]">
                    <div class="py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 mb-2 fill-gray-600 inline-block" viewBox="0 0 32 32">
                            <path d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"/>
                            <path d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"/>
                        </svg>
                        <h4 class="text-base font-semibold text-gray-600">Drag and drop files here</h4>
                    </div>
                    <p id="file-name" class="text-xs text-gray-400 mt-4 bold"></p>
                    <hr class="w-full border-gray-400 my-2" />
                    <div class="py-6">
                        <input type="file" id="image" name="image" class="hidden" />
                        <label for="image" class="block px-6 py-2.5 rounded text-gray-600 text-sm tracking-wider font-semibold border-none outline-none cursor-pointer bg-gray-200 hover:bg-gray-100">Browse Files</label>
                        <p id="file" class="text-xs text-gray-400 mt-4">PNG, JPG, SVG, WEBP, and GIF are Allowed.</p>
                        @error('image')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Image preview container -->
                <div class="mt-4" id="image-preview-container" style="display:none;">
                    <label class="block text-sm font-medium text-gray-700">Image Preview</label>
                    <img id="image-preview" src="" alt="Image Preview" class="mt-2 max-w-full h-auto border rounded-md shadow-sm">
                    <button type="button" id="remove-image" class="mt-2 px-4 py-2 bg-red-500 text-white rounded-md">Remove Image</button>
                </div>
                <div>
                    <button class="w-full bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2" type="submit">Save</button>
                </div>
            </form>                
        </div>
    </section>
</div>

@endsection
    
@section('footer')

    @include('layout.footer')

@endsection

@section('js-custom')

<script>
    document.getElementById('image').addEventListener('change', function() {
        var fileName = this.files[0].name;
        document.getElementById('file-name').innerText = fileName;
    });

    document.getElementById('image').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('image-preview').src = e.target.result;
            document.getElementById('image-preview-container').style.display = 'block';
        }
        reader.readAsDataURL(file);
    } else {
        document.getElementById('image-preview').src = '';
        document.getElementById('image-preview-container').style.display = 'none';
    }
});

document.getElementById('remove-image').addEventListener('click', function () {
    document.getElementById('image').value = '';
    document.getElementById('image-preview').src = '';
    document.getElementById('image-preview-container').style.display = 'none';
});


</script>

@endsection