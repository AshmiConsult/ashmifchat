<div class="">
    <div class="w-full bg-white mb-2 shadow-md">
        <div class="form p-3">
            <div class="form-group flex flex-col">
                <label for="title">Title</label>
                <input class="bg-gray-200 p-2 rounded" type="text" name="title" id="" placeholder="Post Title"
                    wire:model.lazy="title">
            </div>
            <span class="text-red-400 error">
                @error('title')
                    {{$message}}
                @enderror
            </span>
            <div class="form-group flex flex-col">
                <label for="body">Body</label>
                <textarea class="bg-gray-200 p-2 rounded" rows="3" type="text" name="body"
                    wire:model.lazy="body"></textarea>
            </div>
            <span class="text-red-400 error">
                @error('body')
                    {{$message}}
                @enderror
            </span>
            <div class="form-group">
                <button {{ empty($body || $title) ? 'disabled' : ''}} wire:click="addPost"
                    class="bg-green-300 px-3 py-1 rounded-full shadow-md text-white font-semibold" type="submit">Save
                    Post</button>
            </div>
        </div>
    </div>
</div>