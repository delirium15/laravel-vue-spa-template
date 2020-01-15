<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute должен быть принят.',
    'active_url' => ':attribute не является правильным URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'Подтверждение поля :attribute не совпадает.',
    'date' => 'В поле :attribute указана некорректная дата.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => ':attribute должен содержать действительный почтовый адрес.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'В поле :attribute должен быть загружен файл.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'В поле :attribute должно быть изображение.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'Значение :attribute должно присутствовать в :other.',
    'integer' => 'В поле :attribute должно быть число.',
    'ip' => ':attribute должен быть валидным IP адресом.',
    'ipv4' => ':attribute должен быть валидным IPv4 адресом.',
    'ipv6' => ':attribute должен быть валидным IPv6 адресом.',
    'json' => 'В поле :attribute должна быть валидная JSON строка.',
    'lt' => [
        'numeric' => 'Поле :attribute должно быть меньше :value.',
        'file' => 'Файл :attribute должен быть меньше :value килобайт.',
        'string' => 'В поле :attribute должно быть меньше :value символов.',
        'array' => 'В :attribute должно быть меньше :value элементов.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'Значение :attribute не должно быть больше :max.',
        'file' => 'Файл :attribute не должен превышать :max килобайт.',
        'string' => 'В поле :attribute не должно быть более :max символов.',
        'array' => 'В :attribute не должно быть более :max элементов.',
    ],
    'mimes' => 'В поле :attribute должен быть файл типа: :values.',
    'mimetypes' => 'В поле :attribute должен быть файл типа: :values.',
    'min' => [
        'numeric' => 'Значение :attribute должно быть больше :min.',
        'file' => 'Файл :attribute не должен быть меньше :min килобайт.',
        'string' => 'В поле :attribute должно быть не менее :min символов.',
        'array' => 'В :attribute должно быть не менее :min элементов.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'Значение :attribute неверно.',
    'numeric' => 'Значение :attribute должно быть числом.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'Формат поля :attribute неверный.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => 'Необходимо указать :attribute , если для :other указано :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'Значение :attribute должно быть :size.',
        'file' => 'Размер файла :attribute должен быть :size килобайт.',
        'string' => 'В поле :attribute должно быть :size символов.',
        'array' => 'В поле :attribute должно быть :size элементов.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => ':attribute уже занят.',
    'uploaded' => 'Не удалось загрузить :attribute.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
