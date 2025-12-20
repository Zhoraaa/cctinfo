<div
    class="bg-slate-800/20 fixed z-100 flex md:flex-row md:items-center flex-col items-start justify-between w-full left-1/2 -translate-x-1/2 backdrop-blur-xl md:m-1 md:rounded-lg">
    <div class="md:w-fit w-full flex justify-between items-center duration-200">
        <a href="{{ route('home') }}" class="flex items-center group">
            <div id="menuBtn" data-dropdown-toggle="menu"
                class="group-hover:-rotate-15 duration-200 group-hover:scale-110">
                <div class="">
                    <img src="{{ Vite::asset('resources/images/icon.png') }}" alt="" class="h-20 pix z-200">
                </div>
                <div
                    class="blur-lg group-hover:blur-md group-hover:opacity-75 -translate-y-20 transition-all duration-150 ease-out h-0">
                    <img src="{{ Vite::asset('resources/images/icon.png') }}" alt="" class="h-20">
                </div>
            </div>
            <div
                class="invisible opacity-0 -translate-x-1 group-hover:visible group-hover:opacity-100 group-hover:translate-x-0 text-xl italic text-zinc-100/70 duration-100">
                Главная
            </div>
        </a>
        <div id="navbarBtn" class="p-4 md:hidden block font-bold text-2xl text-shadow-lg cursor-pointer duration-400">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd"
                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </div>
    <navbar id="navbar"
        class="left-50vw px-1 gap-1 hidden md:flex flex-wrap items-start justify-center text-xl text-shadow-lg">
        <a href="{{ route('download') }}"
            class="block py-2 px-4 h-full rounded-sm border-2 border-transparent hover:bg-zinc-800/20 hover:border-zinc-800/30 hover:underline underline-offset-6 duration-150">Скачать</a>
        <a href=""
            class="block py-2 px-4 rounded-md transition-colors duration-200 cursor-not-allowed text-slate-200/40"
            title="Скоро">Вики</a>
        <a href=""
            class="block py-2 px-4 h-full rounded-sm border-2 border-transparent hover:bg-zinc-800/20 hover:border-zinc-800/30 hover:underline underline-offset-6 duration-150">Правила</a>
        <a href=""
            class="block py-2 px-4 rounded-md transition-colors duration-200 cursor-not-allowed text-slate-200/40"
            title="Скоро">Аккаунт</a>
    </navbar>
    <script>
        const navbarBtn = document.getElementById('navbarBtn');
        const navbar = document.getElementById('navbar');

        navbarBtn.addEventListener('click', function() {
            navbar.classList.toggle('hidden');
            navbar.classList.toggle('py-2');
            navbar.classList.toggle('w-full');
            navbarBtn.classList.toggle('rotate-180');
        })
    </script>
</div>
