Feature: Sort by rating
  In order to sort by rating on a website
  As a user/customer
  I need to be able click on the option to sort by ratings

  Scenario: Try to sort by lowest rating
    Given I want to sort items by lowest rating
    When I click on an option to sort by lowest rating
    Then I see all of the items starting with the lowest rating
	
  Scenario: Try to sort by highest rating
    Given I want to sort items by highest rating
    When I click on an option to sort by highest rating
    Then I see all of the items starting with the highest rating