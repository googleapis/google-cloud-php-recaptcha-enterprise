<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1\WafSettings;

use UnexpectedValueException;

/**
 * Web Application Firewalls supported by reCAPTCHA.
 *
 * Protobuf type <code>google.cloud.recaptchaenterprise.v1.WafSettings.WafService</code>
 */
class WafService
{
    /**
     * Undefined WAF
     *
     * Generated from protobuf enum <code>WAF_SERVICE_UNSPECIFIED = 0;</code>
     */
    const WAF_SERVICE_UNSPECIFIED = 0;
    /**
     * Cloud Armor
     *
     * Generated from protobuf enum <code>CA = 1;</code>
     */
    const CA = 1;
    /**
     * Fastly
     *
     * Generated from protobuf enum <code>FASTLY = 3;</code>
     */
    const FASTLY = 3;
    /**
     * Cloudflare
     *
     * Generated from protobuf enum <code>CLOUDFLARE = 4;</code>
     */
    const CLOUDFLARE = 4;
    /**
     * Akamai
     *
     * Generated from protobuf enum <code>AKAMAI = 5;</code>
     */
    const AKAMAI = 5;

    private static $valueToName = [
        self::WAF_SERVICE_UNSPECIFIED => 'WAF_SERVICE_UNSPECIFIED',
        self::CA => 'CA',
        self::FASTLY => 'FASTLY',
        self::CLOUDFLARE => 'CLOUDFLARE',
        self::AKAMAI => 'AKAMAI',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


