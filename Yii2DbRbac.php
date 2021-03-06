<?php
/**
 * Yii2DbRbac for Yii2
 *
 * @author Elle <elleuz@gmail.com>
 * @version 0.1
 * @package Yii2DbRbac for Yii2
 *
 */
namespace mixartemev\db_rbac;

use Yii;
use yii\base\Module;
use yii\base\Theme;

class Yii2DbRbac extends Module
{
    public $controllerNamespace = 'mixartemev\db_rbac\controllers';
    public $userClass;
    public $theme = false;

    public function init()
    {
        parent::init();
        $this->registerTranslations();

        if($this->theme){
            Yii::$app->view->theme = new Theme($this->theme);
        }
    }

    public function registerTranslations()
    {
        if (!isset(Yii::$app->i18n->translations['db_rbac'])) {
            Yii::$app->i18n->translations['db_rbac'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'ru-Ru',
                'basePath' => '@mixartemev/db_rbac/messages',
            ];
        }
    }

    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/db_rbac/' . $category, $message, $params, $language);
    }
}
