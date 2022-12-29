<div class="">
   <div class="w-full bg-cover bg-center bg-header-image" style="height:32rem;">
        <div clss="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-90">
            <div class="text-center py-44">
                <h1 class="text-white text-2xl font-extrabold uppercase md:text-3xl">
                    Bem-vindo ao meu
                    <span class="underline text-blue-400">Blog</span>
                </h1>
                <button class="mt-4 px-4 py-2 mr-5 bg-black text-white text-sm uppercase font-medium rounded 
                hover:bg-gray-500 focus:bg-gray-500"><i class="fa-brands fa-github"></i> Github</button>
                <button class="mt-4 px-4 py-2 bg-black text-white text-sm uppercase font-medium rounded 
                hover:bg-gray-500 focus:bg-gray-500"><i class="fa-brands fa-linkedin"></i> Linkedin</button>
            </div>
        </div>
    </div>
   

   <!-- Corpo do site !-->
   <div class="bg-slate-200 mx-auto shadow-sm rounded-lg w-32 my-3 ">
       <h2 class="font-bold text-2xl">Posts 2022</h2>
   </div>
   @foreach($posts as $post)
    <div class="max-w-lg mx-auto pt-4 flex ">
        <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
            <a href="#">

            </a>
            <div class="p-5">
                <img class="" src="{{$post->image_path}}" />
                <a href="#">
                    <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2"> {{$post->title}}</h5>
                </a>
                <p class="font-normal text-gray-700 mb-3">{{$post->description}}</p>
                <a class="text-white bg-blue-700 hover:bg-blue-800 
                focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex">
                    Leia mais
                </a>
            </div>
        </div>
    </div>
    @endforeach
    {{$posts->links()}}

</div>
