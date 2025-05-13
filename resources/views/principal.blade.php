@extends('layout.plantilla')

@section('titulo','Cinemark')

@section('contenido')
<div class="relative overflow-hidden">
    <div class="flex transition-transform duration-500 ease-in-out" id="carrusel-items">
        <div class="min-w-full">
            <img src="{{asset('/img/banner1.jpg')}}" alt="Imagen 1" class="w-full h-auto">
        </div>
        <div class="min-w-full">
            <img src="{{asset('/img/banner2.webp')}}" alt="Imagen 2" class="w-full h-auto">
        </div>
        <div class="min-w-full">
            <img src="{{asset('/img/banner3.png')}}" alt="Imagen 3" class="w-full h-auto">
        </div>
        <div class="min-w-full">
            <img src="{{asset('/img/banner4.png')}}" alt="Imagen 4" class="w-full h-auto">
        </div>
    </div>
    <!-- Botones del carrusel -->
    <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-600 hover:bg-gray-900 text-white rounded-full p-2 focus:outline-none" id="prev">
        <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
    </button>
    <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-600 hover:bg-gray-900 text-white rounded-full p-2 focus:outline-none" id="next">
        <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
        </svg>
    </button>
</div>

<section class="m-10">
<h2 class="text-red-500 mb-4 font-bold text-2xl dark:text-white lg:text-3xl">Cartelera</h2>
<div class="grid grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-3">
    <div class="col-span-1 mb-4 px-2">
        <div class="h-full flex flex-col shadow-lg rounded-md overflow-hidden border-2">
            <h4 class="bg-red-700 text-center text-2xl text-white m-0 py-2 font-bold">Estreno</h4>
            <img src="{{asset('/img/pel1.jpg')}}" alt="Una Película de Minecraft" class="w-full h-auto object-cover">
            <div class="p-4 text-center bg-white">
                <h6 class="font-bold text-lg mb-2">Una Película de Minecraft</h6>
                <button type="button" class="bg-red-500 text-white rounded-lg border-2 font-bold px-4 py-2 hover:bg-red-600" data-bs-toggle="modal" data-bs-target="#modal1">Información</button>
                <div class="fixed z-50 inset-0 overflow-y-auto hidden" id="modal1" aria-labelledby="modal1-label" aria-hidden="true">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                            <div class="bg-red-500 text-white px-4 py-3 sm:px-6 sm:py-4">
                                <h3 class="text-lg leading-6 font-medium" id="modal1-label">Una Película de Minecraft</h3>
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-bs-dismiss="modal" aria-label="Close">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414-1.414L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>
                            <div class="px-4 py-4 sm:px-6">
                                <div class="aspect-w-16 aspect-h-9 mb-3">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/PE2YZhcC4NY?si=m0FeGBj_LbsrOltu" title="Trailer 2" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                                <h6 class="text-start text-red-500 border-b mb-2 font-semibold">Sinopsis</h6>
                                <p class="text-start text-gray-700">Cuenta la historia de cuatro inadaptados que son transportados a un mundo cúbico llamado Overworld, donde Steve y su lobo Denis son secuestrados por Malgosha. La misión de los cuatro es rescatar a Steve y Denis, enfrentando peligros como Piglins y Zombies, descubriendo sus propias habilidades únicas y dominando las reglas de Overworld para volver a casa.</p>
                                <h6 class="text-start text-red-500 border-b mt-3 mb-2 font-semibold">Duración</h6>
                                <p class="text-start text-gray-700">1 hora y 41 minutos</p>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto">Comprar Entradas</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

    <script>
        const carruselItems = document.getElementById('carrusel-items');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const slides = carruselItems.children;
        let currentIndex = 0;

        function goToSlide(index) {
            if (index < 0) {
                currentIndex = slides.length - 1;
            } else if (index >= slides.length) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }
            carruselItems.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        prevButton.addEventListener('click', () => {
            goToSlide(currentIndex - 1);
        });

        nextButton.addEventListener('click', () => {
            goToSlide(currentIndex + 1);
        });

        // Mostrar el primer banner al cargar la página
        goToSlide(0);
    </script>
    
@endsection