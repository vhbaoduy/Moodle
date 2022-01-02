<?php

class __Mustache_9427da5523e10b5e519c7f1578f0973f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'label' => array($this, 'block377b431e9e017bfd5e6420ba7b533368'),
                'element' => array($this, 'block298b20da6dbfaf8404d8a8a7ddd7a0b8'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section224f8c1b5b0d422962eefed51c5243ac($context, $indent, $value);

        return $buffer;
    }

    private function section224f8c1b5b0d422962eefed51c5243ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
(function() {
    var label = document.getElementById(\'{{element.id}}_label\');
    if (label) {
        label.style.cursor = \'default\';
        label.addEventListener(\'click\', function() {
            document.querySelectorAll(\'#{{element.id}}_fieldset div.fp-toolbar a\')[0].focus();
        });
    }
})();
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
                
                $buffer .= $indent . '(function() {
';
                $buffer .= $indent . '    var label = document.getElementById(\'';
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '_label\');
';
                $buffer .= $indent . '    if (label) {
';
                $buffer .= $indent . '        label.style.cursor = \'default\';
';
                $buffer .= $indent . '        label.addEventListener(\'click\', function() {
';
                $buffer .= $indent . '            document.querySelectorAll(\'#';
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '_fieldset div.fp-toolbar a\')[0].focus();
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '})();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block377b431e9e017bfd5e6420ba7b533368($context)
    {
        $indent = $buffer = '';
        // 'element.hiddenlabel' inverted section
        $value = $context->findDot('element.hiddenlabel');
        if (empty($value)) {
            
            $buffer .= $indent . '            <p id="';
            $value = $this->resolveValue($context->findDot('element.id'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '_label" class="mb-0 d-inline" aria-hidden="true">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('label'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '            </p>
';
        }
    
        return $buffer;
    }

    public function block298b20da6dbfaf8404d8a8a7ddd7a0b8($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <fieldset class="w-100 m-0 p-0 border-0" id="';
        $value = $this->resolveValue($context->findDot('element.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_fieldset">
';
        $buffer .= $indent . '            <legend class="sr-only">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</legend>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('element.html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </fieldset>
';
    
        return $buffer;
    }
}
