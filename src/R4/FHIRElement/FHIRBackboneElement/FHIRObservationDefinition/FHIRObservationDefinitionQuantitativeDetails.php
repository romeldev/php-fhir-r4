<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

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

use Romeldev\FHIR\R4\FHIRDecimalPrimitive;
use Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement;
use Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use Romeldev\FHIR\R4\FHIRElement\FHIRDecimal;
use Romeldev\FHIR\R4\FHIRElement\FHIRExtension;
use Romeldev\FHIR\R4\FHIRElement\FHIRInteger;
use Romeldev\FHIR\R4\FHIRIntegerPrimitive;
use Romeldev\FHIR\R4\FHIRStringPrimitive;
use Romeldev\FHIR\R4\PHPFHIRConfig;
use Romeldev\FHIR\R4\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4\PHPFHIRConstants;
use Romeldev\FHIR\R4\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4\PHPFHIRXmlWriter;

/**
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 *
 * Class FHIRObservationDefinitionQuantitativeDetails
 * @package \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition
 */
class FHIRObservationDefinitionQuantitativeDetails extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS;

    const FIELD_CUSTOMARY_UNIT = 'customaryUnit';
    const FIELD_UNIT = 'unit';
    const FIELD_CONVERSION_FACTOR = 'conversionFactor';
    const FIELD_CONVERSION_FACTOR_EXT = '_conversionFactor';
    const FIELD_DECIMAL_PRECISION = 'decimalPrecision';
    const FIELD_DECIMAL_PRECISION_EXT = '_decimalPrecision';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Customary unit used to report quantitative results of observations conforming to
     * this ObservationDefinition.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $customaryUnit = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * SI unit used to report quantitative results of observations conforming to this
     * ObservationDefinition.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $unit = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Factor for converting value expressed with SI unit to value expressed with
     * customary unit.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $conversionFactor = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of digits after decimal separator when the results of such observations
     * are of type Quantity.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $decimalPrecision = null;

    /**
     * Validation map for fields in type ObservationDefinition.QuantitativeDetails
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRObservationDefinitionQuantitativeDetails Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_CUSTOMARY_UNIT, $data)) {
            if ($data[self::FIELD_CUSTOMARY_UNIT] instanceof FHIRCodeableConcept) {
                $this->setCustomaryUnit($data[self::FIELD_CUSTOMARY_UNIT]);
            } else {
                $this->setCustomaryUnit(new FHIRCodeableConcept($data[self::FIELD_CUSTOMARY_UNIT]));
            }
        }
        if (array_key_exists(self::FIELD_UNIT, $data)) {
            if ($data[self::FIELD_UNIT] instanceof FHIRCodeableConcept) {
                $this->setUnit($data[self::FIELD_UNIT]);
            } else {
                $this->setUnit(new FHIRCodeableConcept($data[self::FIELD_UNIT]));
            }
        }
        if (array_key_exists(self::FIELD_CONVERSION_FACTOR, $data) || array_key_exists(self::FIELD_CONVERSION_FACTOR_EXT, $data)) {
            $value = $data[self::FIELD_CONVERSION_FACTOR] ?? null;
            $ext = (isset($data[self::FIELD_CONVERSION_FACTOR_EXT]) && is_array($data[self::FIELD_CONVERSION_FACTOR_EXT])) ? $data[self::FIELD_CONVERSION_FACTOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setConversionFactor($value);
                } else if (is_array($value)) {
                    $this->setConversionFactor(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setConversionFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConversionFactor(new FHIRDecimal($ext));
            } else {
                $this->setConversionFactor(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_DECIMAL_PRECISION, $data) || array_key_exists(self::FIELD_DECIMAL_PRECISION_EXT, $data)) {
            $value = $data[self::FIELD_DECIMAL_PRECISION] ?? null;
            $ext = (isset($data[self::FIELD_DECIMAL_PRECISION_EXT]) && is_array($data[self::FIELD_DECIMAL_PRECISION_EXT])) ? $data[self::FIELD_DECIMAL_PRECISION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDecimalPrecision($value);
                } else if (is_array($value)) {
                    $this->setDecimalPrecision(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDecimalPrecision(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDecimalPrecision(new FHIRInteger($ext));
            } else {
                $this->setDecimalPrecision(new FHIRInteger(null));
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
     * Customary unit used to report quantitative results of observations conforming to
     * this ObservationDefinition.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCustomaryUnit(): null|FHIRCodeableConcept
    {
        return $this->customaryUnit;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Customary unit used to report quantitative results of observations conforming to
     * this ObservationDefinition.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $customaryUnit
     * @return static
     */
    public function setCustomaryUnit(null|FHIRCodeableConcept $customaryUnit = null): self
    {
        if (null === $customaryUnit) {
            $customaryUnit = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->customaryUnit, $customaryUnit);
        $this->customaryUnit = $customaryUnit;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * SI unit used to report quantitative results of observations conforming to this
     * ObservationDefinition.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getUnit(): null|FHIRCodeableConcept
    {
        return $this->unit;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * SI unit used to report quantitative results of observations conforming to this
     * ObservationDefinition.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $unit
     * @return static
     */
    public function setUnit(null|FHIRCodeableConcept $unit = null): self
    {
        if (null === $unit) {
            $unit = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->unit, $unit);
        $this->unit = $unit;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Factor for converting value expressed with SI unit to value expressed with
     * customary unit.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRDecimal
     */
    public function getConversionFactor(): null|FHIRDecimal
    {
        return $this->conversionFactor;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Factor for converting value expressed with SI unit to value expressed with
     * customary unit.
     *
     * @param null|string|float|int|\Romeldev\FHIR\R4\FHIRDecimalPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRDecimal $conversionFactor
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setConversionFactor(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $conversionFactor = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $conversionFactor && !($conversionFactor instanceof FHIRDecimal)) {
            $conversionFactor = new FHIRDecimal($conversionFactor);
        }
        $this->_trackValueSet($this->conversionFactor, $conversionFactor);
        if (!isset($this->_xmlLocations[self::FIELD_CONVERSION_FACTOR])) {
            $this->_xmlLocations[self::FIELD_CONVERSION_FACTOR] = [];
        }
        $this->_xmlLocations[self::FIELD_CONVERSION_FACTOR][0] = $xmlLocation;
        $this->conversionFactor = $conversionFactor;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of digits after decimal separator when the results of such observations
     * are of type Quantity.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRInteger
     */
    public function getDecimalPrecision(): null|FHIRInteger
    {
        return $this->decimalPrecision;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of digits after decimal separator when the results of such observations
     * are of type Quantity.
     *
     * @param null|string|int|float|\Romeldev\FHIR\R4\FHIRIntegerPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRInteger $decimalPrecision
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDecimalPrecision(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $decimalPrecision = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $decimalPrecision && !($decimalPrecision instanceof FHIRInteger)) {
            $decimalPrecision = new FHIRInteger($decimalPrecision);
        }
        $this->_trackValueSet($this->decimalPrecision, $decimalPrecision);
        if (!isset($this->_xmlLocations[self::FIELD_DECIMAL_PRECISION])) {
            $this->_xmlLocations[self::FIELD_DECIMAL_PRECISION] = [];
        }
        $this->_xmlLocations[self::FIELD_DECIMAL_PRECISION][0] = $xmlLocation;
        $this->decimalPrecision = $decimalPrecision;
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
        if (null !== ($v = $this->getCustomaryUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CUSTOMARY_UNIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConversionFactor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONVERSION_FACTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDecimalPrecision())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DECIMAL_PRECISION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CUSTOMARY_UNIT])) {
            $v = $this->getCustomaryUnit();
            foreach($validationRules[self::FIELD_CUSTOMARY_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS, self::FIELD_CUSTOMARY_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CUSTOMARY_UNIT])) {
                        $errs[self::FIELD_CUSTOMARY_UNIT] = [];
                    }
                    $errs[self::FIELD_CUSTOMARY_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT])) {
            $v = $this->getUnit();
            foreach($validationRules[self::FIELD_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS, self::FIELD_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT])) {
                        $errs[self::FIELD_UNIT] = [];
                    }
                    $errs[self::FIELD_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONVERSION_FACTOR])) {
            $v = $this->getConversionFactor();
            foreach($validationRules[self::FIELD_CONVERSION_FACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS, self::FIELD_CONVERSION_FACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONVERSION_FACTOR])) {
                        $errs[self::FIELD_CONVERSION_FACTOR] = [];
                    }
                    $errs[self::FIELD_CONVERSION_FACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECIMAL_PRECISION])) {
            $v = $this->getDecimalPrecision();
            foreach($validationRules[self::FIELD_DECIMAL_PRECISION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS, self::FIELD_DECIMAL_PRECISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECIMAL_PRECISION])) {
                        $errs[self::FIELD_DECIMAL_PRECISION] = [];
                    }
                    $errs[self::FIELD_DECIMAL_PRECISION][$rule] = $err;
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
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails $type
     * @param null|int|\Romeldev\FHIR\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
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
        } else if (!($type instanceof FHIRObservationDefinitionQuantitativeDetails)) {
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
            if (self::FIELD_CUSTOMARY_UNIT === $childName) {
                $type->setCustomaryUnit(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_UNIT === $childName) {
                $type->setUnit(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONVERSION_FACTOR === $childName) {
                $type->setConversionFactor(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DECIMAL_PRECISION === $childName) {
                $type->setDecimalPrecision(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_CONVERSION_FACTOR])) {
            $pt = $type->getConversionFactor();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONVERSION_FACTOR], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setConversionFactor((string)$attributes[self::FIELD_CONVERSION_FACTOR], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DECIMAL_PRECISION])) {
            $pt = $type->getDecimalPrecision();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DECIMAL_PRECISION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDecimalPrecision((string)$attributes[self::FIELD_DECIMAL_PRECISION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
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
            $xw->openRootNode($config, 'ObservationDefinitionQuantitativeDetails', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_CONVERSION_FACTOR] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getConversionFactor())) {
            $xw->writeAttribute(self::FIELD_CONVERSION_FACTOR, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DECIMAL_PRECISION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDecimalPrecision())) {
            $xw->writeAttribute(self::FIELD_DECIMAL_PRECISION, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getCustomaryUnit())) {
            $xw->startElement(self::FIELD_CUSTOMARY_UNIT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getUnit())) {
            $xw->startElement(self::FIELD_UNIT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CONVERSION_FACTOR] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getConversionFactor())) {
            $xw->startElement(self::FIELD_CONVERSION_FACTOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DECIMAL_PRECISION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDecimalPrecision())) {
            $xw->startElement(self::FIELD_DECIMAL_PRECISION);
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
        if (null !== ($v = $this->getCustomaryUnit())) {
            $out->{self::FIELD_CUSTOMARY_UNIT} = $v;
        }
        if (null !== ($v = $this->getUnit())) {
            $out->{self::FIELD_UNIT} = $v;
        }
        if (null !== ($v = $this->getConversionFactor())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONVERSION_FACTOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONVERSION_FACTOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDecimalPrecision())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DECIMAL_PRECISION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DECIMAL_PRECISION_EXT} = $ext;
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