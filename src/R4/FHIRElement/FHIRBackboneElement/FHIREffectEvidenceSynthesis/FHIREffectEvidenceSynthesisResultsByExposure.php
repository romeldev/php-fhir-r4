<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis;

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
use Romeldev\FHIR\R4\FHIRElement\FHIRExposureState;
use Romeldev\FHIR\R4\FHIRElement\FHIRExtension;
use Romeldev\FHIR\R4\FHIRElement\FHIRReference;
use Romeldev\FHIR\R4\FHIRElement\FHIRString;
use Romeldev\FHIR\R4\FHIRStringPrimitive;
use Romeldev\FHIR\R4\PHPFHIRConfig;
use Romeldev\FHIR\R4\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4\PHPFHIRConstants;
use Romeldev\FHIR\R4\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4\PHPFHIRXmlWriter;

/**
 * The EffectEvidenceSynthesis resource describes the difference in an outcome
 * between exposures states in a population where the effect estimate is derived
 * from a combination of research studies.
 *
 * Class FHIREffectEvidenceSynthesisResultsByExposure
 * @package \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis
 */
class FHIREffectEvidenceSynthesisResultsByExposure extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EFFECT_EVIDENCE_SYNTHESIS_DOT_RESULTS_BY_EXPOSURE;

    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXPOSURE_STATE = 'exposureState';
    const FIELD_EXPOSURE_STATE_EXT = '_exposureState';
    const FIELD_VARIANT_STATE = 'variantState';
    const FIELD_RISK_EVIDENCE_SYNTHESIS = 'riskEvidenceSynthesis';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable summary of results by exposure state.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * Whether the results by exposure is describing the results for the primary
     * exposure of interest (exposure) or the alternative state (exposureAlternative).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether these results are for the exposure state or alternative exposure state.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRExposureState
     */
    protected null|FHIRExposureState $exposureState = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to define variant exposure states such as low-risk state.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $variantState = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a RiskEvidenceSynthesis resource.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $riskEvidenceSynthesis = null;

    /**
     * Validation map for fields in type EffectEvidenceSynthesis.ResultsByExposure
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_RISK_EVIDENCE_SYNTHESIS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIREffectEvidenceSynthesisResultsByExposure Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            } else {
                $this->setDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_EXPOSURE_STATE, $data) || array_key_exists(self::FIELD_EXPOSURE_STATE_EXT, $data)) {
            $value = $data[self::FIELD_EXPOSURE_STATE] ?? null;
            $ext = (isset($data[self::FIELD_EXPOSURE_STATE_EXT]) && is_array($data[self::FIELD_EXPOSURE_STATE_EXT])) ? $data[self::FIELD_EXPOSURE_STATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRExposureState) {
                    $this->setExposureState($value);
                } else if (is_array($value)) {
                    $this->setExposureState(new FHIRExposureState(array_merge($ext, $value)));
                } else {
                    $this->setExposureState(new FHIRExposureState([FHIRExposureState::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExposureState(new FHIRExposureState($ext));
            } else {
                $this->setExposureState(new FHIRExposureState(null));
            }
        }
        if (array_key_exists(self::FIELD_VARIANT_STATE, $data)) {
            if ($data[self::FIELD_VARIANT_STATE] instanceof FHIRCodeableConcept) {
                $this->setVariantState($data[self::FIELD_VARIANT_STATE]);
            } else {
                $this->setVariantState(new FHIRCodeableConcept($data[self::FIELD_VARIANT_STATE]));
            }
        }
        if (array_key_exists(self::FIELD_RISK_EVIDENCE_SYNTHESIS, $data)) {
            if ($data[self::FIELD_RISK_EVIDENCE_SYNTHESIS] instanceof FHIRReference) {
                $this->setRiskEvidenceSynthesis($data[self::FIELD_RISK_EVIDENCE_SYNTHESIS]);
            } else {
                $this->setRiskEvidenceSynthesis(new FHIRReference($data[self::FIELD_RISK_EVIDENCE_SYNTHESIS]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable summary of results by exposure state.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable summary of results by exposure state.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRStringPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRString $description
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_xmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_xmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_xmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
        return $this;
    }

    /**
     * Whether the results by exposure is describing the results for the primary
     * exposure of interest (exposure) or the alternative state (exposureAlternative).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether these results are for the exposure state or alternative exposure state.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRExposureState
     */
    public function getExposureState(): null|FHIRExposureState
    {
        return $this->exposureState;
    }

    /**
     * Whether the results by exposure is describing the results for the primary
     * exposure of interest (exposure) or the alternative state (exposureAlternative).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether these results are for the exposure state or alternative exposure state.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRExposureState $exposureState
     * @return static
     */
    public function setExposureState(null|FHIRExposureState $exposureState = null): self
    {
        if (null === $exposureState) {
            $exposureState = new FHIRExposureState();
        }
        $this->_trackValueSet($this->exposureState, $exposureState);
        $this->exposureState = $exposureState;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to define variant exposure states such as low-risk state.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getVariantState(): null|FHIRCodeableConcept
    {
        return $this->variantState;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to define variant exposure states such as low-risk state.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $variantState
     * @return static
     */
    public function setVariantState(null|FHIRCodeableConcept $variantState = null): self
    {
        if (null === $variantState) {
            $variantState = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->variantState, $variantState);
        $this->variantState = $variantState;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a RiskEvidenceSynthesis resource.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getRiskEvidenceSynthesis(): null|FHIRReference
    {
        return $this->riskEvidenceSynthesis;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a RiskEvidenceSynthesis resource.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference $riskEvidenceSynthesis
     * @return static
     */
    public function setRiskEvidenceSynthesis(null|FHIRReference $riskEvidenceSynthesis = null): self
    {
        if (null === $riskEvidenceSynthesis) {
            $riskEvidenceSynthesis = new FHIRReference();
        }
        $this->_trackValueSet($this->riskEvidenceSynthesis, $riskEvidenceSynthesis);
        $this->riskEvidenceSynthesis = $riskEvidenceSynthesis;
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExposureState())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPOSURE_STATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVariantState())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VARIANT_STATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRiskEvidenceSynthesis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RISK_EVIDENCE_SYNTHESIS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EFFECT_EVIDENCE_SYNTHESIS_DOT_RESULTS_BY_EXPOSURE, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPOSURE_STATE])) {
            $v = $this->getExposureState();
            foreach($validationRules[self::FIELD_EXPOSURE_STATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EFFECT_EVIDENCE_SYNTHESIS_DOT_RESULTS_BY_EXPOSURE, self::FIELD_EXPOSURE_STATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPOSURE_STATE])) {
                        $errs[self::FIELD_EXPOSURE_STATE] = [];
                    }
                    $errs[self::FIELD_EXPOSURE_STATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VARIANT_STATE])) {
            $v = $this->getVariantState();
            foreach($validationRules[self::FIELD_VARIANT_STATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EFFECT_EVIDENCE_SYNTHESIS_DOT_RESULTS_BY_EXPOSURE, self::FIELD_VARIANT_STATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIANT_STATE])) {
                        $errs[self::FIELD_VARIANT_STATE] = [];
                    }
                    $errs[self::FIELD_VARIANT_STATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RISK_EVIDENCE_SYNTHESIS])) {
            $v = $this->getRiskEvidenceSynthesis();
            foreach($validationRules[self::FIELD_RISK_EVIDENCE_SYNTHESIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EFFECT_EVIDENCE_SYNTHESIS_DOT_RESULTS_BY_EXPOSURE, self::FIELD_RISK_EVIDENCE_SYNTHESIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RISK_EVIDENCE_SYNTHESIS])) {
                        $errs[self::FIELD_RISK_EVIDENCE_SYNTHESIS] = [];
                    }
                    $errs[self::FIELD_RISK_EVIDENCE_SYNTHESIS][$rule] = $err;
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
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis\FHIREffectEvidenceSynthesisResultsByExposure $type
     * @param null|int|\Romeldev\FHIR\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis\FHIREffectEvidenceSynthesisResultsByExposure
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
        } else if (!($type instanceof FHIREffectEvidenceSynthesisResultsByExposure)) {
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
            if (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EXPOSURE_STATE === $childName) {
                $type->setExposureState(FHIRExposureState::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VARIANT_STATE === $childName) {
                $type->setVariantState(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RISK_EVIDENCE_SYNTHESIS === $childName) {
                $type->setRiskEvidenceSynthesis(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'EffectEvidenceSynthesisResultsByExposure', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getExposureState())) {
            $xw->startElement(self::FIELD_EXPOSURE_STATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getVariantState())) {
            $xw->startElement(self::FIELD_VARIANT_STATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRiskEvidenceSynthesis())) {
            $xw->startElement(self::FIELD_RISK_EVIDENCE_SYNTHESIS);
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
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getExposureState())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXPOSURE_STATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRExposureState::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXPOSURE_STATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVariantState())) {
            $out->{self::FIELD_VARIANT_STATE} = $v;
        }
        if (null !== ($v = $this->getRiskEvidenceSynthesis())) {
            $out->{self::FIELD_RISK_EVIDENCE_SYNTHESIS} = $v;
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