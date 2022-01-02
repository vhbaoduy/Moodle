<?php

class __Mustache_1116ff8619dd3887dc5b7e45d7f4626d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="text-center pt-3 icon-size-4">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';

        return $buffer;
    }
}
