# Contao Field Value Copier

This simple module offers an input type for showing a giving the user the opportunity to copy a certain field value from another record. This is useful for fields that are very complex to configure.

![alt text](./docs/screenshot.png "Demo in the backend")

## Features

### Technical instructions

Use the inputType "fieldValueCopier" for your field.

```
'someField' => array(
    // no label necessary
    'inputType' => 'fieldValueCopier',
    'eval'      => array(
        'fieldValueCopier' => array(
            'table' => 'tl_my_dca',
            'field' => 'myField',
            'options_callback' => array('Namespace\SomeClass', 'getOptions')
        )
    )
)
```