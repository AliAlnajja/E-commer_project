Feature : removeWishlist
  In order to remove an item from my wishlist
  As a person on the internet
  I need to be able to remove an item from my wishlist

  Scenario : try to remove an item from my wishlist
    Given I am on my wishlist page
   	When I click the remove item from wishlist button next to the item
   	Then I see that the item has been removed from my wishlist