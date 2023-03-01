<?php
/**
 * Powerful Form Generator
 *
 * This modules aims to provide for your customer any kind of form you want.
 *
 * If you find errors, bugs or if you want to share some improvments,
 * feel free to contact at contact@prestaddons.net ! :)
 * Si vous trouvez des erreurs, des bugs ou si vous souhaitez
 * tout simplement partager un conseil ou une amélioration,
 * n'hésitez pas à me contacter à contact@prestaddons.net
 *
 * @package   modules
 * @author    Cyril Nicodème <contact@prestaddons.net>
 * @copyright Copyright (C) April 2014 prestaddons.net <@email:contact@prestaddons.net>. All rights reserved.
 * @since     2014-04-15
 * @version   2.6.8
 * @license   Nicodème Cyril
 */
require_once(_PS_MODULE_DIR_.'powerfulformgenerator/classes/PFGRenderer.php');
class CmsController extends CmsControllerCore
{
    /*
    public function setMedia()
    {
        parent::setMedia();
        if ($this->assignCase == 1) {
            $this->addJS(_THEME_JS_DIR_.'cms.js');
        }
        $this->addCSS(_THEME_CSS_DIR_.'product_list.css');
        $this->addCSS(_THEME_CSS_DIR_.'cms.css');
        $this->addCSS(_PS_MODULE_DIR_.'cmsproducts/cmsproducts.css');
    }
    */
    /*
    * module: powerfulformgenerator
    * date: 2020-06-11 13:21:54
    * version: 2.6.8
    */
    public function initContent()
    {
        parent::initContent();
        $parent_cat = new CMSCategory(1, $this->context->language->id);
        $this->context->smarty->assign('id_current_lang', $this->context->language->id);
        $this->context->smarty->assign('home_title', $parent_cat->name);
        $this->context->smarty->assign('cgv_id', Configuration::get('PS_CONDITIONS_CMS_ID'));
        if ($this->assignCase == 1) {
            if (isset($this->cms->id_cms_category) && $this->cms->id_cms_category) {
                $path = Tools::getFullPath($this->cms->id_cms_category, $this->cms->meta_title, 'CMS');
            } elseif (isset($this->cms_category->meta_title)) {
                $path = Tools::getFullPath(1, $this->cms_category->meta_title, 'CMS');
            }
            $this->cms->content = $this->returnContent($this->cms->content);
            $this->context->smarty->assign(array(
                'cms' => $this->cms,
                'content_only' => (int)Tools::getValue('content_only'),
                'path' => $path,
                'body_classes' => array($this->php_self.'-'.$this->cms->id, $this->php_self.'-'.$this->cms->link_rewrite)
            ));
            if ($this->cms->indexation == 0) {
                $this->context->smarty->assign('nobots', true);
            }
        } elseif ($this->assignCase == 2) {
            $this->context->smarty->assign(array(
                'category' => $this->cms_category, //for backward compatibility
                'cms_category' => $this->cms_category,
                'sub_category' => $this->cms_category->getSubCategories($this->context->language->id),
                'cms_pages' => CMS::getCMSPages($this->context->language->id, (int)$this->cms_category->id, true, (int)$this->context->shop->id),
                'path' => ($this->cms_category->id !== 1) ? Tools::getPath($this->cms_category->id, $this->cms_category->name, false, 'CMS') : '',
                'body_classes' => array($this->php_self.'-'.$this->cms_category->id, $this->php_self.'-'.$this->cms_category->link_rewrite)
            ));
        }
        $this->setTemplate(_PS_THEME_DIR_.'cms.tpl');
    }
    /*
    * module: powerfulformgenerator
    * date: 2020-06-11 13:21:54
    * version: 2.6.8
    */
    private function generatePFG($id_pfg)
    {
        $renderer = new PFGRenderer($id_pfg);
        if (!$renderer->isAllowed(true)) {
            $redirect_url = $renderer->getForm()->unauth_redirect_url[Context::getContext()->language->id];
            if (!empty($redirect_url)) {
                Tools::redirect($redirect_url);
            } else {
                Controller::getController('PageNotFoundController')->run();
            }
            exit();
        }
        return $renderer->displayForm();
    }
    /*
    * module: powerfulformgenerator
    * date: 2020-06-11 13:21:54
    * version: 2.6.8
    */
    public function returnContent($contents)
    {
        preg_match_all('/\{powerfulform\:[(0-9\,)]+\}/i', $contents, $matches);
        foreach ($matches[0] as $index => $match) {
            $explode = explode(":", $match);
            $contents = str_replace($match, $this->generatePFG(str_replace("}", "", $explode[1])), $contents);
        }
        return $contents;
    }
}
