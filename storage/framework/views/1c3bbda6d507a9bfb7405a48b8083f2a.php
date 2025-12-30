<?php $__env->startSection('title'); ?>
    СаСиТи
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="relative">
        <?php
            $dir = '../resources/images/screenshots/';
            $files = glob($dir . '*.png');
            if (!empty($files)) {
                $randomFile = array_rand($files);
                $asset = $files[$randomFile];
            } else {
                $asset = 'Не найдено файлов *.png';
            }
            $asset = explode('/', $asset)[4];
        ?>
        <div class="absolute inset-0 z-0">
            <img src="<?php echo e(Vite::asset('resources/images/screenshots/' . $asset)); ?>" alt=""
                class="w-full h-full object-cover">
        </div>
        <div class="relative z-10 bg-slate-400/20 min-h-170 md:min-h-200 flex items-center">
            <div class="md:w-5/7 m-auto px-5 sm:px-10 md:px-0">
                <div class="w-fit flex flex-col gap-20">
                    <div class="mt-5 text-shadow-md/50">
                        <h1 class="font-bold text-5xl">CCT: Industry vs. Fantasy</h1>
                        <p class="md:w-4/7">
                            Рибентроп - мир полный волшебных существ, оккультных практик, причудливых артефактов и магов,
                            пытающихся обуздать их мощь.
                            Однако, совсем недавно, величие меча и магии Рибентропа начали теснить ЕБУЧИЕ ТЕХНАРИ!
                        </p>
                    </div>
                    <div class="flex flex-wrap md:flex-row items-baseline gap-3 mx-auto md:mx-0">
                        <div class="w-fit">
                            <a href="<?php echo e(route('play')); ?>"
                                class="mt-1 shadow-zinc-800 shadow-sm hover:shadow-zinc-800/30 w-fit flex items-center gap-1 py-2 px-4 rounded-xl bg-blue-400 text-blue-950 hover:text-black hover:scale-115 duration-300 ease-out">
                                <span class="font-bold text-xl">Играть</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <p class="mt-1 font-bold text-center text-blue-400 text-shadow-xs text-shadow-zinc-800">Forge
                                1.20.1</p>
                        </div>
                        <div class="mono rounded-md outline-2 outline-zinc-400 bg-zinc-800/80 flex items-center">
                            <input id="IP" class="p-2 w-28 focus:outline-0 text-center" readonly value="cacuti.ru">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center py-10">
        <h2 class="text-3xl sm:text-4xl font-bold mb-3">
            Выбери сторону!
        </h2>
        <div class="flex justify-between flex-col gap-3 md:flex-row sm:w-6/7 lg:w-6/8 mx-auto">
            <div
                class="md:w-full mx-1 md:mx-0 md:my-2 border-2 border-blue-500/50 bg-blue-800/10 text-blue-300 rounded-2xl p-4 hover:scale-102 transition-all duration-200">
                <div class="flex items-center justify-center gap-3 pix">
                    <img src="<?php echo e(Vite::asset('resources/images/budgies/sword.png')); ?>" class="size-10" alt="">
                    <h3 class="text-2xl font-bold">Меч и магия</h3>
                    <img src="<?php echo e(Vite::asset('resources/images/budgies/magic.png')); ?>" class="size-10" alt="">
                </div>
                <hr class="my-2 border-blue-500/50">
                <div class="h-fit max-h-80 lg:max-h-150 overflow-clip rounded-xl bg-zinc-900/40">
                    <img src="<?php echo e(Vite::asset('resources/images/choice/wizard.png')); ?>" alt="">
                </div>
                <p class="text-start italic mt-2">
                    Коренные жители Рибентропа, коим по праву рождения подвластно колдовство и клинок.
                    Таинства магии и боевые искусства, передающиеся из поколения в поколение - вот их орудие в борьбе с
                    захватчиком!
                </p>
            </div>
            <div
                class="md:w-full mx-1 md:mx-0 md:my-2 border-2 border-amber-500/50 bg-amber-800/20 text-amber-400 rounded-2xl p-4 hover:scale-102 transition-all duration-200">
                <div class="flex items-center justify-center gap-3">
                    <img src="<?php echo e(Vite::asset('resources/images/budgies/gear.png')); ?>" class="size-10" alt="">
                    <h3 class="text-2xl font-bold">Наука и прогресс</h3>
                    <img src="<?php echo e(Vite::asset('resources/images/budgies/lamp.png')); ?>" class="size-10" alt="">
                </div>
                <hr class="my-2 border-amber-500/50">
                <div class="h-fit max-h-80 lg:max-h-150 overflow-clip rounded-xl bg-zinc-900/40">
                    <img src="<?php echo e(Vite::asset('resources/images/choice/goblin.png')); ?>" alt="">
                </div>
                <p class="text-start sm:text-end italic mt-2">
                    Чужеземцы из неизведанных краёв. Колдовство им неведомо, но невежество в искусстве чар им
                    не мешает. Со знанием точных наук они создают устрашающие
                    машины войны, что разбирают этот мир по кусочкам.
                </p>
            </div>
        </div>
    </div>

    <div class="mx-2 md:mx-auto md:w-5/7 px-5 sm:px-10 md:px-0 text-center rounded-2xl">
        <h2 class="text-center text-3xl sm:text-4xl font-bold">
            Комьюнити
        </h2>
        <p class="text-start mt-2 mb-3">
            CCT - это сервер, завязанный в первую очередь на игроках, с которыми вы можете подружиться. Хотя основной темой
            общения является майнкрафт, он всё ещё не является единственной темой разговора. У нас вы можете найти поддержку
            в трудные времена. Вместе с кем-то порадоваться. И просто приятно провести время за разговорами, совместной игрой или
            просмотром сериала.
        </p>
        <p class="text-start mt-2 mb-3">
            Благодаря тому, что многие игроки даже спустя годы всё так же выбирают нас,
            нам удалось собрать комьюнити творческих, отзывчивых, инициативных и весёлых людей. В следующем феврале нашему
            проекту исполняется 4 года и в будущем мы хотим оставаться лучшим выбором для вас.
        </p>
        <div class="flex items-center my-2 mx-auto rounded-xl overflow-clip w-fit">
            <img src="<?php echo e(VIte::asset('resources/images/together.png')); ?>" alt="Совместное фото с концовки прошлого сезона">
        </div>
        <p class="italic text-zinc-200/70">
            Концовка прошлого сезона
        </p>
    </div>


    <div class="text-center py-10">
        <h2 class="text-3xl sm:text-4xl font-bold mb-3">
            Наши звёздочки
        </h2>
        <p class="my-2 mx-auto max-w-150">
                Значимой частью нашего сервера являются художники, которые рисуют свои шедевры по мотивам ролёвок и
                локальных мемов.
            </p>
        <div>
            <?php
                $artists = [
                    ['link' => 'https://t.me/matsu_ouo', 'name' => 'Моральная компенсация', 'pic' => 'matsu.jpg'],
                    ['link' => 'https://t.me/emi8444', 'name' => 'VI_84', 'pic' => 'vi84.jpg'],
                    ['link' => 'https://t.me/vkl_lut1k_0no', 'name' => 'всратый лют1к', 'pic' => 'lutik.jpg'],
                ];
            ?>
            <div class="w-fit mx-auto flex flex-col sm:flex-row flex-wrap sm:justify-center-safe gap-2 sm:gap-4 sm:p-2">
                <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($artist['link']); ?>" target="_blank"
                        class="group w-fit flex items-center flex-row sm:flex-col gap-2 duration-200">
                        <div class="h-20 w-fit rounded-full overflow-clip group-hover:scale-110 duration-300">
                            <img src="<?php echo e(Vite::asset('resources/images/artists/' . $artist['pic'])); ?>" alt=""
                                class="h-full">
                        </div>
                        <div
                            class="sm:h-0 w-fit sm:w-0 sm:overflow-clip group-hover:overflow-visible text-nowrap duration-300">
                            <p
                                class="w-fit sm:w-200 text-end sm:text-center sm:-translate-x-100 sm:opacity-0 group-hover:opacity-100 duration-300 text-xl sm:text-2xl font-bold">
                                <?php echo e($artist['name']); ?>

                            </p>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <div class="text-start py-10">
        <h1 class="text-3xl sm:text-4xl text-center font-bold">
            Сборка
        </h1>
        <p class="mx-1 md:mx-auto md:w-4/7 text-center">
            Этот сезон мы проведём на собственной техно-магической сборке
            <a href="<?php echo e(route('download')); ?>"
                class="p-1 rounded outline-2 mono outline-amber-500/50 bg-amber-800/20 text-amber-400">
                Industry versus Fantasy</a>.
        </p>
    </div>
    <div class="mx-1 md:mx-auto md:w-4/7">
        <h1 class="text-3xl sm:text-4xl font-bold text-center mb-2">Команда проекта</h1>
        <div class="grid gap-2">
            <?php
                $admins = [
                    [
                        'name' => 'zh0raaa',
                        'job' => 'Fullstack & Owner',
                        'desc' => 'Hi, I`m zh0raaa! I`m using WhatsApp!',
                        'tg' => 'zh0raaa',
                        'ds' => 'zh0raaa',
                    ],
                    [
                        'name' => 'Hrysch',
                        'job' => 'DevOps',
                        'desc' => 'I`m sexy and I know it',
                        'tg' => 'SerhiiHorban',
                        'ds' => '_hryshch',
                    ],
                    [
                        'name' => 'chepyxa_0no',
                        'job' => 'Helper',
                        'desc' => 'Хо-хо-хо... Мы снова проебали все дедлайны *хлебнул чаек по-английски*',
                        'tg' => 'ranunculus_repens',
                        'ds' => 'lut1k_0no',
                    ],
                ];
            ?>
            <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border-2 p-2 rounded-md border-zinc-400 bg-zinc-800/40">
                    <img src="" alt="">
                    <div class="mono">
                        <div class="flex justify-between">
                            <span class="text-xl font-bold"><?php echo e($admin['name']); ?></span>
                            <span class="text-sm py-1 px-2 rounded-full bg-slate-50/10"><?php echo e($admin['job']); ?></span>
                        </div>
                        <hr class="my-2 border-zinc-500/50">
                        <p><?php echo $admin['desc']; ?></p>
                        <div class="mt-2 flex gap-2 justify-end italic text-sm text-zinc-100/50">
                            <?php if($admin['tg']): ?>
                                <span>
                                    Tg:<?php echo e($admin['tg']); ?>

                                </span>
                            <?php endif; ?>
                            <?php if($admin['ds']): ?>
                                <span>
                                    Discord:<?php echo e($admin['ds']); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/zh0raaa/Рабочий стол/cctinfo/resources/views/welcome.blade.php ENDPATH**/ ?>