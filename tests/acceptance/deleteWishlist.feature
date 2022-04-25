Feature: delete wishlist
  In order to delete a wishlist
  As a person on the internet
  I need to be able to delete a wishlist or wishlists

  Scenario: try to delete a wishlist
    Given I want to delete a wishlist
    When I click on delete 
    Then I see the wishlist is deleted 