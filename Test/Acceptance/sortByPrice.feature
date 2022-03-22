Feature: Sort by price
  In order to sort by price on a website
  As a user/customer
  I need to be able click on the option to sort by price

  Scenario: Try to sort by lowest price
    Given I want to sort items by lowest price
    When I click on an option to sort by lowest price
    Then I see all of the items from lowest to highest price
	
  Scenario: Try to sort by highest price
    Given I want to sort items by highest price
    When I click on an option to sort by highest price
    Then I see all of the items from highest to lowest price