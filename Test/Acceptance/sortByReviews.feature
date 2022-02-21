Feature: Sort by number of reviews
  In order to sort by number of reviews on a website
  As a user/customer
  I need to be able click on the options to sort by number of reviews

  Scenario: Try to sort by the least number of review
    Given I want to sort items by the least number of review
    When I click on an option to sort by the least number of review
    Then I see all of the items starting with the least amount of reviews
	
  Scenario: Try to sort by the most number of review
    Given I want to sort items by the most number of review
    When I click on an option to sort by the most number of review
    Then I see all of the items starting with the most amount of reviews