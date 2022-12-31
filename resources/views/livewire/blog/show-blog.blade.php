<div class="">
   <div class="w-full bg-cover bg-center bg-image-header filter bg-blend-multiply" style="height:32rem;">
        <div clss="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-90">
            <div class="text-center py-44">
                <h1 class="text-gray-200 text-2xl font-semibold uppercase md:text-3xl">
                    Bem-vindo ao meu
                    <span class="underline text-blue-500 font-semibold">Blog</span>
                </h1>
                <button class="mt-4 px-4 py-2 mr-5 bg-black text-white text-sm uppercase font-medium rounded 
                hover:bg-gray-500 focus:bg-gray-500"><i class="fa-brands fa-github"></i> Github</button>
                <button class="mt-4 px-4 py-2 bg-black text-white text-sm uppercase font-medium rounded 
                hover:bg-gray-500 focus:bg-gray-500"><i class="fa-brands fa-linkedin"></i> Linkedin</button>
            </div>
        </div>
    </div>
   

   <!-- Corpo do site -->
   <div class="bg-white mx-auto shadow-lg rounded-lg  max-w-4xl my-10 ">
       <h2 class="font-bold text-2xl mx-auto text-center py-10">Posts em 2022</h2>

   @foreach($posts as $post)
   
   {{-- {{ dd(url("storage/{$post->user->photo}"))}} --}}
    <div class="max-w-lg mx-auto pt-4 flex">
        <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-2xl mx-auto mb-5">
            <a href="#"></a>
            <div class="py-4 px-3">
                <a href="#">
                    <img class="" src="{{$post->image_path}}" />
                    <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 my-4">
                         {{$post->title}}</h5>
                </a>
                <p class="font-normal text-gray-700 mb-3">
                    {{$post->description}}</p>
                <a class="text-white bg-blue-700 hover:bg-blue-800 
                focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex">
                    Leia mais
                </a>
                <div class="pl-2 pb-2 mx-auto mt-4 flex items-center">
                    {{-- <img src="{{$post->user->profile_photo_path}}" class="rounded-full h-14 w-14 flex items-center justify-center bg-blue-500"/> --}}
                    @if($post->user->photo)
                    {{-- {{dd($post->user->photo)}} --}}
                        <img class="rounded-full h-14 w-14 flex items-center justify-center bg-blue-500" src="{{ url("storage/{$post->user->photo}")}}" />
                    @else
                    {{dd(url('assets/img/user-no-image/user-default.png'))}}
                        <img class="rounded-full h-14 w-14 flex items-center justify-center bg-blue-500" src="{{ url('assets/img/user-no-image/user-default.png') }}" />
                    @endif
                    <h2 class="pl-3 font-semibold text-md">{{$post->user->name}}</h2>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
    <div class="mx-auto">

        {{$posts->links('pagination::tailwind')}}
    </div>
</div>
