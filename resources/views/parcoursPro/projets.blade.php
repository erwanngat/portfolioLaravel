<x-layout>
    <x-slot name='header'>
        {{ 'Mes projets' }}
    </x-slot>
    <div class='text-white p-8 text-justify flex justify-center'>
        <div
            class="border-solid border-2 border-gray-800 w-72 h-64 rounded-2xl bg-gray-800 hover:border-white hover:border-2 hover:bg-gray-700 mr-16">
            <div class='p-2'>
                <div class='bg-blue-900 w-14 h-14 rounded-lg pt-1 pl-1'>
                    <span><i class="ri-shopping-cart-2-line text-5xl"></i></span>
                </div>
            </div>
            <div class='pt-8 p-4'>
                <p class='font-bold text-lg'>Site de vente de chaussures</p>
                <p> J'ai effectuer un petit site de vente de chaussure.</p>
                <div class='pt-8 font-bold hover:text-blue-400'>
                    <a href='/projet1'>Plus d'informations<i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
        <div
            class="border-solid border-2 border-gray-800 w-72 h-64 rounded-2xl bg-gray-800 hover:border-white hover:border-2 hover:bg-gray-700 mr-16">
            <div class='p-2'>
                <div class='bg-blue-900 w-14 h-14 rounded-lg pt-1 pl-1'>
                    <span><i class="ri-game-line text-5xl"></i></span>
                </div>
            </div>
            <div class='pt-8 p-4'>
                <p class='font-bold text-lg'>Site jeu de la roulette</p>
                <p>J'ai effectuer un jeu de la roulette sur navigateur.</p>
                <div class='pt-8 font-bold hover:text-blue-400'>
                    <a href="/projet2">Plus d'informations<i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
        <div
            class="border-solid border-2 border-gray-800 w-72 h-64 rounded-2xl bg-gray-800 hover:border-white hover:border-2 hover:bg-gray-700">
            <div class='p-2'>
                <div class='bg-blue-900 w-14 h-14 rounded-lg pt-1 pl-1'>
                    <span><i class="ri-shopping-cart-2-line text-5xl"></i></span>
                </div>
            </div>
            <div class='pt-8 p-4'>
                <p class='font-bold text-lg'>Site gestion de ressources</p>
                <p>J'ai effectuer un petit site de gestion de ressources CRUD.</p>
                <div class='pt-8 font-bold hover:text-blue-400'>
                    <a href="/projet3">Plus d'informations<i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
