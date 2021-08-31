@extends('layouts.app')

@section('title', 'Mejores teclados electrónicos del 2021 🎹🔥')
@section('keywords', 'mejores teclados electronicos 2021 pianos electronico digital')
@section('content', 'En esta sección te mostraremos los mejores teclados electrónicos calidad-precio del 2021...')
@section('image', '../images/teclado-electronico.jpg')

@section('MainContent')
    <div class="container text-gray-500">
        <div>
            <ul class="bg-gray-100 border border-gray-400 p-4 w-64">
                <li><a href="#18333" class="text-lg text-black">➖ ¿Qué es un teclado electrónico?</a></li>
                <li><a href="#590033" class="text-lg text-black">➖ Tipos de teclado electrónico</a></li>
                <li><a href="#90283" class="text-lg text-black">➖ Los mejores teclados electrónicos del 2021</a></li>
            </ul>
            <article>
                <div class="flex flex-col">
                    <h2 class="titles text-3xl text-center" id="18333">¿Qué es un teclado electrónico? 🤔</h2>
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
                    <h2 class="titles text-2xl" id="590033">Tipos de teclados electrónicos </h2>
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
                <h2 class="titles text-3xl" id="90283">🔥🎹¡Los mejores teclados electrónicos del 2021! 🎹🔥</h2>
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
                <div class="cards">
                    <figure>
                        <img src="{{asset('../images/teclado-principiante-y-niños.jpg')}}" alt="teclado para principiantes y niños">
                    </figure>
                    <div>
                        <a href="#"
                            class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                            Teclado estandar Instrumento Musical para Principiantes y niños
                        </a>
                        <div class="my-4">
                            <span class="text-gray-400">Marca: Alomejor</span>
                        </div>
                        <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                            Construcción dura hecho de material plástico resistente, es fácil de usar para niños ya que está diseñado para niños, cada boton tiene diferentes colores y etiquetas lo cual es conveniente para que...
                            <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                        </div>
                    </div>
                </div>

                <div class="cards">
                    <figure>
                        <img src="{{asset('../images/teclado-rojo.jpg')}}" alt="teclado rojo">
                    </figure>
                    <div>
                        <a href="#"
                            class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                            Teclado Casio CT-S200RD rojo con 61 teclas
                        </a>
                        <div class="my-4">
                            <span class="text-gray-400">Marca: Casio</span>
                        </div>
                        <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                            Este teclado ademas de tener un diseño bonito y compacto, esta hecho de buenos materiales, resistentes y agradables al tacto. Las teclas tienen un tacto suave y bajan y suben correctamente, el sonido es MUY BUENO, y su uso es bastante intuitivo...
                            <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                        </div>
                    </div>
                </div>

                <div class="cards">
                    <figure>
                        <img src="{{asset('../images/piano-portatil.jpg')}}" alt="teclado portatil">
                    </figure>
                    <div>
                        <a href="#"
                            class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                            Teclado plegable portátil de Blackstar
                        </a>
                        <div class="my-4">
                            <span class="text-gray-400">Marca: Black Star</span>
                        </div>
                        <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                            Teclado de piano portátil ligero y compacto, con 88 teclas, que mide 33 cm plegado y pesa solo 1,6 kg, con funcionalidad optimizada...
                            <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                        </div>
                    </div>
                </div>

                <div class="cards">
                    <figure>
                        <img src="{{asset('../images/teclado-rockjam.jpg')}}" alt="teclado rockjam">
                    </figure>
                    <div class="mt-4">
                        <a href="#"
                            class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                            Teclado moderno completo, soporte de música, y altavoces incorporados
                        </a>
                        <div class="my-4">
                            <span class="text-gray-400">Marca: RockJam</span>
                        </div>
                        <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                            Este teclado de piano digital contiene teclas sensibles a la velocidad que replican fielmente la sensación de un piano real, con características modernas, incluye puerto usb para que puedas tocar tus canciones favoritas...
                            <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                        </div>
                    </div>
                </div>

                <div class="cards">
                    <figure>
                        <img src="{{asset('../images/teclado-rosa.jpg')}}" alt="teclado rosa">
                    </figure>
                    <div class="mt-4">
                        <a href="#"
                            class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                            Teclado rosa EK620S con kit incluido
                        </a>
                        <div class="my-4">
                            <span class="text-gray-400">Marca: Eastar</span>
                        </div>
                        <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                            Contiene 61 teclas con tres modos de enseñanza, con un peso de sólo 3kg puede llevarse a sitio y ademas contiene...
                            <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                        </div>
                    </div>
                </div>

                <div class="cards">
                    <figure>
                        <img src="{{asset('../images/teclado-roland.jpg')}}" alt="teclado roland">
                    </figure>
                    <div class="mt-4">
                        <a href="#"
                            class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                            Roland Go-61P Conecta inalámbricamente con tu smartphone, accede a contenido online y aprende más rápido
                        </a>
                        <div class="my-4">
                            <span class="text-gray-400">Marca: Roland</span>
                        </div>
                        <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                            **Lecciones de piano en línea gratuitas de SKOOVE incluidas** Funcionamiento totalmente inalámbrico con alimentación por pilas y conectividad Bluetooth...
                            <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                        </div>
                    </div>
                </div>

                <div class="cards">
                    <figure>
                        <img src="{{asset('../images/teclado-mugig.jpg')}}" alt="teclado mugig">
                    </figure>
                    <div class="mt-4">
                        <a href="#"
                            class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                            Mugig MLS-939 Kit de Piano Electrico de 61 Teclas con Pantalla LCD multifunción
                        </a>
                        <div class="my-4">
                            <span class="text-gray-400">Marca: Mugig</span>
                        </div>
                        <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                            Por la compra del teclado se incluye: soporte del Teclado, Taburete del teclado, micrófono y soporte para Atril. El soporte para piano fácil de instalar y ajustar...
                            <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                        </div>
                    </div>
                </div>

                <div class="cards">
                    <figure>
                        <img src="{{asset('../images/teclado-casio.jpg')}}" alt="teclado casio">
                    </figure>
                    <div class="mt-4">
                        <a href="#"
                            class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                            Casio CT-S200WE - Teclado de piano, Blanco
                        </a>
                        <div class="my-4">
                            <span class="text-gray-400">Marca: Casio</span>
                        </div>
                        <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                        Este teclado Casio incluye 61 teclas, 400 tonos, 77 ritmos y 60 melodías,entrada USB a Host para la conexión a un ordenador. Función de Lecciones, conexión con app, salida de amplificador: 2W + 2W...
                        <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                        </div>
                    </div>
                </div>

                <div class="cards">
                    <figure>
                        <img src="{{asset('../images/teclado-donnerkit.jpg')}}" alt="teclado donner">
                    </figure>
                    <div class="mt-4">
                        <a href="#"
                            class="block text-blue-500 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                            Donner Kit de Teclado Piano Electrico color negro con 61 Teclas 
                        </a>
                        <div class="my-4">
                            <span class="text-gray-400">Marca: Donner</span>
                        </div>
                        <div class="text-gray-600 text-sm block md:text-xs lg:text-sm">
                            Con una pantalla LCD, el teclado de piano de 61 teclas puede mostrar simple y claramente el estado de las funciones que se utilizan, y también puede proporcionar información sobre las funciones de enseñanza incorporadas....
                        <a href="" class="mt-4 w-full text-blue-400 text-lg">ver más</a>
                        </div>
                    </div>
                </div>
            </div>

            <button class="bg-yellow-500 rounded text-white sm:mt-4 hover:bg-yellow-300 p-3 text-center">
                <a href="">Mostrar más</a>
            </button>
        </div>
    </div>
@endsection
