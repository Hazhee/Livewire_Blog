<div id="posts" class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div class="text-gray-500">
            @if ($search)
                Search {{$search}}
            @endif
        </div>
        <div id="filter-selector" class="flex items-center space-x-4 font-light ">
            <button wire:click='setSort("desc")' class="{{ $sort == 'desc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4">Latest</button>
            <button wire:click='setSort("asc")' class="{{ $sort == 'asc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-posts.post-item :key="$post->id" :post="$post"/>
        @endforeach
    </div>

    <div class="my-3">
        {{$this->posts->links()}}
    </div>
</div>