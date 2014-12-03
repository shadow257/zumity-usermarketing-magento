<?php

class Zumity_AddUserMarketing_Block_Adminhtml_Addusermarketing_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("addusermarketingGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("addusermarketing/addusermarketing")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("addusermarketing")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("first_name", array(
				"header" => Mage::helper("addusermarketing")->__("First Name"),
				"index" => "first_name",
				));
				$this->addColumn("last_name", array(
				"header" => Mage::helper("addusermarketing")->__("Last Name"),
				"index" => "last_name",
				));
				$this->addColumn("email", array(
				"header" => Mage::helper("addusermarketing")->__("Email Address"),
				"index" => "email",
				));
				$this->addColumn("store", array(
				"header" => Mage::helper("addusermarketing")->__("Store"),
				"index" => "store",
				));
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_addusermarketing', array(
					 'label'=> Mage::helper('addusermarketing')->__('Remove Email Addresses'),
					 'url'  => $this->getUrl('*/adminhtml_addusermarketing/massRemove'),
					 'confirm' => Mage::helper('addusermarketing')->__('Are you sure?')
				));
			return $this;
		}
			

}