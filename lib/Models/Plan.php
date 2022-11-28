<?php
/*
 * Plan
 */
namespace \Models;

/*
 * Plan
 */
class Plan {
    /* @var string $id  */
    private $id;
/* @var string $name  */
    private $name;
/* @var string $description  */
    private $description;
/* @var \\Models\Metadata $metadata  */
    private $metadata;
/* @var Bool $free  */
    private $free;
/* @var Bool $bindable  */
    private $bindable;
/* @var Bool $planUpdateable  */
    private $planUpdateable;
/* @var \\Models\SchemasObject $schemas  */
    private $schemas;
/* @var int $maximumPollingDuration  */
    private $maximumPollingDuration;
/* @var \\Models\MaintenanceInfo $maintenanceInfo  */
    private $maintenanceInfo;
/* @var Bool $bindingRotatable  */
    private $bindingRotatable;
}
