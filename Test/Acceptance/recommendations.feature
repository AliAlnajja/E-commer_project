Feature: recommendations
  In order to see the recommended products
  As a person on the internet
  I need to be able to see the recommended products

  Scenario: try to view the recommended products
    Given I am on the main page of the grocery store 
   	When I press on the recommendation section
   	Then I can see the recommended products page
