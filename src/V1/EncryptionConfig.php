<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The encryption options for the Cloud Composer environment
 * and its dependencies.Supported for Cloud Composer environments in versions
 * composer-1.*.*-airflow-*.*.*.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.EncryptionConfig</code>
 */
class EncryptionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Customer-managed Encryption Key available through Google's Key
     * Management Service. Cannot be updated. If not specified, Google-managed key
     * will be used.
     *
     * Generated from protobuf field <code>string kms_key_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $kms_key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kms_key_name
     *           Optional. Customer-managed Encryption Key available through Google's Key
     *           Management Service. Cannot be updated. If not specified, Google-managed key
     *           will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Customer-managed Encryption Key available through Google's Key
     * Management Service. Cannot be updated. If not specified, Google-managed key
     * will be used.
     *
     * Generated from protobuf field <code>string kms_key_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * Optional. Customer-managed Encryption Key available through Google's Key
     * Management Service. Cannot be updated. If not specified, Google-managed key
     * will be used.
     *
     * Generated from protobuf field <code>string kms_key_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

}

