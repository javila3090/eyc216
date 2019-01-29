
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | El following language lines contain El default error messages used by
    | El validator class. Some of Else rules have multiple versions such
    | as El size rules. Feel free to tweak each of Else messages here.
    |
    */

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'La :attribute no es valida.',
    'after'                => 'El :attribute debe ser una fecha despues de :date.',
    'after_or_equal'       => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El :attribute may only contain letters.',
    'alpha_dash'           => 'El :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'El :attribute may only contain letters and numbers.',
    'array'                => 'El :attribute debe ser an array.',
    'before'               => 'El :attribute debe ser una fecha before :date.',
    'before_or_equal'      => 'El :attribute debe ser una fecha before or equal to :date.',
    'between'              => [
        'numeric' => 'El :attribute debe ser entre :min and :max.',
        'file'    => 'El :attribute debe ser entre :min and :max kilobytes.',
        'string'  => 'El :attribute debe ser entre :min and :max characters.',
        'array'   => 'El :attribute must have entre :min and :max items.',
    ],
    'boolean'              => 'El :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El :attribute confirmation does not match.',
    'date'                 => 'El :attribute is not a valid date.',
    'date_format'          => 'El :attribute does not match El format :format.',
    'different'            => 'El :attribute and :oElr debe ser different.',
    'digits'               => 'El :attribute debe ser :digits digits.',
    'digits_entre'       => 'El :attribute debe ser entre :min and :max digits.',
    'dimensions'           => 'El :attribute has invalid image dimensions.',
    'distinct'             => 'El :attribute field has a duplicate value.',
    'email'                => 'El :attribute debe ser una dirección de válida.',
    'exists'               => 'El selected :attribute is invalid.',
    'file'                 => 'El :attribute debe ser a file.',
    'filled'               => 'El :attribute field must have a value.',
    'gt'                   => [
        'numeric' => 'El :attribute debe ser greater than :value.',
        'file'    => 'El :attribute debe ser greater than :value kilobytes.',
        'string'  => 'El :attribute debe ser greater than :value characters.',
        'array'   => 'El :attribute must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'El :attribute debe ser greater than or equal :value.',
        'file'    => 'El :attribute debe ser greater than or equal :value kilobytes.',
        'string'  => 'El :attribute debe ser greater than or equal :value characters.',
        'array'   => 'El :attribute must have :value items or more.',
    ],
    'image'                => 'El :attribute debe ser una imagen.',
    'in'                   => 'El selected :attribute is invalid.',
    'in_array'             => 'El :attribute field does not exist in :oElr.',
    'integer'              => 'El :attribute debe ser an integer.',
    'ip'                   => 'El :attribute debe ser a valid IP address.',
    'ipv4'                 => 'El :attribute debe ser a valid IPv4 address.',
    'ipv6'                 => 'El :attribute debe ser a valid IPv6 address.',
    'json'                 => 'El :attribute debe ser a valid JSON string.',
    'lt'                   => [
        'numeric' => 'El :attribute debe ser less than :value.',
        'file'    => 'El :attribute debe ser less than :value kilobytes.',
        'string'  => 'El :attribute debe ser less than :value characters.',
        'array'   => 'El :attribute must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => 'El :attribute debe ser less than or equal :value.',
        'file'    => 'El :attribute debe ser less than or equal :value kilobytes.',
        'string'  => 'El :attribute debe ser less than or equal :value characters.',
        'array'   => 'El :attribute must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => 'El :attribute may not be greater than :max.',
        'file'    => 'El :attribute may not be greater than :max kilobytes.',
        'string'  => 'El :attribute may not be greater than :max characters.',
        'array'   => 'El :attribute may not have more than :max items.',
    ],
    'mimes'                => 'Los tipos de archivos aceptados son: :values.',
    'mimetypes'            => 'El :attribute debe ser a file of type: :values.',
    'min'                  => [
        'numeric' => 'El :attribute debe ser at least :min.',
        'file'    => 'El :attribute debe ser at least :min kilobytes.',
        'string'  => 'El :attribute debe ser at least :min characters.',
        'array'   => 'El :attribute must have at least :min items.',
    ],
    'not_in'               => 'El selected :attribute is invalid.',
    'not_regex'            => 'El :attribute format is invalid.',
    'numeric'              => 'El :attribute debe ser un número.',
    'present'              => 'El :attribute field debe ser present.',
    'regex'                => 'El :attribute format is invalid.',
    'required'             => 'El :attribute es requerido.',
    'required_if'          => 'El :attribute field is required when :oElr is :value.',
    'required_unless'      => 'El :attribute field is required unless :oElr is in :values.',
    'required_with'        => 'El :attribute field is required when :values is present.',
    'required_with_all'    => 'El :attribute field is required when :values is present.',
    'required_without'     => 'El :attribute field is required when :values is not present.',
    'required_without_all' => 'El :attribute field is required when none of :values are present.',
    'same'                 => 'El :attribute and :oElr must match.',
    'size'                 => [
        'numeric' => 'El :attribute debe ser :size.',
        'file'    => 'El :attribute debe ser :size kilobytes.',
        'string'  => 'El :attribute debe ser :size caractéres.',
        'array'   => 'El :attribute debe contener :size elementos.',
    ],
    'string'               => 'El :attribute debe ser una cadena.',
    'timezone'             => 'El :attribute debe ser a valid zone.',
    'unique'               => 'El :attribute has already been taken.',
    'uploaded'             => 'El :attribute failed to upload.',
    'url'                  => 'El formato de la :attribute no es válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using El
    | convention "attribute.rule" to name El lines. This makes it quick to
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
    | El following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'Nombre',
        'phone' => 'Teléfono',
        'pay_way' => 'Forma de pago',
    ],

];