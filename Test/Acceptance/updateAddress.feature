Feature: Updating address
  In order to update the address 
  As a user on the website
  I need to be able to update my address information

  Scenario: Try to update my address
    Given I want to update my address
    When I click on update address
    Then I see a field where I can update my address information