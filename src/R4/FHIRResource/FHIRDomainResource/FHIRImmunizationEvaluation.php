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

use Romeldev\FHIR\R4\FHIRCodePrimitive;
use Romeldev\FHIR\R4\FHIRDateTimePrimitive;
use Romeldev\FHIR\R4\FHIRElement\FHIRCode;
use Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use Romeldev\FHIR\R4\FHIRElement\FHIRDateTime;
use Romeldev\FHIR\R4\FHIRElement\FHIRExtension;
use Romeldev\FHIR\R4\FHIRElement\FHIRId;
use Romeldev\FHIR\R4\FHIRElement\FHIRIdentifier;
use Romeldev\FHIR\R4\FHIRElement\FHIRImmunizationEvaluationStatusCodes;
use Romeldev\FHIR\R4\FHIRElement\FHIRMeta;
use Romeldev\FHIR\R4\FHIRElement\FHIRNarrative;
use Romeldev\FHIR\R4\FHIRElement\FHIRPositiveInt;
use Romeldev\FHIR\R4\FHIRElement\FHIRReference;
use Romeldev\FHIR\R4\FHIRElement\FHIRString;
use Romeldev\FHIR\R4\FHIRElement\FHIRUri;
use Romeldev\FHIR\R4\FHIRIdPrimitive;
use Romeldev\FHIR\R4\FHIRPositiveIntPrimitive;
use Romeldev\FHIR\R4\FHIRResource\FHIRDomainResource;
use Romeldev\FHIR\R4\FHIRStringPrimitive;
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
 * Describes a comparison of an immunization event against published
 * recommendations to determine if the administration is "valid" in relation to
 * those recommendations.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRImmunizationEvaluation
 * @package \Romeldev\FHIR\R4\FHIRResource\FHIRDomainResource
 */
class FHIRImmunizationEvaluation extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_PATIENT = 'patient';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_AUTHORITY = 'authority';
    const FIELD_TARGET_DISEASE = 'targetDisease';
    const FIELD_IMMUNIZATION_EVENT = 'immunizationEvent';
    const FIELD_DOSE_STATUS = 'doseStatus';
    const FIELD_DOSE_STATUS_REASON = 'doseStatusReason';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_SERIES = 'series';
    const FIELD_SERIES_EXT = '_series';
    const FIELD_DOSE_NUMBER_POSITIVE_INT = 'doseNumberPositiveInt';
    const FIELD_DOSE_NUMBER_POSITIVE_INT_EXT = '_doseNumberPositiveInt';
    const FIELD_DOSE_NUMBER_STRING = 'doseNumberString';
    const FIELD_DOSE_NUMBER_STRING_EXT = '_doseNumberString';
    const FIELD_SERIES_DOSES_POSITIVE_INT = 'seriesDosesPositiveInt';
    const FIELD_SERIES_DOSES_POSITIVE_INT_EXT = '_seriesDosesPositiveInt';
    const FIELD_SERIES_DOSES_STRING = 'seriesDosesString';
    const FIELD_SERIES_DOSES_STRING_EXT = '_seriesDosesString';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization evaluation record.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * The status of the evaluation being done.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current status of the evaluation of the vaccination administration
     * event.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRImmunizationEvaluationStatusCodes
     */
    protected null|FHIRImmunizationEvaluationStatusCodes $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual for whom the evaluation is being done.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the evaluation of the vaccine administration event was performed.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $date = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol (e.g. ACIP).
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $authority = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The vaccine preventable disease the dose is being evaluated against.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $targetDisease = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The vaccine administration event being evaluated.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $immunizationEvent = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if the dose is valid or not valid with respect to the published
     * recommendations.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $doseStatus = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why the vaccine administration event is valid or
     * not relative to the published recommendations.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $doseStatusReason = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the evaluation.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $series = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position in a series.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $doseNumberPositiveInt = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position in a series.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $doseNumberString = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $seriesDosesPositiveInt = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $seriesDosesString = null;

    /**
     * Validation map for fields in type ImmunizationEvaluation
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_DOSE_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_IMMUNIZATION_EVENT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PATIENT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TARGET_DISEASE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRImmunizationEvaluation Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRImmunizationEvaluationStatusCodes) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRImmunizationEvaluationStatusCodes(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRImmunizationEvaluationStatusCodes([FHIRImmunizationEvaluationStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRImmunizationEvaluationStatusCodes($ext));
            } else {
                $this->setStatus(new FHIRImmunizationEvaluationStatusCodes(null));
            }
        }
        if (array_key_exists(self::FIELD_PATIENT, $data)) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (array_key_exists(self::FIELD_DATE, $data) || array_key_exists(self::FIELD_DATE_EXT, $data)) {
            $value = $data[self::FIELD_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) ? $data[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            } else {
                $this->setDate(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_AUTHORITY, $data)) {
            if ($data[self::FIELD_AUTHORITY] instanceof FHIRReference) {
                $this->setAuthority($data[self::FIELD_AUTHORITY]);
            } else {
                $this->setAuthority(new FHIRReference($data[self::FIELD_AUTHORITY]));
            }
        }
        if (array_key_exists(self::FIELD_TARGET_DISEASE, $data)) {
            if ($data[self::FIELD_TARGET_DISEASE] instanceof FHIRCodeableConcept) {
                $this->setTargetDisease($data[self::FIELD_TARGET_DISEASE]);
            } else {
                $this->setTargetDisease(new FHIRCodeableConcept($data[self::FIELD_TARGET_DISEASE]));
            }
        }
        if (array_key_exists(self::FIELD_IMMUNIZATION_EVENT, $data)) {
            if ($data[self::FIELD_IMMUNIZATION_EVENT] instanceof FHIRReference) {
                $this->setImmunizationEvent($data[self::FIELD_IMMUNIZATION_EVENT]);
            } else {
                $this->setImmunizationEvent(new FHIRReference($data[self::FIELD_IMMUNIZATION_EVENT]));
            }
        }
        if (array_key_exists(self::FIELD_DOSE_STATUS, $data)) {
            if ($data[self::FIELD_DOSE_STATUS] instanceof FHIRCodeableConcept) {
                $this->setDoseStatus($data[self::FIELD_DOSE_STATUS]);
            } else {
                $this->setDoseStatus(new FHIRCodeableConcept($data[self::FIELD_DOSE_STATUS]));
            }
        }
        if (array_key_exists(self::FIELD_DOSE_STATUS_REASON, $data)) {
            if (is_array($data[self::FIELD_DOSE_STATUS_REASON])) {
                foreach($data[self::FIELD_DOSE_STATUS_REASON] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addDoseStatusReason($v);
                    } else {
                        $this->addDoseStatusReason(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_DOSE_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->addDoseStatusReason($data[self::FIELD_DOSE_STATUS_REASON]);
            } else {
                $this->addDoseStatusReason(new FHIRCodeableConcept($data[self::FIELD_DOSE_STATUS_REASON]));
            }
        }
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
        if (array_key_exists(self::FIELD_SERIES, $data) || array_key_exists(self::FIELD_SERIES_EXT, $data)) {
            $value = $data[self::FIELD_SERIES] ?? null;
            $ext = (isset($data[self::FIELD_SERIES_EXT]) && is_array($data[self::FIELD_SERIES_EXT])) ? $data[self::FIELD_SERIES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSeries($value);
                } else if (is_array($value)) {
                    $this->setSeries(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSeries(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSeries(new FHIRString($ext));
            } else {
                $this->setSeries(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DOSE_NUMBER_POSITIVE_INT, $data) || array_key_exists(self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT, $data)) {
            $value = $data[self::FIELD_DOSE_NUMBER_POSITIVE_INT] ?? null;
            $ext = (isset($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT])) ? $data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDoseNumberPositiveInt($value);
                } else if (is_array($value)) {
                    $this->setDoseNumberPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDoseNumberPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDoseNumberPositiveInt(new FHIRPositiveInt($ext));
            } else {
                $this->setDoseNumberPositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_DOSE_NUMBER_STRING, $data) || array_key_exists(self::FIELD_DOSE_NUMBER_STRING_EXT, $data)) {
            $value = $data[self::FIELD_DOSE_NUMBER_STRING] ?? null;
            $ext = (isset($data[self::FIELD_DOSE_NUMBER_STRING_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_STRING_EXT])) ? $data[self::FIELD_DOSE_NUMBER_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDoseNumberString($value);
                } else if (is_array($value)) {
                    $this->setDoseNumberString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDoseNumberString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDoseNumberString(new FHIRString($ext));
            } else {
                $this->setDoseNumberString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_SERIES_DOSES_POSITIVE_INT, $data) || array_key_exists(self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT, $data)) {
            $value = $data[self::FIELD_SERIES_DOSES_POSITIVE_INT] ?? null;
            $ext = (isset($data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT])) ? $data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setSeriesDosesPositiveInt($value);
                } else if (is_array($value)) {
                    $this->setSeriesDosesPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setSeriesDosesPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSeriesDosesPositiveInt(new FHIRPositiveInt($ext));
            } else {
                $this->setSeriesDosesPositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_SERIES_DOSES_STRING, $data) || array_key_exists(self::FIELD_SERIES_DOSES_STRING_EXT, $data)) {
            $value = $data[self::FIELD_SERIES_DOSES_STRING] ?? null;
            $ext = (isset($data[self::FIELD_SERIES_DOSES_STRING_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_STRING_EXT])) ? $data[self::FIELD_SERIES_DOSES_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSeriesDosesString($value);
                } else if (is_array($value)) {
                    $this->setSeriesDosesString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSeriesDosesString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSeriesDosesString(new FHIRString($ext));
            } else {
                $this->setSeriesDosesString(new FHIRString(null));
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
     * A unique identifier assigned to this immunization evaluation record.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization evaluation record.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization evaluation record.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
        }
        return $this;
    }

    /**
     * The status of the evaluation being done.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current status of the evaluation of the vaccination administration
     * event.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRImmunizationEvaluationStatusCodes
     */
    public function getStatus(): null|FHIRImmunizationEvaluationStatusCodes
    {
        return $this->status;
    }

    /**
     * The status of the evaluation being done.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current status of the evaluation of the vaccination administration
     * event.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRImmunizationEvaluationStatusCodes $status
     * @return static
     */
    public function setStatus(null|FHIRImmunizationEvaluationStatusCodes $status = null): self
    {
        if (null === $status) {
            $status = new FHIRImmunizationEvaluationStatusCodes();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual for whom the evaluation is being done.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual for whom the evaluation is being done.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient = null): self
    {
        if (null === $patient) {
            $patient = new FHIRReference();
        }
        $this->_trackValueSet($this->patient, $patient);
        $this->patient = $patient;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the evaluation of the vaccine administration event was performed.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the evaluation of the vaccine administration event was performed.
     *
     * @param null|string|\DateTimeInterface|\Romeldev\FHIR\R4\FHIRDateTimePrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRDateTime $date
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $date && !($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime($date);
        }
        $this->_trackValueSet($this->date, $date);
        if (!isset($this->_xmlLocations[self::FIELD_DATE])) {
            $this->_xmlLocations[self::FIELD_DATE] = [];
        }
        $this->_xmlLocations[self::FIELD_DATE][0] = $xmlLocation;
        $this->date = $date;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol (e.g. ACIP).
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getAuthority(): null|FHIRReference
    {
        return $this->authority;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol (e.g. ACIP).
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference $authority
     * @return static
     */
    public function setAuthority(null|FHIRReference $authority = null): self
    {
        if (null === $authority) {
            $authority = new FHIRReference();
        }
        $this->_trackValueSet($this->authority, $authority);
        $this->authority = $authority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The vaccine preventable disease the dose is being evaluated against.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getTargetDisease(): null|FHIRCodeableConcept
    {
        return $this->targetDisease;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The vaccine preventable disease the dose is being evaluated against.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $targetDisease
     * @return static
     */
    public function setTargetDisease(null|FHIRCodeableConcept $targetDisease = null): self
    {
        if (null === $targetDisease) {
            $targetDisease = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->targetDisease, $targetDisease);
        $this->targetDisease = $targetDisease;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The vaccine administration event being evaluated.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getImmunizationEvent(): null|FHIRReference
    {
        return $this->immunizationEvent;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The vaccine administration event being evaluated.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference $immunizationEvent
     * @return static
     */
    public function setImmunizationEvent(null|FHIRReference $immunizationEvent = null): self
    {
        if (null === $immunizationEvent) {
            $immunizationEvent = new FHIRReference();
        }
        $this->_trackValueSet($this->immunizationEvent, $immunizationEvent);
        $this->immunizationEvent = $immunizationEvent;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if the dose is valid or not valid with respect to the published
     * recommendations.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatus(): null|FHIRCodeableConcept
    {
        return $this->doseStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if the dose is valid or not valid with respect to the published
     * recommendations.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $doseStatus
     * @return static
     */
    public function setDoseStatus(null|FHIRCodeableConcept $doseStatus = null): self
    {
        if (null === $doseStatus) {
            $doseStatus = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->doseStatus, $doseStatus);
        $this->doseStatus = $doseStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why the vaccine administration event is valid or
     * not relative to the published recommendations.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDoseStatusReason(): null|array
    {
        return $this->doseStatusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why the vaccine administration event is valid or
     * not relative to the published recommendations.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept $doseStatusReason
     * @return static
     */
    public function addDoseStatusReason(null|FHIRCodeableConcept $doseStatusReason = null): self
    {
        if (null === $doseStatusReason) {
            $doseStatusReason = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->doseStatusReason[] = $doseStatusReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why the vaccine administration event is valid or
     * not relative to the published recommendations.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRCodeableConcept ...$doseStatusReason
     * @return static
     */
    public function setDoseStatusReason(FHIRCodeableConcept ...$doseStatusReason): self
    {
        if ([] !== $this->doseStatusReason) {
            $this->_trackValuesRemoved(count($this->doseStatusReason));
            $this->doseStatusReason = [];
        }
        if ([] === $doseStatusReason) {
            return $this;
        }
        foreach($doseStatusReason as $v) {
            $this->addDoseStatusReason($v);
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the evaluation.
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
     * Additional information about the evaluation.
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    public function getSeries(): null|FHIRString
    {
        return $this->series;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRStringPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRString $series
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSeries(null|string|FHIRStringPrimitive|FHIRString $series = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $series && !($series instanceof FHIRString)) {
            $series = new FHIRString($series);
        }
        $this->_trackValueSet($this->series, $series);
        if (!isset($this->_xmlLocations[self::FIELD_SERIES])) {
            $this->_xmlLocations[self::FIELD_SERIES] = [];
        }
        $this->_xmlLocations[self::FIELD_SERIES][0] = $xmlLocation;
        $this->series = $series;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position in a series.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    public function getDoseNumberPositiveInt(): null|FHIRPositiveInt
    {
        return $this->doseNumberPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position in a series.
     *
     * @param null|string|int|float|\Romeldev\FHIR\R4\FHIRPositiveIntPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRPositiveInt $doseNumberPositiveInt
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDoseNumberPositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $doseNumberPositiveInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $doseNumberPositiveInt && !($doseNumberPositiveInt instanceof FHIRPositiveInt)) {
            $doseNumberPositiveInt = new FHIRPositiveInt($doseNumberPositiveInt);
        }
        $this->_trackValueSet($this->doseNumberPositiveInt, $doseNumberPositiveInt);
        if (!isset($this->_xmlLocations[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
            $this->_xmlLocations[self::FIELD_DOSE_NUMBER_POSITIVE_INT] = [];
        }
        $this->_xmlLocations[self::FIELD_DOSE_NUMBER_POSITIVE_INT][0] = $xmlLocation;
        $this->doseNumberPositiveInt = $doseNumberPositiveInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position in a series.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    public function getDoseNumberString(): null|FHIRString
    {
        return $this->doseNumberString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position in a series.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRStringPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRString $doseNumberString
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDoseNumberString(null|string|FHIRStringPrimitive|FHIRString $doseNumberString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $doseNumberString && !($doseNumberString instanceof FHIRString)) {
            $doseNumberString = new FHIRString($doseNumberString);
        }
        $this->_trackValueSet($this->doseNumberString, $doseNumberString);
        if (!isset($this->_xmlLocations[self::FIELD_DOSE_NUMBER_STRING])) {
            $this->_xmlLocations[self::FIELD_DOSE_NUMBER_STRING] = [];
        }
        $this->_xmlLocations[self::FIELD_DOSE_NUMBER_STRING][0] = $xmlLocation;
        $this->doseNumberString = $doseNumberString;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDosesPositiveInt(): null|FHIRPositiveInt
    {
        return $this->seriesDosesPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @param null|string|int|float|\Romeldev\FHIR\R4\FHIRPositiveIntPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRPositiveInt $seriesDosesPositiveInt
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSeriesDosesPositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $seriesDosesPositiveInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $seriesDosesPositiveInt && !($seriesDosesPositiveInt instanceof FHIRPositiveInt)) {
            $seriesDosesPositiveInt = new FHIRPositiveInt($seriesDosesPositiveInt);
        }
        $this->_trackValueSet($this->seriesDosesPositiveInt, $seriesDosesPositiveInt);
        if (!isset($this->_xmlLocations[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
            $this->_xmlLocations[self::FIELD_SERIES_DOSES_POSITIVE_INT] = [];
        }
        $this->_xmlLocations[self::FIELD_SERIES_DOSES_POSITIVE_INT][0] = $xmlLocation;
        $this->seriesDosesPositiveInt = $seriesDosesPositiveInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    public function getSeriesDosesString(): null|FHIRString
    {
        return $this->seriesDosesString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRStringPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRString $seriesDosesString
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSeriesDosesString(null|string|FHIRStringPrimitive|FHIRString $seriesDosesString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $seriesDosesString && !($seriesDosesString instanceof FHIRString)) {
            $seriesDosesString = new FHIRString($seriesDosesString);
        }
        $this->_trackValueSet($this->seriesDosesString, $seriesDosesString);
        if (!isset($this->_xmlLocations[self::FIELD_SERIES_DOSES_STRING])) {
            $this->_xmlLocations[self::FIELD_SERIES_DOSES_STRING] = [];
        }
        $this->_xmlLocations[self::FIELD_SERIES_DOSES_STRING][0] = $xmlLocation;
        $this->seriesDosesString = $seriesDosesString;
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuthority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHORITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTargetDisease())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_DISEASE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImmunizationEvent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMMUNIZATION_EVENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDoseStatusReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOSE_STATUS_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeries())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_NUMBER_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_NUMBER_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES_DOSES_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES_DOSES_STRING] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORITY])) {
            $v = $this->getAuthority();
            foreach($validationRules[self::FIELD_AUTHORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_AUTHORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORITY])) {
                        $errs[self::FIELD_AUTHORITY] = [];
                    }
                    $errs[self::FIELD_AUTHORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_DISEASE])) {
            $v = $this->getTargetDisease();
            foreach($validationRules[self::FIELD_TARGET_DISEASE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_TARGET_DISEASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_DISEASE])) {
                        $errs[self::FIELD_TARGET_DISEASE] = [];
                    }
                    $errs[self::FIELD_TARGET_DISEASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMMUNIZATION_EVENT])) {
            $v = $this->getImmunizationEvent();
            foreach($validationRules[self::FIELD_IMMUNIZATION_EVENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_IMMUNIZATION_EVENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMMUNIZATION_EVENT])) {
                        $errs[self::FIELD_IMMUNIZATION_EVENT] = [];
                    }
                    $errs[self::FIELD_IMMUNIZATION_EVENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_STATUS])) {
            $v = $this->getDoseStatus();
            foreach($validationRules[self::FIELD_DOSE_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_DOSE_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_STATUS])) {
                        $errs[self::FIELD_DOSE_STATUS] = [];
                    }
                    $errs[self::FIELD_DOSE_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_STATUS_REASON])) {
            $v = $this->getDoseStatusReason();
            foreach($validationRules[self::FIELD_DOSE_STATUS_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_DOSE_STATUS_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_STATUS_REASON])) {
                        $errs[self::FIELD_DOSE_STATUS_REASON] = [];
                    }
                    $errs[self::FIELD_DOSE_STATUS_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES])) {
            $v = $this->getSeries();
            foreach($validationRules[self::FIELD_SERIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_SERIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES])) {
                        $errs[self::FIELD_SERIES] = [];
                    }
                    $errs[self::FIELD_SERIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
            $v = $this->getDoseNumberPositiveInt();
            foreach($validationRules[self::FIELD_DOSE_NUMBER_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_DOSE_NUMBER_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
                        $errs[self::FIELD_DOSE_NUMBER_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_DOSE_NUMBER_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_NUMBER_STRING])) {
            $v = $this->getDoseNumberString();
            foreach($validationRules[self::FIELD_DOSE_NUMBER_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_DOSE_NUMBER_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_NUMBER_STRING])) {
                        $errs[self::FIELD_DOSE_NUMBER_STRING] = [];
                    }
                    $errs[self::FIELD_DOSE_NUMBER_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
            $v = $this->getSeriesDosesPositiveInt();
            foreach($validationRules[self::FIELD_SERIES_DOSES_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_SERIES_DOSES_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
                        $errs[self::FIELD_SERIES_DOSES_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_SERIES_DOSES_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES_DOSES_STRING])) {
            $v = $this->getSeriesDosesString();
            foreach($validationRules[self::FIELD_SERIES_DOSES_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_EVALUATION, self::FIELD_SERIES_DOSES_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES_DOSES_STRING])) {
                        $errs[self::FIELD_SERIES_DOSES_STRING] = [];
                    }
                    $errs[self::FIELD_SERIES_DOSES_STRING][$rule] = $err;
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
     * @param null|\Romeldev\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation $type
     * @param null|int|\Romeldev\FHIR\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation
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
        } else if (!($type instanceof FHIRImmunizationEvaluation)) {
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
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRImmunizationEvaluationStatusCodes::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATIENT === $childName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE === $childName) {
                $type->setDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AUTHORITY === $childName) {
                $type->setAuthority(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TARGET_DISEASE === $childName) {
                $type->setTargetDisease(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMMUNIZATION_EVENT === $childName) {
                $type->setImmunizationEvent(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOSE_STATUS === $childName) {
                $type->setDoseStatus(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOSE_STATUS_REASON === $childName) {
                $type->addDoseStatusReason(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SERIES === $childName) {
                $type->setSeries(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DOSE_NUMBER_POSITIVE_INT === $childName) {
                $type->setDoseNumberPositiveInt(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DOSE_NUMBER_STRING === $childName) {
                $type->setDoseNumberString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SERIES_DOSES_POSITIVE_INT === $childName) {
                $type->setSeriesDosesPositiveInt(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SERIES_DOSES_STRING === $childName) {
                $type->setSeriesDosesString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
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
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SERIES])) {
            $pt = $type->getSeries();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SERIES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSeries((string)$attributes[self::FIELD_SERIES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
            $pt = $type->getDoseNumberPositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DOSE_NUMBER_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDoseNumberPositiveInt((string)$attributes[self::FIELD_DOSE_NUMBER_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DOSE_NUMBER_STRING])) {
            $pt = $type->getDoseNumberString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DOSE_NUMBER_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDoseNumberString((string)$attributes[self::FIELD_DOSE_NUMBER_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
            $pt = $type->getSeriesDosesPositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SERIES_DOSES_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSeriesDosesPositiveInt((string)$attributes[self::FIELD_SERIES_DOSES_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SERIES_DOSES_STRING])) {
            $pt = $type->getSeriesDosesString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SERIES_DOSES_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSeriesDosesString((string)$attributes[self::FIELD_SERIES_DOSES_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'ImmunizationEvaluation', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->writeAttribute(self::FIELD_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_SERIES] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSeries())) {
            $xw->writeAttribute(self::FIELD_SERIES, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DOSE_NUMBER_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDoseNumberPositiveInt())) {
            $xw->writeAttribute(self::FIELD_DOSE_NUMBER_POSITIVE_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DOSE_NUMBER_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDoseNumberString())) {
            $xw->writeAttribute(self::FIELD_DOSE_NUMBER_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_SERIES_DOSES_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSeriesDosesPositiveInt())) {
            $xw->writeAttribute(self::FIELD_SERIES_DOSES_POSITIVE_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_SERIES_DOSES_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSeriesDosesString())) {
            $xw->writeAttribute(self::FIELD_SERIES_DOSES_STRING, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatient())) {
            $xw->startElement(self::FIELD_PATIENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->startElement(self::FIELD_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAuthority())) {
            $xw->startElement(self::FIELD_AUTHORITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTargetDisease())) {
            $xw->startElement(self::FIELD_TARGET_DISEASE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getImmunizationEvent())) {
            $xw->startElement(self::FIELD_IMMUNIZATION_EVENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDoseStatus())) {
            $xw->startElement(self::FIELD_DOSE_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDoseStatusReason() as $v) {
            $xw->startElement(self::FIELD_DOSE_STATUS_REASON);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_SERIES] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSeries())) {
            $xw->startElement(self::FIELD_SERIES);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DOSE_NUMBER_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDoseNumberPositiveInt())) {
            $xw->startElement(self::FIELD_DOSE_NUMBER_POSITIVE_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DOSE_NUMBER_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDoseNumberString())) {
            $xw->startElement(self::FIELD_DOSE_NUMBER_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_SERIES_DOSES_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSeriesDosesPositiveInt())) {
            $xw->startElement(self::FIELD_SERIES_DOSES_POSITIVE_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_SERIES_DOSES_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSeriesDosesString())) {
            $xw->startElement(self::FIELD_SERIES_DOSES_STRING);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRImmunizationEvaluationStatusCodes::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
        }
        if (null !== ($v = $this->getDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAuthority())) {
            $out->{self::FIELD_AUTHORITY} = $v;
        }
        if (null !== ($v = $this->getTargetDisease())) {
            $out->{self::FIELD_TARGET_DISEASE} = $v;
        }
        if (null !== ($v = $this->getImmunizationEvent())) {
            $out->{self::FIELD_IMMUNIZATION_EVENT} = $v;
        }
        if (null !== ($v = $this->getDoseStatus())) {
            $out->{self::FIELD_DOSE_STATUS} = $v;
        }
        if ([] !== ($vs = $this->getDoseStatusReason())) {
            $out->{self::FIELD_DOSE_STATUS_REASON} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DOSE_STATUS_REASON}[] = $v;
            }
        }
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
        if (null !== ($v = $this->getSeries())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SERIES} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SERIES_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DOSE_NUMBER_POSITIVE_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DOSE_NUMBER_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOSE_NUMBER_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SERIES_DOSES_POSITIVE_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SERIES_DOSES_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SERIES_DOSES_STRING_EXT} = $ext;
            }
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