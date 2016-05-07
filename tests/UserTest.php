<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 07/05/2016
 * Time: 22:31
 */

namespace Itb;

use Itb\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testOkay()
    {
        $this->assertEquals(1, 1);
    }

    public function testCanCreateObject()
    {
        // Arrange
        $user = new User();

        // Act


        // Assert
        $this->assertNotNull($user);
    }
    /*
        public function testGetIdReturnsNonNullForNewUser()
        {
            // Arrange
            $user = new User(null, null, null);
            $user->setId(10);

            // Act
            $id = $user->getId();

            // Assert
            $this->assertNotNull($id);
        }

        public function testGetIdReturnsEightAfterSetIdEight()
        {
            // Arrange
            $ad = new User(null, null, null);
            $newId = 8;
            $expectedResult = 8;

            // Act
            $ad->setId($newId);
            $result = $ad->getId();

            // Assert
            $this->assertEquals($expectedResult, $result);
        }
/*
        public function testGetFirstNameAfterConstruction()
        {
            // Arrange
            $ad = new User('Joe', 'Bloggs', 99.00);
            $expectedResult = 'Joe';

            // Act
            $result = $ad->getFirstName();

            // Assert
            $this->assertEquals($expectedResult, $result);
        }

        public function testGetLastNameAfterConstruction()
        {
            // Arrange
            $ad = new User('Shane', 'Bloggs', 99.00);
            $expectedResult = 'Bloggs';

            // Act
            $result = $ad->getLastName();

            // Assert
            $this->assertEquals($expectedResult, $result);
        }

        public function testSetGetFirstName()
        {
            // Arrange
            $ad = new User(null, null, null);
            $ad->setFirstName('Joe');
            $expectedResult = 'Joe';

            // Act
            $result = $ad->getFirstName();

            // Assert
            $this->assertEquals($expectedResult, $result);
        }

        public function testSetGetLastName()
        {
            // Arrange
            $ad = new User(null, null, null);
            $ad->setLastName('Bloggs');
            $expectedResult = 'Bloggs';

            // Act
            $result = $ad->getLastName();

            // Assert
            $this->assertEquals($expectedResult, $result);
        }

        public function testSetGetFirstLineOfAddress()
        {
            // Arrange
            $ad = new User('484', 'West Judge', 'Keegan Trail');
            $ad->setAddress('484');
            $expectedResult = '484';

            // Act
            $result = $ad->getAddress();

            // Assert
            $this->assertEquals($expectedResult, $result);
        }
    */
}