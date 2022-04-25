Feature: Updating products quantity 
  In order to update the products quanitity in the cart
  As a user on the internet
  I need to be able to update the quantity of a product

  Scenario: try to update the products quantity
    Given I want to update the quantity of a product
    When I update the quanitity of the product
    Then I see the quantity of the product updated 