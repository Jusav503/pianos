@extends('layouts.app')

@section('title', 'Mejores teclados electrónicos del 2021 🔥')
@section('keywords', 'mejores teclados electronicos 2021 pianos electronico')
@section('content', 'En esta sección te mostraremos los mejores teclados electrónicos calidad-precio del 2021...')
@section('image', '../images/teclado-electronico.jpg')

@section('MainContent')
    <div class="container text-gray-500">
        <article>
            <h2 class="titles text-3xl">¡Los mejores teclados electrónicos del 2021! 🎹🔥</h2>
            <p>Antes de comenzar tienes que tener en cuenta que pianos y teclados no son lo mismo. Existe una diferencia entre teclados y pianos, una de ella es el número de teclas del instrumento, el teclado puede tener desde 49 teclas y 4 octavas hasta 76 teclas y 6 octavas, mientras que el piano digital dispone de 88 teclas y poco más de 7 octavas.</p>
        </article>
        <article>
            <h2 class="titles text-2xl">¿Qué es un teclado electrónico?</h2>
            <img src="{{asset('../images/teclado-electronico.jpg')}}" width="400px" alt="teclado electrónico">
            <p>Un teclado electrónico o piano digital es un instrumento musical, en algunos casos se basa en mecanismos eléctricos, electrónicos o digitales que crean los sonidos. Es aquí donde se encuentran los sintetizadores como otros instrumentos creados para imitar pianos mediante muestras musicales de sonidos previamente grabados. Dichos sonidos pueden venir fijos de fabrica, o ser capturados y manipulados mediante un sampleador.</p>
            <br>
            <p>También hay teclados que combinan facetas, incluyendo tanto instrumentos como pueden ser la guitarra, el piano, la trompeta, etc., como sonidos de palmadas, números en inglés o castellano. Los teclados electrónicos completos de piano, incluyen 88 teclas, 36 negras y 52 blancas. Si además incluye pedales, se puede considerar un piano electrónico.</p>
        </article>
        <article class="grid grid-col lg:grid-cols-3 p-4 justify-items-center gap-10">
            <div class="col-span-3 text-center">
                <h2 class="titles text-2xl">Tipos de teclados electrónicos</h2>
                <p>Tienes que tener en cuenta que en el mundo de los teclados electrónicos o digitales existen tres principales tipos: los portátiles o de escenario, comtemporáneos y verticales.</p>
            </div>
            <div class="flex flex-col">
                <img src="{{asset('../images/piano-portatil.jpg')}}" class="w-full" alt="piano portátil">
                <p>- Como su nombre lo indica los pianos portatiles o de escenario suelen ser de fácil movilidad y pueden proporcionar un sonido mucho más fuerte para los músicos que esperan más volumen.</p>
            </div>
            <div class="flex flex-col">
                <img src="{{asset('../images/piano-contemporaneo.jpg')}}" class="w-full" alt="piano contemporaneo">
                <p>- Los pianos digitales del tipo contemporáneos se caracterizan por tener un aspecto mucho más moderno y menos apegado a un piano de cola convencional</p>
            </div>
            <div class="flex flex-col">
                <img src="{{asset('../images/piano-vertical.jpg')}}" class="w-full" alt="piano vertical">
                <p>- Por su parte los pianos verticales tienen la peculiaridad de parecerse a un piano acústico con altavoces integrados en la caja del soporte</p>
            </div>
        </article>
    </div>
@endsection