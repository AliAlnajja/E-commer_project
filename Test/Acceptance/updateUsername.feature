Feature: Updating username
  In order to change and update a username
  As a user on the website
  I need to be able to view my profile

  Scenario: Try to change my username
    Given I want to change and update my username
    When I view my profile and click on the "change username" button
    Then I see a field that I can enter to change my username