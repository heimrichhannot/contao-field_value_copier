<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'HeimrichHannot\FieldValueCopier\Backend\FieldValueCopier' => 'system/modules/field_value_copier/classes/backend/FieldValueCopier.php',

	// Widgets
	'HeimrichHannot\FieldValueCopier\FieldValueCopier'         => 'system/modules/field_value_copier/widgets/FieldValueCopier.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'field_value_copier' => 'system/modules/field_value_copier/templates',
));
