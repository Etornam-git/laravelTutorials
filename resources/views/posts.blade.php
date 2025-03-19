<x-layout>
    <x-slot:heading>
        Blogs post
    </x-slot:heading>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Latest Blog Posts</h1>

        <ul class="space-y-8">
            @foreach ($posts as $post)
            <li class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                <article class="p-6">
                    <div class="mb-4">
                        <h2 class="text-2xl font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-200">
                            {{ $post['title'] }}
                        </h2>
                        <time class="text-sm text-gray-500" datetime="{{ $post->created_at }}">Published on {{ $post->created_at->format('M j, Y') }}</time>
                    </div>
                    
                    <p class="text-gray-600 leading-relaxed mb-6">
                        {{ $post['content'] }}
                    </p>

                    <div class="border-t pt-4">
                        <h3 class="text-sm font-semibold text-gray-500 uppercase mb-3">Comments ({{ count($post->comments) }})</h3>
                        <ul class="space-y-3">
                            @foreach ($post->comments as $comment)
                            <li class="bg-gray-50 p-3 rounded-md border-l-4 border-blue-200 hover:border-blue-400 transition-colors duration-200">
                                <div class="text-sm text-gray-600">
                                    
                                    <p class="mt-1">{{ $comment['comment'] }}</p>
                                </div>
                            </li>
                            @endforeach
                            @foreach ($post->tag as $tag)
                            <li class="bg-gray-50 p-3 rounded-md border-l-4 border-blue-200 hover:border-blue-400 transition-colors duration-200">
                                <div class="text-sm text-gray-600">
                                    
                                    <p class="mt-1">Tags: {{ $tag['name'] }}</p>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </article>
            </li>
            @endforeach
        </ul>
    </div>
</x-layout>