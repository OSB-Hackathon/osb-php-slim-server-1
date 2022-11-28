<?php
/*
 * Service
 */
namespace \Models;

/*
 * Service
 */
class Service {
    /* @var string $name  */
    private $name;
/* @var string $id  */
    private $id;
/* @var string $description  */
    private $description;
/* @var string[] $tags  */
    private $tags;
/* @var string[] $requires  */
    private $requires;
/* @var Bool $bindable  */
    private $bindable;
/* @var Bool $instancesRetrievable  */
    private $instancesRetrievable;
/* @var Bool $bindingsRetrievable  */
    private $bindingsRetrievable;
/* @var Bool $allowContextUpdates  */
    private $allowContextUpdates;
/* @var \\Models\Metadata $metadata  */
    private $metadata;
/* @var \\Models\DashboardClient $dashboardClient  */
    private $dashboardClient;
/* @var Bool $bindingRotatable  */
    private $bindingRotatable;
/* @var Bool $planUpdateable  */
    private $planUpdateable;
/* @var \\Models\Plan[] $plans  */
    private $plans;
}
