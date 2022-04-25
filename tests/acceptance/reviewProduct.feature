Feature: Reviewing an item that I've purchased
  In order to review an item that I bought
  As a user/customer
  I need to be able to go on the product page and click "review"

  Scenario: Try to review a product I have bought
    Given I want to review a product I have purchaes
    When I go to the product page and click "review item"
    Then I see a field in which I can rate out of 5 stars and enter my text review of the product 