<?php

/*
 * This file is part of the Application.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Bundle\SalesBundle\Form\Type;

use Application\Bundle\SalesBundle\Entity\Order;
use Sylius\Bundle\SalesBundle\Form\Type\OrderFormType as BaseOrderFormType;
use Symfony\Component\Form\FormBuilder;

class OrderFormType extends BaseOrderFormType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        parent::buildForm($builder, $options);
                
        $builder
            ->add('name')
            ->add('surname')
            ->add('city')
            ->add('street')
            ->add('postcode')
            ->add('email', 'email')
            ->add('phone')
        ;
    }
}
