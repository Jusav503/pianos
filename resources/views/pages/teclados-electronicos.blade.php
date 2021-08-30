@extends('layouts.app')

@section('title', 'Mejores teclados electrónicos del 2021 🔥')
@section('keywords', 'mejores teclados electronicos 2021 pianos electronico')
@section('content', 'En esta sección te mostraremos los mejores teclados electrónicos calidad-precio del 2021...')
@section('image', '../images/teclado-electronico.jpg')

@section('MainContent')
    <div class="container text-gray-500">
        <div>
            <article>
                <div class="flex flex-col">
                    <h2 class="titles text-3xl text-center">¿Qué es un teclado electrónico? 🤔</h2>
                    <figure class="flex justify-center">
                        <img src="{{ asset('../images/teclado-electronico.jpg') }}" width="500px" alt="teclado electrónico">
                    </figure>
                </div>
                <p>Antes de comenzar tienes que tener en cuenta que pianos y teclados no son lo mismo. Existe una diferencia
                    entre teclados y pianos, una de ella es el número de teclas del instrumento, el teclado puede tener
                    desde 49 teclas y 4 octavas hasta 76 teclas y 6 octavas, mientras que el piano digital dispone de 88
                    teclas y poco más de 7 octavas.</p>
                <br>
                <p>Un teclado electrónico o piano digital es un instrumento musical, en algunos casos se basa en mecanismos
                    eléctricos, electrónicos o digitales que crean los sonidos. Es aquí donde se encuentran los
                    sintetizadores como otros instrumentos creados para imitar pianos mediante muestras musicales de sonidos
                    previamente grabados. Dichos sonidos pueden venir fijos de fabrica, o ser capturados y manipulados
                    mediante un sampleador.</p>
                <br>
                <p>También hay teclados que combinan facetas, incluyendo tanto instrumentos como pueden ser la guitarra, el
                    piano, la trompeta, etc., como sonidos de palmadas, números en inglés o castellano. Los teclados
                    electrónicos completos de piano, incluyen 88 teclas, 36 negras y 52 blancas. Si además incluye pedales,
                    se puede considerar un piano electrónico. 😉</p>
            </article>
            <article class="grid sm:grid-cols-1 lg:grid-cols-3 p-4 justify-items-center gap-10">
                <div class="lg:col-span-3 text-center">
                    <h2 class="titles text-2xl">Tipos de teclados electrónicos </h2>
                    <p>Tienes que tener en cuenta que en el mundo de los teclados electrónicos o digitales existen tres
                        principales tipos: los portátiles o de escenario, comtemporáneos y verticales.</p>
                </div>
                <div class="flex flex-col">
                    <img src="{{ asset('../images/piano-portatil.jpg') }}" class="w-full" alt="piano portátil">
                    <p>- Como su nombre lo indica los pianos portatiles o de escenario suelen ser de fácil movilidad y
                        pueden proporcionar un sonido mucho más fuerte para los músicos que esperan más volumen.</p>
                </div>
                <div class="flex flex-col">
                    <img src="{{ asset('../images/piano-contemporaneo.jpg') }}" class="w-full"
                        alt="piano contemporaneo">
                    <p>- Los pianos digitales del tipo contemporáneos se caracterizan por tener un aspecto mucho más moderno
                        y menos apegado a un piano de cola convencional</p>
                </div>
                <div class="flex flex-col">
                    <img src="{{ asset('../images/piano-vertical.jpg') }}" class="w-full" alt="piano vertical">
                    <p>- Por su parte los pianos verticales tienen la peculiaridad de parecerse a un piano acústico con
                        altavoces integrados en la caja del soporte</p>
                </div>
            </article>
        </div>

        <div class="mt-5">
            <article>
                <h2 class="titles text-3xl">🔥🎹¡Los mejores teclados electrónicos del 2021! 🎹🔥</h2>
                <p>Y ahora sí, sin mas que comentar, pasamos a ver los mejores teclados electrónicos del 2021. Esta lista
                    está basada en los mejores teclados calidad-precio del mercado.</p>
                <div class="grid grid-col md:grid-cols-2 gap-7 p-6 border-2 rounded-xl shadow-lg mt-5">
                    <figure>
                        <img src="{{ asset('../images/piano-vertical.jpg') }}" alt="piano vertical">
                    </figure>
                    <div class="flex flex-col justify-around">
                        <h2 class="titles text-2xl">Piano molon</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, sit, provident, dolorum fugit
                            qui quia labore dicta debitis id voluptas animi quod nihil quis aspernatur quaerat distinctio
                            nesciunt minima ratione!</p>
                        <a href="" class="bg-yellow-500 rounded text-white sm:mt-4 hover:bg-yellow-300 p-3 text-center">Más información</a>
                    </div>
                </div>
            </article>

            <div class="grid grid-col md:grid-cols-2 lg:grid-cols-3 gap-7 mt-5">
                {{-- <div x-data="{ showModal : false }" class="">
                    <!-- Button -->
                    <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Open Modal</button>
            
                    <!-- Modal Background -->
                    <div x-show="showModal" class="text-gray-500 flex items-center justify-center overflow-auto bg-opacity-40 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <!-- Modal -->
                        <div x-show="showModal" class="bg-white rounded-xl shadow-2xl p-6 sm:w-10/12 mx-10" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                            <!-- Title -->
                            <span class="font-bold block text-2xl mb-3">🍺 Beer, beer, beer </span>
                            <!-- Some beer 🍺 -->
                            <p class="mb-5">beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer...</p>
                            <p>beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer...</p>
            
                            <!-- Buttons -->
                            <div class="text-right space-x-5 mt-5">
                                <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancel</button>
                                <a href="https://www.buymeacoffee.com/fricki" target="_blank" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">🍺 Buy me a beer!</a>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div x-data="{ showModal2 : false }">
                    <!-- Button -->
                    <div @click="showModal2 = !showModal2" class="cursor-pointer px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Open Modal</div>
            
                    <!-- Modal Background -->
                    <div x-show="showModal2" class="text-gray-500 flex items-center justify-center overflow-auto bg-opacity-40 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <!-- Modal -->
                        <div x-show="showModal2" class="bg-white rounded-xl shadow-2xl p-6 sm:w-10/12 mx-10" @click.away="showModal2 = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                            <!-- Title -->
                            <span class="font-bold block text-2xl mb-3">😲 Beer, beer, beer </span>
                            <!-- Some beer 🍺 -->
                            <p class="mb-5">beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer...</p>
                            <p>beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer...</p>
            
                            <!-- Buttons -->
                            <div class="text-right space-x-5 mt-5">
                                <button @click="showModal2 = !showModal2" class="px-4 py-2 text-sm bg-white rounded-xl transition-colors duration-150 ease-linear border-red-200  focus:outline-none focus:ring-0 font-bold hover:bg-red-100 focus:bg-indigo-50 focus:text-indigo">❌</button>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="rounded-xl border border-gray-100 shadow-lg p-4 transform motion-safe:hover:scale-110 ">
                    <div class="flex flex-col justify-around">
                        <figure>
                            <img src="{{asset('../images/piano-contemporaneo.jpg')}}" alt="piano contemporaneo">
                        </figure>
                        <div class="mt-4">
                            <a href="#"
                                class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                Woman standing under blue sky
                            </a>
                            <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde
                                asperiores? Officia amet perspiciatis ad quibusdam incidunt eaque, nobis, eveniet neque
                                porro id commodi quisquam debitis!...
                                <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl border border-gray-100 shadow-lg p-4 transform motion-safe:hover:scale-110 ">
                    <div class="flex flex-col justify-around">
                        <figure>
                            <img src="{{asset('../images/piano-contemporaneo.jpg')}}" alt="piano contemporaneo">
                        </figure>
                        <div class="mt-4">
                            <a href="#"
                                class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                Woman standing under blue sky
                            </a>
                            <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde
                                asperiores? Officia amet perspiciatis ad quibusdam incidunt eaque, nobis, eveniet neque
                                porro id commodi quisquam debitis!...
                                <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl border border-gray-100 shadow-lg p-4 transform motion-safe:hover:scale-110 ">
                    <div class="flex flex-col justify-around">
                        <figure>
                            <img src="{{asset('../images/piano-contemporaneo.jpg')}}" alt="piano contemporaneo">
                        </figure>
                        <div class="mt-4">
                            <a href="#"
                                class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                Woman standing under blue sky
                            </a>
                            <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde
                                asperiores? Officia amet perspiciatis ad quibusdam incidunt eaque, nobis, eveniet neque
                                porro id commodi quisquam debitis!...
                                <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl border border-gray-100 shadow-lg p-4 transform motion-safe:hover:scale-110 ">
                    <div class="flex flex-col justify-around">
                        <figure>
                            <img src="{{asset('../images/piano-contemporaneo.jpg')}}" alt="piano contemporaneo">
                        </figure>
                        <div class="mt-4">
                            <a href="#"
                                class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                Woman standing under blue sky
                            </a>
                            <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde
                                asperiores? Officia amet perspiciatis ad quibusdam incidunt eaque, nobis, eveniet neque
                                porro id commodi quisquam debitis!...
                                <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl border border-gray-100 shadow-lg p-4 transform motion-safe:hover:scale-110 ">
                    <div class="flex flex-col justify-around">
                        <figure>
                            <img src="{{asset('../images/piano-contemporaneo.jpg')}}" alt="piano contemporaneo">
                        </figure>
                        <div class="mt-4">
                            <a href="#"
                                class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                Woman standing under blue sky
                            </a>
                            <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde
                                asperiores? Officia amet perspiciatis ad quibusdam incidunt eaque, nobis, eveniet neque
                                porro id commodi quisquam debitis!...
                                <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
