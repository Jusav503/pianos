@extends('layouts.app')

@section('title', 'Pianos' )
@section('keywords', 'Pianos piano cola electronico digital' )
@section('content', 'En esta web encontrarás un poco de historia acerca de los tipos de pianos, precios y más' )
@section('image', '../images/piano-de-cola.webp')

@section('MainContent')
    {{-- Header image --}}
    <div class="h-screen p-10 flex items-center w-full z-40" style="background: url('../images/piano-background.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="text-white">
            <p class="text-5xl">"El problema no está en ilusionarse, <br> el problema está en ver la realidad."</p><br>
            <span class="text-2xl">- El pianista</span>
        </div>
    </div>    

    {{-- Content --}}
    <div class="container text-gray-500">
        
        <article>
            <h1 class="text-3xl titles">¿Qué es un piano?</h1>
            <p>Muchas personas lo describen como un instrumento musical grande de color negro con teclas y que al tocarlo se escucha bonito, y aunque están en lo cierto un piano es mucho más que eso. Tocar el piano aumenta la coordinación entre cuerpo y cerebro. Por norma general, aprender a tocar un instrumento musical contribuye al desarrollo de habilidades motoras y de coordinación.</p>
        </article>        

        <article>
            <h2 class="text-2xl titles">Historia del piano</h2>
            <p>Inventado en Italia por Bartolomeo Cristofori alrededor del año 1700 aproximadamente, es un instrumento acústico de cuerdas en el que las cuerdas son golpeadas por <a href="" class="text-blue-400">martillos de madera</a> recubiertos con un material más suave (los martillos modernos están cubiertos con densos fieltros de lana; algunos pianos antiguos usaban cuero). Se toca usando un teclado, que es una fila de teclas o pequeñas palancas que el ejecutante presiona o golpea con los dedos y pulgares de ambas manos para hacer que los martillos golpeen las cuerdas.
                <br>
            Se fundó sobre innovaciones tecnológicas anteriores en instrumentos de teclado. Los órganos de tubos se han utilizado desde la antigüedad y, como tal, el desarrollo de los órganos de tubos permitió a los constructores de instrumentos aprender a crear mecanismos de teclado para tonos sonoros. En el siglo XVII, los mecanismos de los instrumentos de teclado como el clavicordio y el clavecín estaban bien desarrollados. En un clavicordio, las cuerdas son golpeadas por tangentes, mientras que en un clavecín, son mecánicamente punteadas por púas cuando el ejecutante presiona la tecla.</p>
            <br>
            <img src="{{asset('../images/primer-piano.jpg')}}" alt="primer piano del mundo"><br>
            <span>(Primer piano construido en 1695)</span>
        </article>
        
        <article>
            <h2 class="text-2xl titles">Tipos de piano</h2>
            <p>Existen tres principales tipos de pianos: <span class="text-black">piano de cola, el vertical o de pared y el digital</span> <a href="" class="text-blue-400">El piano de cola</a> es el más grande de los tres. En el interior de su elegante diseño guarda la caja de resonancia y las cuerdas de forma horizontal. En función de su tamaño se pueden encontrar el piano de cola mignon, un cuarto de cola, media cola, tres cuartos de cola y el de gran cola.</p>
        </article>

        <article>
            <h2 class="titles text-2xl">Piano de cola</h2>
            <p>Está compuesto por una caja de resonancia a la que se ha agregado un teclado mediante el cual se percuten las cuerdas de acero con martillos forrados de fieltro, produciendo el sonido. Las vibraciones se transmiten a través de los puentes a la tabla armónica, que las amplifica. Está formado por un arpa cromática de cuerdas múltiples, accionada por un mecanismo de percusión indirecta, a la que se le han añadido apagadores. Fue inventado en torno al año 1700 por el paduano Bartolomeo Cristofori. Entre sus antecesores se encuentran instrumentos como la cítara, el monocordio, el dulcémele, el clavicordio y el clavecín (del que deriva la forma, pero no la mecánica).</p>
            <br>
            <img src="{{asset('../images/piano-de-cola.webp')}}" alt="piano de cola">
        </article>

        <article>
            <h2 class="titles text-2xl">Piano vertical o de pared</h2>
            <p>Es uno de los dos tipos de pianos conocidos como acústicos modernos junto al piano de cola. ... La principal característica de este tipo de piano viene dada por la posición de la caja de resonancia, situada en un plano vertical, así como las cuerdas.</p>
            <br>
            <img src="{{asset('../images/piano-de-pared.jpg')}}" width="400px" alt="piano de pared">
        </article>

        <article>
            <h2 class="titles text-2xl">Piano digital</h2>
            <p>Un piano electrónico o piano digital es un instrumento musical eléctrico de teclado que produce sonido mecánicamente y lo convierte en una señal de audio electrónica mediante pastillas (pickups). A diferencia del sintetizador, el piano eléctrico no es un instrumento electrónico, sino electromecánico.</p>
            <br>
            <img src="{{asset('../images/piano-electrico.jpg')}}" width="400px" alt="piano electrico">
        </article>

        <article>
            <h2 class="titles text-2xl">Precios</h2>
            <p>Ahora bien, hablemos de precios. En primer lugar, hay que decir que hablar de pianos es como hablar de las personas, hay muchos tipos diferentes de pianos, y además cada tipo de piano está recomendado para un uso y nivel concreto, por esto podríamos decir que el precio de un piano puede variar entre los 300€ si se trata de un piano digital o eléctrico y hasta los 10.000€ o incluso más tratándose de pianos de cola.</p><br>
            <p>Pero no te preocupes nosotros tenemos una guia completa para ayudarte a que compres el mejor piano adaptado a tu nivel y a tu bolsillo.</p>
            <br>
            <span class="text-black">Por favor selecciona tu nivel: </span>
            <div class="text-blue-400 flex flex-col p-3">
                <a href="">😎 Principiante</a>
                <a href="" class="my-3">🐱‍🚀 Intermedio</a>
                <a href="">🐱‍👤 Avanzado</a>
            </div>
        </article>
    </div>
@endsection