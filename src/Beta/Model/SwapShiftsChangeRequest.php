<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SwapShiftsChangeRequest File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* SwapShiftsChangeRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SwapShiftsChangeRequest extends ShiftChangeRequest
{
    /**
    * Gets the recipientShiftId
    *
    * @return string The recipientShiftId
    */
    public function getRecipientShiftId()
    {
        if (array_key_exists("recipientShiftId", $this->_propDict)) {
            return $this->_propDict["recipientShiftId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recipientShiftId
    *
    * @param string $val The recipientShiftId
    *
    * @return SwapShiftsChangeRequest
    */
    public function setRecipientShiftId($val)
    {
        $this->_propDict["recipientShiftId"] = $val;
        return $this;
    }
    
}