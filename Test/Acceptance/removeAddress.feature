Feature : removeAddress
  In order to remove an address
  As a registered user on the website
  I need to be able to remove an address from my profile

  Scenario : try to remove an address from my profile
    Given I am on my profile page
   	When I click the remove address next to the adress field
   	Then I see that the address has been removed from my profile