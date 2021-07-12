<?php
/**
 * FullWorkflowRequestWorkflowUsersListField
 */
namespace SigniFlowConnect\Model;

/**
 * FullWorkflowRequestWorkflowUsersListField
 */
class FullWorkflowRequestWorkflowUsersListField {

    /** @var float $actionField Refers to the order of signatures from the users.*/
    private $actionField;

    /** @var float $allowProxyField Allow proxy confirmation field.*/
    private $allowProxyField;

    /** @var bool $autoSignField ### Enable auto sign.  &#x60;True &#x3D; Signature will be applied automaticly False &#x3D; User will need to login and Sign&#x60;*/
    private $autoSignField;

    /** @var string $emailAddressField Workflow user&#39;s email addresses.*/
    private $emailAddressField;

    /** @var \SigniFlowConnect\Model\FullWorkflowRequestGroupStepField $groupStepField */
    private $groupStepField;

    /** @var string $languageCodeField #### Sets the display language for the user ##### ISO 2 Digit Code  &#x60;en &#x3D; English es &#x3D; Spanish fr &#x3D; French&#x60;*/
    private $languageCodeField;

    /** @var string $latitudeField Location latitude.*/
    private $latitudeField;

    /** @var string $longitudeField Location longtitude.*/
    private $longitudeField;

    /** @var string $mobileNumberField Group user&#39;s mobile number.*/
    private $mobileNumberField;

    /** @var object[] $preloadedFaceToFaceSignersField Preloaded user&#39;s who will be using the face to face signature field.*/
    private $preloadedFaceToFaceSignersField;

    /** @var string $signReasonField Reason for signature.*/
    private $signReasonField;

    /** @var string $signerPasswordField Face to face user&#39;s password.*/
    private $signerPasswordField;

    /** @var string $userFirstNameField Face to face user&#39;s first name.*/
    private $userFirstNameField;

    /** @var string $userFullNameField Face to face user&#39;s full name.*/
    private $userFullNameField;

    /** @var string $userLastNameField Face to face user&#39;s last name.*/
    private $userLastNameField;

    /** @var \SigniFlowConnect\Model\FullWorkflowRequestWorkflowUserFieldsField[] $workflowUserFieldsField The list of the workflowed documents field.*/
    private $workflowUserFieldsField;

}
