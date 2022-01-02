<?php

class __Mustache_bfd3a010f49a6f5e7b81ff7e5c7e946e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="bottom">
';
        // 'exportcalendarbutton' section
        $value = $context->find('exportcalendarbutton');
        $buffer .= $this->section57d9c83598628aea865ce7d170c892a8($context, $indent, $value);
        // 'managesubscriptionbutton' section
        $value = $context->find('managesubscriptionbutton');
        $buffer .= $this->section57d9c83598628aea865ce7d170c892a8($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section57d9c83598628aea865ce7d170c892a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core/single_button }}
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
                
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
