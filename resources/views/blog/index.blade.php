<div class="relative bg-gray-50 pt-10 pb-20 px-4 sm:px-6 lg:pt-16 lg:pb-28 lg:px-8 overflow-hidden">
    <div class="absolute inset-0">
        <div class="bg-white h-1/3 sm:h-2/3"></div>
    </div>

    <div class="sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
        <div class="relative h-full max-w-screen-xl mx-auto">
            <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2"
                width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-50" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2"
                width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-100" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
            </svg>
        </div>
    </div>

    <div class="relative max-w-7xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl tracking-tight text-gray-900 sm:text-4xl">
                Latest posts
            </h2>
        </div>
        <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">

            {{-- @foreach ($recentPosts as $post)
                <x-blog.post-card :post="$post"></x-blog.post-card>
            @endforeach --}}

        </div>
    </div>
</div>

<div class="w-full bg-gray-50">
    <div class="relative max-w-7xl mx-auto pb-12 px-4">
        <div class="text-center">
            <h3 class="text-2xl tracking-tight text-gray-900">
                More posts
            </h3>
        </div>

        <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">

            {{-- @foreach ($posts as $post)
                <x-blog.post-listing :post="$post"></x-blog.post-listing>
            @endforeach --}}

        </div>
        {{-- {!! $posts->links() !!} --}}
    </div>
</div>
