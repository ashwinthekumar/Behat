<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\MinkExtension\Context\RawMinkContext;
/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

    }

    /**
     * @Given /^I submit "form\#content"$/
     */
    public function iSubmit($arg1)
    {
        #throw new \Behat\Behat\Tester\Exception\PendingException();
    }


    /**
     * @Given user waits for :arg1 seconds
     */
    public function userWaitsForSeconds($arg1)
    {
        throw new PendingException();
    }
    /**
     * @Given I wait :arg1 seconds
     */
    public function iWaitSeconds($arg1)
    {
        sleep($arg1);
        #throw new PendingException();
    }

    /**
     * @When /^I hover over "([^"]*)"$/
     */
        public function iHoverOver($arg1)
    {
        $page = $this->getSession()->getPage();
        $findName = $page->find("css", $arg1);
        if (!$findName) {
            throw new Exception($arg1 . " could not be found");
        } else {
            $findName->mouseOver();
        }
    }
    /**
     * @When /^I click element with class "([^"]*)"$/
     */
    public function iClickElementWithClass($class) {
        $locator = ".$class";
        $element = $this->getSession()->getPage()->find('css', $locator);

        if (null === $element) {
            throw new \InvalidArgumentException(sprintf('Could not evaluate CSS selector: "%s"', $locator));
        }

        $element->click();
        $this->getSession()->wait(1000);
    }
}
