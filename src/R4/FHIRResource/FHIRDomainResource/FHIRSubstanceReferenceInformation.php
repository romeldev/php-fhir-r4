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
use Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification;
use Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene;
use Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement;
use Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget;
use Romeldev\FHIR\R4\FHIRElement\FHIRCode;
use Romeldev\FHIR\R4\FHIRElement\FHIRExtension;
use Romeldev\FHIR\R4\FHIRElement\FHIRId;
use Romeldev\FHIR\R4\FHIRElement\FHIRMeta;
use Romeldev\FHIR\R4\FHIRElement\FHIRNarrative;
use Romeldev\FHIR\R4\FHIRElement\FHIRString;
use Romeldev\FHIR\R4\FHIRElement\FHIRUri;
use Romeldev\FHIR\R4\FHIRIdPrimitive;
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
 * Todo.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSubstanceReferenceInformation
 * @package \Romeldev\FHIR\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSubstanceReferenceInformation extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_REFERENCE_INFORMATION;

    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_GENE = 'gene';
    const FIELD_GENE_ELEMENT = 'geneElement';
    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_TARGET = 'target';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $comment = null;
    /**
     * Todo.
     *
     * Todo.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene[]
     */
    protected null|array $gene = [];
    /**
     * Todo.
     *
     * Todo.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement[]
     */
    protected null|array $geneElement = [];
    /**
     * Todo.
     *
     * Todo.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification[]
     */
    protected null|array $classification = [];
    /**
     * Todo.
     *
     * Todo.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget[]
     */
    protected null|array $target = [];

    /**
     * Validation map for fields in type SubstanceReferenceInformation
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRSubstanceReferenceInformation Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_COMMENT, $data) || array_key_exists(self::FIELD_COMMENT_EXT, $data)) {
            $value = $data[self::FIELD_COMMENT] ?? null;
            $ext = (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT])) ? $data[self::FIELD_COMMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setComment($value);
                } else if (is_array($value)) {
                    $this->setComment(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setComment(new FHIRString($ext));
            } else {
                $this->setComment(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_GENE, $data)) {
            if (is_array($data[self::FIELD_GENE])) {
                foreach($data[self::FIELD_GENE] as $v) {
                    if ($v instanceof FHIRSubstanceReferenceInformationGene) {
                        $this->addGene($v);
                    } else {
                        $this->addGene(new FHIRSubstanceReferenceInformationGene($v));
                    }
                }
            } elseif ($data[self::FIELD_GENE] instanceof FHIRSubstanceReferenceInformationGene) {
                $this->addGene($data[self::FIELD_GENE]);
            } else {
                $this->addGene(new FHIRSubstanceReferenceInformationGene($data[self::FIELD_GENE]));
            }
        }
        if (array_key_exists(self::FIELD_GENE_ELEMENT, $data)) {
            if (is_array($data[self::FIELD_GENE_ELEMENT])) {
                foreach($data[self::FIELD_GENE_ELEMENT] as $v) {
                    if ($v instanceof FHIRSubstanceReferenceInformationGeneElement) {
                        $this->addGeneElement($v);
                    } else {
                        $this->addGeneElement(new FHIRSubstanceReferenceInformationGeneElement($v));
                    }
                }
            } elseif ($data[self::FIELD_GENE_ELEMENT] instanceof FHIRSubstanceReferenceInformationGeneElement) {
                $this->addGeneElement($data[self::FIELD_GENE_ELEMENT]);
            } else {
                $this->addGeneElement(new FHIRSubstanceReferenceInformationGeneElement($data[self::FIELD_GENE_ELEMENT]));
            }
        }
        if (array_key_exists(self::FIELD_CLASSIFICATION, $data)) {
            if (is_array($data[self::FIELD_CLASSIFICATION])) {
                foreach($data[self::FIELD_CLASSIFICATION] as $v) {
                    if ($v instanceof FHIRSubstanceReferenceInformationClassification) {
                        $this->addClassification($v);
                    } else {
                        $this->addClassification(new FHIRSubstanceReferenceInformationClassification($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASSIFICATION] instanceof FHIRSubstanceReferenceInformationClassification) {
                $this->addClassification($data[self::FIELD_CLASSIFICATION]);
            } else {
                $this->addClassification(new FHIRSubstanceReferenceInformationClassification($data[self::FIELD_CLASSIFICATION]));
            }
        }
        if (array_key_exists(self::FIELD_TARGET, $data)) {
            if (is_array($data[self::FIELD_TARGET])) {
                foreach($data[self::FIELD_TARGET] as $v) {
                    if ($v instanceof FHIRSubstanceReferenceInformationTarget) {
                        $this->addTarget($v);
                    } else {
                        $this->addTarget(new FHIRSubstanceReferenceInformationTarget($v));
                    }
                }
            } elseif ($data[self::FIELD_TARGET] instanceof FHIRSubstanceReferenceInformationTarget) {
                $this->addTarget($data[self::FIELD_TARGET]);
            } else {
                $this->addTarget(new FHIRSubstanceReferenceInformationTarget($data[self::FIELD_TARGET]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    public function getComment(): null|FHIRString
    {
        return $this->comment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRStringPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRString $comment
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setComment(null|string|FHIRStringPrimitive|FHIRString $comment = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $comment && !($comment instanceof FHIRString)) {
            $comment = new FHIRString($comment);
        }
        $this->_trackValueSet($this->comment, $comment);
        if (!isset($this->_xmlLocations[self::FIELD_COMMENT])) {
            $this->_xmlLocations[self::FIELD_COMMENT] = [];
        }
        $this->_xmlLocations[self::FIELD_COMMENT][0] = $xmlLocation;
        $this->comment = $comment;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene[]
     */
    public function getGene(): null|array
    {
        return $this->gene;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene $gene
     * @return static
     */
    public function addGene(null|FHIRSubstanceReferenceInformationGene $gene = null): self
    {
        if (null === $gene) {
            $gene = new FHIRSubstanceReferenceInformationGene();
        }
        $this->_trackValueAdded();
        $this->gene[] = $gene;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene ...$gene
     * @return static
     */
    public function setGene(FHIRSubstanceReferenceInformationGene ...$gene): self
    {
        if ([] !== $this->gene) {
            $this->_trackValuesRemoved(count($this->gene));
            $this->gene = [];
        }
        if ([] === $gene) {
            return $this;
        }
        foreach($gene as $v) {
            $this->addGene($v);
        }
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement[]
     */
    public function getGeneElement(): null|array
    {
        return $this->geneElement;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement $geneElement
     * @return static
     */
    public function addGeneElement(null|FHIRSubstanceReferenceInformationGeneElement $geneElement = null): self
    {
        if (null === $geneElement) {
            $geneElement = new FHIRSubstanceReferenceInformationGeneElement();
        }
        $this->_trackValueAdded();
        $this->geneElement[] = $geneElement;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement ...$geneElement
     * @return static
     */
    public function setGeneElement(FHIRSubstanceReferenceInformationGeneElement ...$geneElement): self
    {
        if ([] !== $this->geneElement) {
            $this->_trackValuesRemoved(count($this->geneElement));
            $this->geneElement = [];
        }
        if ([] === $geneElement) {
            return $this;
        }
        foreach($geneElement as $v) {
            $this->addGeneElement($v);
        }
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification[]
     */
    public function getClassification(): null|array
    {
        return $this->classification;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification $classification
     * @return static
     */
    public function addClassification(null|FHIRSubstanceReferenceInformationClassification $classification = null): self
    {
        if (null === $classification) {
            $classification = new FHIRSubstanceReferenceInformationClassification();
        }
        $this->_trackValueAdded();
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification ...$classification
     * @return static
     */
    public function setClassification(FHIRSubstanceReferenceInformationClassification ...$classification): self
    {
        if ([] !== $this->classification) {
            $this->_trackValuesRemoved(count($this->classification));
            $this->classification = [];
        }
        if ([] === $classification) {
            return $this;
        }
        foreach($classification as $v) {
            $this->addClassification($v);
        }
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget[]
     */
    public function getTarget(): null|array
    {
        return $this->target;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget $target
     * @return static
     */
    public function addTarget(null|FHIRSubstanceReferenceInformationTarget $target = null): self
    {
        if (null === $target) {
            $target = new FHIRSubstanceReferenceInformationTarget();
        }
        $this->_trackValueAdded();
        $this->target[] = $target;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget ...$target
     * @return static
     */
    public function setTarget(FHIRSubstanceReferenceInformationTarget ...$target): self
    {
        if ([] !== $this->target) {
            $this->_trackValuesRemoved(count($this->target));
            $this->target = [];
        }
        if ([] === $target) {
            return $this;
        }
        foreach($target as $v) {
            $this->addTarget($v);
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
        if (null !== ($v = $this->getComment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getGene())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GENE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getGeneElement())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GENE_ELEMENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASSIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENT])) {
            $v = $this->getComment();
            foreach($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_REFERENCE_INFORMATION, self::FIELD_COMMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENT])) {
                        $errs[self::FIELD_COMMENT] = [];
                    }
                    $errs[self::FIELD_COMMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENE])) {
            $v = $this->getGene();
            foreach($validationRules[self::FIELD_GENE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_REFERENCE_INFORMATION, self::FIELD_GENE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENE])) {
                        $errs[self::FIELD_GENE] = [];
                    }
                    $errs[self::FIELD_GENE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENE_ELEMENT])) {
            $v = $this->getGeneElement();
            foreach($validationRules[self::FIELD_GENE_ELEMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_REFERENCE_INFORMATION, self::FIELD_GENE_ELEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENE_ELEMENT])) {
                        $errs[self::FIELD_GENE_ELEMENT] = [];
                    }
                    $errs[self::FIELD_GENE_ELEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_REFERENCE_INFORMATION, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_REFERENCE_INFORMATION, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
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
     * @param null|\Romeldev\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation $type
     * @param null|int|\Romeldev\FHIR\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation
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
        } else if (!($type instanceof FHIRSubstanceReferenceInformation)) {
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
            if (self::FIELD_COMMENT === $childName) {
                $type->setComment(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_GENE === $childName) {
                $type->addGene(FHIRSubstanceReferenceInformationGene::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GENE_ELEMENT === $childName) {
                $type->addGeneElement(FHIRSubstanceReferenceInformationGeneElement::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CLASSIFICATION === $childName) {
                $type->addClassification(FHIRSubstanceReferenceInformationClassification::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TARGET === $childName) {
                $type->addTarget(FHIRSubstanceReferenceInformationTarget::xmlUnserialize($n, null, $config));
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
        if (isset($attributes[self::FIELD_COMMENT])) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setComment((string)$attributes[self::FIELD_COMMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'SubstanceReferenceInformation', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_COMMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getComment())) {
            $xw->writeAttribute(self::FIELD_COMMENT, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_COMMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getComment())) {
            $xw->startElement(self::FIELD_COMMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getGene() as $v) {
            $xw->startElement(self::FIELD_GENE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getGeneElement() as $v) {
            $xw->startElement(self::FIELD_GENE_ELEMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getClassification() as $v) {
            $xw->startElement(self::FIELD_CLASSIFICATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getTarget() as $v) {
            $xw->startElement(self::FIELD_TARGET);
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
        if (null !== ($v = $this->getComment())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMMENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMMENT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getGene())) {
            $out->{self::FIELD_GENE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_GENE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getGeneElement())) {
            $out->{self::FIELD_GENE_ELEMENT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_GENE_ELEMENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getClassification())) {
            $out->{self::FIELD_CLASSIFICATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CLASSIFICATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            $out->{self::FIELD_TARGET} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TARGET}[] = $v;
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