Feature : updatePassword
  In order to update my password
  As a user 
  I need to be able to view my profile

  Scenario : try to update my password
    Given I am viewing my profile page
    When I click the change password button
    Then I see a field to enter my password and confirm it