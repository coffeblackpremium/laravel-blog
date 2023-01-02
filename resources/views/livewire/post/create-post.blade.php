<div>
    <link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
    
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Criar Post')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="" >
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Título</span>
                                <input type="text" name="title" 
                                class="block w-full @error('title') border-red-500 @enderror mt-1 rounded-md"
                                 placeholder=" " value="{{old('title')}}" />
                            </label>
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Slug</span>
                                <input type="text" name="slug"
                                    class="block w-full @error('slug') border-red-500 @enderror mt-1 rounded-md"
                                    placeholder="" value="{{old('slug')}}" />
                            </label>
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Description</span>
                                <textarea id="markdown-editor" class="block w-full mt-1 rounded-md" name="description"
                                    rows="3"></textarea>
                            </label>
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> 
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
    <script>
        const easyMDE = new EasyMDE({
            showIcons: ['strikethrough', 'code', 'table', 'redo', 'heading', 'undo', 'heading-bigger', 'heading-smaller', 'heading-1', 'heading-2', 'heading-3', 'clean-block', 'horizontal-rule'],
            element: document.getElementById('markdown-editor')});
    </script>
</div>
