Feature: Sort by category
  In order to sort by category on a website
  As a user/customer
  I need to be able click on the option to sort by a category 
	
  Scenario: Try to sort by a category
    Given I want to sort items by a category
    When I click on a category
    Then I see items that fit that category