<?php

namespace Database\Seeders;

use App\Models\Origin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Origin::factory()->create([
        //     'index' => '',
        //     'name' => '',
        //     'description' => '',
        //     'health' => 20,
        //     'food' => '',
        //     'average' => '',
        //     'evolution' => null
        // ]);

        //Люди
        Origin::factory()->create([
            'index' => 'Human',
            'name' => 'Люди',
            'description' => 'Ты думал тут что-то будет? О-о-о...',
            'average' => '60 лет',
            'kindness' => '16 лет'
        ]);
        // Арахниды
        Origin::factory()->create([
            'index' => 'Arachnid',
            'name' => 'Арахниды',
            'description' => 'Существа, облюбовавшие тёмные пещеры. Пауки, чьим обедом на протяжении многих поколений становились незадачливые шахтёры и жители подземелий. Со временем их рацион стал их же силой. Мутации, вызванные поеданием волшебных существ и магов привели к тому, что эти членистоногие стали разумны. Их обучаемость крайне поражает, а инстинкты охотников делают из них невероятно грозных противников.',
            'health' => 14,
            'food' => 'Плотоядные',
            'average' => '35 лет',
            'kindness' => '5 лет'
        ]);
        // Огнерождённые
        Origin::factory()->create([
            'index' => 'Fireborn',
            'name' => 'Огнерождённые',
            'description' => 'Представители разных рас, что при рождении должны были погибнуть, но Священный Пламень выжег их недуги и принял своими детьми. Огнерождённые теряют идентичность своей расы, но приобретают связь со Священным Пламенем. Меткой их рода служат языки пламени, что прорвыаются сквозь поверхность их тел.',
            'average' => 'В два раза дольше исходной расы',
            'kindness' => 'Как обычно'
        ]);
        // Эндерианцы
        Origin::factory()->create([
            'index' => 'Enderian',
            'name' => 'Эндерианцы',
            'description' => 'Потомки волшебников, оказавшихся в западне Края, вынужденные есть одни лишь хорусы они мутировали в новый вид людей. Частицы магии ещё витают в воздухе около них, в напоминание о великих предках. Их культура, ныне переживающая упадок, некогда была средоточением знаний и искусств. Многие из эндерианцев всё ещё грезят стать великими писателями, волшебниками, учёными или архитекторы, как их великие предки.',
            'average' => '90 лет',
            'kindness' => '20 лет'
        ]);
        // Фелины
        Origin::factory()->create([
            'index' => 'Feline',
            'name' => 'Фелины',
            'description' => 'Кошачья грация, длинные хвосты и глаза, зрящие во тьме. Фелины - это ночные охотники, произошедшие от диких кошек. По природе зачастую скрытные, но если вам удастся стать им другом - они будут защищать вас как члена своей стаи. Среди фелин великое множество торговцев, путешественников и наёмников, их народ в анекдотах часто служит стереотипом для бродячих цирков, базаров и прочих цыган.',
            'health' => '18',
            'average' => '40 лет',
            'kindness' => '8 лет'
        ]);
        // Мерлинги
        Origin::factory()->create([
            'index' => 'Merling',
            'name' => 'Мерлинги',
            'description' => 'Разумные жители глубин. Поговаривают, что часть древних предков людей осталась в пучинах, эволюционировав в мерлингов. Ни то рыб, ни то людей. На суше их редко увидишь без склянки или даже ведра воды. А в любом уважающем себя портовом городе стоит морской маяк, в знак солидарности с жителями глубины. ',
            'average' => '20 лет',
            'kindness' => '5 лет'
        ]);
        // Шалки
        Origin::factory()->create([
            'index' => 'Shulk',
            'name' => 'Шалки',
            'description' => 'Пока эндерианцы являются потомками пришельцев в Краю, шалки - его коренной народ. Магические эксперименты над моллюсками вызвали у них ускоренную эволюцию и появление разума. Пусть зачастую шалки и глупы, но их природные особенности сделали из них прекрасных слуг. Крепкие панцири и сильные мыщцы - то что нужно рабочим, чьими работодателями является высокоразвитая цивилизация.',
            'average' => '400 лет',
            'kindness' => '25 лет'
        ]);
        // Пчела
        Origin::factory()->create([
            'index' => 'Bee',
            'name' => 'Аниголы',
            'description' => 'Родом из Великого Улья, аниголы являются нечто большим, чем просто развитые пчёлы. Их семейным узам могли бы позавидовать многие виды. Даже будучи отлучёнными от Улья, аниголы продолжают поддерживать родственные связи со своими родителями. Для анигол дети - это всегда большое счастье, их принято оберегать но и обучать. Большую часть знаний аниголы приобретают от своих родителей, а всё, что они узнают в жизни самостоятельно - стремятся передать своим детям. Помимо семейных уз аниголы также чтят честный труд, среди них часто встречаются мастера своего дела, золотых рук ремесленники и такие рабочие, что во всех мирах не сыскать.',
            'health' => 18,
            'food' => 'Вегетерианцы',
            'average' => '15 лет',
            'kindness' => '2 года'
        ]);
        // Вызыватель
        Origin::factory()->create([
            'index' => 'Evoker',
            'name' => 'Вызыватели',
            'description' => 'Сливки общества разбойников - эти ребята знают толк в искусстве магии призыва. Поговаривают, что им подвластно создать артефакт, что призывает носителя из мира мёртвых.',
            'average' => 'Как у людей',
            'kindness' => 'Как у людей'
        ]);
        // Лиса
        Origin::factory()->create([
            'index' => 'Inari',
            'name' => 'Инари',
            'description' => 'Лисы, благословлённые божеством или люди, им проклятые? Инари представляют собой невысоких гуманоидов с лисьими атрибутами, вроде ушей или хвостов, в редких случаях есть даже шерсть. Инари - весёлый народец, их фольклор насчитывает множество басен и сказов, инари и сами горазды на сочинения и искусство слова. Редко вы увидите инари, что не захочет рассказать чего весёлого в кругу друзей у костра, за барной стойкой или даже в более трагической ситуации, для поднятия духа.',
            'health' => 16,
            'average' => 'Как у людей',
            'kindness' => 'Как у людей'
        ]);
        // Слизень
        Origin::factory()->create([
            'index' => 'Slime',
            'name' => 'Слизни',
            'description' => 'Слизни в целом как вид - очень странный народ. Но эти ребята - какой-то совсем особый случай. Не то съели кого головастого, не то живут так долго, что обрели самосознание. Конечно, оно редко превышает уровень пятилетнего ребёнка, но для вида, полностью состоящего из вязкой субстанции это - вполне себе впечатляющий результат.',
            'average' => 'Не стареют',
            'kindness' => 'Неприменимо'
        ]);
        // Снежный голем
        Origin::factory()->create([
            'index' => 'Snowman',
            'name' => 'Клан Сноу',
            'description' => 'Сноу - это идея об отшельничестве. Отрекаясь от своих тел, души монахов, встречающих свои ритуальный конец в заснеженных вершинах, перерождаются в небольшие снежные вихри или фигуры из снега. Несмотря на их хрупкие тела, Сноу постигли истинную мудрость жизни. Ни живы, ни мертвы - в культурах разных народов они зачастую считаются проводниками в мир мёртвых, предвестниками перемен и мудрыми расказзчиками.',
            'average' => 'Не стареют'
        ]);
        // Ведьма
        Origin::factory()->create([
            'index' => 'Witch',
            'name' => 'Ведьмин шабаш',
            'description' => 'Тайные алхимические знания хранит ведьмин шабаш. Его участники держат при себе зелья на все случаи жизни. Шабаш - не столько организация, сколько общее название для алхимиков всех мастей. Впрочем, они очень редко избегают себе подобных, стремясь к обмену знаниями и оккультными практиками.',
            'average' => 'Как у людей',
            'kindness' => 'Как у людей'
        ]);
        // Волк
        Origin::factory()->create([
            'index' => 'Wolf',
            'name' => 'Бажкурты',
            'description' => 'Волчьи полубоги, благословлённые луной. Бажкурты - это мифические вожаки стай, спустившиеся с Луны, дабы направлять свой народ во тьме зимних ночей. Отличающиеся воинственной натурой, бажкурты, как и их подопечные - хищники. Они редко идут на переговоры без гарантии выгоды для своей стаи. Вы не найдёте бажкурта-детёныша, ибо их отличительные черты проявляются лишь во взрослом возрасте.',
            'health' => 16,
            'food' => 'Плотоядные',
            'average' => '30 лет',
            'kindness' => 'Проявляется во взрослом возрасте'
        ]);
        // Страж (+ Древний страж)
        Origin::factory()->create([
            'index' => 'Guardian',
            'name' => 'Стражи',
            'description' => 'Воинственный подводный народ. Стражей часто можно увидеть в подводных храмах. Реже вы узрите их разумный подвид. Стражи отличаются долголетием и воинственной натурой. Разумных стражей можно найти по всему миру, в зависимости от окружающих температур - у них будет различаться цвет призмарина и обычаи. Некогда стражи были великим народом, сведущим в магии, а их основным оружием был трезубец. Но сейчас они скатились уровня полуразумных рыб с чешуёй из призмарина.',
            'average' => '250 лет',
            'kindness' => 'Как у людей'
        ]);
        Origin::factory()->create([
            'index' => 'ElderGuardian',
            'name' => 'Древние стражи',
            'description' => 'Древнейшие хранители морей, доказавшие своё звание в бою насмерть.',
            'kindness' => 'Проявляется во взрослом возрасте',
            'evolution' => 'Guardian'
        ]);
        // Крипер
        Origin::factory()->create([
            'index' => 'Creeptid',
            'name' => 'Крип-тиды',
            'description' => 'Крип-тиды - это более эволюционно-совершенная версия криперов. Если сами <a href="https://youtu.be/07UwfeEdSiM?si=UyGrV0jSIneca8BJ" target="_blank">криперы являются особым видом растений</a>, то крип-тиды это более развитая ветка эволюции. Они обладают гуманоидными формами тел, не имеют пола и всё также хотят взрываться, распространяя свои семена.',
            'kindness' => 'Неприменимо',
            'average' => '90 лет'
        ]);
        // Зомби (+ Хаск, Утопленник)
        Origin::factory()->create([
            'index' => 'Zombie',
            'name' => 'Зомби',
            'description' => 'Существа, заражённые зомби-вирусом невосприимчивы к смерти. Их когнитивные способности значительно деградируют, но взамен они становятся фактически неубиваемы. Жизнь в их телах сохраняется, даже если жизненные функции оно уже не может исполнять. Ни о какой культуре у зомби не может идти и речи. Однако, есть шанс, что из неразборчивых обрывков их бормотания, вы узнаете о их жизни нечто интересное.',
            'food' => 'Плотоядные',
            'average' => 'Не стареют',
            
        ]);
        Origin::factory()->create([
            'index' => 'Husk',
            'name' => 'Хаски',
            'description' => 'Разновидность зомби, что встречается в песках пустынь.',            
            'evolution' => 'Zombie'
        ]);
        Origin::factory()->create([
            'index' => 'Drowned',
            'name' => 'Утопленники',
            'description' => 'Разновидность зомби, что встречается в подводных глубинах.',            
            'evolution' => 'Zombie'
        ]);
        // Скелет (+ Зимогор)
        Origin::factory()->create([
            'index' => 'Skeleton',
            'name' => 'Скелеты',
            'description' => 'Поднятые магией некромантов трупы. У них хрупкие тела, но они искусны в бою, а невосприимчивость к смерти делает из них отличных слуг.',
            'health' => 16,            
            'average' => 'Не стареют'
        ]);
        Origin::factory()->create([
            'index' => 'Stray',
            'name' => 'Зимогоры',
            'description' => 'Разновидность скелетов, заледеневшие груды костей, слоняющиеся по заснеженным пустошам.',
            'health' => 16,            
            'evolution' => 'Skeleton'
        ]);
        // Визер-скелет
        Origin::factory()->create([
            'index' => 'Wither',
            'name' => 'Визер-скелеты',
            'description' => 'Прожаренные хрустящей корочки - визер скелеты распространяют иссушение с каждым ударом.',
            'health' => 16,            
            'average' => 'Не стареют'
        ]);
    }
}
