<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container">

                    <div class="container-fluid p-4 form-group">

                        <form action="{{ route('posts.store') }}" class="row g-3 mx-2" method="POST"
                            enctype='multipart/form-data'>
                            @csrf

                            <div class="col-sm-12 col-md-6 form-group mt-2 p-2">
                                <label for="title">Title</label>
                                <x-text-input type="text" name="title" id="title" class="form-control mt-2"
                                    placeholder="Enter Title ... " value="{{ old('title') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>
                            <div class="col-sm-12 col-md-6 form-group mt-2 p-2">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control px-3 py-2 rounded-1 mt-2">
                                    <option value="" disabled>Select Category</option>
                                    <option value="Media">Media</option>
                                    <option value="CSR">CSR</option>
                                </select>
                            </div>

                            <div class="col-sm-12 col-md-12 form-group mt-2 p-2">
                                <label for="sub_title">Sub Title</label>
                                <x-text-input type="text" name="sub_title" id="sub_title" class="form-control mt-2"
                                    placeholder="Enter Sub Title ..." value="{{ old('sub_title') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('sub_title')" />
                            </div>

                            <div class="col-sm-12 col-md-12 form-group mt-2 p-2">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control mt-2" id="content" rows="4">{{ old('content') }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('content')" />
                            </div>

                            <div class="col-sm-12 col-md-6 form-group mt-2 p-2">
                                <label for="image1">Image (Please Select Image for the Post | <span
                                        class="text-danger">required*</span>)</label>
                                <x-text-input type="file" name="image1" id="image1"
                                    class="form-control p-2 mt-2" />
                                <x-input-error class="mt-2" :messages="$errors->get('image1')" />
                            </div>

                            <div class="col-sm-12 col-md-6 form-group mt-2 p-2 d-flex justify-content-center">

                            </div>

                            <label for="image2">More Images (optional | <span class="text-danger">max: 3
                                    images</span>)</label>

                            <div class="col-sm-12 col-md-3 form-group mt-2 p-2">

                                <x-text-input type="file" name="image2" id="image2"
                                    class="form-control p-2 mt-2" />
                                <x-input-error class="mt-2" :messages="$errors->get('image2')" />
                            </div>

                            <div class="col-sm-12 col-md-3 form-group mt-2 p-2">
                                <x-text-input type="file" name="image3" id="image3"
                                    class="form-control p-2 mt-2" />
                                <x-input-error class="mt-2" :messages="$errors->get('image3')" />
                            </div>

                            <div class="col-sm-12 col-md-3 form-group mt-2 p-2">
                                <x-text-input type="file" name="image4" id="image4"
                                    class="form-control p-2 mt-2" />
                                <x-input-error class="mt-2" :messages="$errors->get('image4')" />
                            </div>

                            <div class="col-sm-12 col-md-3 form-group mt-2 p-2 d-flex justify-content-center">
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <label for="year">Year</label>
                                <x-text-input type="number" name="year" id="year" class="form-control p-2 mt-2"
                                    placeholder="Year" value="<?php echo date('Y'); ?>" />
                            </div>

                            <div class="mt-6">
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                                <a href="{{ route('posts.index') }}" class="btn btn-secondary ms-3">Back</a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
