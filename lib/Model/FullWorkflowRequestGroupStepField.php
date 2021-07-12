<?php
/**
 * FullWorkflowRequestGroupStepField
 */
namespace SigniFlowConnect\Model;

/**
 * FullWorkflowRequestGroupStepField
 */
class FullWorkflowRequestGroupStepField {

    /** @var \SigniFlowConnect\Model\FullWorkflowRequestGroupStepFieldGroupMembersField[] $groupMembersField The list of users in a group in the workflow.*/
    private $groupMembersField;

    /** @var string $groupNameField Group name.*/
    private $groupNameField;

    /** @var float $requiredNumberOfSignaturesField Required number of signatures in the group.*/
    private $requiredNumberOfSignaturesField;

}
