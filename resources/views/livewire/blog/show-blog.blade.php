<div class="my-19 box-content ">
   <header class="w-full h-96 mt-14 bg-gradient-to-r from-violet-500 to-fuchsia-500">
        <div class="">
            <h1 class="text-white flex items-center justify-center text-xl text-center mt-24 absolute"> 
        </div>
            Hello World, this is site lorem </h1>
           {{-- <img src="/storage/images/header.jpg" class="block w-full h-76"/> --}}
   </header>

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
