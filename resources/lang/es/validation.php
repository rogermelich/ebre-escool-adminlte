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

    'accepted'             => 'El : attribute debe ser aceptado.',
    'active_url'           => 'El :attribute no es una URL válida .',
    'after'                => 'El :attribute debe ser una fecha después :date.',
    'alpha'                => 'El :attribute sólo puede contener letras.',
    'alpha_dash'           => 'El :attribute sólo puede contener letras , números y guiones.',
    'alpha_num'            => 'El :attribute sólo puede contener letras y números.',
    'array'                => 'El :attribute debe de ser una array.',
    'before'               => 'El :attribute debe ser una fecha anterior :date.',
    'between'              => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file'    => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string'  => 'El :attribute debe estar entre :min y :max caracteres.',
        'array'   => 'El :attribute debe tener entre :min y :max artículos.',
    ],
    'boolean'              => 'El :attribute campo debe ser verdadero o falso.',
    'confirmed'            => 'El :attribute confirmación no coincide.',
    'date'                 => 'El :attribute no es una fecha válida.',
    'date_format'          => 'El :attribute no coincide con el formato :format.',
    'different'            => 'El :attribute y :other deben ser diferentes.',
    'digits'               => 'El :attribute debe ser :digits dígitos.',
    'digits_between'       => 'El :attribute debe estar entre :min y :max dígitos.',
    'email'                => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'exists'               => 'El :attribute seleccionado es inválido.',
    'filled'               => 'El :attribute se requiere campo.',
    'image'                => 'El :attribute debe ser una imagen.',
    'in'                   => 'El :attribute seleccionado es inválido.',
    'integer'              => 'El :attribute debe ser un entero.',
    'ip'                   => 'El :attribute debe ser una dirección IP válida.',
    'json'                 => 'El :attribute debe ser una cadena JSON válida.',
    'max'                  => [
        'numeric' => 'El :attribute debe ser un JSON válido, que no sea mayor que stringmay :max.',
        'file'    => 'El :attribute no puede ser mayor que :max kilobytes.',
        'string'  => 'El :attribute no puede ser mayor que :max caracteres.',
        'array'   => 'El :attribute no puede ser mayor que :max artículos.',
    ],
    'mimes'                => 'El :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El :attribute al menos debe ser :min.',
        'file'    => 'El :attribute al menos debe ser :min kilobytes.',
        'string'  => 'El :attribute al menos debe ser :min caracteres.',
        'array'   => 'El :attribute debe tener al menos :min artículos.',
    ],
    'not_in'               => 'El :attribute seleccionado es invalido.',
    'numeric'              => 'El :attribute tiene que ser un número.',
    'regex'                => 'El :attribute formato no es válido.',
    'required'             => 'El :attribute se requiere un campo.',
    'required_if'          => 'El :attribute se requiere un campo cuando :other es :value.',
    'required_unless'      => 'El :attribute campo es obligatorio a menos :other es en :values.',
    'required_with'        => 'El :attribute se requiere un campo cuando :values es presente.',
    'required_with_all'    => 'El :attribute se requiere un campo cuando :values es presente.',
    'required_without'     => 'El :attribute se requiere un campo cuando :values no está presente.',
    'required_without_all' => 'El :attribute se requiere un campo cuando ninguno de :values están presentes.',
    'same'                 => 'El :attribute debe coincidir con :other',
    'size'                 => [
        'numeric' => 'El :attribute debe ser :size.',
        'file'    => 'El :attribute debe ser :size kilobytes.',
        'string'  => 'El :attribute debe ser :size caracteres.',
        'array'   => 'El :attribute debe contener :size artículos.',
    ],
    'string'               => 'El :attribute debe ser una cadena.',
    'timezone'             => 'El :attribute debe ser una zona válida.',
    'unique'               => 'El :attribute ya ha sido tomado el codigo.',
    'url'                  => 'El :attribute formato no es válido.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
