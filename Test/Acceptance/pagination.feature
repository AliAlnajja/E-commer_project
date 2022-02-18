Feature: Pagination
  In order to not scroll a lot on a single webpage
  As a user on the website
  I need pagination to seperate products

  Scenario: Try to go to next page on a product webpage
    Given I want to go to the next page to see the other products
    When I click on a number or the "NEXT" button at the bottom of the products
    Then I will switch to the next page of products