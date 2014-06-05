<?php
namespace Pim\Bundle\FilterBundle\Form\Type\Filter;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Oro\Bundle\FilterBundle\Form\Type\Filter\AbstractChoiceType;
use Oro\Bundle\FilterBundle\Form\Type\Filter\ChoiceFilterType;

class BooleanFilterType extends AbstractChoiceType
{
    const TYPE_YES = 1;
    const TYPE_NO = 0;
    const NAME = 'pim_type_boolean_filter';

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        return ChoiceFilterType::NAME;
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $fieldChoices = array(
            self::TYPE_YES => $this->translator->trans('oro.filter.form.label_type_yes'),
            self::TYPE_NO => $this->translator->trans('oro.filter.form.label_type_no'),
        );

        $resolver->setDefaults(
            array(
                'field_options' => array('choices' => $fieldChoices),
            )
        );
    }
}
