<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Cadastre uma novela aqui!") }}

                    <!-- Titulo -->
                    <div>
                        <x-input-label for="titulo" :value="__('Titulo')" />
                        <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" required autofocus autocomplete="titulo" />
                        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                    </div>

                    <!-- Descricao -->
                    <div class="mt-4">
                        <x-input-label for="descricao" :value="__('Descricao')" />
                        <x-text-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')" required autocomplete="descricao" />
                        <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                    </div>

                   <!-- Inicio exibicao -->
                    <div class="mt-4">
                        <x-input-label for="inicio_exibicao" :value="__('Date de início da exibição')" />
                        <x-text-input id="inicio_exibicao" class="block mt-1 w-full" type="date" name="inicio_exibicao" :value="old('inicio_exibicao')" required autocomplete="inicio_exibicao" />
                        <x-input-error :messages="$errors->get('inicio_exibicao')" class="mt-2" />
                    </div>

                    <!-- Fim exibicao -->
                    <div class="mt-4">
                        <x-input-label for="fim_exibicao" :value="__('Data de exibição do último capítulo')" />
                        <x-text-input id="fim_exibicao" class="block mt-1 w-full" type="date" name="fim_exibicao" :value="old('fim_exibicao')" required autocomplete="fim_exibicao" />
                        <x-input-error :messages="$errors->get('fim_exibicao')" class="mt-2" />
                    </div>

                    <!-- Pico de audiência -->
                    <div class="mt-4">
                        <x-input-label for="topo_audiencia" :value="__('Pico de audiência da novela')" />
                        <x-text-input id="topo_audiencia" class="block mt-1 w-full" type="number" name="topo_audiencia" :value="old('topo_audiencia')" required autocomplete="topo_audiencia" />
                        <x-input-error :messages="$errors->get('topo_audiencia')" class="mt-2" />
                    </div>

                    <!-- Quantidade de capítulos -->
                    <div class="mt-4">
                        <x-input-label for="qtd_capitulos" :value="__('Quantidade de capítulos')" />
                        <x-text-input id="qtd_capitulos" class="block mt-1 w-full" type="number" name="qtd_capitulos" :value="old('qtd_capitulos')" required autocomplete="qtd_capitulos" />
                        <x-input-error :messages="$errors->get('qtd_capitulos')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
