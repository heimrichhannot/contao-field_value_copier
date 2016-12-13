<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2017 Heimrich & Hannot GmbH
 *
 * @author  Dennis Patzer
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

namespace HeimrichHannot\FieldValueCopier\Backend;

use HeimrichHannot\Haste\Dca\General;

class FieldValueCopier extends \Backend
{
    public static function getOptions(\DataContainer $objDc)
    {
        if (!($strTable = $objDc->table) || !($strField = $objDc->field))
        {
            return array();
        }

        $arrDca = $GLOBALS['TL_DCA'][$strTable]['fields'][$objDc->field];

        if (!isset($arrDca['eval']['fieldValueCopier']['table']))
        {
            throw new \Exception("No 'table' set in $objDc->table.$objDc->field's eval array.");
        }

        if (($objItems = General::getModelInstances($arrDca['eval']['fieldValueCopier']['table'])) !== null)
        {
            $strLabel = $GLOBALS['TL_LANG']['MSC']['tl_field_value_copier']['record'];

            $arrOptions = array_combine($objItems->fetchEach('id'), array_map(function($val) use ($strLabel) {
                return $strLabel . $val;
            }, $objItems->fetchEach('id')));

            unset($arrOptions[$objDc->id]);

            return $arrOptions;
        }

        return array();
    }
}