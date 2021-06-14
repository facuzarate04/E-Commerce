<div>
    <section class="text-center content-center md:p-8 my-8 m-auto ">              

        <ul class="">
        @foreach ($local as $fila)        
      
        <div class="m-auto max-w-xl bg-white border-2 border-gray-300 p-6 rounded-md tracking-wide shadow-lg">    
           <div id="header" class="flex items-center mb-4 "> 
              <img alt="avatar" class="w-20 h-20 rounded-xl" src="{{asset($fila->url)}}" />
              <div id="header-text" class="leading-5 m-auto px-2 lg:px-0 ">
                 <h4 id="name" class="text-xl font-bold text-white bg-gray-900">{{$fila->name}}</h4>
                 <h5 id="job" class="font-semibold text-yellow-600">{{$fila->localtype->name}}</h5>
                 <h6>{{$fila->localidad}} / {{$fila->calle}} / {{$fila->numero}}</h6>
              </div>
              <div id="quote ">
                <a href="{{route('local.products',$fila->name)}}" type="button" class="text-sm m-auto rounded-l bg-yellow-600 lg:p-2 mt-2 font-semibold">PEDIR AQUÍ</a>
             </div>
           </div>
           <hr class="bg-black border-black">     
        </div>    
         
        @endforeach 
        </ul> 
      
      </section>
</div>
</div>