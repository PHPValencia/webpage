@extends('_layouts.master')

@section('contents')
    <p class="eyelet margin_top_0">
        {{ $page->community->description }}
    </p>
    <h2 class="centered orange scream">
        Próximo meetup: <span>jueves 5 abril 2016, 19:00h</span>
    </h2>
    <div class="clearfix">
        <section class="content single">
            <h2>Aplicaciones en tiempo real con Symfony, NodeJS y Arduino</h2>
            <p>Normalmente, como desarrolladores de PHP, no podemos "tocar" lo que programamos. Siempre estamos delante de una pantalla y comprobamos el resultado de nuestro código en ella.</p>
            <p>Sin embargo, esto cambia cuando metemos hardware en nuestro desarrollo: como una Raspberry Pi o un Arduino. Entonces el resultado de tu código se hace palpable.</p>
            <p>En la charla de mayo, Pablo Cabello nos hablará precisamente de eso. Pablo ha desarrollado <a href="http://riegoeco.com">RiegoEco</a>. Un sistema en el que, mediante Symfony 2, Node JS y un Arduino, es capaz de controlar el sistema de riego de una plantalación. En palabras suyas:</p>
            <p>"El sistema se basa en una integración del Arduino Yun la cual es posible controlar desde una conexión externa a una red local.&nbsp; <br> <br>Todo esto es manejado desde la web con una interfaz muy sencilla que nos permite ejecutar ordenes y ver el estado de la placa Arduino. <br> <br>Para hacerlo posible se dispone de un servidor, en el que se ha optado por utilizar PHP con Symfony y NodeJs. Con esto se conforma un sistema en tiempo real y con ordenes directas entre el usuario y el Arduino. <br> <br>A la vez se ha realizado una aplicación Android que nos dota de notificaciones automáticas y configurables por el usuario desde la web. <br> <br>Intentaré centrarme en como se ha estructurado el proyecto y ver por encima como interactuan cada uno de los lenguajes que forman el proyecto. <br> <br>Los temas que trataremos serán:&nbsp;</p>
            <p>•&nbsp;<span>Arquitectura del sistema.&nbsp;</span></p>
            <p><span>•&nbsp;Comunicaciones bidireccionales.</span></p>
            <p>•&nbsp;<span>A</span><span>bstracción en la programación del Arduino.</span></p>
            <p><span>•&nbsp;Interacción entre aplicación Symfony y NodeJs"</span></p>
            <p>Interesante ¿eh? Pues ¡no te lo pierdas! Lo haremos el <b>jueves día 5 a las 19:00 en Geekshubs.</b></p>
            <p>Y recuerda que después de la charla de Pablo, algunos nos iremos a cenar por algún bar de la zona. ¡Vente con nosotros!</p>
            <p>¡Nos vemos el jueves!</p>
        </section>
        <h2 class="centered orange scream margin_bottom_10">Localización</h2>
        <section class="full_box home">
            <iframe width="620" height="420" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border:0" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.565198398508!2d-0.3572013842960958!3d39.47915042004663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604898947abad3%3A0x5aae0e0b7fa0358a!2sGeeksHubs+Space!5e0!3m2!1ses!2ses!4v1454450684390"></iframe>
            <br>
        </section>
    </div>
@endsection
