<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Report View for PVCFManager Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvcfmanagerViewReport extends JView
{
    /**
     * display method of Item view
     * @return void
     **/
    public function display($tpl = null)
    {
        // bring in classes
        $model = $this->getModel('Classes');
        $classes = $model->getData();
        $this->assignRef('classes', $classes);

        // bring in cycles
        $model = $this->getModel('cycles');
        $cycles = $model->getData();
        $this->assignRef('cycles', $cycles);

        $row = &$this->get('Data');

        $isNew = ($row->id < 1);

        $text = $isNew ? JText::_('New') : JText::_('Edit');
        JToolBarHelper::title(JText::_('Report') . ': <small><small>[ ' . $text . ' ]</small></small>');
        if ($isNew) {
            JToolBarHelper::save('save', 'Register');
            JToolBarHelper::cancel('cancel', 'Close');
            // We'll use a separate template for new items: default_add
            // $tpl = 'add';
        } else {
            // for existing items the button is renamed `close`
            JToolBarHelper::save('save', 'Update');
            JToolBarHelper::cancel('cancel', 'Close');
        }

        $this->assignRef('row', $row);
        $this->assignRef('isNew', $isNew);

        parent::display($tpl);
    }
}
