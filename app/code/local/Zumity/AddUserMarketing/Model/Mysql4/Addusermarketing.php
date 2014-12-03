<?php
class Zumity_AddUserMarketing_Model_Mysql4_Addusermarketing extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("addusermarketing/addusermarketing", "id");
    }
}