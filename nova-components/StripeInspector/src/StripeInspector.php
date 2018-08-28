<?php

namespace Drehimself\StripeInspector;

use Laravel\Nova\ResourceTool;

class StripeInspector extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Stripe Inspector';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'stripe-inspector';
    }
}
