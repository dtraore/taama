<?php
namespace TaamaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ColisAdmin extends AbstractAdmin{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('poids', 'integer', array(
                'label'    => 'Poids',
                'required' => false
            ))
            ->add('transporteur', 'entity',array(
                'class'          => 'UserBundle:User',
                'label'          => 'rse.thematic.label',
                'by_reference'   => true,
                'multiple'       => false,
            ))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('poids', null, array(
                'label' => 'rse.name.label'
            ))
            ->add('_action', "actions", array(
                'actions' => array(
                    //'user.list' => array('template' => 'Rc2cRseBundle:Admin:list__action_user.list.html.twig'),
                    'edit'      => array(),
                    'delete'    => array()
                )
            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('poids')
        ;
    }

    public function getObjectMetadata($object)
    {
        return new Metadata($object->getPoids(), $object->getPoids());
    }

    public function getExportFormats()
    {
        return array();
    }

}