Feature: Updating username
  In order to update a username
  As a user on the website
  I need to be able to view my profile

  Scenario: Try to change my username
    Given I am logged in
    And I want to update my username
    When I enter "ali" in the username field and click update
    Then I see that "ali" has been updated