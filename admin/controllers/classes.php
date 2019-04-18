<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Classes Controller for PVCFManager Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvcfmanagerControllerClasses extends PvcfmanagerController
{
    /**
     * Display the Classes View
     * @return void
     */
    public function display()
    {
        JRequest::setVar('view', 'classes');

        parent::display();
    }

    /**
     * Redirect Edit task to Cycle Controller
     * @return void
     */
    public function edit()
    {
        $mainframe = JFactory::getApplication();
        $cid       = JRequest::getVar('cid');
        $mainframe->redirect('index.php?option=com_pvcfmanager&controller=class&task=edit&cid=' . $cid[0]);
    }

    public function add()
    {
        $mainframe = JFactory::getApplication();
        $mainframe->redirect('index.php?option=com_pvcfmanager&controller=class&task=add&&cid=' . $cid[0]);
    }

    public function publish()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $model = $this->getModel('Classes');
        $model->publish();
        $this->display();
    }

    public function unpublish()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $model = $this->getModel('Classes');
        $model->unpublish();
        $this->display();
    }
}