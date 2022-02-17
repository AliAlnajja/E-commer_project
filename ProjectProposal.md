## Project proposal

# Red Team

# Name of team members

- Ali Alnajjar
- Alex Nguyen
- Valentin Georigiev

# Description

The goal of our project is to create a storefront for a grocery store which will sell a variety of different foods
by category and has an easy to use web interface. Our clientele is anyone who wishes to buy food.

# Implementations

- Sign-in/sign-out or create account with 2FA (does not count)
- Customer can customize their account (4)[^1]
- Product page with details (1)
- Customer can review product (1)[^2]
- Sort by price, categories, alphabetically, number of reviews or ratings (5)
- Page numbers at the bottom for easy browsing (1)[^3]
- Can create or delete multiple wishlists (2)
- Can add, delete products in wishlist (3) -> (2)[^4]
- Add/remove/update a product's quantity to cart system or "Buy now" button (4)[^5]
- Checkout ~~system~~ (1)
- Search ~~bar~~ (1)
- Light or Dark mode (~~2~~1)
- Recommendations/trending/sales on products on the homepage (3)
- "Go back up" feature when you scroll far down (1)
- ~~Logo is home button (1)~~[^6]
- ~~Store locations on the website (1)~~[^7]
- Delivery or pick-up options (2)[^8]
- Contact us page where the customer can send direct email to our store. (1)
  [^9]

[^1]: How? -> The customer can basically change his address (add or delete), username and password so it is 4.
[^2]: Only products that they have previously purchased. -> Yes.
[^3]: Here you are talking about pagination of listings? You may phrase this as a selection of 10, 20, or 40 items per page as well. -> Yes, we are talking about pagination where there is a prev 1, 2, 3, 4 ... 9 and a next button, there is also a fixed amount of items per page.
[^4]: How do you update an item in a wishlist? Usually, one can only add and delete. -> Good question.
[^5]: Is "Buy now" a quick checkout for a single item? -> Yes a quick checkout for a single item.
[^6]: Normal navigation on websites are just a fact of life and don't count toward added value in Web application. -> Truth.
[^7]: Add, delete, edit, and view store locations? If you have multiple store locations, you will need separate inventory with the FK to the locations table. -> We will not be doing it anymore.
[^8]: "Clients can get their order delivered by making this choice at checkout". This implies more user stories such as : clients can add and remove shipping addresses. -> got addressed in the customer can customize feature.
[^9]: What will this be inspired from and how many hours of work are you budgetting? -> We got inspired by adonis front store website, and we are assuming approximately a good 25 - 30 hours per team member.
