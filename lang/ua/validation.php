<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Наступні мовні рядки містять стандартні повідомлення про помилки, які
    | використовуються класом валідатора. Деякі з цих правил мають кілька
    | версій, таких як правила розміру. Не соромтеся налаштувати кожне з цих
    | повідомлень тут.
    |
    */

    'accepted' => 'Поле :attribute повинно бути прийнято.',
    'accepted_if' => 'Поле :attribute повинно бути прийнято, коли :other є :value.',
    'active_url' => 'Поле :attribute повинно бути дійсною URL-адресою.',
    'after' => 'Поле :attribute повинно бути датою після :date.',
    'after_or_equal' => 'Поле :attribute повинно бути датою після або рівною :date.',
    'alpha' => 'Поле :attribute повинно містити лише літери.',
    'alpha_dash' => 'Поле :attribute повинно містити лише літери, цифри, дефіси та підкреслення.',
    'alpha_num' => 'Поле :attribute повинно містити лише літери та цифри.',
    'array' => 'Поле :attribute повинно бути масивом.',
    'ascii' => 'Поле :attribute повинно містити лише одно байтові алфавітно-цифрові символи та символи.',
    'before' => 'Поле :attribute повинно бути датою перед :date.',
    'before_or_equal' => 'Поле :attribute повинно бути датою перед або рівною :date.',
    'between' => [
        'array' => 'Поле :attribute повинно мати від :min до :max елементів.',
        'file' => 'Поле :attribute повинно бути між :min і :max кілобайтами.',
        'numeric' => 'Поле :attribute повинно бути між :min і :max.',
        'string' => 'Поле :attribute повинно містити від :min до :max символів.',
    ],
    'boolean' => 'Поле :attribute повинно бути true або false.',
    'can' => 'Поле :attribute містить несанкціоноване значення.',
    'confirmed' => 'Підтвердження поля :attribute не збігається.',
    'current_password' => 'Пароль введено неправильно.',
    'date' => 'Поле :attribute повинно бути дійсною датою.',
    'date_equals' => 'Поле :attribute повинно бути датою, рівною :date.',
    'date_format' => 'Поле :attribute повинно відповідати формату :format.',
    'decimal' => 'Поле :attribute повинно мати :decimal десяткових знаків.',
    'declined' => 'Поле :attribute повинно бути відхилене.',
    'declined_if' => 'Поле :attribute повинно бути відхилене, коли :other є :value.',
    'different' => 'Поле :attribute та :other повинні бути різними.',
    'digits' => 'Поле :attribute повинно бути :digits цифрами.',
    'digits_between' => 'Поле :attribute повинно бути між :min і :max цифрами.',
    'dimensions' => 'Поле :attribute має недійсні розміри зображення.',
    'distinct' => 'Поле :attribute має повторюване значення.',
    'doesnt_end_with' => 'Поле :attribute не повинно закінчуватися на одне з наступного: :values.',
    'doesnt_start_with' => 'Поле :attribute не повинно починатися з одного з наступного: :values.',
    'email' => 'Поле :attribute повинно бути дійсною адресою електронної пошти.',
    'ends_with' => 'Поле :attribute повинно закінчуватися на одне з наступного: :values.',
    'enum' => 'Вибране :attribute є недійсним.',
    'exists' => 'Вибране :attribute є недійсним.',
    'extensions' => 'Поле :attribute повинно мати одне з наступних розширень: :values.',
    'file' => 'Поле :attribute повинно бути файлом.',
    'filled' => 'Поле :attribute повинно мати значення.',
    'gt' => [
        'array' => 'Поле :attribute повинно мати більше ніж :value елементів.',
        'file' => 'Поле :attribute повинно бути більше ніж :value кілобайт.',
        'numeric' => 'Поле :attribute повинно бути більшим за :value.',
        'string' => 'Поле :attribute повинно бути більшим за :value символів.',
    ],
    'gte' => [
        'array' => 'Поле :attribute повинно мати :value елементів або більше.',
        'file' => 'Поле :attribute повинно бути більшим або рівним :value кілобайт.',
        'numeric' => 'Поле :attribute повинно бути більшим або рівним :value.',
        'string' => 'Поле :attribute повинно бути більшим або рівним :value символів.',
    ],
    'hex_color' => 'Поле :attribute повинно бути дійсним шістнадцятковим кольором.',
    'image' => 'Поле :attribute повинно бути зображенням.',
    'in' => 'Вибране :attribute є недійсним.',
    'in_array' => 'Поле :attribute повинно існувати в :other.',
    'integer' => 'Поле :attribute повинно бути цілим числом.',
    'ip' => 'Поле :attribute повинно бути дійсною IP-адресою.',
    'ipv4' => 'Поле :attribute повинно бути дійсною адресою IPv4.',
    'ipv6' => 'Поле :attribute повинно бути дійсною адресою IPv6.',
    'json' => 'Поле :attribute повинно бути дійсним JSON рядком.',
    'list' => 'Поле :attribute повинно бути списком.',
    'lowercase' => 'Поле :attribute повинно бути в нижньому регістрі.',
    'lt' => [
        'array' => 'Поле :attribute повинно мати менше ніж :value елементів.',
        'file' => 'Поле :attribute повинно бути менше ніж :value кілобайт.',
        'numeric' => 'Поле :attribute повинно бути меншим за :value.',
        'string' => 'Поле :attribute повинно бути меншим за :value символів.',
    ],
    'lte' => [
        'array' => 'Поле :attribute не повинно мати більше ніж :value елементів.',
        'file' => 'Поле :attribute повинно бути менше або рівним :value кілобайт.',
        'numeric' => 'Поле :attribute повинно бути меншим або рівним :value.',
        'string' => 'Поле :attribute повинно бути меншим або рівним :value символів.',
    ],
    'mac_address' => 'Поле :attribute повинно бути дійсною MAC-адресою.',
    'max' => [
        'array' => 'Поле :attribute не повинно мати більше ніж :max елементів.',
        'file' => 'Поле :attribute не повинно перевищувати :max кілобайт.',
        'numeric' => 'Поле :attribute не повинно перевищувати :max.',
        'string' => 'Поле :attribute не повинно перевищувати :max символів.',
    ],
    'max_digits' => 'Поле :attribute не повинно мати більше ніж :max цифр.',
    'mimes' => 'Поле :attribute повинно бути файлом типу: :values.',
    'mimetypes' => 'Поле :attribute повинно бути файлом типу: :values.',
    'min' => [
        'array' => 'Поле :attribute повинно мати щонайменше :min елементів.',
        'file' => 'Поле :attribute повинно бути принаймні :min кілобайт.',
        'numeric' => 'Поле :attribute повинно бути принаймні :min.',
        'string' => 'Поле :attribute повинно містити принаймні :min символів.',
    ],
    'min_digits' => 'Поле :attribute повинно мати щонайменше :min цифр.',
    'missing' => 'Поле :attribute повинно бути відсутнім.',
    'missing_if' => 'Поле :attribute повинно бути відсутнім, коли :other є :value.',
    'missing_unless' => 'Поле :attribute повинно бути відсутнім, якщо :other не є :value.',
    'missing_with' => 'Поле :attribute повинно бути відсутнім, коли :values присутні.',
    'missing_with_all' => 'Поле :attribute повинно бути відсутнім, коли :values присутні.',
    'multiple_of' => 'Поле :attribute повинно бути кратним :value.',
    'not_accepted' => 'Поле :attribute не прийнято.',
    'not_in' => 'Вибране :attribute є недійсним.',
    'not_regex' => 'Формат поля :attribute є недійсним.',
    'numeric' => 'Поле :attribute повинно бути числом.',
    'password' => [
        'letters' => 'Поле :attribute повинно містити принаймні одну літеру.',
        'mixed' => 'Поле :attribute повинно містити принаймні одну велику та одну малу літеру.',
        'numbers' => 'Поле :attribute повинно містити принаймні одну цифру.',
        'symbols' => 'Поле :attribute повинно містити принаймні один символ.',
        'uncompromised' => 'Дане :attribute зламали. Виберіть інше.',
    ],
    'present' => 'Поле :attribute повинно бути присутнім.',
    'prohibited' => 'Поле :attribute заборонено.',
    'prohibited_if' => 'Поле :attribute заборонено, коли :other є :value.',
    'prohibited_unless' => 'Поле :attribute заборонено, якщо :other не є в :values.',
    'prohibits' => 'Поле :attribute забороняє присутність :other.',
    'regex' => 'Формат поля :attribute є недійсним.',
    'required' => 'Поле :attribute є обов\'язковим.',
    'required_if' => 'Поле :attribute є обов\'язковим, коли :other є :value.',
    'required_if_accepted' => 'Поле :attribute є обов\'язковим, коли :other прийнято.',
    'required_unless' => 'Поле :attribute є обов\'язковим, якщо :other не є в :values.',
    'required_with' => 'Поле :attribute є обов\'язковим, коли :values присутні.',
    'required_with_all' => 'Поле :attribute є обов\'язковим, коли :values присутні.',
    'required_without' => 'Поле :attribute є обов\'язковим, коли :values відсутні.',
    'required_without_all' => 'Поле :attribute є обов\'язковим, коли жодне з :values не присутнє.',
    'same' => 'Поле :attribute та :other повинні збігатися.',
    'size' => [
        'array' => 'Поле :attribute повинно містити :size елементів.',
        'file' => 'Поле :attribute повинно бути :size кілобайт.',
        'numeric' => 'Поле :attribute повинно бути :size.',
        'string' => 'Поле :attribute повинно бути :size символів.',
    ],
    'starts_with' => 'Поле :attribute повинно починатися з одного з наступного: :values.',
    'string' => 'Поле :attribute повинно бути рядком.',
    'timezone' => 'Поле :attribute повинно бути дійсною зоною.',
    'unique' => 'Значення поля :attribute вже зайняте.',
    'uploaded' => 'Не вдалося завантажити поле :attribute.',
    'url' => 'Формат поля :attribute є недійсним.',
    'uuid' => 'Поле :attribute повинно бути дійсним UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Тут ви можете призначити власні повідомлення про помилки для атрибутів,
    | використовуючи синтаксис "атрибут.правило" для вказівки конкретних
    | правил. Це дозволяє вам легко налаштовувати повідомлення для
    | конкретних ситуацій.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'спеціальне повідомлення',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Attributes
    |--------------------------------------------------------------------------
    |
    | Наступні мовні рядки використовуються для заміни плоских атрибутів
    | у повідомленнях про помилки. Це дозволяє вам зберігати
    | ваші повідомлення про помилки короткими і чистими.
    |
    */

    'attributes' => [],

];
