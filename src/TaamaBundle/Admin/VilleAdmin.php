<?php
/**
 * Created by PhpStorm.
 * User: diadietraore
 * Date: 14/10/2017
 * Time: 23:17
 */

namespace TaamaBundle\Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class VilleAdmin extends AbstractAdmin{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', null, array(
                'label'    => 'Nom',
                'required' => true
            ))
            ->add('code_postal', null , array(
                'label'    => 'Code postal',
                'required' => false
            ))
            ->add('pays', 'entity',array(
                'class'          => 'TaamaBundle:Pays',
                'label'          => 'Pays',
                'by_reference'   => true,
                'multiple'       => false,
            ))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', null, array(
                'label' => 'Nom'
            ))
            ->add('_action', "actions", array(
                'actions' => array(
                    'edit'      => array(),
                    'delete'    => array()
                )
            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
        ;
    }

    public function getObjectMetadata($object)
    {
        return new Metadata($object->getName(), $object->getName());
    }

    public function getExportFormats()
    {
        return array();
    }

}