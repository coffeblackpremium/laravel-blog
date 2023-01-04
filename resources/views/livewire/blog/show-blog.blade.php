<div class="py-5">
    <div class="w-full bg-cover bg-center bg-image-header filter bg-blend-multiply" style="height:32rem;">
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


    <!-- Corpo do site -->
    <div class="bg-white mx-auto rounded-lg  max-w-4xl my-10 md:max-w-full">
        <h2 class="font-light text-4xl mx-auto text-center py-10 font-roboto">Posts Mais recentes</h2>

        <div class="flex flex-col gap-5">
            @foreach($posts as $post)
            <div
                class="w-full lg:max-w-3xl max-w-sm mx-auto lg:flex transition ease-in-out delay-150 hover:-translate-y-1 hover:shadow-lg hover:scale-110 duration-300 ">
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                    style="background-image: url({{ url("storage/{$post->image_path}") }});" title="Woman holding a
                    mug">
                </div>
                <div
                    class="border-r border-b border-l self-center border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <div class="text-gray-900 font-bold text-xl mb-2">{{$post->title}}</div>
                        <p class="text-gray-700 text-base">{{$post->description}}</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="{{url("storage/{$post->user->photo}")}}"
                        alt="Avatar of
                        Jonathan Reinink">
                        <div class="text-sm">
                            <p class="text-gray-900 leading-none">{{$post->user->name}}</p>
                            <p class="text-gray-600">{{$post->created_at->format('d-m-Y / H:i:s')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="mx-auto">
        {{$posts->links('pagination::tailwind')}}
    </div>
</div>