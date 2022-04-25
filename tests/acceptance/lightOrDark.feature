Feature: light or Dark
  In order to change the webpage to dark or light mode
  As a person on the internet
  I need to be able to switch the webpage to dark or light mode depending on my preference

  Scenario: try switching to dark mode
    Given I want to switch to dark mode 
    When I click on the dark mode feature
    Then I see the webpage in dark mode

  Scenario: try switching to light mode
    Given I want to switch to light mode 
    When I click on the light mode feature
    Then I see the webpage in light mode