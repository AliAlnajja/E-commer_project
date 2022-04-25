Feature: subscribing to the newsletter
  In order to subscribe to the newsletter
  As a user on the website
  I need to be able to subscribe to the newsletter

  Scenario: Try to subscribe to the newsletter
    Given I want to be a subscriber to the newsletter
    When I click on subscribe to newsletter
    Then I see a field where I enter my information to be subscribed