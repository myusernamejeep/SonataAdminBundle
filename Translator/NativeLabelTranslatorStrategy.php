<?php

/*
 * This file is part of sonata-project.
 *
 * (c) 2010 Thomas Rabaix
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Translator;

class NativeLabelTranslatorStrategy implements LabelTranslatorStrategyInterface
{
    /**
     * {@inheritDoc}
     */
    public function getLabel($label, $context = '', $type = '')
    {
        $label = str_replace('_', ' ', $label);
        $label = strtolower(preg_replace('~(?<=\\w)([A-Z])~', '_$1', $label));

        return ucwords(str_replace('_', ' ', $label));
    }
}