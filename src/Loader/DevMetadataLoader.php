<?php

declare(strict_types=1);

namespace GoetasWebservices\SoapServices\Metadata\Loader;

use GoetasWebservices\SoapServices\Metadata\Exception\MetadataException;
use GoetasWebservices\SoapServices\Metadata\Generator\MetadataGenerator;
use GoetasWebservices\XML\SOAPReader\SoapReader;
use GoetasWebservices\XML\WSDLReader\DefinitionsReader;

/**
 * This class is here to be used only while developing, should not be used on production.
 */
class DevMetadataLoader implements MetadataLoaderInterface
{
    /**
     * @var array
     */
    private $metadataCache = [];
    /**
     * @var MetadataGenerator
     */
    private $metadataGenerator;
    /**
     * @var DefinitionsReader
     */
    private $wsdlReader;
    /**
     * @var SoapReader
     */
    private $soapReader;

    public function __construct(MetadataGenerator $metadataGenerator, SoapReader $soapReader, DefinitionsReader $wsdlReader)
    {
        $this->metadataGenerator = $metadataGenerator;
        $this->wsdlReader = $wsdlReader;
        $this->soapReader = $soapReader;
    }

    public function load(string $wsdl): array
    {
        if (!isset($this->metadataCache[$wsdl])) {
            try {
                $definitions = $this->wsdlReader->readFile($wsdl);

                $services = [];
                foreach ($definitions->getServices() as $service) {
                    foreach ($service->getPorts() as $port) {
                        $services[] = $this->soapReader->getServiceByPort($port);
                    }
                }

                $this->metadataCache[$wsdl] = $this->metadataGenerator->generate($services);
            } catch (\Throwable $e) {
                throw new MetadataException(sprintf('Can not generate metadata information for %s', $wsdl), 0, $e);
            }
        }

        return $this->metadataCache[$wsdl];
    }
}
