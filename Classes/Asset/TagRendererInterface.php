<?php


namespace Ssch\Typo3Encore\Asset;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Page\PageRenderer;

interface TagRendererInterface
{
    public function renderWebpackScriptTags(string $entryName, string $position = 'footer', $buildName = '_default', PageRenderer $pageRenderer = null, array $parameters = []);

    public function renderWebpackLinkTags(string $entryName, string $media = 'all', $buildName = '_default', PageRenderer $pageRenderer = null, array $parameters = []);
}