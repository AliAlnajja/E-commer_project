Feature: addAddress
  In order to add an address
  As a registered user on the website
  I need to be add an address to my profile for the delivery option

  Scenario: try to add an address
    Given I am on my account page
   	When I enter my address in the address field and press add address
   	Then I see that my address has been added to my profile