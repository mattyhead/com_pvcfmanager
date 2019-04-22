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
class TableReport extends JTable
{
    public $id;
    public $source;
    public $filer;
    public $reporturl;
    public $year;
    public $class;
    public $cycle;
    public $display;
    public $ordinal;
    public $reporttype;
    public $reportid;
    public $published;
    public $checked_out;
    public $checked_out_time;
    public $created;
    public $updated;

    /**
     * Define our table, index
     * @param [type] &$_db [description]
     */
    public function __construct(&$_db)
    {
        parent::__construct('#__pv_cf_reports', 'id', $_db);
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
