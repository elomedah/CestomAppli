<?php

namespace Cestom\ArticleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', "text")
            ->add('introImgFile', "file")
            ->add('fullImg', "text")
            ->add('introduction', "textarea")
            ->add('contenu', "textarea")
            ->add('debutDePublication', "datetime",
				array(
					"widget" => "single_text",
					"required" => false,
				)
			)
            ->add('finDePublication', "datetime",
				array(
					"widget" => "single_text",
					"required" => false,
				)
			)
            ->add('categorie', 'entity',
				array(
					"class" => "CestomArticleBundle:Categorie",
					"property" => "categorie",
				)
			)
            ->add('pays', 'entity',
				array(
					"class" => "CestomArticleBundle:Pays",
					"property" => "pays",
				)
			)
            ->add('liens', 'collection',
				array(
					"type" => new LienType(),
					"allow_add" => true,
					"allow_delete" => true,
					"by_reference" => false,
				)
			)
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cestom\ArticleBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cestom_articlebundle_article';
    }
}
