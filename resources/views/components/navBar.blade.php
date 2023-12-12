<div>
    <nav class="bg-gray-800 text-white w-full fixed top-0 z-50 py-1">
        <div class="flex justify-between items-center px-8">
            <div class="flex items-center">
                <img class='w-16 rounded-xl' src='/images/ppBird.jpg'>
                <p class="text-white font-bold text-2xl ml-2">GATINEL Erwann</p>
            </div>
            <div class="hidden md:flex items-center">
                <a href="/home" class="text-white font-bold mx-4 text-xl">Accueil</a>
                <a href="/cv" class="text-white mx-4 text-lg">CV</a>
                <a href="/bts" class="text-white mx-4 text-lg">BTS SIO</a>

                <div class="dropdown relative">
                    <a href="#" class="text-white mx-4 text-lg">Parcours de professionnalisation ↓</a>
                    <ul class="dropdown-menu absolute hidden bg-gray-800 py-2">
                        <li><a href="/parcourspro"
                                class="text-white block px-4 py-2 hover:bg-gray-700 w-64 text-lg">Parcours
                                professionnel</a></li>
                        <li><a href="/projets" class="text-white block px-4 py-2 hover:bg-gray-700 text-lg">Projets</a>
                        </li>
                        <li><a href="/competences"
                                class="text-white block px-4 py-2 hover:bg-gray-700 text-lg">Portefeuille de
                                compétences</a></li>
                    </ul>
                </div>
                <a href="/veille" class="text-white mx-4 text-lg">Veille technologique</a>
                <a href="/patrimoine" class="text-white mx-4 text-lg">Patrimoine informatique</a>
                <a href="/contact" class="text-white mx-4 text-lg">Contact</a>
            </div>

            <div class="flex md:hidden items-center">
                <input type="checkbox" id="mobile-menu-toggle" class="hidden">
                <label for="mobile-menu-toggle" class="cursor-pointer md:hidden block">
                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </label>
                <div class="mobile-menu md:hidden absolute bg-gray-800 w-full top-16 left-0 py-2">
                    <a href='/home'>
                        <p>Accueil</p>
                    </a>
                    <a href='/cv'>
                        <p>CV</p>
                    </a>
                </div>
            </div>

            <style>
                #mobile-menu-toggle {
                    display: none;
                }

                .mobile-menu {
                    display: none;
                }

                #mobile-menu-toggle:checked+.cursor-pointer+.mobile-menu {
                    display: block;
                }
            </style>

        </div>
    </nav>
</div>
