<div>    
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Criar Post')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form wire:submit.prevent='save'>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Título</span>
                                <input type="text" name="title"
                                wire:model.defer='title' 
                                class="block w-full mt-1 rounded-md"
                                 placeholder=" " value="{{old('title')}}" />
                            </label>
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">tema</span>
                                <input type="text" name="tema"
                                    wire:model.defer='tema'
                                    class="block w-full  mt-1 rounded-md"
                                    placeholder="" value="{{old('tema')}}" />
                            </label>
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Descrição</span>
                                <textarea wire:model='description' class="block w-full mt-1 rounded-md"></textarea>
                            </label>
                        </div>
                        <div class="mb-6">
                            <label class="block" wire:ignore>
                                <span class="text-gray-700">Conteudo</span>
                                <textarea wire:model='body_content' id="body_content" class="block w-full mt-1 rounded-md" name="body_content"
                                    rows="3"></textarea>
                            </label>
                        </div>
                        <div class="mb-6" wire:ignore>
                            <input type="file" wire:model.defer='image_path' />
                        </div>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" wire:click='save' type="button"> 
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>

        tinymce.init({
            selector: '#body_content',
            forced_root_block: false,
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
                editor.on('change', function (e) {
                    @this.set('body_content', editor.getContent());
                });
            }
        });
    </script>

</div>
