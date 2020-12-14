<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Offer](https://schema.org/Offer), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Offer extends \OpenActive\Models\SchemaOrg\Offer
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Offer";
    }

    public static function fieldList() {
        $fields = [
            "identifier" => "identifier",
            "name" => "name",
            "description" => "description",
            "acceptedPaymentMethod" => "acceptedPaymentMethod",
            "advanceBooking" => "advanceBooking",
            "ageRange" => "ageRange",
            "availableChannel" => "availableChannel",
            "latestCancellationBeforeStartDate" => "latestCancellationBeforeStartDate",
            "openBookingFlowRequirement" => "openBookingFlowRequirement",
            "prepayment" => "prepayment",
            "price" => "price",
            "priceCurrency" => "priceCurrency",
            "url" => "url",
            "validFromBeforeStartDate" => "validFromBeforeStartDate",
            "partySize" => "beta:partySize",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "SB1234"
     * ```
     *
     * @var string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    protected $identifier;

    /**
     * The name of the Offer suitable for communication to participants.
     *
     * ```json
     * "name": "Speedball winger position"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A free text description of the Offer
     *
     * ```json
     * "description": "Concession requirements are available at https://www.fusion-lifestyle.com/. Proof of entitlement to concession membership must be provided when you visit the centre."
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * Indicates the offline payment methods accepted by this provider.
     *
     * ```json
     * "acceptedPaymentMethod": [
     *   "http://purl.org/goodrelations/v1#Cash",
     *   "http://purl.org/goodrelations/v1#PaymentMethodCreditCard"
     * ]
     * ```
     *
     * @var \OpenActive\Enums\PaymentMethod[]|null
     */
    protected $acceptedPaymentMethod;

    /**
     * Indicates whether to accept this offer, a participant must book in advance, whether they must pay on attending, or have option to do either. Values must be one of  https://openactive.io/Required,  https://openactive.io/Optional or  https://openactive.io/Unavailable.
     *
     * ```json
     * "advanceBooking": "https://openactive.io/Required"
     * ```
     *
     * @var \OpenActive\Enums\RequiredStatusType|null
     */
    protected $advanceBooking;

    /**
     * Indicates that an Offer is applicable to a specific age range. Specified as a QuantitativeValue with minValue and maxValue properties.
     *
     * ```json
     * "ageRange": {
     *   "@type": "QuantitativeValue",
     *   "minValue": 15,
     *   "maxValue": 60
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\QuantitativeValue
     */
    protected $ageRange;

    /**
     * The channels through which a booking can be made.
     *
     *
     * @var \OpenActive\Enums\AvailableChannelType[]|null
     */
    protected $availableChannel;

    /**
     * The duration before the startDate during which this Offer may not be cancelled, given in ISO 8601 format.
     *
     *
     * @var DateInterval|null
     */
    protected $latestCancellationBeforeStartDate;

    /**
     * Can include  https://openactive.io/OpenBookingIntakeForm,  https://openactive.io/OpenBookingAttendeeDetails,  https://openactive.io/OpenBookingApproval,  https://openactive.io/OpenBookingNegotiation,  https://openactive.io/OpenBookingMessageExchange
     *
     *
     * @var \OpenActive\Enums\OpenBookingFlowRequirement[]|null
     */
    protected $openBookingFlowRequirement;

    /**
     * Indicates whether to accept this offer, a participant must pay in advance, pay when attending, or have the option to do either. Values must be one of  https://openactive.io/Required,  https://openactive.io/Optional or  https://openactive.io/Unavailable.
     *
     * ```json
     * "prepayment": "https://openactive.io/Required"
     * ```
     *
     * @var \OpenActive\Enums\RequiredStatusType|null
     */
    protected $prepayment;

    /**
     * The offer price of the activity.
     * This price should be specified without currency symbols and as a floating point number with two decimal places.
     * The currency of the price should be expressed in the priceCurrency field.
     * Includes or excludes tax depending on the taxMode of the seller.
     *
     * ```json
     * "price": "33"
     * ```
     *
     * @var Number|null
     */
    protected $price;

    /**
     * The currency of the price. Specified as a 3-letter ISO 4217 value. If an Offer has a zero price, then this property is not required. Otherwise the priceCurrency must be specified.
     *
     * ```json
     * "priceCurrency": "GBP"
     * ```
     *
     * @var string
     */
    protected $priceCurrency;

    /**
     * URL describing the offer
     *
     * ```json
     * "url": "http://www.rphs.org.uk/"
     * ```
     *
     * @var string
     */
    protected $url;

    /**
     * The duration before the startDate for which this Offer is valid, given in ISO 8601 format. This is a relatively-defined equivalent of schema:validFrom, to allow for Offer inheritance.
     *
     *
     * @var DateInterval|null
     */
    protected $validFromBeforeStartDate;

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * Number of people the reservation should accommodate.
     * 
     * If you are using this property, please join the discussion at proposal [#250](https://github.com/openactive/modelling-opportunity-data/issues/250).
     *
     *
     * @var \OpenActive\Models\QuantitativeValue
     */
    protected $partySize;

    /**
     * @return string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = [
            "string",
            "int",
            "\OpenActive\Models\OA\PropertyValue",
            "\OpenActive\Models\OA\PropertyValue[]",
            "null",
        ];

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = [
            "string",
        ];

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = [
            "string",
        ];

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return \OpenActive\Enums\PaymentMethod[]|null
     */
    public function getAcceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }

    /**
     * @param \OpenActive\Enums\PaymentMethod[]|null $acceptedPaymentMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptedPaymentMethod($acceptedPaymentMethod)
    {
        $types = [
            "\OpenActive\Enums\PaymentMethod[]",
            "null",
        ];

        $acceptedPaymentMethod = self::checkTypes($acceptedPaymentMethod, $types);

        $this->acceptedPaymentMethod = $acceptedPaymentMethod;
    }

    /**
     * @return \OpenActive\Enums\RequiredStatusType|null
     */
    public function getAdvanceBooking()
    {
        return $this->advanceBooking;
    }

    /**
     * @param \OpenActive\Enums\RequiredStatusType|null $advanceBooking
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdvanceBooking($advanceBooking)
    {
        $types = [
            "\OpenActive\Enums\RequiredStatusType",
            "null",
        ];

        $advanceBooking = self::checkTypes($advanceBooking, $types);

        $this->advanceBooking = $advanceBooking;
    }

    /**
     * @return \OpenActive\Models\OA\QuantitativeValue
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * @param \OpenActive\Models\OA\QuantitativeValue $ageRange
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAgeRange($ageRange)
    {
        $types = [
            "\OpenActive\Models\OA\QuantitativeValue",
        ];

        $ageRange = self::checkTypes($ageRange, $types);

        $this->ageRange = $ageRange;
    }

    /**
     * @return \OpenActive\Enums\AvailableChannelType[]|null
     */
    public function getAvailableChannel()
    {
        return $this->availableChannel;
    }

    /**
     * @param \OpenActive\Enums\AvailableChannelType[]|null $availableChannel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableChannel($availableChannel)
    {
        $types = [
            "\OpenActive\Enums\AvailableChannelType[]",
            "null",
        ];

        $availableChannel = self::checkTypes($availableChannel, $types);

        $this->availableChannel = $availableChannel;
    }

    /**
     * @return DateInterval|null
     */
    public function getLatestCancellationBeforeStartDate()
    {
        return $this->latestCancellationBeforeStartDate;
    }

    /**
     * @param DateInterval|null $latestCancellationBeforeStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLatestCancellationBeforeStartDate($latestCancellationBeforeStartDate)
    {
        $types = [
            "DateInterval",
            "null",
        ];

        $latestCancellationBeforeStartDate = self::checkTypes($latestCancellationBeforeStartDate, $types);

        $this->latestCancellationBeforeStartDate = $latestCancellationBeforeStartDate;
    }

    /**
     * @return \OpenActive\Enums\OpenBookingFlowRequirement[]|null
     */
    public function getOpenBookingFlowRequirement()
    {
        return $this->openBookingFlowRequirement;
    }

    /**
     * @param \OpenActive\Enums\OpenBookingFlowRequirement[]|null $openBookingFlowRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpenBookingFlowRequirement($openBookingFlowRequirement)
    {
        $types = [
            "\OpenActive\Enums\OpenBookingFlowRequirement[]",
            "null",
        ];

        $openBookingFlowRequirement = self::checkTypes($openBookingFlowRequirement, $types);

        $this->openBookingFlowRequirement = $openBookingFlowRequirement;
    }

    /**
     * @return \OpenActive\Enums\RequiredStatusType|null
     */
    public function getPrepayment()
    {
        return $this->prepayment;
    }

    /**
     * @param \OpenActive\Enums\RequiredStatusType|null $prepayment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrepayment($prepayment)
    {
        $types = [
            "\OpenActive\Enums\RequiredStatusType",
            "null",
        ];

        $prepayment = self::checkTypes($prepayment, $types);

        $this->prepayment = $prepayment;
    }

    /**
     * @return Number|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Number|null $price
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrice($price)
    {
        $types = [
            "Number",
            "null",
        ];

        $price = self::checkTypes($price, $types);

        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }

    /**
     * @param string $priceCurrency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceCurrency($priceCurrency)
    {
        $types = [
            "string",
        ];

        $priceCurrency = self::checkTypes($priceCurrency, $types);

        $this->priceCurrency = $priceCurrency;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrl($url)
    {
        $types = [
            "string",
        ];

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

    /**
     * @return DateInterval|null
     */
    public function getValidFromBeforeStartDate()
    {
        return $this->validFromBeforeStartDate;
    }

    /**
     * @param DateInterval|null $validFromBeforeStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFromBeforeStartDate($validFromBeforeStartDate)
    {
        $types = [
            "DateInterval",
            "null",
        ];

        $validFromBeforeStartDate = self::checkTypes($validFromBeforeStartDate, $types);

        $this->validFromBeforeStartDate = $validFromBeforeStartDate;
    }

    /**
     * @return \OpenActive\Models\QuantitativeValue
     */
    public function getPartySize()
    {
        return $this->partySize;
    }

    /**
     * @param \OpenActive\Models\QuantitativeValue $partySize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartySize($partySize)
    {
        $types = [
            "\OpenActive\Models\QuantitativeValue",
        ];

        $partySize = self::checkTypes($partySize, $types);

        $this->partySize = $partySize;
    }

}
