<?php

// Protected API routes
$router->group([
    'prefix' => 'api',
], function ($router) {
    // Dashboard Routes...
    $router->get('/stats', 'DashboardStatsController@index');

    // Workload Routes...
    $router->get('/workload', 'WorkloadController@index');

    // Master Supervisor Routes...
    $router->get('/masters', 'MasterSupervisorController@index');

    // Monitoring Routes...
    $router->get('/monitoring', 'MonitoringController@index');
    $router->post('/monitoring', 'MonitoringController@store');
    $router->get('/monitoring/{tag}', 'MonitoringController@paginate');
    $router->delete('/monitoring/{tag}', 'MonitoringController@destroy');

    // Job Metric Routes...
    $router->get('/metrics/jobs', 'JobMetricsController@index');
    $router->get('/metrics/jobs/{id}', 'JobMetricsController@show');

    // Queue Metric Routes...
    $router->get('/metrics/queues', 'QueueMetricsController@index');
    $router->get('/metrics/queues/{id}', 'QueueMetricsController@show');

    // Job Routes...
    $router->get('/jobs/recent', 'RecentJobsController@index');
    $router->get('/jobs/failed', 'FailedJobsController@index');
    $router->get('/jobs/failed/{id}', 'FailedJobsController@show');
    $router->post('/jobs/retry/{id}', 'RetryController@store');
});
