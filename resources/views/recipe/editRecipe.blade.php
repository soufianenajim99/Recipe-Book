<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />
  <link href="{{url('./src/output.css')}} " rel="stylesheet">

<title>Document</title>
</head>
<body>

    <header class="bg-white shadow-sm lg:static lg:overflow-y-visible" x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'fixed inset-0 z-40 overflow-y-auto': open }" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="relative flex justify-between lg:gap-8 xl:grid xl:grid-cols-12">
            <div class="flex md:absolute md:inset-y-0 md:left-0 lg:static xl:col-span-2">
              <div class="flex flex-shrink-0 items-center">
                <a href="{{route('home.index')}}">
                  <img class="block" src="{{url('./img/—Pngtree—fast food cooking_4103415.png')}}" alt="Your Company" width="80" height="80">
                </a>
              </div>
            </div>
            <div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-6">
              <div class="flex items-center px-6 py-4 md:mx-auto md:max-w-3xl lg:mx-0 lg:max-w-none xl:px-0">
                <div class="w-full">
                  <label for="search" class="sr-only">Search</label>
                  <div class="relative">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                      
                    </div>
 
                  </div>
                </div>
              </div> 
            </div>
            <div class="flex items-center md:absolute md:inset-y-0 md:right-0 lg:hidden">
              <!-- Mobile menu button -->
              <button type="button" class="-mx-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rose-500" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                <span class="sr-only">Open menu</span>
                <svg x-description="Icon when menu is closed.
  
  Heroicon name: outline/bars-3" x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
  </svg>
                <svg x-description="Icon when menu is open.
  
  Heroicon name: outline/x-mark" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-6 w-6" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
  </svg>
              </button>
            </div>
            <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-4">
             
              </a>
  
              <!-- Profile dropdown -->
           
  
              <a href="{{route('recipe.create')}}" class="ml-6 inline-flex items-center rounded-md border border-transparent bg-rose-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">New Recipe</a>
            </div>
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








</body>
</html>