<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.Player.php
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
 * include Event
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Event.php');

/**
 * include Item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Item.php');

/**
 * include Team
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Team.php');

/* user defined includes */
// section _UcPq4BltEeKPr6Lc_BpaNg-includes begin
// section _UcPq4BltEeKPr6Lc_BpaNg-includes end

/* user defined constants */
// section _UcPq4BltEeKPr6Lc_BpaNg-constants begin
// section _UcPq4BltEeKPr6Lc_BpaNg-constants end

/**
 * Short description of class Player
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Player
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute name
     *
     * @access public
     * @var String
     */
    public $name = null;

    /**
     * Short description of attribute position
     *
     * @access public
     * @var Coordinates
     */
    public $position = null;

    /**
     * Short description of attribute score
     *
     * @access public
     * @var Integer
     */
    public $score = null;

    /**
     * Short description of attribute armor
     *
     * @access public
     * @var Integer
     */
    public $armor = null;

    // --- OPERATIONS ---

} /* end of class Player */

?>