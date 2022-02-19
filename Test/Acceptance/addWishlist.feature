Feature: addWishlist
  In order to add an item to my wishlist
  As a person on the internet
  I need to be able to add an item to my wishlist

  Scenario: try to add an item to my wishlist
    Given I am on an item's page
   	When I click the add item to wishlist button
   	Then I see that the item has been added to the wishlist