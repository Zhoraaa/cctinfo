<?php

namespace Database\Seeders;

use App\Models\Power;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Power::factory()->create([
        //     'origin_type' => '',
        //     'name' => '',
        //     'description' => '',

        // ]);


        // Арахниды
        Power::factory()->create([
            'origin_type' => 'Arachnid',
            'name' => 'Цепкие лапки',
            'description' => 'От ваших предков вам досталась отличная хватка. Вы можете карабкаться по отвесным поверхностям.',

        ]);
        Power::factory()->create([
            'origin_type' => 'Arachnid',
            'name' => 'Охотничья хитрость',
            'description' => 'Нападая на существ, вы имеете шанс замедлить и опутать их своей паутиной. Вас же паутина не замедляет.',

        ]);
        Power::factory()->create([
            'origin_type' => 'Arachnid',
            'name' => 'Хитиновый панцирь',
            'description' => 'Некоторые чары сплетены так, чтобы наносить больше урона по таким как вы. Вы получаете больше урона от "Бича членистоногих".',

        ]);
        // Огнерождённые
        Power::factory()->create([
            'origin_type' => 'Fireborn',
            'name' => 'Пламенная душа',
            'description' => 'Огонь не причиняет вам вреда. Будучи вашим отцом он не станет вам вредить. ',

        ]);
        Power::factory()->create([
            'origin_type' => 'Fireborn',
            'name' => 'Огненный удар',
            'description' => 'Окутанные пламенем огнерождённые очень опасны в бою. Будучи подожжённым вы наносите дополнительный урон свои противникам. ',

        ]);
        Power::factory()->create([
            'origin_type' => 'Fireborn',
            'name' => 'Выжигая хвори',
            'description' => 'Температура вашего тела сжигает все яды. Вы не можете быть отравлены. ',

        ]);
        Power::factory()->create([
            'origin_type' => 'Fireborn',
            'name' => 'Водный баланс',
            'description' => 'В обмен на жизнь под покровительством Священного Пламени, огнерожднные вынуждены опасаться воды. Жидкость при соприкосновении с ними вскипает, остужая их пламенные тела и души. ',

        ]);
        // Эндерианцы
        Power::factory()->create([
            'origin_type' => 'Enderian',
            'name' => 'Жемчужная неуловимость',
            'description' => 'Природа наградила вас священным даром. Вы - волшебное существо, способное телепортироваться на десятки метров при помощи волшебных жемчужин. Телепортация не причиняет вам никакого вреда в отличии от прочих существ. ',
            'explain' => 'Для броска нажмите ЛКМ пустой рукой'
        ]);
        Power::factory()->create([
            'origin_type' => 'Enderian',
            'name' => 'Гидрофобия',
            'description' => 'Вода жжётся! Похоже что поколения, проведённые вашими предками в космической пустоте оставили свой след... '
        ]);
        // Фелины
        Power::factory()->create([
            'origin_type' => 'Feline',
            'name' => 'Кошачья грация',
            'description' => 'Вы обладаете природной грацией, что спасает вас в самые опасные моменты жизни. Вы умеете мягко приземлиться, с какой высоты вы бы не падали. Ваше передвижение не провоцирует скалк-сенсоры и Хранителя. ',

        ]);
        Power::factory()->create([
            'origin_type' => 'Feline',
            'name' => 'Ловкость охотника',
            'description' => 'Ваши конечности работают словно пружины, на бегу вы прыгаете значительно выше. ',

        ]);
        Power::factory()->create([
            'origin_type' => 'Feline',
            'name' => 'Мягкие лапки',
            'description' => 'В обмен на безупречную ловкость вы теряете в силе, у вас не выйдет разбить большие куски каменных пород. ',

        ]);
        Power::factory()->create([
            'origin_type' => 'Feline',
            'name' => 'Гроза живых растений',
            'description' => 'Неразумные криперы вас боятся и не станут с вами связываться. Но осторожно! Если вы их атакуете они взорвутся от страха! ',

        ]);
        // Мерлинги
        Power::factory()->create([
            'origin_type' => 'Merling',
            'name' => 'Среда обитания',
            'description' => 'Организмы вашего вида приспособлены к жизни под водой. Глаза отлично в ней видят, перепонки и плавники помогают быстрее плавать и регулировать глубину. А мышцы, приспособленные к давлению дают отличную координацию при раскопках, однако на суше они теряют крепость хватки. ',

        ]);
        Power::factory()->create([
            'origin_type' => 'Merling',
            'name' => 'Народ глубин',
            'description' => 'Некоторые чары сплетены так, чтобы наносить больше урона по таким, как вы. Вы получчаете больше урона от зачарования "Пронзатель" ',

        ]);
        // Шалки
        Power::factory()->create([
            'origin_type' => 'Shulk',
            'name' => '',
            'description' => '',

        ]);
        Power::factory()->create([
            'origin_type' => 'Shulk',
            'name' => 'Твердолобый',
            'description' => 'У шалков ещё остались узнаваемые черты их предков. На их телах присутствую твёрдые панцири, что представляют из себя довольно прочную броню.',

        ]);
        Power::factory()->create([
            'origin_type' => 'Shulk',
            'name' => 'Заначка',
            'description' => 'Потайной кармашек под панцирем даёт вам 9 дополнительных слотов. До них не добраться никому, даже самой смерти.',
            'explain' => 'Нажмите ПКМ по слоту нагрудника, чтобы открыть дополнительные слоты.'
        ]);
        Power::factory()->create([
            'origin_type' => 'Shulk',
            'name' => 'Камнетёс',
            'description' => 'Ваше тело - сплошная мышца, при том очень сильная! Крепкие кусочки панциря на "руках" позволяют вам одной левой разбивать толщи каменных пород!',

        ]);
        Power::factory()->create([
            'origin_type' => 'Shulk',
            'name' => 'Культяпки',
            'description' => 'Конечности у вас хоть и сильные, но отнюдь не ловкие. Такими культяпками сложно удержать щит, рассчитаный на гуманоидную руку.',

        ]);
        Power::factory()->create([
            'origin_type' => 'Shulk',
            'name' => 'Быстрый метаболизм',
            'description' => 'Ваше тело очень сильное и постоянно сжигает калории. Чтобы совсем не исхудать, вам стоит больше питаться.',

        ]);
        // Пчела
        Power::factory()->create([
            'origin_type' => 'Bee',
            'name' => 'Жало ярости',
            'description' => 'Боевой стиль анигол задействует особенности их биологии. Они отравляют своих врагов жалами, что отрастают после использования.',
        ]);
        Power::factory()->create([
            'origin_type' => 'Bee',
            'name' => 'Красота природы',
            'description' => 'Вы вступаете в симбиоз с ближайшими цветами. Покуда вы их опыляете, ваша регенерация ускорена.',
        ]);
        Power::factory()->create([
            'origin_type' => 'Bee',
            'name' => 'Часть улья',
            'description' => 'Пчёлы рады поделится с вами собранным мёдом.',
        ]);
        // Лисы
        Power::factory()->create([
            'origin_type' => 'Inari',
            'name' => 'Резвый зверь',
            'description' => 'Инари от природы очень быстры. А благодаря своим размерам, вам проще лавировать средь крупных существ, что ещё сильнее вас ускоряет!',
            'explain' => 'Вы быстрее людей. Находясь рядом с группой от трёх игроков вы ускоряетесь ещё сильнее.'
        ]);
        Power::factory()->create([
            'origin_type' => 'Inari',
            'name' => 'Клептомания',
            'description' => 'Лисьи хитрости и природная клептомания помогают вам подбирать предметы на большей дистанции.',
        ]);
        Power::factory()->create([
            'origin_type' => 'Inari',
            'name' => 'Сладость ягод',
            'description' => 'Ягоды - настоящее лакомство для инари. Помимо того, что вкусные, ещё и кусты сладких ягод не прокалывают шерсть!',
            'explain' => 'Сладкие и светящиеся ягоды восстанавливают больше сытости и насыщения.'
        ]);
        // Слизни
        Power::factory()->create([
            'origin_type' => 'Slime',
            'name' => 'Митоз',
            'description' => 'Вы ',
        ]);
        Power::factory()->create([
            'origin_type' => 'Slime',
            'name' => '',
            'description' => '',
        ]);
        Power::factory()->create([
            'origin_type' => 'Slime',
            'name' => '',
            'description' => '',
        ]);
    }
}