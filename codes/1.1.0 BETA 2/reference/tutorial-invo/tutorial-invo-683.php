<?php

/**
 * The start action, it shows the "search" view
 */
public function indexAction()
{
    $this->persistent->searchParams = null;
    $this->view->setVar("productTypes", ProductTypes::find());
}

