<?php

use Hooks\AppMaintenance;
use Hooks\Authentication;

/**
 * Initialize middleware login conditions here
 */
Flight::before('start', function () {
    /**
     * Before the core controller starts execution
     */
    // check for server maintenance mode
    AppMaintenance::isRunning();

    // check if client request authorized or not
    Authentication::isAuthorized();
});

Flight::after('start', function () {
    /**
     * after the API process finished
     */
});
