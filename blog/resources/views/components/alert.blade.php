
<!--con este componente podemos traer el tipo de alerta que necesitemos en la etiqueta x-alert-->
@props(['type'])

<?php
    // Mediante un switch asignamos las clases de Tailwind correspondientes a cada tipo de alerta
    switch($type){
        case 'info':
            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
        case 'danger':
            $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;
        case 'success':
            $class = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
            break;
        case 'warning':
            $class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300';
            break;
        case 'dark':
            $class = 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-300';
            break;
    }
?>
    <!--    // Colocaremos la variable $class en el div para que tome las clases según el tipo de alerta
            // la variable $inf se crea en el slot nombrado en la vista donde se llame al componente
            // la variable $slot es la que contiene lo que queremos mostrar dentro del componente -->

    <div class="p-4 mb-4 text-sm rounded-lg {{$class}}" role="alert">
        <span class="font-medium">{{ $inf ?? 'info - ' }} </span>{{ $slot }}
    </div>

    