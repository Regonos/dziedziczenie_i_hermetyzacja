<?php

class ContactInfo {
    private $phone_number;
    private $email_address;
    private $mailing_address;
    private $first_name;
    private $last_name;
    private $postal_code;
    private $city;
    private $country;
    private $state;

    /**
     * @param $phone_number
     * @param $email_address
     * @param $mailing_address
     * @param $first_name
     * @param $last_name
     * @param $postal_code
     * @param $city
     * @param $country
     * @param $state
     */
    public function __construct($phone_number, $email_address, $mailing_address, $first_name, $last_name, $postal_code, $city, $country, $state) {
        $this->phone_number = $phone_number;
        $this->email_address = $email_address;
        $this->mailing_address = $mailing_address;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->postal_code = $postal_code;
        $this->city = $city;
        $this->country = $country;
        $this->state = $state;

        return "dsadsadsa";
    }


    /**
     * @return mixed
     */
    public function getPhoneNumber() {
        return $this->phone_number;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress() {
        return $this->email_address;
    }

    /**
     * @param mixed $email_address
     * @return ContactInfo
     */
    public function setEmailAddress($email_address) {
        $this->email_address = $email_address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMailingAddress() {
        return $this->mailing_address;
    }

    /**
     * @param mixed $mailing_address
     * @return ContactInfo
     */
    public function setMailingAddress($mailing_address) {
        $this->mailing_address = $mailing_address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName() {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     * @return ContactInfo
     */
    public function setFirstName($first_name) {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName() {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     * @return ContactInfo
     */
    public function setLastName($last_name) {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostalCode() {
        return $this->postal_code;
    }

    /**
     * @param mixed $postal_code
     * @return ContactInfo
     */
    public function setPostalCode($postal_code) {
        $this->postal_code = $postal_code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return ContactInfo
     */
    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * @param mixed $country
     * @return ContactInfo
     */
    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @param mixed $state
     * @return ContactInfo
     */
    public function setState($state) {
        $this->state = $state;
        return $this;
    }
}
