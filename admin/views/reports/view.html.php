<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Reports View for PVCFManager Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvcfmanagerViewReports extends JView
{
    /**
     * Reports view display method
     * @return void
     **/
    public function display($tpl = null)
    {
        JToolBarHelper::title(JText::_('PVCFManager Reports Manager'), 'generic.png');
        JToolBarHelper::deleteList();
        JToolBarHelper::editListX();
        JToolBarHelper::addNewX();

        $rows    = &$this->get('Data');
        $pagination = &$this->get('Pagination');

        $this->assignRef('rows', $rows);
        $this->assignRef('pagination', $pagination);

        parent::display($tpl);
    }
}
