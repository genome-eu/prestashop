<?php

/**
 * @package       GENOME Payment Module for Prestashop
 * @copyright     (c) 2020 GENOME. All rights reserved.
 * @license       BSD 2 License
 */

class AdminGenomeController extends ModuleAdminController
{
    public function __construct()
    {
        $this->table = 'genome_pminfo';
        $this->className = 'GenomePaymentMethod';
        $this->position_identifier = 'position';
        $this->show_toolbar = false;
        $this->_orderBy = 'position';
        $this->bulk_actions = array();
        $this->shopLinkType = 'shop';
        $this->list_simple_header = true;

        parent::__construct();

        // Enable bootstrap
        $this->bootstrap = true;

    }

    public function initToolbar()
    {
        $this->toolbar_btn = array();
    }
}
