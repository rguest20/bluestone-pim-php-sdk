<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator;

class BaseFilterConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Count(min: 0, minMessage: 'This array has not enough properties. It should have {{ limit }} properties or more.'), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['type' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\Choice(choices: ['NAME_IS', 'NAME_CONTAINS', 'NAME_NOT_CONTAINS', 'NAME_STARTS_WITH', 'NAME_ENDS_WITH', 'NAME_EMPTY', 'NAME_NOT_EMPTY', 'NUMBER_IS', 'NUMBER_CONTAINS', 'NUMBER_NOT_CONTAINS', 'NUMBER_STARTS_WITH', 'NUMBER_ENDS_WITH', 'NUMBER_IN', 'DESCRIPTION_IS', 'DESCRIPTION_CONTAINS', 'DESCRIPTION_NOT_CONTAINS', 'DESCRIPTION_STARTS_WITH', 'DESCRIPTION_ENDS_WITH', 'DESCRIPTION_EMPTY', 'DESCRIPTION_NOT_EMPTY', 'ID_IN', 'NUMBER_NOT_IN', 'LAST_MODIFIED_BY_IS', 'LAST_MODIFIED_BY_CURRENT_USER'], message: '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".'), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'values' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Count(min: 0, minMessage: 'This array has not enough values. It should have {{ limit }} values or more.'), new \Symfony\Component\Validator\Constraints\All(constraints: [new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), new \Symfony\Component\Validator\Constraints\Type(type: ['array'])])], allowExtraFields: true)];
    }
}