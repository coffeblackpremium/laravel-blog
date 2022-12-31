<x-app-layout>
    <x-slot name="header">
        <h2 class="text-black">
            Blog novo!!
        </h2>
    </x-slot>

    <section>
        @livewire('blog.show-blog')
    </section>
</x-app-layout>
