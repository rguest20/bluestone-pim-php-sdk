<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator;

class MediabankAssetsParamsDescriptionParamsConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['description' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'descriptionMatch' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\Choice(choices: ['CONTAINS', 'NOT_CONTAINS', 'BEGINS', 'ENDS', 'EMPTY', 'NOT_EMPTY', 'EQUALS', 'CASE_SENSITIVE_EQUALS'], message: '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')])], allowExtraFields: true)];
    }
}