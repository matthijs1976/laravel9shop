<div class="carousel mt-4 relative shadow-2xl bg-white dark:bg-slate-800">
    <div class="carousel-inner relative overflow-hidden">
        <!--Slide 1-->
        @foreach($slides as $slide)
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true"
            hidden="" checked="checked">
        <div class="carousel-item absolute opacity-0" style="height:75vh;">
            <div class="block bg-no-repeat bg-cover bg-center h-full w-full  text-blue-600 text-5xl text-center"
                style="background-image: url({{asset('assets/imgs/sliders')}}/{{ $slide->image }})"/>
                {{ $slide->title}}</div>
        </div>
        <label for="carousel-3"
            class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-gradient-to-r from-green-400 to-blue-400 hover:bg-green-400 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2"
            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-gradient-to-r from-green-400 to-blue-400 hover:bg-blue-400 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        @endforeach
        <!--Slide 2-->
        {{-- <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
            hidden="">
        <div class="carousel-item absolute opacity-0" style="height:75vh;">
            <div class="block bg-no-repeat bg-center bg-cover h-full w-full  text-blue-600 text-5xl text-center"
                style="background-image: url(https://assets.new.siemens.com/siemens/assets/api/uuid:0cb5ab7e-727d-4129-87e0-184815e47fb6/width:1125/crop:0:0,0536:0,996:0,85911/quality:high/digital-building-lifecycle.jpg)">
                Slide 2</div>
        </div>
        <label for="carousel-1"
            class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-gradient-to-r from-green-400 to-blue-400 hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3"
            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-gradient-to-r from-green-400 to-blue-400 hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 3-->
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
            hidden="">
        <div class="carousel-item absolute opacity-0" style="height:75vh;">
            <div class="block bg-no-repeat bg-center bg-cover h-full w-full  text-blue-600 text-5xl text-center"
                style="background-image: url(https://i.ytimg.com/vi/LtRMnK-SgRk/maxresdefault.jpg)">Slide 3
            </div>
        </div>
        <label for="carousel-2"
            class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-gradient-to-r from-green-400 to-blue-400 hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1"
            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-gradient-to-r from-green-400 to-blue-400 hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-2"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-3"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
        </ol> --}}

    </div>
</div>
<!--End carousel-->