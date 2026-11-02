<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Validator;

class UserEventTypeListRequestConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Count(min: 0, minMessage: 'This array has not enough properties. It should have {{ limit }} properties or more.'), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['eventTypes' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Count(min: 1, minMessage: 'This array has not enough values. It should have {{ limit }} values or more.'), new \Symfony\Component\Validator\Constraints\All(constraints: [new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\Choice(choices: ['TASK_IS_ASSIGNED_TO_USER', 'TASK_IS_REASSIGNED', 'TASK_METADATA_IS_UPDATED', 'NEW_COMMENT_ASSIGNED_TO_TASK', 'TASK_DUE_DATE_UPDATED', 'TASK_SCOPE_IS_UPDATED', 'TASK_REPORTED_BY_ME_IS_CLOSED', 'PRODUCT_WATCH', 'TASK_DEADLINE_REACHED', 'TASK_DEADLINE_REMINDER'], message: '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')]), new \Symfony\Component\Validator\Constraints\Type(type: ['array']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')])], allowExtraFields: true)];
    }
}