<?php
/*
 * ServiceBindingResponse
 */
namespace \Models;

/*
 * ServiceBindingResponse
 */
class ServiceBindingResponse {
    /* @var \\Models\ServiceBindingMetadata $metadata  */
    private $metadata;
/* @var object $credentials  */
    private $credentials;
/* @var string $syslogDrainUrl  */
    private $syslogDrainUrl;
/* @var string $routeServiceUrl  */
    private $routeServiceUrl;
/* @var \\Models\ServiceBindingVolumeMount[] $volumeMounts  */
    private $volumeMounts;
/* @var \\Models\ServiceBindingEndpoint[] $endpoints  */
    private $endpoints;
}
