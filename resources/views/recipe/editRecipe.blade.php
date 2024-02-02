<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />
  <link href="{{url('./src/output.css')}} " rel="stylesheet">
 

<title>Document</title>
</head>
<body>

  <header class="sticky inset-0 z-50 border-b border-slate-100 bg-white/80 backdrop-blur-lg">
    <nav
        class="mx-auto flex justify-around max-w-screen gap-8 px-6 transition-all duration-200 ease-in-out lg:px-12">
        <div class="relative flex items-center justify-center">
            <a href="{{ route('home.index')}}">
                <img src='/img/—Pngtree—fast food cooking_4103415.png' loading="lazy" style="color:transparent" width="80"
                    height="80"></a>
        </div>
        <ul class="hidden items-center justify-center gap-6 md:flex">
            <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                <a href="{{route('recipe.create')}}" class="ml-6 inline-flex items-center rounded-md border border-transparent bg-rose-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">New Recipe</a>
            </li>
            <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
             
              
                <a href="#">Contact</a>
     
            </li>
            <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                <a href="#">About </a>
            </li>
        </ul>
  
       
      
        <button id="burger-btn" class="md:hidden"><i class="fa-solid fa-bars text-2xl"></i></button>
  
  
    </nav>
    <div class="md:hidden">
        <div id="burger-menu"
            class="absolute flex hidden flex-col items-center space-y-6 font-bold bg-gray-50 py-8 left-6 right-6 drop-shadow-lg border border-gray-300">
            <a href="{{route('recipe.create')}}" class=" inline-flex items-center rounded-md border border-transparent bg-rose-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">New Recipe</a>

            <a href="#">Contact</a>
       
            <a href="">About</a>
         
  
        </div>
  
    </div>
  </header>



    <div class="max-w-xl mx-auto mt-10">
       
        <h2 class="text-lg font-medium mb-2 text-center">Editer Recipe</h2>
        <div class="border border-gray-300 p-4 rounded-lg">
            
          <form method="POST" action="{{route('recipe.update',['recipe'=>$recipe->id])}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="titre">
                       Nouveau Titre
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-500"
                        id="titre" type="text"
                        name="titre" placeholder="Entrer le titre" value="{{$recipe->titre}}">
                        <div class="text-center">
                          @error('titre')
                          <p class=" text-red-600">{{$message}}</p>
                          @enderror
                        </div>
                   
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="name">
                       Nouvelle Image
                    </label>
                    <div class="flex-1 items-center max-w-screen-sm mx-auto mb-3 space-y-4 sm:flex sm:space-y-0">
                        <div class="relative w-full">
                          <div class="items-center justify-center max-w-xl mx-auto">
                            <label class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none" id="drop"><span class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg><span class="font-medium text-gray-600">Drop files to Attach, or<span class="text-orange-600 underline ml-[4px]">browse</span></span></span><input type="file" name="image" class="hidden" accept="image/png,image/jpeg" id="input" value="{{$recipe->image}}"></label>
                          </div>
                        </div>
                      </div>
                      <div class="text-center">
                        @error('image')
                        <p class=" text-red-600">{{$message}}</p>
                        @enderror
                      </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="comment">
                       Nouvelle Description
                    </label>
                    <textarea rows="4"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-500"
                        id="comment" name="description" placeholder="Description">{{$recipe->description}}</textarea>
                        <div class="text-center">
                          @error('description')
                          <p class=" text-red-600">{{$message}}</p>
                          @enderror
                        </div>
                </div>
                <div class="flex justify-end">
                    <button
                        class="bg-rose-600 hover:bg-rose-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">Editer</button>
                </div>
            </form>
        </div>
    </div>








      </div>





      <script src="{{url('./js/main.js')}}"></script>

</body>
</html>