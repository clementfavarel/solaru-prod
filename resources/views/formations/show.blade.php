<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="px-6 py-8 bg-purple-600">
                <h1 class="text-3xl font-extrabold text-white text-center">{{ $formation->titre }}</h1>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <div class="space-y-8">
                    <section>
                        <h2 class="text-2xl font-bold text-gray-900 mb-3">Description</h2>
                        <p class="text-gray-600">{{ $formation->description }}</p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-bold text-gray-900 mb-3">Objectifs</h2>
                        <p class="text-gray-600">{{ $formation->objectifs }}</p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-bold text-gray-900 mb-3">Contenu</h2>
                        <p class="text-gray-600">{{ $formation->contenu }}</p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-bold text-gray-900 mb-3">Modalités</h2>
                        <ul class="mt-2 flex flex-col sm:flex-row gap-2">
                            @foreach ($formation->modalites as $modalite)
                                <li class="mb-2 p-4 bg-white shadow rounded-lg flex-1">
                                    <h3 class="text-lg font-semibold text-purple-600 mb-2">{{ $modalite->modalite }}
                                    </h3>
                                    <p class="text-sm text-gray-500 mb-2">Durée : {{ $modalite->duree_heures }} heures
                                        ({{ $modalite->duree_jours }} jours)
                                    </p>
                                    <p class="text-gray-600">{{ $modalite->details }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </section>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <section>
                            <h2 class="text-2xl font-bold text-gray-900 mb-3">Prérequis</h2>
                            <p class="text-gray-600">{{ $formation->prerequis ?: 'Aucun prérequis spécifique' }}</p>
                        </section>

                        <section>
                            <h2 class="text-2xl font-bold text-gray-900 mb-3">Profil des stagiaires</h2>
                            <p class="text-gray-600">{{ $formation->profils_stagiaires }}</p>
                        </section>
                    </div>

                    <section>
                        <h2 class="text-2xl font-bold text-gray-900 mb-3">Suivi et exploitation</h2>
                        <p class="text-gray-600">{{ $formation->suivi_exploitation }}</p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-bold text-gray-900 mb-3">Accessibilité</h2>
                        <div class="flex flex-col lg:flex-row gap-8 lg:justify-between">
                            <div
                                class="inline-flex items-center px-4 py-2 rounded-full {{ $formation->acces_handicap ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $formation->acces_handicap ? 'Accessible aux personnes en situation de handicap' : 'Non accessible aux personnes en situation de handicap' }}
                            </div>
                            <a class="inline-flex items-center px-4 py-2 rounded-full bg-[#825A7E] text-white"
                                href="/docs/formation{{ $formation->id }}.pdf" target="_blank" type="application/pdf"
                                rel="alternate" media="print">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-download w-5 h-5 mr-2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                                Télécharger le programme
                            </a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
