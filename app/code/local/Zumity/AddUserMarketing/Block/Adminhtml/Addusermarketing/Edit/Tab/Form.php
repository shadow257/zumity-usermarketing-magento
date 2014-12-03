<?php
class Zumity_AddUserMarketing_Block_Adminhtml_Addusermarketing_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("addusermarketing_form", array("legend"=>Mage::helper("addusermarketing")->__("Item information")));

				
						$fieldset->addField("first_name", "text", array(
						"label" => Mage::helper("addusermarketing")->__("First Name"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "first_name",
						));
					
						$fieldset->addField("last_name", "text", array(
						"label" => Mage::helper("addusermarketing")->__("Last Name"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "last_name",
						));
					
						$fieldset->addField("email", "text", array(
						"label" => Mage::helper("addusermarketing")->__("Email Address"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "email",
						));
						
						$fieldset->addField("store", "select", array(
						"label" => Mage::helper("addusermarketing")->__("Store"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "store",
						"value"     => "Masterbuilt",
						"values"    => array(
						  array('label' => 'Masterbuilt', value => 'Masterbuilt'),
						  array('label' => 'MB Smoker', value => 'MB Smoker'),
						  array('label' => 'BB Fryer', value => 'BB Fryer')
					   )
						));
					

				if (Mage::getSingleton("adminhtml/session")->getAddusermarketingData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getAddusermarketingData());
					Mage::getSingleton("adminhtml/session")->setAddusermarketingData(null);
				} 
				elseif(Mage::registry("addusermarketing_data")) {
				    $form->setValues(Mage::registry("addusermarketing_data")->getData());
				}
				return parent::_prepareForm();
		}
}
