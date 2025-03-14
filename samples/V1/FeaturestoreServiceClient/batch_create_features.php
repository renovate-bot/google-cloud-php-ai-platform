<?php
/*
 * Copyright 2022 Google LLC
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

// [START aiplatform_v1_generated_FeaturestoreService_BatchCreateFeatures_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\AIPlatform\V1\BatchCreateFeaturesRequest;
use Google\Cloud\AIPlatform\V1\BatchCreateFeaturesResponse;
use Google\Cloud\AIPlatform\V1\Client\FeaturestoreServiceClient;
use Google\Cloud\AIPlatform\V1\CreateFeatureRequest;
use Google\Cloud\AIPlatform\V1\Feature;
use Google\Rpc\Status;

/**
 * Creates a batch of Features in a given EntityType.
 *
 * @param string $formattedParent         The resource name of the EntityType/FeatureGroup to create the
 *                                        batch of Features under. Format:
 *                                        `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
 *                                        `projects/{project}/locations/{location}/featureGroups/{feature_group}`
 *                                        Please see {@see FeaturestoreServiceClient::entityTypeName()} for help formatting this field.
 * @param string $formattedRequestsParent The resource name of the EntityType or FeatureGroup to create a
 *                                        Feature. Format for entity_type as parent:
 *                                        `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
 *                                        Format for feature_group as parent:
 *                                        `projects/{project}/locations/{location}/featureGroups/{feature_group}`
 *                                        Please see {@see FeaturestoreServiceClient::entityTypeName()} for help formatting this field.
 * @param string $requestsFeatureId       The ID to use for the Feature, which will become the final
 *                                        component of the Feature's resource name.
 *
 *                                        This value may be up to 128 characters, and valid characters are
 *                                        `[a-z0-9_]`. The first character cannot be a number.
 *
 *                                        The value must be unique within an EntityType/FeatureGroup.
 */
function batch_create_features_sample(
    string $formattedParent,
    string $formattedRequestsParent,
    string $requestsFeatureId
): void {
    // Create a client.
    $featurestoreServiceClient = new FeaturestoreServiceClient();

    // Prepare the request message.
    $requestsFeature = new Feature();
    $createFeatureRequest = (new CreateFeatureRequest())
        ->setParent($formattedRequestsParent)
        ->setFeature($requestsFeature)
        ->setFeatureId($requestsFeatureId);
    $requests = [$createFeatureRequest,];
    $request = (new BatchCreateFeaturesRequest())
        ->setParent($formattedParent)
        ->setRequests($requests);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $featurestoreServiceClient->batchCreateFeatures($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var BatchCreateFeaturesResponse $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
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
    $formattedParent = FeaturestoreServiceClient::entityTypeName(
        '[PROJECT]',
        '[LOCATION]',
        '[FEATURESTORE]',
        '[ENTITY_TYPE]'
    );
    $formattedRequestsParent = FeaturestoreServiceClient::entityTypeName(
        '[PROJECT]',
        '[LOCATION]',
        '[FEATURESTORE]',
        '[ENTITY_TYPE]'
    );
    $requestsFeatureId = '[FEATURE_ID]';

    batch_create_features_sample($formattedParent, $formattedRequestsParent, $requestsFeatureId);
}
// [END aiplatform_v1_generated_FeaturestoreService_BatchCreateFeatures_sync]
