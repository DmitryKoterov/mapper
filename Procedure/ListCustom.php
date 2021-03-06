<?php
/**
 * Custom parametrized procedure.
 * Used for internal purposes only!
 */
class Mapper_Procedure_ListCustom extends Mapper_Procedure_List
{
	private $_inParams;
	private $_outParams;
	private $_name;
	private $_slot;
	
    public function __construct(
        Mapper_Context $context,
        $name,
        array $inParams,
        $outParams,
        $slot
    )
    {
        $this->_name = $name;
        $this->_inParams = $inParams;
        $this->_outParams = $outParams;
        $this->_slot = $slot;
        parent::__construct($context, $name);
    }
    
    public function getInParams()
    {
    	return $this->_inParams;
    }

    public function getOutParams()
    {
        return $this->_outParams;
    }
    
    public function getName()
    {
    	return $this->_name;    
    }

    public function createSlot()
    {
        return is_object($this->_slot)? clone $this->_slot : $this->_slot;    
    }
}
