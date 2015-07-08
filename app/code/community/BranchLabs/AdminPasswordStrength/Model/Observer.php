<?php
class BranchLabs_AdminPasswordStrength_Model_Observer {

    // The admin 'Forgot Password' page is constructed in a weird way—without any layout handles.
    // I've resorted to an observer that creates and appends the JS validator block to get updated
    // functionality onto that page.
    public function addValidationToForgotAdminPassword($observer) {
        $template = $observer->getEvent()->getBlock()->getTemplate();
        if($template === "resetforgottenpassword.phtml") {
            $normalOutput = $observer->getTransport()->getHtml();
            $validator = Mage::app()->getLayout()
                                    ->createBlock('adminhtml/template')
                                    ->setTemplate('branchlabs/adminpasswordstrength/validator_js.phtml')
                                    ->toHtml();
            $observer->getTransport()->setHtml($normalOutput . $validator);
        }
    }
}
