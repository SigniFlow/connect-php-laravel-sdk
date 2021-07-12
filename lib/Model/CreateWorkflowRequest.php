<?php
/**
 * CreateWorkflowRequest
 */
namespace SigniFlowConnect\Model;

/**
 * CreateWorkflowRequest
 */
class CreateWorkflowRequest {

    /** @var string $additionalDataField Sets additional data to be embedded in PDF Meta.*/
    private $additionalDataField;

    /** @var \SigniFlowConnect\Model\AutoExpire $autoExpireField */
    private $autoExpireField;

    /** @var \SigniFlowConnect\Model\AutoRemind $autoRemindField */
    private $autoRemindField;

    /** @var string $docField Base64 Encoded String of document*/
    private $docField;

    /** @var string $docNameField Name of document to display in SigniFlow*/
    private $docNameField;

    /** @var \DateTime $dueDateField Due date for the document, use in conjunction with Auto Expire.*/
    private $dueDateField;

    /** @var \SigniFlowConnect\Model\DocExtension $extensionField */
    private $extensionField;

    /** @var string $messageField Custom message to display to participants*/
    private $messageField;

    /** @var \SigniFlowConnect\Model\Priority $priorityField */
    private $priorityField;

    /** @var int $sLAField Deprecated field, Pass 0*/
    private $sLAField;

    /** @var \SigniFlowConnect\Model\TokenField $tokenField */
    private $tokenField;

}
