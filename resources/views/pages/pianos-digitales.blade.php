@extends('layouts.app')

@section('title', 'Mejores pianos digitales del 2021 🎹🔥')
@section('keywords', 'mejores pianos digitales 2021')
@section('content', 'En esta sección te mostraremos los mejores pianos digitales calidad-precio del 2021...')
@section('image', '../images/piano-yamaha.jpg')

@section('MainContent')
    <div class="container text-gray-500">
        <div class="bg-gray-100 border border-gray-400 p-4 w-64">
            <ul>
                <li><a href="#08147" class="text-lg text-black">➖ ¿Qué es un piano digital?</a></li>
                <li><a href="#40852" class="text-lg text-black">➖ ¿Dónde aprender a tocar piano digital?</a></li>
                <li><a href="#580923" class="text-lg text-black">➖ Tipos de pianos digitales</a></li>
                <li><a href="#" class="text-lg text-black">➖ Los mejores pianos digitales del 2021</a></li>
            </ul>
        </div>
        <div class="flex flex-col">
            <h2 class="titles text-3xl text-center" id="08147">¿Qué es un piano digital? 🤔</h2>
            <figure class="flex justify-center">
                <img src="{{ asset('../images/piano-yamaha.jpg') }}" width="500px" alt="piano yamaha">
            </figure>
            <p>El piano electrónico o piano digital es un instrumento musical de teclado diseñado para emitir el timbre de un piano. Un piano digital es un instrumento con un tamaño considerable con un teclado electrónico que contiene 88 teclas, un poco más de 7 octavas, por lo que es considerado como un instrumento muy completo, el piano digital es una alternativa al piano tradicional, sus teclas son muy similares a las de un piano clásico. Su uso es ideal para personas experimentadas como profesores de música o profesionales.</p>
            <br>
            <p>El deseo de aprender a tocar un piano de cola o piano clásico, te puede llegar a ser inalcanzable por la gran cantidad de dinero que te pueden llegar a costar la adquisición de uno de ese tipo, pero lo más parecido a ello es el piano digital, con el que se puede aprender. Por ser tan complejo, es recomendable que estudies teoría y solfeo, aunque muchos piensen que aprenderlo sea un poco aburrido, pues dejame decirte que quien aprende esto, aprende todo y es por eso que es indispensable aprenderlo para tocar el piano. </p>
        </div>

        <div class="mt-7">
            <article id="40852">
                <h2-titles class="titles text-2xl">¿Dónde aprender a tocar piano digital?</h2-titles>
                <p>La manera mas sencilla y ecónomica para aprender es comprar libros que incluyen toda la teoria, además de enseñar a interpretar las partituras incluyen una guía de orientación, que se presentan con números que brindan una ayuda muy precisa. <a href="" class="text-blue-400">Ver libros</a></p>
                <br>
                <p>Si los libros no son tu fuerte a la hora de aprender a tocar un piano digital en youtube puedes encontrar infinidad, asi que no hay excusas! 🙂</p>
            </article>

            <article id="580923">
                <h2 class="titles text-2xl">Tipos de pianos digitales 🎹</h2>
                <div class="grid gri-cols-2 md:grid-cols-3 gap-7">
                    <div>
                        <h3 class="titles">Gran piano digital</h3>
                        <img src="{{'../images/gran-piano.jpg'}}" width="300px" alt="">
                        <p>Esta preciosidad se caracteriza por ser aparte el más bonito los más caros del mercado por su alto parecido a un piano de cola tradiconal.</p>
                    </div>
                    <div>
                        <h3 class="titles">Piano vertical o de pared</h3>
                        <img src="{{'../images/piano-de-pared.jpg'}}" width="300px" alt="piano de pared">
                        <p>Este piano digital se caracteriza por su apariencia a un piano acústico tradicional, contiene 88 teclas y está construido sobre una base usualmente de madera y tres pedales en la parte inferior</p>
                    </div>
                    <div>
                        <h3 class="titles">Piano digital con consola</h3>
                        <img src="{{'../images/piano-vertical.jpg'}}" width="300px" alt="piano vertical">
                        <p>La diferencia del piano digital y el piano digital con consola no es mucha, lo que los hace distintos es qu este último es más pequeño y cuenta con una pequeña pantalla en la que puedes configurar los distintos tipos de sonidos.</p>
                    </div>
                </div>
            </article>

            
        </div>
    </div>
@endsection