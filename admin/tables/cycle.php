<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Item Table for PVCFManager Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class TableCycle extends JTable
{
    public $id;
    public $number;
    public $name;
    public $display;
    public $published;
    public $created;
    public $updated;

    /**
     * Define our table, index
     * @param [type] &$_db [description]
     */
    public function __construct(&$_db)
    {
        parent::__construct('#__pv_cf_cycles', 'id', $_db);
    }

    /**
     * Validate before saving
     * @return boolean
     */
    public function check()
    {
        $error = 0;

        // we need something for field
/*        if (!$this->field) {
            $this->setError(JText::_('VALIDATION FIELD REQUIRED'));
            $error++;
        }
*/
        if ($error) {
            return false;
        }
        return true;
    }
}
