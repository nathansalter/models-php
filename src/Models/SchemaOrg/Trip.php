<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Trip extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Trip";
    }

    public static function fieldList() {
        $fields = [
            "provider" => "provider",
            "offers" => "offers",
            "arrivalTime" => "arrivalTime",
            "departureTime" => "departureTime",
            "partOfTrip" => "partOfTrip",
            "subTrip" => "subTrip",
            "itinerary" => "itinerary",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $provider;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use <a class="localLink" href="https://schema.org/businessFunction">businessFunction</a> to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a <a class="localLink" href="https://schema.org/Demand">Demand</a>. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer|\OpenActive\Models\SchemaOrg\Demand
     */
    protected $offers;

    /**
     * The expected arrival time.
     *
     *
     * @var DateTime|string|null
     */
    protected $arrivalTime;

    /**
     * The expected departure time.
     *
     *
     * @var DateTime|string|null
     */
    protected $departureTime;

    /**
     * Identifies that this <a class="localLink" href="https://schema.org/Trip">Trip</a> is a subTrip of another Trip.  For example Day 1, Day 2, etc. of a multi-day trip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Trip
     */
    protected $partOfTrip;

    /**
     * Identifies a <a class="localLink" href="https://schema.org/Trip">Trip</a> that is a subTrip of this Trip.  For example Day 1, Day 2, etc. of a multi-day trip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Trip
     */
    protected $subTrip;

    /**
     * Destination(s) ( <a class="localLink" href="https://schema.org/Place">Place</a> ) that make up a trip. For a trip where destination order is important use <a class="localLink" href="https://schema.org/ItemList">ItemList</a> to specify that order (see examples).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\Place
     */
    protected $itinerary;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer|\OpenActive\Models\SchemaOrg\Demand
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer|\OpenActive\Models\SchemaOrg\Demand $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Offer",
            "\OpenActive\Models\SchemaOrg\Demand",
        );

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return DateTime|string|null
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    /**
     * @param DateTime|string|null $arrivalTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArrivalTime($arrivalTime)
    {
        $types = array(
            "DateTime",
            "Time",
            "null",
        );

        $arrivalTime = self::checkTypes($arrivalTime, $types);

        $this->arrivalTime = $arrivalTime;
    }

    /**
     * @return DateTime|string|null
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * @param DateTime|string|null $departureTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartureTime($departureTime)
    {
        $types = array(
            "DateTime",
            "Time",
            "null",
        );

        $departureTime = self::checkTypes($departureTime, $types);

        $this->departureTime = $departureTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Trip
     */
    public function getPartOfTrip()
    {
        return $this->partOfTrip;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Trip $partOfTrip
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfTrip($partOfTrip)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Trip",
        );

        $partOfTrip = self::checkTypes($partOfTrip, $types);

        $this->partOfTrip = $partOfTrip;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Trip
     */
    public function getSubTrip()
    {
        return $this->subTrip;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Trip $subTrip
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubTrip($subTrip)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Trip",
        );

        $subTrip = self::checkTypes($subTrip, $types);

        $this->subTrip = $subTrip;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\Place
     */
    public function getItinerary()
    {
        return $this->itinerary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\Place $itinerary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItinerary($itinerary)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ItemList",
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $itinerary = self::checkTypes($itinerary, $types);

        $this->itinerary = $itinerary;
    }

}
