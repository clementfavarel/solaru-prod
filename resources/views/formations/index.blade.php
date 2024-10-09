<x-app-layout>
    <div class="max-w-7xl py-8 px-4 lg:px-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0 bg-white rounded-lg shadow-lg">
            <div class="flex flex-col gap-8 sm:p-6">
                <h1 class="text-3xl font-bold text-gray-800 text-center mt-4">Nos Formations</h1>
                @foreach ($formations as $formation)
                    <div class="p-6 bg-gray-100 rounded-lg shadow mb-6">
                        <div class="mb-6 w-full h-96 rounded-lg">
                            <img src="{{ $formation->img_src }}" alt="Formation : {{ $formation->titre }}"
                                class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-300">
                        </div>
                        <h2 class="text-2xl font-semibold text-gray-800 text-center">{{ $formation->titre }}</h2>
                        <p class="text-center text-gray-600 mt-2">{{ Str::limit($formation->description, 150) }}</p>
                        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <h3 class="text-lg font-bold text-gray-700">Objectifs :</h3>
                                <p class="mt-2 text-gray-600">{{ Str::limit($formation->objectifs, 100) }}</p>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-700">Niveau :</h3>
                                <p class="mt-2 text-gray-600">{{ $formation->niveau }}</p>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-700">Prérequis :</h3>
                                <p class="mt-2 text-gray-600">{{ $formation->prerequis ?: 'Aucun' }}</p>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-700">Profils des stagiaires :</h3>
                                <p class="mt-2 text-gray-600">{{ Str::limit($formation->profils_stagiaires, 100) }}</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h3 class="text-lg font-bold text-gray-700">Modalités :</h3>
                            <ul class="mt-2 flex flex-col sm:flex-row gap-2">
                                @foreach ($formation->modalites as $modalite)
                                    <li class="mb-2 p-4 bg-white shadow rounded-lg flex-1">
                                        <strong>{{ $modalite->modalite }}</strong><br>
                                        {{ Str::limit($modalite->details, 100) }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <p class="text-sm text-gray-500">
                                Accès PMR :
                                @if ($formation->acces_handicap)
                                    <span class="text-green-500">Disponible</span>
                                @else
                                    <span class="text-red-500">Non disponible</span>
                                @endif
                            </p>
                            <a href="{{ route('formations.show', $formation->id) }}"
                                class="px-4 py-3 rounded-lg bg-purple-500 hover:bg-purple-400 font-semibold text-white text-center">
                                Voir les détails
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
