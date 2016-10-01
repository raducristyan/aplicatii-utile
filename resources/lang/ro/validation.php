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

    'accepted'             => 'Campul :attribute trebuie acceptat.',
    'active_url'           => 'Adresa URL :attribute nu este validă.',
    'after'                => 'Câmpul :attribute trebuie să fie o dată după :date.',
    'alpha'                => 'Câmpul :attribute trebuie să conțină numai litere.',
    'alpha_dash'           => 'Câmpul :attribute poate conține numai litere, numere sau cratime.',
    'alpha_num'            => 'Câmpul :attribute poate conține numai litere și numere.',
    'array'                => 'Câmpul :attribute trebuie să fie un șir.',
    'before'               => 'Câmpul :attribute trebuie să fie o dată înainte de :date.',
    'between'              => [
        'numeric' => 'Câmpul :attribute trebuie să fie între :min și :max.',
        'file'    => 'Câmpul :attribute trebuie să fie :min și :max kilobyți.',
        'string'  => 'Câmpul :attribute trebuie să conțină între :min și :max caractere.',
        'array'   => 'Câmpul :attribute trebuie să conțină între :min și :max elemente.',
    ],
    'boolean'              => 'Câmpul :attribute trebuie să fie adevărat sau fals.',
    'confirmed'            => 'Câmpul :attribute nu a fost confirmat.',
    'date'                 => 'Câmpul :attribute nu este o dată validă.',
    'date_format'          => 'Câmpul :attribute nu se potrivește cu formatul :format.',
    'different'            => 'Câmpurile :attribute și :other trebuie să fie diferite.',
    'digits'               => 'Câmpul :attribute trebuie să conțină :digits cifre.',
    'digits_between'       => 'Câmpul :attribute trebuie să fie între :min și :max cifre.',
    'email'                => 'Câmpul :attribute trebuie să fie o adresă de e-mail validă.',
    'exists'               => 'Câmpul :attribute selectat este invalid.',
    'filled'               => 'Câmpul :attribute este necesar.',
    'image'                => 'Fișierul :attribute trebuie să fie o imagine.',
    'in'                   => 'Câmpul :attribute selectat este invalid.',
    'integer'              => 'Câmpul :attribute trebuie să fie un număr întreg.',
    'ip'                   => 'Adresa :attribute trebuie să fie o adresă de IP validă.',
    'json'                 => 'Câmpul :attribute trebuie să fie într-un format JSON valid.',
    'max'                  => [
        'numeric' => 'Câmpul :attribute nu trebuie să fie mai mare de :max.',
        'file'    => 'Fișierul :attribute nu trebuie să fie mai mare de :max kilobyți.',
        'string'  => 'Câmpul :attribute nu poate conține mai mult de :max caractere.',
        'array'   => 'Șirul :attribute nu poate avea mai mult de :max elemente.',
    ],
    'mimes'                => 'Câmpul :attribute trebuie să fie un fișier de tipul: :values.',
    'min'                  => [
        'numeric' => 'Câmpul :attribute trebuie să fie de cel puțin :min.',
        'file'    => 'Câmpul :attribute trebuie să fie de cel puțin :min kilobyți.',
        'string'  => 'Câmpul :attribute trebuie să fie de cel puțin :min caractere.',
        'array'   => 'Câmpul :attribute trebuie să conțină cel puțin :min elemente.',
    ],
    'not_in'               => 'Câmpul :attribute selectat este invalid.',
    'numeric'              => 'Acest câmp trebuie să fie un număr.',
    'regex'                => 'Formatul câmpului :attribute este invalid.',
    'required'             => 'Câmpul :attribute este necesar.',
    'required_if'          => 'Câmpul :attribute este necesar când :other este :value.',
    'required_unless'      => 'Câmpul :attribute nu este necesar doar dacă :other este în :values.',
    'required_with'        => 'Câmpul :attribute este necesar când :values sunt prezente.',
    'required_with_all'    => 'Câmpul :attribute este necesar când :values sunt prezente.',
    'required_without'     => 'Câmpul :attribute este necesar când :values nu este prezent(ă).',
    'required_without_all' => 'Câmpul :attribute este necesat când niciuna dintre valorile :values nu sunt prezente.',
    'same'                 => 'Câmpul :attribute și :other trebuie să coincidă.',
    'size'                 => [
        'numeric' => 'Câmpul :attribute trebuie să fie de :size.',
        'file'    => 'Fișierul :attribute trebuie să fie de :size kilobyți.',
        'string'  => 'Câmpul :attribute trebuie să fie de :size caractere.',
        'array'   => 'Șirul :attribute trebuie să conțină :size elemente.',
    ],
    'string'               => 'Câmpul :attribute trebuie să fie un șir de caractere.',
    'timezone'             => 'Câmpul :attribute trebuie să fie o zonă orară validă.',
    'unique'               => 'Câmpul :attribute a fost deja alocat.',
    'url'                  => 'Câmpul :attribute este într-un format invalid.',

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
