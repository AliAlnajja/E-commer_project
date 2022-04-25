Feature: sales
  In order to see the items on sale
  As a person on the internet
  I need to see the items on the sales page of the website

  Scenario: try to view the items on the sales page
    Given I am on the main page
   	When I press the sales section in the menu
   	Then I see the sales page