<?php
/**
 * Open Service Broker API
 * @version master - might contain changes that are not yet released
 */

require_once __DIR__ . '/vendor/autoload.php';

$app = new Slim\App();


/**
 * GET catalog.get
 * Summary: get the catalog of services that the service broker offers
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->GET('/v2/catalog', function($request, $response, $args) {
            $headers = $request->getHeaders();
            
            
            
            $response->write('How about implementing catalog.get as a GET method ?');
            return $response;
            });


/**
 * PUT serviceBinding.binding
 * Summary: generation of a service binding
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->PUT('/v2/service_instances/{instance_id}/service_bindings/{binding_id}', function($request, $response, $args) {
            $headers = $request->getHeaders();
            $queryParams = $request->getQueryParams();
            $acceptsIncomplete = $queryParams['acceptsIncomplete'];    
            
            $body = $request->getParsedBody();
            $response->write('How about implementing serviceBinding.binding as a PUT method ?');
            return $response;
            });


/**
 * GET serviceBinding.get
 * Summary: gets a service binding
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->GET('/v2/service_instances/{instance_id}/service_bindings/{binding_id}', function($request, $response, $args) {
            $headers = $request->getHeaders();
            $queryParams = $request->getQueryParams();
            $serviceId = $queryParams['serviceId'];    $planId = $queryParams['planId'];    
            
            
            $response->write('How about implementing serviceBinding.get as a GET method ?');
            return $response;
            });


/**
 * GET serviceBinding.lastOperation.get
 * Summary: last requested operation state for service binding
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->GET('/v2/service_instances/{instance_id}/service_bindings/{binding_id}/last_operation', function($request, $response, $args) {
            $headers = $request->getHeaders();
            $queryParams = $request->getQueryParams();
            $serviceId = $queryParams['serviceId'];    $planId = $queryParams['planId'];    $operation = $queryParams['operation'];    
            
            
            $response->write('How about implementing serviceBinding.lastOperation.get as a GET method ?');
            return $response;
            });


/**
 * DELETE serviceBinding.unbinding
 * Summary: deprovision of a service binding
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->DELETE('/v2/service_instances/{instance_id}/service_bindings/{binding_id}', function($request, $response, $args) {
            $headers = $request->getHeaders();
            $queryParams = $request->getQueryParams();
            $serviceId = $queryParams['serviceId'];    $planId = $queryParams['planId'];    $acceptsIncomplete = $queryParams['acceptsIncomplete'];    
            
            
            $response->write('How about implementing serviceBinding.unbinding as a DELETE method ?');
            return $response;
            });


/**
 * DELETE serviceInstance.deprovision
 * Summary: deprovision a service instance
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->DELETE('/v2/service_instances/{instance_id}', function($request, $response, $args) {
            $headers = $request->getHeaders();
            $queryParams = $request->getQueryParams();
            $acceptsIncomplete = $queryParams['acceptsIncomplete'];    $serviceId = $queryParams['serviceId'];    $planId = $queryParams['planId'];    
            
            
            $response->write('How about implementing serviceInstance.deprovision as a DELETE method ?');
            return $response;
            });


/**
 * GET serviceInstance.get
 * Summary: gets a service instance
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->GET('/v2/service_instances/{instance_id}', function($request, $response, $args) {
            $headers = $request->getHeaders();
            $queryParams = $request->getQueryParams();
            $serviceId = $queryParams['serviceId'];    $planId = $queryParams['planId'];    
            
            
            $response->write('How about implementing serviceInstance.get as a GET method ?');
            return $response;
            });


/**
 * GET serviceInstance.lastOperation.get
 * Summary: last requested operation state for service instance
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->GET('/v2/service_instances/{instance_id}/last_operation', function($request, $response, $args) {
            $headers = $request->getHeaders();
            $queryParams = $request->getQueryParams();
            $serviceId = $queryParams['serviceId'];    $planId = $queryParams['planId'];    $operation = $queryParams['operation'];    
            
            
            $response->write('How about implementing serviceInstance.lastOperation.get as a GET method ?');
            return $response;
            });


/**
 * PUT serviceInstance.provision
 * Summary: provision a service instance
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->PUT('/v2/service_instances/{instance_id}', function($request, $response, $args) {
            $headers = $request->getHeaders();
            $queryParams = $request->getQueryParams();
            $acceptsIncomplete = $queryParams['acceptsIncomplete'];    
            
            $body = $request->getParsedBody();
            $response->write('How about implementing serviceInstance.provision as a PUT method ?');
            return $response;
            });


/**
 * PATCH serviceInstance.update
 * Summary: update a service instance
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->PATCH('/v2/service_instances/{instance_id}', function($request, $response, $args) {
            $headers = $request->getHeaders();
            $queryParams = $request->getQueryParams();
            $acceptsIncomplete = $queryParams['acceptsIncomplete'];    
            
            $body = $request->getParsedBody();
            $response->write('How about implementing serviceInstance.update as a PATCH method ?');
            return $response;
            });



$app->run();
