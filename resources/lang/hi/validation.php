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

    'accepted'             => 'यह :attribute स्वीकार किया जाना चाहिए।',
    'active_url'           => 'यह :attribute मान्य यूआरएल नहीं है',
    'after'                => 'यह :attribute एक तारीख के बाद होना चाहिए :date.',
    'alpha'                => 'यह :attribute में केवल पत्र हो सकते हैं',
    'alpha_dash'           => 'यह :attribute इसमें केवल अक्षरों, संख्याएं और डैश शामिल हो सकते हैं',
    'alpha_num'            => 'यह :attribute में केवल अक्षरों और संख्याएं हो सकती हैं',
    'array'                => 'यह :attribute एक सरणी होना चाहिए',
    'before'               => 'यह :attribute पहले की तिथि होना चाहिए :date.',
    'between'              => [
        'numeric' => 'यह :attribute बीच में होना चाहिए :min तथा :max.',
        'file'    => 'यह :attribute बीच में होना चाहिए :min तथा :max किलोबाइट।',
        'string'  => 'यह :attribute बीच में होना चाहिए :min तथा :max वर्ण।',
        'array'   => 'यह :attribute बीच में होना चाहिए :min तथा :max आइटम नहीं है।',
    ],
    'boolean'              => 'यह :attribute फ़ील्ड सही या गलत होना चाहिए।',
    'confirmed'            => 'यह :attribute पुष्टि से मेल नहीं खाती',
    'date'                 => 'यह :attribute मान्य दिनांक नहीं है',
    'date_format'          => 'यह :attribute प्रारूप से मेल नहीं खाता है :format.',
    'different'            => 'यह :attribute तथा :other अलग होना चाहिए.',
    'digits'               => 'यह :attribute होना चाहिए :digits अंक.',
    'digits_between'       => 'यह :attribute बीच में होना चाहिए :min तथा :max अंक।',
    'distinct'             => 'यह :attribute फ़ील्ड में डुप्लिकेट वैल्यू है',
    'email'                => 'यह :attribute एक वैध ई - मेल पता होना चाहिए।',
    'exists'               => 'यह चयनित :attribute अमान्य है।',
    'filled'               => 'यह :attribute क्षेत्र की आवश्यकता है।',
    'image'                => 'यह :attribute एक छवि होना चाहिए',
    'in'                   => 'यह चयनित :attribute अमान्य है।',
    'in_array'             => 'यह :attribute क्षेत्र में मौजूद नहीं है :other.',
    'integer'              => 'यह :attribute पूर्णांक होना चाहिए।',
    'ip'                   => 'यह :attribute एक वैध IP पता होना चाहिए।',
    'json'                 => 'यह :attribute एक वैध JSON स्ट्रिंग होना चाहिए',
    'max'                  => [
        'numeric' => 'यह :attribute अधिक से अधिक नहीं हो सकता है :max.',
        'file'    => 'यह :attribute अधिक से अधिक नहीं हो सकता है :max किलोबाइट।',
        'string'  => 'यह :attribute अधिक से अधिक नहीं हो सकता है :max वर्ण।',
        'array'   => 'यह :attribute मई से अधिक नहीं हो सकता है :max आइटम नहीं है।',
    ],
    'mimes'                => 'यह :attribute एक फ़ाइल प्रकार की होनी चाहिए: :values.',
    'min'                  => [
        'numeric' => 'यह :attribute कम से कम होना चाहिए :min.',
        'file'    => 'यह :attribute कम से कम होना चाहिए :min किलोबाइट।',
        'string'  => 'यह :attribute कम से कम होना चाहिए :min वर्ण।',
        'array'   => 'यह :attribute कम से कम होना चाहिए :min आइटम नहीं है।',
    ],
    'not_in'               => 'यह चयनित :attribute अमान्य है।',
    'numeric'              => 'यह :attribute एक संख्या होनी चाहिए।',
    'present'              => 'यह :attribute क्षेत्र मौजूद होना चाहिए',
    'regex'                => 'यह :attribute प्रारूप अमान्य है',
    'required'             => 'यह :attribute क्षेत्र की आवश्यकता है.',
    'required_if'          => 'यह :attribute क्षेत्र की आवश्यकता है जब :other है :value.',
    'required_unless'      => 'यह :attribute फ़ील्ड आवश्यक नहीं है :other में है :values.',
    'required_with'        => 'यह :attribute क्षेत्र की आवश्यकता है जब :values उपस्थित है।',
    'required_with_all'    => 'यह :attribute क्षेत्र की आवश्यकता है जब :values उपस्थित है।',
    'required_without'     => 'यह :attribute क्षेत्र की आवश्यकता है जब :values मौजूद नहीं है।',
    'required_without_all' => 'यह :attribute फ़ील्ड की आवश्यकता तब होती है जब कोई भी नहीं :values मौजूद हैं।',
    'same'                 => 'यह :attribute तथा :other मेल खाना चाहिए।',
    'size'                 => [
        'numeric' => 'यह :attribute होना चाहिए :size.',
        'file'    => 'यह :attribute होना चाहिए :size किलोबाइट।',
        'string'  => 'यह :attribute होना चाहिए :size वर्ण।',
        'array'   => 'यह :attribute शामिल होना चाहिए :size आइटम नहीं है।',
    ],
    'string'               => 'यह :attribute एक स्ट्रिंग होना चाहिए',
    'timezone'             => 'यह :attribute एक वैध क्षेत्र होना चाहिए',
    'unique'               => 'यह :attribute पहले से ही लिया जा चुका है।',
    'url'                  => 'यह :attribute प्रारूप अमान्य है',

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
