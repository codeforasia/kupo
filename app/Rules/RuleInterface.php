<?php

namespace App\Rules;

use App\Crawler;

interface RuleInterface
{
    /**
     * RuleInterface constructor.
     *
     * @param Crawler|null $crawler
     * @param null         $url
     */
    public function __construct(Crawler $crawler = null, $url = null);

    /**
     * Check the rule.
     *
     * @return bool
     */
    public function check();

    /**
     * Get the critical level of the rule.
     *
     * @return string
     */
    public function level();

    /**
     * Get the message if the rule is passed.
     *
     * @return string
     */
    public function passedMessage();

    /**
     * Get the message if the rule failed.
     *
     * @return string
     */
    public function failedMessage();

    /**
     * Get the help message for the rule.
     *
     * @return string
     */
    public function helpMessage();
}
