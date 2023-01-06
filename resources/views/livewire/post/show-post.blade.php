<div class="break-words ">
    <div class="w-full bg-cover filter bg-blend-multiply"
        style="height:32rem; background-image: linear-gradient(0deg, rgba(77, 93, 184, 0.61), rgba(0, 12, 184, 0.979)), url({{url("$post->image")}});">
        <div clss=" flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-90 ">
            <div class="xl:max-w-7xl pt-7 xl:justify-start flex justify-center md:justify-start md:mx-auto align-middle gap-2 py-4">
                <img class="hidden xl:ml-8 md:block rounded-full w-24 h-24 items-center justify-center bg-blue-500 object-left "
                src="{{ url("storage/{$post->user->photo}")}}" />
                <h1 class="font-bold text-4xl self-center text-white">{{$post->title}}</h1>
            </div>
            <div class="bg-gray-100 mx-10 md:mx-auto mb-16 shadow-lg rounded-lg md:max-w-7xl overflow-auto">
                <div class="mx-4 sm:mx-12 md:mx-24 text-left py-10 break-words ">
                    @php
                        echo $post->body_content
                    @endphp
                    
                </div>
                <p class="font-sans pl-5 flex justify-start italic break-words text-sm mx-4 pb-12 pt-6 md:my-6 md:mx-20">
                    Publicado:
                    {{$post->created_at->format('d/m/Y H:i')}}
                </p>
            </div>
        </div>
        @include('livewire.footer')
    </div>
        
</div>