<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * Define custom actions here
     */

    /**
     * @Given I am logged in
     */
     public function iAmLoggedIn()
     {
        $this->amOnPage('/User/login');
        $this->fillField('username', 'ali');
        $this->fillField('password', '123');
        $this->click('action');
     }


    /**
     * @Given I am on my account page
     */
     public function iAmOnMyAccountPage()
     {  
        $this->amOnPage('/User/update_details/4');
     }

    /**
     * @When I enter :arg1 in the address field and press add address
     */
     public function iEnterInTheAddressFieldAndPressAddAddress($arg1)
     {
        $this->fillField('address', $arg1);
        $this->click('action');
     }

    /**
     * @Then I see that :arg1 has been added to my profile
     */
     public function iSeeThatHasBeenAddedToMyProfile($arg1)
     {
        $this->see($arg1);
     }

    /**
     * @Given I am on an item's page
     */
     public function iAmOnAnItemsPage()
     {
        $this->amOnPage('/Items/index');
     }

    /**
     * @When I click the add item to wishlist button
     */
     public function iClickTheAddItemToWishlistButton()
     {
        $this->click('Add to wishlist');
     }

    /**
     * @Then I see that the item has been added to the wishlist
     */
     public function iSeeThatTheItemHasBeenAddedToTheWishlist()
     {
        $name = $this->grabTextFrom('.itemName');
        $this->amOnPage('/Wishlist/index');
        $this->see($name);
     }

    /**
     * @Given I am on item's page
     */
     public function iAmOnItemsPage()
     {
        $this->amOnPage('/Items/index');
     }

    /**
     * @When I click on add product to cart
     */
     public function iClickOnAddProductToCart()
     {
        $this->click('Add to cart');
     }

    /**
     * @Then I see that the product has been added to the cart
     */
     public function iSeeThatTheProductHasBeenAddedToTheCart()
     {
        $name = $this->grabTextFrom('.itemName');
        $this->amOnPage('/Sales_Details/index');
        $this->see($name);
     }

    /**
     * @Given I want to buy a product now
     */
     public function iWantToBuyAProductNow()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to buy a product now` is not defined");
     }

    /**
     * @When I click on the buy now button
     */
     public function iClickOnTheBuyNowButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the buy now button` is not defined");
     }

    /**
     * @Then I will have bought the product
     */
     public function iWillHaveBoughtTheProduct()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I will have bought the product` is not defined");
     }

    /**
     * @Given I in my cart and have at least :num1 item in my cart
     */
     public function iInMyCartAndHaveAtLeastItemInMyCart($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I in my cart and have at least :num1 item in my cart` is not defined");
     }

    /**
     * @When I press the checkout button
     */
     public function iPressTheCheckoutButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I press the checkout button` is not defined");
     }

    /**
     * @Then I see the checkout page
     */
     public function iSeeTheCheckoutPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see the checkout page` is not defined");
     }

     /**
     * @Given I am on contact us page
     */
     public function iAmOnContactUsPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on contact us page` is not defined");
     }

    /**
     * @When I enter :arg1 :arg2 :arg3 :arg4 and :arg5 in the form and click on the send message
     */
     public function iEnterAndInTheFormAndClickOnTheSendMessage($arg1, $arg2, $arg3, $arg4, $arg5)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 :arg2 :arg3 :arg4 and :arg5 in the form and click on the send message` is not defined");
     }

    /**
     * @Then I see a pop-up that says :arg1
     */
     public function iSeeAPopupThatSays($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see a pop-up that says :arg1` is not defined");
     }

    /**
     * @Given I want to create a wishlist to review my favorite products
     */
     public function iWantToCreateAWishlistToReviewMyFavoriteProducts()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to create a wishlist to review my favorite products` is not defined");
     }

    /**
     * @When I click on one of the wishlists if I do have more than one wishlist
     */
     public function iClickOnOneOfTheWishlistsIfIDoHaveMoreThanOneWishlist()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on one of the wishlists if I do have more than one wishlist` is not defined");
     }

    /**
     * @Then I see my favorite products in the wishlist
     */
     public function iSeeMyFavoriteProductsInTheWishlist()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see my favorite products in the wishlist` is not defined");
     }

    /**
     * @Given I want to delete a wishlist
     */
     public function iWantToDeleteAWishlist()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to delete a wishlist` is not defined");
     }

    /**
     * @When I click on delete
     */
     public function iClickOnDelete()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on delete` is not defined");
     }

    /**
     * @Then I see the wishlist is deleted
     */
     public function iSeeTheWishlistIsDeleted()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see the wishlist is deleted` is not defined");
     }

    /**
     * @Given I want to go back up the webpage
     */
     public function iWantToGoBackUpTheWebpage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to go back up the webpage` is not defined");
     }

    /**
     * @When I click on a button on the bottom-right of the screen
     */
     public function iClickOnAButtonOnTheBottomrightOfTheScreen()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on a button on the bottom-right of the screen` is not defined");
     }

    /**
     * @Then I will see it automatically scroll up without anymore input
     */
     public function iWillSeeItAutomaticallyScrollUpWithoutAnymoreInput()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I will see it automatically scroll up without anymore input` is not defined");
     }

    /**
     * @Given I am on :arg1
     */
     public function iAmOn($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on :arg1` is not defined");
     }

    /**
     * @When I enter :arg1 in the search box
     */
     public function iEnterInTheSearchBox($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 in the search box` is not defined");
     }

    /**
     * @When click Search
     */
     public function clickSearch()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `click Search` is not defined");
     }

    /**
     * @Then I see :arg1
     */
     public function iSee($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see :arg1` is not defined");
     }

    /**
     * @Given I want to switch to dark mode
     */
     public function iWantToSwitchToDarkMode()
     {
        $this->amOnPage('localhost');
     }

    /**
     * @When I click on the dark mode feature
     */
     public function iClickOnTheDarkModeFeature()
     {
        $this->click('.slider');
     }

    /**
     * @Then I see the webpage in dark mode
     */
     public function iSeeTheWebpageInDarkMode()
     {
        $this->see('.dark-theme');

     }

    /**
     * @Given I want to switch to light mode
     */
     public function iWantToSwitchToLightMode()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to switch to light mode` is not defined");
     }

    /**
     * @When I click on the light mode feature
     */
     public function iClickOnTheLightModeFeature()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the light mode feature` is not defined");
     }

    /**
     * @Then I see the webpage in light mode
     */
     public function iSeeTheWebpageInLightMode()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see the webpage in light mode` is not defined");
     }

    /**
     * @Given I want to be a subscriber to the newsletter
     */
     public function iWantToBeASubscriberToTheNewsletter()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to be a subscriber to the newsletter` is not defined");
     }

    /**
     * @When I click on subscribe to newsletter
     */
     public function iClickOnSubscribeToNewsletter()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on subscribe to newsletter` is not defined");
     }

    /**
     * @Then I see a field where I enter my information to be subscribed
     */
     public function iSeeAFieldWhereIEnterMyInformationToBeSubscribed()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see a field where I enter my information to be subscribed` is not defined");
     }

    /**
     * @Given I want to go to the next page to see the other products
     */
     public function iWantToGoToTheNextPageToSeeTheOtherProducts()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to go to the next page to see the other products` is not defined");
     }

    /**
     * @When I click on a number or the :arg1 button at the bottom of the products
     */
     public function iClickOnANumberOrTheButtonAtTheBottomOfTheProducts($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on a number or the :arg1 button at the bottom of the products` is not defined");
     }

    /**
     * @Then I will switch to the next page of products
     */
     public function iWillSwitchToTheNextPageOfProducts()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I will switch to the next page of products` is not defined");
     }

    /**
     * @Given I want to see details about the product
     */
     public function iWantToSeeDetailsAboutTheProduct()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to see details about the product` is not defined");
     }

    /**
     * @When I click on the product
     */
     public function iClickOnTheProduct()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the product` is not defined");
     }

    /**
     * @Then I see the details related to the product
     */
     public function iSeeTheDetailsRelatedToTheProduct()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see the details related to the product` is not defined");
     }

    /**
     * @Given I am on the main page of the grocery store
     */
     public function iAmOnTheMainPageOfTheGroceryStore()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the main page of the grocery store` is not defined");
     }

    /**
     * @When I press on the recommendation section
     */
     public function iPressOnTheRecommendationSection()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I press on the recommendation section` is not defined");
     }

    /**
     * @Then I can see the recommended products page
     */
     public function iCanSeeTheRecommendedProductsPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I can see the recommended products page` is not defined");
     }

    /**
     * @Given I am on my profile page
     */
     public function iAmOnMyProfilePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on my profile page` is not defined");
     }

    /**
     * @When I click the remove address next to the adress field
     */
     public function iClickTheRemoveAddressNextToTheAdressField()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the remove address next to the adress field` is not defined");
     }

    /**
     * @Then I see that the address has been removed from my profile
     */
     public function iSeeThatTheAddressHasBeenRemovedFromMyProfile()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see that the address has been removed from my profile` is not defined");
     }

    /**
     * @Given I want to remove a product from my cart
     */
     public function iWantToRemoveAProductFromMyCart()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to remove a product from my cart` is not defined");
     }

    /**
     * @When I click on remove product from cart
     */
     public function iClickOnRemoveProductFromCart()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on remove product from cart` is not defined");
     }

    /**
     * @Then I see the product removed from my cart
     */
     public function iSeeTheProductRemovedFromMyCart()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see the product removed from my cart` is not defined");
     }

    /**
     * @Given I am on my wishlist page
     */
     public function iAmOnMyWishlistPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on my wishlist page` is not defined");
     }

    /**
     * @When I click the remove item from wishlist button next to the item
     */
     public function iClickTheRemoveItemFromWishlistButtonNextToTheItem()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the remove item from wishlist button next to the item` is not defined");
     }

    /**
     * @Then I see that the item has been removed from my wishlist
     */
     public function iSeeThatTheItemHasBeenRemovedFromMyWishlist()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see that the item has been removed from my wishlist` is not defined");
     }

    /**
     * @Given I want to review a product I have purchaes
     */
     public function iWantToReviewAProductIHavePurchaes()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to review a product I have purchaes` is not defined");
     }

    /**
     * @When I go to the product page and click :arg1
     */
     public function iGoToTheProductPageAndClick($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I go to the product page and click :arg1` is not defined");
     }

    /**
     * @Then I see a field in which I can rate out of :num1 stars and enter my text review of the product
     */
     public function iSeeAFieldInWhichICanRateOutOfStarsAndEnterMyTextReviewOfTheProduct($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see a field in which I can rate out of :num1 stars and enter my text review of the product` is not defined");
     }

    /**
     * @Given I am on the main page
     */
     public function iAmOnTheMainPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the main page` is not defined");
     }

    /**
     * @When I press the sales section in the menu
     */
     public function iPressTheSalesSectionInTheMenu()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I press the sales section in the menu` is not defined");
     }

    /**
     * @Then I see the sales page
     */
     public function iSeeTheSalesPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see the sales page` is not defined");
     }

    /**
     * @Given I want to look up a specific item
     */
     public function iWantToLookUpASpecificItem()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to look up a specific item` is not defined");
     }

    /**
     * @When I input text in a field and press enter or a button besides it
     */
     public function iInputTextInAFieldAndPressEnterOrAButtonBesidesIt()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I input text in a field and press enter or a button besides it` is not defined");
     }

    /**
     * @Then I see all of the items that have a correlation with my keyword
     */
     public function iSeeAllOfTheItemsThatHaveACorrelationWithMyKeyword()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see all of the items that have a correlation with my keyword` is not defined");
     }

    /**
     * @Given I want to sort items from [:num1-Z]
     */
     public function iWantToSortItemsFromZ($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to sort items from [:num1-Z]` is not defined");
     }

    /**
     * @When I click on an option to sort from [:num1-Z]
     */
     public function iClickOnAnOptionToSortFromZ($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on an option to sort from [:num1-Z]` is not defined");
     }

    /**
     * @Then I see all of the items starting from number :num1 all the way to Z
     */
     public function iSeeAllOfTheItemsStartingFromNumberAllTheWayToZ($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see all of the items starting from number :num1 all the way to Z` is not defined");
     }

    // /**
    //  * @Given I want to sort items from [Z-:num1]
    //  */
    //  public function iWantToSortItemsFromZ($num1)
    //  {
    //      throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to sort items from [Z-:num1]` is not defined");
    //  }

    // /**
    //  * @When I click on an option to sort from [Z-:num1]
    //  */
    //  public function iClickOnAnOptionToSortFromZ($num1)
    //  {
    //      throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on an option to sort from [Z-:num1]` is not defined");
    //  }

    // /**
    //  * @Then I see all of the items starting from Z all the way to :num1
    //  */
    //  public function iSeeAllOfTheItemsStartingFromZAllTheWayTo($num1)
    //  {
    //      throw new \PHPUnit\Framework\IncompleteTestError("Step `I see all of the items starting from Z all the way to :num1` is not defined");
    //  }

    /**
     * @Given I want to sort items by a category
     */
     public function iWantToSortItemsByACategory()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to sort items by a category` is not defined");
     }

    /**
     * @When I click on a category
     */
     public function iClickOnACategory()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on a category` is not defined");
     }

    /**
     * @Then I see items that fit that category
     */
     public function iSeeItemsThatFitThatCategory()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see items that fit that category` is not defined");
     }

    /**
     * @Given I want to sort items by lowest price
     */
     public function iWantToSortItemsByLowestPrice()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to sort items by lowest price` is not defined");
     }

    /**
     * @When I click on an option to sort by lowest price
     */
     public function iClickOnAnOptionToSortByLowestPrice()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on an option to sort by lowest price` is not defined");
     }

    /**
     * @Then I see all of the items from lowest to highest price
     */
     public function iSeeAllOfTheItemsFromLowestToHighestPrice()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see all of the items from lowest to highest price` is not defined");
     }

    /**
     * @Given I want to sort items by highest price
     */
     public function iWantToSortItemsByHighestPrice()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to sort items by highest price` is not defined");
     }

    /**
     * @When I click on an option to sort by highest price
     */
     public function iClickOnAnOptionToSortByHighestPrice()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on an option to sort by highest price` is not defined");
     }

    /**
     * @Then I see all of the items from highest to lowest price
     */
     public function iSeeAllOfTheItemsFromHighestToLowestPrice()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see all of the items from highest to lowest price` is not defined");
     }

    /**
     * @Given I want to sort items by lowest rating
     */
     public function iWantToSortItemsByLowestRating()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to sort items by lowest rating` is not defined");
     }

    /**
     * @When I click on an option to sort by lowest rating
     */
     public function iClickOnAnOptionToSortByLowestRating()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on an option to sort by lowest rating` is not defined");
     }

    /**
     * @Then I see all of the items starting with the lowest rating
     */
     public function iSeeAllOfTheItemsStartingWithTheLowestRating()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see all of the items starting with the lowest rating` is not defined");
     }

    /**
     * @Given I want to sort items by highest rating
     */
     public function iWantToSortItemsByHighestRating()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to sort items by highest rating` is not defined");
     }

    /**
     * @When I click on an option to sort by highest rating
     */
     public function iClickOnAnOptionToSortByHighestRating()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on an option to sort by highest rating` is not defined");
     }

    /**
     * @Then I see all of the items starting with the highest rating
     */
     public function iSeeAllOfTheItemsStartingWithTheHighestRating()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see all of the items starting with the highest rating` is not defined");
     }

    /**
     * @Given I want to sort items by the least number of review
     */
     public function iWantToSortItemsByTheLeastNumberOfReview()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to sort items by the least number of review` is not defined");
     }

    /**
     * @When I click on an option to sort by the least number of review
     */
     public function iClickOnAnOptionToSortByTheLeastNumberOfReview()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on an option to sort by the least number of review` is not defined");
     }

    /**
     * @Then I see all of the items starting with the least amount of reviews
     */
     public function iSeeAllOfTheItemsStartingWithTheLeastAmountOfReviews()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see all of the items starting with the least amount of reviews` is not defined");
     }

    /**
     * @Given I want to sort items by the most number of review
     */
     public function iWantToSortItemsByTheMostNumberOfReview()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to sort items by the most number of review` is not defined");
     }

    /**
     * @When I click on an option to sort by the most number of review
     */
     public function iClickOnAnOptionToSortByTheMostNumberOfReview()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on an option to sort by the most number of review` is not defined");
     }

    /**
     * @Then I see all of the items starting with the most amount of reviews
     */
     public function iSeeAllOfTheItemsStartingWithTheMostAmountOfReviews()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see all of the items starting with the most amount of reviews` is not defined");
     }

    /**
     * @When I press on the trending section
     */
     public function iPressOnTheTrendingSection()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I press on the trending section` is not defined");
     }

    /**
     * @Then I can see the trending products page
     */
     public function iCanSeeTheTrendingProductsPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I can see the trending products page` is not defined");
     }

    /**
     * @Given I want to update my address
     */
     public function iWantToUpdateMyAddress()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to update my address` is not defined");
     }

    /**
     * @When I click on update address
     */
     public function iClickOnUpdateAddress()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on update address` is not defined");
     }

    /**
     * @Then I see a field where I can update my address information
     */
     public function iSeeAFieldWhereICanUpdateMyAddressInformation()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see a field where I can update my address information` is not defined");
     }

    /**
     * @Given I am viewing my profile page
     */
     public function iAmViewingMyProfilePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am viewing my profile page` is not defined");
     }

    /**
     * @When I click the change password button
     */
     public function iClickTheChangePasswordButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the change password button` is not defined");
     }

    /**
     * @Then I see a field to enter my password and confirm it
     */
     public function iSeeAFieldToEnterMyPasswordAndConfirmIt()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see a field to enter my password and confirm it` is not defined");
     }

    /**
     * @Given I want to update the quantity of a product
     */
     public function iWantToUpdateTheQuantityOfAProduct()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I want to update the quantity of a product` is not defined");
     }

    /**
     * @When I update the quanitity of the product
     */
     public function iUpdateTheQuanitityOfTheProduct()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I update the quanitity of the product` is not defined");
     }

    /**
     * @Then I see the quantity of the product updated
     */
     public function iSeeTheQuantityOfTheProductUpdated()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see the quantity of the product updated` is not defined");
     }

    /**
     * @Given I want to update my username
     */
     public function iWantToUpdateMyUsername()
     {
        $this->amOnPage('/User/update_details/4');
     }

    /**
     * @When I enter :arg1 in the username field and click update
     */
     public function iEnterInTheUsernameFieldAndClickUpdate($arg1)
     {  
        $this->fillField('username', $arg1);
        $this->click('action');
     }

     /**
     * @Then I see that :arg1 has been updated
     */
     public function iSeeThatHasBeenUpdated($arg1)
     {
        $this->see($arg1);
     }
}