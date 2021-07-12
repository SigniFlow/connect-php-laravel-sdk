<?php
/**
 * AddWorkflowStepV2Request
 */
namespace SigniFlowConnect\Model;

/**
 * AddWorkflowStepV2Request
 */
class AddWorkflowStepV2Request {

    /** @var \SigniFlowConnect\Model\ActionField $actionField */
    private $actionField;

    /** @var string $cellField Mobile number of participant*/
    private $cellField;

    /** @var string $docIDField Document ID field.*/
    private $docIDField;

    /** @var string $emailField Participant email address.*/
    private $emailField;

    /** @var string $firstNameField Participant firstname.*/
    private $firstNameField;

    /** @var string $languageCodeField Participant 2 Digit ISO Language Code &#x60;en &#x3D; English es &#x3D; Spanish fr &#x3D; French ect&#x60;*/
    private $languageCodeField;

    /** @var string $lastNameField Participant last name.*/
    private $lastNameField;

    /** @var \SigniFlowConnect\Model\ProxyAllowedField $proxyAllowedField */
    private $proxyAllowedField;

    /** @var \SigniFlowConnect\Model\TokenField $tokenField */
    private $tokenField;

}
