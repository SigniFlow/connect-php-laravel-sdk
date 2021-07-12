<?php
/**
 * FullWorkflowRequest
 */
namespace SigniFlowConnect\Model;

/**
 * FullWorkflowRequest
 */
class FullWorkflowRequest {

    /** @var string $additionalDataField Additional data.*/
    private $additionalDataField;

    /** @var \SigniFlowConnect\Model\AutoRemind $autoRemindField */
    private $autoRemindField;

    /** @var string $customMessageField Custom message.*/
    private $customMessageField;

    /** @var string $docField Document field.*/
    private $docField;

    /** @var string $docNameField Document name.*/
    private $docNameField;

    /** @var string $dueDateField Document due date.*/
    private $dueDateField;

    /** @var \SigniFlowConnect\Model\DocExtension $extensionField */
    private $extensionField;

    /** @var bool $flattenDocumentField Flatten document.*/
    private $flattenDocumentField;

    /** @var bool $keepContentSecurityField Keep content security.*/
    private $keepContentSecurityField;

    /** @var bool $keepCustomPropertiesField Keep custom properties.*/
    private $keepCustomPropertiesField;

    /** @var bool $keepXMPMetadataField Keep XMP meta data.*/
    private $keepXMPMetadataField;

    /** @var \SigniFlowConnect\Model\FullWorkflowRequestPortfolioInformationField $portfolioInformationField */
    private $portfolioInformationField;

    /** @var float $priorityField Document priority.*/
    private $priorityField;

    /** @var float $sLAField SLA*/
    private $sLAField;

    /** @var bool $sendFirstEmailField Confirm first user email notification will or will not be sent.*/
    private $sendFirstEmailField;

    /** @var bool $sendWorkflowEmailsField Confirm that workflow emails will or will not be sent.*/
    private $sendWorkflowEmailsField;

    /** @var \SigniFlowConnect\Model\TokenField $tokenField */
    private $tokenField;

    /** @var \SigniFlowConnect\Model\FullWorkflowRequestWorkflowUsersListField[] $workflowUsersListField List of users in the workflow.*/
    private $workflowUsersListField;

}
