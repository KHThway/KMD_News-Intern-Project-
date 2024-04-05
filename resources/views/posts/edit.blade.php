<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container">

                    <div class="container-fluid p-4 form-group">

                        <form action="{{ route('posts.update', $post->id) }}" class="row g-3 mx-2" method="POST"
                            enctype='multipart/form-data'>
                            @csrf
                            @method('PATCH')

                            <div class="col-sm-12 col-md-6 form-group mt-2 p-2">
                                <label for="title">Title</label>
                                <x-text-input type="text" name="title" id="title" class="form-control mt-2"
                                    placeholder="Enter Title ... " value="{{ $post->title }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>
                            <div class="col-sm-12 col-md-6 form-group mt-2 p-2">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control px-3 py-2 rounded-1 mt-2">
                                    @if ($post->category == 'Media')
                                        <option value="Media" selected>Media</option>
                                        <option value="CSR">CSR</option>
                                    @else
                                        <option value="Media">Media</option>
                                        <option value="CSR" selected>CSR</option>
                                    @endif
                                </select>
                            </div>

                            <div class="col-sm-12 col-md-12 form-group mt-2 p-2">
                                <label for="sub_title">Sub Title</label>
                                <x-text-input type="text" name="sub_title" id="sub_title" class="form-control mt-2"
                                    placeholder="Enter Sub Title ..." value="{{ $post->sub_title }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('sub_title')" />
                            </div>

                            <div class="col-sm-12 col-md-12 form-group mt-2 p-2">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control mt-2" id="content" rows="4">{{ $post->content }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('content')" />
                            </div>

                            <div class="col-sm-12 col-md-6 form-group mt-2 p-2">
                                <label for="image1">Image (Please Select Image for the Post | <span
                                        class="text-danger">required*</span>)</label>
                                <x-text-input type="file" name="image1" id="image1"
                                    class="form-control p-2 mt-2" />
                                <x-input-error class="mt-2" :messages="$errors->get('image1')" />

                                @if ($post->image1)
                                    <img src="{{ asset('storage/images/' . $post->image1) }}" alt=""
                                        class="img-fluid mt-3">
                                @endif
                            </div>

                            <div class="col-sm-12 col-md-6 form-group mt-2 p-2 d-flex justify-content-center">

                            </div>

                            <label for="image2">More Images (optional | <span class="text-danger">max: 3
                                    images</span>)</label>

                            <div class="col-sm-12 col-md-3 form-group mt-2 p-2">

                                <x-text-input type="file" name="image2" id="image2"
                                    class="form-control p-2 mt-2" />
                                <x-input-error class="mt-2" :messages="$errors->get('image2')" />
                                @if ($post->image2)
                                    <img src="{{ asset('storage/images/' . $post->image2) }}" alt=""
                                        class="img-fluid">
                                @endif
                            </div>

                            <div class="col-sm-12 col-md-3 form-group mt-2 p-2">
                                <x-text-input type="file" name="image3" id="image3"
                                    class="form-control p-2 mt-2" />
                                <x-input-error class="mt-2" :messages="$errors->get('image3')" />
                                @if ($post->image3)
                                    <img src="{{ asset('storage/images/' . $post->image3) }}" alt=""
                                        class="img-fluid">
                                @endif
                            </div>

                            <div class="col-sm-12 col-md-3 form-group mt-2 p-2">
                                <x-text-input type="file" name="image4" id="image4"
                                    class="form-control p-2 mt-2" />
                                <x-input-error class="mt-2" :messages="$errors->get('image4')" />
                                @if ($post->image4)
                                    <img src="{{ asset('storage/images/' . $post->image4) }}" alt=""
                                        class="img-fluid">
                                @endif
                            </div>

                            <div class="col-sm-12 col-md-3 form-group mt-2 p-2 d-flex justify-content-center">
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <label for="year">Year</label>
                                <x-text-input type="text" name="year" id="year" class="form-control p-2 mt-2"
                                    placeholder="Year" value="{{ $post->year }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('year')" />
                            </div>

                            <div class="mt-6">
                                <button type="submit" class="btn btn-outline-primary">Update</button>
                                <a href="{{ route('posts.index') }}" class="btn btn-secondary ms-3">Back</a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
