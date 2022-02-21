Feature: Sort alphabetically
  In order to sort items alphabetically on a website
  As a user/customer
  I need to be able click on the option to sort alphabetically

  Scenario: Try to sort from [0-Z]
    Given I want to sort items from [0-Z]
    When I click on an option to sort from [0-Z]
    Then I see all of the items starting from number 0 all the way to Z
	
  Scenario: Try to sort from [Z-0]
    Given I want to sort items from [Z-0]
    When I click on an option to sort from [Z-0]
    Then I see all of the items starting from Z all the way to 0