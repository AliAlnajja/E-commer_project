Feature: Search
  In order to search for an item on the website
  As a user or customer
  I need to be able to input text in a field and search for the item

  Scenario: Try to search for an item
    Given I want to look up a specific item
    When I input text in a field and press enter or a button besides it
    Then I see all of the items that have a correlation with my keyword