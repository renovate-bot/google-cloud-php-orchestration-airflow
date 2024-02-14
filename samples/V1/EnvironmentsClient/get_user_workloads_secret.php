<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START composer_v1_generated_Environments_GetUserWorkloadsSecret_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Orchestration\Airflow\Service\V1\Client\EnvironmentsClient;
use Google\Cloud\Orchestration\Airflow\Service\V1\GetUserWorkloadsSecretRequest;
use Google\Cloud\Orchestration\Airflow\Service\V1\UserWorkloadsSecret;

/**
 * Gets an existing user workloads Secret.
 * Values of the "data" field in the response are cleared.
 *
 * This method is supported for Cloud Composer environments in versions
 * composer-3.*.*-airflow-*.*.* and newer.
 *
 * @param string $formattedName The resource name of the Secret to get, in the form:
 *                              "projects/{projectId}/locations/{locationId}/environments/{environmentId}/userWorkloadsSecrets/{userWorkloadsSecretId}"
 *                              Please see {@see EnvironmentsClient::userWorkloadsSecretName()} for help formatting this field.
 */
function get_user_workloads_secret_sample(string $formattedName): void
{
    // Create a client.
    $environmentsClient = new EnvironmentsClient();

    // Prepare the request message.
    $request = (new GetUserWorkloadsSecretRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var UserWorkloadsSecret $response */
        $response = $environmentsClient->getUserWorkloadsSecret($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = EnvironmentsClient::userWorkloadsSecretName(
        '[PROJECT]',
        '[LOCATION]',
        '[ENVIRONMENT]',
        '[USER_WORKLOADS_SECRET]'
    );

    get_user_workloads_secret_sample($formattedName);
}
// [END composer_v1_generated_Environments_GetUserWorkloadsSecret_sync]
