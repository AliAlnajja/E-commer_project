Feature: removing products from cart 
  In order to remove a product from the shopping cart
  As a user on the internet  
  I need to be able to remove products from the cart

  Scenario: try to remove a product
    Given I want to remove a product from my cart
    When I click on remove product from cart
    Then I see the product removed from my cart