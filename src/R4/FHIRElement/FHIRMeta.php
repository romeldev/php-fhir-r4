<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4\FHIRElement;

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

use Romeldev\FHIR\R4\FHIRCanonicalPrimitive;
use Romeldev\FHIR\R4\FHIRElement;
use Romeldev\FHIR\R4\FHIRIdPrimitive;
use Romeldev\FHIR\R4\FHIRInstantPrimitive;
use Romeldev\FHIR\R4\FHIRStringPrimitive;
use Romeldev\FHIR\R4\FHIRUriPrimitive;
use Romeldev\FHIR\R4\PHPFHIRConfig;
use Romeldev\FHIR\R4\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4\PHPFHIRConstants;
use Romeldev\FHIR\R4\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4\PHPFHIRXmlWriter;

/**
 * The metadata about a resource. This is content in the resource that is
 * maintained by the infrastructure. Changes to the content might not always be
 * associated with version changes to the resource.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRMeta
 * @package \Romeldev\FHIR\R4\FHIRElement
 */
class FHIRMeta extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_META;

    const FIELD_VERSION_ID = 'versionId';
    const FIELD_VERSION_ID_EXT = '_versionId';
    const FIELD_LAST_UPDATED = 'lastUpdated';
    const FIELD_LAST_UPDATED_EXT = '_lastUpdated';
    const FIELD_SOURCE = 'source';
    const FIELD_SOURCE_EXT = '_source';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_SECURITY = 'security';
    const FIELD_TAG = 'tag';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version specific identifier, as it appears in the version portion of the
     * URL. This value changes when the resource is created, updated, or deleted.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRId
     */
    protected null|FHIRId $versionId = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the resource last changed - e.g. when the version changed.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $lastUpdated = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A uri that identifies the source system of the resource. This provides a minimal
     * amount of [[[Provenance]]] information that can be used to track or
     * differentiate the source of information in the resource. The source may identify
     * another FHIR server, document, message, database, etc.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $source = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this
     * resource claims to conform to. The URL is a reference to
     * [[[StructureDefinition.url]]].
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCanonical[]
     */
    protected null|array $profile = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels applied to this resource. These tags connect specific resources
     * to the overall security policy and infrastructure.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCoding[]
     */
    protected null|array $security = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Tags applied to this resource. Tags are intended to be used to identify and
     * relate resources to process and workflow, and applications are not required to
     * consider the tags when interpreting the meaning of a resource.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRCoding[]
     */
    protected null|array $tag = [];

    /**
     * Validation map for fields in type Meta
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRMeta Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_VERSION_ID, $data) || array_key_exists(self::FIELD_VERSION_ID_EXT, $data)) {
            $value = $data[self::FIELD_VERSION_ID] ?? null;
            $ext = (isset($data[self::FIELD_VERSION_ID_EXT]) && is_array($data[self::FIELD_VERSION_ID_EXT])) ? $data[self::FIELD_VERSION_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setVersionId($value);
                } else if (is_array($value)) {
                    $this->setVersionId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setVersionId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVersionId(new FHIRId($ext));
            } else {
                $this->setVersionId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_LAST_UPDATED, $data) || array_key_exists(self::FIELD_LAST_UPDATED_EXT, $data)) {
            $value = $data[self::FIELD_LAST_UPDATED] ?? null;
            $ext = (isset($data[self::FIELD_LAST_UPDATED_EXT]) && is_array($data[self::FIELD_LAST_UPDATED_EXT])) ? $data[self::FIELD_LAST_UPDATED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setLastUpdated($value);
                } else if (is_array($value)) {
                    $this->setLastUpdated(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setLastUpdated(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastUpdated(new FHIRInstant($ext));
            } else {
                $this->setLastUpdated(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_SOURCE, $data) || array_key_exists(self::FIELD_SOURCE_EXT, $data)) {
            $value = $data[self::FIELD_SOURCE] ?? null;
            $ext = (isset($data[self::FIELD_SOURCE_EXT]) && is_array($data[self::FIELD_SOURCE_EXT])) ? $data[self::FIELD_SOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setSource($value);
                } else if (is_array($value)) {
                    $this->setSource(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setSource(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSource(new FHIRUri($ext));
            } else {
                $this->setSource(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_PROFILE, $data) || array_key_exists(self::FIELD_PROFILE_EXT, $data)) {
            $value = $data[self::FIELD_PROFILE] ?? null;
            $ext = (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT])) ? $data[self::FIELD_PROFILE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->addProfile($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCanonical) {
                            $this->addProfile($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addProfile(new FHIRCanonical(array_merge($v, $iext)));
                            } else {
                                $this->addProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addProfile(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->addProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addProfile(new FHIRCanonical($iext));
                }
            } else {
                $this->addProfile(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_SECURITY, $data)) {
            if (is_array($data[self::FIELD_SECURITY])) {
                foreach($data[self::FIELD_SECURITY] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addSecurity($v);
                    } else {
                        $this->addSecurity(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_SECURITY] instanceof FHIRCoding) {
                $this->addSecurity($data[self::FIELD_SECURITY]);
            } else {
                $this->addSecurity(new FHIRCoding($data[self::FIELD_SECURITY]));
            }
        }
        if (array_key_exists(self::FIELD_TAG, $data)) {
            if (is_array($data[self::FIELD_TAG])) {
                foreach($data[self::FIELD_TAG] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addTag($v);
                    } else {
                        $this->addTag(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_TAG] instanceof FHIRCoding) {
                $this->addTag($data[self::FIELD_TAG]);
            } else {
                $this->addTag(new FHIRCoding($data[self::FIELD_TAG]));
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version specific identifier, as it appears in the version portion of the
     * URL. This value changes when the resource is created, updated, or deleted.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRId
     */
    public function getVersionId(): null|FHIRId
    {
        return $this->versionId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version specific identifier, as it appears in the version portion of the
     * URL. This value changes when the resource is created, updated, or deleted.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRIdPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRId $versionId
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setVersionId(null|string|FHIRIdPrimitive|FHIRId $versionId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $versionId && !($versionId instanceof FHIRId)) {
            $versionId = new FHIRId($versionId);
        }
        $this->_trackValueSet($this->versionId, $versionId);
        if (!isset($this->_xmlLocations[self::FIELD_VERSION_ID])) {
            $this->_xmlLocations[self::FIELD_VERSION_ID] = [];
        }
        $this->_xmlLocations[self::FIELD_VERSION_ID][0] = $xmlLocation;
        $this->versionId = $versionId;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the resource last changed - e.g. when the version changed.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRInstant
     */
    public function getLastUpdated(): null|FHIRInstant
    {
        return $this->lastUpdated;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the resource last changed - e.g. when the version changed.
     *
     * @param null|string|\DateTimeInterface|\Romeldev\FHIR\R4\FHIRInstantPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRInstant $lastUpdated
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLastUpdated(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $lastUpdated = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $lastUpdated && !($lastUpdated instanceof FHIRInstant)) {
            $lastUpdated = new FHIRInstant($lastUpdated);
        }
        $this->_trackValueSet($this->lastUpdated, $lastUpdated);
        if (!isset($this->_xmlLocations[self::FIELD_LAST_UPDATED])) {
            $this->_xmlLocations[self::FIELD_LAST_UPDATED] = [];
        }
        $this->_xmlLocations[self::FIELD_LAST_UPDATED][0] = $xmlLocation;
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A uri that identifies the source system of the resource. This provides a minimal
     * amount of [[[Provenance]]] information that can be used to track or
     * differentiate the source of information in the resource. The source may identify
     * another FHIR server, document, message, database, etc.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRUri
     */
    public function getSource(): null|FHIRUri
    {
        return $this->source;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A uri that identifies the source system of the resource. This provides a minimal
     * amount of [[[Provenance]]] information that can be used to track or
     * differentiate the source of information in the resource. The source may identify
     * another FHIR server, document, message, database, etc.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRUriPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRUri $source
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSource(null|string|FHIRUriPrimitive|FHIRUri $source = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $source && !($source instanceof FHIRUri)) {
            $source = new FHIRUri($source);
        }
        $this->_trackValueSet($this->source, $source);
        if (!isset($this->_xmlLocations[self::FIELD_SOURCE])) {
            $this->_xmlLocations[self::FIELD_SOURCE] = [];
        }
        $this->_xmlLocations[self::FIELD_SOURCE][0] = $xmlLocation;
        $this->source = $source;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this
     * resource claims to conform to. The URL is a reference to
     * [[[StructureDefinition.url]]].
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCanonical[]
     */
    public function getProfile(): null|array
    {
        return $this->profile;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this
     * resource claims to conform to. The URL is a reference to
     * [[[StructureDefinition.url]]].
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRCanonicalPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRCanonical $profile
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addProfile(null|string|FHIRCanonicalPrimitive|FHIRCanonical $profile = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $profile && !($profile instanceof FHIRCanonical)) {
            $profile = new FHIRCanonical($profile);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_PROFILE])) {
            $this->_xmlLocations[self::FIELD_PROFILE] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_PROFILE]) {
            $this->_xmlLocations[self::FIELD_PROFILE][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_PROFILE][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this
     * resource claims to conform to. The URL is a reference to
     * [[[StructureDefinition.url]]].
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRCanonical[] $profile
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setProfile(array $profile = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_PROFILE]);
        if ([] !== $this->profile) {
            $this->_trackValuesRemoved(count($this->profile));
            $this->profile = [];
        }
        if ([] === $profile) {
            return $this;
        }
        foreach($profile as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addProfile($v, $xmlLocation);
            } else {
                $this->addProfile(new FHIRCanonical($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels applied to this resource. These tags connect specific resources
     * to the overall security policy and infrastructure.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCoding[]
     */
    public function getSecurity(): null|array
    {
        return $this->security;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels applied to this resource. These tags connect specific resources
     * to the overall security policy and infrastructure.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCoding $security
     * @return static
     */
    public function addSecurity(null|FHIRCoding $security = null): self
    {
        if (null === $security) {
            $security = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->security[] = $security;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels applied to this resource. These tags connect specific resources
     * to the overall security policy and infrastructure.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRCoding ...$security
     * @return static
     */
    public function setSecurity(FHIRCoding ...$security): self
    {
        if ([] !== $this->security) {
            $this->_trackValuesRemoved(count($this->security));
            $this->security = [];
        }
        if ([] === $security) {
            return $this;
        }
        foreach($security as $v) {
            $this->addSecurity($v);
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Tags applied to this resource. Tags are intended to be used to identify and
     * relate resources to process and workflow, and applications are not required to
     * consider the tags when interpreting the meaning of a resource.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRCoding[]
     */
    public function getTag(): null|array
    {
        return $this->tag;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Tags applied to this resource. Tags are intended to be used to identify and
     * relate resources to process and workflow, and applications are not required to
     * consider the tags when interpreting the meaning of a resource.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRCoding $tag
     * @return static
     */
    public function addTag(null|FHIRCoding $tag = null): self
    {
        if (null === $tag) {
            $tag = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->tag[] = $tag;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Tags applied to this resource. Tags are intended to be used to identify and
     * relate resources to process and workflow, and applications are not required to
     * consider the tags when interpreting the meaning of a resource.
     *
     * @param \Romeldev\FHIR\R4\FHIRElement\FHIRCoding ...$tag
     * @return static
     */
    public function setTag(FHIRCoding ...$tag): self
    {
        if ([] !== $this->tag) {
            $this->_trackValuesRemoved(count($this->tag));
            $this->tag = [];
        }
        if ([] === $tag) {
            return $this;
        }
        foreach($tag as $v) {
            $this->addTag($v);
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
        if (null !== ($v = $this->getVersionId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastUpdated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_UPDATED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROFILE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSecurity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SECURITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTag())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TAG, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION_ID])) {
            $v = $this->getVersionId();
            foreach($validationRules[self::FIELD_VERSION_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_META, self::FIELD_VERSION_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION_ID])) {
                        $errs[self::FIELD_VERSION_ID] = [];
                    }
                    $errs[self::FIELD_VERSION_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_UPDATED])) {
            $v = $this->getLastUpdated();
            foreach($validationRules[self::FIELD_LAST_UPDATED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_META, self::FIELD_LAST_UPDATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_UPDATED])) {
                        $errs[self::FIELD_LAST_UPDATED] = [];
                    }
                    $errs[self::FIELD_LAST_UPDATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_META, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_META, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECURITY])) {
            $v = $this->getSecurity();
            foreach($validationRules[self::FIELD_SECURITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_META, self::FIELD_SECURITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY])) {
                        $errs[self::FIELD_SECURITY] = [];
                    }
                    $errs[self::FIELD_SECURITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TAG])) {
            $v = $this->getTag();
            foreach($validationRules[self::FIELD_TAG] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_META, self::FIELD_TAG, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TAG])) {
                        $errs[self::FIELD_TAG] = [];
                    }
                    $errs[self::FIELD_TAG][$rule] = $err;
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
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRMeta $type
     * @param null|int|\Romeldev\FHIR\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRMeta
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
        } else if (!($type instanceof FHIRMeta)) {
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
            if (self::FIELD_VERSION_ID === $childName) {
                $type->setVersionId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LAST_UPDATED === $childName) {
                $type->setLastUpdated(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SOURCE === $childName) {
                $type->setSource(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PROFILE === $childName) {
                $type->addProfile(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SECURITY === $childName) {
                $type->addSecurity(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TAG === $childName) {
                $type->addTag(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_VERSION_ID])) {
            $pt = $type->getVersionId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VERSION_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setVersionId((string)$attributes[self::FIELD_VERSION_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LAST_UPDATED])) {
            $pt = $type->getLastUpdated();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LAST_UPDATED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLastUpdated((string)$attributes[self::FIELD_LAST_UPDATED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SOURCE])) {
            $pt = $type->getSource();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SOURCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSource((string)$attributes[self::FIELD_SOURCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PROFILE])) {
            $type->addProfile((string)$attributes[self::FIELD_PROFILE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'Meta', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_VERSION_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getVersionId())) {
            $xw->writeAttribute(self::FIELD_VERSION_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_LAST_UPDATED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLastUpdated())) {
            $xw->writeAttribute(self::FIELD_LAST_UPDATED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_SOURCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSource())) {
            $xw->writeAttribute(self::FIELD_SOURCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_PROFILE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getProfile())) {
            $xw->writeAttribute(self::FIELD_PROFILE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getProfile()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_PROFILE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_VERSION_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getVersionId())) {
            $xw->startElement(self::FIELD_VERSION_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_LAST_UPDATED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLastUpdated())) {
            $xw->startElement(self::FIELD_LAST_UPDATED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_SOURCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSource())) {
            $xw->startElement(self::FIELD_SOURCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PROFILE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getProfile())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_PROFILE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        foreach ($this->getSecurity() as $v) {
            $xw->startElement(self::FIELD_SECURITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getTag() as $v) {
            $xw->startElement(self::FIELD_TAG);
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
        if (null !== ($v = $this->getVersionId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERSION_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERSION_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLastUpdated())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_UPDATED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_UPDATED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSource())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SOURCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SOURCE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRCanonical::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_PROFILE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROFILE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getSecurity())) {
            $out->{self::FIELD_SECURITY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SECURITY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTag())) {
            $out->{self::FIELD_TAG} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TAG}[] = $v;
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