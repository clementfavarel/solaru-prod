<x-app-layout>
    <div class="max-w-7xl py-8 px-4 lg:px-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0 bg-white rounded-lg">
            <div class="flex flex-col gap-8 justify-center items-center py-4 sm:p-4">
                <video controls autoplay class="rounded-md sm:w-4/5">
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
    <!-- resources/views/components/simple-trust-stats.blade.php -->
    <section class="bg-[#825A7E] text-white py-20 rounded-xl px-4">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 items-center">
            <div class="flex flex-col items-center opacity-0 trust-stat">
                <svg viewBox="0 0 24 24" width="60" height="60" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 mb-4 trust-icon"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                <span class="text-4xl font-bold mb-2 trust-number" data-target="1000">0</span>
                <p class="text-center trust-description">Happy Clients</p>
            </div>
            <div class="flex flex-col items-center opacity-0 trust-stat">
                <svg viewBox="0 0 24 24" width="60" height="60" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 mb-4 trust-icon"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                <span class="text-4xl font-bold mb-2 trust-number" data-target="500">0</span>
                <p class="text-center trust-description">Projects Completed</p>
            </div>
            <div class="flex flex-col items-center opacity-0 trust-stat">
                <img src="/path/to/icon3.svg" alt="Team Members" class="w-16 h-16 mb-4 trust-icon">
                <span class="text-4xl font-bold mb-2 trust-number" data-target="50">0</span>
                <p class="text-center trust-description">Team Members</p>
            </div>
            <div class="flex flex-col items-center opacity-0 trust-stat">
                <img src="/path/to/icon4.svg" alt="Years of Experience" class="w-16 h-16 mb-4 trust-icon">
                <span class="text-4xl font-bold mb-2 trust-number" data-target="10">0</span>
                <p class="text-center trust-description">Years of Experience</p>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const stats = document.querySelectorAll('.trust-stat');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateStat(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            stats.forEach(stat => observer.observe(stat));

            function animateStat(stat) {
                stat.style.opacity = 1;

                const icon = stat.querySelector('.trust-icon');
                const number = stat.querySelector('.trust-number');
                const description = stat.querySelector('.trust-description');

                icon.style.animation = 'fadeIn 0.5s forwards';

                setTimeout(() => {
                    const target = parseInt(number.getAttribute('data-target'));
                    animateNumber(number, target);
                }, 500);

                setTimeout(() => {
                    description.style.animation = 'fadeIn 0.5s forwards';
                }, 1000);
            }

            function animateNumber(element, target) {
                let current = 0;
                const duration = 1000; // 1 second
                const step = target / (duration / 16); // Assuming 60fps

                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        clearInterval(timer);
                        current = target;
                    }
                    element.textContent = Math.round(current);
                }, 16);
            }
        });
    </script>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
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
