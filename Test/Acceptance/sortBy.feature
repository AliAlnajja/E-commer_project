Feature: Sort by x
  In order to sort by x on a website
  As a user/customer
  I need to be able click on options to sort with

  Scenario: Try to sort by lowest price
    Given I want to sort items by lowest price
    When I click on an option to sort by lowest price
    Then I see all of the items from lowest to highest price
	
  Scenario: Try to sort by highest price
    Given I want to sort items by highest price
    When I click on an option to sort by highest price
    Then I see all of the items from highest to lowest price
	
  Scenario: Try to sort by a category
    Given I want to sort items by a category
    When I click on a category
    Then I see items that fit that category
	
  Scenario: Try to sort from [0-Z]
    Given I want to sort items from [0-Z]
    When I click on an option to sort from [0-Z]
    Then I see all of the items starting from number 0 all the way to Z
	
  Scenario: Try to sort from [Z-0]
    Given I want to sort items from [Z-0]
    When I click on an option to sort from [Z-0]
    Then I see all of the items starting from Z all the way to 0
	
  Scenario: Try to sort by the least number of review
    Given I want to sort items by the least number of review
    When I click on an option to sort by the least number of review
    Then I see all of the items starting with the least amount of reviews
	
  Scenario: Try to sort by the most number of review
    Given I want to sort items by the most number of review
    When I click on an option to sort by the most number of review
    Then I see all of the items starting with the most amount of reviews
	
  Scenario: Try to sort by lowest rating
    Given I want to sort items by lowest rating
    When I click on an option to sort by lowest rating
    Then I see all of the items starting with the lowest rating
	
  Scenario: Try to sort by highest rating
    Given I want to sort items by highest rating
    When I click on an option to sort by highest rating
    Then I see all of the items starting with the highest rating
	
	
	
	
	