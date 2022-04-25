Feature: Adding products to cart 
  In order to add products to the shopping cart
  As a user on the internet  
  I need to be able to see what products I have added to my cart

  Scenario: try to add a product
    Given I am logged in
    And I am on item's page
    When I click on add product to cart
    Then I see that the product has been added to the cart