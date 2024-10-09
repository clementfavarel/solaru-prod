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
                    <p class="text-lg sm:px-12">Explorez notre univers de formations conçues pour vous guider
                        vers le
                        succès, à
                        chaque étape de votre parcours professionnel. Apprenez avec des experts et développez des
                        compétences recherchées dans un cadre dynamique et inspirant.</p>
                    <a href="{{ route('formations') }}"
                        class="w-fit px-4 py-3 rounded-lg bg-[#825A7E] hover:bg-[#9E7594] font-semibold text-white mx-auto mt-4">Découvrir</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl py-8 px-4 sm:px-6 lg:px-0">
        <div class="max-w-7xl mx-auto bg-white rounded-lg">
            <div class="flex flex-col lg:flex-row gap-8 justify-center items-center p-4">
                <img loading="lazy" src="img/Formation.webp" alt="Formation" class="sm:w-1/2 rounded-md">
                <div class="flex flex-col gap-4 justify-center text-center sm:w-1/2">
                    <h2>Progressez rapidement</h2>
                    <p class="text-lg">Nos formations sont spécialement conçues pour vous faire progresser à un rythme
                        soutenu, tout en consolidant vos acquis. Que vous soyez débutant ou professionnel confirmé, nous
                        vous offrons les clés pour avancer sereinement.</p>
                    <a href="{{ route('formations') }}"
                        class="w-fit px-4 py-3 rounded-lg bg-[#825A7E] hover:bg-[#9E7594] font-semibold text-white mx-auto">Voir
                        les
                        formations</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl py-8 px-4 sm:px-6 lg:px-0">
        <div class="max-w-7xl mx-auto bg-white rounded-lg">
            <div class="flex flex-col lg:flex-row-reverse gap-8 justify-center items-center p-4">
                <img loading="lazy" src="img/Localisation.webp" alt="Localisation" class="sm:w-1/2 rounded-md">
                <div class="flex flex-col gap-4 justify-center text-center sm:w-1/2">
                    <h2>Dans un environnement adapté</h2>
                    <p class="text-lg">Nos formations sont délivrées dans un cadre soigneusement selectionné pour
                        favoriser le
                        bien-être et la productivité de chaque participant, en veillant à offrir un environnement
                        propice à l’apprentissage et au développement professionnel.</p>
                    <a href="{{ route('localisation') }}"
                        class="w-fit px-4 py-3 rounded-lg bg-[#825A7E] hover:bg-[#9E7594] font-semibold text-white mx-auto">En
                        savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl py-8 px-4 sm:px-6 lg:px-0">
        <div class="max-w-7xl mx-auto bg-white rounded-lg">
            <div class="flex flex-col lg:flex-row gap-8 justify-center items-center p-4">
                <img loading="lazy" src="img/Contact.webp" alt="Contact" class="sm:w-1/2 rounded-md">
                <div class="flex flex-col gap-4 justify-center text-center sm:w-1/2">
                    <h2>Une question ? Besoin d'aide ?</h2>
                    <p class="text-lg">Nous serions ravis de vous aider en répondant à toutes vos questions. N'hésitez
                        pas à nous joindre par mail.</p>
                    <a href="mailto:contact@solaruform.com"
                        class="w-fit px-4 py-3 rounded-lg bg-[#825A7E] hover:bg-[#9E7594] font-semibold text-white mx-auto">Nous
                        contacter</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
