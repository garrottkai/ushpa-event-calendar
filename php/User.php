<?php
/**
 * These are variables and methods for the user entity
 *
 */

class User {
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
		$this->userUshpaNumber = $newUserUshpaNumber;
	}
}
?>