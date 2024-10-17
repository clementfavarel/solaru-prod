<footer class="bg-white text-dark pt-8 sm:pb-8 mb-20 sm:mb-0 shadow-t-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap justify-between items-start">
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <img src="/img/logo.webp" alt="Solaru Prod logo" class="w-60 mb-4">
                {{-- <img src="/img/qualiopi.webp" alt="Qualiopi logo" class="w-60 mb-4"> --}}
                <p class="mb-2">Copyright &copy; {{ date('Y') }} - {{ config('app.name', 'Solaru Form') }}</p>
                <p>Site internet créé par plkode</p>
            </div>

            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="mb-3">Contactez-nous</h3>
                <a href="mailto:contact@solaruform.com" class="block mb-2 underline">contact@solaruform.com</a>
                <p class="mb-4">07 69 45 27 25</p>
                <div class="flex space-x-4">
                    <a href="https://www.instagram.com/solaruform"
                        class="text-dark hover:text-black" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-instagram h-6 w-6">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/solaru-form"
                        class="text-dark hover:text-black" target="_blank">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                    </a>
                </div>
            </div>

            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="mb-3">Informations</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('mentions.legales') }}" class="hover:underline">Mentions légales</a></li>
                    <li><a href="{{ route('conditions.generales') }}" class="hover:underline">Conditions générales</a>
                    </li>
                    <li><a href="{{ route('politique.confidentialite') }}" class="hover:underline">Politique de
                            confidentialité</a></li>
                    <li><a href="{{ route('reglement.interieur') }}" class="hover:underline">Règlement intérieur</a>
                    </li>
                    <li><a href="{{ route('reglement.foad') }}" class="hover:underline">Règlement FOAD</a>
                    </li>
                    {{-- <li><a href="{{ route('protocole.sanitaire') }}" class="hover:underline">Protocole sanitaire</a>
                    </li> --}}
                    {{-- <li><a href="{{ route('demarche.qualite') }}" class="hover:underline">Démarche qualité</a></li> --}}
                    </li>
                </ul>

            </div>
        </div>
    </div>
</footer>
