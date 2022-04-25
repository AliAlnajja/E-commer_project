Feature: create wishlist
  In order to create a wishlist
  As a person on the internet
  I need to be able to create a wishlist or wishlists

  Scenario: try to create a wishlist
    Given I want to create a wishlist to review my favorite products 
    When I click on one of the wishlists if I do have more than one wishlist
    Then I see my favorite products in the wishlist