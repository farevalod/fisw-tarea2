<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.Event.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 18.10.2012, 21:48:17 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Coordinates
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Coordinates.php');

/**
 * include GameLog
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.GameLog.php');

/**
 * include Player
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Player.php');

/**
 * include Robot
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Robot.php');

/* user defined includes */
// section _469OMBluEeKPr6Lc_BpaNg-includes begin
// section _469OMBluEeKPr6Lc_BpaNg-includes end

/* user defined constants */
// section _469OMBluEeKPr6Lc_BpaNg-constants begin
// section _469OMBluEeKPr6Lc_BpaNg-constants end

/**
 * Short description of class Event
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Event
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 1

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute position
     *
     * @access public
     * @var Coordinates
     */
    public $position = null;

    /**
     * Short description of attribute time
     *
     * @access public
     * @var String
     */
    public $time = null;

    /**
     * Short description of attribute type_id
     *
     * @access public
     * @var Integer
     */
    public $type_id = null;

    /**
     * Short description of attribute id
     *
     * @access public
     * @var Integer
     */
    public $id = null;

    /**
     * Short description of attribute newAttr
     *
     * @access public
     */
    public $newAttr[ null | null | null ];

    // --- OPERATIONS ---

} /* end of class Event */

?>