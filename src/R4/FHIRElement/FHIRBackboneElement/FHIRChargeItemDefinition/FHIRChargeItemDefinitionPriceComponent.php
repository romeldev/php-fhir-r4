<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition;

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
use Romeldev\FHIR\R4\FHIRElement\FHIRInvoicePriceComponentType;
use Romeldev\FHIR\R4\FHIRElement\FHIRMoney;
use Romeldev\FHIR\R4\FHIRStringPrimitive;
use Romeldev\FHIR\R4\PHPFHIRConfig;
use Romeldev\FHIR\R4\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4\PHPFHIRConstants;
use Romeldev\FHIR\R4\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4\PHPFHIRXmlWriter;

/**
 * The ChargeItemDefinition resource provides the properties that apply to the
 * (billing) codes necessary to calculate costs and prices. The properties may
 * differ largely depending on type and realm, therefore this resource gives only a
 * rough structure and requires profiling for each type of billing code system.
 *
 * Class FHIRChargeItemDefinitionPriceComponent
 * @package \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition
 */
class FHIRChargeItemDefinitionPriceComponent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION_DOT_PRICE_COMPONENT;

    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_CODE = 'code';
    const FIELD_FACTOR = 'factor';
    const FIELD_FACTOR_EXT = '_factor';
    const FIELD_AMOUNT = 'amount';

    /**
     * Codes indicating the kind of the price component.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This code identifies the type of the component.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRInvoicePriceComponentType
     */
    protected null|FHIRInvoicePriceComponentType $type = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that identifies the component. Codes may be used to differentiate between
     * kinds of taxes, surcharges, discounts etc.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The factor that has been applied on the base price for calculating this
     * component.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $factor = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount calculated for this component.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRMoney
     */
    protected null|FHIRMoney $amount = null;

    /**
     * Validation map for fields in type ChargeItemDefinition.PriceComponent
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRChargeItemDefinitionPriceComponent Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TYPE, $data) || array_key_exists(self::FIELD_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInvoicePriceComponentType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRInvoicePriceComponentType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRInvoicePriceComponentType([FHIRInvoicePriceComponentType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRInvoicePriceComponentType($ext));
            } else {
                $this->setType(new FHIRInvoicePriceComponentType(null));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_FACTOR, $data) || array_key_exists(self::FIELD_FACTOR_EXT, $data)) {
            $value = $data[self::FIELD_FACTOR] ?? null;
            $ext = (isset($data[self::FIELD_FACTOR_EXT]) && is_array($data[self::FIELD_FACTOR_EXT])) ? $data[self::FIELD_FACTOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setFactor($value);
                } else if (is_array($value)) {
                    $this->setFactor(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFactor(new FHIRDecimal($ext));
            } else {
                $this->setFactor(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_AMOUNT, $data)) {
            if ($data[self::FIELD_AMOUNT] instanceof FHIRMoney) {
                $this->setAmount($data[self::FIELD_AMOUNT]);
            } else {
                $this->setAmount(new FHIRMoney($data[self::FIELD_AMOUNT]));
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
     * Codes indicating the kind of the price component.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This code identifies the type of the component.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRInvoicePriceComponentType
     */
    public function getType(): null|FHIRInvoicePriceComponentType
    {
        return $this->type;
    }

    /**
     * Codes indicating the kind of the price component.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This code identifies the type of the component.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRInvoicePriceComponentType $type
     * @return static
     */
    public function setType(null|FHIRInvoicePriceComponentType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRInvoicePriceComponentType();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that identifies the component. Codes may be used to differentiate between
     * kinds of taxes, surcharges, discounts etc.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that identifies the component. Codes may be used to differentiate between
     * kinds of taxes, surcharges, discounts etc.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->code, $code);
        $this->code = $code;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The factor that has been applied on the base price for calculating this
     * component.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRDecimal
     */
    public function getFactor(): null|FHIRDecimal
    {
        return $this->factor;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The factor that has been applied on the base price for calculating this
     * component.
     *
     * @param null|string|float|int|\Romeldev\FHIR\R4\FHIRDecimalPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRDecimal $factor
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFactor(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $factor = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $factor && !($factor instanceof FHIRDecimal)) {
            $factor = new FHIRDecimal($factor);
        }
        $this->_trackValueSet($this->factor, $factor);
        if (!isset($this->_xmlLocations[self::FIELD_FACTOR])) {
            $this->_xmlLocations[self::FIELD_FACTOR] = [];
        }
        $this->_xmlLocations[self::FIELD_FACTOR][0] = $xmlLocation;
        $this->factor = $factor;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount calculated for this component.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRMoney
     */
    public function getAmount(): null|FHIRMoney
    {
        return $this->amount;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount calculated for this component.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRMoney $amount
     * @return static
     */
    public function setAmount(null|FHIRMoney $amount = null): self
    {
        if (null === $amount) {
            $amount = new FHIRMoney();
        }
        $this->_trackValueSet($this->amount, $amount);
        $this->amount = $amount;
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFactor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FACTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION_DOT_PRICE_COMPONENT, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION_DOT_PRICE_COMPONENT, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FACTOR])) {
            $v = $this->getFactor();
            foreach($validationRules[self::FIELD_FACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION_DOT_PRICE_COMPONENT, self::FIELD_FACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FACTOR])) {
                        $errs[self::FIELD_FACTOR] = [];
                    }
                    $errs[self::FIELD_FACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT])) {
            $v = $this->getAmount();
            foreach($validationRules[self::FIELD_AMOUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION_DOT_PRICE_COMPONENT, self::FIELD_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT])) {
                        $errs[self::FIELD_AMOUNT] = [];
                    }
                    $errs[self::FIELD_AMOUNT][$rule] = $err;
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
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPriceComponent $type
     * @param null|int|\Romeldev\FHIR\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPriceComponent
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
        } else if (!($type instanceof FHIRChargeItemDefinitionPriceComponent)) {
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
                $type->setType(FHIRInvoicePriceComponentType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CODE === $childName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FACTOR === $childName) {
                $type->setFactor(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AMOUNT === $childName) {
                $type->setAmount(FHIRMoney::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_FACTOR])) {
            $pt = $type->getFactor();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FACTOR], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFactor((string)$attributes[self::FIELD_FACTOR], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'ChargeItemDefinitionPriceComponent', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_FACTOR] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFactor())) {
            $xw->writeAttribute(self::FIELD_FACTOR, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCode())) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_FACTOR] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFactor())) {
            $xw->startElement(self::FIELD_FACTOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAmount())) {
            $xw->startElement(self::FIELD_AMOUNT);
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
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInvoicePriceComponentType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if (null !== ($v = $this->getFactor())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FACTOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FACTOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAmount())) {
            $out->{self::FIELD_AMOUNT} = $v;
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