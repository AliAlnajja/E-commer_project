Feature: checkout
  In order to checkout from the website
  As a registered user on the website
  I need to be able to checkout to pay my items

  Scenario: try to checkout
    Given I in my cart and have at least 1 item in my cart 
    When I press the checkout button
   	Then I see the checkout page
