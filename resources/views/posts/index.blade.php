<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-auto shadow-sm sm:rounded-lg px-4">
                <div class="container">

                    <div class="py-4 px-3">

                        <div class="d-flex float-end">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary my-3">Create A Post</a>
                        </div>



                        <table class="table table-striped table-hover dark:table-dark table-auto">
                            <thead>
                                <tr class="table-dark">
                                    <th scope="col">ID</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Sub Title</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Time</th>
                                    <th scope="col" class="text-end">Actions</th>
                                    <th scope="col" class="text-end">Details</th>
                                </tr>
                            </thead>
                            @foreach ($posts as $post)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $post->id }}</th>
                                        <td>{{ $post->category }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->sub_title }}</td>
                                        <td>{{ $post->year }}</td>
                                        <td>{{ $post->created_at->diffForHumans() }}</td>
                                        <td>
                                            <form action="{{ route('posts.destroy', $post->id) }}"
                                                class="d-flex float-end" method="POST"
                                                onsubmit="return confirm('Are you sure? You want to Delete this Post !');">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('posts.edit', $post->id) }}"
                                                    class="btn btn-outline-success px-2"> <i
                                                        class="bi bi-pencil-fill"></i>
                                                    Edit</a>
                                                <button type="submit" class="btn btn-outline-danger px-1 ms-1"> <i
                                                        class="bi bi-trash3-fill"></i>
                                                    Delete</button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('posts.show', $post->id) }}"
                                                class="btn btn-outline-dark">Show Details</a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        {{ $posts->links('pagination::bootstrap-5') }}
                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
