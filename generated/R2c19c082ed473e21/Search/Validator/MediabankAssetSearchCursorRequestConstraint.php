<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator;

class MediabankAssetSearchCursorRequestConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Count(min: 0, minMessage: 'This array has not enough properties. It should have {{ limit }} properties or more.'), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['count' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\LessThanOrEqual(value: 100.0), new \Symfony\Component\Validator\Constraints\Type(type: ['integer']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'cursor' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'quickSearch' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'asset' => new \Symfony\Component\Validator\Constraints\Optional([]), 'mediaInfo' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}