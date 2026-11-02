<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator;

class MediabankAssetsParamsUpdatedRelativeConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['daysAgo' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\GreaterThanOrEqual(value: 0.0), new \Symfony\Component\Validator\Constraints\Type(type: ['integer'])])], allowExtraFields: true)];
    }
}