<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4\FHIRResource\FHIRDomainResource;

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

use Romeldev\FHIR\R4\FHIRBooleanPrimitive;
use Romeldev\FHIR\R4\FHIRCodePrimitive;
use Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSpecifiedSubstance;
use Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSubstance;
use Romeldev\FHIR\R4\FHIRElement\FHIRBoolean;
use Romeldev\FHIR\R4\FHIRElement\FHIRCode;
use Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use Romeldev\FHIR\R4\FHIRElement\FHIRExtension;
use Romeldev\FHIR\R4\FHIRElement\FHIRId;
use Romeldev\FHIR\R4\FHIRElement\FHIRIdentifier;
use Romeldev\FHIR\R4\FHIRElement\FHIRMeta;
use Romeldev\FHIR\R4\FHIRElement\FHIRNarrative;
use Romeldev\FHIR\R4\FHIRElement\FHIRReference;
use Romeldev\FHIR\R4\FHIRElement\FHIRUri;
use Romeldev\FHIR\R4\FHIRIdPrimitive;
use Romeldev\FHIR\R4\FHIRResource\FHIRDomainResource;
use Romeldev\FHIR\R4\FHIRUriPrimitive;
use Romeldev\FHIR\R4\PHPFHIRConfig;
use Romeldev\FHIR\R4\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4\PHPFHIRConstants;
use Romeldev\FHIR\R4\PHPFHIRContainedTypeInterface;
use Romeldev\FHIR\R4\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4\PHPFHIRTypeMap;
use Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4\PHPFHIRXmlWriter;

/**
 * An ingredient of a manufactured item or pharmaceutical product.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicinalProductIngredient
 * @package \Romeldev\FHIR\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductIngredient extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INGREDIENT;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_ROLE = 'role';
    const FIELD_ALLERGENIC_INDICATOR = 'allergenicIndicator';
    const FIELD_ALLERGENIC_INDICATOR_EXT = '_allergenicIndicator';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_SPECIFIED_SUBSTANCE = 'specifiedSubstance';
    const FIELD_SUBSTANCE = 'substance';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier(s) of this Ingredient that are assigned by business processes
     * and/or used to refer to it when a direct URL reference to the resource itself is
     * not appropriate.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $identifier = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ingredient role e.g. Active ingredient, excipient.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $role = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the ingredient is a known or suspected allergen.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $allergenicIndicator = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this Ingredient.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $manufacturer = [];
    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * A specified substance that comprises this ingredient.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSpecifiedSubstance[]
     */
    protected null|array $specifiedSubstance = [];
    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * The ingredient substance.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSubstance
     */
    protected null|FHIRMedicinalProductIngredientSubstance $substance = null;

    /**
     * Validation map for fields in type MedicinalProductIngredient
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_ROLE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRMedicinalProductIngredient Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_ROLE, $data)) {
            if ($data[self::FIELD_ROLE] instanceof FHIRCodeableConcept) {
                $this->setRole($data[self::FIELD_ROLE]);
            } else {
                $this->setRole(new FHIRCodeableConcept($data[self::FIELD_ROLE]));
            }
        }
        if (array_key_exists(self::FIELD_ALLERGENIC_INDICATOR, $data) || array_key_exists(self::FIELD_ALLERGENIC_INDICATOR_EXT, $data)) {
            $value = $data[self::FIELD_ALLERGENIC_INDICATOR] ?? null;
            $ext = (isset($data[self::FIELD_ALLERGENIC_INDICATOR_EXT]) && is_array($data[self::FIELD_ALLERGENIC_INDICATOR_EXT])) ? $data[self::FIELD_ALLERGENIC_INDICATOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAllergenicIndicator($value);
                } else if (is_array($value)) {
                    $this->setAllergenicIndicator(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAllergenicIndicator(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAllergenicIndicator(new FHIRBoolean($ext));
            } else {
                $this->setAllergenicIndicator(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_MANUFACTURER, $data)) {
            if (is_array($data[self::FIELD_MANUFACTURER])) {
                foreach($data[self::FIELD_MANUFACTURER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addManufacturer($v);
                    } else {
                        $this->addManufacturer(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_MANUFACTURER] instanceof FHIRReference) {
                $this->addManufacturer($data[self::FIELD_MANUFACTURER]);
            } else {
                $this->addManufacturer(new FHIRReference($data[self::FIELD_MANUFACTURER]));
            }
        }
        if (array_key_exists(self::FIELD_SPECIFIED_SUBSTANCE, $data)) {
            if (is_array($data[self::FIELD_SPECIFIED_SUBSTANCE])) {
                foreach($data[self::FIELD_SPECIFIED_SUBSTANCE] as $v) {
                    if ($v instanceof FHIRMedicinalProductIngredientSpecifiedSubstance) {
                        $this->addSpecifiedSubstance($v);
                    } else {
                        $this->addSpecifiedSubstance(new FHIRMedicinalProductIngredientSpecifiedSubstance($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIFIED_SUBSTANCE] instanceof FHIRMedicinalProductIngredientSpecifiedSubstance) {
                $this->addSpecifiedSubstance($data[self::FIELD_SPECIFIED_SUBSTANCE]);
            } else {
                $this->addSpecifiedSubstance(new FHIRMedicinalProductIngredientSpecifiedSubstance($data[self::FIELD_SPECIFIED_SUBSTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSTANCE, $data)) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRMedicinalProductIngredientSubstance) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRMedicinalProductIngredientSubstance($data[self::FIELD_SUBSTANCE]));
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier(s) of this Ingredient that are assigned by business processes
     * and/or used to refer to it when a direct URL reference to the resource itself is
     * not appropriate.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier(s) of this Ingredient that are assigned by business processes
     * and/or used to refer to it when a direct URL reference to the resource itself is
     * not appropriate.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->identifier, $identifier);
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ingredient role e.g. Active ingredient, excipient.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getRole(): null|FHIRCodeableConcept
    {
        return $this->role;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ingredient role e.g. Active ingredient, excipient.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $role
     * @return static
     */
    public function setRole(null|FHIRCodeableConcept $role = null): self
    {
        if (null === $role) {
            $role = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->role, $role);
        $this->role = $role;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the ingredient is a known or suspected allergen.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getAllergenicIndicator(): null|FHIRBoolean
    {
        return $this->allergenicIndicator;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the ingredient is a known or suspected allergen.
     *
     * @param null|string|bool|\Romeldev\FHIR\R4\FHIRBooleanPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRBoolean $allergenicIndicator
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAllergenicIndicator(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $allergenicIndicator = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $allergenicIndicator && !($allergenicIndicator instanceof FHIRBoolean)) {
            $allergenicIndicator = new FHIRBoolean($allergenicIndicator);
        }
        $this->_trackValueSet($this->allergenicIndicator, $allergenicIndicator);
        if (!isset($this->_xmlLocations[self::FIELD_ALLERGENIC_INDICATOR])) {
            $this->_xmlLocations[self::FIELD_ALLERGENIC_INDICATOR] = [];
        }
        $this->_xmlLocations[self::FIELD_ALLERGENIC_INDICATOR][0] = $xmlLocation;
        $this->allergenicIndicator = $allergenicIndicator;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this Ingredient.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getManufacturer(): null|array
    {
        return $this->manufacturer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this Ingredient.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference $manufacturer
     * @return static
     */
    public function addManufacturer(null|FHIRReference $manufacturer = null): self
    {
        if (null === $manufacturer) {
            $manufacturer = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this Ingredient.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRReference ...$manufacturer
     * @return static
     */
    public function setManufacturer(FHIRReference ...$manufacturer): self
    {
        if ([] !== $this->manufacturer) {
            $this->_trackValuesRemoved(count($this->manufacturer));
            $this->manufacturer = [];
        }
        if ([] === $manufacturer) {
            return $this;
        }
        foreach($manufacturer as $v) {
            $this->addManufacturer($v);
        }
        return $this;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * A specified substance that comprises this ingredient.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSpecifiedSubstance[]
     */
    public function getSpecifiedSubstance(): null|array
    {
        return $this->specifiedSubstance;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * A specified substance that comprises this ingredient.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSpecifiedSubstance $specifiedSubstance
     * @return static
     */
    public function addSpecifiedSubstance(null|FHIRMedicinalProductIngredientSpecifiedSubstance $specifiedSubstance = null): self
    {
        if (null === $specifiedSubstance) {
            $specifiedSubstance = new FHIRMedicinalProductIngredientSpecifiedSubstance();
        }
        $this->_trackValueAdded();
        $this->specifiedSubstance[] = $specifiedSubstance;
        return $this;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * A specified substance that comprises this ingredient.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSpecifiedSubstance ...$specifiedSubstance
     * @return static
     */
    public function setSpecifiedSubstance(FHIRMedicinalProductIngredientSpecifiedSubstance ...$specifiedSubstance): self
    {
        if ([] !== $this->specifiedSubstance) {
            $this->_trackValuesRemoved(count($this->specifiedSubstance));
            $this->specifiedSubstance = [];
        }
        if ([] === $specifiedSubstance) {
            return $this;
        }
        foreach($specifiedSubstance as $v) {
            $this->addSpecifiedSubstance($v);
        }
        return $this;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * The ingredient substance.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSubstance
     */
    public function getSubstance(): null|FHIRMedicinalProductIngredientSubstance
    {
        return $this->substance;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * The ingredient substance.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSubstance $substance
     * @return static
     */
    public function setSubstance(null|FHIRMedicinalProductIngredientSubstance $substance = null): self
    {
        if (null === $substance) {
            $substance = new FHIRMedicinalProductIngredientSubstance();
        }
        $this->_trackValueSet($this->substance, $substance);
        $this->substance = $substance;
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
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRole())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAllergenicIndicator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALLERGENIC_INDICATOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getManufacturer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MANUFACTURER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSpecifiedSubstance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIFIED_SUBSTANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INGREDIENT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROLE])) {
            $v = $this->getRole();
            foreach($validationRules[self::FIELD_ROLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INGREDIENT, self::FIELD_ROLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROLE])) {
                        $errs[self::FIELD_ROLE] = [];
                    }
                    $errs[self::FIELD_ROLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALLERGENIC_INDICATOR])) {
            $v = $this->getAllergenicIndicator();
            foreach($validationRules[self::FIELD_ALLERGENIC_INDICATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INGREDIENT, self::FIELD_ALLERGENIC_INDICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALLERGENIC_INDICATOR])) {
                        $errs[self::FIELD_ALLERGENIC_INDICATOR] = [];
                    }
                    $errs[self::FIELD_ALLERGENIC_INDICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INGREDIENT, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIFIED_SUBSTANCE])) {
            $v = $this->getSpecifiedSubstance();
            foreach($validationRules[self::FIELD_SPECIFIED_SUBSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INGREDIENT, self::FIELD_SPECIFIED_SUBSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIFIED_SUBSTANCE])) {
                        $errs[self::FIELD_SPECIFIED_SUBSTANCE] = [];
                    }
                    $errs[self::FIELD_SPECIFIED_SUBSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTANCE])) {
            $v = $this->getSubstance();
            foreach($validationRules[self::FIELD_SUBSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INGREDIENT, self::FIELD_SUBSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTANCE])) {
                        $errs[self::FIELD_SUBSTANCE] = [];
                    }
                    $errs[self::FIELD_SUBSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\Romeldev\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIngredient $type
     * @param null|int|\Romeldev\FHIR\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIngredient
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
        } else if (!($type instanceof FHIRMedicinalProductIngredient)) {
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
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ROLE === $childName) {
                $type->setRole(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ALLERGENIC_INDICATOR === $childName) {
                $type->setAllergenicIndicator(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MANUFACTURER === $childName) {
                $type->addManufacturer(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SPECIFIED_SUBSTANCE === $childName) {
                $type->addSpecifiedSubstance(FHIRMedicinalProductIngredientSpecifiedSubstance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSTANCE === $childName) {
                $type->setSubstance(FHIRMedicinalProductIngredientSubstance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ALLERGENIC_INDICATOR])) {
            $pt = $type->getAllergenicIndicator();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ALLERGENIC_INDICATOR], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAllergenicIndicator((string)$attributes[self::FIELD_ALLERGENIC_INDICATOR], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'MedicinalProductIngredient', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_ALLERGENIC_INDICATOR] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAllergenicIndicator())) {
            $xw->writeAttribute(self::FIELD_ALLERGENIC_INDICATOR, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getIdentifier())) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRole())) {
            $xw->startElement(self::FIELD_ROLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ALLERGENIC_INDICATOR] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAllergenicIndicator())) {
            $xw->startElement(self::FIELD_ALLERGENIC_INDICATOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getManufacturer() as $v) {
            $xw->startElement(self::FIELD_MANUFACTURER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSpecifiedSubstance() as $v) {
            $xw->startElement(self::FIELD_SPECIFIED_SUBSTANCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubstance())) {
            $xw->startElement(self::FIELD_SUBSTANCE);
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
        if (null !== ($v = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getRole())) {
            $out->{self::FIELD_ROLE} = $v;
        }
        if (null !== ($v = $this->getAllergenicIndicator())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ALLERGENIC_INDICATOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ALLERGENIC_INDICATOR_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getManufacturer())) {
            $out->{self::FIELD_MANUFACTURER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_MANUFACTURER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSpecifiedSubstance())) {
            $out->{self::FIELD_SPECIFIED_SUBSTANCE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SPECIFIED_SUBSTANCE}[] = $v;
            }
        }
        if (null !== ($v = $this->getSubstance())) {
            $out->{self::FIELD_SUBSTANCE} = $v;
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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