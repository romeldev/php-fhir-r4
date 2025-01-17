<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry;

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
use Romeldev\FHIR\R4\FHIRElement\FHIRCatalogEntryRelationType;
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
 * Catalog entries are wrappers that contextualize items included in a catalog.
 *
 * Class FHIRCatalogEntryRelatedEntry
 * @package \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry
 */
class FHIRCatalogEntryRelatedEntry extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY_DOT_RELATED_ENTRY;

    const FIELD_RELATIONTYPE = 'relationtype';
    const FIELD_RELATIONTYPE_EXT = '_relationtype';
    const FIELD_ITEM = 'item';

    /**
     * The type of relations between entries.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of relation to the related item: child, parent, packageContent,
     * containerPackage, usedIn, uses, requires, etc.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCatalogEntryRelationType
     */
    protected null|FHIRCatalogEntryRelationType $relationtype = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the related item.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $item = null;

    /**
     * Validation map for fields in type CatalogEntry.RelatedEntry
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_ITEM => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_RELATIONTYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRCatalogEntryRelatedEntry Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_RELATIONTYPE, $data) || array_key_exists(self::FIELD_RELATIONTYPE_EXT, $data)) {
            $value = $data[self::FIELD_RELATIONTYPE] ?? null;
            $ext = (isset($data[self::FIELD_RELATIONTYPE_EXT]) && is_array($data[self::FIELD_RELATIONTYPE_EXT])) ? $data[self::FIELD_RELATIONTYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCatalogEntryRelationType) {
                    $this->setRelationtype($value);
                } else if (is_array($value)) {
                    $this->setRelationtype(new FHIRCatalogEntryRelationType(array_merge($ext, $value)));
                } else {
                    $this->setRelationtype(new FHIRCatalogEntryRelationType([FHIRCatalogEntryRelationType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRelationtype(new FHIRCatalogEntryRelationType($ext));
            } else {
                $this->setRelationtype(new FHIRCatalogEntryRelationType(null));
            }
        }
        if (array_key_exists(self::FIELD_ITEM, $data)) {
            if ($data[self::FIELD_ITEM] instanceof FHIRReference) {
                $this->setItem($data[self::FIELD_ITEM]);
            } else {
                $this->setItem(new FHIRReference($data[self::FIELD_ITEM]));
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
     * The type of relations between entries.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of relation to the related item: child, parent, packageContent,
     * containerPackage, usedIn, uses, requires, etc.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCatalogEntryRelationType
     */
    public function getRelationtype(): null|FHIRCatalogEntryRelationType
    {
        return $this->relationtype;
    }

    /**
     * The type of relations between entries.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of relation to the related item: child, parent, packageContent,
     * containerPackage, usedIn, uses, requires, etc.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCatalogEntryRelationType $relationtype
     * @return static
     */
    public function setRelationtype(null|FHIRCatalogEntryRelationType $relationtype = null): self
    {
        if (null === $relationtype) {
            $relationtype = new FHIRCatalogEntryRelationType();
        }
        $this->_trackValueSet($this->relationtype, $relationtype);
        $this->relationtype = $relationtype;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the related item.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getItem(): null|FHIRReference
    {
        return $this->item;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference to the related item.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRReference $item
     * @return static
     */
    public function setItem(null|FHIRReference $item = null): self
    {
        if (null === $item) {
            $item = new FHIRReference();
        }
        $this->_trackValueSet($this->item, $item);
        $this->item = $item;
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
        if (null !== ($v = $this->getRelationtype())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONTYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getItem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ITEM] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONTYPE])) {
            $v = $this->getRelationtype();
            foreach($validationRules[self::FIELD_RELATIONTYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY_DOT_RELATED_ENTRY, self::FIELD_RELATIONTYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONTYPE])) {
                        $errs[self::FIELD_RELATIONTYPE] = [];
                    }
                    $errs[self::FIELD_RELATIONTYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM])) {
            $v = $this->getItem();
            foreach($validationRules[self::FIELD_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY_DOT_RELATED_ENTRY, self::FIELD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM])) {
                        $errs[self::FIELD_ITEM] = [];
                    }
                    $errs[self::FIELD_ITEM][$rule] = $err;
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
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry $type
     * @param null|int|\Romeldev\FHIR\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry
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
        } else if (!($type instanceof FHIRCatalogEntryRelatedEntry)) {
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
            if (self::FIELD_RELATIONTYPE === $childName) {
                $type->setRelationtype(FHIRCatalogEntryRelationType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ITEM === $childName) {
                $type->setItem(FHIRReference::xmlUnserialize($n, null, $config));
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
            $xw->openRootNode($config, 'CatalogEntryRelatedEntry', $this->_getSourceXmlns());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getRelationtype())) {
            $xw->startElement(self::FIELD_RELATIONTYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getItem())) {
            $xw->startElement(self::FIELD_ITEM);
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
        if (null !== ($v = $this->getRelationtype())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RELATIONTYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCatalogEntryRelationType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RELATIONTYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getItem())) {
            $out->{self::FIELD_ITEM} = $v;
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