<div>
    <div class="w-full bg-cover filter bg-blend-multiply" style="height:32rem; background-image: url({{url("storage/{$post->image_path}")}})">
        <div clss="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-90">
            <div class="text-center py-44">
                <h1 class="text-gray-200 text-2xl font-semibold uppercase md:text-3xl">
                    Bem-vindo ao meu
                    <span class="underline text-blue-500 font-semibold">Blog</span>
                </h1>
                <button class="mt-4 px-4 py-2 mr-5 bg-black text-white text-sm uppercase font-medium rounded 
                hover:bg-gray-500 focus:bg-gray-500">
                    <a href="https://github.com/coffeblackpremium/">
                        <i class="fa-brands fa-github"></i> Github
                    </a>
                </button>
                <button class="mt-4 px-4 py-2 bg-black text-white text-sm uppercase font-medium rounded 
                hover:bg-gray-500 focus:bg-gray-500">
                    <a href="https://www.linkedin.com/in/jo%C3%A3o-damaceno-martins-da-silva-27b3771b6/">
                        <i class="fa-brands fa-linkedin"></i> Linkedin
                    </a>
                </button>
            </div>
        </div>
    </div>
   
    
    <div class="bg-white mx-auto shadow-lg rounded-lg  max-w-4xl my-10 ">
        <h2 class="font-bold text-2xl mx-auto text-center py-10">{{$post->title}}</h2>
        <div class="mx-24 text-left py-10">
            @php
                echo $post->body_content
            @endphp
        </div>
    </div>
</div>
