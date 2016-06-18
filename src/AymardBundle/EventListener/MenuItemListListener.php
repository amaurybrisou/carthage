<?php
namespace AymardBundle\EventListener;

use AymardBundle\Model\MenuItemModel;
use Avanzu\AdminThemeBundle\Event\SidebarMenuEvent;
use Symfony\Component\HttpFoundation\Request;

class MenuItemListListener {

    // ...

    public function onSetupMenu(SidebarMenuEvent $event) {

        $request = $event->getRequest();

        foreach ($this->getMenu($request) as $item) {
            $event->addItem($item);
        }

    }

    protected function getMenu(Request $request) {
        // Build your menu here by constructing a MenuItemModel array
        $menuItems = [
            $page = new MenuItemModel('page', 'Pages', 'admin_page_index', array(), 'iconclasses fa fa-plane'),
            $image = new MenuItemModel('image', 'Photos', 'admin_page_index', array(/* options */), 'iconclasses fa fa-plane'),
        ];
        $page->addChild(new MenuItemModel('page_list', 'List', 'admin_page_index', array(), 'fa fa-rss-square'));
        //$page->addChild(new MenuItemModel('page_new', 'Create', 'admin_page_new', array(), 'fa fa-rss-square'));
        $image->addChild(new MenuItemModel('image_list', 'List', 'admin_image_index', array(), 'fa fa-rss-square'));
        $image->addChild(new MenuItemModel('image_new', 'Create', 'admin_image_new', array(), 'fa fa-rss-square'));
       
        return $this->activateByRoute($request->get('_route'), $menuItems);
    }

    protected function activateByRoute($route, $items) {
        foreach($items as $item) {
            if($item->hasChildren()) {
                $this->activateByRoute($route, $item->getChildren());
            }
            else {
                if($item->getRoute() == $route) {
                    $item->setIsActive(true);
                }
            }
        }

        return $items;
    }

}