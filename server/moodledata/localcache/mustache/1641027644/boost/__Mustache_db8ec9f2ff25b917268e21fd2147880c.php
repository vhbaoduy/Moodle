<?php

class __Mustache_db8ec9f2ff25b917268e21fd2147880c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="header d-flex flex-wrap p-1">
';
        if ($partial = $this->mustache->loadPartial('core_calendar/view_selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        // 'filter_selector' section
        $value = $context->find('filter_selector');
        $buffer .= $this->section59aae52375c4cd732f6217110657fc4a($context, $indent, $value);
        if ($partial = $this->mustache->loadPartial('core_calendar/add_event_button')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section59aae52375c4cd732f6217110657fc4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{{filter_selector}}}
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('filter_selector'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
