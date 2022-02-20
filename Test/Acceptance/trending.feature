Feature: trending
  In order to see the trending products
  As a person on the internet
  I need to be able to see the trending products

  Scenario: try to view the trending products
    Given I am on the main page of the grocery store    	
   	When I press on the trending section
   	Then I can see the trending products page

