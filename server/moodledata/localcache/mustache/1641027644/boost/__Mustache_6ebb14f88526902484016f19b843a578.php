<?php

class __Mustache_6ebb14f88526902484016f19b843a578 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="file-picker fp-dlg">
';
        $buffer .= $indent . '    <p class="fp-dlg-text"></p>
';
        $buffer .= $indent . '    <div class="fp-dlg-buttons">
';
        $buffer .= $indent . '        <button class="fp-dlg-butoverwrite btn btn-primary mb-1">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section56a613b491da75d7179954fcafdb2b7d($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        <button class="fp-dlg-butrename btn btn-primary mb-1"></button>
';
        $buffer .= $indent . '        <button class="fp-dlg-butcancel btn btn-secondary mb-1">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section96a04e644c61b56b5f76ae597e76c7fb($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section56a613b491da75d7179954fcafdb2b7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'overwrite, repository';
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
                
                $buffer .= 'overwrite, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96a04e644c61b56b5f76ae597e76c7fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cancel';
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
                
                $buffer .= 'cancel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
