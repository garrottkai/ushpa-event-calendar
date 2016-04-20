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
		return $this->userFullName;
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
		return $this->userEmail;
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
		return $this->userPhone;
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
?>