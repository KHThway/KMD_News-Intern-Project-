<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Post Detail Review
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg px-5">
                <main>

                    <div class="d-flex justify-content-center mt-5 mb-3">
                        <h1 class="display-3">{{ $post->category }}</h1>
                    </div>

                    <div class="container">
                        <a href="{{ route('posts.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i>
                            back</a>
                    </div>

                    <section id="post-detail" class="container">
                        <div class="row">
                            <div class="h3 my-3 p-3 fw-bold">
                                {{ $post->title }}
                            </div>
                            <div class="col-md-12 col-lg-9">
                                <div>
                                    @if ($post->image1)
                                        <img src="{{ asset('storage/images/' . $post->image1) }}" alt=""
                                            class="img-fluid">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-3">
                                <div class="row">
                                    <div class="col-md-12 my-1">
                                        @if ($post->image2)
                                            <img src="{{ asset('storage/images/' . $post->image2) }}" alt=""
                                                class="img-fluid">
                                        @endif
                                    </div>
                                    <div class="col-md-12 my-1">
                                        @if ($post->image3)
                                            <img src="{{ asset('storage/images/' . $post->image3) }}" alt=""
                                                class="img-fluid">
                                        @endif
                                    </div>
                                    <div class="col-md-12 my-1">
                                        @if ($post->image4)
                                            <img src="{{ asset('storage/images/' . $post->image4) }}" alt=""
                                                class="img-fluid">
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="my-3">
                                <span class="text-secondary lh-base"> Published by KMD Family at</span>
                                <a href="">{{ $post->year }}</a>
                                <span class="float-end text-secondary">
                                    <i class="bi bi-hourglass mx-2"></i>{{ $post->created_at->diffForHumans() }}
                                </span>
                            </div>

                            <div id="detail-content" class="col-md-12 col-lg-12 p-2 my-3 mb-5">
                                <div class="h5 fw-bold">
                                    {{ $post->sub_title }}
                                </div>
                                <p class="lh-base">
                                    {{ $post->content }}
                                </p>
                            </div>
                        </div>

                    </section>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
