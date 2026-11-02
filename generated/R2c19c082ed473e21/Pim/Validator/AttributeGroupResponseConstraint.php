<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator;

class AttributeGroupResponseConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Count(min: 0, minMessage: 'This array has not enough properties. It should have {{ limit }} properties or more.'), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['id' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'name' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Length(min: 1, minMessage: 'This value is too short. It should have {{ limit }} characters or more.'), new \Symfony\Component\Validator\Constraints\NotBlank(allowNull: 1), new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'number' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'orderByName' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['bool'])])], allowExtraFields: true)];
    }
}