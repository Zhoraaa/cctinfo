@extends('layout')

@section('title')
    Загрузки
@endsection

@section('content')
    <div class="w-fit sm:mx-auto px-2 p-2 pt-20">
        <div class="w-fit mx-auto my-2">
            <img src="{{ Vite::asset('resources/images/titles/minecraft_title_SM.png') }}" alt="" class="">
        </div>
        <div class="flex w-fit gap-2 p-3 rounded-lg text-md font-bold text-black bg-amber-500">
            <x-icons.download/>
            <p class="">
                .zip
            </p>
            <p>
                825 МБ
            </p>
        </div>
        <div class="flex w-fit gap-2 border-2 p-3 rounded-lg text-md font-bold">
            <x-icons.download/>
            <p class="">
                .mrpack
            </p>
            <p>
                18 МБ
            </p>
        </div>
        <p class="my-2 italic text-slate-200/60 text-sm">
            *.mrpack - легковесный формат сборки для лаунчеров семества Prism и MultiMC
        </p>
    </div>
    <h1 class="sm:w-8/10 w-full sm:mx-auto px-2 my-3 text-3xl sm:text-4xl font-bold text-center">Основные моды:</h1>
    <h1 class="sm:w-8/10 w-full sm:mx-auto px-2 my-3 text-3xl sm:text-4xl font-bold text-center">Преимущества сборки:</h1>
    <h1 class="sm:w-8/10 w-full sm:mx-auto px-2 my-3 text-3xl sm:text-4xl font-bold text-center">Социальные моды:</h1>
    <div class="sm:w-8/10 w-full sm:mx-auto px-2 flex flex-wrap gap-2">
        <div class="w-full flex flex-col gap-2 p-2 rounded border-2 text-blue-400/50 bg-blue-400/10">
            <h3 class="mono text-lg font-bold text-blue-300">
                Simple Voice Chat
            </h3>
            <hr class="text-blue-400/40">
            <p class="my-1 text-blue-300">
                Голосовой чат прямо в игре! Полное погружение в ролевой процесс обеспечено.
            </p>
            <div class="mb-1 flex flex-wrap gap-2 justify-end">
                <a class="w-fit p-1 border-2 rounded border-green-400/50 text-green-400 bg-green-400/20"
                    href="https://modrinth.com/plugin/simple-voice-chat" target="_blank">
                    Modrinth <x-icons.link />
                </a>
                <a class="w-fit p-1 border-2 rounded border-orange-400/50 text-orange-400 bg-orange-400/20" href="">
                    CurseForge <x-icons.link />
                </a>
            </div>
        </div>
        <div class="w-full flex flex-col gap-2 p-2 rounded border-2 text-blue-400/50 bg-blue-400/10">
            <h3 class="mono text-lg font-bold text-blue-300">
                Emotecraft
            </h3>
            <hr class="text-blue-400/40">
            <p class="my-1 text-blue-300">
                Добавим подвижности вашим кубическим персонажам! Скачайте также огромный пак эмоций - <a
                    href="https://spemotes.com/" target="_blank"
                    class="p-1 rounded outline-2 outline-amber-500/50 bg-amber-800/20 text-amber-400">SPEmotes</a>!
                <br>
                Для фикса проблем со сгибанием конечностей у обычных моделей скачайте <a href="" target="_blank"
                    class="p-1 rounded outline-2 outline-amber-500/50 bg-amber-800/20 text-amber-400">фикс</a>.
            </p>
            <div class="mb-1 flex flex-wrap gap-2 justify-end">
                <a class="w-fit p-1 border-2 rounded border-green-400/50 text-green-400 bg-green-400/20"
                    href="https://modrinth.com/plugin/emotecraft" target="_blank">
                    Modrinth <x-icons.link />
                </a>
                <a class="w-fit p-1 border-2 rounded border-orange-400/50 text-orange-400 bg-orange-400/20" href="">
                    CurseForge <x-icons.link />
                </a>
            </div>
        </div>
        <div class="w-full flex flex-col gap-2 p-2 rounded border-2 text-blue-400/50 bg-blue-400/10">
            <h3 class="mono text-lg font-bold text-blue-300">
                Customizable Player Models (CPM)
            </h3>
            <hr class="text-blue-400/40">
            <p class="my-1 text-blue-300">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magnam aliquam quaerat voluptatem. Ut enim aeque doleamus animo, cum corpore dolemus.
            </p>
            <div class="mb-1 flex flex-wrap gap-2 justify-end">
                <a class="w-fit p-1 border-2 rounded border-green-400/50 text-green-400 bg-green-400/20"
                    href="https://modrinth.com/plugin/custom-player-models" target="_blank">
                    Modrinth <x-icons.link />
                </a>
                <a class="w-fit p-1 border-2 rounded border-orange-400/50 text-orange-400 bg-orange-400/20" href="">
                    CurseForge <x-icons.link />
                </a>
            </div>
        </div>
    </div>
@endsection
