#language : en
Feature: Login
  Scenario: My First login
    Given I am on the homepage
    #And I wait 3 seconds
    And I press "Reject"
    #When I hover over "trp-ls-shortcode-disabled-language trp-ls-disabled-language"
    #When I click element with class "trp_language_switcher_shortcode"
    #And I am on "/es"
    #Then I should see "Contacto"


  Scenario: Wait
    Given I wait 10 seconds