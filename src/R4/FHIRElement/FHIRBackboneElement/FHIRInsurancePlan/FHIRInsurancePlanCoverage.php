<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 27th, 2024 20:34+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement;
use Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use Romeldev\FHIR\R4\FHIRElement\FHIRExtension;
use Romeldev\FHIR\R4\FHIRElement\FHIRReference;
use Romeldev\FHIR\R4\FHIRStringPrimitive;
use Romeldev\FHIR\R4\PHPFHIRConfig;
use Romeldev\FHIR\R4\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4\PHPFHIRConstants;
use Romeldev\FHIR\R4\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4\PHPFHIRXmlWriter;

/**
 * Details of a Health Insurance product/plan provided by an organization.
 *
 * Class FHIRInsurancePlanCoverage
 * @package \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan
 */
class FHIRInsurancePlanCoverage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_COVERAGE;

    const FIELD_TYPE = 'type';
    const FIELD_NETWORK = 'network';
    const FIELD_BENEFIT = 'benefit';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of coverage (Medical; Dental; Mental Health; Substance Abuse; Vision; Drug;
     * Short Term; Long Term Care; Hospice; Home Health).
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the network that providing the type of coverage.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $network = [];
    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Specific benefits under this type of coverage.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanBenefit[]
     */
    protected null|array $benefit = [];

    /**
     * Validation map for fields in type InsurancePlan.Coverage
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_BENEFIT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRInsurancePlanCoverage Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_NETWORK, $data)) {
            if (is_array($data[self::FIELD_NETWORK])) {
                foreach($data[self::FIELD_NETWORK] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addNetwork($v);
                    } else {
                        $this->addNetwork(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_NETWORK] instanceof FHIRReference) {
                $this->addNetwork($data[self::FIELD_NETWORK]);
            } else {
                $this->addNetwork(new FHIRReference($data[self::FIELD_NETWORK]));
            }
        }
        if (array_key_exists(self::FIELD_BENEFIT, $data)) {
            if (is_array($data[self::FIELD_BENEFIT])) {
                foreach($data[self::FIELD_BENEFIT] as $v) {
                    if ($v instanceof FHIRInsurancePlanBenefit) {
                        $this->addBenefit($v);
                    } else {
                        $this->addBenefit(new FHIRInsurancePlanBenefit($v));
                    }
                }
            } elseif ($data[self::FIELD_BENEFIT] instanceof FHIRInsurancePlanBenefit) {
                $this->addBenefit($data[self::FIELD_BENEFIT]);
            } else {
                $this->addBenefit(new FHIRInsurancePlanBenefit($data[self::FIELD_BENEFIT]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of coverage (Medical; Dental; Mental Health; Substance Abuse; Vision; Drug;
     * Short Term; Long Term Care; Hospice; Home Health).
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of coverage (Medical; Dental; Mental Health; Substance Abuse; Vision; Drug;
     * Short Term; Long Term Care; Hospice; Home Health).
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the network that providing the type of coverage.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getNetwork(): null|array
    {
        return $this->network;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the network that providing the type of coverage.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference $network
     * @return static
     */
    public function addNetwork(null|FHIRReference $network = null): self
    {
        if (null === $network) {
            $network = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->network[] = $network;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the network that providing the type of coverage.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRReference ...$network
     * @return static
     */
    public function setNetwork(FHIRReference ...$network): self
    {
        if ([] !== $this->network) {
            $this->_trackValuesRemoved(count($this->network));
            $this->network = [];
        }
        if ([] === $network) {
            return $this;
        }
        foreach($network as $v) {
            $this->addNetwork($v);
        }
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Specific benefits under this type of coverage.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanBenefit[]
     */
    public function getBenefit(): null|array
    {
        return $this->benefit;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Specific benefits under this type of coverage.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanBenefit $benefit
     * @return static
     */
    public function addBenefit(null|FHIRInsurancePlanBenefit $benefit = null): self
    {
        if (null === $benefit) {
            $benefit = new FHIRInsurancePlanBenefit();
        }
        $this->_trackValueAdded();
        $this->benefit[] = $benefit;
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Specific benefits under this type of coverage.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanBenefit ...$benefit
     * @return static
     */
    public function setBenefit(FHIRInsurancePlanBenefit ...$benefit): self
    {
        if ([] !== $this->benefit) {
            $this->_trackValuesRemoved(count($this->benefit));
            $this->benefit = [];
        }
        if ([] === $benefit) {
            return $this;
        }
        foreach($benefit as $v) {
            $this->addBenefit($v);
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNetwork())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NETWORK, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getBenefit())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BENEFIT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_COVERAGE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NETWORK])) {
            $v = $this->getNetwork();
            foreach($validationRules[self::FIELD_NETWORK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_COVERAGE, self::FIELD_NETWORK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NETWORK])) {
                        $errs[self::FIELD_NETWORK] = [];
                    }
                    $errs[self::FIELD_NETWORK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BENEFIT])) {
            $v = $this->getBenefit();
            foreach($validationRules[self::FIELD_BENEFIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_COVERAGE, self::FIELD_BENEFIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BENEFIT])) {
                        $errs[self::FIELD_BENEFIT] = [];
                    }
                    $errs[self::FIELD_BENEFIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage $type
     * @param null|int|\Romeldev\FHIR\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRInsurancePlanCoverage)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NETWORK === $childName) {
                $type->addNetwork(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BENEFIT === $childName) {
                $type->addBenefit(FHIRInsurancePlanBenefit::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\Romeldev\FHIR\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\Romeldev\FHIR\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \Romeldev\FHIR\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'InsurancePlanCoverage', $this->_getSourceXmlns());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNetwork() as $v) {
            $xw->startElement(self::FIELD_NETWORK);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getBenefit() as $v) {
            $xw->startElement(self::FIELD_BENEFIT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getNetwork())) {
            $out->{self::FIELD_NETWORK} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NETWORK}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getBenefit())) {
            $out->{self::FIELD_BENEFIT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_BENEFIT}[] = $v;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}