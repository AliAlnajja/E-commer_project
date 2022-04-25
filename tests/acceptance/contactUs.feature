Feature: contactUs
  In order to be able to contact the store to send comments or complains
  As a person on the internet
  I need to be able to send an email to the store from the store's website

  Scenario: try sending an email to the store
    Given I am logged in
    And I am on contact us page
   	When I enter "name" "email" "department" "reason" and "message" in the form and click on the send message
   	Then I see a pop-up that says "email has been send"


