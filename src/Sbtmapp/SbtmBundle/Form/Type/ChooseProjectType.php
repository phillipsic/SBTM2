<?php

// src/Sbtmapp/SbtmBundle/Form/Type/ChooseProjectType.php

namespace Sbtmapp\SbtmBundle\Form\Type;

use Sbtmapp\SbtmBundle\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ChooseProjectType extends AbstractType {

  

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('project', 'entity', array(
            'label' => 'Projects',
            'class' => 'SbtmappSbtmBundle:Project',
            'property' => 'project_name',
            'expanded' => false,
            'multiple' => FALSE));
    }

  
        public function getName() {
            return 'project';
        }

    
}
    