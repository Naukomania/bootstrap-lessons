<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	const DEFAULT_LINK		= 0;
	const MAIN_LINK			= 1;
	const PRODUCTION_LINK 	= 2;
	const PRICE_LINK		= 3;
	const WORK_LINK			= 4;
	const ACRYLIC_LINK		= 5;
	const QUARTZ_LINK		= 6;
	const CONTACTS_LINK		= 7;
	const ADDITIONAL_LINK	= 8;
	const ADMIN_LINK		= 9;

	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	public $activeLink = self::DEFAULT_LINK;

	public function activeClass($checkedType) {
		if ($this->activeLink == $checkedType) {
			return ' active';
		}
		return '';
	}
}