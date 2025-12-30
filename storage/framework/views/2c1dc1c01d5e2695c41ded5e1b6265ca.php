<?php $__env->startSection('title'); ?>
    Старт игры
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="relative">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo e(Vite::asset('resources/images/screenshots/3.png')); ?>" alt="" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-slate-950/50"></div>
        </div>
        <div class="relative z-10 min-h-210 sm:min-h-170 flex items-center justify-center">
            <div class="text-shadow-md/50 flex flex-col items-center gap-3">
                <h1 class="font-bold text-5xl">Подключение</h1>
                <p class="text-center m-2 italic">
                    Чтобы присоедениться к серверу нужно оплатить проходку. Цена начинается от 100₽ или же 1€.
                </p>
                <div class="flex flex-wrap justify-center gap-3 items-center">
                    <a href="https://t.me/tribute/app?startapp=ep_8x8LjFZ5369Ln1USu428l2tEs5IZnslmGdzMWlM1fndnVh1PlC"
                        target="_blank"
                        class="mx-2 p-2 flex gap-3 rounded-md border-2 border-zinc-400 min-w-50 max-w-150 backdrop-blur-sm text-shadow-sm text-shadow-black hover:scale-105 duration-200 cursor-pointer">
                        <div class="block h-12 w-fit rounded-full overflow-clip">
                            <img src="<?php echo e(Vite::asset('resources/images/tribute.png')); ?>" alt=""
                                class="h-full min-w-12">
                        </div>
                        <div>
                            <div class="flex justify-between items-center">
                                <p class="mono font-bold text-2xl">Tribute</p>
                                <p class="mono italic text-end text-emerald-300/80">Дешевле</p>
                            </div>
                            <hr class="my-1 border-zinc-500/50">
                            <p class="italic">
                                Новый способ оплаты.
                                Принимаются российские и зарубежные карты, а также валюта из кошелька Telegram.
                                После оплаты вас добавит в беседу Telegram.
                            </p>
                        </div>
                    </a>
                    <a href="https://boosty.to/cacuti" target="_blank"
                        class="mx-2 p-2 flex gap-3 rounded-md border-2 border-zinc-400 min-w-50 max-w-150 backdrop-blur-sm text-shadow-sm text-shadow-black hover:scale-105 duration-200 cursor-pointer">
                        <div class="block h-12 w-fit rounded-full">
                            <img src="<?php echo e(Vite::asset('resources/images/boosty.png')); ?>" alt=""
                                class="h-full min-w-12">
                        </div>
                        <div>
                            <p class="mono font-bold text-2xl">Boosty</p>
                            <hr class="my-1 border-zinc-500/50">
                            <p class="italic">
                                Старый способ оплаты.
                                Принимаются только российские карты и PayPal кошельки.
                                После привзяки дискора и оплаты вас добавит в наш дискорд-сервер.
                            </p>
                        </div>
                    </a>
                </div>
                <p class="text-center m-2 italic">
                    После подписки, при помощи дискорд-бота вы сможете легко добавиться в вайтлист и зайти на сервер.
                </p>

                <div class="mono rounded-md outline-2 outline-zinc-400 bg-zinc-800/80 flex items-center">
                    <p class="border-r-2 border-zinc-400/50 p-2">IP:</p>
                    <p id="IP" class="p-2 w-28 focus:outline-0 text-center">cacuti.ru</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-2 my-10 sm:mx-auto  sm:w-5/7 flex items-center flex-wrap">
        <div>
            <h1 class="font-bold text-3xl sm:text-4xl text-center">Вайтлист</h1>
            <p class="italic mx-auto my-4 sm:w-3/4 ">Чтобы добавиться в вайтлист напишите свой ник на Boosty/Telegram в <a
                    class="w-fit p-1 outline-2 rounded outline-amber-500/50 bg-amber-800/20 text-amber-400 mono"
                    href="https://discord.com/channels/936366644459094027/937434043409109063" target="_blank">специальной
                    ветке</a> вместе с ником в майнкрафте. После этого бот сразу добавит вас в вайтлист. Если возникли
                проблемы с ботом, свяжитесь с администрацией.</p>
        </div>
        <div class="mx-auto">
            <div class="flex flex-wrap gap-2 p-2 bg-zinc-300/30 rounded-md">
                <div class="mx-auto rounded overflow-clip">
                    <img src="<?php echo e(Vite::asset('resources/images/boosty_example.png')); ?>" alt="" class="h-full">
                </div>
                <div class="mx-auto rounded overflow-clip">
                    <img src="<?php echo e(Vite::asset('resources/images/tg_example.png')); ?>" alt="" class="h-full">
                </div>
            </div>
            <p class="mt-1 italic text-center text-zinc-400">Примеры</p>
        </div>
    </div>
    <div class="group pix w-fit mx-auto">
        <div style="perspective: 250px" class="flex justify-center gap-3">
            <img src="<?php echo e(Vite::asset('resources/images/budgies/magic.png')); ?>"
                class="size-10 translate-x-30 -z-10 group-hover:translate-x-5 group-hover:-translate-y-5 opacity-20 group-hover:opacity-100 ease-out duration-300"
                alt="">
            <img src="<?php echo e(Vite::asset('resources/images/budgies/gear.png')); ?>"
                class="size-10 translate-x-15 -z-10 group-hover:translate-x-0 group-hover:translate-y-15 group-hover:-rotate-360 opacity-20 group-hover:opacity-100 duration-300"
                alt="">
            <a href="<?php echo e(route('download')); ?>"
                class="text-center font-bold text-3xl sm:text-4xl py-4 px-8 bg-gradient-to-r from-blue-500 to-amber-400 text-shadow-sm text-shadow-slate-800/30 rounded-2xl overflow-clip hover:rotate-x-5 active:rotate-x-0 hover:scale-102 active:scale-100 hover:shadow-lg hover:shadow-black/80 active:shadow-slate-900 active:shadow-sm duration-300">
                Скачать сборку
            </a>
            <img src="<?php echo e(Vite::asset('resources/images/budgies/sword.png')); ?>"
                class="size-10 -translate-x-15 -z-10 group-hover:translate-x-0 group-hover:translate-y-15 group-hover:rotate-360 opacity-20 group-hover:opacity-100 duration-300"
                alt="">
            <img src="<?php echo e(Vite::asset('resources/images/budgies/lamp.png')); ?>"
                class="size-10 -translate-x-30 -z-10 group-hover:-translate-x-5 group-hover:-translate-y-5 opacity-20 group-hover:opacity-100 ease-out duration-300"
                alt="">
        </div>
    </div>

    <div class="mx-auto my-10 w-5/7 text-center">
        <h2 class="text-center font-bold text-3xl sm:text-4xl my-5">Система скинов</h2>
        <p>
            Игрокам без лиензии рекомендуется использовать систему скинов <a href="https://ely.by/" target="_blank"
                class="rounded p-1 border-2 border-emerald-500/50 bg-emerald-800/20 text-emerald-400">Ely.by<?php if (isset($component)) { $__componentOriginal90eee3f94ef0e1b15e49c277c8700e9b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90eee3f94ef0e1b15e49c277c8700e9b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90eee3f94ef0e1b15e49c277c8700e9b)): ?>
<?php $attributes = $__attributesOriginal90eee3f94ef0e1b15e49c277c8700e9b; ?>
<?php unset($__attributesOriginal90eee3f94ef0e1b15e49c277c8700e9b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90eee3f94ef0e1b15e49c277c8700e9b)): ?>
<?php $component = $__componentOriginal90eee3f94ef0e1b15e49c277c8700e9b; ?>
<?php unset($__componentOriginal90eee3f94ef0e1b15e49c277c8700e9b); ?>
<?php endif; ?></a>,
            либо воспользоваться модом <a href="https://modrinth.com/plugin/custom-player-models" target="_blank"
                class="rounded p-1 border-2 border-amber-500/50 bg-amber-800/20 text-amber-400">CPM<?php if (isset($component)) { $__componentOriginal90eee3f94ef0e1b15e49c277c8700e9b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90eee3f94ef0e1b15e49c277c8700e9b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90eee3f94ef0e1b15e49c277c8700e9b)): ?>
<?php $attributes = $__attributesOriginal90eee3f94ef0e1b15e49c277c8700e9b; ?>
<?php unset($__attributesOriginal90eee3f94ef0e1b15e49c277c8700e9b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90eee3f94ef0e1b15e49c277c8700e9b)): ?>
<?php $component = $__componentOriginal90eee3f94ef0e1b15e49c277c8700e9b; ?>
<?php unset($__componentOriginal90eee3f94ef0e1b15e49c277c8700e9b); ?>
<?php endif; ?></a>
        </p>
    </div>
    <div class="mx-auto mb-20 w-5/7 text-center">
        <h2 class="text-center font-bold text-3xl my-5">Рекомендуемые лаунчеры:</h2>
        <div class="mx-auto w-fit flex flex-col sm:flex-row items-center flex-wrap gap-5 justify-center">
            <a href="https://prismlauncher.org/" target="_blank" class="sm:h-17 h-20 group">
                <img src="<?php echo e(Vite::asset('resources/images/prism.svg')); ?>" alt="" class="h-full">

                <div class="hidden group-hover:block w-0 h-0 mx-auto">
                    <p
                        class="w-100 md:w-160 p-2 text-left bg-slate-900 outline-2 outline-slate-600 rounded -translate-x-50 md:-translate-x-80 z-100">
                        Свободный лаунчер с открытым исходным кодом. Позволяет иметь несколько сборок на одну версию, имеет
                        удобную систему загрузки модов из официальных источников. Требует лицензию. Основа Freesm и
                        ElyPrism.
                    </p>
                </div>
            </a>
            <a href="https://new.freesmlauncher.org/" target="_blank" class="sm:h-17 h-20 group">
                <img src="<?php echo e(Vite::asset('resources/images/freesm.webp')); ?>" alt="" class="h-full">
                <div class="hidden group-hover:block w-0 h-0 mx-auto">
                    <p
                        class="w-100 md:w-160 p-2 text-left bg-slate-900 outline-2 outline-slate-600 rounded -translate-x-50 md:-translate-x-80">
                        Лучший для проживающих в РФ. Встроен обход блокировки Modrinth и авторизаия по Ely.by. Разработчики
                        из РФ, так что в случае непредвиденных блокировок обновления будут актуальны и легкодоступны.
                    </p>
                </div>
            </a>
            <a href="https://new.freesmlauncher.org/" target="_blank" class="sm:h-17 h-20 group">
                <img src="<?php echo e(Vite::asset('resources/images/elyprism.svg')); ?>" alt="" class="h-full">

                <div class="hidden group-hover:block w-0 h-0 mx-auto">
                    <p class="w-100 p-2 text-left bg-slate-900 outline-2 outline-slate-600 rounded -translate-x-50">
                        Тот же Prism, но с надстройкой для корректной работы с Ely.by.
                    </p>
                </div>
            </a>
            <a href="https://llaun.ch/ru" target="_blank" class="group" class="md:h-17 h-25 group">
                <img src="<?php echo e(Vite::asset('resources/images/legacy.png')); ?>" alt=""
                    class="rounded h-full sm:w-17 w-25">

                <div class="hidden group-hover:block w-0 h-0 mx-auto">
                    <p
                        class="w-100 md:w-160 p-2 text-left bg-slate-900 outline-2 outline-slate-600 rounded -translate-x-50 md:-translate-x-80">
                        Legacy Launcher by turikhay. Свободный лаунчер с открытым исходным кодом, авторизацией через Ely.by
                        и возможностью бесплатного
                        отключения рекламы. Разработчики текущего популярного TLauncher украли бренд и название у
                        оригинального разработчика. Не
                        используйте TL, это шпионское ПО.
                    </p>
                </div>
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/zh0raaa/Рабочий стол/cctinfo/resources/views/play.blade.php ENDPATH**/ ?>