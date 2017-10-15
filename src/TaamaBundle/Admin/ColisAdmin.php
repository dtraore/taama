<?php
namespace TaamaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Vich\UploaderBundle\Form\Type\VichFileType;

class ColisAdmin extends AbstractAdmin{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('poids', 'integer', array(
                'label'    => 'Poids',
                'required' => true
            ))
            ->add('ville_depart', 'entity', array(
                'label'    => 'Depart',
                'required' => true,
                'multiple' => false,
                'class' => 'TaamaBundle:Ville'
            ))
            ->add('ville_arrivee', 'entity', array(
                'label'    => 'Destination',
                'required' => true,
                'multiple' => false,
                'class' => 'TaamaBundle:Ville'
            ))
            ->add('date_depart', 'date', array(
                'label'    => 'Date de départ',
                'required' => true
            ))
            ->add('date_arrivee', 'date', array(
                'label'    => "Date d'arrivée ",
                'required' => true
            ))
            ->add('transporteur', 'entity',array(
                'class'          => 'UserBundle:User',
                'label'          => 'Transporteur',
                'by_reference'   => true,
                'multiple'       => false,
            ))
            /*
            ->add('logo', VichFileType::class, array(
                'required'      => false,
                'label'         => 'Image descriptive',
                'allow_delete'  => false,
                'download_link' => false
            ))*/
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('poids', null, array(
                'label' => 'Poids'
            ))
            ->addIdentifier('ville_depart', null, array(
                'label' => 'Ville Depart'
            ))
            ->addIdentifier('ville_arrivee', null, array(
                'label' => 'Ville arrivée'
            ))
            ->addIdentifier('date_depart', null, array(
                'label' => 'Date départ'
            ))
            ->addIdentifier('transporteur', null, array(
                'label' => 'Transporteur'
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