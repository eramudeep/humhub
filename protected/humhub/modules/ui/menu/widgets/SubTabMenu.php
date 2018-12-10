<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\ui\menu\widgets;

/**
 * SubTabMenu
 *
 * @sicne 1.4
 * @package humhub\modules\ui\menu\widgets
 */
abstract class SubTabMenu extends Menu
{
    /**
     * @var string the title of the panel
     */
    public $panelTitle;

    /**
     * @inheritdoc
     */
    public $template = '@ui/menu/widgets/views/sub-tab-menu.php';

}