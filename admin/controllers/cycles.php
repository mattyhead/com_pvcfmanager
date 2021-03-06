<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Cycles Controller for PVCFManager Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvcfmanagerControllerCycles extends PvcfmanagerController
{
    /**
     * Display the Cycles View
     * @return void
     */
    public function display()
    {
        JRequest::setVar('view', 'cycles');

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
        $mainframe->redirect('index.php?option=com_pvcfmanager&controller=cycle&task=edit&cid=' . $cid[0]);
    }

    /**
     * Redirect Add task to Cycle Controller
     * @return void
     */
    public function add()
    {
        $mainframe = JFactory::getApplication();
        $mainframe->redirect('index.php?option=com_pvcfmanager&controller=cycle&task=add&&cid=' . $cid[0]);
    }

    /**
     * Redirect Publish task to Cycle Controller
     * @return void
     */
    public function publish()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $model = $this->getModel('Cycles');
        $model->publish();
        $this->display();
    }
    
    /**
     * Redirect Unpublish task to Cycle Controller
     * @return void
     */
    public function unpublish()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $model = $this->getModel('Cycles');
        $model->unpublish();
        $this->display();
    }
}
