<?php

// Import from Akeneo Pim every day at midnight
$jobs[] = [
    'name'                  => 'akeneo-import',
    'command'               => '$PHP_BIN vendor/bin/console akeneo:import',
    'schedule'              => '0 0 * * *',
    'enable'                => true,
    'run_on_non_production' => false,
    'stores'                => ['DE'],
];