<?php
namespace UserBundle\Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin as BaseUserAdmin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

use FOS\UserBundle\Model\UserManagerInterface;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class UserAdmin extends BaseUserAdmin
{
    protected $translationDomain = "messages";
    /**
     * Ajout de l'action pour envoyer une demande de redéfinition de mot de passe
     * @param  ListMapper $listMapper [description]
     * @return [type]                 [description]
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('lastname')
            ->add('firstname')
            ->add('roles', null, array(
                'label'    => 'Rôle',
               // 'template' => 'ApplicationSonataUserBundle:Admin:user_list_roles.html.twig'
            ))
            ->add('_action', "actions", array(
                'actions' => array(
                    //'user.list' => array('template' => 'Rc2cRseBundle:Admin:list__action_user.list.html.twig'),
                    'edit'      => array(),
                    'delete'    => array()
                )
            ))
        ;

        parent::configureListFields($listMapper);

        $listMapper
            ->remove('username')
            ->remove('locked')
            ->remove('impersonating')
            ->remove('createdAt')
            ->remove('groups')
        ;
    }

    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('lastname', null, array(
                'label'    => 'rse.user.name.label',
                'required' => true
            ))
            ->add('firstname', null, array(
                'label'    => 'rse.user.firstname.label',
                'required' => true
            ))
            ->add('username', null, array(
                'label'    => 'rse.user.username.label',
                'required' => true
            ))
            ->add('email', null, array(
                'label'    => 'rse.user.email.label',
                'required' => true
            ))
        ;
        $password_required = ($this->getSubject()->getId() == null) ? true : false;
        $user = $this->getContainer()->get('security.token_storage')->getToken()->getUser();
        dump($user);
        $formMapper
            ->add('plainPassword', 'text', array(
                'label'    => 'rse.user.password.label',
                'required' => $password_required
            ))
            ->add('enabled', 'checkbox', array(
                'label'    => 'rse.user.enable.label',
                'required' => false
            ))
            /*->add('roles', 'sonata_security_roles', array(
                'label'       => false,
                'required'    => true,
                'expanded'    => true,
                'multiple'    => true
            ))*/
            ->add('roles', 'choice', array(
                'choices'     => \UserBundle\Entity\User::getRoleChoices($user->hasRole('ROLE_SUPER_ADMIN')),
                'label'       => 'ROle',
                'required'    => true,
                'expanded'    => true,
                'multiple'    => true
            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagrid)
    {
        $datagrid
            ->add('lastname')
            ->add('firstname')
            ->add('email')
        ;
    }

    /**
     * Ajout de la route reset_password
     * @param  RouteCollection $collection [description]
     * @return [type]                      [description]
     */
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('reset_password', $this->getRouterIdParameter().'/reset_password');
    }

    /**
     * {@inheritdoc}
     */
    public function getExportFormats()
    {
        return array();
    }

    /**
     * Override sort parameter
     * @return [type] [description]
     */
    public function getFilterParameters()
    {
        if($this->getRequest()->get('id'))
        {
           /* $this->datagridValues = array_merge(array(
                'company' => array(
                    'type' => 1,
                    'value' => $this->getRequest()->get('id')
                )
            ),
                $this->datagridValues

            );
           */

            return parent::getFilterParameters();
        }

        else
        {
            $parameters = parent::getFilterParameters();
            $parameters['_sort_order'] = "ASC";
            $parameters['_sort_by'] = 'name';
            return $parameters;
        }

    }

    protected function getContainer()
    {
        return $this->getConfigurationPool()->getContainer();
    }
}