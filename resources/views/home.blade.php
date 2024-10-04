<x-app-layout>
    <div class="max-w-7xl py-8 px-4 lg:px-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0 bg-white rounded-lg">
            <div class="flex flex-col gap-8 justify-center items-center py-4 sm:p-4">
                <video controls class="rounded-md sm:w-4/5">
                    <source src="video/header.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo.
                </video>
                <div class="flex flex-col gap-4 justify-center text-center">
                    <h1>Bienvenue chez Solaru Form !</h1>
                    <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ipsum
                        nesciunt
                        doloribus numquam officia. Doloremque?</p>
                    <a href="{{ route('formations') }}"
                        class="w-fit px-4 py-3 rounded-lg bg-purple-500 hover:bg-purple-400 font-semibold text-white mx-auto mt-4">Découvrir</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl py-8 px-4 sm:px-6 lg:px-0">
        <div class="max-w-7xl mx-auto bg-white rounded-lg">
            <div class="flex flex-col lg:flex-row gap-8 justify-center items-center p-4">
                <img src="img/Formation.png" alt="Formation" class="sm:w-1/2 rounded-md">
                <div class="flex flex-col gap-4 justify-center text-center sm:w-1/2">
                    <h2>Progressez rapidement</h2>
                    <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ipsum
                        nesciunt
                        doloribus numquam officia. Doloremque?</p>
                    <a href="{{ route('formations') }}"
                        class="w-fit px-4 py-3 rounded-lg bg-purple-500 hover:bg-purple-400 font-semibold text-white mx-auto">Voir
                        les
                        formations</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl py-8 px-4 sm:px-6 lg:px-0">
        <div class="max-w-7xl mx-auto bg-white rounded-lg">
            <div class="flex flex-col lg:flex-row-reverse gap-8 justify-center items-center p-4">
                <img src="img/Localisation.png" alt="Localisation" class="sm:w-1/2 rounded-md">
                <div class="flex flex-col gap-4 justify-center text-center sm:w-1/2">
                    <h2>Dans un environnement adapté</h2>
                    <p class="text-lg">Des formations dispensées dans un environnement adapté pour le bien être
                        professionnel de tous.</p>
                    <a href="{{ route('localisation') }}"
                        class="w-fit px-4 py-3 rounded-lg bg-purple-500 hover:bg-purple-400 font-semibold text-white mx-auto">En
                        savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl py-8 px-4 sm:px-6 lg:px-0">
        <div class="max-w-7xl mx-auto bg-white rounded-lg">
            <div class="flex flex-col lg:flex-row gap-8 justify-center items-center p-4">
                <img src="img/Contact.png" alt="Contact" class="sm:w-1/2 rounded-md">
                <div class="flex flex-col gap-4 justify-center text-center sm:w-1/2">
                    <h2>Une question ? Besoin d'aide ?</h2>
                    <p class="text-lg">Nous serions ravis de vous aider en répondant à toutes vos questions. N'hésitez
                        pas à nous joindre par mail.</p>
                    <a href="mailto:contact@solaruform.com"
                        class="w-fit px-4 py-3 rounded-lg bg-purple-500 hover:bg-purple-400 font-semibold text-white mx-auto">Nous
                        contacter</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
