<?php
namespace UserBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends AbstractAdmin{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            /*->addIdentifier('username', null, array(
                'label' => 'rse.name.label'
            ))*/
            ->addIdentifier('firstname', null, array(
                'label' => 'Prenom'
            ))
            ->addIdentifier('lastname', null, array(
                'label' => 'Nom'
            ))
            ->addIdentifier('email', null, array(
                'label' => 'Email'
            ))
            ->addIdentifier('plainPassword', null, array(
                'label' => 'Mot de passe'
            ))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
           /* ->addIdentifier('username', null, array(
                'label' => "Nom d'utilisateur"
            ))*/
            ->addIdentifier('firstname', null, array(
                'label' => 'Prenom'
            ))
            ->addIdentifier('lastname', null, array(
                'label' => 'Nom'
            ))
            ->addIdentifier('email', null, array(
                'label' => 'Email'
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
            ->add('firstname')
            ->add('lastname')
            ->add('username')
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