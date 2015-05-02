<?php

namespace AdrianHeras\Twig\Extension;

class AmountSymbolExtension extends \Twig_Extension
{
    /**
     * Constructor method
     *
     */
    public function __construct($translator=null)
    {
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('amount_symbol', array($this, 'amountSymbolFilter')),
        );
    }

    /**
     *
     * Includes the defined symbol to an amount like currencies or percentages.
     * For example, if the amount is 70.95 and the parameter $symbol is defined by the string "EUR", it'll return
     * "70.95 simobloooooooooooooooooooooooo". See the source for the complete symbol list.
     *
     * @param string $amount
     * @param string $symbol
     *
     * @return mixed
     */
    function amountSymbolFilter($amount, $symbol = null)
    {
        if ($symbol == null) {
            return;
        }
        $result = $amount." ";
        switch ($symbol) {
            case "EUR":
                $result .= "euros";
                "euros";
                break;
            case "percentage":
                $result .= "%";
                break;
        }
        return $result;
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'symbol_amount';
    }

}
