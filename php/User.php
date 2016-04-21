<?php
namespace Edu\Cnm\Kgarrott\Ushpa-event-calendar;
/**
 * These are variables and methods for the user entity
 *
 * @author Kai Garrott <garrottkai@gmail.com>
 */

class User implements \JsonSerializable {
	/**
	 * id for the user creating a posting; this is the primary key
	 * @var int $userUshpaNumber
	 */
	private $userUshpaNumber;
	/**
	 * full name of the user creating a posting
	 * @var string $userFullName
	 */
	private $userFullName;
	/**
	 * this is the email address of the user creating a posting
	 * @var string $userEmail
	 */
	private $userEmail;
	/**
	 * this is the phone number of the user creating a posting
	 * @var int $userPhone
	 */
	private $userPhone;

	/**
	 * constructor for this user
	 *
	 * @param int $newUserUshpaNumber id of the user
	 * @param string $newUserFullName full name of the user
	 * @param string $newUserEmail email of the user
	 * @param int $newUserPhone phone number of the user
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if integers are not positive
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if other exception occurs
	 */
	public function __construct(int $newUserUshpaNumber, string $newUserFullName, string $newUserEmail, int $newUserPhone) {
		try {
			$this->setUserUshpaNumber($newUserUshpaNumber);
			$this->setUserFullName($newUserFullName);
			$this->setUserEmail($newUserEmail);
			$this->setUserPhone($newUserPhone);
		} catch(\InvalidArgumentException $invalidArgument) {
			// rethrow the exception to the caller
			throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		} catch(\RangeException $range) {
			// rethrow the exception to the caller
			throw(new \RangeException($range->getMessage(), 0, $range));
		} catch(\TypeError $typeError) {
			// rethrow the exception to the caller
			throw(new \TypeError($typeError->getMessage(), 0, $typeError));
		} catch(\Exception $exception) {
			// rethrow the exception to the caller
			throw(new \Exception($exception->getMessage(), 0, $exception));
		}
	}

	/**
	 * accessor method for user USHPA number
	 *
	 * @return int value of user USHPA number
	 */
	public function getUserUshpaNumber() {
		return ($this->userUshpaNumber);
	}

	/**
	 * mutator method for user USHPA number
	 *
	 * @param int $newUserUshpaNumber new USHPA number entry
	 * @throws \RangeException if $newUserUshpaNumber is not positive
	 * @throws \TypeError if $newUserUshpaNumber is not an integer
	 */
	public function setUserUshpaNumber(int $newUserUshpaNumber) {
		// verify the user USHPA number is positive
		if($newUserUshpaNumber <= 0) {
			throw(new \RangeException("User USHPA Number not positive"));
		}

		// convert and store the user USHPA number
		$this->userUshpaNumber = $newUserUshpaNumber;
	}

	/**
	 * accessor method for user full name
	 *
	 * @return string value of user full name
	 */
	public function getUserFullName() {
		return ($this->userFullName);
	}

	/**
	 * mutator method for user full name
	 *
	 * @param string $newUserFullName new value of user full name
	 * @throws \InvalidArgumentException if $newUserFullName is not a string or is insecure
	 * @throws \TypeError if $newUserFullName is not a string
	 */
	public function setUserFullName(string $newUserFullName) {
		// verify that the user full name is secure
		$newUserFullName = trim($newUserFullName);
		$newUserFullName = filter_var($newUserFullName, FILTER_SANITIZE_STRING);
		if(empty($newUserFullName) === true) {
			throw(new \InvalidArgumentException("User full name content is empty or insecure"));
		}

		// store the user full name
		$this->userFullName = $newUserFullName;
	}

	/**
	 * accessor method for user email
	 *
	 * @return string value of user email
	 */
	public function getUserEmail() {
		return ($this->userEmail);
	}

	/**
	 * mutator method for user email
	 *
	 * @param string $newUserEmail new value of user email
	 * @throws \InvalidArgumentException if new user email is not a string or is insecure
	 * @throws \TypeError if new user email is not a string
	 */
	public function setUserEmail(string $newUserEmail) {
		// verify the user email is secure
		$newUserEmail = trim($newUserEmail);
		$newUserEmail = filter_var($newUserEmail, FILTER_SANITIZE_EMAIL);
		if(empty($newUserEmail) === true) {
			throw(new \InvalidArgumentException("User email is empty or insecure"));
		}

		// store the user email
		$this->userEmail = $newUserEmail;
	}

	/**
	 * accessor method for user phone
	 *
	 * @return int value of user phone
	 */
	public function getUserPhone() {
		return ($this->userPhone);
	}

	/**
	 * mutator method for user phone
	 *
	 * @param int $newUserPhone new value of user phone
	 * @throws \RangeException if $newUserPhone is not positive
	 * @throws \TypeError if $newUserPhone is not an integer
	 */
	public function setUserPhone(int $newUserPhone) {
		// verify the new user phone is positive
		if($newUserPhone <= 0) {
			throw(new \RangeException("User phone is not positive"));
		}

		// store the user phone
		$this->userPhone = $newUserPhone;
	}
}

/**
 * ////////////////////////////////////////////////////////////////
 *
 * These are variables and methods for the event entity
 */

class Event implements \JsonSerializable {
	/**
	 * This is the automatically generated id for the event posting; it is the primary key
	 * @var int $eventId
	 */
	private $eventId;
	/**
	 * Name of the event
	 * @var string eventName
	 */
	private $eventName;
	/**
	 * Type of event, e.g. fly-in, competition, clinic
	 * @var string $eventType
	 */
	private $eventType;
	/**
	 * Type of wing participating in event: Hang glider or paraglider
	 * @var string $eventWingType
	 */
	private $eventWingType;
	/**
	 * Map location of event
	 * @var string $eventLocation
	 */
	private $eventLocation;
	/**
	 * Does this event recur?
	 * @var bool $eventRecurs
	 */
	private $eventRecurs;
	/**
	 * Date on which event begins; in a PHP DateTime object
	 * @var \DateTime $eventStartDate
	 */
	private $eventStartDate;
	/**
	 * Date on which event ends; in a PHP DateTime object
	 * @var \DateTime $eventEndDate
	 */
	private $eventEndDate;
	/**
	 * Description of the event
	 * @var string $eventDescription
	 */
	private $eventDescription;
	/**
	 * Additional information about the event
	 * @var string $eventAdditionalInfo
	 */
	private $eventAdditionalInfo;

	/**
	 * accessor method for event id
	 *
	 * @return int|null value of event id
	 */
	public function getEventId() {
		return ($this->eventId);
	}

	/**
	 * mutator method for event id
	 *
	 * @param int|null $newEventId new value of event id
	 * @throws \RangeException if $newEventId is not positive
	 * @throws \TypeError if $newEventId is not an integer
	 */
	public function setEventId(int $newEventId) {
		// if the event id is null, this is a new event to which mySQL has not yet assigned an id
		if($newEventId === null) {
			$this->eventId = null;
			return;
		}

		// verify that the event id is positive
		if($newEventId <= 0) {
			throw(new \RangeException("Event ID is not positive"));
		}

		// convert and store the event id
		$this->eventId = $newEventId;
	}

	/**
	 * accessor method for event name
	 *
	 * @return string value of event name
	 */
	public function getEventName() {
		return ($this->eventName);
	}

	/**
	 * mutator method for event name
	 *
	 * @param string $newEventName new event name
	 * @throws \InvalidArgumentException if $newEventName is not a string or is insecure
	 * @throws \TypeError if $newEventName is not a string
	 */
	public function setEventName(string $newEventName) {
		// verify the event name is secure
		$newEventName = trim($newEventName);
		$newEventName = filter_var($newEventName, FILTER_SANITIZE_STRING);
		if (empty($newEventName) === true) {
			throw(new \InvalidArgumentException("Event name is empty or insecure"));
		}

		// store the event name
		$this->eventName = $newEventName;
	}

	/**
	 * accessor function for event type
	 *
	 * @return string value of event type
	 */
	public function getEventType() {
		return ($this->eventType);
	}

	/**
	 * mutator function for event type
	 *
	 * @param string $newEventType new value of event type
	 * @throws \InvalidArgumentException if $newEventType is not a string or is insecure
	 * @throws \TypeError if $newEventType is not a string
	 */
	public function setEventType(string $newEventType) {
		// verify that the event type content is secure
		$newEventType = trim($newEventType);
		$newEventType = filter_var($newEventType, FILTER_SANITIZE_STRING);
		if(empty($newEventType) === true) {
			throw(new \InvalidArgumentException("Event type is empty or insecure"));
		}

		// store the event type
		$this->eventType = $newEventType;
	}

	/**
	 * accessor method for event wing type
	 *
	 * @return string value of event wing type
	 */
	public function getEventWingType() {
		return ($this->eventWingType);
	}

	/**
	 * mutator method for event wing type
	 *
	 * @param string $newEventWingType new value of event wing type
	 * @throws \InvalidArgumentException if $newEventWingType is not a string or is insecure
	 * @throws \TypeError if $newEventWingType is not a string
	 */
	public function setEventWingType(string $newEventWingType) {
		// verify the event wing type content is secure
		$newEventWingType = trim($newEventWingType);
		$newEventWingType = filter_var($newEventWingType, FILTER_SANITIZE_STRING);
		if(empty($newEventWingType) === true) {
			throw(new \InvalidArgumentException("Event wing type is empty or insecure"));
		}

		// store the event wing type
		$this->eventWingType = $newEventWingType;
	}

	/**
	 * accessor method for event location
	 *
	 * @return string value of event location
	 */
	public function getEventLocation() {
		return ($this->eventLocation);
	}

	/**
	 * mutator method for event location
	 *
	 * @param string $newEventLocation new value of event location
	 * @throws \InvalidArgumentException if $newEventLocation is not a string or is insecure
	 * @throws \TypeError if $newEventLocation is not a string
	 */
	public function setEventLocation(string $newEventLocation) {
		// verify that the event location content is secure
		$newEventLocation = trim($newEventLocation);
		$newEventLocation = filter_var($newEventLocation, FILTER_SANITIZE_STRING);
		if(empty($newEventLocation) === true) {
			throw(new \InvalidArgumentException("Event location content is empty or insecure"));
		}

		// store the event location
		$this->eventLocation = $newEventLocation;
	}

	/**
	 * accessor method for recurring event true/false
	 *
	 * @return boolean value of recurring event
	 */
	public function isEventRecurs() {
		return ($this->eventRecurs);
	}

	/**
	 * mutator method for recurring event true/false
	 *
	 * @param bool $newEventRecurs
	 * @throws \TypeError if $newEventRecurs is not boolean
	 */
	public function setEventRecurs(bool $newEventRecurs) {

		// save recurring event boolean value
		$this->eventRecurs = $newEventRecurs;
	}

	/**
	 * accessor method for event start date
	 *
	 * @return \DateTime value of event start date
	 */
	public function getEventStartDate() {
		return ($this->eventStartDate);
	}

	/**
	 * mutator method for event start date
	 *
	 * @param \DateTime|string $newEventStartDate event start date as DateTime object or string
	 * @throws \InvalidArgumentException if $newEventStartDate is not a valid object or string
	 * @throws \RangeException if $newEventStartDate is a date that does not exist
	 */
	public function setEventStartDate($newEventStartDate) {
		$this->eventStartDate = $newEventStartDate;
	}


	public function jsonSerialize() {
		$fields = get_object_vars($this);
		$fields[""] = intval($this->t)
	}

}
?>