<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Validator;

class FilterUpdateRequestDtoConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Count(min: 0, minMessage: 'This array has not enough properties. It should have {{ limit }} properties or more.'), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['name' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Length(max: 100, maxMessage: 'This value is too long. It should have {{ limit }} characters or less.'), new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'service' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Length(max: 100, maxMessage: 'This value is too long. It should have {{ limit }} characters or less.'), new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'entity' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Length(max: 100, maxMessage: 'This value is too long. It should have {{ limit }} characters or less.'), new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'public' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['bool'])]), 'valid' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['bool'])]), 'filter' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Count(min: 0, minMessage: 'This array has not enough properties. It should have {{ limit }} properties or more.')])], allowExtraFields: true)];
    }
}