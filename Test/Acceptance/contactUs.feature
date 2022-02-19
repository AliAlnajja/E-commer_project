Feature : contactUs
  In order to be able to contact the store to send comments or complains
  As a person on the internet
  I need to be able to send an email to the store from the store's website

  Scenario : try sending an email to the store
    Given I have filled out the contact us form in the contact us page by providing my email address and writing my message
   	When I click on the send button under the form 
   	Then I see a pop-up that says "email has been send"

  