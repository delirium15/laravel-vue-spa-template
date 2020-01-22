<?php

use Illuminate\Database\Seeder;
use App\Sort;

class SortsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Sort::create([
            'title' => 'Аркадия',
            'selection' => 'Молдова + Кардинал',
            'description' => 'Кусты большой силы роста. Грозди массой от 0,6 до 2кг. Ягоды крупные 7-10 гр., белого цвета с мясистой мякотью. Вкус гармоничный с легким мускатом. Имеет хороший товарный вид и транспортабельность. Урожайность высокая, до 35 кг.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Байконур',
            'selection' => 'селекции Павловского Е.Г., Талисман + Красотка',
            'description' => 'Гибридная форма ранне-среднего срока созревания - 125-130 дней. Кусты большой силы роста, цветок обоеполый. Грозди крупные и красивые, весом 700-1500 гр. средней плотности. Ягоды крупные, красивые сосковидной формы до 5 см. и массой до 12-16 гр. Цвет от темно-розового до темно-фиолетового. Вкус гармоничный, насыщенный. Мякоть хрустящая, плотная. Ягоды могут долго храниться на кустах, сохраняя товарные и вкусовые качества. Урожайность высокая, на каждом побеге может образовываться до 4 соцветий. Устойчивость к болезням на уровне 2,5-3 баллов. Байконур - один из лучших сортов последнего времени. Выделяется среди других необычно красивой, крупной и вкусной ягодой с высокими товарными качествами.',
            'images' => '["baykonur_01.jpg", "baykonur_02.jpg"]'
        ]);

        Sort::create([
            'title' => 'Валери',
            'selection' => 'Монарх + Переяславская рада',
            'description' => 'Сила роста куста большая. Цветок обоеполый. Срок созревания ранний. Достоинств у этого сорта много: красивый внешний вид, вызревание лозы по всей ее длине, ранний срок созревания, крупная ягода и ее вкусовые качества: хрустящая, плотная мякоть, сладкая, сочная с привкусом муската и фруктового аромата.',
            'images' => '["valeri.jpg"]'
        ]);

        Sort::create([
            'title' => 'Гарольд',
            'selection' => 'Восторг + Аркадия + Мускат летний',
            'description' => 'Кусты сильнорослые. Срок созревания очень ранний (95-100 дней). Грозди крупные (400-500гр.) средней плотности. Ягоды янтарно-желтые массой 5-6гр. Мякоть мясисто-сочная, вкус гармоничный с мускатным ароматом. Склонен к перегрузке, требует нормирования соцветиями. Устойчивость на уровне 3-3,5 балла. Транспортабелен.',
            'images' => '["garold_01.jpg", "garold_02.jpg"]'
        ]);

        Sort::create([
            'title' => 'Граф Монте Кристо',
            'selection' => 'селекции Капелюшного В.И., Талисман + Ризамат',
            'description' => '',
            'images' => '["graf_monte_kristo_01.jpg", "graf_monte_kristo_02.jpg", "graf_monte_kristo_03.jpg", "graf_monte_kristo_04.jpg"]'
        ]);

        Sort::create([
            'title' => 'Даная',
            'selection' => 'селекции Бурдака А.В.',
            'description' => 'Гибридная форма раннего срока созревания, большой силы роста. Грозди достигают веса 0,5-1,2 кг. Ягоды белого цвета массой 15-18 гр., с мясисто-сочной мякотью и гармоничным вкусом. Цвет янтарный.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Дарья',
            'selection' => 'селекции Крайнова В.Н., Талисман + Дружба',
            'description' => 'Форма сильнорослая, с ранним сроком созревания. Ягоды крупные до 18 гр., янтарного цвета с сочной мякотью и мускатным вкусом. Кисти тоже крупные, до 1 кг., вид товарный. Транспортабелен. Устойчивость до 3 баллов.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Дашуня',
            'selection' => 'селекции Вишневецкого Н.П., Талисман + Ризамат + Киш-миш лучистый',
            'description' => 'Раннего срока созревания (115-120 дней), сильнорослый. Грозди средней плотности весом от 1,2 до 2 кг. Ягоды мясистые с приятным мускатом, розового цвета, весом 13-15 гр. Вкусовые качества высокие. Устойчивость 2,5-3 балла.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Дюжина',
            'selection' => '',
            'description' => '',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Есаул',
            'selection' => 'селекции Капелюшного В.У.',
            'description' =>'Сорт ранне-среднего срока созревания. Грозди крупные 800-1100 гр. и до 2кг. Ягоды красного цвета, весом 10-14 гр. с легким мускатом. Отличается хорошей транспортабельностью и товарностью. Устойчивость к болезням на уровне 3 баллов.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Жемчужина Молдавии',
            'selection' => '',
            'description' => '',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Злато',
            'selection' => 'селекции Капелюшного В.У., Талисман + Киш-миш Новочеркасский',
            'description' => 'Гибридная форма очень раннего срока созревания (95-105 дней). Сила роста - средняя. Цветок обоеполый. Грозди крупные, массой 0,7-1,2 кг. и более, средней плотности, красивые. Ягоды янтарно-желтые, очень красивые, массой 10-12 гр. Вкус гармоничный, с легким мускатом, мякоть мясисто-сочная. Оптимальная нагрузка 30-35 глазков, обрезка на 6-8 глазков. Урожайность и транспортабельность высокая. Устойчивость к грибковым заболеваниям высокая (2-2,5 балла).',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Инга',
            'selection' => 'селекции Капелюшного В.И., Талисман + Загадка',
            'description' => 'Гибридная форма очень раннего срока созревания (95-105 дней). Сила роста большая. Цветок обоеполый. Грозди достигают веса 700-1200 гр. и более. Ягоды очень крупные 12-16 гр. и более, янтарного цвета, очень красивые. Кожица тонкая, при еде не ощущается. Содержание сахара высокое. Долго висят на кусте не теряя товарного вида. Обрезка на 6-8 глазков. Урожайность стабильно высокая. Устойчивость к основным заболеваниям 2-2,5 балла.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Катя',
            'selection' => '',
            'description' => '',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Киш Миш Долгожданный',
            'selection' => 'селекции Крайнова В.М.',
            'description' => 'Очень раннего срока созревания, примерно 105 дней. Средне-сильного роста. Грозди крупные от 0,7 до 1 кг., средне-рыхлые, с высоким товарным видом. Ягоды крупные 10-12 гр., янтарного цвета со средне-плотной мякотью. Осами повреждаются в средней степени. Семян в ягоде нет. Побеги вызревают хорошо. Устойчивость к грибковым заболеваниям 3-3,5 балла.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Киш-миш Лучистый',
            'selection' => 'Кардинал + Киш-миш Розовый',
            'description' => 'Сорт средне-, или даже сильнорослый, срок созревания 125-130 дней. Ягоды средние и крупные золотисто-розового и розово-красного цвета массой 5-8 гр. Мякоть плотная, вкус гармоничный с мускатным ароматом. Грозди крупные и средние, ветвистые, достигают в длину 40 см., рыхлые массой от 200 до 600 гр. Устойчивость к болезням средняя. Транспортабелен. Пригоден для длительного хранения.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Кодрянка',
            'selection' => 'Молдова + Маршальский',
            'description' => 'Раннего срока созревания. Кусты сильнорослые. Грозди весом 400-500гр., средней плотности. Ягоды весом 6-7 гр., тёмно-фиолетовые с хрустящей мясисто-сочной мякотью, очень сладкая. Урожайность высокая. Ягоды могут долго висеть на кусте не теряя товарного вида. Устойчивость к основным заболеваниям 3.0 балла.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Консуэлло',
            'selection' => 'селекции Бурдака А.В.',
            'description' => 'Большой силы роста и раннего срока созревания. Грозди крупные, достигают веса до 1 кг. Ягоды красно-фиолетового цвета весом до 12-20 гр. Вкус гармоничный. Мякоть мясисто-сочная. Устойчивость к болезням 3 балла.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Ланселот',
            'selection' => 'Подарок Запорожью + ( Экстаз + FV-3-1)',
            'description' => 'Ранне-среднего срока созревания 125-130 дней. Кусты большой силы роста, цветок обоеполый. Грозди крупные, до 900-1200 гр., отдельные достигают веса 3 кг. Ягоды белые, крупные, весом 12-14гр., вкус гармоничный. Вызревание побегов хорошее, урожайность и устойчивость к болезням высокие. Обрезка на 6-8 почек.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Лора',
            'selection' => '',
            'description' => '',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Лорано',
            'selection' => 'селекции Бурдака А.В., Лора + смесь пыльцы',
            'description' => '',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Лучезарный',
            'selection' => 'Кеша1 + Киш-миш Лучистый',
            'description' => 'Гибридная форма раннего срока созревания 125-130 дней. Грозди крупные до 1,5 кг. Горошения не наблюдалось. Ягоды крупные весом до 20 гр. Не любит перегруза, ягоды пре перегрузке меньшего размера, сроки созревания отодвигаются. Устойчивость к болезням хорошая (на уровне 3 баллов). Товарность и транспортабельность высокие.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Марсело',
            'selection' => 'селекции Капелюшного В.У., Талисман + Ризамат',
            'description' => 'Сорт раннего срока созревания (110-115 дней). Грозди крупные и нарядные. Ягоды с твердой, хрустящей мякотью, довольно сладкие, весом 10-12 гр. Устойчивость 3,5 балла.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Монарх',
            'selection' => 'селекции Павловского Е.Г, Талисман + Кардинал + смесь пыльцы',
            'description' => 'Сорт ранне-среднего срока созревания, очень сильнорослый. Цветок обоеполый. Грозди достигают веса 500-1500 г., а на арках или беседках - от 2 до 5 кг. Ягоды желтые, на солнце приобретают красно-коричневый "загар". Урожай долго может сохранять товарный вид и качество, вися на кусте. Осой может поражаться в слабой степени. Лоза вызревает очень хорошо, укореняемость черенков хорошая. Длина обрезки 6-8 глазков. Пригоден для непродолжительного хранения. Довольно устойчив к основным болезням (на уровне 2-2,5 балла). Морозостойкость до -25С.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Памяти учителя',
            'selection' => 'селекции Павловского Е.Г., Талисман + Кардинал',
            'description' => 'Молодая гибридная форма и точно о ней известно немного. Основные качества сейчас проходят тестирование, но уже понятно, что это сорт будущего. Срок созревания у него супер-ранний. Кусты большой силы роста. Грозди крупные, массой до 1,5-2кг, очень красивые, не горошит. Ягоды крупные, до 15 гр., темно-красного цвета с фиолетовым оттенком. Мякоть плотная, сочная с мускатным ароматом. Цветок обоеполый. Лоза вызревает почти на всю длину прироста. Обрезка на 6-8 глазков.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Подарок Ирине',
            'selection' => 'селекции Вишневского Н., Кеша1 + Глаша + Элегант сверхранний',
            'description' => 'Срок созревания - ранне-средний, составляет 125-130 дней. Грозди крупные, весом 800-1500 гр., долго могут висеть на кусте не теряя качеств. Ягоды розовые с фиолетовым оттенком весом 18-20 гр. Сила роста - сильная, цветок обоеполый. Устойчивость к основным заболеваниям 2-2,5 балла. Транспортабельность и товарные качества высокие. Вкус очень приятный, с легкой кислинкой. Мякоть мясистая, кожица не толстая, съедаемая.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Подарок Несветая',
            'selection' => 'селекции Павловского Е.Г., Талисман + Красотка',
            'description' => 'Отличается большой силой роста. Грозди большие, весом от 500 гр. до 1 кг. и более. Цвет ягод от темно-красного или бордового до темно-фиолетового. Мякоть хрустящая, мясисто-сочная, с ярко-выраженным мускатным вкусом. Срок созревания - сверхранний и длится 95-110 дней. Обрезка на 6-8 глазков. Высокие качества этого сорта подвигают фермеров на плантационный характер его насаждения.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Преображение',
            'selection' => 'селекции Крайнова В.Н., Талисман + Киш-миш Лучистый',
            'description' => 'Сорт раннего срока созревания, сильнорослый. Цветок обоеполый. Грозди средней плотности массой до 700-2000гр. Ягоды удлиненно-овальные  ярко-розового цвета весом до 20гр., гармоничного вкуса. Имеют небольшое количество семян, некоторые - мягкие косточки, а есть и вообще бессеменные ягоды. Побеги вызревают хорошо. Товарность и транспортабельность высокие. Устойчивость к грибковым болезням 3,5-4 балла.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Сенатор',
            'selection' => 'селекции Павловского Е.Г., Подарок Запорожью + Марадонна',
            'description' => 'Новая гибридная форма ранне-среднего срока созревания (120-125 дней). Форма обоеполая. Грозди достигают веса 0,7-1,5 кг. Горошения не наблюдалось. Ягода 14-18 гр., темно-красного цвета, приятного вкуса с мускатным ароматом, что позволяет использовать ее для приготовления вина. Кусты большой силы роста. Устойчивость к грибковым заболеваниям 2,5 балла.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Талисман',
            'selection' => '(Фрумоаса албэх Восторг) селекции ВЖИИВиВ Новочеркасск',
            'description' => 'Срок созревания 127-135 дней. Сорт большой силы роста с крупными гроздями и ягодами. Грозди достигают веса 0,8-1,1 кг. Ягоды очень крупные (12-16 гр.) белые, гармоничного вкуса. Высокоурожайный.  Отзывчив на повышенные дозы калийно-фосфорных удобрений. Требует нормирования соцветий и гроздей. Устойчив к болезням. Урожай хорошо сохраняется на кустах.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Тип изюминки',
            'selection' => 'селекции Голуб А.А.',
            'description' => 'Гибридная форма очень раннего срока созревания. Цветок обоеполый. Грозди крупные, немного рыхлые, достигают веса 500-1500 гр. Ягода ярко-красного цвета, массой 8-12 гр. Мякоть мясистая, высоких вкусовых качеств. Грозди долго висят на кустах не теряя вкусовых качеств. Ягоды не растрескиваются, осами не поражаются.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Фараон',
            'selection' => 'Подарок Запорожью + Страшенский',
            'description' => 'Срок созревания ранне-средний и составляет 120-130 дней. Грозди крупные, средней плотности, весом до 1500 гр. Ягоды темного цвета с фиолетовым оттенком и массой до 10-15 гр.. Вкус гармоничный с приятным ароматом. Мякоть упругая, кожица не толстая. Цветок обоеполый, хорошо опыляется. Сила роста большая. Устойчивость к основным заболеваниям средняя. Товарные качества высокие. Довольно транспортабелен. Обрезка на 6-8 почек. Не следует сильно перегружать.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Фуршетный',
            'selection' => 'селекции Загорулько В.В., Подарок Запорожью + Кубань',
            'description' => 'Сорт раннего срока созревания. Сила роста очень большая, обоеполая. Кисти очень крупные, в 2018 достигали веса до 1,5 кг и урожай составил более 35 кг. с куста. Ягода овальная весом до 20 гр. темно-синего цвета, гармоничного вкуса. Форма достаточно устойчива к болезням.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Хамелеон',
            'selection' => '',
            'description' => '',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Хоттабыч',
            'selection' => 'селекции Павловского Е.Г., Талисман + К-81',
            'description' => 'Сорт сильнорослый, лоза вызревает очень рано. Нормировать его не нужно. Кисти крупные до 1,5 кг. Ягода тоже крупная, темно-фиолетового окраса с густым пруиновым налетом, вкусная и сладкая. Мякоть сочная и хрустящая. Урожай может висеть на кусте до заморозков и хорошо хранится в прохладном месте несколько месяцев. Устойчив к основным заболеваниям. Осами не повреждается.',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Хуторок',
            'selection' => '',
            'description' => '',
            'images' => ''
        ]);

        Sort::create([
            'title' => 'Экстра',
            'selection' => '',
            'description' => '',
            'images' => ''
        ]);
        Sort::create([
            'title' => 'Эталон или Брат Байконура',
            'selection' => 'Талисман + Красотка',
            'description' => 'Созревает раньше Байконура дней на 10 (95-105 дней). Цветок обоеполый. Грозди средне-рыхлые весом от 500-800гр. до 1,5 кг. Ягоды красно-фиолетового цвета, крупные, массой 12-16 гр. и более, с плотной, хрустящей мякотью, гармоничным и насыщенным вкусом. Очень высокая урожайность, необходимо нормировать. Транспортабельность и товарность высокие. Осами не поражается. Кисти могут долго висеть на кустах не теряя вкусовых качеств. Сила роста большая, вызреваемость побегов хорошая. Устойчивость к основным болезням на уровне 2,5-3 баллов.',
            'images' => ''
        ]);
        Sort::create([
            'title' => 'Юбилей Войтовича',
            'selection' => '',
            'description' => 'Сорт молдавской селекции среднего срока созревания - 135 дней. Кусты средне-сильнорослые. Грозди средней плотности весом 0,3-0,5 кг. Ягоды массой 4,5-5,5 гр., темно-розовые с сильным пруиновым налетом. Вкус гармоничный с легким мускатом. Мякоть мясистая, осами не повреждается. Побеги вызревают хорошо. Обрезка лоз на 6-8 глазков. Сорт довольно устойчив к основным заболеваниям. Рекомендуется дополнительная обработка от оидиума. Транспортабельность высокая.',
            'images' => ''
        ]);
        Sort::create([
            'title' => 'Ягуар',
            'selection' => '',
            'description' => 'Неизвестная гибридная форма раннего срока созревания (110-115 дней). Цветок обоеполый. Большой силы роста, высокоурожайная. Гроздь весом 0,6-1,5 кг. и более, красивая. Ягоды крупные овальные 12-16 гр., красного цвета, мякоть хрустящая, вкус гармоничный, вызревание побегов и укоренение черенков хорошее.',
            'images' => ''
        ]);

    }
}
