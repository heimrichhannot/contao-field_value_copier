<?php

$GLOBALS['TL_DCA']['tl_field_value_copier'] = array(
    'fields' => array(
        'fieldValueCopier' => array(
            'label'            => &$GLOBALS['TL_LANG']['tl_field_value_copier']['fieldValueCopier'],
            'exclude'          => true,
            'inputType'        => 'select',
            'eval'             => array('tl_class' => 'long', 'style' => 'width: 97%', 'chosen' => true, 'includeBlankOption' => true),
        ),
    ),
);