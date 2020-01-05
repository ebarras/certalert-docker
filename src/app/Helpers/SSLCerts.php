<?php

use Spatie\SslCertificate\SslCertificate;
use Spatie\SslCertificate\Exceptions\CouldNotDownloadCertificate;
use Spatie\SslCertificate\Exceptions\InvalidUrl;

if (!function_exists('DummyFunction')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function DummyFunction()
    {

    }
}

if (!function_exists('VerifySSLCertificate')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function VerifySSLCertificate($url)
    {
        try {
            $certificate = SslCertificate::createForHostName($url);
            $certificate_info = array(
            "cn" => $certificate->getDomain(),
            "expirationDate" => $certificate->expirationDate(),
            "validFromDate" => $certificate->validFromDate(),
            "issuer" => $certificate->getIssuer(),
            "fingerprint" => $certificate->getFingerprint(),
            "san" => $certificate->getAdditionalDomains()
            );
            return $certificate_info;
        }
        catch (CouldNotDownloadCertificate $ex ) {
            return "Error Downloading Certificate";
        }
        catch (InvalidUrl $ex ) {
            return "Invalid URL";
        }
    }
}