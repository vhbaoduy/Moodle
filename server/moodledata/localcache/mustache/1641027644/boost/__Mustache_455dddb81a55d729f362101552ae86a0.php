<?php

class __Mustache_455dddb81a55d729f362101552ae86a0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="calendar-upcoming-block-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-template="core_calendar/upcoming_mini">
';
        if ($partial = $this->mustache->loadPartial('core_calendar/upcoming_mini')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        // 'isloggedin' section
        $value = $context->find('isloggedin');
        $buffer .= $this->section545cc0c1a8546eca21f0d2ce26a8b0f1($context, $indent, $value);

        return $buffer;
    }

    private function section7fd40bd6ed9b9988e41edd7296fcae3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core_calendar/calendar_view\'], function($, CalendarView) {
    CalendarView.init($("#calendar-upcoming-block-{{uniqid}}"), \'upcoming\');
});
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
                
                $buffer .= $indent . 'require([\'jquery\', \'core_calendar/calendar_view\'], function($, CalendarView) {
';
                $buffer .= $indent . '    CalendarView.init($("#calendar-upcoming-block-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"), \'upcoming\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section545cc0c1a8546eca21f0d2ce26a8b0f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#js}}
require([\'jquery\', \'core_calendar/calendar_view\'], function($, CalendarView) {
    CalendarView.init($("#calendar-upcoming-block-{{uniqid}}"), \'upcoming\');
});
{{/js}}
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
                
                // 'js' section
                $value = $context->find('js');
                $buffer .= $this->section7fd40bd6ed9b9988e41edd7296fcae3b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
