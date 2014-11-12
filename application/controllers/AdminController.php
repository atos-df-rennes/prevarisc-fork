<?php

class AdminController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $this->_helper->layout->setLayout('menu_admin');

        $this->view->key_ign = getenv('PREVARISC_PLUGIN_IGNKEY');
        $this->view->key_googlemap = getenv('PREVARISC_PLUGIN_GOOGLEMAPKEY');
        $this->view->ldap_enabled = getenv('PREVARISC_LDAP_ENABLED');
        $this->view->dbname = getenv('PREVARISC_DB_DBNAME');
        $this->view->db_url = getenv('PREVARISC_DB_HOST');
        $this->view->api_enabled = getenv('PREVARISC_SECURITY_KEY') != "";
        $this->view->proxy_enabled = getenv('PREVARISC_PROXY_ENABLED');
        $this->view->third_party_plugins = implode(', ', explode(';', getenv('PREVARISC_THIRDPARTY_PLUGINS')));
    }
}
