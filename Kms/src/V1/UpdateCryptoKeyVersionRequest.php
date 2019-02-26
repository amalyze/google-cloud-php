<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeyManagementService.UpdateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKeyVersion].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.UpdateCryptoKeyVersionRequest</code>
 */
class UpdateCryptoKeyVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] with updated
     * values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion crypto_key_version = 1;</code>
     */
    private $crypto_key_version = null;
    /**
     * Required list of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Kms\V1\CryptoKeyVersion $crypto_key_version
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] with updated
     *           values.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required list of fields to be updated in this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] with updated
     * values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion crypto_key_version = 1;</code>
     * @return \Google\Cloud\Kms\V1\CryptoKeyVersion
     */
    public function getCryptoKeyVersion()
    {
        return $this->crypto_key_version;
    }

    /**
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] with updated
     * values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion crypto_key_version = 1;</code>
     * @param \Google\Cloud\Kms\V1\CryptoKeyVersion $var
     * @return $this
     */
    public function setCryptoKeyVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Kms\V1\CryptoKeyVersion::class);
        $this->crypto_key_version = $var;

        return $this;
    }

    /**
     * Required list of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Required list of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

