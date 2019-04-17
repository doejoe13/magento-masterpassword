<?php
if (Mage::helper('core')->isModuleEnabled('Zestard_Customerattribute'))
    {
      class PAJ_MasterPassword_Customer_Model_Customer_Compatibility extends Zestard_Customerattribute_Model_Customer
    } else {
       class PAJ_MasterPassword_Customer_Model_Customer_Compatibility extends Mage_Customer_Model_Customer     
    }
