<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

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
use Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement;
use Romeldev\FHIR\R4\FHIRElement\FHIRBoolean;
use Romeldev\FHIR\R4\FHIRElement\FHIRExtension;
use Romeldev\FHIR\R4\FHIRElement\FHIRMarkdown;
use Romeldev\FHIR\R4\FHIRElement\FHIRString;
use Romeldev\FHIR\R4\FHIRMarkdownPrimitive;
use Romeldev\FHIR\R4\FHIRStringPrimitive;
use Romeldev\FHIR\R4\PHPFHIRConfig;
use Romeldev\FHIR\R4\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4\PHPFHIRConstants;
use Romeldev\FHIR\R4\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4\PHPFHIRXmlWriter;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioOperation
 * @package \Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioOperation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION;

    const FIELD_NUMBER = 'number';
    const FIELD_NUMBER_EXT = '_number';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_INITIATOR = 'initiator';
    const FIELD_INITIATOR_EXT = '_initiator';
    const FIELD_RECEIVER = 'receiver';
    const FIELD_RECEIVER_EXT = '_receiver';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_INITIATOR_ACTIVE = 'initiatorActive';
    const FIELD_INITIATOR_ACTIVE_EXT = '_initiatorActive';
    const FIELD_RECEIVER_ACTIVE = 'receiverActive';
    const FIELD_RECEIVER_ACTIVE_EXT = '_receiverActive';
    const FIELD_REQUEST = 'request';
    const FIELD_RESPONSE = 'response';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The sequential number of the interaction, e.g. 1.2.5.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $number = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of operation - CRUD.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $type = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The human-friendly name of the interaction.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Who starts the transaction.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $initiator = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Who receives the transaction.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $receiver = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A comment to be inserted in the diagram.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the initiator is deactivated right after the transaction.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $initiatorActive = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the receiver is deactivated right after the transaction.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $receiverActive = null;
    /**
     * Example of workflow instance.
     *
     * Each resource instance used by the initiator.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    protected null|FHIRExampleScenarioContainedInstance $request = null;
    /**
     * Example of workflow instance.
     *
     * Each resource instance used by the responder.
     * @var null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    protected null|FHIRExampleScenarioContainedInstance $response = null;

    /**
     * Validation map for fields in type ExampleScenario.Operation
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_NUMBER => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRExampleScenarioOperation Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_NUMBER, $data) || array_key_exists(self::FIELD_NUMBER_EXT, $data)) {
            $value = $data[self::FIELD_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_NUMBER_EXT]) && is_array($data[self::FIELD_NUMBER_EXT])) ? $data[self::FIELD_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNumber($value);
                } else if (is_array($value)) {
                    $this->setNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNumber(new FHIRString($ext));
            } else {
                $this->setNumber(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data) || array_key_exists(self::FIELD_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRString($ext));
            } else {
                $this->setType(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_NAME, $data) || array_key_exists(self::FIELD_NAME_EXT, $data)) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            } else {
                $this->setName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_INITIATOR, $data) || array_key_exists(self::FIELD_INITIATOR_EXT, $data)) {
            $value = $data[self::FIELD_INITIATOR] ?? null;
            $ext = (isset($data[self::FIELD_INITIATOR_EXT]) && is_array($data[self::FIELD_INITIATOR_EXT])) ? $data[self::FIELD_INITIATOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setInitiator($value);
                } else if (is_array($value)) {
                    $this->setInitiator(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setInitiator(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInitiator(new FHIRString($ext));
            } else {
                $this->setInitiator(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_RECEIVER, $data) || array_key_exists(self::FIELD_RECEIVER_EXT, $data)) {
            $value = $data[self::FIELD_RECEIVER] ?? null;
            $ext = (isset($data[self::FIELD_RECEIVER_EXT]) && is_array($data[self::FIELD_RECEIVER_EXT])) ? $data[self::FIELD_RECEIVER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setReceiver($value);
                } else if (is_array($value)) {
                    $this->setReceiver(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setReceiver(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReceiver(new FHIRString($ext));
            } else {
                $this->setReceiver(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            } else {
                $this->setDescription(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_INITIATOR_ACTIVE, $data) || array_key_exists(self::FIELD_INITIATOR_ACTIVE_EXT, $data)) {
            $value = $data[self::FIELD_INITIATOR_ACTIVE] ?? null;
            $ext = (isset($data[self::FIELD_INITIATOR_ACTIVE_EXT]) && is_array($data[self::FIELD_INITIATOR_ACTIVE_EXT])) ? $data[self::FIELD_INITIATOR_ACTIVE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setInitiatorActive($value);
                } else if (is_array($value)) {
                    $this->setInitiatorActive(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setInitiatorActive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInitiatorActive(new FHIRBoolean($ext));
            } else {
                $this->setInitiatorActive(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_RECEIVER_ACTIVE, $data) || array_key_exists(self::FIELD_RECEIVER_ACTIVE_EXT, $data)) {
            $value = $data[self::FIELD_RECEIVER_ACTIVE] ?? null;
            $ext = (isset($data[self::FIELD_RECEIVER_ACTIVE_EXT]) && is_array($data[self::FIELD_RECEIVER_ACTIVE_EXT])) ? $data[self::FIELD_RECEIVER_ACTIVE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setReceiverActive($value);
                } else if (is_array($value)) {
                    $this->setReceiverActive(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setReceiverActive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReceiverActive(new FHIRBoolean($ext));
            } else {
                $this->setReceiverActive(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_REQUEST, $data)) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRExampleScenarioContainedInstance) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRExampleScenarioContainedInstance($data[self::FIELD_REQUEST]));
            }
        }
        if (array_key_exists(self::FIELD_RESPONSE, $data)) {
            if ($data[self::FIELD_RESPONSE] instanceof FHIRExampleScenarioContainedInstance) {
                $this->setResponse($data[self::FIELD_RESPONSE]);
            } else {
                $this->setResponse(new FHIRExampleScenarioContainedInstance($data[self::FIELD_RESPONSE]));
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
     * The sequential number of the interaction, e.g. 1.2.5.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    public function getNumber(): null|FHIRString
    {
        return $this->number;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The sequential number of the interaction, e.g. 1.2.5.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRStringPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRString $number
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setNumber(null|string|FHIRStringPrimitive|FHIRString $number = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $number && !($number instanceof FHIRString)) {
            $number = new FHIRString($number);
        }
        $this->_trackValueSet($this->number, $number);
        if (!isset($this->_xmlLocations[self::FIELD_NUMBER])) {
            $this->_xmlLocations[self::FIELD_NUMBER] = [];
        }
        $this->_xmlLocations[self::FIELD_NUMBER][0] = $xmlLocation;
        $this->number = $number;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of operation - CRUD.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    public function getType(): null|FHIRString
    {
        return $this->type;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of operation - CRUD.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRStringPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRString $type
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setType(null|string|FHIRStringPrimitive|FHIRString $type = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $type && !($type instanceof FHIRString)) {
            $type = new FHIRString($type);
        }
        $this->_trackValueSet($this->type, $type);
        if (!isset($this->_xmlLocations[self::FIELD_TYPE])) {
            $this->_xmlLocations[self::FIELD_TYPE] = [];
        }
        $this->_xmlLocations[self::FIELD_TYPE][0] = $xmlLocation;
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The human-friendly name of the interaction.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The human-friendly name of the interaction.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRStringPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRString $name
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $name && !($name instanceof FHIRString)) {
            $name = new FHIRString($name);
        }
        $this->_trackValueSet($this->name, $name);
        if (!isset($this->_xmlLocations[self::FIELD_NAME])) {
            $this->_xmlLocations[self::FIELD_NAME] = [];
        }
        $this->_xmlLocations[self::FIELD_NAME][0] = $xmlLocation;
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Who starts the transaction.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    public function getInitiator(): null|FHIRString
    {
        return $this->initiator;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Who starts the transaction.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRStringPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRString $initiator
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setInitiator(null|string|FHIRStringPrimitive|FHIRString $initiator = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $initiator && !($initiator instanceof FHIRString)) {
            $initiator = new FHIRString($initiator);
        }
        $this->_trackValueSet($this->initiator, $initiator);
        if (!isset($this->_xmlLocations[self::FIELD_INITIATOR])) {
            $this->_xmlLocations[self::FIELD_INITIATOR] = [];
        }
        $this->_xmlLocations[self::FIELD_INITIATOR][0] = $xmlLocation;
        $this->initiator = $initiator;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Who receives the transaction.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRString
     */
    public function getReceiver(): null|FHIRString
    {
        return $this->receiver;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Who receives the transaction.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRStringPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRString $receiver
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setReceiver(null|string|FHIRStringPrimitive|FHIRString $receiver = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $receiver && !($receiver instanceof FHIRString)) {
            $receiver = new FHIRString($receiver);
        }
        $this->_trackValueSet($this->receiver, $receiver);
        if (!isset($this->_xmlLocations[self::FIELD_RECEIVER])) {
            $this->_xmlLocations[self::FIELD_RECEIVER] = [];
        }
        $this->_xmlLocations[self::FIELD_RECEIVER][0] = $xmlLocation;
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A comment to be inserted in the diagram.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A comment to be inserted in the diagram.
     *
     * @param null|string|\Romeldev\FHIR\R4\FHIRMarkdownPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRMarkdown $description
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $description && !($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown($description);
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the initiator is deactivated right after the transaction.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getInitiatorActive(): null|FHIRBoolean
    {
        return $this->initiatorActive;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the initiator is deactivated right after the transaction.
     *
     * @param null|string|bool|\Romeldev\FHIR\R4\FHIRBooleanPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRBoolean $initiatorActive
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setInitiatorActive(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $initiatorActive = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $initiatorActive && !($initiatorActive instanceof FHIRBoolean)) {
            $initiatorActive = new FHIRBoolean($initiatorActive);
        }
        $this->_trackValueSet($this->initiatorActive, $initiatorActive);
        if (!isset($this->_xmlLocations[self::FIELD_INITIATOR_ACTIVE])) {
            $this->_xmlLocations[self::FIELD_INITIATOR_ACTIVE] = [];
        }
        $this->_xmlLocations[self::FIELD_INITIATOR_ACTIVE][0] = $xmlLocation;
        $this->initiatorActive = $initiatorActive;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the receiver is deactivated right after the transaction.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getReceiverActive(): null|FHIRBoolean
    {
        return $this->receiverActive;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the receiver is deactivated right after the transaction.
     *
     * @param null|string|bool|\Romeldev\FHIR\R4\FHIRBooleanPrimitive|\Romeldev\FHIR\R4\FHIRElement\FHIRBoolean $receiverActive
     * @param \Romeldev\FHIR\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setReceiverActive(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $receiverActive = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $receiverActive && !($receiverActive instanceof FHIRBoolean)) {
            $receiverActive = new FHIRBoolean($receiverActive);
        }
        $this->_trackValueSet($this->receiverActive, $receiverActive);
        if (!isset($this->_xmlLocations[self::FIELD_RECEIVER_ACTIVE])) {
            $this->_xmlLocations[self::FIELD_RECEIVER_ACTIVE] = [];
        }
        $this->_xmlLocations[self::FIELD_RECEIVER_ACTIVE][0] = $xmlLocation;
        $this->receiverActive = $receiverActive;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Each resource instance used by the initiator.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public function getRequest(): null|FHIRExampleScenarioContainedInstance
    {
        return $this->request;
    }

    /**
     * Example of workflow instance.
     *
     * Each resource instance used by the initiator.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance $request
     * @return static
     */
    public function setRequest(null|FHIRExampleScenarioContainedInstance $request = null): self
    {
        if (null === $request) {
            $request = new FHIRExampleScenarioContainedInstance();
        }
        $this->_trackValueSet($this->request, $request);
        $this->request = $request;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Each resource instance used by the responder.
     *
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public function getResponse(): null|FHIRExampleScenarioContainedInstance
    {
        return $this->response;
    }

    /**
     * Example of workflow instance.
     *
     * Each resource instance used by the responder.
     *
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance $response
     * @return static
     */
    public function setResponse(null|FHIRExampleScenarioContainedInstance $response = null): self
    {
        if (null === $response) {
            $response = new FHIRExampleScenarioContainedInstance();
        }
        $this->_trackValueSet($this->response, $response);
        $this->response = $response;
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
        if (null !== ($v = $this->getNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitiator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReceiver())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECEIVER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitiatorActive())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIATOR_ACTIVE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReceiverActive())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECEIVER_ACTIVE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESPONSE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER])) {
            $v = $this->getNumber();
            foreach($validationRules[self::FIELD_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION, self::FIELD_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER])) {
                        $errs[self::FIELD_NUMBER] = [];
                    }
                    $errs[self::FIELD_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIATOR])) {
            $v = $this->getInitiator();
            foreach($validationRules[self::FIELD_INITIATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION, self::FIELD_INITIATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIATOR])) {
                        $errs[self::FIELD_INITIATOR] = [];
                    }
                    $errs[self::FIELD_INITIATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECEIVER])) {
            $v = $this->getReceiver();
            foreach($validationRules[self::FIELD_RECEIVER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION, self::FIELD_RECEIVER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECEIVER])) {
                        $errs[self::FIELD_RECEIVER] = [];
                    }
                    $errs[self::FIELD_RECEIVER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIATOR_ACTIVE])) {
            $v = $this->getInitiatorActive();
            foreach($validationRules[self::FIELD_INITIATOR_ACTIVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION, self::FIELD_INITIATOR_ACTIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIATOR_ACTIVE])) {
                        $errs[self::FIELD_INITIATOR_ACTIVE] = [];
                    }
                    $errs[self::FIELD_INITIATOR_ACTIVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECEIVER_ACTIVE])) {
            $v = $this->getReceiverActive();
            foreach($validationRules[self::FIELD_RECEIVER_ACTIVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION, self::FIELD_RECEIVER_ACTIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECEIVER_ACTIVE])) {
                        $errs[self::FIELD_RECEIVER_ACTIVE] = [];
                    }
                    $errs[self::FIELD_RECEIVER_ACTIVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION, self::FIELD_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST])) {
                        $errs[self::FIELD_REQUEST] = [];
                    }
                    $errs[self::FIELD_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSE])) {
            $v = $this->getResponse();
            foreach($validationRules[self::FIELD_RESPONSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION, self::FIELD_RESPONSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSE])) {
                        $errs[self::FIELD_RESPONSE] = [];
                    }
                    $errs[self::FIELD_RESPONSE][$rule] = $err;
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
     * @param null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation $type
     * @param null|int|\Romeldev\FHIR\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
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
        } else if (!($type instanceof FHIRExampleScenarioOperation)) {
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
            if (self::FIELD_NUMBER === $childName) {
                $type->setNumber(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_NAME === $childName) {
                $type->setName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_INITIATOR === $childName) {
                $type->setInitiator(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RECEIVER === $childName) {
                $type->setReceiver(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_INITIATOR_ACTIVE === $childName) {
                $type->setInitiatorActive(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RECEIVER_ACTIVE === $childName) {
                $type->setReceiverActive(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REQUEST === $childName) {
                $type->setRequest(FHIRExampleScenarioContainedInstance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESPONSE === $childName) {
                $type->setResponse(FHIRExampleScenarioContainedInstance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_NUMBER])) {
            $pt = $type->getNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setNumber((string)$attributes[self::FIELD_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INITIATOR])) {
            $pt = $type->getInitiator();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_INITIATOR], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setInitiator((string)$attributes[self::FIELD_INITIATOR], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RECEIVER])) {
            $pt = $type->getReceiver();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RECEIVER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setReceiver((string)$attributes[self::FIELD_RECEIVER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_INITIATOR_ACTIVE])) {
            $pt = $type->getInitiatorActive();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_INITIATOR_ACTIVE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setInitiatorActive((string)$attributes[self::FIELD_INITIATOR_ACTIVE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RECEIVER_ACTIVE])) {
            $pt = $type->getReceiverActive();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RECEIVER_ACTIVE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setReceiverActive((string)$attributes[self::FIELD_RECEIVER_ACTIVE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'ExampleScenarioOperation', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getNumber())) {
            $xw->writeAttribute(self::FIELD_NUMBER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getType())) {
            $xw->writeAttribute(self::FIELD_TYPE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getName())) {
            $xw->writeAttribute(self::FIELD_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_INITIATOR] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getInitiator())) {
            $xw->writeAttribute(self::FIELD_INITIATOR, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_RECEIVER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getReceiver())) {
            $xw->writeAttribute(self::FIELD_RECEIVER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_INITIATOR_ACTIVE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getInitiatorActive())) {
            $xw->writeAttribute(self::FIELD_INITIATOR_ACTIVE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_RECEIVER_ACTIVE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getReceiverActive())) {
            $xw->writeAttribute(self::FIELD_RECEIVER_ACTIVE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getNumber())) {
            $xw->startElement(self::FIELD_NUMBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getName())) {
            $xw->startElement(self::FIELD_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_INITIATOR] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getInitiator())) {
            $xw->startElement(self::FIELD_INITIATOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_RECEIVER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getReceiver())) {
            $xw->startElement(self::FIELD_RECEIVER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_INITIATOR_ACTIVE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getInitiatorActive())) {
            $xw->startElement(self::FIELD_INITIATOR_ACTIVE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_RECEIVER_ACTIVE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getReceiverActive())) {
            $xw->startElement(self::FIELD_RECEIVER_ACTIVE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRequest())) {
            $xw->startElement(self::FIELD_REQUEST);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getResponse())) {
            $xw->startElement(self::FIELD_RESPONSE);
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
        if (null !== ($v = $this->getNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getInitiator())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INITIATOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INITIATOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReceiver())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RECEIVER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RECEIVER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getInitiatorActive())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INITIATOR_ACTIVE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INITIATOR_ACTIVE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReceiverActive())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RECEIVER_ACTIVE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RECEIVER_ACTIVE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequest())) {
            $out->{self::FIELD_REQUEST} = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $out->{self::FIELD_RESPONSE} = $v;
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