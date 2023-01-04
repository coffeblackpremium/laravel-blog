<div>
    <div class="w-full bg-cover filter bg-blend-multiply" style="height:32rem; background-image: linear-gradient(0deg, rgba(77, 93, 184, 0.61), rgba(0, 12, 184, 0.979)), url({{url("storage/{$post->image_path}")}});">

        <div clss="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-90">
            <div class="mx-auto max-w-4xl flex flex-row justify-center md:justify-start align-middle gap-2 py-4 p">
                <img class="hidden  md:block rounded-full w-24 items-center justify-center bg-blue-500 object-left " src="{{ url("storage/{$post->user->photo}")}}" />
                <h1 class="font-bold text-4xl self-center text-white">{{$post->title}}</h1>
            </div>
            <div class="bg-white mx-10 md:mx-auto shadow-lg rounded-lg md:max-w-4xl">
                <div class="mx-4 sm:mx-12 md:mx-24 text-left py-10 break-words">
                    @php
                            echo $post->body_content
                            @endphp
                    </div>
                <span class="font-sans flex justify-start italic break-words text-sm mx-4 pb-12 pt-6 md:my-6 md:mx-20">Publicado: {{$post->created_at->format('d/m/Y  H:i')}} </span>
            </div>
            </div>
        </div>
    </div>
   
    
</div>
