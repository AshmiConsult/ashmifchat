<div>
    @livewire('new-post')

    <div class="">
        @foreach ($posts as $post)
        <div
            class="mb-2 bg-white p-2 rounded shadow-md flex" wire:transition.slide.up>
            <img
                class="w-8 h-8 rounded-full mr-2"
                src="https://avatars3.githubusercontent.com/u/20401606?s=460&v=4"
                alt=""
            />
            <div>
                <div class="flex items-baseline">
                    <span class="text-sm text-black mb-1"><h2>{{$post->user->name}}</h2></span>
                    <small class="ml-1 text-gray-600">{{$post->created_at->diffForHumans()}}</small>
                </div>
                <div>
                    <h2>{{$post->title}}</h2>
                    {{$post->body}}
                </div>
                <div class="actions">
                    <a href="/posts/{{$post->id}}/edit" class="bg-blue-500 px-2 rounded-full shadow-md text-white" type="submit">Edit</a>

                    <button 
                    class="bg-red-500 px-2 rounded-full shadow-md text-white" 
                    onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                    wire:click="deletePost({{$post->id}})" 
                    type="submit">Delete</button>
                </div>
            </div>
        </div>
        @endforeach {{$posts->links()}}
    </div>
</div>
`
