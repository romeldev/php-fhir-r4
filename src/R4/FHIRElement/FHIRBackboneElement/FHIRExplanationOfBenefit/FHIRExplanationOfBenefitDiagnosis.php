<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit;

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
use Romeldev\FHIR\R4\FHIRElement\FHIRPositiveInt;
use Romeldev\FHIR\R4\FHIRElement\FHIRReference;
use Romeldev\FHIR\R4\FHIRPositiveIntPrimitive;
use Romeldev\FHIR\R4\FHIRStringPrimitive;
use Romeldev\FHIR\R4\PHPFHIRConfig;
use Romeldev\FHIR\R4\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4\PHPFHIRConstants;
use Romeldev\FHIR\R4\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4\PHPFHIRXmlWriter;

/**
 * This resource provides: the claim details; adjudication details from the
 * processing of a Claim; and optionally account balance information, for informing
 * the subscriber of the benefits provided.
 *
 * Class FHIRExplanationOfBenefitDiagnosis
 * @package \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit
 */
class FHIRExplanationOfBenefitDiagnosis extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS;

    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_DIAGNOSIS_CODEABLE_CONCEPT = 'diagnosisCodeableConcept';
    const FIELD_DIAGNOSIS_REFERENCE = 'diagnosisReference';
    const FIELD_TYPE = 'type';
    const FIELD_ON_ADMISSION = 'onAdmission';
    const FIELD_PACKAGE_CODE = 'packageCode';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely identify diagnosis entries.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $sequence = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nature of illness or problem in a coded form or as a reference to an
     * external defined Condition.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $diagnosisCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nature of illness or problem in a coded form or as a reference to an
     * external defined Condition.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $diagnosisReference = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the condition was observed or the relative ranking.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $type = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication of whether the diagnosis was present on admission to a facility.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $onAdmission = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A package billing code or bundle code used to group products and services to a
     * particular health condition (such as heart attack) which is based on a
     * predetermined grouping code system.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $packageCode = null;

    /**
     * Validation map for fields in type ExplanationOfBenefit.Diagnosis
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DIAGNOSIS_REFERENCE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_SEQUENCE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRExplanationOfBenefitDiagnosis Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_SEQUENCE, $data) || array_key_exists(self::FIELD_SEQUENCE_EXT, $data)) {
            $value = $data[self::FIELD_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) ? $data[self::FIELD_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSequence(new FHIRPositiveInt($ext));
            } else {
                $this->setSequence(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDiagnosisCodeableConcept($data[self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT]);
            } else {
                $this->setDiagnosisCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_DIAGNOSIS_REFERENCE, $data)) {
            if ($data[self::FIELD_DIAGNOSIS_REFERENCE] instanceof FHIRReference) {
                $this->setDiagnosisReference($data[self::FIELD_DIAGNOSIS_REFERENCE]);
            } else {
                $this->setDiagnosisReference(new FHIRReference($data[self::FIELD_DIAGNOSIS_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_ON_ADMISSION, $data)) {
            if ($data[self::FIELD_ON_ADMISSION] instanceof FHIRCodeableConcept) {
                $this->setOnAdmission($data[self::FIELD_ON_ADMISSION]);
            } else {
                $this->setOnAdmission(new FHIRCodeableConcept($data[self::FIELD_ON_ADMISSION]));
            }
        }
        if (array_key_exists(self::FIELD_PACKAGE_CODE, $data)) {
            if ($data[self::FIELD_PACKAGE_CODE] instanceof FHIRCodeableConcept) {
                $this->setPackageCode($data[self::FIELD_PACKAGE_CODE]);
            } else {
                $this->setPackageCode(new FHIRCodeableConcept($data[self::FIELD_PACKAGE_CODE]));
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely identify diagnosis entries.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    public function getSequence(): null|FHIRPositiveInt
    {
        return $this->sequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely identify diagnosis entries.
     *
     * @param null|string|int|float|\Romeldev\FHIR\R4\FHIRPositiveIntPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRPositiveInt $sequence
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $sequence && !($sequence instanceof FHIRPositiveInt)) {
            $sequence = new FHIRPositiveInt($sequence);
        }
        $this->_trackValueSet($this->sequence, $sequence);
        if (!isset($this->_xmlLocations[self::FIELD_SEQUENCE])) {
            $this->_xmlLocations[self::FIELD_SEQUENCE] = [];
        }
        $this->_xmlLocations[self::FIELD_SEQUENCE][0] = $xmlLocation;
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nature of illness or problem in a coded form or as a reference to an
     * external defined Condition.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDiagnosisCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->diagnosisCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nature of illness or problem in a coded form or as a reference to an
     * external defined Condition.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $diagnosisCodeableConcept
     * @return static
     */
    public function setDiagnosisCodeableConcept(null|FHIRCodeableConcept $diagnosisCodeableConcept = null): self
    {
        if (null === $diagnosisCodeableConcept) {
            $diagnosisCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->diagnosisCodeableConcept, $diagnosisCodeableConcept);
        $this->diagnosisCodeableConcept = $diagnosisCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nature of illness or problem in a coded form or as a reference to an
     * external defined Condition.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getDiagnosisReference(): null|FHIRReference
    {
        return $this->diagnosisReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nature of illness or problem in a coded form or as a reference to an
     * external defined Condition.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference $diagnosisReference
     * @return static
     */
    public function setDiagnosisReference(null|FHIRReference $diagnosisReference = null): self
    {
        if (null === $diagnosisReference) {
            $diagnosisReference = new FHIRReference();
        }
        $this->_trackValueSet($this->diagnosisReference, $diagnosisReference);
        $this->diagnosisReference = $diagnosisReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the condition was observed or the relative ranking.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType(): null|array
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the condition was observed or the relative ranking.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function addType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the condition was observed or the relative ranking.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept ...$type
     * @return static
     */
    public function setType(FHIRCodeableConcept ...$type): self
    {
        if ([] !== $this->type) {
            $this->_trackValuesRemoved(count($this->type));
            $this->type = [];
        }
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            $this->addType($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication of whether the diagnosis was present on admission to a facility.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getOnAdmission(): null|FHIRCodeableConcept
    {
        return $this->onAdmission;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication of whether the diagnosis was present on admission to a facility.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $onAdmission
     * @return static
     */
    public function setOnAdmission(null|FHIRCodeableConcept $onAdmission = null): self
    {
        if (null === $onAdmission) {
            $onAdmission = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->onAdmission, $onAdmission);
        $this->onAdmission = $onAdmission;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A package billing code or bundle code used to group products and services to a
     * particular health condition (such as heart attack) which is based on a
     * predetermined grouping code system.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPackageCode(): null|FHIRCodeableConcept
    {
        return $this->packageCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A package billing code or bundle code used to group products and services to a
     * particular health condition (such as heart attack) which is based on a
     * predetermined grouping code system.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $packageCode
     * @return static
     */
    public function setPackageCode(null|FHIRCodeableConcept $packageCode = null): self
    {
        if (null === $packageCode) {
            $packageCode = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->packageCode, $packageCode);
        $this->packageCode = $packageCode;
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
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiagnosisCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiagnosisReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIAGNOSIS_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOnAdmission())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ON_ADMISSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPackageCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PACKAGE_CODE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT])) {
            $v = $this->getDiagnosisCodeableConcept();
            foreach($validationRules[self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS, self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAGNOSIS_REFERENCE])) {
            $v = $this->getDiagnosisReference();
            foreach($validationRules[self::FIELD_DIAGNOSIS_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS, self::FIELD_DIAGNOSIS_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIAGNOSIS_REFERENCE])) {
                        $errs[self::FIELD_DIAGNOSIS_REFERENCE] = [];
                    }
                    $errs[self::FIELD_DIAGNOSIS_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ON_ADMISSION])) {
            $v = $this->getOnAdmission();
            foreach($validationRules[self::FIELD_ON_ADMISSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS, self::FIELD_ON_ADMISSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ON_ADMISSION])) {
                        $errs[self::FIELD_ON_ADMISSION] = [];
                    }
                    $errs[self::FIELD_ON_ADMISSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PACKAGE_CODE])) {
            $v = $this->getPackageCode();
            foreach($validationRules[self::FIELD_PACKAGE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS, self::FIELD_PACKAGE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGE_CODE])) {
                        $errs[self::FIELD_PACKAGE_CODE] = [];
                    }
                    $errs[self::FIELD_PACKAGE_CODE][$rule] = $err;
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
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis $type
     * @param null|int|\Romeldev\FHIR\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis
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
        } else if (!($type instanceof FHIRExplanationOfBenefitDiagnosis)) {
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
            if (self::FIELD_SEQUENCE === $childName) {
                $type->setSequence(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT === $childName) {
                $type->setDiagnosisCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DIAGNOSIS_REFERENCE === $childName) {
                $type->setDiagnosisReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE === $childName) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ON_ADMISSION === $childName) {
                $type->setOnAdmission(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PACKAGE_CODE === $childName) {
                $type->setPackageCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSequence((string)$attributes[self::FIELD_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'ExplanationOfBenefitDiagnosis', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSequence())) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSequence())) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDiagnosisCodeableConcept())) {
            $xw->startElement(self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDiagnosisReference())) {
            $xw->startElement(self::FIELD_DIAGNOSIS_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getType() as $v) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOnAdmission())) {
            $xw->startElement(self::FIELD_ON_ADMISSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPackageCode())) {
            $xw->startElement(self::FIELD_PACKAGE_CODE);
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
        if (null !== ($v = $this->getSequence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SEQUENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEQUENCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDiagnosisCodeableConcept())) {
            $out->{self::FIELD_DIAGNOSIS_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getDiagnosisReference())) {
            $out->{self::FIELD_DIAGNOSIS_REFERENCE} = $v;
        }
        if ([] !== ($vs = $this->getType())) {
            $out->{self::FIELD_TYPE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TYPE}[] = $v;
            }
        }
        if (null !== ($v = $this->getOnAdmission())) {
            $out->{self::FIELD_ON_ADMISSION} = $v;
        }
        if (null !== ($v = $this->getPackageCode())) {
            $out->{self::FIELD_PACKAGE_CODE} = $v;
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